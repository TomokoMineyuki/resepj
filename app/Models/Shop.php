<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    public function area() 
    {
        return $this->belongsTo(Area::class);
    }

    public function genre() 
    {
        return $this->belongsTo(Genre::class);
    }

    public function shop_likes() 
    {
        return $this->hasMany(ShopLike::class);
    }
}
