<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'roles',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    // One to One (User(2))
    public function toko()   
    {
        return $this->hasOne(Toko::class);
    }
    // End One to One (User(2))

    // One to One (User(3))
    public function profile()   
    {
        return $this->hasOne(Profile::class);
    }
    // End One to One (User(3))
    
    // Many to Many (User(3) <-> Wishlist <-> Toko/Menu)
    public function wishmenu()
    {
        return $this->belongsToMany(Menu::class, 'wishlists')->withPivot('toko_id');
    }
    public function wishtoko()
    {
        return $this->belongsToMany(Toko::class, 'wishlists')->withPivot('menu_id');
    }
    // End Many to Many (User(3) <-> Wishlist <-> Toko/Menu)

    public function review()
    {
        return $this->hasMany(Review::class);
    }

    public function replies()
    {
        return $this->hasMany(Replies::class);
    }
}

