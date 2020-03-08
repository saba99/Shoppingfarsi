@extends('admin.layout.master')


@section('content')


<div class="content">
@if(Session::has('update_comment'))

<div class="alert alert-success">

  <ul class="list-unstyled">
    <li>{{Session('update_comment')}}</li>
  </ul>
</div>

@endif
<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">ویرایش  نظرات</h3>
             
                   
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-6 col-md-offset-3">
              <form action="{{route('comments.update',$comment->id)}}" method="POST">
                
                @csrf 
                   <input type="hidden" name="_method" value="PATCH">

                 <div class="form-group">
                <lable for="description"  calss="control-lable mb-2">نظرات</lable>
           
                   <textarea type="text" name="description"  style="height: 200px;" value="{{$comment->description}}" class="form-control" placeholder="نظر خود را وارد نمایید"></textarea>

                     </div>         

              <div class="form-group">

                <button type="submit" class="btn btn-warning">
                به روز رسانی
                </button>
              </div>
              </form>
              </div>
            </div>


              </div>
              <!-- /.table-responsive -->
            </div>
            <!-- /.box-body -->
            
          </div>

     
        </div>



@endsection   





