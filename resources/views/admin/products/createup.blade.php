@extends('admin.layout.master')

@section('styles')
    <link rel="stylesheet" href="{{asset('/admin/dist/css/dropzone.css')}}">
@endsection

@section('content')
    <section class="content" id="app">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title pull-right">ایجاد محصول جدید</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <form method="post" action="{{route('simple-image-upload')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="title">نام</label>
                                <input type="text" name="title" class="form-control" placeholder="نام محصول را وارد کنید...">
                            </div>
                            <div class="form-group">
                                <label for="slug">نام مستعار</label>
                                <input type="text" name="slug" class="form-control" placeholder="نام مستعار محصول را وارد کنید...">
                            </div>
                            
                            <div class="form-group">
                                <label>وضعیت نشر</label>
                                <div>
                                    <input type="radio" name="status" value="0" checked> <span class="margin-l-10">منتشر نشده</span>
                                    <input type="radio" name="status" value="1"> <span>منتشر شده</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>قیمت</label>
                                <input type="number" name="price" class="form-control" placeholder="قیمت محصول را وارد کنید...">
                            </div>
                            <div class="form-group">
                                <label>قیمت ویژه</label>
                                <input type="number" name="discount_price" class="form-control" placeholder="قیمت ویژه محصول را وارد کنید...">
                            </div>
                            <div class="form-group">
                                <label for="title">توضیحات</label>
                                <input type="text" name="description" class="form-control" placeholder="نام محصول را وارد کنید...">
                            </div>
                            <div class="form-group ">
                          <input type="file" name="profile_image" class="form-control">
                               </div>   
                        <div class="form-group">
                                <label>عنوان سئو</label>
                                <input type="text" name="meta_title" class="form-control" placeholder="عنوان سئو را وارد کنید...">
                            </div>
                            <div class="form-group">
                                <label>توضیحات سئو</label>
                                <textarea type="text" name="meta_desc" class="form-control" placeholder="توضیحات سئو را وارد کنید..."></textarea>
                            </div>
                            <div class="form-group">
                                <label>کلمات کلیدی سئو</label>
                                <input type="text" name="meta_keywords" class="form-control" placeholder="کلمات کلیدی سئو را وارد کنید...">
                            </div>
                            <button type="submit" onclick="productGallery()" class="btn btn-success pull-left">ذخیره</button>
                        </div> 
     
  </form>
  </div>
   </div>
    </section>

@endsection
