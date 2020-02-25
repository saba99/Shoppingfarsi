<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Provience;

class City extends Model
{
    public function provinces()
    {

        return $this->belongsTo(Provience::class);
    }
}
