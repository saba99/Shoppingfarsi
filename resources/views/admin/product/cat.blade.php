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
                        @foreach ($cats as $cat)
                           <tr>
                          <td>{{ $cat->id }}</td>
                            <td>{{ $cat->catname }}</td>
                           @foreach ($cat->$cats as  $product)
                               <td>{{$product->name}}</td>
                           @endforeach
                        </td>
                        </tr>
                        @endforeach 
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>