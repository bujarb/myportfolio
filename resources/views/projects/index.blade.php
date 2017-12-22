@extends('layouts.main')

@section('styles')
<style media="screen">
  .fa-plus-circle{
    font-size: 30px;
  }

  #addnewproject{
    text-decoration: none;
  }
</style>
@endsection

@section('content')
<h1 class="m-t-30 text-center">My Projects <a href="{{route('project.create')}}" id="addnewproject" class="fa fa-plus-circle"></a></h1>
<div class="row m-t-30">
  @foreach ($projects as $project)
    <div class="col-md-4" id="projectresult">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">{{$project->title}}</h4>
          <h6 class="card-subtitle mb-2 text-muted">
            {{ Carbon\Carbon::parse($project->from)->format('Y M d')}} - {{ Carbon\Carbon::parse($project->to)->format('Y M d')}}
          </h6>
          <p class="card-text">{{ str_limit($project->description, $limit = 150, $end = ' ...')}}</p>
          <a href="{{route('project.show',$project->id)}}" class="card-link">View Project</a>
        </div>
      </div>
    </div>
  @endforeach
</div>
<nav class="m-t-30" aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    {{$projects->links()}}
  </ul>
</nav>
@endsection
