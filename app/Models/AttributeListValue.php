<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AttributeListValue extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'comment',
        'attribute_list_id'
    ];

    public function attributeList(): BelongsTo
    {
        return $this->belongsTo(AttributeList::class);
    }

}
