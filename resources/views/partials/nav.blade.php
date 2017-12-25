<nav class="container-fluid justify-content-center m-b-10" id="navcontainer" style="display:none;">
  <div class="row justify-content-center" id="imagerow">
    <img class="m-t-10 rounded-circle profilepic" src="{{asset('img/me.jpg')}}" alt="" width="100px" height="100px" id="profilepic">
  </div>
  <h1 class="text-center justify-content-center">Bujar Begisholli</h1>
  <h5 class="text-center justify-content-center">Full Stack Web Developer</h5>
  <div class="row m-t-30 justify-content-center" id="linksrow">
    <ul class="justify-content-center">
      <li><a href="{{route('home')}}">#home</a></li>
      <li><a href="{{route('about')}}">#about</a></li>
      <li><a href="{{route('cv')}}">#cv</a></li>
      <li><a href="{{route('project.index')}}">#projects</a></li>
    </ul>
  </div>
  <div class="row justify-content-center">
    @if(Auth::check())
      <a href="{{route('logout')}}" class="btn btn-danger-awesome btn-sm">Logout <i class="fa fa-sign-out"></i></a>
    @endif
  </div>
  <div class="row m-t-5"></div>
</nav>
