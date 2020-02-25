<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $fillable=['image'];

    protected  $uploads='/storage/';

    
    public function  getImageAttribute($photo){

  return $this->uploads.$photo;

  }
}
