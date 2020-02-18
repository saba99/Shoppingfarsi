<?php
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Session;


use App\Models\Brand;
use App\Models\Category;
use App\Models\savephoto;
 use App\Models\Photo;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        //$products=Product::paginate(10);
        ($products = Product::with('photos', 'categories')->paginate(2));
       return view('admin.products.index',compact(['products','photos']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    ($categories = Category::with('childrenRecursive'));
    //$categories=Category::with('childrenRecursive')->where('parent_id',null)->get();
    
    $brands=Brand::all();
        $photos = Photo::all();

    return view('admin.products.create',compact(['categories','brands','photos']));

    }
    public function generateSKU(){

        $number=mt_rand(1000,99999);
        if($this->checkSKU($number)){

            return $this->generateSKU();
        }
      return (string)$number;
    }

    public function checkSKU($number){

        //return Product::where('sku',$number)->exists();
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //return $request->all();
        //dd($attributes,$request->input('attributes')[0]);

        /*($newProduct = $request->all());
        dd(Product::create($newProduct));*/
        $newProduct = new Product();
        if ($file = $request->file('filename')) {
            $name = time() . $file->getClientOriginalName();
            $file->move('images', $name);
            $photo = new Photo();
            $photo->original_name = $file->getClientOriginalName();
            $photo->path = $name;
            $photo->user_id = 1;
            $photo->save();

            //$product->photo_id = $photo->id;
        }
        
        $newProduct->title = $request->input('title');
         $newProduct->sku = $request->input('sku');
        $newProduct->slug =$request->input('slug');
        $newProduct->status = $request->input('status');
        $newProduct->price = $request->input('price');
        $newProduct->discount= $request->input('discount_price');
        $newProduct->short_description = $request->input('description');
        //$newProduct->brand_id = $request->brand;
        $newProduct->meta_desc = $request->input('meta_desc');
        $newProduct->meta_title = $request->input('meta_title');
        $newProduct->meta_keywords = $request->input('meta_keywords');
        $newProduct->user_id = 1;

        $newProduct->save();
          
          $newProduct->categories();
         $newProduct->categories()->sync($request->categories);
        /*$attributes=$request->input('attributes');
      ($newProduct=AttributeValue()->sync($attributes));*/
        //$attributes=explode(',',$request->input('attributes')[0]);
        //$photos=explode(',',$request->input('photo')[0]);
        //$newProduct->photos()->sync($photos);*/



        Session::flash('add_product', 'محصول با موفقیت اضافه شد.');
        return redirect('/administrator/products');
}
  
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $categories=Category::all();

       $brands=Brand::all();

       $products=Product::findOrFail($id);
       //photos in with 
       $product=Product::with(['attributeValue','categories'])->whereId($id)->first();

        return view('admin.products.edit',compact(['brands','categories','product']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       // return $request->all();
        $Product = Product::findOrFail($id);
        $Product->title = $request->input('title');
        $Product->sku = $request->input('sku');
        $Product->slug = $request->input('slug');
        $Product->status = $request->input('status');
        $Product->price = $request->input('price');
        $Product->discount = $request->input('discount_price');
        $Product->short_description = $request->input('description');
        //$newProduct->brand_id = $request->brand;
        $Product->meta_desc = $request->input('meta_desc');
        $Product->meta_title = $request->input('meta_title');
        $Product->meta_keywords = $request->input('meta_keywords');
        $Product->user_id = 1;

        $Product->save();

        $Product->categories();
        $Product->categories()->sync($request->categories);
        /*$attributes=$request->input('attributes');
      ($newProduct=AttributeValue()->sync($attributes));*/
        //$attributes=explode(',',$request->input('attributes')[0]);
        //$photos=explode(',',$request->input('photo')[0]);
        //$newProduct->photos()->sync($photos);*/



        Session::flash('update_product', 'محصول با موفقیت به روز رسانی شد');
        return redirect('/administrator/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product=Product::findOrFail($id);

        $product->delete();

        Session::flash('delete_product', 'محصول با موفقیت حذف شد');
        return redirect('/administrator/products');
    }
}
