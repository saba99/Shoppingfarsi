<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\Photo;
use App\File;

class Brand extends Model
{   


    protected $fillable=['file_id','path','title','description'];

    protected $uploads = '/storage/';

    public function  getFilenameAttribute($file)
    {

        //return $this->uploads . $file;
        return $this->uploads . $file;
    }
    public function products()
    {
        return $this->hasMany(Brand::class);
    }

    public function photo(){

        return $this->belongsTo(Photo::class);
    }
    public function File()
    {

        return $this->belongsTo(File::class);
    }
}
