@extends('layouts.main')

@section('styles')
  <style media="screen">
    .card-header{
      background-color: #59ABE3;
      color: #EEEEEE;
    }

    label{
      color: #59ABE3;
    }
  </style>
@endsection

@section('content')
<div class="row m-t-50">
  <div class="col-md-4 offset-md-4">
    <div class="card">
      <div class="card-header text-center">
        Login to you portfolio account
      </div>
      <div class="card-body">
        <form action="{{route('login')}}" method="post">
          {{csrf_field()}}
          <div class="form-group">
            <label for="">Email</label>
            <input type="text" class="form-control" name="email">
          </div>
          <div class="form-group">
            <label for="">Password</label>
            <input type="password" class="form-control" name="password">
          </div>
          <input type="submit" class="btn btn-awesome btn-block" value="Login to your account">
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
