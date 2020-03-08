@extends('admin.layout.master')

@section('content')



<div class="content">

<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">ویرایش برند :  {{$brand->title}}</h3>
             
                   
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-6 col-md-offset-3">
              <form action="/administrator/brands/{{$brand->id}}" method="POST">
                 {{--{{route('brands.store')}}--}}
                @csrf 
                   <input type="hidden" name="_method" value="PATCH">

                 <div class="form-group">
                <lable for="title"  calss="control-lable mb-2">نام برند</lable>
                 <input type="text" name="title"  value="{{$brand->title}}" class="form-control" >
                     </div>         

              
             
                           <div class="form-group">
                <lable for="description"  calss="control-lable mb-2">توضیحات برند</lable>
                 <textarea type="text" name="description"  value="{{$brand->description}}" class="form-control"></textarea>
                     </div>
                          
                     <div class="form-group" >

                     <lable for="photo"  class="control-label"  >تصویر برند</lable>

                     <input type="hidden" name="file_id" id="file_id">

                       <input type="file" name="filename" id="filename"  value="{{$brand->filename}}" class="form-control">

                        </div>

                  <div class="form-group">

                <button type="submit" class="btn btn-warning">
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