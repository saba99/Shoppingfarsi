<template>
<div>
    <div class="form-group">
                      <lable  class="control-label">دسته بندی اصلی</lable>
                

                <select name="category" id="category" class="form-control" multiple>

                  
                     @foreach($categories as $category)
                       
                       <option value="{{category->id}}">{{category->name}}</option>
                         @if(count($category->childrenRecursive )>0)

                            @foreach($category->childrenRecursive as $sub_category)

                           <option value="{{$sub_category->id}}">---{{$sub_category->name}}</option>
                            @endforeach
                         @endif
                
                     @endforeach
                </select>
                


                
                    </div>
                        <div class="form-group">
                      <lable  class="control-label">برند</lable>
                

                <select name="category" id="category" class="form-control" >

                  
                     @foreach($brands as $brand)
                       
                       <option value="{{$brand->id}}">{{$brand->title}}</option>
                        
                
                     @endforeach
                </select>
                    </div>
                     <div class="form-group">
                <lable   calss="control-lable mb-2">قیمت </lable>
                 <input type="number" name="price" class="form-control"  placeholder="قیمت محصول  را وارد نمایید"  >
                     </div class="mt-3"> 
                      <div class="form-group">
                       
                <lable for="status"  calss="control-lable mb-2">وضعیت</lable> 
                <div>
                 <input type="radio" name="status" value="0"  class="ml-3" checked><span >
                   منتشر نشده 
                 </span>
                 <input type="radio" name="status" value="1" class="mr-3" checked>
                 <span >منتشر شده</span>
                     </div>
                     </div>
                     <div class="form-group">
                <lable   calss="control-lable mb-2">تخفیف</lable>
                 <input type="number" name="discount_price" class="form-control" placeholder="تخفیف محصول را وارد نمایید">
                     </div> 
                       <div class="form-group">
                <lable for="short_description"  calss="control-lable mb-2">توضیحات محصول</lable>
                 <input type="text" name="short_description" class="form-control" placeholder="توضیحات محصول  را وارد نمایید">
                     </div>      

                   <div class="form-group" >

                 <lable  class="control-label"  >تصویر</lable>
                      
             <input type="file" name="pathimagefile" class="form-control">
                       </div>

                     <div class="form-group">
                <lable   calss="control-lable mb-2">نام دسته بندی</lable>
                 <input type="text" name="meta_title" class="form-control" placeholder="عنوان سئو را وارد نمایید">
                     </div>
                           <div class="form-group">
                <lable  calss="control-lable mb-2">توضیحات دسته بندی</lable>
                 <textarea type="text" name="meta_desc" class="form-control" placeholder="توضیحات دسته بندی را وارد نمایید"></textarea>
                     </div>
                           <div class="form-group">
                <lable   calss="control-lable mb-2">کلمه کلیدی دسته بندی</lable>
                 <input type="text" name="meta_keywords" class="form-control" placeholder="کلمه کلیدی دسته بندی را وارد نمایید">
                     </div>
              <div class="form-group">

                <button type="submit" class="btn btn-success">
                  ذخیره
                </button>
              </div>
  </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>