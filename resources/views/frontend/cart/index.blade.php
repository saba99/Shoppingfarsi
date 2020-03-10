@extends('frontend.layout.master')
@section('content')
  @if(Session::has('error'))
            <div class="alert alert-warning">
                <div>{{session('error')}}</div>
            </div>
        @endif
        @if(Session::has('warning'))
            <div class="alert alert-warning">
                <div>{{session('warning')}}</div>
            </div>
        @endif
        @if(Session::has('success'))
            <div class="alert alert-success">
                <div>{{session('success')}}</div>
            </div>
        @endif
<div id="content" class="col-sm-12">
          <h1 class="title">سبد خرید</h1>
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <td class="text-center">تصویر</td>
                    <td class="text-left">نام محصول</td>
                    <td class="text-left">مدل</td>
                    <td class="text-left">تعداد</td>
                    <td class="text-right">قیمت واحد</td>
                    <td class="text-right">کل</td>
                  </tr>
                </thead>
                <tbody>
                  @foreach($cart->items as $product)
                  <tr>
                    <td class="text-center"><a href="product.html"><img src="{{$product['item']->files[0]->filename}}"  style="width: 100px;" class="img-thumbnail" /></a></td>
                    <td class="text-left"><a href="product.html">{{$product['item']->title}}</a><br />
                      
                    <td class="text-left">{{$product['item']->sku}}</td>
                    <td class="text-left"><div class="input-group btn-block quantity">
                        <input type="text" name="quantity" value="{{$product['item']['qty']}}" size="1" class="form-control" />
                        <span class="input-group-btn">
                        <button type="submit" data-toggle="tooltip" title="بروزرسانی" class="btn btn-primary"><i class="fa fa-refresh"></i></button>
                        <button type="button" data-toggle="tooltip" title="حذف" class="btn btn-danger" onClick="event.preventDefault();
                            
                          document.getElementById('remove-cart-item_{{$product['item']->id}}').submit();"><i class="fa fa-times-circle"></i></button>
                        </span>
                  
                    <form id="remove-cart-item" action="{{ route('cart.remove',['id'=>$product['item']->id]) }}" method="POST" style="display: none;">
                               @csrf
                            </form>
                      </div></td>
                    <td class="text-right">{{$product['item']->discount ? product['item']->discount : $product['item']->price}}</td>
                    <td class="text-right">{{$product['price']}}</td>
                  </tr>
                  @endforeach
                  </tr>
                  
                </tbody>
              </table>
            </div>
          <h2 class="subtitle">حالا مایلید چه کاری انجام دهید؟</h2>
          <p>در صورتی که کد تخفیف در اختیار دارید میتوانید از آن در اینجا استفاده کنید.</p>
          <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">استفاده از کوپن تخفیف</h4>
                </div>
                <div id="collapse-coupon" class="panel-collapse collapse in">
                  <div class="panel-body">
                    <label class="col-sm-4 control-label" for="input-coupon">کد تخفیف خود را در اینجا وارد کنید</label>
                    <form action="{{ route('coupon.add') }}" method="post">
                                    @csrf
                                        <div class="input-group">
                                            <input type="text" name="code" placeholder="کد تخفیف خود را در اینجا وارد کنید" class="form-control" />
                                            <span class="input-group-btn">
                                                <button type="submit"
                                                        class="btn btn-primary" >اعمال کوپن</button>
                                            </span>
                                        </div>
                                    </form>
                  </div>
                </div>
              </div>
            </div>
          
          </div>
          <div class="panel panel-default">
            <div class="panel-heading">
              <h4 class="panel-title">پیش بینی هزینه ی حمل و نقل و مالیات</h4>
            </div>
            <div id="collapse-shipping" class="panel-collapse collapse in">
              <div class="panel-body">
                <p>مقصد خود را جهت براورد هزینه ی 0 تومان وارد کنید.</p>
                <form class="form-horizontal">
                  <div class="form-group required">
                    <label class="col-sm-2 control-label" for="input-country">کشور</label>
                    <div class="col-sm-10">
                      <select name="country_id" id="input-country" class="form-control">
                        @foreach($countries as $country)
                       
                        <option value="{{$country->id}}">{{$country->title}}</option>
                         @endforeach
                      </select>
                     
                    </div>
                  </div>
                  <div class="form-group required">
                    <label class="col-sm-2 control-label" for="input-country">کشور</label>
                    <div class="col-sm-10">
                      <select name="country_id" id="input-country" class="form-control">
                        @foreach($cities as $city)
                       
                        <option value="{{$city->id}}">{{$city->name}}</option>
                         @endforeach
                      </select>
                     
                    </div>
                  </div>
                  <div class="form-group required">
                    <label class="col-sm-2 control-label" for="input-zone">شهر / استان</label>

                    <div class="col-sm-10">
                      <select class="form-control" id="input-zone" name="zone_id">
                       
                       

                        <option value=""></option>
                    
                      </select>
                    </div>
                  </div>
                  <div class="form-group required">
                    <label class="col-sm-2 control-label" for="input-postcode">کد پستی</label>
                    <div class="col-sm-10">
                      <input type="text" name="postcode" value="" placeholder="کد پستی" id="input-postcode" class="form-control" />
                    </div>
                  </div>
                  <input type="button" value="دریافت پیش فاکتور" id="button-quote" data-loading-text="بارگذاری ..." class="btn btn-primary" />
                </form>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4 col-sm-offset-8">
              <table class="table table-bordered">
                <tr>
                  <td class="text-right"><strong>جمع کل:</strong></td>
                  <td class="text-right">{{Session::get('cart')->totalPurePrice}} تومان</td>
                </tr>
                <tr>
                  <td class="text-right"><strong>کسر هدیه:</strong></td>
                  <td class="text-right">{{Session::get('cart')->totalDiscountPrice}} تومان</td>
                </tr>
               {{-- @if(Auth::check() && Session::get('cart')->coupon)
                                <tr>
                                    <td class="text-right"><strong>{{Session::get('cart')->coupon['coupon']->title}}</strong></td>
                                    <td class="text-right">{{Session::get('cart')->couponDiscount}} تومان</td>
                                </tr>
                            @endif--}}
                            <tr>
                                <td class="text-right"><strong>قابل پرداخت</strong></td>
                                <td class="text-right">{{Session::get('cart')->totalPrice}} تومان</td>
                            </tr>
              </table>
            </div>
          </div>
          <div class="buttons">
            <div class="pull-left"><a href="index.html" class="btn btn-default">ادامه خرید</a></div>
            <div class="pull-right"><a href="{{route('payment.verify',['amount'=>Session::get('cart')->totalPrice])}}" class="btn btn-primary">تسویه حساب</a></div>
       
          </div>
        </div>

@endsection