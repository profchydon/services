<?php
  $current_year = date('Y');
  $dob = (int)$escort['escort']['year_of_birth'];
  $age = $current_year - $dob;
  $phone = $escort['user']['phone'];
  $phone = (int)$phone;
  $phone = "234".$phone;
  $path = "img/escort/images/";
  $video_path = "video/escort/";
  $img = $escort['images']['image_1'];
  $profile_image = $path."{$img}";
  $profile_page = "http://xcort.africausaforums.com/escort/".$escort['user']['username'];
  $text = $profile_page."\n \n Hi,%20I%20just%20viewed%20your%20profile%20on%20xcort.ng%20and%20i'm%20interested%20in%20meeting%20you";
?>

<h3 class="escort-profile-greeting-header">Hi, I'm <span class="highlight">{{ $escort['user']['name'] }}</span> and i'm <span class="highlight">{{ $age }}yrs old</span></h3>
<div class="container main-body" id="escort-main-body">

    <div class="row">

      <div class="col-md-3 profile-image-section">

        <img src="{{ asset($profile_image) }}" class="img-responsive escort-page-profile-image"/>

        <div class="row contact-me-section">

            <div class="col-md-6">
              <a target="_blank" href="tel:+{{ $phone }}" class="call-me"> <i class="fa fa-phone" aria-hidden="true"></i> Call me!</a>
            </div>

            <div class="col-md-6">
              <a target="_blank" href="https://wa.me/{{ $phone }}?text={{ $text }}" class="chat-with-me"> <i class="fab fa-whatsapp" aria-hidden="true"></i> Chat with me</a>
            </div>

            <div class="col-md-12 text-center">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
            </div>

        </div>

        <div class="row contact-me-section hidden-sm hidden-xs">
            @if($escort['escort']['rank'] == "platinum" || $escort['escort']['rank'] == "gold")
              <a class="call-me" id="gift-me"> <i class="fa fa-gift" aria-hidden="true"></i> Gift me Cash</a>
            @endif
            @if($escort['escort']['rank'] == "platinum")
              <a class="call-me" id="gift-me"> <i class="fa fa-gift" aria-hidden="true"></i> Gift me xcort coins</a>
              <a class="call-me" id="gift-me"> <i class="fa fa-gift" aria-hidden="true"></i> Sponsor my profile</a>
            @endif
            @if($escort['escort']['rank'] == "regular" || $escort['escort']['rank'] == "silver")
              <button class="btn btn-primary btn-block call-me" id="disabled" disabled title="This feature is only enabled for Gold and Platinum Escorts"> 
                  <i class="fa fa-gift" aria-hidden="true"></i> Gift me Cash
              </button>
              <button class="btn btn-primary btn-block call-me" id="disabled" disabled disabled title="This feature is only enabled for Platinum Escorts"> <i class="fa fa-gift" aria-hidden="true"></i> Gift me xcort coins</button>
              <button class="btn btn-primary btn-block call-me" id="disabled" disabled disabled title="This feature is only enabled for Platinum Escorts"> <i class="fa fa-gift" aria-hidden="true"></i> Sponsor my profile</button>
            @endif
            
        </div>

      </div>

      <div class="col-md-9" class="escort-content-details">

        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

            <div class="panel panel-default">
              <div class="panel-heading panel-clr" role="tab" id="headingOne">
                <div class="panel-title">
                    <a href="#image" data-toggle="collapse" data-parent="#accordion" class="details-header"><i class="fa fa-plus"></i>My Images</a>
                </div>
              </div>
              <div class="panel-collapse collapse in" role="tabpanel" id="image" aria-labelledby="headingOne">
                  <div class="panel-body">
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
                                $image = $path."{$images}";
                        ?>
                        <a href="{{ asset($image) }}">
                            <img src="{{ asset($image) }}" />
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
                  </div>
               </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading panel-clr" role="tab" id="headingTwo">
                <div class="panel-title">
                    <a href="#video" data-toggle="collapse" data-parent="#accordion" class="details-header"><i class="fa fa-plus"></i>My Videos</a>
                </div>
              </div>
              <div class="panel-collapse collapse" role="tabpanel" id="video" aria-labelledby="headingTwo">
                  <div class="panel-body">
                    <fieldset>

                      @if(!($escort['escort']) == NULL)

                          <div id="video-animated-thumbnails">

                            <?php
                              if (!empty($escort['videos'])) {

                                unset($escort['videos']['id']);
                                unset($escort['videos']['user_id']);
                                unset($escort['videos']['escort_id']);
                                unset($escort['videos']['created_at']);
                                unset($escort['videos']['updated_at']);

                              $i = 1;

                              foreach ($escort['videos'] as $key => $video) {
                                  if ($video !== NULL) {
                                  $videoCount = "video".$i;
                                  $this_video = $video_path."{$video}";
                              ?>
                              <!-- Hidden video div -->
                              <div style="display:none;" id="{{ $videoCount }}">
                                  <video class="lg-video-object lg-html5 video-js vjs-default-skin" controls preload="none" playsinline loop>
                                      <source src="{{ asset($this_video) }}" type="video/mp4">
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
                              foreach ($escort['videos'] as $key => $video) {
                                  if ($video !== NULL) {
                                  $videoCount = "video".$i;
                              ?>
                              <!-- Hidden video div -->
                              <!-- data-src should not be provided when you use html5 videos -->
                                <li data-poster="{{ asset('img/e.jpg') }}" data-sub-html="{{ $video }}" data-html="#{{ $videoCount }}" >
                                  <video id="video-js-small" class="sm-video-object sm-html5 video-js vjs-default-skin" controls preload="none" playsinline autoplay muted>
                                      <source src="{{ asset($this_video) }}" type="video/mp4">
                                       Your browser does not support HTML5 video.
                                  </video>
                                </li>

                              <?php
                                  }
                                  $i++;
                              }
                              ?>
                              </ul>

                            <?php
                              }else {
                            ?>
                              <h5 style="text-align:center; color: #fff;">{{ $escort['user']['name'] }} has no Videos yet</h5>
                            <?php
                                // code...
                              }
                            ?>
                        @else

                        @endif


                      </div>

                    </fieldset>
                  </div>
               </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading panel-clr" role="tab" id="headingThree">
                <div class="panel-title">
                    <a href="#details" data-toggle="collapse" data-parent="#accordion" class="details-header"><i class="fa fa-plus"></i>My Details</a>
                </div>
              </div>
              <div class="panel-collapse collapse" id="details" aria-labelledby="headingThree">
                  <div class="panel-body">
                    <fieldset>
                        <div class="col-md-12 escort-list-details" style="padding:0px;">
                            <ul class="list-group">
                                <!-- <li class="list-group-item"><span class="details-key">Name</span> : {{ $escort['user']['name'] }} </li>
                                <li class="list-group-item"><span class="details-key">Username</span> : {{ $escort['user']['username'] }} </li> -->
                                <li class="list-group-item"><span class="details-key">Email</span> : {{ $escort['user']['email'] }} </li>
                                <li class="list-group-item"><span class="details-key">Phone Number</span> : {{ $escort['user']['phone'] }} </li>
                                <!-- <li class="list-group-item"><span class="details-key">Account created: </span> : {{ Carbon\Carbon::parse($escort['user']['created_at'])->toDayDateTimeString() }} </li> -->
                                <li class="list-group-item"><span class="details-key">Last seen</span> : {{ Carbon\Carbon::parse($escort['user']['updated_at'])->toDayDateTimeString() }} </li>
                                <li class="list-group-item"><span class="details-key">Profile views: </span> : {{ $escort['escort']['views'] }} </li>
                            </ul>
                        </div>

                    </fieldset>
                  </div>
               </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading panel-clr" role="tab" id="headingFour">
                <div class="panel-title">
                    <a href="#about" data-toggle="collapse" data-parent="#accordion" class="details-header"><i class="fa fa-plus"></i>About Me</a>
                </div>
              </div>
              <div class="panel-collapse collapse" id="about" aria-labelledby="headingFour">
                  <div class="panel-body">
                      <p class="about-p">{{ $escort['escort']['about'] }}</p>
                  </div>
               </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading panel-clr" role="tab" id="headingFive">
                <div class="panel-title">
                    <a href="#pricing" data-toggle="collapse" data-parent="#accordion" class="details-header"><i class="fa fa-plus"></i>My Rates</a>
                </div>
              </div>
              <div class="panel-collapse collapse" id="pricing" aria-labelledby="headingFive">
                  <div class="panel-body">
                    <fieldset>
                        <div class="col-md-4 escort-list-details">
                            <ul class="list-group">
                                <li class="list-group-item"><span class="details-key">Incall</span> </li>
                                <li class="list-group-item"><span class="details-key">1 hour</span> : {{ $escort['escort']['incall_1hr'] }} </li>
                                <li class="list-group-item"><span class="details-key">24 hours</span> : {{ $escort['escort']['incall_1dy'] }}
                                <li class="list-group-item"><span class="details-key">Overnight</span> : {{ $escort['escort']['incall_overnight'] }} </li>
                                <li class="list-group-item"><span class="details-key">1 week</span> : {{ $escort['escort']['incall_1wk'] }} </li>
                            </ul>
                        </div>
                        <div class="col-md-4 escort-list-details">
                            <ul class="list-group">
                              <ul class="list-group">
                                  <li class="list-group-item"><span class="details-key">Outcall</span> </li>
                                  <li class="list-group-item"><span class="details-key">1 hour</span> : {{ $escort['escort']['outcall_1hr'] }} </li>
                                  <li class="list-group-item"><span class="details-key">24 hours</span> : {{ $escort['escort']['outcall_1dy'] }}
                                  <li class="list-group-item"><span class="details-key">Overnight</span> : {{ $escort['escort']['outcall_overnight'] }} </li>
                                  <li class="list-group-item"><span class="details-key">1 week</span> : {{ $escort['escort']['outcall_1wk'] }} </li>
                              </ul>
                            </ul>
                        </div>
                        <div class="col-md-4 escort-list-details">
                            <ul class="list-group">
                              <ul class="list-group">
                                  <li class="list-group-item"><span class="details-key">Remote Services</span> </li>
                                  <li class="list-group-item"><span class="details-key">Video Sex</span> : {{ $escort['escort']['video_sex'] }} </li>
                                  <li class="list-group-item"><span class="details-key">Phone Sex</span> : {{ $escort['escort']['phone_sex'] }}
                                  <li class="list-group-item"><span class="details-key">Sex Chat</span> : {{ $escort['escort']['sex_chat'] }} </li>
                                  <li class="list-group-item"><span class="details-key">Nude</span> : {{ $escort['escort']['nudes'] }} </li>
                              </ul>
                            </ul>
                        </div>

                    </fieldset>
                  </div>
               </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading panel-clr" role="tab" id="headingSix">
                <div class="panel-title">
                    <a href="#other-details" data-toggle="collapse" data-parent="#accordion" class="details-header"><i class="fa fa-plus"></i>Other Details</a>
                </div>
              </div>
              <div class="panel-collapse collapse" id="other-details" aria-labelledby="headingSix">
                  <div class="panel-body">
                    <fieldset>

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
                                <li class="list-group-item"><span class="details-key">Age</span> : {{ $age }} </li>
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


                    </fieldset>
                  </div>
               </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading panel-clr" role="tab" id="headingSeven">
                <div class="panel-title">
                    <a href="#services" data-toggle="collapse" data-parent="#accordion" class="details-header"><i class="fa fa-plus"></i>My Services</a>
                </div>
              </div>
              <div class="panel-collapse collapse" id="services" aria-labelledby="headingSeven">
                  <div class="panel-body">
                    <fieldset>
                        <?php
                          if (!empty($escort['services'])) {

                            unset($escort['services']['id']);
                            unset($escort['services']['escort_id']);
                            unset($escort['services']['created_at']);
                            unset($escort['services']['updated_at']);
                        ?>

                        <ul class="list-group">

                          @foreach ($escort['services'] as $key => $services)

                            @if ($services)
                            <div class="col-md-6 col-sm-6 col-xs-6 service-register-div">
                              <li class="list-group-item"><span class="service-list">{{$key}} </li>
                            </div>

                            @endif

                          @endforeach

                        </ul>

                        <?php
                          }
                        ?>
                    </fieldset>
                  </div>
               </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading panel-clr" role="tab" id="headingEight">
                <div class="panel-title">
                    <a href="#review" data-toggle="collapse" data-parent="#accordion" class="details-header"><i class="fa fa-plus"></i>My Reviews</a>
                </div>
              </div>
              <div class="panel-collapse collapse" id="review" aria-labelledby="headingEight">
                  <div class="panel-body">
                    <fieldset>

                        @if(!($escort['review']))
                            <h5 style="text-align:center; color: #fff;">{{ $escort['user']['name'] }} has no reviews yet</h5>
                            <br>
                            <a href="" data-toggle="modal" data-target="#review-modal" class="btn btn-primary add-review" style="color:#fff;">Be the first to write a review</a>
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
                            <a href="" data-toggle="modal" data-target="#review-modal" class="btn btn-primary add-review" style="color:#fff;">Add review</a>
                        @endif

                    </fieldset>
                  </div>
               </div>
            </div>

        </div>

      </div>

    </div>

    <div class="contact-me-section hidden-md hidden-lg">
      <a class="call-me" id="gift-me"> <i class="fa fa-gift" aria-hidden="true"></i> Send me a gift!</a>
      <a class="call-me" id="gift-me"> <i class="fa fa-gift" aria-hidden="true"></i> Sponsor my profile</a>
    </div>

</div>
