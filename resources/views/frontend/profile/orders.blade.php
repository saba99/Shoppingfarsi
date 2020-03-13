@extends('frontend.layout.master')

@section('content')

<div class="container">
    @if(Session::has('success'))

<div class="alert alert-success">

  <ul class="list-unstyled">
    <li>{{Session('success')}}</li>
  </ul>
</div>

@endif
 @if(Session::has('warning'))

<div class="alert alert-warning">

  <ul class="list-unstyled">
    <li>{{Session('warning')}}</li>
  </ul>
</div>

@endif

<div class="row">
    <aside id="column-right" class="col-sm-3 hidden-xs">
          <h3 class="subtitle">حساب کاربری</h3>
          <div class="list-group">
            <ul class="list-item">
              <li><a href="{{route('login')}}">ورود</a></li>
              <li><a href="{{route('register')}}">ثبت نام</a></li>
              <li><a href="#">فراموشی رمز عبور</a></li>
              <li><a href="#">حساب کاربری</a></li>
              <li><a href="#">لیست آدرس ها</a></li>
              <li><a href="wishlist.html">لیست علاقه مندی</a></li>
              <li><a href="{{route('profile.orders')}}">تاریخچه سفارشات</a></li>
              <li><a href="#">دانلود ها</a></li>
              <li><a href="#">امتیازات خرید</a></li>
              <li><a href="#">بازگشت</a></li>
              <li><a href="#">تراکنش ها</a></li>
              <li><a href="#">خبرنامه</a></li>
              <li><a href="#">پرداخت های تکرار شونده</a></li>
            </ul>
          </div>
        </aside>
        <!--Middle Part Start-->
        
        <div id="content" class="col-sm-9">
        <div class="alert alert-success">
            <div class="box-body ">
              <div class="table-responsive ">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th class="text-center">شناسه</th>
                    <th class="text-center">مقدار</th>
                     <th class="text-center">وضعیت</th>
                   <th class="text-center">تاریخ ایجاد</th>
                  
                  </tr>
                  </thead>
                  <tbody>
               
                   @foreach($orders as $order)

                         <tr>

                            <td class="text-center">
                              <a href="{{route('profile.orders.lists',['id'=>$order->id])}}">{{$order->id}}</a></td>
                            <td class="text-center">{{$order->amount}}</td>
                            
                            @if($order->status==0)
                              
                            <td class="text-center">
                                <span class="badge badge-danger">پرداخت نشده</span>
                            </td>
                             @else 

                                <td class="text-center">
                                    <span class="badge badge-success">پرداخت شده</span>
                                </td>
                             @endif
                            
                            <td class="text-center">{{$order->created_at}}</td>
                           
                         </tr>

                   @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
            </div>
        </div>
        </div>

        <!--Middle Part End -->
        <!--Right Part Start -->
       
        <!--Right Part End -->
      </div>










  
@endsection
