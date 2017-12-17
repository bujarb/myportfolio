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
  @if (Auth::check())
    <div class="text-center justify-content-center">
      <a href="{{route('skills.create')}}" class="btn btn-primary btn-sm">Add new</a><a href="{{route('skills.index')}}" class="btn btn-success btn-sm m-l-10">Edit</a>
    </div>
  @endif
  <hr>
  <div class="row m-t-30 justify-content-center" id="whatido">
    @foreach ($coreskills as $coreskill)
      <div class="col-md-2 justify-content-center text-center">
        <img src="{{asset($coreskill->logo_path)}}" alt="">
        <hr>
        <h1>{{$coreskill->name}}</h1>
      </div>
    @endforeach
  </div>
  <hr class="bighr">
  <div class="row justify-content-center">
    @foreach ($otherskills as $otherskill)
      <div class="col-md-1 justify-content-center text-center">
        <img src="{{asset($otherskill->logo_path)}}" alt="" width="50xp">
        <p>{{$otherskill->name}}</p>
      </div>
    @endforeach
  </div>
</div>

<div class="row">

</div>
@endsection
