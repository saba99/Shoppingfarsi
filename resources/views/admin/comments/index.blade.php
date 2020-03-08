@extends('admin.layout.master')


@section('content')


@if(Session::has('update_comment'))

<div class="alert alert-success">

  <ul class="list-unstyled">
    <li>{{Session('update_comment')}}</li>
  </ul>
</div>

@endif
@if(Session::has('delete_comment'))

<div class="alert alert-success">

  <ul class="list-unstyled">
    <li>{{Session('delete_comment')}}</li>
  </ul>
</div>

@endif
  @if(Session::has('approved_comment'))

<div class="alert alert-success text-right col-12">

<ul class="list-unstyled">

  <li>{{Session('approved_comment')}}</li>
</ul>
</div>

@endif
@if(Session::has('rejected_comment'))

<div class="alert alert-danger text-right col-12">

<ul class="list-unstyled">

  <li>{{Session('rejected_comment')}}</li>
</ul>
</div>

@endif

<div class="content">

<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">نظرات</h3>
              <div class="text-left">
              
              </div>
                   
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="table-responsive">
                <table class="table no-margin">
                  <thead>
                  <tr>
                    <th class="text-center">شناسه</th>
                    <th class="text-center">عنوان</th>
                    
                     <th class="text-center">توضیحات</th>
                    <th class="text-center">وضعیت</th>
                  
                   <th class="text-center">تاریخ ایجاد</th>
                   
                   <th class="text-center">عملیات</th>
                  </tr>
                  </thead>
                  <tbody>
                                         
                 @foreach ($comments as  $comment)

                     <tr>
                    <td class="text-center">{{$comment->id}}</td>
                    <td class="text-center">{{$comment->product->title}}</td>
                    <td class="text-center">{{Str::limit($comment->description,50)}}</td>
                   
                 @if($comment->status == 0)
                    <td>
                        
                        {!! Form::open(['method' => 'POST', 'route' => ['comments.actions', $comment->id]]) !!}
                        <div class="form-group">
                            {!! Form::hidden('action', 'approved') !!}
                           
                            {!! Form::submit('تایید', ['class'=>'btn btn-success']) !!}
                        </div>
                        </form>
                    </td>
                @else
                    <td>
                        {!! Form::open(['method' => 'POST', 'route' => ['comments.actions', $comment->id]]) !!}
                        <div class="form-group">
                            {!! Form::hidden('action', 'rejected') !!}
                            {!! Form::submit('عدم تایید', ['class'=>'btn btn-danger']) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                @endif
            
                       
                    <td class="text-center">{{$comment->created_at}}</td>
                  
                     <td class="text-center">
                         
                     <a class="btn btn-warning" href="{{route('comments.edit',$comment->id)}}">ویرایش</a>

                     <div class="display-inline-block">
                      
                      <form action="/administrator/comments/{{$comment->id}}" method="POST">
                            {{-- {{route('comment.destroy',$comment->id)}} --}}                   
                      @csrf
                         <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger">حذف</button>
                        
                     </form>
                   
                     </div>
                     
                    </td>
                    @endforeach
         
                  </tbody>
                </table>
                <div class="col-md-12">

                      {{$comments->links()}}
                       </div>
              </div>
              <!-- /.table-responsive -->
            </div>
           
          </div>


        </div>
        
  </form>
  </div>
   </div>
    </section>




@endsection