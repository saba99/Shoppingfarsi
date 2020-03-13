@extends('admin.layout.master')

@section('content')


<div class="content">

<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">لیست سفارشات :{{$order->id}}</h3>
              <div class="text-left">
              
                
              </div>
                   
            </div>
            <!-- /.box-header -->
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
@endsection


