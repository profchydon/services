<!-- Sign up modal -->
     <div class="modal fade" id="price-update" tabindex="-1" role="dialog" aria-labelledby="signupLabel">

         <div class="modal-dialog  modal-lg" role="document">

             <div class="modal-content">

                 <div class="modal-header">

                     <button type="button" class="close" data-dismiss="modal" aria-label="Close" name="button"><span style="color:white" aria-hidden="true">&times;</span></button>

                 </div>

                 <div class="modal-body">

                   <form class="form" id="priceeditform">

                       <div class="row">

                         <div class="col-md-12">
                             <h5 class="availability-h5">Enter rates for Incalls:</h5>
                         </div>

                         <input type="text" name="edit-user_id" id="price-edit-user_id" class="form-control" value="{{ Auth::user()->id}}" style="display:none;">
                         <input type="text" name="edit-auth" id="price-edit-auth" class="form-control" value="{{ Auth::user()->api_key}}" style="display:none;">

                           <div class="col-md-3">
                             <div class="form-group">
                               <label for="email" class="reg-label">1 hour:</label>
                               <input type="text" name="incall_1hr" id="price-edit-incall_1hr" class="form-control" value="{{ $details['escort']['incall_1hr'] }}" placeholder="Enter amount">
                             </div>
                           </div>

                           <div class="col-md-3">
                             <div class="form-group">
                               <label for="email" class="reg-label">24 hours:</label>
                               <input type="text" name="incall_1dy" id="price-edit-incall_1dy" class="form-control" value="{{ $details['escort']['incall_1dy'] }}" placeholder="Enter amount">
                             </div>
                           </div>

                           <div class="col-md-3">
                             <div class="form-group">
                               <label for="email" class="reg-label">Overnight:</label>
                               <input type="text" name="incall_overnight" id="price-edit-incall_overnight" class="form-control" value="{{ $details['escort']['incall_overnight'] }}" placeholder="Enter amount">
                             </div>
                           </div>

                           <div class="col-md-3">
                             <div class="form-group">
                               <label for="email" class="reg-label">1 Week:</label>
                               <input type="text" name="incall_1wk" id="price-edit-incall_1wk" class="form-control" value="{{ $details['escort']['incall_1wk'] }}" placeholder="Enter amount">
                             </div>
                           </div>


                       </div>

                       <div class="row">

                         <div class="col-md-12">
                             <h5 class="availability-h5">Enter rates for Outcalls:</h5>
                         </div>


                           <div class="col-md-3">
                             <div class="form-group">
                               <label for="email" class="reg-label">1 hour:</label>
                               <input type="text" name="outcall_1hr" id="price-edit-outcall_1hr" class="form-control" value="{{ $details['escort']['outcall_1hr'] }}" placeholder="Enter amount">
                             </div>
                           </div>

                           <div class="col-md-3">
                             <div class="form-group">
                               <label for="email" class="reg-label">24 hours:</label>
                               <input type="text" name="outcall_1dy" id="price-edit-outcall_1dy" class="form-control" value="{{ $details['escort']['outcall_1dy'] }}" placeholder="Enter amount">
                             </div>
                           </div>

                           <div class="col-md-3">
                             <div class="form-group">
                               <label for="email" class="reg-label">Overnight:</label>
                               <input type="text" name="outcall_overnight" id="price-edit-outcall_overnight" class="form-control" value="{{ $details['escort']['outcall_overnight'] }}" placeholder="Enter amount">
                             </div>
                           </div>

                           <div class="col-md-3">
                             <div class="form-group">
                               <label for="email" class="reg-label">1 Week:</label>
                               <input type="text" name="outcall_1wk" id="price-edit-outcall_1wk" class="form-control" value="{{ $details['escort']['outcall_1wk'] }}" placeholder="Enter amount">
                             </div>
                           </div>


                       </div>

                 </div>

                 <div class="modal-footer">

                   <button type="submit" class="btn btn-primary btn-block" name="submit-escort" id="edit-submit-escort" style="font-weight:600;">Update Pricing</button>

                 </div>

             </form>

             <p id="edit-escort-message" class="success-message"></p>


             </div>

         </div>

     </div><!-- Sign up modal ends-->
