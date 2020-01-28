@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('admin.users.create')}}" class="btn btn-primary">create</a>
                </div>
  
                <div class="card-body">
                 @if(session()->get('success'))
                   <div class="alert alert-success">
                       {{session()->get('success')}}
                   </div>
                   @endif
                  <table class="table table-striped custab">
                        <tr>
                            <th>name</th>
                            <th>email</th>
                            <th>created_at</th>
                            <th>updated_at</th>
                            <th>edit</th>
                            <th>delete</th>
                        </tr>
                        
                        @foreach($users as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                           <td>{{$user->created_at}}</td>
                           <td>{{$user->updated_at}}</td>
                            <td><a href="{{route('admin.users.edit',$user->id)}}" class="btn btn-success">edit</a></td>
                             <td>
                            <form  method="POST" action="{{route('admin.users.destroy',$user->id)}}">
                                @csrf @method('DELETE')
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