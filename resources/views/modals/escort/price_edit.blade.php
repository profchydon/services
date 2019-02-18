<!-- Sign up modal -->
     <div class="modal fade" id="price-update" tabindex="-1" role="dialog" aria-labelledby="signupLabel">

         <div class="modal-dialog  modal-lg" role="document">

             <div class="modal-content">

                 <div class="modal-body">

                   <button type="button" class="close" data-dismiss="modal" aria-label="Close" name="button"><span style="color:white" aria-hidden="true">&times;</span></button>

                   <div class="price-edit-heading text-center">
                     <h4>You are operating a {{ $details['escort']['rank'] }} escort account.</h4>
                     <h5>
                         Note: {{ $details['escort']['rank'] }} escorts can only set their price rate
                         @if( $details['escort']['rank'] == "regular")
                            N10,000 - N50,000
                         @elseif ( $details['escort']['rank'] == "silver")
                            N10,000 - N70,000
                         @elseif ( $details['escort']['rank'] == "gold")
                            N10,000 - N100,000
                         @elseif ( $details['escort']['rank'] == "platinum")
                            N10,000 - N150,000
                         @else
                         @endif
                     </h5>
                   </div>

                   <hr>

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

                               <select class="form-control" name="incall_1hr" id="price-edit-incall_1hr">
                                   <option selected value="{{ $details['escort']['incall_1hr'] }}">{{ $details['escort']['incall_1hr'] }}</option>
                                   <option value="10,000">10,000</option>
                                   <option value="15,000">15,000</option>

                                   @if( ($details['escort']['rank'] == "silver") || ($details['escort']['rank'] == "gold") || ($details['escort']['rank'] == "platinum"))
                                     <option value="20,000">20,000</option>
                                     <option value="25,000">25,000</option>
                                     <option value="30,000">30,000</option>
                                     <option value="35,000">35,000</option>
                                   @endif

                                   @if( ($details['escort']['rank'] == "gold") || ($details['escort']['rank'] == "platinum"))

                                     <option value="40,000">40,000</option>
                                     <option value="45,000">45,000</option>
                                     <option value="50,000">50,000</option>
                                     <option value="55,000">55,000</option>
                                   @endif

                                   @if($details['escort']['rank'] == "platinum")
                                   <option value="60,000">60,000</option>
                                   <option value="65,000">65,000</option>
                                   <option value="70,000">70,000</option>
                                   <option value="75,000">75,000</option>
                                   <option value="80,000">80,000</option>
                                   <option value="85,000">85,000</option>
                                   <option value="95,000">90,000</option>
                                   <option value="90,000">95,000</option>
                                   <option value="100,000">100,000</option>
                                   @endif

                               </select>
                             </div>
                           </div>

                           <div class="col-md-3">
                             <div class="form-group">
                               <label for="email" class="reg-label">24 hour:</label>

                               <select class="form-control" name="incall_1dy" id="price-edit-incall_1dy">

                                   <option selected value="{{ $details['escort']['incall_1dy'] }}">{{ $details['escort']['incall_1dy'] }}</option>
                                   <option value="10,000">10,000</option>
                                   <option value="15,000">15,000</option>

                                   @if( ($details['escort']['rank'] == "silver") || ($details['escort']['rank'] == "gold") || ($details['escort']['rank'] == "platinum"))
                                     <option value="20,000">20,000</option>
                                     <option value="25,000">25,000</option>
                                     <option value="30,000">30,000</option>
                                     <option value="35,000">35,000</option>
                                   @endif

                                   @if( ($details['escort']['rank'] == "gold") || ($details['escort']['rank'] == "platinum"))

                                     <option value="40,000">40,000</option>
                                     <option value="45,000">45,000</option>
                                     <option value="50,000">50,000</option>
                                     <option value="55,000">55,000</option>
                                   @endif

                                   @if($details['escort']['rank'] == "platinum")
                                   <option value="60,000">60,000</option>
                                   <option value="65,000">65,000</option>
                                   <option value="70,000">70,000</option>
                                   <option value="75,000">75,000</option>
                                   <option value="80,000">80,000</option>
                                   <option value="85,000">85,000</option>
                                   <option value="95,000">90,000</option>
                                   <option value="90,000">95,000</option>
                                   <option value="100,000">100,000</option>
                                   @endif

                               </select>
                             </div>
                           </div>

                           <div class="col-md-3">
                             <div class="form-group">
                               <label for="email" class="reg-label">Overnight:</label>

                               <select class="form-control" name="incall_overnight" id="price-edit-incall_overnight">
                                   <option selected value="{{ $details['escort']['incall_overnight'] }}">{{ $details['escort']['incall_overnight'] }}</option>
                                   <option value="10,000">10,000</option>
                                   <option value="15,000">15,000</option>

                                   @if( ($details['escort']['rank'] == "silver") || ($details['escort']['rank'] == "gold") || ($details['escort']['rank'] == "platinum"))
                                     <option value="20,000">20,000</option>
                                     <option value="25,000">25,000</option>
                                     <option value="30,000">30,000</option>
                                     <option value="35,000">35,000</option>
                                   @endif

                                   @if( ($details['escort']['rank'] == "gold") || ($details['escort']['rank'] == "platinum"))

                                     <option value="40,000">40,000</option>
                                     <option value="45,000">45,000</option>
                                     <option value="50,000">50,000</option>
                                     <option value="55,000">55,000</option>
                                   @endif

                                   @if($details['escort']['rank'] == "platinum")
                                   <option value="60,000">60,000</option>
                                   <option value="65,000">65,000</option>
                                   <option value="70,000">70,000</option>
                                   <option value="75,000">75,000</option>
                                   <option value="80,000">80,000</option>
                                   <option value="85,000">85,000</option>
                                   <option value="95,000">90,000</option>
                                   <option value="90,000">95,000</option>
                                   <option value="100,000">100,000</option>
                                   @endif

                               </select>
                             </div>
                           </div>

                           <div class="col-md-3">
                             <div class="form-group">
                               <label for="email" class="reg-label">One week:</label>

                               <select class="form-control" name="incall_1wk" id="price-edit-incall_1wk">
                                   <option selected value="{{ $details['escort']['incall_1wk'] }}">{{ $details['escort']['incall_1wk'] }}</option>
                                   <option value="10,000">10,000</option>
                                   <option value="15,000">15,000</option>

                                   @if( ($details['escort']['rank'] == "silver") || ($details['escort']['rank'] == "gold") || ($details['escort']['rank'] == "platinum"))
                                     <option value="20,000">20,000</option>
                                     <option value="25,000">25,000</option>
                                     <option value="30,000">30,000</option>
                                     <option value="35,000">35,000</option>
                                   @endif

                                   @if( ($details['escort']['rank'] == "gold") || ($details['escort']['rank'] == "platinum"))

                                     <option value="40,000">40,000</option>
                                     <option value="45,000">45,000</option>
                                     <option value="50,000">50,000</option>
                                     <option value="55,000">55,000</option>
                                   @endif

                                   @if($details['escort']['rank'] == "platinum")
                                   <option value="60,000">60,000</option>
                                   <option value="65,000">65,000</option>
                                   <option value="70,000">70,000</option>
                                   <option value="75,000">75,000</option>
                                   <option value="80,000">80,000</option>
                                   <option value="85,000">85,000</option>
                                   <option value="95,000">90,000</option>
                                   <option value="90,000">95,000</option>
                                   <option value="100,000">100,000</option>
                                   @endif

                               </select>
                             </div>
                           </div>

                       </div>

                       <div class="row">

                         <div class="col-md-12">
                             <h5 class="availability-h5">Enter rates for Outcalls:</h5>
                         </div>

                         <input type="text" name="edit-user_id" id="price-edit-user_id" class="form-control" value="{{ Auth::user()->id}}" style="display:none;">
                         <input type="text" name="edit-auth" id="price-edit-auth" class="form-control" value="{{ Auth::user()->api_key}}" style="display:none;">

                           <div class="col-md-3">
                             <div class="form-group">
                               <label for="email" class="reg-label">1 hour:</label>

                               <select class="form-control" name="outcall_1hr" id="price-edit-outcall_1hr">
                                   <option selected value="{{ $details['escort']['outcall_1hr'] }}">{{ $details['escort']['outcall_1hr'] }}</option>
                                   <option value="10,000">10,000</option>
                                   <option value="15,000">15,000</option>

                                   @if( ($details['escort']['rank'] == "silver") || ($details['escort']['rank'] == "gold") || ($details['escort']['rank'] == "platinum"))
                                     <option value="20,000">20,000</option>
                                     <option value="25,000">25,000</option>
                                     <option value="30,000">30,000</option>
                                     <option value="35,000">35,000</option>
                                   @endif

                                   @if( ($details['escort']['rank'] == "gold") || ($details['escort']['rank'] == "platinum"))

                                     <option value="40,000">40,000</option>
                                     <option value="45,000">45,000</option>
                                     <option value="50,000">50,000</option>
                                     <option value="55,000">55,000</option>
                                   @endif

                                   @if($details['escort']['rank'] == "platinum")
                                   <option value="60,000">60,000</option>
                                   <option value="65,000">65,000</option>
                                   <option value="70,000">70,000</option>
                                   <option value="75,000">75,000</option>
                                   <option value="80,000">80,000</option>
                                   <option value="85,000">85,000</option>
                                   <option value="95,000">90,000</option>
                                   <option value="90,000">95,000</option>
                                   <option value="100,000">100,000</option>
                                   @endif

                               </select>
                             </div>
                           </div>

                           <div class="col-md-3">
                             <div class="form-group">
                               <label for="email" class="reg-label">24 hour:</label>

                               <select class="form-control" name="outcall_1dy" id="price-edit-outcall_1dy">
                                   <option selected value="{{ $details['escort']['outcall_1dy'] }}">{{ $details['escort']['outcall_1dy'] }}</option>
                                   <option value="10,000">10,000</option>
                                   <option value="15,000">15,000</option>

                                   @if( ($details['escort']['rank'] == "silver") || ($details['escort']['rank'] == "gold") || ($details['escort']['rank'] == "platinum"))
                                     <option value="20,000">20,000</option>
                                     <option value="25,000">25,000</option>
                                     <option value="30,000">30,000</option>
                                     <option value="35,000">35,000</option>
                                   @endif

                                   @if( ($details['escort']['rank'] == "gold") || ($details['escort']['rank'] == "platinum"))

                                     <option value="40,000">40,000</option>
                                     <option value="45,000">45,000</option>
                                     <option value="50,000">50,000</option>
                                     <option value="55,000">55,000</option>
                                   @endif

                                   @if($details['escort']['rank'] == "platinum")
                                   <option value="60,000">60,000</option>
                                   <option value="65,000">65,000</option>
                                   <option value="70,000">70,000</option>
                                   <option value="75,000">75,000</option>
                                   <option value="80,000">80,000</option>
                                   <option value="85,000">85,000</option>
                                   <option value="95,000">90,000</option>
                                   <option value="90,000">95,000</option>
                                   <option value="100,000">100,000</option>
                                   @endif

                               </select>
                             </div>
                           </div>

                           <div class="col-md-3">
                             <div class="form-group">
                               <label for="email" class="reg-label">Overnight:</label>

                               <select class="form-control" name="outcall_overnight" id="price-edit-outcall_overnight">
                                   <option selected value="{{ $details['escort']['outcall_overnight'] }}">{{ $details['escort']['outcall_overnight'] }}</option>
                                   <option value="10,000">10,000</option>
                                   <option value="15,000">15,000</option>

                                   @if( ($details['escort']['rank'] == "silver") || ($details['escort']['rank'] == "gold") || ($details['escort']['rank'] == "platinum"))
                                     <option value="20,000">20,000</option>
                                     <option value="25,000">25,000</option>
                                     <option value="30,000">30,000</option>
                                     <option value="35,000">35,000</option>
                                   @endif

                                   @if( ($details['escort']['rank'] == "gold") || ($details['escort']['rank'] == "platinum"))

                                     <option value="40,000">40,000</option>
                                     <option value="45,000">45,000</option>
                                     <option value="50,000">50,000</option>
                                     <option value="55,000">55,000</option>
                                   @endif

                                   @if($details['escort']['rank'] == "platinum")
                                   <option value="60,000">60,000</option>
                                   <option value="65,000">65,000</option>
                                   <option value="70,000">70,000</option>
                                   <option value="75,000">75,000</option>
                                   <option value="80,000">80,000</option>
                                   <option value="85,000">85,000</option>
                                   <option value="95,000">90,000</option>
                                   <option value="90,000">95,000</option>
                                   <option value="100,000">100,000</option>
                                   @endif

                               </select>
                             </div>
                           </div>

                           <div class="col-md-3">
                             <div class="form-group">
                               <label for="email" class="reg-label">One week:</label>

                               <select class="form-control" name="outcall_1wk" id="price-edit-outcall_1wk">
                                   <option selected value="{{ $details['escort']['outcall_1wk'] }}">{{ $details['escort']['outcall_1wk'] }}</option>
                                   <option value="10,000">10,000</option>
                                   <option value="15,000">15,000</option>

                                   @if( ($details['escort']['rank'] == "silver") || ($details['escort']['rank'] == "gold") || ($details['escort']['rank'] == "platinum"))
                                     <option value="20,000">20,000</option>
                                     <option value="25,000">25,000</option>
                                     <option value="30,000">30,000</option>
                                     <option value="35,000">35,000</option>
                                   @endif

                                   @if( ($details['escort']['rank'] == "gold") || ($details['escort']['rank'] == "platinum"))

                                     <option value="40,000">40,000</option>
                                     <option value="45,000">45,000</option>
                                     <option value="50,000">50,000</option>
                                     <option value="55,000">55,000</option>
                                   @endif

                                   @if($details['escort']['rank'] == "platinum")
                                   <option value="60,000">60,000</option>
                                   <option value="65,000">65,000</option>
                                   <option value="70,000">70,000</option>
                                   <option value="75,000">75,000</option>
                                   <option value="80,000">80,000</option>
                                   <option value="85,000">85,000</option>
                                   <option value="95,000">90,000</option>
                                   <option value="90,000">95,000</option>
                                   <option value="100,000">100,000</option>
                                   @endif

                               </select>
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
