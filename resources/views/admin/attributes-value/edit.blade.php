@extends('admin.layout.master')


@section('content')


<div class="content">

<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">:ویرایش مقدار ویژگی {{$attributesValue->title}}</h3>
             
                   
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-6 col-md-offset-3">
              <form action="/administrator/attributes-value/{{$attributesValue->id}}" method="POST">
   
                @csrf 
                   <input type="hidden" name="_method" value="PATCH">

                 <div class="form-group">
                <lable for="title"  calss="control-lable mb-2">عنوان ویژگی</lable>
                 <input type="text" name="title"  value="{{$attributesValue->title}}" class="form-control" placeholder="عنوان دسته بندی را وارد نمایید">
                     </div>         

               <div class="form-group">

                <lable for="attribute_group" class="control-label">ویژگی</lable>
                

                <select name="attribute_group" id="type" class="form-control">

                  @foreach($attributeGroup as $attribute)

                    <option value="{{$attribute->id}}" @if($attribute->id == $attributesValue->attributeGroup->id) selected @endif>{{$attribute->title}}</option>
                                    @endforeach
   
                 {{--<option value="select" @if($attributesValue->AtrributeGroup->id==$attributeGroup->id) selected @endif>تکی</option>

                   <option value="multiple" @if($attributesValue->type=='multiple') selected @endif >چند تایی</option>
--}}                 
                                    
                </select>
              </div>
              
              <div class="form-group">

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





