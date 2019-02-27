<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
    <link rel="stylesheet" href="{{ asset('css/responsiveslides.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  </head>

  <body>
    <input type="text" id="base_url" value="{{ session('base_url') }}" style="display:none;" />

    <nav class="navbar navbar-default navbar-static-top" style="background-image:url({{ asset('img/header-bg.png') }}); background-position: center; background-repeat: no-repeat; background-size: cover; vertical-align: middle;">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <h1>LOGO<span>.ng</span></h1>
          <!-- <a class="navbar-brand" href="#">
              <img src="img/logo.svg" class="logo img-responsive" alt="">
          </a> -->
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

          <ul class="nav navbar-nav navbar-right">
            <div class="pull-right">
                    <a class="btn btn-primary" href="{{ route('welcome') }}">Home</a>
                    @if(Auth::user())

                        @if(Auth::user()->user_type == "escort")
                            <a class="btn btn-primary" href="{{ route('escort_dashboard') }}">Dashboard</a>
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

                    <a class="btn btn-primary" href="{{ route('welcome') }}" id="nav-ind">Platinum Escorts</a>

                    <!-- Authentication Links -->
                    @guest
                        <a class="btn btn-primary" href="{{ route('login') }}">Login</a>
                        <div class="dropdown" id="signupdropdownnav">
                          <button class="btn btn-default dropdown-toggle" type="button" id="signupdropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            Signup
                            <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="signupdropdown">
                            <li><a href="/signup/escort">As Escort</a></li>
                            <hr class="signuphr">
                            <li><a href="/signup/agency" style="display:none;">As Agency</a></li>
                            <hr class="signuphr"  style="display:none;">
                            <li><a href="/signup/client">As Client</a></li>
                          </ul>
                        </div>
                        <a class="btn btn-primary" href="contact.html" id="nav-ind">Contact us</a>
                    @endguest


            </div>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
