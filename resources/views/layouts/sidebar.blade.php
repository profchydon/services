
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

      <li class="sub-header">
        <span>Menu</span>
      </li>
      <li class="">
        <a href="{{ route('welcome') }}">
          <div class="icon-w">
            <div class="os-icon os-icon-mail"></div>
          </div>
          <span>Home</span></a>
      </li>
      <li class=" has-sub-menu">
        <a href="#">
          <div class="icon-w">
            <div class="os-icon os-icon-users"></div>
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
            <div class="os-icon os-icon-users"></div>
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
            <div class="os-icon os-icon-mail"></div>
          </div>
          <span>Verify Account</span></a>
      </li>
      <li class="">
        <a href="{{ route('logout') }}">
          <div class="icon-w">
            <div class="os-icon os-icon-mail"></div>
          </div>
          <span>Logout</span></a>
      </li>
    </ul>
    <!--------------------
    END - Mobile Menu List
    -------------------->
    <div class="mobile-menu-magic">
      <h4>
        Light Admin
      </h4>
      <p>
        Clean Bootstrap 4 Template
      </p>
      <div class="btn-w">
        <a class="btn btn-white btn-rounded" href="https://themeforest.net/item/light-admin-clean-bootstrap-dashboard-html-template/19760124?ref=Osetin" target="_blank">Purchase Now</a>
      </div>
    </div>
  </div>
</div>
<!--------------------
END - Mobile Menu
-------------------->
<!--------------------
START - Main Menu
-------------------->
<div class="menu-w color-scheme-light color-style-transparent menu-position-side menu-side-left menu-layout-compact sub-menu-style-over sub-menu-color-bright selected-menu-color-light menu-activated-on-hover menu-has-selected-link">
  <div class="logo-w">
    <a class="logo" href="index.html">
      <div class="logo-element"></div>
      <div class="logo-label">
        Wildplayground
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

    <li class="">
      <a href="{{ route('welcome') }}">
        <div class="icon-w">
          <div class="os-icon os-icon-mail"></div>
        </div>
        <span>Home</span></a>
    </li>
    <li class="">
      <a href="{{ route('escort_dashboard') }}">
        <div class="icon-w">
          <div class="os-icon os-icon-mail"></div>
        </div>
        <span>Dashboard</span></a>
    </li>
    <li class=" has-sub-menu">
      <a href="#">
        <div class="icon-w">
          <div class="os-icon os-icon-users"></div>
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
          <div class="os-icon os-icon-users"></div>
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
      <a href="{{ route('welcome') }}">
        <div class="icon-w">
          <div class="os-icon os-icon-mail"></div>
        </div>
        <span>Verify Account</span></a>
    </li>
    <li class="">
      <a href="{{ route('logout') }}">
        <div class="icon-w">
          <div class="os-icon os-icon-mail"></div>
        </div>
        <span>Logout</span></a>
    </li>
  </ul>

  <div class="side-menu-magic">
    <h4>
      Light Admin
    </h4>
    <p>
      Clean Bootstrap 4 Template
    </p>
    <div class="btn-w">
      <a class="btn btn-white btn-rounded" href="https://themeforest.net/item/light-admin-clean-bootstrap-dashboard-html-template/19760124?ref=Osetin" target="_blank">Purchase Now</a>
    </div>
  </div>
</div>
