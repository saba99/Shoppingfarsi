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

<div class="row">
    <aside id="column-right" class="col-sm-3 hidden-xs">
          <h3 class="subtitle">حساب کاربری</h3>
          <div class="list-group">
            <ul class="list-item">
              <li><a href="login.html">ورود</a></li>
              <li><a href="register.html">ثبت نام</a></li>
              <li><a href="#">فراموشی رمز عبور</a></li>
              <li><a href="#">حساب کاربری</a></li>
              <li><a href="#">لیست آدرس ها</a></li>
              <li><a href="wishlist.html">لیست علاقه مندی</a></li>
              <li><a href="#">تاریخچه سفارشات</a></li>
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
            <p>{{$user->name.' '.$user->lastname}}به حساب کاربری خود خوش آمدید</p>
        </div>
        </div>
        <!--Middle Part End -->
        <!--Right Part Start -->
       
        <!--Right Part End -->
      </div>










  
@endsection
