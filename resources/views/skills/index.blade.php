@extends('layouts.main')

@section('content')
<h1 class="text-center m-t-50">Edit or delete your skills</h1>
<hr>
<div class="row m-t-30">
  <div class="col-md-4 offset-md-4">
      <ul class="list-group">
        @foreach ($skills as $skill)
          <div class="row" id="skillboxedit">
            <div class="col-md-9">
              <li class="list-group-item text-center"><img src="{{$skill->logo_path}}" alt="" width="30px" class="pull-left"> {{$skill->name}}</li>
            </div>
            <div class="col-md-3">
              <form action="{{route('skills.destroy',$skill->id)}}" method="post">
                {{csrf_field()}}
                <button type="submit" name="button" class="btn btn-danger btn-block">Delete</button>
                {{ method_field('DELETE') }}
              </form>
            </div>
          </div>
        @endforeach
      </ul>
  </div>
</div>
@endsection
