<div class="container main-body">
    <div class="row">

      <div class="col-md-12">
          <div class="row">

              <div class="col-md-12 heading">
                  <h4 class="landing-header">Call {{ $escort['user']['username'] }} on {{ $escort['user']['phone'] }}</h4>
              </div>

              <div class="">
                <section>
                    <h5 class="header-plea">Kindly let {{ $escort['user']['username'] }} know you got her contact from wildplayground</h5>
                </section>

                <section class="col-md-6">
                    <div class="row user_details">
                      <fieldset>
                          <h5 class="details-header">Images:</h5>
                          <div id="animated-thumbnails">

                            <?php
                              if (!empty($escort['images'])) {

                                unset($escort['images']['id']);
                                unset($escort['images']['user_id']);
                                unset($escort['images']['escort_id']);
                                unset($escort['images']['created_at']);
                                unset($escort['images']['updated_at']);

                              foreach ($escort['images'] as $key => $images) {
                                  if ($images !== NULL) {
                              ?>
                                <a href="../img/{{$images}}">
                                    <img src="../img/{{$images}}" />
                                </a>
                            <?php
                                  }
                              }

                            }else {
                            ?>
                              <h5> Seems {{ $escort['user']['username'] }} haven't uploaded an image yet</h5>
                            <?php
                            }
                            ?>

                          </div>

                      </fieldset>
                    </div>

                    <div class="row user_details">
                      <fieldset>
                          <h5 class="details-header">Videos:</h5>
                          <!-- Hidden video div -->
                          <div style="display:none;" id="video1">
                              <video class="lg-video-object lg-html5 video-js vjs-default-skin" controls preload="none">
                                  <source src="/video/test.mp4" type="video/mp4">
                                   Your browser does not support HTML5 video.
                              </video>
                          </div>
                          <div style="display:none;" id="video2">
                              <video class="lg-video-object lg-html5 video-js vjs-default-skin" controls preload="none">
                                  <source src="/video/test.mp4" type="video/mp4">
                                   Your browser does not support HTML5 video.
                              </video>
                          </div>

                          <!-- data-src should not be provided when you use html5 videos -->
                          <ul id="video-gallery">
                            <li data-poster="/img/e.jpg" data-sub-html="video caption1" data-html="#video1" >
                                <img src="/img/e.jpg" />
                            </li>
                            <li data-poster="/img/e.jpg" data-sub-html="video caption2" data-html="#video2" >
                                <img src="/img/e.jpg" />
                            </li>

                          </ul>
                      </fieldset>
                    </div>

                    <div class="row user_details">
                      <a href="#" class="btn btn-primary btn-block">Report Escort</a>
                    </div>

                </section>

                <section class="col-md-6">
                    <div class="row user_details">
                      <fieldset>
                          <h5 class="details-header">User Details:</h5>
                          <div class="col-md-12 escort-list-details" style="padding:0px;">
                              <ul class="list-group">
                                  <li class="list-group-item"><span class="details-key">Name</span> : {{ $escort['user']['name'] }} </li>
                                  <li class="list-group-item"><span class="details-key">Username</span> : {{ $escort['user']['username'] }} </li>
                                  <li class="list-group-item"><span class="details-key">Email</span> : {{ $escort['user']['email'] }} </li>
                                  <li class="list-group-item"><span class="details-key">Phone Number</span> : {{ $escort['user']['phone'] }} </li>
                                  <li class="list-group-item"><span class="details-key">Account created: </span> : {{ Carbon\Carbon::parse($escort['user']['created_at'])->toDayDateTimeString() }} </li>
                                  <li class="list-group-item"><span class="details-key">Last seen</span> : {{ Carbon\Carbon::parse($escort['user']['updated_at'])->toDayDateTimeString() }} </li>
                                  <li class="list-group-item"><span class="details-key">Profile views: </span> : {{ $escort['escort']['views'] }} </li>
                              </ul>
                          </div>

                      </fieldset>
                    </div>

                    <div class="row user_details">
                      <fieldset>
                          <h5 class="details-header">Other Details:</h5>
                          <div class="col-md-4 escort-list-details">
                              <ul class="list-group">
                                  <li class="list-group-item"><span class="details-key">Gender</span> : {{ $escort['escort']['gender'] }} </li>
                                  <li class="list-group-item"><span class="details-key">Country</span> : {{ $escort['escort']['country'] }} </li>
                                  <li class="list-group-item"><span class="details-key">State</span> : {{ $escort['escort']['state'] }} </li>
                                  <li class="list-group-item"><span class="details-key">City</span> : {{ $escort['escort']['city'] }} </li>
                                  <li class="list-group-item"><span class="details-key">Language</span> : {{ $escort['escort']['language'] }} </li>
                              </ul>
                          </div>
                          <div class="col-md-4 escort-list-details">
                              <ul class="list-group">
                                  <li class="list-group-item"><span class="details-key">Date of birth</span> : {{ $escort['escort']['date_of_birth'] }} </li>
                                  <li class="list-group-item"><span class="details-key">Ethnicity</span> : {{ $escort['escort']['ethnicity'] }} </li>
                                  <li class="list-group-item"><span class="details-key">Bust Size</span> : {{ $escort['escort']['bust_size'] }} </li>
                                  <li class="list-group-item"><span class="details-key">Height</span> : {{ $escort['escort']['height'] }} </li>
                                  <li class="list-group-item"><span class="details-key">Sex Orientation</span> : {{ $escort['escort']['sex_orientation'] }} </li>
                              </ul>
                          </div>
                          <div class="col-md-4 escort-list-details">
                              <ul class="list-group">
                                  <li class="list-group-item"><span class="details-key">Weight</span> : {{ $escort['escort']['weight'] }} </li>
                                  <li class="list-group-item"><span class="details-key">Build</span> : {{ $escort['escort']['build'] }} </li>
                                  <li class="list-group-item"><span class="details-key">Looks</span> : {{ $escort['escort']['looks'] }} </li>
                                  <li class="list-group-item"><span class="details-key">Availability</span> : {{ $escort['escort']['availability'] }} </li>
                                  <li class="list-group-item"><span class="details-key">Smoker</span> : {{ $escort['escort']['smoker'] }} </li>
                              </ul>
                          </div>
                          <div class="col-md-12 escort-list-details">
                              <span class="details-key">About</span> <br>
                              <p>{{ $escort['escort']['about'] }}</p>

                          </div>

                      </fieldset>
                    </div>

                    <div class="row user_details">
                      <fieldset>
                          <h5 class="details-header">Services:</h5>
                          <?php
                            if (!empty($escort['services'])) {

                              unset($escort['services']['id']);
                              unset($escort['services']['escort_id']);
                              unset($escort['services']['created_at']);
                              unset($escort['services']['updated_at']);

                              foreach ($escort['services'] as $key => $services) {

                                if ($services) {
                              ?>
                                <a class="dashboard-services">{{$key}}</a>
                            <?php
                                }
                              }
                            }
                          ?>
                      </fieldset>
                    </div>

                    <div class="row user_details">
                      <fieldset>
                          <h5 class="details-header">Pricing:</h5>
                          <div class="col-md-6 escort-list-details">
                              <ul class="list-group">
                                  <li class="list-group-item"><span class="details-key">Incall</span> </li>
                                  <li class="list-group-item"><span class="details-key">1 hour</span> : {{ $escort['escort']['incall_1hr'] }} </li>
                                  <li class="list-group-item"><span class="details-key">24 hours</span> : {{ $escort['escort']['incall_1dy'] }} </li>
                                  <li class="list-group-item"><span class="details-key">Overnight</span> : {{ $escort['escort']['incall_overnight'] }} </li>
                                  <li class="list-group-item"><span class="details-key">1 week</span> : {{ $escort['escort']['incall_1wk'] }} </li>
                              </ul>
                          </div>
                          <div class="col-md-6 escort-list-details">
                              <ul class="list-group">
                                <ul class="list-group">
                                    <li class="list-group-item"><span class="details-key">Outcall</span> </li>
                                    <li class="list-group-item"><span class="details-key">1 hour</span> : {{ $escort['escort']['outcall_1hr'] }} </li>
                                    <li class="list-group-item"><span class="details-key">24 hours</span> : {{ $escort['escort']['outcall_1dy'] }} </li>
                                    <li class="list-group-item"><span class="details-key">Overnight</span> : {{ $escort['escort']['outcall_overnight'] }} </li>
                                    <li class="list-group-item"><span class="details-key">1 week</span> : {{ $escort['escort']['outcall_1wk'] }} </li>
                                </ul>
                              </ul>
                          </div>

                      </fieldset>
                    </div>

                    <div class="row user_details">
                      <fieldset>
                          <h5 class="details-header">Reviews:</h5>
                          @if(!($escort['review']))
                              <h5>No reviews yet for {{ $escort['user']['username'] }}. </h5>
                              <br>
                              <a href="" data-toggle="modal" data-target="#review-modal" class="add-review">Be the first to write a review</a>
                          @else
                              @foreach($escort['review'] as $review)

                                <div class="review-block">
                                    <h6 class="review-block-header">By: {{ $review['reviewer'] }} @ {{ Carbon\Carbon::parse($review['created_at'])->toDayDateTimeString() }}
                                    </h6>
                                    <p>
                                        {{ $review['message'] }}
                                    </p>
                                    <hr>

                                </div>

                              @endforeach
                          @endif

                      </fieldset>
                    </div>

                </section>

              </div>

          </div>
      </div>
    </div>
</div>
