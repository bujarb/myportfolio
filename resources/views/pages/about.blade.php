@extends('layouts.main')

@section('styles')
<style media="screen">
  .card{
    border-radius: 0px;

  }
  .card-body{
    background-color: #59ABE3;
  }
</style>
@endsection

@section('content')
<div class="m-t-50">
  <h1 class="text-center">What I do best ?</h1>
  <div class="row m-t-30 justify-content-center" id="whatido">
    <div id="what-box" class="text-center">
      <img src="{{asset('img/web.png')}}" alt="">
      <hr>
      <h3 class="m-t-10 text-center">Web Development</h3>
    </div>
    <div id="what-box" class="text-center">
      <img src="{{asset('img/css.png')}}" alt="">
      <hr>
      <h3 class="m-t-10 text-center">Web Design</h3>
    </div>
    <div id="what-box" class="text-center">
      <img src="{{asset('img/linux-logo.png')}}" alt="">
      <hr>
      <h3 class="m-t-10 text-center">System Administration</h3>
    </div>
    <div id="what-box" class="text-center">
      <img src="{{asset('img/24-hours-phone-service.png')}}" alt="">
      <hr>
      <h3 class="m-t-10 text-center">Web Maintenance</h3>
    </div>
  </div>
</div>
<div class="m-t-50 justify-text-center">
  <h3 class="text-center">Short description about me</h3>
  <hr class="smallhr">
  <div class="col-md-6 offset-md-3">
    <p class="card-text text-justify justify-text-center">
      Developer specialized mostly in web development with a 2 year experience in this field.
      My professional experience includes using programming languages such as PHP ,HTML, CSS, and JavaScript to create various features for client websites. I also have experience in working and maintenaning Linux Operating Systems. Combine this with my ability to thrive in a collaborative environment, and I think that makes me a perfect fit for your company or your project.
      For more do not hesitate to contact me.
    </p>
  </div>
</div>
@endsection
