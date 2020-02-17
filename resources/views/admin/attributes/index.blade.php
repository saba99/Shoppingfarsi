@extends('admin.layout.master')


@section('content')


<div class="content">

  @if(Session::has('add_attributes'))
  <div class="alert alert-success">
<ul class="list-unstyled">

  <li>{{Session('add_attributes')}}</li>

</ul>
</div>
  @endif
   @if(Session::has('update_attributes'))
  <div class="alert alert-success">
<ul class="list-unstyled">

  <li>{{Session('update_attributes')}}</li>

</ul>
</div>
  @endif
   @if(Session::has('delete_attributes'))
  <div class="alert alert-danger">
<ul class="list-unstyled">

  <li>{{Session('delete_attributes')}}</li>

</ul>
</div>
  @endif

<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">ویژگی ها</h3>
              <div class="text-left">
              
                   <a class="btn btn-app" href="{{route('attributes-group.create')}}">
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
                    <th class="text-center">نوع</th>
                   <th class="text-center">تاریخ ایجاد</th>
                   <th class="text-center">عملیات</th>
                  </tr>
                  </thead>
                  <tbody>
                 @foreach ($attributesGroup as  $attribute )
                     <tr>
                    <td class="text-center">{{$attribute->id}}</td>
                    <td class="text-center">{{$attribute->title}}</td>
                   <td class="text-center">{{$attribute->type}}</td>
                    <td class="text-center">{{$attribute->created_at}}</td>
                   <td class="text-center">
                     <a class="btn btn-warning" href="{{route('attributes-group.edit',$attribute->id)}}">ویرایش</a>
                     <div class="display-inline-block">

                      <form action="/administrator/attributes-group/{{$attribute->id}}" method="POST">
                         
                          {{--{{route('categories.destroy',$category->id)--}}
                      @csrf
                        {{--<a class="btn btn-danger" href="{{route('categories.destroy',$category->id)}}">حذف</a>--}}
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger">حذف</button>
                     </form>
                   
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


