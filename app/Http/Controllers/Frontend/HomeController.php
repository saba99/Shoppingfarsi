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
  
    public function index()
    {    

       
        ($latestProduct=Product::with('files')->get());

        $RandomProducts = Product::with('files')->inRandomOrder()->get();
        
        //dd($RandomProducts[0]->title);
     // dd($RandomProducts[0]->files[0]->filename);
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
        
        $brands=Brand::orderBy('created_at','desc')->limit(10)->get();

       //$categories = Category::all();
       ($categories = Category::where('parent_id', '=', 1)->get());
        
        //($allCategories = Category::pluck('name','id')->all());
       //dd($category=Category::->get()) ;
            
        $product=Product::orderby('created_at','desc')->limit(10);
        
        $file  = File::pluck('filename', 'id')->first();

        $banners = Banner::where('status', '1')->get();

        return  view('frontend.home.index',compact(['latestProduct','categories','file','banners', 'productCategory', 'modelCategoryProduct' ,'productCategorytab2','brands', 'RandomProducts']));
    }


    public function getProductByCategory($id, $page = 2)
    {

        //$category=Category::with('products.files')->where('id',$id)->first();
        $category = Category::whereId($id)->first();

        
        $products = Product::with('files')->whereHas('categories', function ($q) use ($category) {
            $q->where('id', $category->id);
        })->paginate($page);
        //dd($products);
        $productCategory = Product::with('categories','files')->whereHas('categories', function ($q) use ($category) {
            $q->where('id', $category->id);
        })->paginate($page);
        $brands = Brand::orderBy('created_at', 'desc')->limit(10)->get();

        

        //dd($category->name);
        return view('frontend.home.index', compact(['category', 'productCategory', 'products','brands', 'categories']));
    }  
    
public function AllProduct(){

      $product=Product::with('categories')->get();
      ($categories=Category::all());
      ($product['key']=$categories[0]);
      $brands=Brand::all();
      ($product);
    return view('frontend.products.allproducts',compact(['product','categories','brands']));
}



 
}