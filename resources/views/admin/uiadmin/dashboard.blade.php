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
                <h4 class="card-title"> CRUD</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th>
                        Name
                      </th>
                      <th>
                        EMAIL
                      </th>
                      <th>
                        CREATED_AT
                      </th>
                      <th >
                        UPDATED_AT
                      </th>
                      <th >
                        EDIT
                      </th>
                      <th >
                       DELETE
                      </th>
                    </thead>
                    <tbody>
                      <tr>
            
                        @foreach($users as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                           <td>{{$user->created_at}}</td>
                           <td>{{$user->updated_at}}</td>
                            <td><a href="{{route('admin.dashboard.edit',$user->id)}}" class="btn btn-success">edit</a></td>
                             <td>
                            <form  method="POST" action="{{route('admin.dashboard.destroy',$user->id)}}">
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