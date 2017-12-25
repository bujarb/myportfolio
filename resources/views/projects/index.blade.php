@extends('layouts.main')

@section('styles')
<style media="screen">
  .fa-plus-circle{
    font-size: 30px;
  }

  #addnewproject{
    text-decoration: none;
  }

  #desc{
    height: 70px;
  }
  .fa-trash{
    color: #F03434;
    font-size: 20px;
  }

  .card{
    height: 210px;
  }

  .card-text{
    min-height: 50px;
  }
</style>
@endsection

@section('content')
<h1 class="m-t-30 text-center">My Projects <a href="{{route('project.create')}}" id="addnewproject" class="fa fa-plus-circle"></a></h1>
<div class="row m-t-30">
  @foreach ($projects as $project)
    <div class="col-md-4" id="projectresult">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">{{$project->title}}</h4>
          <h6 class="card-subtitle mb-2 text-muted">
            {{ Carbon\Carbon::parse($project->from)->format('Y M d')}} - {{ Carbon\Carbon::parse($project->to)->format('Y M d')}}
          </h6>
          <p class="card-text" id="desc">{{ str_limit($project->description, $limit = 100, $end = ' ...')}}</p>
          <a href="{{route('project.show',$project->id)}}" class="card-link btn btn-awesome btn-sm">View Project</a>
          @if (Auth::check())
            <a href="{{route('project.edit',$project->id)}}" class="card-link pull-right"><i class="fa fa-pencil"></i></a>

              <a href="#" class="card-link pull-right" data-toggle="modal" data-target="#confirmModal{!! $project->id !!}"><i class="fa fa-trash"></i></a>
              {{csrf_field()}}
              <!-- Confirm Modal -->
              <div class="modal" id="confirmModal{!! $project->id !!}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content" id="confirmContent">
                    <div class="modal-body text-center m-t-10">
                      <h5>Do you want to delete this project ?</h5>
                      {{$project->title}}
                    </div>
                    <div class="row" id="modalbuttons">
                      <div class="col-md-6 offset-md-3">
                        <div class="row">
                          <div class="col-md-6">
                            <form action="{{route('project.destroy',$project->id)}}" method="post">
                              {{csrf_field()}}
                              <input type="submit" class="btn btn-primary btn-block btn-sm" id="btnyes" value="Yes">
                              {{ method_field('DELETE') }}
                            </form>
                          </div>
                          <div class="col-md-6">
                            <button type="button" class="btn btn-success btn-block btn-sm" data-dismiss="modal">No</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


              <!-- Confirm Modal -->
          @endif
        </div>
      </div>
    </div>
  @endforeach
</div>
<nav class="m-t-30" aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    {{$projects->links()}}
  </ul>
</nav>
@endsection

@section('scripts')
  <script>
      $('#confirmModal').on('show.bs.modal', function(e) {
          $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
      });
  </script>
@endsection
