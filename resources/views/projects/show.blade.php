@extends('layouts.main')

@section('styles')
<style media="screen">
  .smallbox{
    border:0px solid black;
  }
  .smallbox p{
    padding: 0px;
    margin:0px;
    font-size: 13px;
    font-weight: italic;
  }

  .smallbox h5{
    color: #34495E;
    font-weight: bold;
  }

  .smallbox #skillsh5{
    margin-top: 5px;
  }
</style>
@endsection

@section('content')
  <div class="row m-t-50">
    <div class="col-md-10 offset-md-1">
      <div class="card mb-3">
        <div class="card-body text-center">
          <h4 class="card-title">{{$project->title}}</h4>
          <hr>
          <p class="card-text">
            {{$project->description}}
          </p>
          <p class="card-text">
            <div class="smallbox">
              <p>Dates:</p>
              <h5>
                {{Carbon\Carbon::parse($project->from)->format('d M Y')}} To {{$project->to ? Carbon\Carbon::parse($project->from)->format('d M Y') : 'Present'}}
              </h5>
            </div>
          </p>
          <p class="card-text">
            <div class="smallbox">
              <p>Skills Used:</p>
              <h5 id="skillsh5">
                @foreach ($skillbyimage as $skill)
                  <img src="{{asset($skill)}}" alt="" width="50px">
                @endforeach
              </h5>
            </div>
          </p>
          <p class="card-text">
            <div class="smallbox">
              <p>GitHub Link:</p>
              <h5>
                <a href="{{$project->github_link}}">Go to Github Repository</a>
              </h5>
            </div>
          </p>
          @if ($project->website_link)
            <p class="card-text">
              <div class="smallbox">
                <p>Website Link</p>
                <h5>
                  {{$project->website_link}}
                </h5>
              </div>
            </p>
          @endif
          <p class="card-text">
            <div class="smallbox">
              <p>Status:</p>
              <h5>
                {{$project->status == 1 ? 'Finished' : 'On Developement'}}
              </h5>
            </div>
          </p>
          <hr>
          <div class="row">

          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
