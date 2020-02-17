<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


use App\Models\AttributeGroup;

use App\Models\Product;
class Category extends Model
{
    //public $table = "category_products";

    //relation with self
    public function children()
    {


        return $this->hasMany(Category::class, 'parent_id');
    }
    //and relation with others  and showing for nth steps (nested)
    public function childrenRecursive()
    {


        return $this->children()->with('childrenRecursive');
    }

    public function products()
    {
        return $this->belongstoMany(Product::class);
    }

    public function AttributesGroups()
    {
        return $this->belongsToMany(AttributeGroup::class,'attributegroup_category','category_id', 'attributeGroup_id');
    }

}
