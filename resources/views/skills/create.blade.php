@extends('layouts.main')

@section('content')
  <div class="row m-t-50">
    <div class="col-md-4 offset-md-4">
      <h1 class="text-center">Create a new skill</h1>
      <hr>
      <form action="{{route('skills.store')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="form-group">
          <label for="name">Skill Name</label>
          <input type="text" name="name" class="form-control">
        </div>
        <div class="form-group">
          <label for="name">Skill Name</label>
          <select class="form-control" name="rank">
            <option value="first">First</option>
            <option value="second">Second</option>
          </select>
        </div>
        <div class="form-group">
          <label for="name">Featured Image</label>
          <input type="file" name="logo" class="form-control">
        </div>
        <input type="submit" class="btn btn-primary btn-block" value="Insert Skill">
      </form>
    </div>
  </div>
@endsection
