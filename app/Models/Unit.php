<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Unit extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'comment'
    ];

    public function applyLogic()
    {

        // mise en forme nom
        $this->name = Str::of($this->name)->slug('-');
    }

}
