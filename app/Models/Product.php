<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\User;
use App\Models\Brand;
use App\Models\Photo;
use App\Models\Order;
use App\File;

class Product extends Model
{
    //public $table = "category_products";
    protected $fillable = [
        'sku', 'title', 'slug', 'discount_price','price','status','short_description','user_id'
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
    public function files()
    {

        return $this->BelongsToMany(File::class);
    }
    
    public function order(){
        return $this->BelongsToMany(Order::class);
    }  

    public function comments(){


        return $this->hasMany(Comment::class);
    }

    /*public function presentPrice(){

        return money_format('$%i',$this->price/100);
    }*/
    public function scopeMightAlsoLike($query){

          
        return $query->inRandomOrder()->take(4);
    }

}
