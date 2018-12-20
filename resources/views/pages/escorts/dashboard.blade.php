<div class="ads-subscribe">

    <div class="row">
      <div class="col-md-3 text-center">
          <h4 class="feature-subscribe-header">Increase the chances of your profile been seen by subscribing for a featured account</h4>
          <h6>Pricing:</h6>
          <ul class="list-group">
              <li class="list-group-item" id="pricing-list"><span class="details-key">Daily</span> : 1,000 </li>
              <li class="list-group-item" id="pricing-list"><span class="details-key">Weekly</span> : 5,000</li>
              <li class="list-group-item" id="pricing-list"><span class="details-key">Monthly</span> : 17,000</li>
          </ul>
          <a href="#" class="btn btn-primary">Go Feature</a>
      </div>

      <div class="col-md-3 text-center">
          <h4 class="feature-subscribe-header">Get your account to always show on the front page by subscribing for a VIP account</h4>
          <h6>Pricing:</h6>
          <ul class="list-group">
              <li class="list-group-item" id="pricing-list"><span class="details-key">Daily</span> : 2,000 </li>
              <li class="list-group-item" id="pricing-list"><span class="details-key">Weekly</span> : 6,000</li>
              <li class="list-group-item" id="pricing-list"><span class="details-key">Monthly</span> : 20,000</li>
          </ul>
          <a href="#" class="btn btn-info">Go VIP Now</a>
      </div>

      <div class="col-md-3 text-center">
          <h4 class="feature-subscribe-header">Get your account to always show on the front page by subscribing for a VIP account</h4>
          <h6>Pricing:</h6>
          <ul class="list-group">
              <li class="list-group-item" id="pricing-list"><span class="details-key">Daily</span> : 1,000 </li>
              <li class="list-group-item" id="pricing-list"><span class="details-key">Weekly</span> : 5,000</li>
              <li class="list-group-item" id="pricing-list"><span class="details-key">Monthly</span> : 17,000</li>
          </ul>
          <a href="#" class="btn btn-success">Subscribe Now</a>
      </div>

    </div>

</div>

