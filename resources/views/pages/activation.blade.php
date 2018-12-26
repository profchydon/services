<div class="container login-body">
    <div class="row">

      <div class="col-md-4"></div>

      <div class="col-md-4">

          <div class="form-holder">

            <p id="login-error-message" class="error-message">
                Your account has not been activated. Kindly provide the code sent to your email
            </p>

            <form class="form-group" action="/activation" method="post">
                @include('_messages')
                {{ csrf_field() }}
                <div class="form-group">
                  <label for="">Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="" value="{{ $email }} " readonly>
                </div>

                <div class="form-group">
                  <label for="">Enter activation code</label>
                  <input type="text" class="form-control" id="code" name="code" placeholder="">

                </div>

                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-block" name="button">Activate My Account</button>
                </div>

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <small class="signup"> <a href="signup">Resend code</a> </small>

                    </div>

                </div>

            </form>
          </div>

      </div>

      <div class="col-md-4"></div>

    </div>
</div>
