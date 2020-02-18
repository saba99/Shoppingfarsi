<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\User;
use App\Models\Brand;



class Photo extends Model
{  
   
   //protected $uploads='/storage/photos';
   protected $fillable=['user_id','path','original_name'];

   public function user(){

    return $this->belongsTo(User::class);
   }

  /*public function brands(){
     return $this->hasOne(Brand::class);
  }*/

  /*public function  getPathAttribute($photo){

  return $this->uploads.$photo;

  }*/

  public function products(){

   return $this->belongsToMany(Product::class);
  }
}
