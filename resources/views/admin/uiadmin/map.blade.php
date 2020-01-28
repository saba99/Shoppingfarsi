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
            <div class="card ">
              <div class="card-header ">
                Google Maps
              </div>
              <div class="card-body ">
                <div id="map" class="map"></div>
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