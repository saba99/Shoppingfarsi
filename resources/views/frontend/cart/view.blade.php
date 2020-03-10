@extends('frontend.layout.master')




@section('content')

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
                  <tr>
                    <td class="text-center"><a href="product.html"><img src="image/product/samsung_tab_1-50x75.jpg" alt="تبلت ایسر" title="تبلت ایسر" class="img-thumbnail" /></a></td>
                    <td class="text-left"><a href="product.html">تبلت ایسر</a><br />
                      <small>امتیازات خرید: 1000</small></td>
                    <td class="text-left">SAM1</td>
                    <td class="text-left"><div class="input-group btn-block quantity">
                        <input type="text" name="quantity" value="1" size="1" class="form-control" />
                        <span class="input-group-btn">
                        <button type="submit" data-toggle="tooltip" title="بروزرسانی" class="btn btn-primary"><i class="fa fa-refresh"></i></button>
                        <button type="button" data-toggle="tooltip" title="حذف" class="btn btn-danger" onClick=""><i class="fa fa-times-circle"></i></button>
                        </span></div></td>
                    <td class="text-right">98000 تومان</td>
                    <td class="text-right">98000 تومان</td>
                  </tr>
                  <tr>
                    <td class="text-center"><a href="product.html"><img src="image/product/sony_vaio_1-50x75.jpg" alt="کفش راحتی مردانه" title="کفش راحتی مردانه" class="img-thumbnail" /></a></td>
                    <td class="text-left"><a href="product.html">کفش راحتی مردانه</a></td>
                    <td class="text-left">محصولات 114</td>
                    <td class="text-left"><div class="input-group btn-block quantity">
                        <input type="text" name="quantity" value="1" size="1" class="form-control" />
                        <span class="input-group-btn">
                        <button type="submit" data-toggle="tooltip" title="بروزرسانی" class="btn btn-primary"><i class="fa fa-refresh"></i></button>
                        <button type="button" data-toggle="tooltip" title="حذف" class="btn btn-danger" onClick=""><i class="fa fa-times-circle"></i></button>
                        </span></div></td>
                    <td class="text-right">32000 تومان</td>
                    <td class="text-right">32000 تومان</td>
                  </tr>
                </tbody>
              </table>
            </div>
          <h2 class="subtitle">حالا مایلید چه کاری انجام دهید؟</h2>
          <p>در صورتی که کد تخفیف در اختیار دارید میتوانید از آن در اینجا استفاده کنید.</p>
          <div class="row">
            <div class="col-sm-6">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">استفاده از کوپن تخفیف</h4>
                </div>
                <div id="collapse-coupon" class="panel-collapse collapse in">
                  <div class="panel-body">
                    <label class="col-sm-4 control-label" for="input-coupon">کد تخفیف خود را در اینجا وارد کنید</label>
                    <div class="input-group">
                      <input type="text" name="coupon" value="" placeholder="کد تخفیف خود را در اینجا وارد کنید" id="input-coupon" class="form-control" />
                      <span class="input-group-btn">
                      <input type="button" value="اعمال کوپن" id="button-coupon" data-loading-text="بارگذاری ..."  class="btn btn-primary" />
                      </span></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h4 class="panel-title">استفاده از کارت هدیه</h4>
                </div>
                <div id="collapse-voucher" class="panel-collapse collapse in">
                  <div class="panel-body">
                    <label class="col-sm-4 control-label" for="input-voucher">کد کارت هدیه را در اینجا وارد کنید</label>
                    <div class="input-group">
                      <input type="text" name="voucher" value="" placeholder="کد کارت هدیه را در اینجا وارد کنید" id="input-voucher" class="form-control" />
                      <span class="input-group-btn">
                      <input type="submit" value="اعمال کارت هدیه" id="button-voucher" data-loading-text="بارگذاری ..."  class="btn btn-primary" />
                      </span> </div>
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

                <form class="form-horizontal" method="POST" action="CartController@store">
                  @csrf
                  <div class="form-group required">
                    <label class="col-sm-2 control-label" for="input-country">کشور</label>
                    <div class="col-sm-10">
                     
                      <select name="country" id="country" class="form-control dynamic" data-dependent="country">
                       
                        <option value="67">select state</option>
                        {{--@foreach($ as $country)
                           <option value="{{$country->country}}">
                                  {{$country->country}}
                           </option>
                        
                        @endforeach--}}
                        
                      </select>
                    </div>
                  </div>
                  <div class="form-group required">
                    <label class="col-sm-2 control-label" for="input-country">کشور</label>
                    <div class="col-sm-10">
                     
                      <select name="state" id="state" class="form-control dynamic" data-dependent="state">
                       
                        <option value="67">select state</option>
                       {{--@foreach($country_list as $country)
                           

                        @endforeach--}} 
                        
                      </select>
                    </div>
                  </div>
                  <div class="form-group required">
                    <label class="col-sm-2 control-label" for="input-zone">شهر / استان</label>
                    <div class="col-sm-10">
                      <select class="form-control dynamic" id="city" name="city" data-dependent="city">
                        <option value="">select city </option>
                      
                      </select>
                    </div>
                  </div>
                  <div class="form-group required">
                    <label class="col-sm-2 control-label" for="input-postcode">کد پستی</label>
                    <div class="col-sm-10">
                      <input type="text" name="postcode" value="" placeholder="کد پستی" id="input-postcode" class="form-control" />
                    </div>
                  </div>
                  <input type="submit" value="دریافت پیش فاکتور" id="button-quote"  class="btn btn-primary" />
                </form>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4 col-sm-offset-8">
              <table class="table table-bordered">
                <tr>
                  <td class="text-right"><strong>جمع کل:</strong></td>
                  <td class="text-right">132000 تومان</td>
                </tr>
                <tr>
                  <td class="text-right"><strong>کسر هدیه:</strong></td>
                  <td class="text-right">4000 تومان</td>
                </tr>
                <tr>
                  <td class="text-right"><strong>مالیات:</strong></td>
                  <td class="text-right">11880 تومان</td>
                </tr>
                <tr>
                  <td class="text-right"><strong>کل :</strong></td>
                  <td class="text-right">139880 تومان</td>
                </tr>
              </table>
            </div>
          </div>
          <div class="buttons">
            <div class="pull-left"><a href="index.html" class="btn btn-default">ادامه خرید</a></div>
            <div class="pull-right"><a href="checkout.html" class="btn btn-primary">تسویه حساب</a></div>
          </div>
        </div>

@endsection



@section('scripts')
    

{{--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js" ></script>--}}
<script>
$(document).ready(function(){

 $('.dynamic').change(function(){
  if($(this).val() != '')
  {
   var select = $(this).attr("id");
   var value = $(this).val();
   var dependent = $(this).data('dependent');
   var _token = $('input[name="_token"]').val();
   $.ajax({
    url:"{{ route('dynamicdependent.fetch') }}",
    method:"POST",
    data:{select:select, value:value, _token:_token, dependent:dependent},
    success:function(result)
    {
     $('#'+dependent).html(result);
    }

   })
  }
 });

 $('#country').change(function(){
  $('#state').val('');
  $('#city').val('');
 });

 $('#state').change(function(){
  $('#city').val('');
 });
 

});
</script>
@endsection