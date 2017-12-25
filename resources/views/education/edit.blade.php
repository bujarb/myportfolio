@extends('layouts.main')

@section('content')
    <h1 class="text-center m-t-50">Add a new education to your CV</h1>
    <hr class="bighr">
    <div class="row m-t-30">
        <div class="col-md-6 offset-md-3">
            <form action="{{route('education.update',$edu->id)}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="name">Education Name</label>
                    <input type="text" class="form-control" name="name" value="{{$edu->inst_name}}">
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="name">Degree</label>
                            <input type="text" class="form-control" name="degree" value="{{$edu->degree}}">
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="form-group">
                            <label for="name">Discipline</label>
                            <input type="text" class="form-control" name="discipline" value="{{$edu->discipline}}">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Date From</label>
                            <input type="date" class="form-control" name="from" value="{{$edu->from}}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">Date To</label>
                            <input type="date" class="form-control" name="to" value="{{$edu->to}}">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name">Logo</label>
                    <input type="file" class="form-control" name="logo">
                </div>
                <input type="submit" class="btn btn-primary btn-block m-b-10" value="Update Education">
            </form>
        </div>
    </div>
@endsection
