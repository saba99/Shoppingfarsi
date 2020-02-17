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
                        <form method="post" action="{{route('simple-image-upload.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="title">توضیحات</label>
                                <input type="text" name="description" class="form-control" placeholder="نام محصول را وارد کنید...">
                            </div>
                            <div 
    
          <div class="form-group ">
          <input type="file" name="profile_image" class="form-control">
          </div>
        </div>
      
          <div class="form-group ">
          <button type="submit" class="btn btn-success" style="margin-top:10px">Upload Image</button>
          </div>
        </div>
        
  </form>
  </div>
   </div>
    </section>

@endsection
