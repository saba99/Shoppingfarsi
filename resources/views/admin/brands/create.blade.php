@extends('admin.layout.master')

@section('styles')

<link rel="stylesheet" href="{{asset('/admin/dist/css/dropzone.css')}}"></style>

@endsection

@section('content')

<div class="content">



<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">ایجاد برند جدید</h3>
             
                   
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-6 col-md-offset-3">
            
<form action="/administrator/brands/" method="POST"  enctype="multipart/form-data" >

{{--route('.upload')--}}
@csrf


<div class="form-group">
<lable for="title"  class="control-label" placeholder="لطفا نام  برند را وارد نمایید">نام</lable>
<input type="text"  name="title"  class="form-control" >
</div>


<div class="form-group">
<lable for="description"  class="control-label" placeholder="لطفا توضیحات  برند را وارد نمایید">توضیحات</lable>
<textarea type="text"  name="description"  class="form-control" ></textarea>
</div>
<div class="form-group" >

<lable for="photo"  class="control-label"  >تصویر</lable>

 {{--<input type="hidden" name="file_id" id="brand-photo">--}}
{{--<div  id="photo" class="dropzone"   ></div>--}}

 <input type="file" name="file_id" id="filename" class="form-control">

</div>
<div class="form-group" >
   <label for="filename">تصویر</label>
  
        
     <div class="row">
                                   
    <div class="col-sm-3" >
                                            {{--{{$files[0]->id}}--}}
    <img class="img-responsive" src="">
                                            
     </div>
                                
      </div>
      </div> 


<div class="form-group">

    <button type="submit" class="btn btn-success">ذخیره</button>
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


@section('scripts')

{{--<script  type="text/javascript" src="{{asset('/admin/dist/js/dropzone.min.js')}}"></script>--}}
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/dropzone.js"></script>

{{--<script  type="text/javascript" src="{{asset('/admin/dist/js/dropzone-amd-module.min.js')}}"></script>--}}

{{--window.Dropzone = require('dropzone');

<script>
 
$(function () {

    var myDropzone = new Dropzone("#photo", {
       
         addRemoveLinks: true,
        
         acceptedFiles: ".jpeg,.jpg,.png,.gif",
          
          url: "{{ route('photos.upload') }}",
         // url: "{{ route('brands.create') }}",
          sending: function(file, xhr, formData){
            formData.append("_token","{{csrf_token()}}")
          },
         success: function(file, response){
            document.getElementById('brand-photo').value = response.photo_id
          }
        });
    });



</script>--}}

 
@endsection