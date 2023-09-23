<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Attribute extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'comment',
        'required',
        'attribute_list_id',
        'unit_id',
        'data_type_id'
    ];

    public function dataType(): BelongsTo
    {
        return $this->belongsTo(Datatype::class);
    }

    public function unit(): BelongsTo
    {
        return $this->belongsTo(Unit::class);
    }

    public function attributeList(): BelongsTo
    {
        return $this->belongsTo(AttributeList::class);
    }

    public function applyLogic()
    {
        // logique
        if ($this->data_type_id == 1)
            $this->unit_id = null;
        if ($this->data_type_id  != 1)
            $this->attribute_list_id = null;

        // mise en forme nom
        $this->name = Str::of($this->name)->slug('-');
    }
}
