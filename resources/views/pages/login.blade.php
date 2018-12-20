<div class="container login-body">
    <div class="row">

      <div class="col-md-4"></div>

      <div class="col-md-4">

          <div class="form-holder">

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

                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <small class="signup"> <a href="signup">Sign up</a> </small>

                    </div>
                    <div class="col-md-6 col-sm-12 col-xs-12">
                        <small class="forgotpassword pull-right"> <a href="forgotpassword">Forgot password</a> </small>
                    </div>
                </div>

            </form>
          </div>

          <div class="col-md-12 col-sm-12 col-xs-12 text-center">
              <a href="{{ route('welcome') }}" class="loginhome">Home</a>
          </div>

      </div>

      <div class="col-md-4"></div>

    </div>
</div>
