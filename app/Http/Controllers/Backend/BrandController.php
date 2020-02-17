<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use App\Models\Brand;
use App\Models\Photo;
use Illuminate\Support\Facades\Session;


use Validator;
//use Illuminate\Support\Facades\Validator;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$brands=Brand::all();
        $brands=Brand::paginate(10);
        return view('admin.brands.index',compact(['brands']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:brands',
            'description' => 'required'

        ], [

            'title.required' => 'عنوان برند باید درج شود ',
            'title.unique' => 'این برند قبلا ثبت شده است',
            'description.required' => 'توضیحات خود را وارد کنید ',


        ]);
        if ($validator->fails()) {

            return redirect('/administrator/brands')->withErrors($validator)->withInput();
        }
        else{

            $brand=new Brand();
            $photo=new Photo();
            
          
            $brand->title=$request->input('title');
            
            $brand->description = $request->input('description');

            
           //$brand->photo_id=$request->input('photo_id');
           
            //$input['photo_id'] = $photo->id;
               ($brand->photo_id = $photo->id);
          
   
            //dd($brand=$request->all());
        $brand->save();
            
          
            Session::flash('add_brands','برند با موفقیت ذخیره شد ');

            return redirect('administrator/brands');
        }
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}