@extends('admin.layout.master')


@section('content')


<div class="content">

<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">:ویرایش ویژگی {{$attributesGroup->title}}</h3>
             
                   
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-6 col-md-offset-3">
              <form action="/administrator/attributes-group/{{$attributesGroup->id}}" method="POST">
   
                @csrf 
                   <input type="hidden" name="_method" value="PATCH">

                 <div class="form-group">
                <lable for="title"  calss="control-lable mb-2">عنوان ویژگی</lable>
                 <input type="text" name="title"  value="{{$attributesGroup->title}}" class="form-control" placeholder="عنوان دسته بندی را وارد نمایید">
                     </div>         

               <div class="form-group">

                <lable for="type" class="control-label">عنوان</lable>
                

                <select name="type" id="type" class="form-control">

                  <option value="select" @if($attributesGroup->type=='select') selected @endif>تکی</option>

                   <option value="multiple" @if($attributesGroup->type=='multiple') selected @endif >چند تایی</option>

                </select>
              
              <div class="form-group ">

                <button type="submit" class="btn btn-success ">
                  ذخیره
                </button>
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





