
@extends('admin.layout.master')



@section('content')
    <section class="content" id="app">
        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title pull-right">ویرایش محصول :{{$product->title}}</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <form id="myForm" method="POST" action="/administrator/products/{{$product->id}}">
                         
                            @csrf
                            <input type="hidden" name="_method" value="PATCH">
                            <div class="form-group">
                                <label for="title">نام</label>
                                <input type="text" name="title" class="form-control" value="{{$product->title}}" placeholder="نام محصول را وارد کنید...">
                            </div>
                            <div class="form-group">
                                <label for="sku">شناسه کالا</label>
                                <input type="text" name="sku" class="form-control"  value="{{$product->sku}}" placeholder=" شناسه محصول را وارد نمایید ">
                            </div>
                            <div class="form-group">
                                <label for="slug">نام مستعار</label>
                                <input type="text" name="slug" class="form-control" value="{{$product->slug}}" placeholder="نام مستعار محصول را وارد کنید...">
                            </div>
                             <div class="form-group">
                                <label for="category">دسته بندی</label>
                                <select name="parent_category" id="parent_category" value="{{$product->category}}" class="form-control">

                                    @foreach($categories  as  $category)
                                       <option  value="{{$category->id}}">{{$category->name}}</option>
                                          @if(count($category->childrenRecursive)>0)
                                          @foreach($category->childrenRecursive as $sub_category)

                                        <option value="{{$sub_category->id}}">---{{$sub_category->name}}</option>

                                           @endforeach
                                         @endif
                                    @endforeach
                                
                                </select>
                            </div>
                           {{-- <div class="form-group">
                                <lable for="brand">نام برند</lable>
                                <select name="brand" id="brand"  value="{{$product->brand}}" @if($brand->id==$product->brand->id) 
                                      
                                 @endif  selected>
                                 <option value={{$brand->id}}
                                
                                </option>
                                </select>
                            </div>--}}
                             
                            <div class="form-group">
                                <label>وضعیت نشر</label>
                                <div>
                                    <input type="radio" name="status" value="0" @if($product->status==0) @endif checked> <span class="margin-l-10">منتشر نشده</span>
                                    <input type="radio" name="status" value="1"  @if($product->status==1)  @endif checked> <span>منتشر شده</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="price"> قیمت</label>
                                <input type="number" name="price" value={{$product->price}} class="form-control" placeholder="قیمت محصول را وارد کنید...">
                            </div>
                            <div class="form-group">
                                <label>قیمت ویژه</label>
                                <input type="number" name="discount_price"  value={{$product->discount}} class="form-control" placeholder="قیمت ویژه محصول را وارد کنید...">
                            </div>
                            
                            <div class="form-group">
                                <label>توضیحات</label>
                                <textarea id="textareaDescription" type="text" name="description" class="form-control" placeholder="توضیحات محصول را وارد کنید...">{{$product->short_description}}</textarea>
                            </div>
                            
                         {{--<div class="form-group">
                                <label for="photo">گالری تصاویر</label>
                                <input type="file" name="photo"  class="form-control" id="product-photo">
                                <div class="row">
                                @foreach($product->photos as $photo)

                                   <div class="col-md-3">
                                       <img  class="img-responsive" src="{{$photo->path}}">
                                        <button type="button" class="btn btn-danger" onclick="removeImages({{$photo->id}})">حذف</button>
                                       </div> 
                                      
                                @endforeach
                                </div>
                            </div> --}} 
                           {{-- <div class="form-group">
                                <label for="photo">گالری تصاویر</label>
                                <input type="hidden" name="photo_id[]" id="product-photo">
                                <div id="photo" class="dropzone"></div>
                            </div>--}} 
                         
                            <div class="form-group">
                                <label>عنوان سئو</label>
                                <input type="text" name="meta_title" class="form-control"  value={{$product->meta_title}} placeholder="عنوان سئو را وارد کنید...">
                            </div>
                            <div class="form-group">
                                <label>توضیحات سئو</label>
                                <textarea type="text" name="meta_desc" class="form-control"  value={{$product->meta_desc}} placeholder="توضیحات سئو را وارد کنید..."></textarea>
                            </div>
                            <div class="form-group">
                                <label>کلمات کلیدی سئو</label>
                                <input type="text" name="meta_keywords" class="form-control" value={{$product->meta_keywords}} placeholder="کلمات کلیدی سئو را وارد کنید...">
                            </div>
                            <button type="submit"  class="btn btn-success pull-left">ذخیره</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection

@section('script-vuejs')
    <script src="{{asset('admin/js/app.js')}}"></script>
@endsection

@section('scripts')
<script>  


</script>

@endsection
