<div class="modal fade" id="user-edit" tabindex="-1" role="dialog" aria-labelledby="signupLabel">

    <div class="modal-dialog  modal-lg" role="document">

        <div class="modal-content">

            <div class="modal-header text-center">
                <h4 style="color:#fff; text-align:center;">You are editing your Account User details</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" name="button"><span style="color:white" aria-hidden="true">&times;</span></button>
            </div>

            <form class="form" id="usereditform">

                <div class="modal-body">
                  <div class="row">

                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="email" class="reg-label">Name:</label>
                          <input type="text" name="edit-name" id="edit-name" class="form-control" value="{{ $details['user']['name'] }}">

                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="email" class="reg-label">Phone Number:</label>
                          <input type="text" name="edit-phone" id="edit-phone" class="form-control" value="{{ $details['user']['phone'] }}">
                          <p id="edit-phone-error-message"></p>
                        </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="email" class="reg-label">Email:</label>
                          <input type="text" name="edit-email" id="edit-email" class="form-control" value="{{ $details['user']['email'] }}">
                          <p id="edit-email-error-message"></p>
                        </div>
                      </div>

                   </div>
                </div>

                <div class="modal-footer">
                   <button type="submit" class="btn btn-primary btn-block" name="submit-escort" id="edit-submit-user" style="font-weight:600;">Submit</button>
                 </div>

            </form>

            <p id="edit-user-message" class="success-message"></p>

        </div>

    </div>
</div>
