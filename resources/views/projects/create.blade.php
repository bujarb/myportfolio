@extends('layouts.main')

@section('styles')
  <style media="screen">
    #form{
      border-color: red;
    }
  </style>
@endsection

@section('content')
<div class="row m-t-50 justify-content-center">
  <h1>Insert new project</h1>
</div>
<hr>
<div class="row m-t-30">
  <div class="col-md-6 offset-md-3">
    <form action="{{route('project.store')}}" method="post" enctype="multipart/form-data">
      {{csrf_field()}}
      <div class="form-group">
        <label for="">Title</label>
        <input type="text" class="form-control" name="title">
      </div>
      <div class="form-group">
        <label for="">Description</label>
        <textarea name="description" rows="8" cols="65" class="form-control"></textarea>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="form-group">
            <label for="">From</label>
            <input type="date" name="from" class="form-control">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">
            <label for="">To</label>
            <input type="date" name="to" class="form-control">
          </div>
        </div>
      </div>
      <div class="form-group">
        <label for="">Skills Used</label>
        <select class="js-example-basic-multiple" name="skills[]" multiple="multiple" id="form" style="width:100%;">
          @foreach ($skills as $skill)
            <option value="{{$skill->name}}">{{$skill->name}}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="">Status</label>
        <select class="form-control" name="status">
          <option value="0">Active</option>
          <option value="1">Finished</option>
        </select>
      </div>
      <div class="form-group">
        <label for="">GitHub Link</label>
        <input type="text" name="github" class="form-control">
      </div>
      <div class="form-group">
        <label for="">Website Link</label>
        <input type="text" name="website" class="form-control">
      </div>
      <div class="form-group">
        <label for="">Featured Image</label>
        <input type="file" name="featured" class="form-control">
      </div>
      <div class="form-group">
        <label for="">Other Images</label>
        <input type="file" name="other_images[]" class="form-control" multiple>
      </div>
      <div class="form-group">
        <label for="">Category</label>
        <select class="form-control" name="category">
          <option value="WEB">WEB</option>
        </select>
      </div>
      <input type="submit" class="btn btn-awesome btn-block" value="Insert Project">
    </form>
  </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
$(document).ready(function() {
  $('.js-example-basic-multiple').select2();
});
</script>
@endsection
