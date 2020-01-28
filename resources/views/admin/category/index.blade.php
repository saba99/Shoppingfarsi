@extends('admin.Dashlayouts.master') 

@section('title')
    Dashboard
@endsection 

@section('content')  


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('admin.categories.create')}}" class="btn btn-primary">create</a>
                </div>
  
                <div class="card-body">
                 @if(session()->get('success'))
                   <div class="alert alert-success">
                       {{session()->get('success')}}
                   </div>
                   @endif
                  <table class="table table-striped custab">
                        <tr>
                            <th>نام دسته بندی</th>
                            
                        </tr>
                        
                        @foreach($categories as $category)
                        <tr>
                            <td>{{$category->category_name}}</td>
                           
                            <td><a href="{{route('admin.categories.edit',['category'=>$category])}}" class="btn btn-success">edit</a></td>
                             <td>
                            <form  method="POST" action="{{route('admin.categories.destroy',['category'=>$category])}}">
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


