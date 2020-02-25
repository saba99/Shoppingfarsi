@extends('admin.layout.master')


@section('content')
@if(Session::has('add_brands'))

<div class="alert alert-success">

  <ul class="list-unstyled">
    <li>{{Session('add_brands')}}</li>
  </ul>
</div>

@endif
@if(Session::has('update_brands'))

<div class="alert alert-success">

  <ul class="list-unstyled">
    <li>{{Session('update_brands')}}</li>
  </ul>
</div>

@endif
@if(Session::has('delete_brands'))

<div class="alert alert-danger">

  <ul class="list-unstyled">
    <li>{{Session('delete_brands')}}</li>
  </ul>
</div>

@endif

<div class="content">

<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">برند ها</h3>
              <div class="text-left">
              
                   <a class="btn btn-app" href="{{route('brands.create')}}">
                        <i class="fa fa-plus ml-2"></i>جدید
                   </a>
            
              </div>
                   
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th class="text-center">شناسه</th>
                    <th class="text-center">عنوان</th>
                    <th class="text-center">توضیحات</th>
                    <th class="text-center">عکس</th>
                   <th class="text-center">تاریخ ایجاد</th>
                   <th class="text-center">عملیات</th>
                  </tr>
                  </thead>
                  <tbody>
               
                   @foreach($brands as $brand)

                         <tr>

                            <td>{{$brand->id}}</td>
                            <td>{{$brand->title}}</td>
                            <td>{{$brand->description}}</td>
                            
                            <td>{{$brand->created_at}}</td>
                            <td>
                                <a href="{{route('brands.edit'),$brand->id}}"  class="btn btn-warning">ویرایش</a>
                                <div class="display-inline-block">
                            <form  action="/administrator/brands/{{$brand->id}}" method="POST">
                                    @csrf
                                <input type="hidden"  name="_method" value="Delete">

                                <button type="submit" class="btn btn-danger">حذف</button>
                            </form>
                            </div>
                            </td>
                         </tr>

                   @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
           
          </div>


        </div>
@endsection


