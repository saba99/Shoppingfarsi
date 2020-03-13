<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\User;

use App\Models\Province;
use App\Models\City;

class Address extends Model
{
    public function user(){

        return $this->belongsTo(User::class);
    }
    public function city()
    {


        return $this->belongsTo(City::class);
    }
   public function province(){


    return $this->belongsTo(Province::class);
   }
}
