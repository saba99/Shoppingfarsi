<div class="dropdown-menu">
              <ul>        
                  @foreach($childs as $child)  
           <li><a href="category.html">زیردسته ها </a> </li>       
	   <li>
           <a href=""><span>&rsaquo;</span>{{$child->name}}</a>
	@if(count($child->childrenRecursive))
            @include('manageChild',['childs' => $child->childrenRecursive])
        @endif
    </li>  
     @endforeach
                     
      </ul>
       </div>