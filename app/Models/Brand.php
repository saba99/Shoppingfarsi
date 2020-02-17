<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Photo;


class Brand extends Model
{   


    protected $fillable=['photo_id','path','title','description'];
    public function products()
    {
        return $this->hasMany(Brand::class);
    }

    public function photo(){

        return $this->belongsTo(Photo::class);
    }
}
