@extends('admin.Dashlayouts.master')


@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="" class="btn btn-primary">create</a>
                </div>
  
                <div class="card-body">
               
                  <table class="table table-striped custab">
                        <tr>
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
                        </tr>
                        
                        @foreach($imgproducts as $imgproduct)
                        <tr>
                             <td>{{$imgproduct->id}}</td>
                             <td><img src="{{asset('AdminImg/'.$imgproduct->imgName)}}"></td>
                             <td>{{$imgproduct->name}}</td>
                             <td>{{$imgproduct->price}}</td>
                             <td>{{$imgproduct->quantity}}</td>
                             <td>{{$imgproduct->catname}}</td>
                             <td>{{$imgproduct->sellingcount}}</td>
                             <td>{{$imgproduct->popularity}}</td>
                           <td>{{$imgproduct->created_at}}</td>
                           <td>{{$imgproduct->updated_at}}</td>
                            <td><a href="" class="btn btn-success">edit</a></td>
                             <td>
                            <form  method="POST" action="">
                                
                           <button type="submit" class="btn btn-danger">delete</a>
                            </form>
                        </td>
                        </tr>
                        @endforeach 
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection