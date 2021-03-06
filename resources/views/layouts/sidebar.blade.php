@include('layouts.mobile-sidebar')

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

    @if ( !( session('verified') == 1) && !($details['escort']) == NULL )
    <li class="">
      <a href="{{ route('verify') }}">
        <div class="icon-w">
          <ion-icon name="checkmark"></ion-icon>
        </div>
        <span>Verify Account</span>
      </a>
    </li>
    @endif

    @if ( session('verified') == 1 )
    <li class=" has-sub-menu" disabled="">
      <a href="#" disabled="">
        <div class="icon-w">
          <ion-icon name="cash"></ion-icon>
        </div>
        <span>Subscriptions</span></a>
      <div class="sub-menu-w">
        <div class="sub-menu-header">
          Bothered about getting little or no client? <br>
          subscribe now to increase chances of getting clients.
        </div>
        <div class="sub-menu-icon">
          <i class="os-icon os-icon-users"></i>
        </div>
        <div class="sub-menu-i">
          <ul class="sub-menu">
            <li>
              <a href="/gofeature">Go Feature</a>
            </li>
            <li>
              <a href="/account/upgrade">Upgrade Account</a>
            </li>
          </ul>
        </div>
      </div>
    </li>
    <li class=" has-sub-menu">
      <a href="#">
        <div class="icon-w">
          <ion-icon name="airplane"></ion-icon>
        </div>
        <span>Tours</span></a>
      <div class="sub-menu-w">
        <div class="sub-menu-header">
          Going on Tours?
        </div>
        <div class="sub-menu-icon">
          <i class="os-icon os-icon-users"></i>
        </div>
        <div class="sub-menu-i">
          <ul class="sub-menu">
            <li>
              <a href="users_profile_big.html">Create a Tour</a>
            </li>
            <li>
              <a href="users_profile_small.html">Advertise your Tour</a>
            </li>
          </ul>
        </div>
      </div>
    </li>
    <li class="">
      <a href="{{ route('transactions') }}">
        <div class="icon-w">
          <ion-icon name="log-out"></ion-icon>
        </div>
        <span>Transactions</span></a>
    </li>

    <li class=" has-sub-menu" disabled="">
      <a href="#" disabled="">
        <div class="icon-w">
          <ion-icon name="cash"></ion-icon>
        </div>
        <span>Account Settings</span></a>
      <div class="sub-menu-w">
        <div class="sub-menu-header">
          Account Settings
        </div>
        <div class="sub-menu-icon">
          <i class="os-icon os-icon-users"></i>
        </div>
        <div class="sub-menu-i">
          <ul class="sub-menu">
            
            <li>
              <a href="/profile/picture">Choose profile picture</a>
            </li>
            <li>
              <a href="/account/password/change">Change Password</a>
            </li>
          </ul>
        </div>
      </div>
    </li>

    <li class=" has-sub-menu" disabled="">
      <a href="#" disabled="">
        <div class="icon-w">
          <ion-icon name="cash"></ion-icon>
        </div>
        <span>Gifts</span></a>
      <div class="sub-menu-w">
        <div class="sub-menu-icon">
          <i class="os-icon os-icon-users"></i>
        </div>
        <div class="sub-menu-i">
          <ul class="sub-menu">
           
            <li>
              <a href="/account/upgrade">Xcort Token Gifts</a>
            </li>
            <li>
              <a href="/account/upgrade">Cash Gifts</a>
            </li>
            <li>
              <a href="/account/upgrade">Profile Sponsors</a>
            </li>
            <li>
              <a href="/account/upgrade">Learn more about the gift system</a>
            </li>
          </ul>
        </div>
      </div>
    </li>
    @endif

    <li class="">
      <a href="{{ route('logout') }}">
        <div class="icon-w">
          <ion-icon name="log-out"></ion-icon>
        </div>
        <span>Logout</span></a>
    </li>
  </ul>

  
</div>
