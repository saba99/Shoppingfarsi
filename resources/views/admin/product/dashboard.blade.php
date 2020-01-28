@extends('admin.Dashlayouts.master') 

@section('title')
    Dashboard
@endsection 

@section('content')

<body class="">
  <div class="wrapper ">
    
     
    
    <div class="main-panel" id="main-panel">
    
      <div class="panel-header panel-header-sm">
       
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title">
                    <a href="{{route('admin.products.create')}}" class="btn btn-primary">create</a>
                 </h4>
              </div>
              <div class="card-body">
                 @if(session()->get('success'))
                   <div class="alert alert-success">
                       {{session()->get('success')}}
                   </div>
                   @endif
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                        <th>ID</th>
                            <th>IMG</th>
                            <th>NAME</th>
                            <th>PRICE</th>
                            <th>QUANTITY</th>
                            <th>Category</th>
                            <th>sold</th>
                            <th>popularity</th>
                            <th>created_at</th>
                            <th>updated_at</th>
                            <th>edit</th>
                            <th>delete</th>
                    </thead>
                    <tbody>
                    
                      <tr>
                        
                        @foreach($products as $product)
                        <tr>
                        
                             
                          <td>{{$product->id}}</td>
                          <td><img src="{{asset('AdminImg/'.$product->imgName)}}"></td>
                            <td>{{$product->name}}</td>
                            <td>{{$product->price}}</td>
                            <td>{{$product->quantity}}</td>
                            <td>{{$product->catname}}</td>
                            <td>{{$product->sellingcount}}</td>
                             <td>{{$product->popularity}}</td>
                           <td>{{$product->created_at}}</td>
                           <td>{{$product->updated_at}}</td>
                            <td><a href="{{route('admin.products.edit',$product->id)}}" class="btn btn-success">edit</a></td>
                             <td>
                            <form  method="POST" action="{{route('admin.products.destroy',$product->id)}}">
                                @csrf @method('DELETE')
                           <button type="submit" class="btn btn-danger">delete</a>
                            </form>
                        </td>
                        </tr>
                        @endforeach 
                      </tr>
                 
                    
                     
                     
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    
    </div>
  </div>
</div>
@endsection 


@section('scripts')
    
@endsection