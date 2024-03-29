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

    public function getNameOrOdooName()
    {
        if ($this->odoo_name)
            return $this->odoo_name;
        else
            return $this->name;
    }

    public static function getNameOrOdooNameFromId($attribute_id,&$name = null)
    {
        $attribute = Attribute::where('id', $attribute_id)->first();
        if (!$attribute_id)
            abort(404, "the odooAttribute ".$attribute. " does not exist.");

        if (isset($name))
            $name = $attribute->name;

        return $attribute->getNameOrOdooName();
    }

    public static function formatValue($attribute_name,$value)
    {
        $name = "";
        // formatage de la surface
        if ($attribute_name == 'var-surface-m2')
        {
            $numeric_value = (float)$value;
            $name = number_format($numeric_value, 1, '.', '');
        }
        elseif (in_array($attribute_name, ['var-size-m','var-size-cm','var-size-mm','var-surface-cm2','var-volume-l']))
        {
            $numeric_value = (float)$value;
            $name = number_format($numeric_value, 0, '.', '');
        }
        elseif ($attribute_name == 'var-size-ft')
        {
            $str = str_replace("''","'",$value);
            $str = str_replace(".","'",$str);
            $str = str_replace('"',"'",$str);
            $parts = explode("'",$str);
            $rad = (int)$parts[0];
            $dec = 0;
            if (isset($parts[1])) {
                $dec = (int)$parts[1];
                if ($dec > 11)
                {
                    $dec = 11;
                }
            }
            $name = (string)$rad;
            if ($dec > 0) {
                $name.= "'".(string)$dec;
            }
        }
        elseif ($attribute_name == 'var-size-inch')
        {
            $str = str_replace("''","'",$value);
            $str = str_replace(".","'",$str);
            $str = str_replace('"',"'",$str);
            $parts = explode("'",$str);
            $rad = (int)$parts[0];
            $dec = 0;
            if (isset($parts[1])) {
                $dec = (int)$parts[1];
                if ($dec > 11)
                {
                    $dec = 11;
                }
            }
            $name = (string)$rad;
            if ($dec > 0) {
                $name.= '"';
                switch ($dec) {
                    case 1;
                    case 2;
                    case 3;
                        $name.= ' 1/4';
                        break;
                    case 6;
                    case 4;
                    case 5;
                    case 7;
                        $name.= ' 1/2';
                        break;
                    case 8;
                    case 9;
                    case 10;
                    case 11;
                        $name.= ' 3/4';
                        break;
                }
            }
        }
        else
        {
            $name = (string)$value;
        }
        return $name;
    }
}
