@extends('layouts.main')

@section('content')
    <div class="row justify-content-center m-t-30">
        <h1>Insert a Job</h1>
    </div>
    <hr>
    <div class="row m-t-50">
        <div class="col-md-6 offset-md-3">
            <form action="{{route('work.update',$job->id)}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="">Company Name:</label>
                    <input type="text" class="form-control" name="name" value="{{$job->company}}">
                </div>
                <div class="form-group">
                    <label for="">Position:</label>
                    <input type="text" class="form-control" name="position" value="{{$job->position}}">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">From:</label>
                            <input type="date" class="form-control" name="from" value="{{$job->from}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="">To:</label>
                            <input type="date" class="form-control" name="to" value="{{$job->to}}">
                        </div>
                    </div>
                </div>
                <input type="submit" value="Insert Job" class="btn btn-awesome btn-block">

            </form>
        </div>
    </div>
@endsection