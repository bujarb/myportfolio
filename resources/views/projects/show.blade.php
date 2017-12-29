@extends('layouts.main')

@section('styles')
    <style>
        .card-img-top{
            height: 450px;
            filter: brightness(70%);
            border-radius: 0px;
        }

        #smallbox{
            margin-top: 20px;
        }

        #smallbox p{
            margin: 0px;
            padding: 0px;
            font-style: italic;
        }

        #smallbox h5{
            margin: 0px;
            padding: 0px;
            font-weight: bold;
        }

        #description h3{
            font-style: italic;
        }


        #otherimages{
            background-color: #fff;
            border: 5px solid #545c68;
        }
        #otherimages h3{
            font-style: italic;
        }

        #imagecontianer{
            background-color: #fff;
            border: 1px solid black;
        }

        #myCarousel{
          max-height: 520px;
        }
    </style>
@endsection

@section('content')
<div class="row m-t-30">
    <div class="card mb-3">
        <div class="card-body text-center">
            <div class="row justify-content-center">
                <h1 class="card-title">{{$project->title}}</h1>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-4">
                    <div id="smallbox">
                        <p>Status</p>
                        <h5 class="card-text">{{$project->statu==1 ? 'Finished' : 'On Development'}}</h5>
                    </div>

                </div>
                <div class="col-md-4">
                    <div id="smallbox">
                        <p>Dates</p>
                        <h5 class="card-text">{{\Carbon\Carbon::parse($project->from)->format('M Y')}} - {{$project->to ? \Carbon\Carbon::parse($project->to)->format('M Y') : 'On Going'}}</h5>
                    </div>
                </div>
                <div class="col-md-4">
                    <div id="smallbox">
                        <p>Category</p>
                        <h5 class="card-text">{{$project->category}}</h5>
                    </div>
                </div>
            </div>
        </div>
        <img class="card-img-top" src="{{asset($project->featured_image)}}" alt="Card image cap">
        <div class="card-body text-center">
            <div class="row justify-content-center" id="description">
                <div class="col-12">
                    <h3>Project Description</h3>
                    <hr class="smallhr">
                </div>
                <div class="col-12 m-t-20"><p class="card-text">{{$project->description}}</p></div>
            </div>
            <div class="row justify-content-center m-t-50" id="description">
                <div class="col-12">
                    <h3>Project Skills</h3>
                    <hr class="smallhr">
                </div>
                @foreach($skillbyimage as $skill)
                    <div class="col-md-1 col-sm-6 col-xs-6 m-t-10">
                        <img src="{{asset($skill)}}" alt="" width="50px">
                    </div>
                @endforeach
            </div>
            <div class="row justify-content-center m-t-50" id="description">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-12">
                            <h3>Github repository link</h3>
                            <hr class="smallhr">
                        </div>
                        <div class="col-12">
                            <h4><a href="{{$project->github_link}}">{{$project->title}}</a></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                <div class="row">
                    <div class="col-12">
                        <h3>Website link</h3>
                        <hr class="smallhr">
                    </div>
                    <div class="col-12">
                        @if($project->website_link)
                            <h4><a href="{{$project->website_link}}">{{$project->title}}</a></h4>
                         @else
                            <h4 class="text-info">Is not published</h4>
                        @endif
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row" id="otherimages">
        <div id="myCarousel" class="carousel slide bg-inverse w-60 ml-auto mr-auto" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{asset($project->featured_image)}}" alt="First slide" height="520px">
                </div>
                @foreach($images as $image)
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{asset($image)}}" alt="First slide" height="520px">
                    </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script>
        $('#myCarousel').carousel({});
    </script>
@endsection
