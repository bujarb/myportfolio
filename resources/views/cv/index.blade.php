@extends('layouts.main')

@section('styles')
<style media="screen">
  #blueh1{
    color: #446CB3;

  }
</style>
@endsection

@section('content')
<div class="row m-t-50 justify-content-center">
  <h1 id="blueh1">My CV</h1>
</div>
<hr>
<div class="row m-t-30" id="cvcontent" style="display:none;">
  <div class="col-md-2">
    <div id="infobox">
      <h3 class="text-center" id="title">Basic Info</h3>
      @if (Auth::check())
        <div class="text-center justify-content-center">
          <a href="{{route('skills.create')}}" class="btn btn-primary btn-sm btn-round"><i class="fa fa-plus"></i></a><a href="{{route('skills.index')}}" class="btn btn-success btn-sm btn-round m-l-10"><i class="fa fa-pencil"></i></a>
        </div>
      @endif
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
      @if (Auth::check())
        <div class="text-center justify-content-center">
          <a href="{{route('education.create')}}" class="btn btn-primary btn-sm btn-round"><i class="fa fa-plus"></i></a><a href="#" class="btn btn-success btn-sm btn-round m-l-10"><i class="fa fa-pencil"></i></a>
        </div>
      @endif
      <hr class="">
      @foreach ($educations as $education)
        <div class="smallcvbox text-center">
          <img src="{{asset('img/ubtlogo.png')}}" alt="" width="50px;">
          <p id="uniname">{{$education->inst_name}}</p>
          <p id="degree">{{$education->degree}}</p>
          <p id="discipline">{{$education->discipline}}</p>
          <p id="attended">{{Carbon\Carbon::parse($education->from)->format('M Y')}} - {{Carbon\Carbon::parse($education->to)->format('M Y')}}</p>
        </div>
      @endforeach
    </div>
  </div>
  <div class="col-md-4 offset-md-1">
    <div id="infobox">
      <h3 class="text-center" id="title">Working Experience</h3>
      @if (Auth::check())
        <div class="text-center justify-content-center">
          <a href="{{route('skills.create')}}" class="btn btn-primary btn-sm btn-round"><i class="fa fa-plus"></i></a><a href="{{route('skills.index')}}" class="btn btn-success btn-sm btn-round m-l-10"><i class="fa fa-pencil"></i></a>
        </div>
      @endif
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
<div class="m-t-50" id="skillscontent" style="display:none;">
  <h1 class="text-center" id="blueh1">Core Skills</h1>
  @if (Auth::check())
    <div class="text-center justify-content-center">
      <a href="{{route('skills.create')}}" class="btn btn-primary btn-sm btn-round"><i class="fa fa-plus"></i></a><a href="{{route('skills.index')}}" class="btn btn-success btn-sm btn-round m-l-10"><i class="fa fa-pencil"></i></a>
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


<div class="languages m-t-50">
  <div class="row justify-content-center">
    <h1 id="blueh1">Languages</h1>
  </div>
  <hr>
  <div class="row m-t-30 justify-content-center" id="languagerow">
    <div class="col-md-3 justify-content-center text-center">
      <img src="{{asset('img/albania.png')}}" alt="">
      <h1>Albanian</h1>
      <h5>Mother's Tongue</h5>
    </div>
    <div class="col-md-3 justify-content-center text-center">
      <img src="{{asset('img/england.png')}}" alt="">
      <h1>English</h1>
      <h5>B2 Level</h5>
    </div>
    <div class="col-md-3 justify-content-center text-center">
      <img src="{{asset('img/germany.png')}}" alt="">
      <h1>German</h1>
      <h5>A1 Level</h5>
    </div>
  </div>
</div>
@endsection

@section('scripts')
  <script>
    $(function() {
      $('#cvcontent').fadeIn(500);
      $('#skillscontent').fadeIn(500);
    });
  </script>
@endsection
