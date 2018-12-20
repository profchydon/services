<div class="container login-body">
    <div class="row">

      <div class="col-md-4"></div>

      <div class="col-md-4">

          <div class="form-holder">

            <p id="signup-success-message"></p>

            <form class="form-group" id="signup-form">

                <div class="form-group">
                  <label for="">Name <small>(This will be the name displayed to other users)</small> </label>
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
                  <label for="">Confirm Password</label>
                  <input type="password" name="confirm_password" class="form-control" id="confirm_password" placeholder="Re-enter your password">
                </div>

                <div class="form-group">
                  <label for="">Email Address</label>
                  <input type="email" name="email" class="form-control" id="email" placeholder="Enter a valid email address">
                  <p id="signup-email-error-message"></p>
                </div>

                <div class="form-group">
                  <label for="">Phone Number</label>
                  <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter a functional phone number">
                  <p id="signup-phone-error-message"></p>
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-block" name="signup" id="signup" style="font-weight:600;">Sign up</button>
                </div>

            </form>
            <div class="already text-center">
                <p class="registered-p">Already registered?</p> <small class="sign-up-login"> <a href="login">Login</a> </small>
            </div>

          </div>

          <div class="col-md-12 col-sm-12 col-xs-12 text-center">
              <a href="{{ route('welcome') }}" class="loginhome">Home</a>
          </div>

      </div>

      <div class="col-md-4"></div>

    </div>
</div>
