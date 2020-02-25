
@extends('admin.layout.master')


@section('content')
@if(Session::has('add_banner'))

<div class="alert alert-success">

  <ul class="list-unstyled ">
    <li>{{Session('add_banner')}}</li>
  </ul>
</div>

@endif
    <section class="content" id="app">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title pull-right">ایجاد اسلایدر جدید</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <form id="myForm" method="post" action="{{route('banners.add')}}" enctype="multipart/form-data">
                         
                            @csrf
                            <div class="form-group">
                                <label for="title">نام</label>
                                <input type="text" name="title" class="form-control" placeholder="عنوان اسلایدر را وارد کنید">
                            </div>
                          
                              <div class="form-group">
                                <label for="file">تصویر اسلایدر </label>
                                <input type="file" name="file" class="form-control" placeholder="عنوان اسلایدر را وارد کنید">
                            </div>
                          
                            <div class="form-group">
                                <label>وضعیت نشر</label>
                                <div>  
                                    {{--@if($bannerDetails->status=='0') @endif--}}
                                    {{--@if($bannerDetails->status=='1')  @endif--}}
                                    <input type="radio" name="status" value="0"  checked> <span class="margin-l-10">منتشر نشده</span>
                                    <input type="radio" name="status" value="1"  checked> <span>منتشر شده</span>
                                </div>
                            </div>
                           
                              
                             <div class="form-group">
                                <label for="link">لینک</label>
                                <input type="text" name="link" class="form-control" placeholder="لینک اسلایدر را وارد کنید">
                            </div>
                            
                         
                          
                            <button type="submit"  class="btn btn-success pull-left">ذخیره</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
