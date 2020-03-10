@extends('admin.layout.master')


@section('content')


<div class="content">

<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">ایجاد کد تخفیف</h3>
             
                   
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-6 col-md-offset-3">
              <form action="/administrator/coupons" method="POST">
                 {{--{{route('categories.store')}}--}}
                @csrf 
         

                     <div class="form-group">
                <lable for="title"  calss="control-lable mb-2">عنوان کد تخفیف</lable>
                 <input type="text" name="title" class="form-control" placeholder="عنوان تخفیف را وارد نمایید">
                     </div>
                    
                           <div class="form-group">
                <lable for="code"  calss="control-lable mb-2">کد تخفیف را وارد نمایید</lable>
                 <input type="text" name="code" class="form-control" placeholder="کد تخفیف">
                     </div>
                      <div class="form-group">
                <lable for="price"  calss="control-lable mb-2">قیمت</lable>
                 <input type="number" name="price" class="form-control" placeholder="قیمت را وارد نمایید ">
                     </div>
                     <div class="form-group">
                         <lable for="status">وضعیت</lable>
                         <input type="radio" name="status" value="0" checked>
                         <span class="">منتشر نشده</span>
                          <input type="radio" name="status" value="1" checked>
                          <span>منتشر شده</span>
                     </div>
                           
              <div class="form-group">

                <button type="submit" class="btn btn-success">
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





