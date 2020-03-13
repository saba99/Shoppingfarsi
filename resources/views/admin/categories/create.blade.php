@extends('admin.layout.master')


@section('content')


<div class="content">
@include('partials.errors')
<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">دسته بندی ها</h3>
             
                   
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-6 col-md-offset-3">
              <form action="/administrator/categories" method="POST">
                 {{--{{route('categories.store')}}--}}
                @csrf 

                 <div class="form-group">
                <lable for="name"  calss="control-lable mb-2">نام دسته بندی</lable>
                 <input type="text" name="name" class="form-control" placeholder="عنوان دسته بندی را وارد نمایید">
                     </div>         

               <div class="form-group">

                <lable for="parent_category" class="control-label">دسته بندی اصلی</lable>
                

                <select name="parent_category" id="parent_category" class="form-control">

                  <option value="" >بدون دسته بندی</option>

                  @foreach($categories as $category)
  
                    <option value="{{$category->id}}">{{$category->name}} </option>
                         

                    //chidrenRecursive comes from  function in category model  that   return Category::with('childrenCategory')->where()->get()
                    @if(count($category->childrenRecursive)>0)
                      @foreach($category->childrenRecursive as $sub_category)

                 <option value="{{$sub_category->id}}">---{{$sub_category->name}}</option>

                       @endforeach

                      {{-- @include('admin.partials.category',['categories'=>$category->childrenRecursive,'level'=>1])--}}
                      
                    @endif
                  @endforeach

                </select>
               </div>
                     <div class="form-group">
                <lable for="meta_title"  calss="control-lable mb-2">نام دسته بندی</lable>
                 <input type="text" name="meta_title" class="form-control" placeholder="عنوان سئو را وارد نمایید">
                     </div>
                           <div class="form-group">
                <lable for="meta_desc"  calss="control-lable mb-2">توضیحات دسته بندی</lable>
                 <textarea type="text" name="meta_desc" class="form-control" placeholder="توضیحات دسته بندی را وارد نمایید"></textarea>
                     </div>
                           <div class="form-group">
                <lable for="meta_keywords"  calss="control-lable mb-2">کلمه کلیدی دسته بندی</lable>
                 <input type="text" name="meta_keywords" class="form-control" placeholder="کلمه کلیدی دسته بندی را وارد نمایید">
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





