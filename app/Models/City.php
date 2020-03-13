<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Province;

use App\Models\Address;

class City extends Model
{
    public function provinces()
    {

        return $this->belongsTo(Province::class);
    }

    public function addresses(){


        return $this->hasMany(Address::class);
    }
}
