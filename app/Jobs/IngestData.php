<?php

namespace App\Jobs;

use App\Events\IngestMessageEvent;
use App\Imports\ImportHelpers;
use App\Models\Attribute;
use App\Models\Product;
use App\Models\Variant;
use App\Models\VariantAttribute;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class IngestData implements ShouldQueue
{
    /**
     * This job is importing Bulkdata into product/variant table
     */

    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $timeout = 120;
    /**
     * Create a new job instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        set_time_limit(120);
        $attributes = Attribute::all();
        Product::truncate();
        IngestMessageEvent::dispatch('Base produit nettoyée avant import');

        $totalNb = ImportHelpers::getBulkProductCount();
        $currentIndex = 1;
        $current_user_id = ImportHelpers::getCurrentUserIdOrAbort();


        foreach (ImportHelpers::getProductsIds($current_user_id) as $bulkproduct_id) {

            // traitement du produit $bulkproduct_id

            IngestMessageEvent::dispatch('Produit '.$currentIndex.'/'.$totalNb);

            $product = Product::create([
                'user_id' => $current_user_id,
                'selected' => 1,
            ]);
            //log::debug('produit créé : '.$product->id);

            $variant_cnt = 0;
            foreach (ImportHelpers::getVariantsId($bulkproduct_id,$current_user_id) as $bulkvariant_id)
            {
                $variant = Variant::create([
                    'user_id' => $current_user_id,
                    'product_id' => $product->id
                ]);
                $variant_cnt++;
                //log::debug('variante créé : '.$variant->id);


                $product_fields = DB::table('product_bulk_import')
                    ->where('id','=',$bulkvariant_id)
                    ->first();

                foreach ($attributes as $attribute)
                {
                    if ($product_fields->{$attribute->name})
                    {
                        $value = $product_fields->{$attribute->name};
                        //log::debug('Ingest - From load :'.$attribute->name.' - '.$value);

                        $data = $attribute->getVariantAttributeValueData($value,$variant->id);
                        //log::debug($data);

                        $variantAttribute = VariantAttribute::create($data);
                        //log::debug('valeur attribut créé : '.$variantAttribute->id);

                        // alimentation des champs produit
                        if ($variant_cnt == 1)
                        {
                            switch ($attribute->name)
                            {
                                case 'name':
                                    $product->name = $value;
                                    break;
                                case 'season':
                                    $product->season = $value;
                                    break;
                                case 'brand':
                                    $product->brand = $value;
                                    break;
                                case 'category':
                                    $product->category = $value;
                                    break;
                            }
                            $product->save();
                        }

                    }

                }


            }

            $currentIndex++;
        }
        IngestMessageEvent::dispatch('Terminé');
    }

    public function wait()
    {
        $debut_script = microtime(true);
        $i = 0;
        $debut_boucle = null;
        while ($i < 6)
        {
            if (!$debut_boucle)
                $debut_boucle = microtime(true);
            if (microtime(true) - $debut_boucle >= 1)
            {
                // Instructions
                // ...
                IngestMessageEvent::dispatch('Process started '.(string)$i.' second ago');
                $i++;
                $debut_boucle = false;
            }
            usleep(10); // Pour éviter que la boucle ne fasse trop de tours pour rien
        }
        IngestMessageEvent::dispatch('Le script a duré '.(microtime(true) - $debut_script).' ('.$i.' boucles)');
    }
}
