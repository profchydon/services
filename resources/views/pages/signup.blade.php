<div class="container login-body">
    <div class="row">

      <!-- <button name="button" data-toggle="modal" data-target="#loading-modal">Load</button> -->

      <div class="col-md-4"></div>

      <div class="col-md-4">

        <div class="row text-center">
            <h1 class="logo-h1">XCORT<span class="highlight">.ng</span></h1>

            <h4 class="login-h4">Have an account already? <a href="{{ route('login') }}">Login here</a></h4>
        </div>

          <div class="form-holder">

            <p id="signup-success-message"></p>
            <div class="error-warn-holder">
              <small class="errorwarn"></small>
            </div>

            <form class="form-group" id="signup-form">

                <div class="form-group">
                  <label for="">Name <small>(This will be the name displayed to clients)</small> </label>
                  <input type="text" name="name" class="form-control" id="name" placeholder="Enter your fullname">
                </div>

                <div class="form-group">
                  <label for="">Username</label>
                  <input type="text" name="username" class="form-control" id="username" placeholder="Enter your username">
                  <p id="signup-username-error-message"></p>
                </div>

                <div class="form-group">
                  <label for="">Password</label>
                  <input type="password" name="password" class="form-control" id="password" placeholder="Enter password">
                </div>

                <div class="form-group">
                  <label for="">Email Address</label>
                  <input type="email" name="email" class="form-control" id="email" placeholder="Enter a valid email address">
                  <p id="signup-email-error-message"></p>
                </div>

                <div class="form-group">
                  <label for="">Confirm Email Address</label>
                  <input type="email" name="confirm_email" class="form-control" id="confirm_email" placeholder="Re-enter your email address">
                  <small id="email-match">Email addresses does not match!</small>
                </div>

                <div class="form-group">
                  <label for="">Phone Number</label>
                  <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter a functional phone number">
                  <p id="signup-phone-error-message"></p>
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-block" name="signup" id="" style="font-weight:600;">Sign up</button>
                </div>

            </form>
            <div class="already text-center">
                <a href="{{route('welcome')}}" class="back-to-homepage">Back to homepage</a>
            </div>

          </div>

      </div>

      <div class="col-md-4"></div>

    </div>

    <div class="modal fade" id="loading-modal" tabindex="-1" role="dialog" aria-labelledby="signupLabel">

            <div class="modal-dialog modal-sm" role="document" id="loading-modal-dialog">

                <div class="modal-content" id="loading-modal-content">

                  <div class="modal-body" id="loading-modal-body">

                      <div class="loader"></div>

                  </div>

                </div>

            </div>

     </div>
</div>
