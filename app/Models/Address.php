<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\User;

class Address extends Model
{
    public function user(){

        return $this->belongsTo(User::class);
    }
}
