@extends('layouts.main')

@section('content')
<h1 class="text-center">Lastest Projects</h1>
<div class="row m-t-30">
  <div class="col-md-4" id="project-box">
    <div class="card bg-dark text-white">
      <img class="card-img" src="https://www.mexperience.com/wp-content/uploads/Working-on-a-Project-680x340-1436134396.jpg" alt="Card image">
      <div class="card-img-overlay">
        <h4 class="card-title">Project Name 1</h4>
      </div>
    </div>
  </div>
  <div class="col-md-4" id="project-box">
    <div class="card bg-dark text-white">
      <img class="card-img" src="https://www.mexperience.com/wp-content/uploads/Working-on-a-Project-680x340-1436134396.jpg" alt="Card image">
      <div class="card-img-overlay">
        <h4 class="card-title">Project Name 2</h4>
      </div>
    </div>
  </div>
  <div class="col-md-4" id="project-box">
    <div class="card bg-dark text-white">
      <img class="card-img" src="https://www.mexperience.com/wp-content/uploads/Working-on-a-Project-680x340-1436134396.jpg" alt="Card image">
      <div class="card-img-overlay">
        <h4 class="card-title">Project Name 3</h4>
      </div>
    </div>
  </div>
</div>
<p class="text-center m-t-10"><a href="#" id="viewall">View all projects <i class="fa fa-arrow-right"></i></a></p>
@endsection
