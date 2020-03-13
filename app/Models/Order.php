<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Product;
use App\Models\Payment;
use App\User;


class Order extends Model
{
    public function products(){

        return $this->belongsToMany(Product::class)->withPivot('qty');
    }
    public function user(){

        return $this->belongsTo(User::class);

    }
    public function payment(){

        return $this->hasOne(Payment::class);
    }
}
