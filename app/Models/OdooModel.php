<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OdooModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'comment',
        'model',
        'mode',
        'field',
        'mandatory',
        'type',
        'search_field',
        'dest_model',
    ];

}
