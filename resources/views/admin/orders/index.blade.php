@extends('admin.layout.master')

@section('content')
@if(Session::has('add_brands'))

<div class="alert alert-success">

  <ul class="list-unstyled">
    <li>{{Session('add_brands')}}</li>
  </ul>
</div>

@endif

@if(Session::has('delete_brands'))

<div class="alert alert-danger">

  <ul class="list-unstyled">
    <li>{{Session('delete_brands')}}</li>
  </ul>
</div>

@endif

<div class="content">

<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">سفارشات</h3>
              <div class="text-left">
              
                
              </div>
                   
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
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
                              <a href="{{route('orders.lists',['id'=>$order->id])}}">{{$order->id}}</a></td>
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
@endsection


