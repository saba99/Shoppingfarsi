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
                        <form method="post" action="{{route('file.store')}}" enctype="multipart/form-data">
                            @csrf
                                <div class="form-group">
                                <label for="title">نام</label>
                                <input type="text" name="title" class="form-control" placeholder="نام محصول را وارد کنید...">
                            </div>
                            <div class="form-group">
                                <label for="sku">شناسه کالا</label>
                                <input type="text" name="sku" class="form-control" placeholder=" شناسه محصول را وارد نمایید ">
                            </div>
                            <div class="form-group">
                                <label for="slug">نام مستعار</label>
                                <input type="text" name="slug" class="form-control" placeholder="نام مستعار محصول را وارد کنید...">
                            </div>
                          {{--  <div class="form-group">
                                <label for="category">دسته بندی</label>
                                <select name="parent_category" id="parent_category" class="form-control">

                                    @foreach($categories  as  $category)
                                       <option  value="{{$category->id}}">{{$category->name}}</option>
                                          @if(count($category->childrenRecursive)>0)
                                          @foreach($category->childrenRecursive as $sub_category)

                                        <option value="{{$sub_category->id}}">---{{$sub_category->name}}</option>

                                           @endforeach
                                         @endif
                                    @endforeach
                                
                                </select>
                            </div>--}}
                             <div class="form-group">
                                <label>وضعیت نشر</label>
                                <div>
                                    <input type="radio" name="status" value="0" checked> <span class="margin-l-10">منتشر نشده</span>
                                    <input type="radio" name="status" value="1"> <span>منتشر شده</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="price"> قیمت</label>
                                <input type="number" name="price" class="form-control" placeholder="قیمت محصول را وارد کنید...">
                            </div>
                            <div class="form-group">
                                <label>قیمت ویژه</label>
                                <input type="number" name="discount_price" class="form-control" placeholder="قیمت ویژه محصول را وارد کنید...">
                            </div>
                             <div class="form-group" {{ $errors->has('filename') ? 'has-error' : '' }}>
                                <label for="filename">تصویر</label>
                                    <input type="file" name="filename" id="filename" class="form-control">
                                    <span class="text-danger"> {{ $errors->first('filename') }}</span>
                                    <div class="row">
                                   
                                        <div class="col-sm-3" >
                                            {{--{{$files[0]->id}}--}}
                                           <img class="img-responsive" src="{{}}">
                                            
                                        </div>
                                
                                </div>
                            </div> 
                            
                            <div class="form-group">
                                <label>توضیحات</label>
                                <textarea id="textareaDescription" type="text" name="description" class="form-control" placeholder="توضیحات محصول را وارد کنید..."></textarea>
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
