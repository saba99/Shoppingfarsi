@extends('frontend.layout.master')

@section('navigation')

@include('partials.header2')

@endsection
@section('content')

<!--Middle Part Start-->
@include('partials.errors')
        <div class="col-sm-9" id="content">
          <h1 class="title">ثبت نام حساب کاربری</h1>
          <p>اگر قبلا حساب کاربریتان را ایجاد کرد اید جهت ورود به <a href="{{route('login')}}">صفحه لاگین</a> مراجعه کنید.</p>
          <form class="form-horizontal" method="POST" action="{{route('user.register')}}">

            @csrf
            <fieldset id="account">
              <legend>اطلاعات شخصی شما</legend>
              <div style="display: none;" class="form-group ">
                <label class="col-sm-2 control-label">گروه مشتری</label>
                <div class="col-sm-10">
                  <div class="radio">
                    <label>
                      <input type="radio" checked="checked" value="1" name="customer_group_id">
                      پیشفرض</label>
                  </div>
                </div>
              </div>
              <div class="form-group required">
                <label for="input-firstname" class="col-sm-2 control-label">نام</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-firstname" placeholder="نام" value="" name="name">
                </div>
              </div>
              <div class="form-group required">
                <label for="input-lastname" class="col-sm-2 control-label">نام خانوادگی</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-lastname" placeholder="نام خانوادگی" value="" name="last_name">
                </div>
              </div>
              <div class="form-group required">
                <label for="input-email" class="col-sm-2 control-label">آدرس ایمیل</label>
                <div class="col-sm-10">
                  <input type="email" class="form-control" id="input-email" placeholder="آدرس ایمیل" value="" name="email">
                </div>
              </div>
              <div class="form-group required">
                <label for="input-telephone" class="col-sm-2 control-label">شماره تلفن</label>
                <div class="col-sm-10">
                  <input type="tel" class="form-control" id="input-telephone" placeholder="شماره تلفن" value="" name="phone">
                </div>
              </div>
              <div class="form-group">
                <label for="input-fax" class="col-sm-2 control-label">کد ملی</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-fax" placeholder="کد ملی" value="" name="national_code">
                </div>
              </div>
            </fieldset>
            <fieldset id="address">
              <legend>آدرس</legend>
              <div class="form-group">
                <label for="input-company" class="col-sm-2 control-label">شرکت</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-company" placeholder="شرکت" value="" name="company">
                </div>
              </div>
              <div class="form-group required">
                <label for="input-address-1" class="col-sm-2 control-label">آدرس </label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-address-1" placeholder="آدرس " value="" name="address">
                </div>
              </div>
              <div class="form-group required">
                <label for="input-city" class="col-sm-2 control-label">شهر</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-city" placeholder="شهر" value="" name="city">
                </div>
              </div>
              <div class="form-group required">
                <label for="input-postcode" class="col-sm-2 control-label">کد پستی</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="input-postcode" placeholder="کد پستی" value="" name="post_code">
                </div>
              </div>
              <div class="form-group required">
                <label for="input-country" class="col-sm-2 control-label">استان</label>
                <div class="col-sm-10">
                  
      
        <select class="form-control" name="province" >
            {{--@foreach($provinces as $province)

               <option  name="{{$province->id}}">{{$province->name}}</option>

            @endforeach--}}
        <option>استان را انتخاب کنید</option>
          <option value="1">آذربایجان شرقی</option>
          <option value="2">آذربایجان غربی</option>
          <option value="3">اردبیل</option>
          <option value="4">اصفهان</option>
          <option value="5">البرز</option>
          <option value="6">ایلام</option>
          <option value="7">بوشهر</option>
          <option value="8">تهران</option>
          <option value="9">چهارمحال بختیاری</option>
          <option value="10">خراسان جنوبی</option>
          <option value="11">خراسان رضوی</option>
          <option value="12">خراسان شمالی</option>
          <option value="13">خوزستان</option>
          <option value="14">زنجان</option>
          <option value="15">سمنان</option>
          <option value="16">سیستان و بلوچستان</option>
          <option value="17">فارس</option>
          <option value="18">قزوین</option>
          <option value="19">قم</option>
          <option value="20">کردستان</option>
          <option value="21">کرمان</option>
          <option value="22">کرمانشاه</option>
          <option value="23">کهکیلویه و بویراحمد</option>
          <option value="24">گلستان</option>
          <option value="25">گیلان</option>
          <option value="26">لرستان</option>
          <option value="27">مازندران</option>
          <option value="28">مرکزی</option>
          <option value="29">هرمزگان</option>
          <option value="30">همدان</option>
          <option value="31">یزد</option>
        </select>
     
   
