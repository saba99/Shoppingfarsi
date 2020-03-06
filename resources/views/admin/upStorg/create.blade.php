@extends('admin.layout.master')


@section('content')
    <section class="content" id="app">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title pull-right">اپلود با استوریج</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <form method="post" action="{{route('photos.storage',['id'=>$product->id])}}" enctype="multipart/form-data">
                            @csrf
                               <div class="form-group">
                                <label for="title">نام</label>
                                <input type="text" name="title" class="form-control" placeholder="نام محصول را وارد کنید...">
                            </div>
                        
                             <div class="form-group" >
                                <label for="filename">تصویر</label>
                                    <input type="file" name="filename" id="filename" class="form-control">
                                   
                                </div>
                            </div> 
                      
                        
          <div class="form-group ">
          <button type="submit" class="btn btn-success pull-left" style="margin-top:10px">ذخیره</button>
          </div>
        </div>
                    </div>
      
        
  </form>
  </div>
   </div>
    </section>

@endsection
