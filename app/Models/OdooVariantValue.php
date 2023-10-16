<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OdooVariantValue extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'variant_id',
        'odoo_model_id',
        'value',
        'attribute_name'
    ];


    public function variant(): BelongsTo
    {
        return $this->belongsTo(Variant::class);
    }

    public function odooModel(): BelongsTo
    {
        return $this->belongsTo(OdooModel::class);
    }

    public function to_array()
    {
        $data = [];
        if ($this->odooModel->name == 'attribute')
        {
            $data['attribute_'.$this->attribute_name] = $this->value;
        }
        else
        {
            $data[$this->odooModel->name] = $this->value;
        }
        return $data;
    }
}
