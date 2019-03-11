<!-- Sign up modal -->
     <div class="modal fade" id="escorts-edit" tabindex="-1" role="dialog" aria-labelledby="signupLabel">

         <div class="modal-dialog  modal-lg" role="document">

             <div class="modal-content">

                 <div class="modal-header">

                     <button type="button" class="close" data-dismiss="modal" aria-label="Close" name="button"><span style="color:white" aria-hidden="true">&times;</span></button>

                 </div>

                 <div class="modal-body">

                   <form class="form" id="escorteditform">

                       <div class="row">

                         <div class="col-md-4">
                           <div class="form-group">
                             <label for="email" class="reg-label">Gender:</label>
                             <select class="form-control" name="edit-gender" id="edit-gender" readonly>
                                 <option selected value="{{ $details['escort']['gender'] }}">{{ $details['escort']['gender'] }}</option>
                             </select>
                           </div>
                         </div>

                         <div class="col-md-4">
                           <div class="form-group">
                             <label for="email" class="reg-label">Country:</label>
                             <select class="form-control" name="edit-country" id="edit-country">
                                 <option selected value="{{ $details['escort']['country'] }}">{{ $details['escort']['country'] }}</option>
                                 <option value="Nigeria">Nigeria</option>
                                 <option value="Ghana" disabled>Ghana</option>
                                 <option value="South-Africa" disabled>South-Africa</option>
                             </select>
                           </div>
                         </div>

                         <div class="col-md-4">
                           <div class="form-group">
                             <label for="email" class="reg-label">State:</label>
                             <select class="form-control" name="edit-state" id="edit-state">
                               <option selected value="{{ $details['escort']['state'] }}">{{ $details['escort']['state'] }}</option>
                             </select>
                           </div>
                         </div>

                       </div>

                       <div class="row">

                         <div class="col-md-4">
                           <div class="form-group">
                             <label for="email" class="reg-label">City:</label>
                             <select class="form-control" name="edit-city" id="edit-city">
                             <option selected value="{{ $details['escort']['city'] }}">{{ $details['escort']['city'] }}</option>
                             </select>
                           </div>
                         </div>

                         <div class="col-md-4">
                           <div class="form-group">
                             <label for="email" class="reg-label">Build:</label>
                             <select class="form-control" name="edit-build" id="edit-build">
                                 <option selected value="{{ $details['escort']['build'] }}">{{ $details['escort']['build'] }}</option>
                                 <option value="Skinny">Skinny</option>
                                 <option value="Slim">Slim</option>
                                 <option value="Regular">Regular</option>
                                 <option value="Curvy">Curvy</option>
                                 <option value="Chubby">Chubby</option>
                                 <option value="Fat">Fat</option>
                             </select>
                           </div>
                         </div>

                         <div class="col-md-4">
                           <div class="form-group">
                             <label for="email" class="reg-label">Sex Orientation:</label>
                             <select class="form-control" name="edit-sex_orientation" id="edit-sex_orientation">
                               <option selected value="{{ $details['escort']['sex_orientation'] }}">{{ $details['escort']['sex_orientation'] }}</option>
                               <option value="Straight">Hetrosexual(Straight)</option>
                               <option value="Bisexual">Bisexual</option>
                               <option value="Lesbian">Lesbian</option>
                               <option value="Gay">Gay</option>
                             </select>
                           </div>
                         </div>

                       </div>

                       <div class="row">

                         <div class="col-md-4">
                           <div class="form-group">
                             <label for="email" class="reg-label">Year of birth:</label>
                             <select class="form-control" name="edit-year_of_birth" id="edit-year_of_birth">
                                 <option selected value="{{ $details['escort']['year_of_birth'] }}">{{ $details['escort']['year_of_birth'] }}</option>
                                 <?php
                                   $currentYear = now();
                                   $date = new Carbon\Carbon($currentYear);
                                   $now = $date->year;
                                 ?>
                                 @for ($i = $now - 18; $i >  $now - 50; $i--)
                                 <option value="{{ $i }}"> {{ $i }}</option>
                                 @endfor

                             </select>
                           </div>
                         </div>

                         <div class="col-md-4">
                           <div class="form-group">
                             <label for="email" class="reg-label">Ethnicity:</label>
                             <select class="form-control" name="edit-ethnicity" id="edit-ethnicity">
                                <option selected value="{{ $details['escort']['ethnicity'] }}">{{ $details['escort']['ethnicity'] }}</option>
                                 <option value="Black">Black</option>
                                 <option value=""></option>
                             </select>
                           </div>
                         </div>

                         <div class="col-md-4">
                           <div class="form-group">
                             <label for="email" class="reg-label">Bust size:</label>
                             <select class="form-control" name="edit-bust_size" id="edit-bust_size">
                               <option selected value="{{ $details['escort']['bust_size'] }}">{{ $details['escort']['bust_size'] }}</option>
                               <option value="Very small">Very small</option>
                               <option value="Small(A)">Small(A)</option>
                               <option value="Medium(B)">Medium(B)</option>
                               <option value="Large(C)">Large(C)</option>
                               <option value="Very Large(D)">Very Large(D)</option>
                               <option value="Enormous(E+)">Enormous(E+)</option>
                               <option value="None">None</option>
                             </select>
                           </div>
                         </div>

                       </div>

                       <div class="row">

                           <div class="col-md-4">
                             <div class="form-group">
                               <label for="email" class="reg-label">Weight:</label>
                               <input type="text" name="edit-weight" id="edit-weight" class="form-control" value="{{ $details['escort']['weight'] }}" placeholder="Enter weight in kg">
                             </div>
                           </div>

                           <div class="col-md-4">
                             <div class="form-group">
                               <label for="email" class="reg-label">Height:</label>
                               <input type="text" name="edit-height" id="edit-height" class="form-control" value="{{ $details['escort']['height'] }}" placeholder="Enter weight in cm">
                             </div>
                           </div>

                           <input type="text" name="edit-user_id" id="edit-user_id" class="form-control" value="{{ Auth::user()->id}}" style="display:none;">
                           <input type="text" name="edit-auth" id="edit-auth" class="form-control" value="{{ Auth::user()->api_key}}" style="display:none;">


                         <div class="col-md-4">
                           <div class="form-group">
                             <label for="email" class="reg-label">Smoker:</label>
                             <select class="form-control" name="edit-smoker" id="edit-smoker">
                               <option selected value="{{ $details['escort']['smoker'] }}">{{ $details['escort']['smoker'] }}</option>
                                 <option value="Yes">Yes</option>
                                 <option value="No">No</option>
                                 <option value="Occasionally">Occasionally</option>
                             </select>
                           </div>
                         </div>

                       </div>

                       <div class="row">

                           <div class="col-md-4">
                             <div class="form-group">
                             <label for="email" class="reg-label">Looks:</label>
                             <select name="edit-looks" id="edit-looks" class="form-control">
                                 <option selected value="{{ $details['escort']['looks'] }}">{{ $details['escort']['looks'] }}</option>
                                 <option value="Nothing Special">Nothing Special</option>
                                 <option value="Average">Average</option>
                                 <option value="Sexy">Sexy</option>
                                 <option value="Ultra Sexy">Ultra Sexy</option>
                                 <option value="Princess">Princess</option>
                                 <option value="Goddess">Goddess</option>
                                 <option value="Mistress">Mistress</option>
                                 <option value="Pornstar">Pornstar</option>
                                 <option value="Queen">Queen</option>
                                 <option value="Sugar daughter">Sugar daughter</option>
                                 <option value="Macho">Macho</option>
                                 <option value="Corporate type">Corporate type</option>
                                 <option value="Eye Candy">Eye Candy</option>
                                 <option value="Model Looks">Model Looks</option>
                                 <option value="Gang Banger">Gang Banger</option>
                             </select>
                             </div>
                           </div>

                           <div class="col-md-4">
                             <div class="form-group">
                               <label for="email" class="reg-label">Language:</label>
                               <select class="form-control" name="edit-language" id="edit-language">
                                 <option selected value="{{ $details['escort']['language'] }}">{{ $details['escort']['language'] }}</option>
                                 <option value="English">English</option>
                                 <option value="Igbo">Igbo</option>
                                 <option value="Yoruba">Yoruba</option>
                                 <option value="German">German</option>
                               </select>
                             </div>
                           </div>

                           <div class="col-md-4">
                             <div class="form-group">
                               <label for="email" class="reg-label">Availability:</label>
                               <select class="form-control" name="edit-availability" id="edit-availability">
                                 <option selected value="{{ $details['escort']['availability'] }}">{{ $details['escort']['availability'] }}</option>
                                 <option value="Incall">Incall</option>
                                 <option value="Outcall">Outcall</option>
                                 <option value="Both">Both</option>
                               </select>
                             </div>
                           </div>

                       </div>

                       <div class="row" id="edit-incall-row" style="display:none">

                         <div class="col-md-12">
                             <h5 class="availability-h5">Enter rates for Incalls:</h5>
                         </div>


                           <div class="col-md-3">
                             <div class="form-group">
                               <label for="email" class="reg-label">1 hour:</label>
                               <select class="form-control" name="incall_1hr" id="edit-incall_1hr">
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
                               <label for="email" class="reg-label">24 hours:</label>
                               <input type="text" name="incall_1dy" id="edit-incall_1dy" class="form-control" value="{{ $details['escort']['incall_1dy'] }}" placeholder="Enter amount">
                             </div>
                           </div>

                           <div class="col-md-3">
                             <div class="form-group">
                               <label for="email" class="reg-label">Overnight:</label>
                               <input type="text" name="incall_overnight" id="edit-incall_overnight" class="form-control" value="{{ $details['escort']['incall_overnight'] }}" placeholder="Enter amount">
                             </div>
                           </div>

                           <div class="col-md-3">
                             <div class="form-group">
                               <label for="email" class="reg-label">1 Week:</label>
                               <input type="text" name="incall_1wk" id="edit-incall_1wk" class="form-control" value="{{ $details['escort']['incall_1wk'] }}" placeholder="Enter amount">
                             </div>
                           </div>


                       </div>

                       <div class="row" id="edit-outcall-row" style="display:none">

                         <div class="col-md-12">
                             <h5 class="availability-h5">Enter rates for Outcalls:</h5>
                         </div>


                           <div class="col-md-3">
                             <div class="form-group">
                               <label for="email" class="reg-label">1 hour:</label>
                               <input type="text" name="outcall_1hr" id="edit-outcall_1hr" class="form-control" value="{{ $details['escort']['outcall_1hr'] }}" placeholder="Enter amount">
                             </div>
                           </div>

                           <div class="col-md-3">
                             <div class="form-group">
                               <label for="email" class="reg-label">24 hours:</label>
                               <input type="text" name="outcall_1dy" id="edit-outcall_1dy" class="form-control" value="{{ $details['escort']['outcall_1dy'] }}" placeholder="Enter amount">
                             </div>
                           </div>

                           <div class="col-md-3">
                             <div class="form-group">
                               <label for="email" class="reg-label">Overnight:</label>
                               <input type="text" name="outcall_overnight" id="edit-outcall_overnight" class="form-control" value="{{ $details['escort']['outcall_overnight'] }}" placeholder="Enter amount">
                             </div>
                           </div>

                           <div class="col-md-3">
                             <div class="form-group">
                               <label for="email" class="reg-label">1 Week:</label>
                               <input type="text" name="outcall_1wk" id="edit-outcall_1wk" class="form-control" value="{{ $details['escort']['outcall_1wk'] }}" placeholder="Enter amount">
                             </div>
                           </div>


                       </div>

                       <div class="row">

                         <div class="col-md-12">
                             <h5 class="availability-h5">Enter rates for Remote Services:</h5>
                         </div>


                           <div class="col-md-3">
                             <div class="form-group">
                               <label for="email" class="reg-label">Video Sex:</label>
                               <select class="form-control" name="video_sex" id="video_sex">
                                   <option selected>Select an amount</option>
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
                               <label for="email" class="reg-label">Sex Chat:</label>
                               <select class="form-control" name="sex_chat" id="sex_chat">
                                   <option selected>Select an amount</option>
                                   <option value="10,000">10,000</option>
                                   <option value="15,000">15,000</option>
                                   <option value="20,000">20,000</option>
                                   <option value="25,000">25,000</option>

                                   @if( ($details['escort']['rank'] == "silver") || ($details['escort']['rank'] == "gold") || ($details['escort']['rank'] == "platinum"))

                                     <option value="30,000">30,000</option>
                                     <option value="35,000">35,000</option>
                                     <option value="40,000">40,000</option>
                                     <option value="45,000">45,000</option>
                                     <option value="50,000">50,000</option>
                                   @endif

                                   @if( ($details['escort']['rank'] == "gold") || ($details['escort']['rank'] == "platinum"))
                                     <option value="55,000">55,000</option>
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

                                   @if($details['escort']['rank'] == "platinum")
                                   <option value="60,000">150,000</option>
                                   <option value="65,000">200,000</option>
                                   <option value="70,000">250,000</option>
                                   <option value="75,000">300,000</option>
                                   <option value="80,000">350,000</option>
                                   <option value="85,000">400,000</option>
                                   <option value="95,000">450,000</option>
                                   <option value="90,000">500,000</option>
                                   @endif

                               </select>
                             </div>
                           </div>

                           <div class="col-md-3">
                             <div class="form-group">
                               <label for="email" class="reg-label">Phone Sex:</label>
                               <select class="form-control" name="phone_sex" id="phone_sex">
                                  <option selected>Select a value</option>
                                   <option value="10,000">10,000</option>
                                   <option value="15,000">15,000</option>
                                   <option value="20,000">20,000</option>
                                   <option value="25,000">25,000</option>

                                   @if( ($details['escort']['rank'] == "silver") || ($details['escort']['rank'] == "gold") || ($details['escort']['rank'] == "platinum"))

                                     <option value="30,000">30,000</option>
                                     <option value="35,000">35,000</option>
                                     <option value="40,000">40,000</option>
                                     <option value="45,000">45,000</option>
                                     <option value="50,000">50,000</option>
                                   @endif

                                   @if( ($details['escort']['rank'] == "gold") || ($details['escort']['rank'] == "platinum"))
                                     <option value="55,000">55,000</option>
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

                                   @if($details['escort']['rank'] == "platinum")
                                   <option value="60,000">150,000</option>
                                   <option value="65,000">200,000</option>
                                   <option value="70,000">250,000</option>
                                   <option value="75,000">300,000</option>
                                   <option value="80,000">350,000</option>
                                   <option value="85,000">400,000</option>
                                   <option value="95,000">450,000</option>
                                   <option value="90,000">500,000</option>
                                   @endif
                               </select>
                             </div>
                           </div>

                           <div class="col-md-3">
                             <div class="form-group">
                               <label for="email" class="reg-label">Nudes:</label>
                               <select class="form-control" name="nudes" id="nudes">
                                  <option selected>Select a value</option>
                                  <option value="10,000">10,000</option>
                                  <option value="15,000">15,000</option>
                                  <option value="20,000">20,000</option>
                                  <option value="25,000">25,000</option>
                                  <option value="30,000">30,000</option>
                                  <option value="35,000">35,000</option>
                                  <option value="40,000">40,000</option>
                                  <option value="45,000">45,000</option>
                                  <option value="50,000">50,000</option>
                                  <option value="55,000">55,000</option>
                                  <option value="60,000">60,000</option>
                                  <option value="65,000">65,000</option>
                                  <option value="70,000">70,000</option>
                                  <option value="75,000">75,000</option>
                                  <option value="80,000">80,000</option>


                                  @if( ($details['escort']['rank'] == "silver") || ($details['escort']['rank'] == "gold") || ($details['escort']['rank'] == "platinum"))
                                  <option value="85,000">85,000</option>
                                  <option value="95,000">90,000</option>
                                  <option value="90,000">95,000</option>
                                  <option value="100,000">100,000</option>
                                  <option value="150,000">150,000</option>
                                  <option value="200,000">200,000</option>

                                  @endif

                                  @if( ($details['escort']['rank'] == "gold") || ($details['escort']['rank'] == "platinum"))
                                  <option value="250,000">250,000</option>
                                  <option value="300,000">300,000</option>
                                  <option value="350,000">350,000</option>
                                  <option value="400,000">400,000</option>


                                  @endif

                                  @if($details['escort']['rank'] == "platinum")
                                  <option value="450,000">450,000</option>
                                  <option value="500,000">500,000</option>
                                  @endif
                               </select>
                             </div>
                           </div>

                       </div>

                       <div class="row">
                           <div class="col-md-12">
                           <label for="email" class="reg-label">Describe yourself:</label>
                           <textarea name="about" cols="30" rows="10" style="resize:none" class="form-control" id="edit-about">
                              {{ $details['escort']['about'] }}
                           </textarea>
                           </div>
                       </div>

                 </div>

                 <div class="modal-footer">
                  <button type="submit" class="btn btn-primary btn-block" name="submit-escort" id="edit-submit-escort" style="font-weight:600;">Submit</button>
                 </div>

             </form>

             <p id="edit-escort-message" class="success-message"></p>


             </div>

         </div>

     </div><!-- Sign up modal ends-->
