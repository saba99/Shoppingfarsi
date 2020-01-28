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
                        
                            <th>Category Name</th>
                            <th>created_at</th>
                            <th>updated_at</th>
                            <th>Product Name</th>
                            
                            <th>edit</th>
                            <th>delete</th>
                        </tr>
                       @foreach ($categories as $category)
                       <tr>
                             <td>{{$category->id}}</td>  
                             <td>{{$category->catname}}</td> 
                              <td>{{$category->created_at}}</td> 
                             <td>{{$category->updated_at}}</td> 
                           @foreach ($category->products as $product)
                                  <td>{{ $product->name }}</td>
                           @endforeach     
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
