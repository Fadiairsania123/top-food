<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $guard = [];
    
    protected $fillable = [
        'id_user', 'id_menu', 'ulasan',  'value', 'id_transaction'
    ];

    public function menu()
    {
        return $this->belongsTo(Menu::class,'id_menu','id');
    }

    public function user()
    {
        return $this->hasOne(User::class,'id','id_user');
    }
}
