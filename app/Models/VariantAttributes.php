<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class VariantAttributes extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'variant_id',
        'attribute_id',
        'value_str',
        'value_txt',
        'value_int',
        'value_float',
    ];

    public function attribute(): BelongsTo
    {
        return $this->belongsTo(Attribute::class);
    }

    public function variant(): BelongsTo
    {
        return $this->belongsTo(Variant::class);
    }

    public function getValue()
    {
        switch ($this->attribute->datatype->name)
        {
            case "selection":
                if ($this->value_int)
                {
                    $attrValue = $this->attribute->attributeList->attributeListValues->where('id', $this->value_int)->first();
                    if ($attrValue)
                    {
                        $data = [];
                        if ($attrValue->name)
                            $data['name'] = $attrValue->name;
                        if ($attrValue->odoo_name)
                            $data['odoo_name'] = $attrValue->odoo_name;
                        return $data;
                    }
                    else
                    {
                        return null;
                    }
                }

                break;
            case "string":
                if ($this->value_str)
                {
                    return $this->value_str;
                }
                break;
            case "integer":
                if ($this->value_int)
                {
                    return $this->value_int;
                }
                break;
            case "float":
                if ($this->value_float)
                {
                    return $this->value_float;
                }
                break;
            case "boolean":
                if ($this->value_int)
                {
                    return $this->value_int;
                }
                break;
            case "money":
                if ($this->value_float)
                {
                    return $this->value_float;
                }
                break;
            case "text":
                if ($this->value_txt)
                {
                    return $this->value_txt;
                }
                break;
        }
        return null;
    }

    public function toString($summary = 0)
    {
        $html = "";
        if ($summary == 0)
            $html .= "<strong>".$this->attribute->name."</strong>: ";
        switch ($this->attribute->datatype->name)
        {
            case "selection":
                if ($this->value_int)
                {
                    $attrValue = $this->attribute->attributeList->attributeListValues->where('id', $this->value_int)->first();
                    if ($attrValue)
                        $html .= $attrValue->name;
                    else
                        $html .= "nc.";
                }

                break;
            case "string":
                if ($this->value_str)
                {
                    $html .= $this->value_str;
                    if ($this->attribute->unit and $this->attribute->unit->name != 'none') $html .= $this->attribute->unit->name;
                }
                break;
            case "integer":
                if ($this->value_int)
                {
                    $html .= $this->value_int;
                    if ($this->attribute->unit and $this->attribute->unit->name != 'none') $html .= $this->attribute->unit->name;
                }
                break;
            case "float":
                if ($this->value_float)
                {
                    $html .= $this->value_float;
                    if ($this->attribute->unit and $this->attribute->unit->name != 'none') $html .= $this->attribute->unit->name;
                }
                break;
            case "boolean":
                if ($this->value_int)
                {
                    $html .= $this->value_int;
                    if ($this->attribute->unit and $this->attribute->unit->name != 'none') $html .= $this->attribute->unit->name;
                }
                break;
            case "money":
                if ($this->value_float)
                {
                    $html .= $this->value_float;
                    if ($this->attribute->unit and $this->attribute->unit->name != 'none') $html .= $this->attribute->unit->name;
                }
                break;
            case "text":
                if ($this->value_txt)
                {
                    $html .= $this->value_txt;
                    if ($this->attribute->unit and $this->attribute->unit->name != 'none') $html .= $this->attribute->unit->name;
                }
                break;
        }
        return $html;
    }
}
