<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    protected $table = 'wishlist';
    protected $guarded = [''];
    
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function toko()
    {
        return $this->belongsTo(Toko::class, 'toko_id');
    }
    public function menu()
    {
        return $this->belongsTo(Menu::class, 'menu_id');
    }
}
