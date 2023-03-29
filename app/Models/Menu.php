<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $guard = [];

    public function resto()
    {
        return $this->belongsTo(Resto::class,'id_resto','id');
    }

    public function cart()
    {
        return $this->hasMany(Cart::class,'id_menu','id');
    }
}
