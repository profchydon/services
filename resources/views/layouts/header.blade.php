<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">

    <!-- Important Owl stylesheet -->
    <!-- Magnific Popup core CSS file -->

    <!-- <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}"> -->
    <link rel="stylesheet" href="{{ asset('css/lightgallery.css') }}">
    <link href="http://vjs.zencdn.net/4.12/video-js.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.transitions.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>

  <body>

    <nav class="navbar navbar-default navbar-static-top">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">
              <!-- <img src="img/logo.svg" class="logo img-responsive" alt=""> -->
          </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

          <ul class="nav navbar-nav navbar-right">
            <div class="pull-right">
                    <a class="btn btn-primary" href="/">Home</a>
                    @if(Auth::user())

                        @if(Auth::user()->user_type == "escort")
                            <a class="btn btn-primary" href="escort/dashboard">Dashboard</a>
                            <a class="btn btn-primary" href="contact.html">Contact us</a>
                            <a class="btn btn-primary" href="{{ route('logout') }}">Logout</a>
                        @endif

                        @if(Auth::user()->user_type == "user")
                            <a class="btn btn-primary" href="signup">User</a>
                            <a class="btn btn-primary" href="contact.html">Contact us</a>
                            <a class="btn btn-primary" href="{{ route('logout') }}">Logout</a>
                        @endif

                        @if(Auth::user()->user_type == "agency")
                            <a class="btn btn-primary" href="signup">Agency</a>
                            <a class="btn btn-primary" href="contact.html">Contact us</a>
                            <a class="btn btn-primary" href="{{ route('logout') }}">Logout</a>
                        @endif

                    @endif

                    <!-- Authentication Links -->
                    @guest
                        <a class="btn btn-primary" href="{{ route('login') }}">Login</a>
                        <a class="btn btn-primary" href="signup">Signup</a>
                        <a class="btn btn-primary" href="contact.html">Contact us</a>
                    @endguest


            </div>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
