@extends('frontend.layout.master')
@section('navigation')

@include('partials.header2')

@endsection

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
            
            <div class="box-body">
        <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th class="text-center">نام محصول</th>
                    <th class="text-center">تعداد</th>
                     <th class="text-center">تصویر محصول</th>
                       
                   <th class="text-center">تاریخ ایجاد</th>
                  
                  </tr>
                  </thead>
                  <tbody>
               
                   @foreach($order->products as $product)

                         <tr>
                            <td class="text-center">{{$product->title}}</td>
                            <td class="text-center">{{$product->pivot->qty}}</td>
                             <td class="text-center">
                                 <img src="{{$product->files[0]->filename}}"  class="text-center " style="width:25%"></td>
                             <td class="text-center">{{$product->created_at}}</td>
                           
                         </tr>

                   @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.table-responsive -->
              <div class="customer-data">
               
                            <p style="margin-top:20px;">
                            <strong>نام خریدار:</strong>{{$order->user->name.' '.$order->user->last_name}}
                   </p>
                      
                   <p style="margin-top:20px;">
                            <strong>آدرس خریدار:</strong>{{$order->user->addresses[0]->address.' - ' . $order->user->addresses[0]->province->name}}
                   </p>
                   <p style="margin-top:20px;">
                            <strong>کد پستی خریدار:</strong>{{$order->user->addresses[0]->post_code}}
                   </p>
                    <p style="margin-top:20px;">
                            <strong>شماره موبایل خریدار:</strong>{{$order->user->phone}}
                   </p>
                      
                      
              </div>
             
        
    </div>
</div>
    </div>
        <!--Middle Part End -->
        <!--Right Part Start -->
       
        <!--Right Part End -->
      </div>

      @endsection