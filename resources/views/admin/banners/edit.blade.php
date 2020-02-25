@extends('admin.layout.master')


@section('content')


<div class="content">
@if(Session::has('update_banner'))

<div class="alert alert-success">

  <ul class="list-unstyled">
    <li>{{Session('update_banner')}}</li>
  </ul>
</div>

@endif
<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">ویرایش اسلایدر :  {{$bannerDetails->name}}</h3>
             
                   
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-6 col-md-offset-3">
              <form action="{{route('banners.edit',$bannerDetails->id)}}" method="POST">
                 {{--{{route('categories.store')}}--}}
                @csrf 
                   <input type="hidden" name="_method" value="PATCH">

                 <div class="form-group">
                <lable for="title"  calss="control-lable mb-2">عنوان اسلایدر</lable>
                 <input type="text" name="title"  value="{{$bannerDetails->title}}" class="form-control" placeholder="عنوان دسته بندی را وارد نمایید">
                     </div>         

              
                     <div class="form-group">
                <lable for="link"  calss="control-lable mb-2">لینک</lable>
                 <input type="text" name="link"  value="{{$bannerDetails->link}}" class="form-control" placeholder="عنوان سئو را وارد نمایید">
                     </div>
                         <div class="form-group">
                                <label for="file">تصویر اسلایدر </label>
                                @if(!empty($bannerDetails->image)) 
                                <input type="file" name="file" class="form-control"  value="{{$bannerDetails->image}}" placeholder="عنوان اسلایدر را وارد کنید">
                                     @endif
                               
                            </div>
                          
                            <div class="form-group">
                                <label>وضعیت نشر</label>
                                <div>
                                    <input type="radio" name="status" value="0"  @if($bannerDetails->status=='0') @endif checked> <span class="margin-l-10">منتشر نشده</span>
                                    <input type="radio" name="status" value="1" @if($bannerDetails->status=='1')  @endif checked> <span>منتشر شده</span>
                                </div>
                            </div>
                           
                  
              <div class="form-group">

                <button type="submit" class="btn btn-warning">
                به روز رسانی
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





