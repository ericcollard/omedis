<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
}
