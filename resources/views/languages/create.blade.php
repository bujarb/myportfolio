@extends('layouts.main')

@section('content')
<div class="row m-t-50 justify-content-center">
<h1>Insert a language skill</h1>
</div>
<hr>
<div class="row m-t-30">
    <div class="col-md-6 offset-md-3">
        <form action="{{route('language.store')}}" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Level</label>
                        <input type="text" class="form-control" name="level">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label for="">Flag</label>
                <input type="file" class="form-control" name="flag">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <textarea class="form-control" name="description" rows="10" ></textarea>
            </div>
            <input type="submit" class="btn btn-awesome btn-block" value="Insert Language">
        </form>
    </div>
</div>
@endsection