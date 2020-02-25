@extends('admin.layout.master')


@section('content')
@if(Session::has('add_banner'))

<div class="alert alert-success">

  <ul class="list-unstyled">
    <li>{{Session('add_banner')}}</li>
  </ul>
</div>

@endif
@if(Session::has('update_banner'))

<div class="alert alert-success">

  <ul class="list-unstyled">
    <li>{{Session('update_banner')}}</li>
  </ul>
</div>

@endif
@if(Session::has('delete_banner'))

<div class="alert alert-success">

  <ul class="list-unstyled">
    <li>{{Session('delete_banner')}}</li>
  </ul>
</div>

@endif

<div class="content">

<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">اسلایدر</h3>
              <div class="text-left">
              
                   <a class="btn btn-app" href="">
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
                   
                    <th class="text-center">تصویر</th>
                    <th class="text-center">وضعیت</th>
                   
                   <th class="text-center">تاریخ ایجاد</th>
                   <th class="text-center">عملیات</th>
                  </tr>
                  </thead>
                  <tbody>
                @foreach ($banners as  $banner )
                     <tr>
                    <td class="text-center">{{$banner->id}}</td>
                    <td class="text-center">{{$banner->title}}</td>
                   
                    <td class="text-center">
                        <img src="{{$banner->image}}" class="img-responsive" style="width:100px;">
                    </td>
                    <td class="text-center">{{$banner->status}}</td>
                  
                   <td class="text-center">{{$banner->created_at}}</td>
                   <td class="text-center">
                     <a class="btn btn-warning" href="{{route('banners.edit',$banner->id)}}">ویرایش</a>
                     <div class="display-inline-block">

                      <form action="/administrator/delete-banner/{{$banner->id}}" method="POST">
                          
                          {{--{{route('categories.destroy',$category->id)--}}
                      @csrf
                        <a class="btn btn-danger" href="{{route('banners.delete',$banner->id)}}">حذف</a>
                            <input type="hidden" name="_method" value="DELETE">
                       
                     </form>
                   
                     </div>
                     
                    </td>
                  </tr>
                 
                 @endforeach

           
                  </tbody>
                </table>
                <div class="col-md-12" style="text-align: center">{{$banners->links()}}</div>
              </div>
              <!-- /.table-responsive -->
            </div>
           
          </div>


        </div>
@endsection
