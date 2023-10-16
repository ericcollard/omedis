<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;

class Attribute extends Mymodel implements Sortable
{
    use HasFactory;
    use SortableTrait;

    protected $fillable = [
        'name',
        'odoo_name',
        'comment',
        'required',
        'attribute_list_id',
        'unit_id',
        'user_id',
        'data_type_id'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function dataType(): BelongsTo
    {
        return $this->belongsTo(DataType::class);
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
