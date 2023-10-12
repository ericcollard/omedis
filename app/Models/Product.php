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
        $odooProductvalueData = [];
        $first_variant = $this->variants()->first();

        // partie product_template

        //Catégorie commerciale
        $attribute = Attribute::where('name', 'category')->first();
        $value = $first_variant->variantAttributes()->where('attribute_id',$attribute->id)->first()->getValue();
        if ($value)
        {
            dd($value);
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
            $value = $first_variant->variantAttributes()->where('attribute_id',$attribute->id)->first()->getValue();
            if ($value)
            {
                $odooModel = OdooModel::where('name', 'product_internal_ref')->first();
                $obj = OdooProductValue::create([
                    'product_id' => $this->id,
                    'odoo_model_id' => $odooModel->id,
                    'value' => $value
                ])->save();
            }
            //Code barre
            $attribute = Attribute::where('name', 'ean')->first();
            $value = $first_variant->variantAttributes()->where('attribute_id',$attribute->id)->first()->getValue();
            if ($value)
            {
                $odooModel = OdooModel::where('name', 'product_barcode')->first();
                $obj = OdooProductValue::create([
                    'product_id' => $this->id,
                    'odoo_model_id' => $odooModel->id,
                    'value' => $value
                ])->save();
            }
        }

        //Nom produit
        $attribute = Attribute::where('name', 'name')->first();
        $value = $first_variant->variantAttributes()->where('attribute_id',$attribute->id)->first()->getValue();
        if ($value)
        {
            $odooModel = OdooModel::where('name', 'name')->first();
            $obj = OdooProductValue::create([
                'product_id' => $this->id,
                'odoo_model_id' => $odooModel->id,
                'value' => $value
            ])->save();
        }

        //Description
        $attribute = Attribute::where('name', 'description-short-fr')->first();
        $value = $first_variant->variantAttributes()->where('attribute_id',$attribute->id)->first()->getValue();
        if ($value)
        {
            $odooModel = OdooModel::where('name', 'sale_description')->first();
            $obj = OdooProductValue::create([
                'product_id' => $this->id,
                'odoo_model_id' => $odooModel->id,
                'value' => $value
            ])->save();
        }

        //Description longue
        $attribute = Attribute::where('name', 'description-long-fr')->first();
        $value = $first_variant->variantAttributes()->where('attribute_id',$attribute->id)->first()->getValue();
        if ($value)
        {
            $odooModel = OdooModel::where('name', 'website_description')->first();
            $obj = OdooProductValue::create([
                'product_id' => $this->id,
                'odoo_model_id' => $odooModel->id,
                'value' => $value
            ])->save();
        }

        //Fournisseur
        // si 1 seule variante ou même tarif achat pour chaque variante
        $attribute = Attribute::where('name', 'description-long-fr')->first();

        //Prix achat HT

        //Prix vente HT

        //Photo

        //Photos additionnelles

        //Route

        //Type odoo

        //Taxe

    }
}
