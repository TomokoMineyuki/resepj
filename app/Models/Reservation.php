<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = ['user_id', 'shop_id', 'date', 'time', 'number'];

    public function shop() {
        return $this->belongsTo('App\Models\Shop');
    }
}
