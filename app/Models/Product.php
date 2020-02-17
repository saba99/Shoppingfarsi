<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\User;
use App\Models\Brand;
use App\Models\Photo;

class Product extends Model
{
    //public $table = "category_products";
    protected $fillable = [
        'sku', 'title', 'slug', 'discount_price','price'
    ];
    
    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
    public function brands()
    {
        return $this->belongsTo(Brand::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function  AttributeValue(){

        return $this->belongsToMany(AttributeValue::class,'attributevalue_products','product_id','attributevalue_id');

    }

    public function photos(){

        return $this->BelongsToMany(Photo::class);
    }
}
