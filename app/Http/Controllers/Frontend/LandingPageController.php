<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;

class LandingPageController extends Controller
{
    public function index(){

       $products=Product::inRandomOrder()->take(8)->get();
        ($categories=Category::all()->groupBy('parent_id'));
       
        
 ($categories['root']=$categories[1]);
        
         //dd($categories);
         //dd(['collection'=>$categories]);
              /*foreach($categories['root'] as $category){

       
                //dd($category->id);
                //dd($categories[$category->id]);
                foreach($categories[$category->id] as $category){
                       
                         dd($category->name);
                  //dd (["items"=>$categories[$category->id]]);

                    
                }
              }*/
         
           //dd($category=Category::with('childrenRecursive')->get()) ;
        return view('frontend.home.landingpage')->with(['products'=>$products,'categories'=>$categories]);

    }

  public function manageCategory()
  {
    $products = Product::inRandomOrder()->take(8)->get();

    $product=Product::all();

    //return $product->sortBy('price',true)->values();
    //return $product->sortByDesc('price', true)->values();
    return collect($product->first())->sortKeys();

    $categories = Category::where('parent_id', '=', 0)->get();
    
    $allCategories = Category::pluck('name', 'id')->all();
    return view('frontend.home.landingpage', compact('categories','products', 'allCategories'));
  }
  public function addCategory(Request $request)
  {
    $this->validate($request, [
      'name' => 'required',
    ]);
    $input = $request->all();
    $input['parent_id'] = empty($input['parent_id']) ? 0 : $input['parent_id'];

    Category::create($input);
    return back()->with('success', 'New Category added successfully.');
  }
}
