@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
  
                <div class="card-body">
                      @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error )
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                   @endif
                   <form  method="post" action="{{route('admin.categories.store')}}">
                    <div class="form-group">
                       @csrf
                       <label for="name">نام دسته بندی:</label>
                       <input type="text" name="name" id="name" class="form-control">
                    </div>
                    
                      <button type="submit"  class="btn btn-primary">ارسال</button>
                   </form>
               
                </div>
            </div>
        </div>
    </div>
</div>
@endsection