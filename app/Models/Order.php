<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Product;

use App\User;

class Order extends Model
{
    public function products(){

        return $this->belongsToMany(Product::class);
    }
    public function users(){

        return $this->hasMany(User::class);

    }
}
