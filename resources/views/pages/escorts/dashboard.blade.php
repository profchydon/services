<?php

  $path = "img/escort/images/";
  $video_path = "video/escort/";

?>
<div class="all-wrapper with-side-panel solid-bg-all">

  <div class="layout-w">

    @include('layouts.sidebar')

    <div class="container-fluid">

        @include('layouts.nav')

        <div class="row inner-row-content">

            <section class="col-md-12">

                @include('layouts._unverified')


                <div class="row user_details">
                    <fieldset>

                      <div class="row">
                        <div class="col-md-9 col-sm-6 col-xs-6" id="user-details">
                            <h5 class="details-header">User Details: </h5>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-6" id="edit-details">
                            <a data-toggle="modal" data-target="#user-edit" class="btn btn-primary btn-account pull-right">Edit</a>
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
                        <div class="col-md-9 col-sm-6 col-xs-6" id="user-details">
                            <h5 class="details-header">Other Details: </h5>
                        </div>
                        @if(($details['escort']) == NULL)
                        <div class="col-md-3 col-sm-6 col-xs-6" id="edit-details">
                            <a data-toggle="modal" data-target="#escorts-register" class="btn btn-primary btn-account pull-right">Add Escort details</a>
                        </div>
                        @elseif(!($details['escort']) == NULL)
                        <div class="col-md-3 col-sm-6 col-xs-6" id="edit-details">
                            <a data-toggle="modal" data-target="#escorts-edit" class="btn btn-primary btn-account pull-right">Edit Escort details</a>
                        </div>
                        @endif
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
                        <div class="col-md-9 col-sm-6 col-xs-6" id="user-details">
                            <h5 class="details-header">Services: </h5>
                        </div>
                        @if(!($details['escort']) == NULL)
                        <div class="col-md-3 col-sm-6 col-xs-6" id="edit-details">
                            @if(empty($details['services']))
                                <a data-toggle="modal" data-target="#services-register" class="btn btn-primary btn-account pull-right">Add Services</a>
                            @else
                                <a data-toggle="modal" data-target="#services-update" class="btn btn-primary btn-account pull-right">Edit Services</a>
                            @endif
                        </div>
                        @endif

                      </div>

                        @if(!($details['escort']) == NULL)
                          <?php
                            if (!empty($details['services'])) {

                              unset($details['services']['id']);
                              unset($details['services']['escort_id']);
                              unset($details['services']['created_at']);
                              unset($details['services']['updated_at']);
                            ?>

                              <ul class="list-group">

                                @foreach ($details['services'] as $key => $services)

                                  @if ($services)
                                  <div class="col-md-4 col-sm-4 col-xs-4 service-register-div">
                                    <li class="list-group-item"><span class="service-list">{{$key}} </li>
                                  </div>

                                  @endif

                                @endforeach

                              </ul>

                            <?php
                            }
                          ?>
                          @else
                              <h5>Seems you have not registered your escort details</h5>
                          @endif



                    </fieldset>
                </div>

                <div class="row user_details">
                    <fieldset>
                      <div class="row">
                        <div class="col-md-9 col-sm-6 col-xs-6" id="user-details">
                            <h5 class="details-header">Pricing: </h5>
                        </div>
                        @if(!($details['escort']) == NULL)
                        <div class="col-md-3 col-sm-6 col-xs-6" id="edit-details">
                            <a data-toggle="modal" data-target="#price-update" class="btn btn-primary btn-account pull-right">Edit Pricing</a>
                        </div>
                        @endif

                      </div>

                      @if(!($details['escort']) == NULL)
                            <div class="col-md-4 escort-list-details">
                                <ul class="list-group">
                                    <li class="list-group-item"><span class="details-key">Incall</span> </li>
                                    <li class="list-group-item"><span class="details-key">1 hour</span> : {{ $details['escort']['incall_1hr'] }} </li>
                                    <li class="list-group-item"><span class="details-key">24 hours</span> : {{ $details['escort']['incall_1dy'] }}
                                    <li class="list-group-item"><span class="details-key">Overnight</span> : {{ $details['escort']['incall_overnight'] }} </li>
                                    <li class="list-group-item"><span class="details-key">1 week</span> : {{ $details['escort']['incall_1wk'] }} </li>
                                </ul>
                            </div>
                            <div class="col-md-4 escort-list-details">
                                <ul class="list-group">
                                  <ul class="list-group">
                                      <li class="list-group-item"><span class="details-key">Outcall</span> </li>
                                      <li class="list-group-item"><span class="details-key">1 hour</span> : {{ $details['escort']['outcall_1hr'] }} </li>
                                      <li class="list-group-item"><span class="details-key">24 hours</span> : {{ $details['escort']['outcall_1dy'] }}
                                      <li class="list-group-item"><span class="details-key">Overnight</span> : {{ $details['escort']['outcall_overnight'] }} </li>
                                      <li class="list-group-item"><span class="details-key">1 week</span> : {{ $details['escort']['outcall_1wk'] }} </li>
                                  </ul>
                                </ul>
                            </div>
                            <div class="col-md-4 escort-list-details">
                                <ul class="list-group">
                                  <ul class="list-group">
                                      <li class="list-group-item"><span class="details-key">Remote Services</span> </li>
                                      <li class="list-group-item"><span class="details-key">Video sex</span> : {{ $details['escort']['video_sex'] }} </li>
                                      <li class="list-group-item"><span class="details-key">Phone Sex</span> : {{ $details['escort']['phone_sex'] }} </li>
                                      <li class="list-group-item"><span class="details-key">Sex Chat</span> : {{ $details['escort']['sex_chat'] }} </li>
                                      <li class="list-group-item"><span class="details-key">Nude</span> : {{ $details['escort']['nudes'] }} </li>
                                  </ul>
                                </ul>
                            </div>
                          @else
                              <h5>Seems you have not registered your escort details</h5>
                          @endif

                    </fieldset>
                </div>

                <div class="row user_details">

                    <fieldset>

                      <div class="row">
                        <div class="col-md-9 col-sm-6 col-xs-6" id="user-details">
                            <h5 class="details-header">Images: </h5>
                        </div>
                        @if(!($details['escort']) == NULL)
                        <div class="col-md-3 col-sm-6 col-xs-6" id="edit-details">
                            <a href="/imageview" class="btn btn-primary btn-account pull-right">Click to add images</a>
                        </div>
                        @endif

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
                                                $image = $path."{$images}";
                              ?>
                                  <a href="{{ asset($image) }}">
                                      <img src="{{ asset($image) }}" />
                                  </a>
                              <?php
                                              }
                                          }
                                    }
                               ?>
                          </div>

                      @else
                          <h5>Seems you have not registered your escort details</h5>
                      @endif

                    </fieldset>

                </div>

                <div class="row user_details">

                    <fieldset>

                      <div class="row">
                        <div class="col-md-9 col-sm-6 col-xs-6" id="user-details">
                            <h5 class="details-header">Videos: </h5>
                        </div>
                        @if(!($details['escort']) == NULL)
                        <div class="col-md-3 col-sm-6 col-xs-6" id="edit-details">
                            <a href="/videoview" class="btn btn-primary btn-account pull-right">Click to add videos</a>
                        </div>
                        @endif

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
                                            $this_video = $video_path."{$video}";
                              ?>

                                  <div style="display:none;" id="{{ $videoCount }}">
                                      <video class="lg-video-object lg-html5 video-js vjs-default-skin" controls preload="none">
                                          <source src="{{ asset($this_video) }}" type="video/mp4">
                                           Your browser does not support HTML5 video.
                                      </video>
                                  </div>
                              <?php
                                        }

                                        $i++;

                                    }

                                  }

                               ?>

                               <ul id="video-gallery">

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
                                      <li data-poster="{{ asset('img/e.jpg') }}" data-sub-html="{{ $video }}" data-html="#{{ $videoCount }}" >
                                          <img src="{{ asset('img/e.jpg') }}" />
                                      </li>
                                  <?php
                                            }

                                            $i++;
                                        }

                                      }


                                   ?>

                               </ul>

                          </div>

                      @else
                          <h5>Seems you have not registered your escort details</h5>
                      @endif
                    </fieldset>

                </div>

            </section>

        </div>

    </div>

  </div>

</div>
