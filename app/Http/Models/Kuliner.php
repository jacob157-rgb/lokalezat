<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kuliner extends Model
{
    protected $table = 'kuliners';
    protected $guarded = ['id'];
    public function menu()
    {
        return $this->hasMany(Menu::class);
    }
}
