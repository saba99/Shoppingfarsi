@extends('admin.layout.master')



@section('content')

<div class="content">



<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">اضافه کردن ویژگی ها</h3>
             
                   
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-6 col-md-offset-3">
            
<form action="/administrator/attributes-group/" method="POST">

{{--route('attributes-group.create')--}}
@csrf


<div class="form-group">
<lable for="title"  class="control-label" placeholder="لطفا عنوان ویژگی را وارد نمایید">عنوان</lable>
<input type="text"  name="title"  class="form-control" >
</div>

<div class="form-group">

<lable for="type"  class="control-label" >نوع</lable>

<select  name="type" class="form-control">
    
    <option value="select">لیست تکی</option>
    <option value="multiple">لیست چند تایی</option>
    {{--@foreach($attributesGroupSelectBox as $attribute)

      <option value="{{$attribute->id}}"}}>{{$attribute->title}}</option>

      @endforeach--}}
</select>

</div>

<div class="form-group">

    <button type="submit" class="btn btn-success">ذخیره</button>
</div>

</form>



              </div>
            </div>


              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            
          </div>

     
        </div>













@endsection