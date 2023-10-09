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
}
