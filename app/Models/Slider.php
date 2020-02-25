<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Product;

use App\File;

class Slider extends Model
{    

    protected $uploads='/sliderImages';

    public function products(){

        return $this->hasMany(Product::class);
    }

    public function file(){
         return $this->belongsTo(File::class);

    }

    public function  getPathAttribute($files){

  return $this->uploads.$files;

  }
}
