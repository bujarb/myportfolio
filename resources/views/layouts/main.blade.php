<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Portfolio</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/helpers.css')}}">
    <link rel="stylesheet" href="{{asset('css/override.css')}}">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
  </head>
  <body>
    @include('partials.nav')
    <div class="container">
      @yield('content')
    </div>
  </body>
</html>
