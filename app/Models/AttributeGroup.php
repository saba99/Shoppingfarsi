<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

use App\Models\AttributeValue;

use App\Models\Category;

class AttributeGroup extends Model
{
   public function attributevalue(){

    return $this->hasMany(AttributeValue::class, 'attributeGroup_id');
   }

   public function categories(){

      return $this->belongsToMany(Category::class, 'attributegroup_category' , 'attributeGroup_id','category_id');
   }
}
