
   <!-- Sign up modal -->
    <div class="modal fade" id="review-modal" tabindex="-1" role="dialog" aria-labelledby="signupLabel">

        <div class="modal-dialog" role="document">

            <div class="modal-content">

                <div class="modal-header">

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close" name="button"><span style="color:white" aria-hidden="true">&times;</span></button>

                    <h4 class="modal-title text-center">Add review</h4>

                </div>

                <div class="modal-body">

                    <div class="container-fluid">

                        <div class="row">

                           @if(Auth::user())

                           <form action="" method="post" class="form-group">

                               <div class="col-md-12">

                                 <label for="reg_firstname">Type your review here</label>
                                 <textarea name="message" rows="10" cols="80" class="form-control" style="resize:none"></textarea>

                               </div>

                           @else

                              <p>You have to be logged in to add a review</p>

                           @endif
                        </div>

                    </div>

                  
                </div>

                <div class="modal-footer">

                  @if(Auth::user())

                  <a href="review/submit" class="btn btn-primary btn-block">Submit</a>

                  @else

                     <a href="/login" class="btn btn-primary btn-block">Login</a>

                  @endif



              </form>

                </div>

            </div>

        </div>

    </div><!-- Sign up modal ends-->
