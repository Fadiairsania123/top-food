<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{
    use HasFactory;

    protected $guard = [];

    public function review()
    {
        return $this->hasMany(Review::class,'id_user','id_user');
    }
}
