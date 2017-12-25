@extends('layouts.main')
@section('styles')
<style media="screen">

  .card{
    border-radius: 0px;
  }
  .card-title{
    color: #F2F1EF;
    font-weight: bold;
    margin-top: 5px;
  }

  #titlerow{
    position: absolute;
    bottom: 0;
    width: 100%;
    right: 15px;
    background-color: rgba(34, 49, 63,0.8);
  }

  #titlerow:hover{
    background-color:rgb(34, 49, 63);
  }

  .card-img{
    filter: brightness(40%);
  }

  #link{
    text-decoration: none;
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
  <h1 class="text-center hidden-xs-up">Welcome to my Protfolio.</h1>
  <p class="text-center">Here you can find everything you need to know about me and my projets</p>
</div>
<hr>
<h1 class="text-center m-t-50">Lastest Projects</h1>
<div class="row m-t-30">
  @foreach($projects as $project)
    <div class="col-md-4" id="latest">
      <div class="card bg-dark text-white" style="height:205px">
        <img class="card-img" src="{{asset($project->featured_image)}}" alt="Card image" height="200px">
        <div class="card-img-overlay">
          <a href="{{route('project.show',$project->id)}}" id="link">
            <div class="row justify-content-center" id="titlerow">
              <h5 class="card-title">{{$project->title}}</h5>
            </div>
          </a>
        </div>
      </div>
    </div>
  @endforeach
</div>
<p class="text-center m-t-30"><a href="{{route('project.index')}}" id="viewall">View all projects <i class="fa fa-arrow-right"></i></a></p>
@endsection

@section('scripts')

@endsection
