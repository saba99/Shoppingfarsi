<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AttributeGroup;
use App\Models\AttributeValue;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class AttributesValueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {     
         $attributesValue = AttributeValue::with('AttributeGroup')->paginate(10);
         
        return view('admin.attributes-value.index', compact(['attributesValue']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $attributesGroupSelectBox = AttributeGroup::all();
//dd($attributesGroupSelectBox);
        //$attributesValue = AttributeValue::with('AttributeGroup')->get();
       return view('admin.attributes-value.create',compact('attributesGroupSelectBox'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // return $request->all();

     

      $newValue=new  AttributeValue();

      $newValue->title=$request->input('title');
      $newValue->attributeGroup_id=$request->input('attribute_group');
   $newValue->save();

   Session::flash('add_attributes',' مقدار ویژگی جدید با موفقیت افزوده شد ');

   return redirect('/administrator/attributes-value');
          
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
        $attributesValue=AttributeValue::with('AttributeGroup')->whereId($id)->first();
            // dd($attributesValue);
        $attributeGroup=AttributeGroup::all(); 
           //dd($attributeGroup);
        return view('admin.attributes-value.edit',compact(['attributesValue','attributeGroup']));


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
        $attributeValue=AttributeValue::findOrFail($id);
        $attributeValue->title = $request->input('title');
        $attributeValue->attributeGroup_id = $request->input('attribute_group');
        $attributeValue->save();

        Session::flash('update_attributes',  "مقدار ویژگی"."   "  . $attributeValue->title  . " با موفقیت به روزرسانی شد ");

        return redirect('/administrator/attributes-value');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $attributeValue=AttributeValue::findOrFail($id);

        $attributeValue->delete();

        Session::flash('delete_attributes','مقدار ویژگی'.'  ' .$attributeValue->title.'با موفقیت حذف شد ');

        return redirect('administrator/attributes-value');
    }
}
