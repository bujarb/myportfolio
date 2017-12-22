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
<h1 class="m-t-30 text-center">My Projects <a href="#" id="addnewproject" class="fa fa-plus-circle"></a></h1>
<div class="row m-t-30">
  <div class="col-md-4" id="projectresult">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Shoping Cart #1</h4>
        <h6 class="card-subtitle mb-2 text-muted">Authorize.net Shoping Cart</h6>
        <p class="card-text">Built a shoping cart using Laravel framework and Authorize.net as a payment processor</p>
        <a href="#" class="card-link">View Project</a>
      </div>
    </div>
  </div>
  <div class="col-md-4" id="projectresult">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Shoping Cart #1</h4>
        <h6 class="card-subtitle mb-2 text-muted">Authorize.net Shoping Cart</h6>
        <p class="card-text">Built a shoping cart using Laravel framework and Authorize.net as a payment processor</p>
        <a href="#" class="card-link">View Project</a>
      </div>
    </div>
  </div>
  <div class="col-md-4" id="projectresult">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Shoping Cart #1</h4>
        <h6 class="card-subtitle mb-2 text-muted">Authorize.net Shoping Cart</h6>
        <p class="card-text">Built a shoping cart using Laravel framework and Authorize.net as a payment processor</p>
        <a href="#" class="card-link">View Project</a>
      </div>
    </div>
  </div>
  <div class="col-md-4" id="projectresult">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Shoping Cart #1</h4>
        <h6 class="card-subtitle mb-2 text-muted">Authorize.net Shoping Cart</h6>
        <p class="card-text">Built a shoping cart using Laravel framework and Authorize.net as a payment processor</p>
        <a href="#" class="card-link">View Project</a>
      </div>
    </div>
  </div>
  <div class="col-md-4" id="projectresult">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Shoping Cart #1</h4>
        <h6 class="card-subtitle mb-2 text-muted">Authorize.net Shoping Cart</h6>
        <p class="card-text">Built a shoping cart using Laravel framework and Authorize.net as a payment processor</p>
        <a href="#" class="card-link">View Project</a>
      </div>
    </div>
  </div>
  <div class="col-md-4" id="projectresult">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Shoping Cart #1</h4>
        <h6 class="card-subtitle mb-2 text-muted">Authorize.net Shoping Cart</h6>
        <p class="card-text">Built a shoping cart using Laravel framework and Authorize.net as a payment processor</p>
        <a href="#" class="card-link">View Project</a>
      </div>
    </div>
  </div>
</div>
<nav class="m-t-30" aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <a class="page-link" href="#" tabindex="-1">Previous</a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
@endsection
