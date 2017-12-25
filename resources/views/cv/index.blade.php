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
<div class="row m-t-30" id="cvcontent">
  <div class="col-md-2" id="infocontent">
    <div id="infobox">
      <h3 class="text-center" id="title">
        Basic Info
        @if (Auth::check())
          <a href="{{route('info.create')}}" class="btn btn-primary btn-sm btn-round"><i class="fa fa-plus"></i></a>
        @endif
      </h3>
      <hr class="">
      @foreach($info as $inf)
        <div class="smallcvbox text-center">
          <p id="headtitle">Full Name</p>
          <p class="">{{$inf->name}}</p>
        </div>
        <div class="smallcvbox text-center">
          <p id="headtitle">Date of birth</p>
          <p>{{Carbon\Carbon::parse($inf->bith)->format('d M Y')}}</p>
        </div>
        <div class="smallcvbox text-center">
          <p id="headtitle">Currently living</p>
          <p>{{$inf->city}}, {{$inf->country}}</p>
        </div>
        <div class="smallcvbox text-center">
          <a href="{{route('info.edit',$inf->id)}}" class="btn btn-awesome btn-sm btn-round m-l-10"><i class="fa fa-pencil"></i></a>
        </div>
      @endforeach
    </div>
  </div>
  <div class="col-md-4 offset-md-1" id="educontent">
    <div id="infobox">
      <h3 class="text-center" id="title">
        Education
        @if (Auth::check())
          <a href="{{route('education.create')}}" class="btn btn-primary btn-sm btn-round"><i class="fa fa-plus"></i></a>
        @endif
      </h3>
      <hr class="">
      @foreach ($educations as $education)
        <div class="smallcvbox text-center">
          <img src="{{asset($education->logo_path)}}" alt="" width="50px;">
          <p id="uniname">{{$education->inst_name}}</p>
          <p id="degree">{{$education->degree}}</p>
          <p id="discipline">{{$education->discipline}}</p>
          <p id="attended">{{Carbon\Carbon::parse($education->from)->format('M Y')}} - {{Carbon\Carbon::parse($education->to)->format('M Y')}}</p>
          <a href="{{route('education.edit',$education->id)}}" class="btn btn-awesome btn-sm btn-round m-l-10"><i class="fa fa-pencil"></i></a>
          <a href="#" data-toggle="modal" data-target="#confirmModal{{$education->id}}" class="btn btn-danger-awesome btn-sm btn-round m-l-10"><i class="fa fa-trash"></i></a>
          <hr>
        </div>

        <!-- Confirm Modal -->
        <div class="modal" id="confirmModal{{$education->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content" id="confirmContent">
              <div class="modal-body text-center m-t-10">
                <h5>Do you want to delete this education ?</h5>
              </div>
              <div class="row" id="modalbuttons">
                <div class="col-md-6 offset-md-3">
                  <div class="row">
                    <div class="col-md-6">
                      <form action="{{route('education.destroy',$education->id)}}" method="post">
                        {{csrf_field()}}
                        <input type="submit" class="btn btn-primary btn-block btn-sm" value="Yes">
                        {{method_field('DELETE')}}
                      </form>
                    </div>
                    <div class="col-md-6">
                      <button type="button" class="btn btn-success btn-block btn-sm" data-dismiss="modal">No</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Confirm Modal -->
      @endforeach
    </div>
  </div>
  <div class="col-md-4 offset-md-1">
    <div id="infobox">
      <h3 class="text-center" id="title">
        Working Experience
        @if (Auth::check())
          <a href="{{route('work.create')}}" class="btn btn-primary btn-sm btn-round"><i class="fa fa-plus"></i></a>
        @endif
      </h3>

      <hr class="">
      @foreach($jobs as $job)
        <div class="smallworkbox text-center">
          <p id="headtitle">Position</p>
          <p id="position">{{$job->position}}</p>
          <p id="headtitle">Company</p>
          <p id="companyname">{{$job->company}}</p>
          <p id="headtitle">Dates</p>
          <p id="attended">{{Carbon\Carbon::parse($job->from)->format('M Y')}} - {{$job->to ? Carbon\Carbon::parse($job->to)->format('M Y') : 'Present'}}</p>
          <a href="{{route('work.edit',$job->id)}}" class="btn btn-awesome btn-sm btn-round m-l-10"><i class="fa fa-pencil"></i></a>
          <a href="#" data-toggle="modal" data-target="#confirmModal{{$job->id}}" class="btn btn-danger-awesome btn-sm btn-round m-l-10"><i class="fa fa-trash"></i></a>
          <hr>

          <!-- Confirm Modal -->
            <div class="modal" id="confirmModal{{$job->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content" id="confirmContent">
                  <div class="modal-body text-center m-t-10">
                    <h5>Do you want to delete this job ?</h5>
                  </div>
                  <div class="row" id="modalbuttons">
                    <div class="col-md-6 offset-md-3">
                      <div class="row">
                        <div class="col-md-6">
                          <form action="{{route('work.delete',$job->id)}}" method="post">
                            {{csrf_field()}}
                              <input type="submit" class="btn btn-primary btn-block btn-sm" value="Yes">
                          </form>
                        </div>
                        <div class="col-md-6">
                          <button type="button" class="btn btn-success btn-block btn-sm" data-dismiss="modal">No</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <!-- Confirm Modal -->
        </div>
      @endforeach
    </div>
  </div>
</div>
<div class="m-t-50" id="skillscontent">
  <h1 class="text-center" id="blueh1">
    Core Skills
    @if (Auth::check())
      <a href="{{route('skills.create')}}" class="btn btn-primary btn-sm btn-round"><i class="fa fa-plus"></i></a><a href="{{route('skills.index')}}" class="btn btn-awesome btn-sm btn-round m-l-10"><i class="fa fa-pencil"></i></a>
    @endif
  </h1>
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
    <h1 id="blueh1">
      Languages
      @if (Auth::check())
        <a href="{{route('language.create')}}" class="btn btn-primary btn-sm btn-round"><i class="fa fa-plus"></i></a>
      @endif
    </h1>
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

@endsection
