@extends('admin.layout.master')


@section('content')


<div class="content">


<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">اضافه کردن مقادیر ویژگی:  </h3>
             
                   
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-6 col-md-offset-3">
<form action="/administrator/attributes-value/" method="POST">

  @csrf 
        
<div class="form-group">
<lable for="title"  class="control-label" placeholder="لطفا مقدار ویژگی را وارد نمایید">عنوان</lable>
<input type="text"  name="title"  class="form-control" >


</div>  
<div class="form-group">

<lable for="attribute_group"  class="control-label" >انتخاب ویژگی</lable>

<select  name="attribute_group" class="form-control">
    
    <option value="">انتخاب کنید</option>
    @foreach($attributesGroupSelectBox as $attribute)

      <option value="{{$attribute->id}}">{{$attribute->title}}</option>

    @endforeach
</select>

</div>



<div class="form-group">

    <button type="submit" class="btn btn-success">ذخیره</button>
</div>

</form>
        
     </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            
          </div>

     
        </div>

    </div>



@endsection