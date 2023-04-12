<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resto extends Model
{
    use HasFactory;

    protected $guard = [];

    public function menu()
    {
        return $this->hasMany(Menu::class,'id_resto','id');
    }

}
