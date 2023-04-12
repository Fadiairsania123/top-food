<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $guard = [];

    protected $fillable = [
        'id_user', 'id_menu', 'qty', 'status'
    ];

    public function menu()
    {
        return $this->belongsTo(Menu::class,'id_menu','id');
    }
}
