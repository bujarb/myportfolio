@extends('layouts.main')

@section('content')
<h1 class="text-center m-t-50">Add a new education to your CV</h1>
<hr class="bighr">
<div class="row m-t-30">
  <div class="col-md-4 offset-md-4">
    <form action="{{route('education.store')}}" method="post" enctype="multipart/form-data">
      {{csrf_field()}}

      <div class="form-group">
        <label for="name">Education Name</label>
        <input type="text" class="form-control" name="name">
      </div>
      <div class="form-group">
        <label for="name">Degree</label>
        <input type="text" class="form-control" name="degree">
      </div>
      <div class="form-group">
        <label for="name">Discipline</label>
        <input type="text" class="form-control" name="discipline">
      </div>
      <div class="form-group">
        <label for="name">Date From</label>
        <input type="date" class="form-control" name="from">
      </div>
      <div class="form-group">
        <label for="name">Date To</label>
        <input type="date" class="form-control" name="to">
      </div>
      <div class="form-group">
        <label for="name">Date To</label>
        <input type="file" class="form-control" name="logo">
      </div>
      <input type="submit" class="btn btn-primary btn-block m-b-10" value="Insert Education">
    </form>
  </div>
</div>
@endsection
