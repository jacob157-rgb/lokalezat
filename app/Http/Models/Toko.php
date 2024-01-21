<?php

namespace App\Models;

use App\Models\User as ModelsUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Toko extends Model
{
    protected $table = 'tokos';
    protected $guarded = ['id'];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function menu()
    {
        return $this->hasMany(Menu::class);
    }
    
    // Many to Many (User(3) <-> Wishlist <-> Toko/Menu)
    public function wishuser()
    {
        return $this->belongsToMany(User::class, 'wishlist')->withPivot('menu_id');
    }
    public function wishmenu()
    {
        return $this->belongsToMany(Menu::class, 'wishlist')->withPivot('user_id');
    }
    // End Many to Many (User(3) <-> Wishlist <-> Toko/Menu)
}
