@extends('layouts.main')
@section('styles')
<style media="screen">

  .card{
    border-radius: 0px;
  }
  .card-body{
    background-color: #E4F1FE;
    border-radius: 0px;
  }

  .card-body a{
    color:#013243;
    border-radius: 0px;
    text-decoration: none;
  }

  .card-body a:hover{
    color:#013243;
    border-radius: 0px;
    font-weight: bold;
  }

  .card-body h4{
    font-weight: bold;
  }
  #latest{
    padding: 2px;
  }

</style>
@endsection
@section('content')
<div class="justify-content-center">
  <div class="row m-t-50 justify-content-center">
    <img src="{{asset('img/welcome.png')}}" alt="">
  </div>
  <h1 class="text-center">Welcome to my Protfolio.</h1>
  <p class="text-center">Here you can find everything you need to know about me and my projets</p>
</div>
<hr>
<h1 class="text-center m-t-50">Lastest Projects</h1>
<div class="row m-t-30">
  <div class="col-md-4" id="latest">
    <div class="card">
      <div class="card-body">
        <a href="#"><h4 class="card-title">Shoping Cart #1</h4></a>
        <h6 class="card-subtitle mb-2 text-muted">Authorize.net Shoping Cart</h6>
        <p class="card-text">Built a shoping cart using Laravel framework and Authorize.net as a payment processor</p>
      </div>
    </div>
  </div>
  <div class="col-md-4" id="latest">
    <div class="card">
      <div class="card-body">
        <a href="#"><h4 class="card-title">Shoping Cart #1</h4></a>
        <h6 class="card-subtitle mb-2 text-muted">Authorize.net Shoping Cart</h6>
        <p class="card-text">Built a shoping cart using Laravel framework and Authorize.net as a payment processor</p>
      </div>
    </div>
  </div>
  <div class="col-md-4" id="latest">
    <div class="card">
      <div class="card-body">
        <a href="#"><h4 class="card-title">Shoping Cart #1</h4></a>
        <h6 class="card-subtitle mb-2 text-muted">Authorize.net Shoping Cart</h6>
        <p class="card-text">Built a shoping cart using Laravel framework and Authorize.net as a payment processor</p>
      </div>
    </div>
  </div>
</div>
<p class="text-center m-t-30"><a href="{{route('project.index')}}" id="viewall">View all projects <i class="fa fa-arrow-right"></i></a></p>
@endsection

@section('scripts')

@endsection
