<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OdooProductValue extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'product_id',
        'odoo_model_id',
        'value'
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
