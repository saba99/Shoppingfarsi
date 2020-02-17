<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\AttributeGroup;



class AttributeGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

        //$attributesGroup=AttributeGroup::all();
        $attributesGroup=AttributeGroup::paginate(10);
        return view('admin.attributes.index',compact(['attributesGroup']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $attributesGroupSelectBox=AttributeGroup::all();
        return view('admin.attributes.create',compact(['attributesGroupSelectBox']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributesGroup=new AttributeGroup();

        $attributesGroup->title=$request->input('title');

        $attributesGroup->type=$request->input('type');

        $attributesGroup->save();

        Session::flash('add_attributes','ویژگی جدید با موفقیت اضافه شد');

        return redirect('administrator/attributes-group');
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
        $attributesGroup=AttributeGroup::findOrFail($id);

        return view('admin.attributes.edit',compact(['attributesGroup']));
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
        $attributesGroup = AttributeGroup::findOrFail($id);

        $attributesGroup->title = $request->input('title');

        $attributesGroup->type = $request->input('type');

        $attributesGroup->save();

        Session::flash('add_attributes', 'ویژگی جدید با موفقیت به روزرسانی شد');

        return redirect('administrator/attributes-group');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $attributesGroup=AttributeGroup::findOrFail($id);

        $attributesGroup->delete();

        Session::flash('delete_attributes','ویژگی مورد نظر با موفقیت حذف شد ');

        return redirect('administrator/attributes-group');

    }
}
