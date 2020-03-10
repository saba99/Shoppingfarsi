@extends('admin.layout.master')


@section('content')

@if(Session::has('add_coupons'))

<div class="alert alert-success">

  <ul class="list-unstyled">
    <li>{{Session('add_coupons')}}</li>
  </ul>
</div>

@endif
@if(Session::has('update_coupons'))

<div class="alert alert-success">

  <ul class="list-unstyled">
    <li>{{Session('update_coupons')}}</li>
  </ul>
</div>

@endif
@if(Session::has('delete_coupons'))

<div class="alert alert-success">

  <ul class="list-unstyled">
    <li>{{Session('delete_coupons')}}</li>
  </ul>
</div>

@endif


<div class="content">

<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">کد های تخفیف</h3>
              <div class="text-left">

               <a class="btn btn-app" href="{{route('coupons.create')}}">
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
                    <th class="text-center">کد</th>
                     <th class="text-center">قیمت</th>
                    <th class="text-center">وضعیت</th>
                  
                   <th class="text-center">تاریخ ایجاد</th>
                   
                   <th class="text-center">عملیات</th>
                  </tr>
                  </thead>
                  <tbody>
                                         
                 @foreach ($coupons as  $coupon)

                     <tr>
                    <td class="text-center">{{$coupon->id}}</td>
                    <td class="text-center">{{$coupon->title}}</td>
                    <td class="text-center">{{$coupon->code}}</td>
                   <td class="text-center">{{$coupon->price}}</td>
                 @if($coupon->status == 0)
                    <td>
                      <span class="badge badge-pill badge-danger" >غیر فعال</span> 
                    </td>  
                @else
                    <td>
                       <span class="badge badge-pill badge-success" >فعال</span> 
                    </td>
                @endif
            
                       
                    <td class="text-center">{{$coupon->created_at}}</td>
                  
                     <td class="text-center">
                         
                     <a class="btn btn-warning" href="{{route('coupons.edit',$coupon->id)}}">ویرایش</a>

                     <div class="display-inline-block">
                      
                      <form action="/administrator/coupons/{{$coupon->id}}" method="POST">
                                           
                      @csrf
                         <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger">حذف</button>
                        
                     </form>
                   
                     </div>
                     
                    </td>
                    @endforeach
         
                  </tbody>
                </table>
            
              </div>
              <!-- /.table-responsive -->
            </div>
           
          </div>


        </div>
        
  </form>
  </div>
   </div>
    </section>




@endsection