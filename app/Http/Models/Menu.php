<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    protected $table = 'menus';
    protected $guarded = ['id'];
    public function toko()
    {
        return $this->belongsTo(Toko::class, 'toko_id');
    }
    public function kuliner()
    {
        return $this->belongsTo(Kuliner::class, 'kuliner_id');
    }
    
    // Many to Many (User(3) <-> Wishlist <-> Toko/Menu)
    public function wishuser()
    {
        return $this->belongsToMany(User::class, 'wishlist')->withPivot('toko_id');
    }
    public function wishtoko()
    {
        return $this->belongsToMany(Toko::class, 'wishlist')->withPivot('user_id');
    }
    // End Many to Many (User(3) <-> Wishlist <-> Toko/Menu)
}
