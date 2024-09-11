<?php

namespace App\Jobs;

use App\Events\TriggerEvent;
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
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $timeout = 60;
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
        $attributes = Attribute::all();
        //Product::truncate();

        foreach (ImportHelpers::getProductsIds() as $product_id) {

            $product = Product::create([
                'user_id' => ImportHelpers::getCurrentUserIdOrAbort(),
                'selected' => 1,
            ]);
            //log::debug('produit créé : '.$product->id);

            $variant_cnt = 0;
            foreach (ImportHelpers::getVariantsId($product_id) as $id)
            {
                $variant = Variant::create([
                    'user_id' => ImportHelpers::getCurrentUserIdOrAbort(),
                    'product_id' => $product->id
                ]);
                $variant_cnt++;
                //log::debug('variante créé : '.$variant->id);

                $product_fields = DB::table('product_bulk_import')
                    ->where('id','=',$id)
                    ->where('user_id','=',ImportHelpers::getCurrentUserIdOrAbort())
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
        }
    }
}
