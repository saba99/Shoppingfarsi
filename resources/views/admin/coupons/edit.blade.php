@extends('admin.layout.master')


@section('content')


<div class="content">
@if(Session::has('update_coupons'))

<div class="alert alert-success">

  <ul class="list-unstyled">
    <li>{{Session('update_coupons')}}</li>
  </ul>
</div>

@endif
<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">ویرایش کد تخفیف</h3>
             
                   
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-6 col-md-offset-3">
              <form action="{{route('coupons.update',$coupons->id)}}" method="POST">
                
                @csrf 
                   <input type="hidden" name="_method" value="PATCH">

                 <div class="form-group">
                <lable for="title"  calss="control-lable mb-2">عنوان</lable>
           
                   <input type="text" name="title"   value="{{$coupons->title}}" class="form-control" >

                     </div>  
                     
                 <div class="form-group">
                <lable for="code"  calss="control-lable mb-2">کد تخفیف</lable>
           
                   <input type="text" name="code"  value="{{$coupons->code}}" class="form-control" >

                     </div> 
                     <div class="form-group">
                <lable for="price"  calss="control-lable mb-2">قیمت</lable>
           
                   <input type="number" name="price"   value="{{$coupons->price}}" class="form-control" >

                     </div> 
                           <div class="form-group">
                                <label>وضعیت نشر</label>
                                <div>
                                    <input type="radio" name="status" value="0" @if($coupons->status==0) @endif checked> <span class="margin-l-10">منتشر نشده</span>
                                    <input type="radio" name="status" value="1"  @if($coupons->status==1)  @endif checked> <span>منتشر شده</span>
                                </div>
                            </div>  

              <div class="form-group">

                <button type="submit" class="btn btn-warning">
                به روز رسانی
                </button>
              </div>
              </form>
              </div>
            </div>


              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            
          </div>

     
        </div>



@endsection   





