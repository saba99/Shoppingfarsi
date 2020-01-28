@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                 
<form method="POST" action="{{route('admin.products.update',$product->id)}}">
  
                 <div class="form-group">
                       @csrf @method('PUT')
                       <label for="name">name:</label>
                       <input type="text" name="name" id="name" value={{$product->name}} class="form-control">
                    </div>
                    <div class="form-group">
                        <lable for="email">price:</lable>
                        <input type="text" name="price" id="price" value={{$product->price}} class="form-control">
                    </div>
                    <div class="form-group">
                        <lable for="email">quantity:</lable>
                        <input type="text" name="quantity" id="quantity" value={{$product->quantity}} class="form-control">
                    </div>
                    <div class="form-group">
                        <lable for="email">selling count:</lable>
                        <input type="text" name="sellingcount" id="sellingcount" value={{$product->sellingcount}} class="form-control">
                    </div>
                        <button type="submit" class="btn btn-success">update</button>
</form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection