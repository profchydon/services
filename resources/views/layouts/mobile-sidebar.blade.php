
<div class="menu-mobile menu-activated-on-click color-scheme-dark">
  <div class="mm-logo-buttons-w">
    <a class="mm-logo" href="index.html"><img src="img/logo.png"><span>Xcort.ng</span></a>
    <div class="mm-buttons">
      <div class="content-panel-open">
        <div class="os-icon os-icon-grid-circles"></div>
      </div>
      <div class="mobile-menu-trigger">
        <div class="os-icon os-icon-hamburger-menu-1"></div>
      </div>
    </div>
  </div>
  <div class="menu-and-user">
    <div class="logged-user-w">
      <div class="avatar-w">
        <img alt="" src="/img/escort/images/{{ session('profile_image')  }}">
      </div>
      <div class="logged-user-info-w">
        <div class="logged-user-name">
          {{ Auth::user()->name }}
        </div>
      </div>
    </div>

    <ul class="main-menu">

      <li class="">
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
      <li class=" has-sub-menu">
        <a href="#">
          <div class="icon-w">
            <ion-icon name="cash"></ion-icon>
          </div>
          <span>Subscriptions</span></a>
        <div class="sub-menu-w">

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
        <a href="{{ route('welcome') }}">
          <div class="icon-w">
            <ion-icon name="checkmark"></ion-icon>
          </div>
          <span>Verify Account</span></a>
      </li>
      <li class="">
        <a href="{{ route('logout') }}">
          <div class="icon-w">
            <ion-icon name="log-out"></ion-icon>
          </div>
          <span>Logout</span></a>
      </li>
    </ul>

  </div>
</div>
