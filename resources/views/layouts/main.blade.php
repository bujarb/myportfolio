<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Bujar Begisholli - Portfolio</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('css/helpers.css')}}">
    <link rel="stylesheet" href="{{asset('css/override.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="shortcut icon" type="img/png" href="/img/b.png">
  </head>
    @yield('styles')
  <body>
    @include('partials.nav')
    <div class="container" id="maincontainer" style="display:none;">
      @yield('content')
    </div>
    @include('partials.js')
    @yield('scripts')
    @yield('modal')
  </body>
  {{-- @include('partials.footer') --}}
</html>
