<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


use App\Models\AttributeGroup;

class AttributeValue extends Model
{

  protected $table='attributes_values';

  
  public function AttributeGroup(){

   return $this->belongsTo(AttributeGroup::class, 'attributeGroup_id');

  }  

  public function products(){

    return $this->belongsToMany(Product::class,'attributegroup_category','attributevalue_id','product_id');
  }
}
