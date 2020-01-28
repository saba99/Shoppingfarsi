@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                 
<form method="POST" action="{{route('admin.users.update',$user->id)}}">
  
                 <div class="form-group">
                       @csrf @method('PUT')
                       <label for="name">name:</label>
                       <input type="text" name="name" id="name" value={{$user->name}} class="form-control">
                    </div>
                    <div class="form-group">
                        <lable for="email">email:</lable>
                        <input type="text" name="email" id="email" value={{$user->email}} class="form-control">
                    </div>
                        <button type="submit" class="btn btn-success">update</button>
</form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
