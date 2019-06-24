@include('layouts.mobile-admin-sidebar')

<div class="menu-w color-scheme-light color-style-transparent menu-position-side menu-side-left menu-layout-compact sub-menu-style-over sub-menu-color-bright selected-menu-color-light menu-activated-on-hover menu-has-selected-link">
  <div class="logo-w">
    <a class="logo" href="index.html">
      <div class="logo-element"></div>
      <div class="logo-label">
        <a class="mm-logo dashboard-logo" href="{{ route('escort_dashboard')}}">XCORT<span class="highlight">.ng</span></a>
      </div>
    </a>
  </div>
  <div class="logged-user-w avatar-inline">
    <div class="logged-user-i">
      <div class="avatar-w">
        <img alt="" src="/img/escort/images/{{ session('profile_image') }}">
      </div>
      <div class="logged-user-info-w">
        <div class="logged-user-name">
          {{ Auth::user()->name }}
        </div>
      </div>
    </div>
  </div>

  <ul class="main-menu">

    <li class="" disabled="true">
      <a href="{{ route('welcome') }}">
        <div class="icon-w">
          <ion-icon name="home"></ion-icon>
        </div>
        <span>Home</span></a>
    </li>
    <li class="">
      <a href="{{ route('escort_dashboard') }}">
        <div class="icon-w">
          <ion-icon name="clipboard"></ion-icon>
        </div>
        <span>Dashboard</span></a>
    </li>





    <li class="">
      <a href="{{ route('logout') }}">
        <div class="icon-w">
          <ion-icon name="log-out"></ion-icon>
        </div>
        <span>Logout</span></a>
    </li>
  </ul>

  <!-- <div class="side-menu-magic">
    <h4>
      Light Admin
    </h4>
    <p>
      Clean Bootstrap 4 Template
    </p>
    <div class="btn-w">
      <a class="btn btn-white btn-rounded" href="https://themeforest.net/item/light-admin-clean-bootstrap-dashboard-html-template/19760124?ref=Osetin" target="_blank">Purchase Now</a>
    </div>
  </div> -->
</div>
