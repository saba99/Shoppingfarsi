<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Product;
use App\File;
use App\Models\Banner;
use App\Models\Brand;
use App\Models\Category;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    

       
        ($latestProduct=Product::with('files')->get());
      
        $modelCategoryProduct=Product::with(['categories'=>function($q){
           
            $q->where('name','مد و پوشاک');
  
        }])->limit(10)->get();
        //dd($modelCategoryProduct);
        $productCategory = Product::with('categories', 'files')->whereHas('categories', function ($q)  {
            $q->where('name', 'مد و پوشاک');
        })->get();
        $productCategorytab2 = Product::with('categories', 'files')->whereHas('categories', function ($q) {
            $q->where('name', 'کالای دیجیتال');
        })->get();
        //dd($productCategorytab2);
        //dd($productCategory);
        $brands=Brand::orderBy('created_at','desc')->limit(10)->get();
        

        $product=Product::orderby('created_at','desc')->limit(10);
        
        $file  = File::pluck('filename', 'id')->first();

        $banners = Banner::where('status', '1')->get();

        return  view('frontend.home.index',compact(['latestProduct','file','banners', 'productCategory', 'modelCategoryProduct' ,'productCategorytab2','brands']));
    }


    public function getProductByCategory($id, $page = 2)
    {

        //$category=Category::with('products.files')->where('id',$id)->first();
        $category = Category::whereId($id)->first();

        //dd($category);
        $products = Product::with('files')->whereHas('categories', function ($q) use ($category) {
            $q->where('id', $category->id);
        })->paginate($page);
        $productCategory = Product::with('categories','files')->whereHas('categories', function ($q) use ($category) {
            $q->where('id', $category->id);
        })->paginate($page);


        //dd($category->name);
        return view('frontend.home.index', compact(['category', 'productCategory', 'products', 'categories']));
    } 


 
}