<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class Variant extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'user_id',
        'product_id'
    ];

    public static function boot()
    {
        parent::boot();
        static::deleting(function ($variant) {
            foreach($variant->variantAttributes as $variantAttribute) {
                $variantAttribute->delete();
            }
            foreach($variant->odooVariantValues as $odooVariantValue) {
                $odooVariantValue->delete();
            }
        });

    }

    public function variantAttributes(): HasMany
    {
        return $this->hasMany(VariantAttributes::class);
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function odooVariantValues(): HasMany
    {
        return $this->hasMany(OdooVariantValue::class);
    }

    public function convert2odoo()
    {
        // Suppression des données déjà existantes
        foreach ($this->odooVariantValues as $odooProductValue) {
            $odooProductValue->delete();
        }

        if ($this->product->getVariantCount() > 1)
        {
            // Référence interne variante
            $attribute = Attribute::where('name', 'sku')->first();
            $valueObj = $this->variantAttributes()->where('attribute_id',$attribute->id)->first();
            if ($valueObj)
            {
                $value = $valueObj->getValue();
                if ($value)
                {
                    $odooModel = OdooModel::where('name', 'variant_internal_ref')->first();
                    $obj = OdooVariantValue::create([
                        'variant_id' => $this->id,
                        'odoo_model_id' => $odooModel->id,
                        'value' => $odooModel->format_value($value)
                    ])->save();
                }
            }

            //Code barre variante
            $attribute = Attribute::where('name', 'ean')->first();
            $valueObj = $this->variantAttributes()->where('attribute_id',$attribute->id)->first();
            if ($valueObj)
            {
                $value = $valueObj->getValue();
                if ($value)
                {
                    $odooModel = OdooModel::where('name', 'variant_barcode')->first();
                    $obj = OdooVariantValue::create([
                        'variant_id' => $this->id,
                        'odoo_model_id' => $odooModel->id,
                        'value' => $odooModel->format_value($value)
                    ])->save();
                }
            }

            //Tarif achat

            $purchasePrice = false;

            $attributeWholesalePrice = Attribute::where('name', 'wholesale-price')->first();
            $wholesalePriceValueObj = $this->variantAttributes()->where('attribute_id',$attributeWholesalePrice->id)->first();

            $attributeDscB2b = Attribute::where('name', 'discount-b2b')->first();
            $attributeDscB2bValueObj = $this->variantAttributes()->where('attribute_id',$attributeDscB2b->id)->first();
            if ($attributeDscB2bValueObj) {
                $purchasePrice = $attributeDscB2bValueObj->getValue();
            }
            else
            {
                // pas de prix net achat discount fourni
                if ($wholesalePriceValueObj) {
                    $purchasePrice = $wholesalePriceValueObj->getValue();

                    if (!$attributeDscB2bValueObj) {
                        $attributeDscB2bPc = Attribute::where('name', 'discount-b2b-pc')->first();
                        $attributeDscB2bPcValueObj = $this->variantAttributes()->where('attribute_id',$attributeDscB2bPc->id)->first();

                        if ($attributeDscB2bPcValueObj) {
                            $purchasePrice = $purchasePrice * (1-$attributeDscB2bPcValueObj->getValue());
                        }
                    }
                }
            }


            // cout variante (sera mis à jour si stock null)
            if ($purchasePrice) {
                    $odooModel = OdooModel::where('name', 'variant_cost_ht')->first();
                    $obj = OdooVariantValue::create([
                        'variant_id' => $this->id,
                        'odoo_model_id' => $odooModel->id,
                        'value' => $odooModel->format_value($purchasePrice)
                    ])->save();
            }

            // si différents tarif achat pour chaque variante
            $cnt = 1;
            $a = variantAttributes::where('attribute_id',$attributeWholesalePrice->id)
                ->whereIn('variant_id', $this->product->variants()->pluck('id'))->select('value_float')->distinct()->pluck('value_float');
            if ($a)
                $cnt = count($a);

            if ($cnt >1 )
            {
                if ($purchasePrice) {
                    $odooModel = OdooModel::where('name', 'variant_wholesale_ht')->first();
                    $obj = OdooVariantValue::create([
                        'variant_id' => $this->id,
                        'odoo_model_id' => $odooModel->id,
                        'value' => $odooModel->format_value($purchasePrice)
                    ])->save();
                }

                /*
                $attribute = Attribute::where('name', 'supplier')->first();
                $valueObj = $this->variantAttributes()->where('attribute_id',$attribute->id)->first();
                if ($valueObj) {
                    $valueArr = $valueObj->getValue();
                    if ($valueArr) {
                        $supplierName = $valueArr['name'].'*';
                        if (key_exists('odoo_name',$valueArr))
                            $supplierName = $valueArr['odoo_name'];

                        $odooModel = OdooModel::where('name', 'variant_supplier')->first();
                        $obj = OdooVariantValue::create([
                            'variant_id' => $this->id,
                            'odoo_model_id' => $odooModel->id,
                            'value' => $supplierName
                        ])->save();
                    }
                }
                */


            }

            // si différents tarif promo pour chaque variante
            $attribute = Attribute::where('name', 'discount-b2c')->first();
            $cnt = 1;
            $a = variantAttributes::where('attribute_id',$attribute->id)
                ->whereIn('variant_id', $this->product->variants()->pluck('id'))->select('value_float')->distinct()->pluck('value_float');
            if ($a)
                $cnt = count($a);
            if ($cnt > 1)
            {
                $valueObj = $this->variantAttributes()->where('attribute_id',$attribute->id)->first();
                if ($valueObj) {
                    $value = $valueObj->getValue();
                    if ($value) {
                        $odooModel = OdooModel::where('name', 'variant_discount_ht')->first();
                        $obj = OdooVariantValue::create([
                            'variant_id' => $this->id,
                            'odoo_model_id' => $odooModel->id,
                            'value' => $odooModel->format_value($value / 1.2)
                        ])->save();
                    }
                }
            }

            // si différents tarif public pour chaque variante
            $attribute = Attribute::where('name', 'retail-price')->first();
            $cnt = 1;
            $a = variantAttributes::where('attribute_id',$attribute->id)
                ->whereIn('variant_id', $this->product->variants()->pluck('id'))->select('value_float')->distinct()->pluck('value_float');
            if ($a)
                $cnt = count($a);
            if ($cnt > 1)
            {
                $valueObj = $this->variantAttributes()->where('attribute_id',$attribute->id)->first();
                if ($valueObj) {
                    $value = $valueObj->getValue();
                    if ($value) {
                        $odooModel = OdooModel::where('name', 'variant_retail_ht')->first();
                        $obj = OdooVariantValue::create([
                            'variant_id' => $this->id,
                            'odoo_model_id' => $odooModel->id,
                            'value' => $odooModel->format_value($value / 1.2)
                        ])->save();
                    }
                }
            }

        }


        // Poids
        $attribute = Attribute::where('name', 'weight')->first();
        $valueObj = $this->variantAttributes()->where('attribute_id',$attribute->id)->first();
        if ($valueObj)
        {
            $value = $valueObj->getValue();
            if ($value)
            {
                $odooModel = OdooModel::where('name', 'variant_weight')->first();
                $obj = OdooVariantValue::create([
                    'variant_id' => $this->id,
                    'odoo_model_id' => $odooModel->id,
                    'value' => $odooModel->format_value($value)
                ])->save();
            }
        }

        // Volume
        $odooModel = OdooModel::where('name', 'variant_volume')->first();
        $obj = OdooVariantValue::create([
            'variant_id' => $this->id,
            'odoo_model_id' => $odooModel->id,
            'value' => '0.00'
        ])->save();


        //stock

        //Propriétaire DV

        //Marque
        $attribute = Attribute::where('name', 'brand')->first();
        $valueObj = $this->variantAttributes()->where('attribute_id',$attribute->id)->first();
        if ($valueObj) {
            $valueArr = $valueObj->getValue();
            if ($valueArr) {
                $supplierName = $valueArr['name'].'*';
                if (key_exists('odoo_name',$valueArr))
                    $supplierName = $valueArr['odoo_name'];

                $odooModel = OdooModel::where('name', 'attribute')->first();
                $obj = OdooVariantValue::create([
                    'variant_id' => $this->id,
                    'odoo_model_id' => $odooModel->id,
                    'value' => $odooModel->format_value($supplierName),
                    'attribute_name' => 'Marque'
                ])->save();
            }
        }

        //Millésime
        $attribute = Attribute::where('name', 'season')->first();
        $valueObj = $this->variantAttributes()->where('attribute_id',$attribute->id)->first();
        if ($valueObj) {
            $name = $valueObj->getValue();
            if (strlen($name)>0)
            {
                $odooModel = OdooModel::where('name', 'attribute')->first();
                $obj = OdooVariantValue::create([
                    'variant_id' => $this->id,
                    'odoo_model_id' => $odooModel->id,
                    'value' => $odooModel->format_value($name),
                    'attribute_name' => 'Millésime'
                ])->save();
            }
        }

        //Type
        $odooModel = OdooModel::where('name', 'attribute')->first();
        $obj = OdooVariantValue::create([
            'variant_id' => $this->id,
            'odoo_model_id' => $odooModel->id,
            'value' => 'Neuf',
            'attribute_name' => 'Type'
        ])->save();

        //Autres attributs
        // Attributs variantes
        $attribute_ids = DB::table('attributes')
            ->select('attributes.id')
            ->join('variant_attributes', 'variant_attributes.attribute_id', '=', 'attributes.id')
            ->where('variant_attributes.variant_id','=',$this->id)
            ->Where(function ($query) {
                $query->whereNotNull('variant_attributes.value_str')
                    ->orWhereNotNull('variant_attributes.value_txt')
                    ->orWhereNotNull('variant_attributes.value_int')
                ->orWhereNotNull('variant_attributes.value_float');
            })
            ->whereNotNull('attributes.odoo_name')
            ->pluck('id');

        foreach ($attribute_ids as $attribute_id) {
            $attribute = Attribute::where('id', $attribute_id)->first();
            $attribute_name = $attribute->name;
            if ($attribute->odoo_name)
                $attribute_name = $attribute->odoo_name;
            $valueObj = $this->variantAttributes()->where('attribute_id', $attribute->id)->first();
            if ($valueObj) {
                $name = $valueObj->getValue();

                // formatage de la surface
                if ($attribute->name == 'var-surface-m2')
                {
                    $numeric_value = (float)$name;
                    $name = number_format($numeric_value, 1, '.', '');
                }

                if (is_array($name))
                {
                    // cas d'un attribut sur sélection
                    $value = $name['name'].('*');
                    if (key_exists('odoo_name',$name))
                    {
                        $value= $name['odoo_name'];
                    }
                    if (strlen($value) > 0) {
                        $obj = OdooVariantValue::create([
                            'variant_id' => $this->id,
                            'odoo_model_id' => $odooModel->id,
                            'value' => $odooModel->format_value($value),
                            'attribute_name' => $attribute_name
                        ])->save();
                    }
                }
                else
                {
                    if (strlen($name) > 0) {
                        $obj = OdooVariantValue::create([
                            'variant_id' => $this->id,
                            'odoo_model_id' => $odooModel->id,
                            'value' => $odooModel->format_value($name),
                            'attribute_name' => $attribute_name
                        ])->save();
                    }
                }

            }
        }

    }

    public function odoodata_to_array()
    {
        $data = [];
        foreach ($this->odooVariantValues as $odooVariantValue)
        {
            if ($odooVariantValue->odooModel->name == 'attribute')
            {
                $data['attribute_'.$odooVariantValue->attribute_name] = $odooVariantValue->value;
            }
            else
            {
                $data[$odooVariantValue->odooModel->name] = $odooVariantValue->value;
            }
        }
        return $data;
    }

}
