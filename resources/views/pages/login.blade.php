<div class="container login-body">
    <div class="row">

      <div class="col-md-4"></div>

      <div class="col-md-4">

          <div class="form-holder">
              <div class="row text-center">
                  <h1 class="logo-h1">XCORT<span class="highlight">.ng</span></h1>

                  <h4 class="login-h4">Don't have an account? <a href="{{ route('escort_signup') }}">Sign up for free</a></h4>
              </div>

            <p id="login-success-message" class="success-message"></p>
            <p id="login-error-message" class="error-message"></p>

            @include('_messages')

            <form class="form-group" action="/login" method="post" id="login-form">
                {{ csrf_field() }}
                <div class="form-group">
                  <label for="">Username</label>
                  <input type="text" class="form-control" id="username" name="username" placeholder="">
                </div>

                <div class="form-group">
                  <label for="">Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="">
                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-block" name="button">Login</button>
                </div>

            </form>

            <div class="row login-option-row">

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <small class="forgot-password"> <a href="forgotpassword">Forgot password?</a> </small>
                </div>
            </div>
          </div>

      </div>

      <div class="col-md-4"></div>

    </div>
</div>
