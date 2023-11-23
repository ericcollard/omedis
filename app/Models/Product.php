<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'user_id',
    ];

    public static function boot()
    {
        parent::boot();
        static::deleting(function ($product) {
            foreach($product->variants as $variant) {
                $variant->delete();
            }
            foreach($product->odooProductValues as $odooProductValue) {
                $odooProductValue->delete();
            }
        });

    }

    public function variants(): HasMany
    {
        return $this->hasMany(Variant::class);
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function getVariantCount() {
        return $this->variants()->count();
    }

    public function odooProductValues(): HasMany
    {
        return $this->hasMany(OdooProductValue::class);
    }

    public function toString($summary = 0)
    {
        $html = "";
        $MainAttributes = Attribute::whereIn('name',['brand','season','name'])->get();
        foreach ($MainAttributes as $key => $MainAttribute)
        {
            $variantAttribute = $this->variants[0]->variantAttributes->where('attribute_id',$MainAttribute->id)->first();
            if (strlen($html) > 0)
                $html .= " - ";
            if ($variantAttribute)
                $html .=$variantAttribute->toString($summary);
        }
        return $html;
    }

    public function convert2odoo()
    {
        // Suppression des données déjà existantes
        foreach($this->odooProductValues as $odooProductValue) {
            $odooProductValue->delete();
        }

        $first_variant = $this->variants()->first();

        // partie product_template

        //Catégorie commerciale
        $attribute = Attribute::where('name', 'category')->first();
        $value = $first_variant->variantAttributes()->where('attribute_id',$attribute->id)->first()->getValue();
        if ($value)
        {
            if (key_exists('odoo_name',$value))
            {
                $odoo_categ_name = $value['odoo_name'];
                $odooModel = OdooModel::where('name', 'commercial_category')->first();
                $obj = OdooProductValue::create([
                    'product_id' => $this->id,
                    'odoo_model_id' => $odooModel->id,
                    'value' => $odoo_categ_name
                ])->save();
            }
        }

        //Référence interne
        if ($this->getVariantCount() == 1)
        {
            //Référence interne
            $attribute = Attribute::where('name', 'sku')->first();
            $valueObj = $first_variant->variantAttributes()->where('attribute_id',$attribute->id)->first();
            if ($valueObj)
            {
                $value = $valueObj->getValue();
                if ($value)
                {
                    $odooModel = OdooModel::where('name', 'product_internal_ref')->first();
                    $obj = OdooProductValue::create([
                        'product_id' => $this->id,
                        'odoo_model_id' => $odooModel->id,
                        'value' => $value
                    ])->save();
                }
            }

            //Code barre
            $attribute = Attribute::where('name', 'ean')->first();
            $valueObj = $first_variant->variantAttributes()->where('attribute_id',$attribute->id)->first();
            if ($valueObj)
            {
                $value = $valueObj->getValue();
                if ($value) {
                    $odooModel = OdooModel::where('name', 'product_barcode')->first();
                    $obj = OdooProductValue::create([
                        'product_id' => $this->id,
                        'odoo_model_id' => $odooModel->id,
                        'value' => $value
                    ])->save();
                }
            }
        }

        //Nom produit
        $attribute = Attribute::where('name', 'name')->first();
        $value = $first_variant->variantAttributes()->where('attribute_id',$attribute->id)->first()->getValue();
        $attribute = Attribute::where('name', 'brand')->first();
        $brandNameArr = $first_variant->variantAttributes()->where('attribute_id',$attribute->id)->first()->getValue();
        $brandName = $brandNameArr['name'];
        if (key_exists('odoo_name',$brandNameArr))
            $brandName = $brandNameArr['odoo_name'];
        $attribute = Attribute::where('name', 'season')->first();
        $seasonAttr = $first_variant->variantAttributes()->where('attribute_id',$attribute->id)->first();
        $season ="";
        if ($seasonAttr)
            $season = $seasonAttr->getValue();
        if ($value)
        {
            $odooModel = OdooModel::where('name', 'product_name')->first();
            $obj = OdooProductValue::create([
                'product_id' => $this->id,
                'odoo_model_id' => $odooModel->id,
                'value' => ucfirst(strtolower($brandName))." ".strtoupper($value)." ".$season
            ])->save();
        }

        //Marque
        if ($brandName)
        {
            $odooModel = OdooModel::where('name', 'brand_name')->first();
            $obj = OdooProductValue::create([
                'product_id' => $this->id,
                'odoo_model_id' => $odooModel->id,
                'value' => ucfirst(strtolower($brandName))
            ])->save();
        }

        //Description
        $attribute = Attribute::where('name', 'description-short-fr')->first();
        $valueObj = $first_variant->variantAttributes()->where('attribute_id',$attribute->id)->first();
        if ($valueObj)
        {
            $value = $valueObj->getValue();
            if ($value) {
                if (strlen($value) > 30)
                    $value = substr($value,0,30)." ...";
                $odooModel = OdooModel::where('name', 'sale_description')->first();
                $obj = OdooProductValue::create([
                    'product_id' => $this->id,
                    'odoo_model_id' => $odooModel->id,
                    'value' => $value
                ])->save();
            }

        }

        //Description longue
        $attribute = Attribute::where('name', 'description-long-fr')->first();
        $valueObj = $first_variant->variantAttributes()->where('attribute_id',$attribute->id)->first();
        if ($valueObj)
        {
            $value = $valueObj->getValue();
            if ($value) {
                $odooModel = OdooModel::where('name', 'website_description')->first();
                $obj = OdooProductValue::create([
                    'product_id' => $this->id,
                    'odoo_model_id' => $odooModel->id,
                    'value' => $value
                ])->save();
            }
        }

        //Fournisseur
        // si 1 seule variante ou même tarif achat pour chaque variante
        $attribute = Attribute::where('name', 'wholesale-price')->first();
        $cnt = 1;
        if ($this->getVariantCount() > 1)
        {
            $a = variantAttributes::where('attribute_id',$attribute->id)
                ->whereIn('variant_id', $this->variants()->pluck('id'))->select('value_float')->distinct()->pluck('value_float');
            if ($a)
                $cnt = count($a);
        }
        if ($cnt <=1 )
        {
            $valueObj = $first_variant->variantAttributes()->where('attribute_id',$attribute->id)->first();
            if ($valueObj) {
                $value = $valueObj->getValue();
                if ($value) {
                    $odooModel = OdooModel::where('name', 'product_wholesale_ht')->first();
                    $obj = OdooProductValue::create([
                        'product_id' => $this->id,
                        'odoo_model_id' => $odooModel->id,
                        'value' => $value
                    ])->save();
                }
            }

            /*
            // fournisseur calculé à partir de la marque dans odoo avec les étiquettes
            $attribute = Attribute::where('name', 'supplier')->first();
            $valueObj = $first_variant->variantAttributes()->where('attribute_id',$attribute->id)->first();
            if ($valueObj) {
                $valueArr = $valueObj->getValue();
                if ($valueArr) {
                    $supplierName = $valueArr['name'];
                    if (key_exists('odoo_name',$valueArr))
                        $supplierName = $valueArr['odoo_name'];

                    $odooModel = OdooModel::where('name', 'product_supplier')->first();
                    $obj = OdooProductValue::create([
                        'product_id' => $this->id,
                        'odoo_model_id' => $odooModel->id,
                        'value' => $supplierName
                    ])->save();
                }
            }
            */
        }


        //Prix vente HT = prix mini des variantes
        $attribute = Attribute::where('name', 'retail-price')->first();
        $value = variantAttributes::where('attribute_id',$attribute->id)
            ->whereIn('variant_id', $this->variants()->pluck('id'))->min('value_float');

        if ($value) {
            $odooModel = OdooModel::where('name', 'product_retail_ht')->first();
            $obj = OdooProductValue::create([
                'product_id' => $this->id,
                'odoo_model_id' => $odooModel->id,
                'value' => $value / 1.2
            ])->save();
        }

        //Prix discount HT = prix mini des variantes, si chaque variante a un prix promo
        $attribute = Attribute::where('name', 'discount-b2c')->first();
        $nb_values =  variantAttributes::where('attribute_id',$attribute->id)
            ->whereIn('variant_id', $this->variants()->pluck('id'))->count();
        if ($nb_values == $this->getVariantCount())
        {
            $value = variantAttributes::where('attribute_id',$attribute->id)
                ->whereIn('variant_id', $this->variants()->pluck('id'))->min('value_float');

            if ($value) {
                $odooModel = OdooModel::where('name', 'product_discount_ht')->first();
                $obj = OdooProductValue::create([
                    'product_id' => $this->id,
                    'odoo_model_id' => $odooModel->id,
                    'value' => $value / 1.2
                ])->save();
            }
        }

        //Photos
        $attribute = Attribute::where('name', 'pictures')->first();
        $valueObj = $first_variant->variantAttributes()->where('attribute_id',$attribute->id)->first();
        if ($valueObj) {
            $value = $valueObj->getValue();
            $picturePathArr = explode(';',$value);
            $mainPict = "";
            $additionnalPict = "";
            if (count($picturePathArr) >= 1)
            {
                $mainPict = $picturePathArr[0];
                $additionnalPict = implode(';',array_slice($picturePathArr,1));
            }

            if (strlen($mainPict) > 0)
            {
                $odooModel = OdooModel::where('name', 'main_picture')->first();
                $obj = OdooProductValue::create([
                    'product_id' => $this->id,
                    'odoo_model_id' => $odooModel->id,
                    'value' => $mainPict
                ])->save();
            }
            //Photos additionnelles
            if (strlen($additionnalPict) > 0)
            {
                $odooModel = OdooModel::where('name', 'alternative_pictures')->first();
                $obj = OdooProductValue::create([
                    'product_id' => $this->id,
                    'odoo_model_id' => $odooModel->id,
                    'value' => $mainPict
                ])->save();
            }
        }

        //Route
        $odooModel = OdooModel::where('name', 'route')->first();
        $obj = OdooProductValue::create([
            'product_id' => $this->id,
            'odoo_model_id' => $odooModel->id,
            'value' => 'Acheter'
        ])->save();

        //Type odoo
        $odooModel = OdooModel::where('name', 'type')->first();
        $obj = OdooProductValue::create([
            'product_id' => $this->id,
            'odoo_model_id' => $odooModel->id,
            'value' => 'ARTICLE STOCKABLE'
        ])->save();

        //Taxe
        $odooModel = OdooModel::where('name', 'tax')->first();
        $obj = OdooProductValue::create([
            'product_id' => $this->id,
            'odoo_model_id' => $odooModel->id,
            'value' => 'TVA 20%'
        ])->save();

        // conversion des variantes
        $variants = $this->variants()->get();
        foreach($variants as $variant)
        {
            $variant->convert2odoo();
        }
    }

    public function odoodata_to_array()
    {
        $data = [];
        foreach ($this->odooProductValues as $odooProductValue)
        {
            $data[$odooProductValue->odooModel->name] = $odooProductValue->value;
        }
        return $data;
    }
}
