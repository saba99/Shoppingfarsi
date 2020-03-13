<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AttributeGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


use App\Models\Category;
use App\Http\Requests\Backend\CategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();

        return view('admin.categories.index', compact(['categories']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::with('childrenRecursive')->where('parent_id', null)->get();

        return view('admin.categories.create', compact(['categories']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $category = new Category();
        $category->name = $request->input('name');

        $category->parent_id = $request->input('parent_category');

        $category->meta_title = $request->input('meta_title');

        $category->meta_desc = $request->input('meta_desc');


        $category->meta_keywords = $request->input('meta_keywords');

        $category->save();

        Session::flash('add_category', ' دسته بندی با موفقیت اضافه شد  ');

        return redirect('/administrator/categories');
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
        $category = Category::findOrFail($id);
        $categories = Category::with('childrenRecursive')->where('parent_id', null)->get();
        return view('admin.categories.edit', compact(['categories', 'category']));

       // ['categories'=>$categories,'category'=>$category];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->name = $request->input('name');

        $category->parent_id = $request->input('parent_category');

        $category->meta_title = $request->input('meta_title');

        $category->meta_desc = $request->input('meta_desc');


        $category->meta_keywords = $request->input('meta_keywords');

        $category->save();

        Session::flash('update_category', ' دسته بندی با موفقیت  به روز رسانی شد  ');

        return redirect('/administrator/categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category=Category::with('childrenRecursive')->where('id',$id)->first();
        
       $category=Category::findOrFail($id);
       // if($category->parent_id ==null){}
        /*if(isset($category->childRecursive)){
          Session::flash('err_category',' این دسته بندی شامل زیر دسته است و حذف آن امکان پذیر نمی باشد ');
            return redirect('/administrator/categories');
        }*/

        $category->delete();

        Session::flash('delete_category', ' دسته بندی با موفقیت حذف شد  ');

        return redirect('/administrator/categories');
    }

    public function indexSetting($id){

     ;

        $category = Category::findOrFail($id);
        $attributeGroups = AttributeGroup::all();
  
        return view('admin.categories.index-setting', compact(['category', 'attributeGroups']));

    }
  public function saveSetting(CategoryRequest $request,$id){


   // return $request->all();
   
  $category=Category::findOrFail($id);

  //dd($request->attributeGroups);

  $category->attributesGroups()->sync($request->attributeGroups);


  $category->save();
  return redirect('/administrator/categories');
  dd($category);
    

  }
   
}
