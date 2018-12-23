<!-- Sign up modal -->
     <div class="modal fade" id="review-modal" tabindex="-1" role="dialog" aria-labelledby="signupLabel">

             <div class="modal-dialog" role="document">

                 <div class="modal-content">

                     <div class="modal-header">

                         <button type="button" class="close" data-dismiss="modal" aria-label="Close" name="button"><span style="color:white" aria-hidden="true">&times;</span></button>

                         <h4 class="modal-title text-center">Add review</h4>

                     </div>

                    <form class="form" id="reviewform">

                      @if (Auth::user())
                      <div class="modal-body">

                           <div class="row">

                             <div class="col-md-12" style="display:none;">
                               <div class="form-group">
                                 <input type="text" name="review-user-id" id="review-user-id" class="form-control" value="{{ Auth::user()->id }}">
                                 <input type="text" name="review-user-auth" id="review-user-auth" class="form-control" value="{{ Auth::user()->api_key }}">
                                 <input type="text" name="review-escort-id" id="review-escort-id" class="form-control" value="{{ $escort['escort']['id'] }}">
                               </div>
                             </div>

                             <div class="col-md-12">
                               <div class="form-group">
                                 <label for="" class="review-label">Your name</label>
                                 <input type="text" name="review-name" id="review-name" class="form-control" value="{{ Auth::user()->username }}" readonly>
                                 <p id="edit-email-error-message"></p>
                               </div>
                             </div>

                             <div class="col-md-12">
                               <div class="form-group">
                                 <label for="" class="review-label">Your review</label>
                                 <textarea name="review-message" id="review-message" rows="8" cols="80" class="form-control" style="resize:none"></textarea>
                               </div>
                             </div>

                           </div>

                      </div>

                     <div class="modal-footer">

                       <button type="submit" class="btn btn-primary btn-block" name="submit-review" id="submit-review" style="font-weight:600;">Submit review</button>

                     </div>
                     @else

                     <p>You have to be logged in to add a review</p>

                     <div class="modal-footer">

                       <a href="/login" class="btn btn-primary btn-block">Login</a>

                     </div>

                      @endif


                 </form>

                 <p id="review-success-message" class="success-message"></p>


                 </div>

             </div>

         </div><!-- Sign up modal ends-->