<div class="container main-body">
    <div class="row">

      <div class="col-md-12">
          <div class="row">

              <div class="col-md-12 heading">
                  <h4 class="landing-header">Welcome {{ Auth::user()->name }}</h4>
              </div>

              <div class="">
                <section>
                    <h5>Complete your profile registration.</h5>
                </section>

                <section class="col-md-6">

                    <div class="row user_details">
                      <fieldset>
                        <div class="row">
                          <div class="col-md-9 col-sm-7 col-xs-7">
                              <h5 class="details-header">User Details: </h5>
                          </div>
                          <div class="col-md-3 col-sm-5 col-xs-5">
                              <a href="/imageview" class="btn btn-primary btn-account pull-right">Edit</a>
                          </div>
                        </div>
                          <div class="col-md-12 escort-list-details" style="padding:0px;">
                              <ul class="list-group">
                                  <li class="list-group-item"><span class="details-key">Name</span> : {{ $details['user']['name'] }} </li>
                                  <li class="list-group-item"><span class="details-key">Username</span> : {{ $details['user']['username'] }} </li>
                                  <li class="list-group-item"><span class="details-key">Email</span> : {{ $details['user']['email'] }} </li>
                                  <li class="list-group-item"><span class="details-key">Phone Number</span> : {{ $details['user']['phone'] }} </li>
                                  <li class="list-group-item"><span class="details-key">Account created: </span> : {{ Carbon\Carbon::parse($details['user']['created_at'])->toDayDateTimeString() }} </li>
                                  <li class="list-group-item"><span class="details-key">Last seen</span> : {{ Carbon\Carbon::parse($details['user']['updated_at'])->toDayDateTimeString() }} </li>
                                  @if(!($details['escort']) == NULL)
                                      <li class="list-group-item"><span class="details-key">Profile views: </span> : {{ $details['escort']['views'] }} </li>
                                  @endif
                              </ul>
                          </div>

                      </fieldset>
                    </div>

                    <div class="row user_details">
                      <fieldset>
                        <div class="row">
                          <div class="col-md-9 col-sm-7 col-xs-7">
                              <h5 class="details-header">Other Details: </h5>
                          </div>
                          <div class="col-md-3 col-sm-5 col-xs-5">
                              <a data-toggle="modal" data-target="#escorts-register" class="btn btn-primary btn-account">Add Escort details</a>
                          </div>
                        </div>

                          @if(!($details['escort']) == NULL)
                          <div class="col-md-4 escort-list-details">
                              <ul class="list-group">
                                  <li class="list-group-item"><span class="details-key">Gender</span> : {{ $details['escort']['gender'] }} </li>
                                  <li class="list-group-item"><span class="details-key">Country</span> : {{ $details['escort']['country'] }} </li>
                                  <li class="list-group-item"><span class="details-key">State</span> : {{ $details['escort']['state'] }} </li>
                                  <li class="list-group-item"><span class="details-key">City</span> : {{ $details['escort']['city'] }} </li>
                                  <li class="list-group-item"><span class="details-key">Language</span> : {{ $details['escort']['language'] }} </li>
                              </ul>
                          </div>
                          <div class="col-md-4 escort-list-details">
                              <ul class="list-group">
                                  <li class="list-group-item"><span class="details-key">Year of birth</span> : {{ $details['escort']['year_of_birth'] }} </li>
                                  <li class="list-group-item"><span class="details-key">Ethnicity</span> : {{ $details['escort']['ethnicity'] }} </li>
                                  <li class="list-group-item"><span class="details-key">Bust Size</span> : {{ $details['escort']['bust_size'] }} </li>
                                  <li class="list-group-item"><span class="details-key">Height</span> : {{ $details['escort']['height'] }} </li>
                                  <li class="list-group-item"><span class="details-key">Sex Orientation</span> : {{ $details['escort']['sex_orientation'] }} </li>
                              </ul>
                          </div>
                          <div class="col-md-4 escort-list-details">
                              <ul class="list-group">
                                  <li class="list-group-item"><span class="details-key">Weight</span> : {{ $details['escort']['weight'] }} </li>
                                  <li class="list-group-item"><span class="details-key">Build</span> : {{ $details['escort']['build'] }} </li>
                                  <li class="list-group-item"><span class="details-key">Looks</span> : {{ $details['escort']['looks'] }} </li>
                                  <li class="list-group-item"><span class="details-key">Availability</span> : {{ $details['escort']['availability'] }} </li>
                                  <li class="list-group-item"><span class="details-key">Smoker</span> : {{ $details['escort']['smoker'] }} </li>
                              </ul>
                          </div>
                          <div class="col-md-12 escort-list-details">
                              <span class="details-key">About</span> <br>
                              <p>{{ $details['escort']['about'] }}</p>

                          </div>
                          @else
                              <h5>Seems you have not registered your escort details</h5>
                              <a data-toggle="modal" data-target="#escorts-register" class="btn btn-primary btn-account">Add Escort details</a>
                          @endif




                      </fieldset>
                    </div>

                    <div class="row user_details">
                      <fieldset>
                        <div class="row">
                          <div class="col-md-9 col-sm-7 col-xs-7">
                              <h5 class="details-header">Services: </h5>
                          </div>
                          <div class="col-md-3 col-sm-5 col-xs-5">
                              <a href="/imageview" class="btn btn-primary btn-account pull-right">Edit Services</a>
                          </div>
                        </div>

                          @if(!($details['escort']) == NULL)
                            <?php
                              if (!empty($details['services'])) {

                                unset($details['services']['id']);
                                unset($details['services']['escort_id']);
                                unset($details['services']['created_at']);
                                unset($details['services']['updated_at']);

                                foreach ($details['services'] as $key => $services) {

                                  if ($services) {
                                ?>
                                  <a class="dashboard-services">{{$key}}</a>
                              <?php
                                  }
                                }
                              }
                            ?>
                            @else
                                <h5>Seems you have not registered your escort details</h5>
                                <a href="" class="btn btn-primary btn-account">Add Services</a>
                            @endif

                      </fieldset>
                    </div>

                    <div class="row user_details">
                      <fieldset>
                        <div class="row">
                          <div class="col-md-9 col-sm-7 col-xs-7">
                              <h5 class="details-header">Pricing: </h5>
                          </div>
                          <div class="col-md-3 col-sm-5 col-xs-5">
                              <a href="/imageview" class="btn btn-primary btn-account pull-right">Edit pricing</a>
                          </div>
                        </div>

                          @if(!($details['escort']) == NULL)
                              <div class="col-md-6 escort-list-details">
                                  <ul class="list-group">
                                      <li class="list-group-item"><span class="details-key">Incall</span> </li>
                                      <li class="list-group-item"><span class="details-key">1 hour</span> : {{ $details['escort']['incall_1hr'] }} </li>
                                      <li class="list-group-item"><span class="details-key">24 hours</span> : {{ $details['escort']['incall_1dy'] }} </li>
                                      <li class="list-group-item"><span class="details-key">Overnight</span> : {{ $details['escort']['incall_overnight'] }} </li>
                                      <li class="list-group-item"><span class="details-key">1 week</span> : {{ $details['escort']['incall_1wk'] }} </li>
                                  </ul>
                              </div>
                              <div class="col-md-6 escort-list-details">
                                  <ul class="list-group">
                                    <ul class="list-group">
                                        <li class="list-group-item"><span class="details-key">Outcall</span> </li>
                                        <li class="list-group-item"><span class="details-key">1 hour</span> : {{ $details['escort']['outcall_1hr'] }} </li>
                                        <li class="list-group-item"><span class="details-key">24 hours</span> : {{ $details['escort']['outcall_1dy'] }} </li>
                                        <li class="list-group-item"><span class="details-key">Overnight</span> : {{ $details['escort']['outcall_overnight'] }} </li>
                                        <li class="list-group-item"><span class="details-key">1 week</span> : {{ $details['escort']['outcall_1wk'] }} </li>
                                    </ul>
                                  </ul>
                              </div>
                            @else
                                <h5>Seems you have not registered your escort details</h5>
                                <a href="" class="btn btn-primary btn-account">Add your rates</a>
                            @endif


                      </fieldset>
                    </div>

                </section>

                <section class="col-md-6">
                    <div class="row user_details">
                      <fieldset>

                          <div class="row">
                            <div class="col-md-9 col-sm-7 col-xs-7">
                                <h5 class="details-header">Images: </h5>
                            </div>
                            <div class="col-md-3 col-sm-5 col-xs-5">
                                <a href="/imageview" class="btn btn-primary btn-account pull-right">Click to add Images</a>
                            </div>
                          </div>


                          @if(!($details['escort']) == NULL)
                              <div id="animated-thumbnails">

                                <?php
                                  if (!empty($details['images'])) {

                                    unset($details['images']['id']);
                                    unset($details['images']['user_id']);
                                    unset($details['images']['escort_id']);
                                    unset($details['images']['created_at']);
                                    unset($details['images']['updated_at']);

                                  foreach ($details['images'] as $key => $images) {
                                      if ($images !== NULL) {
                                  ?>
                                    <a href="../img/escort/images/{{$images}}">
                                        <img src="../img/escort/images/{{$images}}" />
                                    </a>
                                <?php
                                      }
                                  }
                                }
                                ?>
                            @else
                                <h5>Seems you have not registered your escort details</h5>
                                <a href="/imageview" class="btn btn-primary btn-account">Upload Images</a>
                            @endif


                          </div>

                      </fieldset>
                    </div>

                    <div class="row user_details">
                      <fieldset>

                          <div class="row">
                            <div class="col-md-9 col-sm-7 col-xs-7">
                                <h5 class="details-header">Videos: </h5>
                            </div>
                            <div class="col-md-3 col-sm-5 col-xs-5">
                                <a href="/videoview" class="btn btn-primary btn-account pull-right">Click to add Videos</a>
                            </div>
                          </div>


                          @if(!($details['escort']) == NULL)
                              <div id="animated-thumbnails">

                                <?php
                                  if (!empty($details['videos'])) {

                                    unset($details['videos']['id']);
                                    unset($details['videos']['user_id']);
                                    unset($details['videos']['escort_id']);
                                    unset($details['videos']['created_at']);
                                    unset($details['videos']['updated_at']);

                                  $i = 1;

                                  foreach ($details['videos'] as $key => $video) {
                                      if ($video !== NULL) {
                                      $videoCount = "video".$i;
                                  ?>
                                  <!-- Hidden video div -->
                                  <div style="display:none;" id="{{ $videoCount }}">
                                      <video class="lg-video-object lg-html5 video-js vjs-default-skin" controls preload="none">
                                          <source src="/video/escort/{{ $video }}" type="video/mp4">
                                           Your browser does not support HTML5 video.
                                      </video>
                                  </div>

                                  <?php
                                      }
                                      $i++;
                                  }
                                  ?>

                                  <ul id="video-gallery">

                                  <?php
                                  $i = 1;
                                  foreach ($details['videos'] as $key => $video) {
                                      if ($video !== NULL) {
                                      $videoCount = "video".$i;
                                  ?>
                                  <!-- Hidden video div -->
                                  <!-- data-src should not be provided when you use html5 videos -->
                                    <li data-poster="/img/e.jpg" data-sub-html="{{ $video }}" data-html="#{{ $videoCount }}" >
                                        <img src="/img/e.jpg" />
                                    </li>

                                  <?php
                                      }
                                      $i++;
                                  }
                                  ?>
                                  </ul>

                                <?php
                                      }
                                ?>
                            @else
                                <h5>Seems you have not registered your escort details</h5>
                                <a href="/imageview" class="btn btn-primary btn-account">Upload Images</a>
                            @endif


                          </div>

                      </fieldset>
                    </div>

                </section>
              </div>

          </div>
      </div>
    </div>
</div>
