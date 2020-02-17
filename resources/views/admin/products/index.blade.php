@extends('admin.layout.master')


@section('content')
@if(Session::has('add_product'))

<div class="alert alert-success">

  <ul class="list-unstyled">
    <li>{{Session('add_product')}}</li>
  </ul>
</div>

@endif
@if(Session::has('update_product'))

<div class="alert alert-success">

  <ul class="list-unstyled">
    <li>{{Session('update_product')}}</li>
  </ul>
</div>

@endif
@if(Session::has('delete_product'))

<div class="alert alert-success">

  <ul class="list-unstyled">
    <li>{{Session('delete_product')}}</li>
  </ul>
</div>

@endif

<div class="content">

<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">محصولات</h3>
              <div class="text-left">
              
                   <a class="btn btn-app" href="{{route('products.create')}}">
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
                    <th class="text-center">نام مستعار</th>
                    <th class="text-center">کد محصول</th>
                    <th class="text-center">قیمت</th>
                   
                    <th class="text-center">وضعیت</th>
                    <th class="text-center">توضیحات</th>
                   <th class="text-center">تاریخ ایجاد</th>
                   <th class="text-center">عملیات</th>
                  </tr>
                  </thead>
                  <tbody>
                 @foreach ($products as  $product )
                     <tr>
                    <td class="text-center">{{$product->id}}</td>
                    <td class="text-center">{{$product->title}}</td>
                    <td class="text-center">{{$product->slug}}</td>
                    <td class="text-center">{{$product->sku}}</td>
                    <td class="text-center">{{$product->price}}</td>
                    <td class="text-center">{{$product->status}}</td>
                    <td class="text-center">{{$product->short_description}}</td>
                   <td class="text-center">{{$product->created_at}}</td>
                   <td class="text-center">
                     <a class="btn btn-warning" href="{{route('products.edit',$product->id)}}">ویرایش</a>
                     <div class="display-inline-block">

                      <form action="/administrator/products/{{$product->id}}" method="POST">
                          {{----}}
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

           
                  </tbody>
                </table>
                <div class="col-md-12" style="text-align: center">{{$products->links()}}</div>
              </div>
              <!-- /.table-responsive -->
            </div>
           
          </div>


        </div>
@endsection
