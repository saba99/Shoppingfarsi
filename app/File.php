<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Models\Product;
use App\Models\Slider;

class File extends Model
{
    protected $fillable = ['filename'];

    protected $uploads = '/uploads/';

   public function  getFilenameAttribute($file)
    {

        //return $this->uploads . $file;
        return $this->uploads.$file;
    }

    public function products()
    {

        return $this->belongsToMany(Product::class);
    }

    public function sliders()
    {

        return $this->hasMany(Slider::class);
    }

}

