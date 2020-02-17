@extends('admin.layout.master')


@section('content')
@if(Session::has('add_category'))

<div class="alert alert-success">

  <ul class="list-unstyled">
    <li>{{Session('add_category')}}</li>
  </ul>
</div>

@endif
@if(Session::has('update_category'))

<div class="alert alert-success">

  <ul class="list-unstyled">
    <li>{{Session('update_category')}}</li>
  </ul>
</div>

@endif
@if(Session::has('err_category'))

<div class="alert alert-danger">

  <ul class="list-unstyled">
    <li>{{Session('err_category')}}</li>
  </ul>
</div>

@endif

<div class="content">

<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">دسته بندی ها</h3>
              <div class="text-left">
              
                   <a class="btn btn-app" href="{{route('categories.create')}}">
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
                    
                   <th class="text-center">تاریخ ایجاد</th>
                   <th class="text-center">عملیات</th>
                  </tr>
                  </thead>
                  <tbody>
                 @foreach ($categories as  $category )
                     <tr>
                    <td class="text-center">{{$category->id}}</td>
                    <td class="text-center">{{$category->name}}</td>
                   <td class="text-center">{{$category->created_at}}</td>
                   <td class="text-center">
                     <a class="btn btn-warning" href="{{route('categories.edit',$category->id)}}">ویرایش</a>
                     <div class="display-inline-block">

                      <form action="/administrator/categories/{{$category->id}}" method="POST">
                          {{----}}
                          {{--{{route('categories.destroy',$category->id)--}}
                      @csrf
                        {{--<a class="btn btn-danger" href="{{route('categories.destroy',$category->id)}}">حذف</a>--}}
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger">حذف</button>
                     </form>
                   
                     </div>
                     <div class="display-inline-block">
                  {{--<form method="POST" action="{{route('categories.indexSetting',$category->id)}}">
                       @csrf
                     <button  type="submit" class="btn btn-primary" href=""> تنظیمات</a> </form> --}} 

                       
                      <a class="btn btn-primary" href="{{route('categories.indexSetting', $category->id)}}">تنظیمات</a>         
                   
                  </div>
                    </td>
                  </tr>
                 
                 @endforeach

               {{-- @if(count($category->childrenRecursive))


                  @include('admin.partials.categorylist',['categories' => $category->childrenRecursive, 'level' => 1])

                 @endif --}} 
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
           
          </div>


        </div>
@endsection
