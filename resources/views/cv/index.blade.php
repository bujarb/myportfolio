@extends('layouts.main')

@section('content')
<div class="row m-t-30" >
  <div class="col-md-2">
    <div id="infobox">
      <h3 class="text-center" id="title">Basic Info</h3>
      <hr class="">
      <div class="smallcvbox text-center">
        <p id="headtitle">Full Name</p>
        <p class="">Bujar Begisholli</p>
      </div>
      <div class="smallcvbox text-center">
        <p id="headtitle">Date of birth</p>
        <p>12th December 1994</p>
      </div>
      <div class="smallcvbox text-center">
        <p id="headtitle">Currently living</p>
        <p>Ferizaj, Kosovo</p>
      </div>
    </div>
  </div>
  <div class="col-md-4 offset-md-1">
    <div id="infobox">
      <h3 class="text-center" id="title">Education</h3>
      <hr class="">
      <div class="smallcvbox text-center">
        <img src="{{asset('img/ubtlogo.png')}}" alt="" width="50px;">
        <p id="uniname">University For Bussines & Technology</p>
        <p id="degree">Bachelor</p>
        <p id="discipline">Computer Science & Engineering</p>
        <p id="attended">October 2013 - December 2017</p>
      </div>
      <div class="smallcvbox text-center">
        <img src="{{asset('img/tuwien.png')}}" alt="" width="50px;">
        <p id="uniname">Vienna University of Technology</p>
        <p id="degree">Masters</p>
        <p id="discipline">Software Engineering</p>
        <p id="attended">October 2017 - </p>
      </div>
    </div>
  </div>
  <div class="col-md-4 offset-md-1">
    <div id="infobox">
      <h3 class="text-center" id="title">Working Experience</h3>
      <hr class="">
      <div class="smallworkbox text-center">
        <p id="headtitle">Position</p>
        <p id="position">Freelance Web Developer</p>
        <p id="headtitle">Company</p>
        <p id="companyname">Freelancer</p>
        <p id="headtitle">Dates</p>
        <p id="attended">October 2015 - present</p>
      </div>
    </div>
  </div>
</div>
<div class="m-t-50">
  <h1 class="text-center">Core Skills</h1>
  <hr>
  <div class="row m-t-30 justify-content-center" id="whatido">
    <div class="col-md-2 justify-content-center text-center">
      <img src="{{asset('img/php.png')}}" alt="">
      <hr>
      <h1>PHP</h1>
    </div>
    <div class="col-md-2 justify-content-center text-center">
      <img src="{{asset('img/html.png')}}" alt="">
      <hr>
      <h1>HTML</h1>
    </div>
    <div class="col-md-2 justify-content-center text-center">
      <img src="{{asset('img/css.png')}}" alt="">
      <hr>
      <h1>CSS</h1>
    </div>
    <div class="col-md-2 justify-content-center text-center">
      <img src="{{asset('img/javascript.png')}}" alt="">
      <hr>
      <h1>Javascript</h1>
    </div>
    <div class="col-md-2 justify-content-center text-center">
      <img src="{{asset('img/mysql.png')}}" alt="">
      <hr>
      <h1>MySQL</h1>
    </div>
    <div class="col-md-2 justify-content-center text-center">
      <img src="{{asset('img/linux-logo.png')}}" alt="">
      <hr>
      <h1>Linux</h1>
    </div>
  </div>
  <hr class="bighr">
  <div class="row justify-content-center">
    <div class="col-md-1 justify-content-center text-center">
      <img src="{{asset('img/laravel.png')}}" alt="" width="50xp">
      <p>Laravel</p>
    </div>
    <div class="col-md-1 justify-content-center text-center">
      <img src="{{asset('img/wordpress.png')}}" alt="" width="50xp">
      <p>Wordpress</p>
    </div>
    <div class="col-md-1 justify-content-center text-center">
      <img src="{{asset('img/bootstrap.png')}}" alt="" width="50xp">
      <p>Bootstrap</p>
    </div>
    <div class="col-md-1 justify-content-center text-center">
      <img src="{{asset('img/vue.png')}}" alt="" width="50xp">
      <p>Vue.js</p>
    </div>
    <div class="col-md-1 justify-content-center text-center">
      <img src="{{asset('img/git.svg')}}" alt="" width="50xp">
      <p>Git</p>
    </div>
    <div class="col-md-1 justify-content-center text-center">
      <img src="{{asset('img/jquery.gif')}}" alt="" width="50xp">
      <p>JQuery</p>
    </div>
  </div>
</div>

<div class="">

</div>
@endsection