</div>
</div>  
            
              <div class="form-group required">
                <label for="input-zone" class="col-sm-2 control-label">شهر / استان</label>
                <div class="col-sm-10">
                  <select class="form-control" id="input-zone" name="city">
                    <option value=""> --- لطفا انتخاب کنید --- </option>
                    <option value="3513">Aberdeen</option>
                    <option value="3514">Aberdeenshire</option>
                    <option value="3515">Anglesey</option>
                    <option value="3516">Angus</option>
                    <option value="3517">Argyll and Bute</option>
                    <option value="3518">Bedfordshire</option>
                    <option value="3519">Berkshire</option>
                    <option value="3520">Blaenau Gwent</option>
                    <option value="3521">Bridgend</option>
                    <option value="3522">Bristol</option>
                    <option value="3523">Buckinghamshire</option>
                    <option value="3524">Caerphilly</option>
                    <option value="3525">Cambridgeshire</option>
                    <option value="3526">Cardiff</option>
                    <option value="3527">Carmarthenshire</option>
                    <option value="3528">Ceredigion</option>
                    <option value="3529">Cheshire</option>
                    <option value="3530">Clackmannanshire</option>
                    <option value="3531">Conwy</option>
                    <option value="3532">Cornwall</option>
                    <option value="3949">County Antrim</option>
                    <option value="3950">County Armagh</option>
                    <option value="3951">County Down</option>
                    <option value="3952">County Fermanagh</option>
                    <option value="3953">County Londonderry</option>
                    <option value="3954">County Tyrone</option>
                    <option value="3955">Cumbria</option>
                    <option value="3533">Denbighshire</option>
                    <option value="3534">Derbyshire</option>
                    <option value="3535">Devon</option>
                    <option value="3536">Dorset</option>
                    <option value="3537">Dumfries and Galloway</option>
                    <option value="3538">Dundee</option>
                    <option value="3539">Durham</option>
                    <option value="3540">East Ayrshire</option>
                    <option value="3541">East Dunbartonshire</option>
                    <option value="3542">East Lothian</option>
                    <option value="3543">East Renfrewshire</option>
                    <option value="3544">East Riding of Yorkshire</option>
                    <option value="3545">East Sussex</option>
                    <option value="3546">Edinburgh</option>
                    <option value="3547">Essex</option>
                    <option value="3548">Falkirk</option>
                    <option value="3549">Fife</option>
                    <option value="3550">Flintshire</option>
                    <option value="3551">Glasgow</option>
                    <option value="3552">Gloucestershire</option>
                    <option value="3553">Greater London</option>
                    <option value="3554">Greater Manchester</option>
                    <option value="3555">Gwynedd</option>
                    <option value="3556">Hampshire</option>
                    <option value="3557">Herefordshire</option>
                    <option value="3558">Hertfordshire</option>
                    <option value="3559">Highlands</option>
                    <option value="3560">Inverclyde</option>
                    <option value="3561">Isle of Wight</option>
                    <option value="3562">Kent</option>
                    <option value="3563">Lancashire</option>
                    <option value="3564">Leicestershire</option>
                    <option value="3565">Lincolnshire</option>
                    <option value="3566">Merseyside</option>
                    <option value="3567">Merthyr Tydfil</option>
                    <option value="3568">Midlothian</option>
                    <option value="3569">Monmouthshire</option>
                    <option value="3570">Moray</option>
                    <option value="3571">Neath Port Talbot</option>
                    <option value="3572">Newport</option>
                    <option value="3573">Norfolk</option>
                    <option value="3574">North Ayrshire</option>
                    <option value="3575">North Lanarkshire</option>
                    <option value="3576">North Yorkshire</option>
                    <option value="3577">Northamptonshire</option>
                    <option value="3578">Northumberland</option>
                    <option value="3579">Nottinghamshire</option>
                    <option value="3580">Orkney Islands</option>
                    <option value="3581">Oxfordshire</option>
                    <option value="3582">Pembrokeshire</option>
                    <option value="3583">Perth and Kinross</option>
                    <option value="3584">Powys</option>
                    <option value="3585">Renfrewshire</option>
                    <option value="3586">Rhondda Cynon Taff</option>
                    <option value="3587">Rutland</option>
                    <option value="3588">Scottish Borders</option>
                    <option value="3589">Shetland Islands</option>
                    <option value="3590">Shropshire</option>
                    <option value="3591">Somerset</option>
                    <option value="3592">South Ayrshire</option>
                    <option value="3593">South Lanarkshire</option>
                    <option value="3594">South Yorkshire</option>
                    <option value="3595">Staffordshire</option>
                    <option value="3596">Stirling</option>
                    <option value="3597">Suffolk</option>
                    <option value="3598">Surrey</option>
                    <option value="3599">Swansea</option>
                    <option value="3600">Torfaen</option>
                    <option value="3601">Tyne and Wear</option>
                    <option value="3602">Vale of Glamorgan</option>
                    <option value="3603">Warwickshire</option>
                    <option value="3604">West Dunbartonshire</option>
                    <option value="3605">West Lothian</option>
                    <option value="3606">West Midlands</option>
                    <option value="3607">West Sussex</option>
                    <option value="3608">West Yorkshire</option>
                    <option value="3609">Western Isles</option>
                    <option value="3610">Wiltshire</option>
                    <option value="3611">Worcestershire</option>
                    <option value="3612">Wrexham</option>
                  </select>
                </div>
              </div>
            </fieldset>
            <fieldset>
              <legend>رمز عبور شما</legend>
              <div class="form-group required">
                <label for="input-password" class="col-sm-2 control-label">رمز عبور</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="input-password" placeholder="رمز عبور" value="" name="password">
                </div>
              </div>
              <div class="form-group required">
                <label for="input-confirm" class="col-sm-2 control-label">تکرار رمز عبور</label>
                <div class="col-sm-10">
                  <input type="password" class="form-control" id="input-confirm" placeholder="تکرار رمز عبور" value="" name="confirm">
                </div>
              </div>
            </fieldset>
            <fieldset>
              <legend>خبرنامه</legend>
              <div class="form-group">
                <label class="col-sm-2 control-label">اشتراک</label>
                <div class="col-sm-10">
                  <label class="radio-inline">
                    <input type="radio" value="1" name="newsletter">
                    بله</label>
                  <label class="radio-inline">
                    <input type="radio" checked="checked" value="0" name="newsletter">
                    نه</label>
                </div>
              </div>
            </fieldset>
            <div class="buttons">
              <div class="pull-right">
                <input type="checkbox" value="1" name="agree">
                &nbsp;من <a class="agree" href="#"><b>سیاست حریم خصوصی</b> را خوانده ام و با آن موافق هستم</a> &nbsp;
                <input type="submit" class="btn btn-primary" value="ثبت نام ">
              </div>
            </div>
          </form>
        </div>
        <!--Middle Part End -->
{{--<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>--}}
@endsection
