<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class DataType extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'comment',
    ];


    public function path()
    {
        return route('datatype.show', $this);
    }

    public function applyLogic()
    {

        // mise en forme nom
        $this->name = Str::of($this->name)->slug('-');
    }
}
