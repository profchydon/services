<div class="container">
  <div class="row">

    <div id="partner-slide" class="owl-carousel">

      @if($features == NULL)
      @else

      <?php $path = "img/escort/images/" ?>

      @foreach($features as $feature)

        <?php
          $img = $feature[0]["profile_image"];
          $image_url = $path."{$img}";
        ?>

        <div class="item">
          <div class="row">
              <a href="/escort/{{ $feature[0]['username'] }}">
                <div class="escorts-img-holder" id="feature2-escorts-img-holder">
                  <div class="sb-widget widget-register" id="feature2-widget" style="background-image:url({{ asset($image_url) }}); background-position: center; background-repeat: no-repeat; background-size: cover; vertical-align: middle;">
                    @if ( $feature[0]['rank'] == "platinum")
                      <div class="badges-desktop-wrapper-right">
                        <div class="badge-vip">
                          <span>vip</span>
                        </div>
                      </div>
                    @elseif ( $feature[0]['rank'] == "gold")
                      <div class="badges-desktop-wrapper-right">
                        <div class="badge-vip">
                          <span>vip</span>
                        </div>
                      </div>
                    @elseif ( $feature[0]['rank'] == "silver")
                        {{-- <img src="{{ asset('img/exclusive-ribbon.png') }}" alt="" class="img-responsive feature-ribbon"> --}}
                    @elseif ( $feature[0]['rank'] == "regular")
                        {{-- <img src="{{ asset('img/exclusive-ribbon.png') }}" alt="" class="img-responsive feature-ribbon"> --}}
                    @endif

                    @if( $feature[0]['verified'] == 1)
                        <img src="{{ asset('img/verified.png') }}" alt="" class="img-responsive verified-icon pull-right" id="featured2-verified-icon">
                    @endif
              
                    <div class="escort-info">
                      <div class="escort-info-inner">
                        <h4 class="escort-name">{{ $feature[0]['name'] }}</h4>
                        <p class="escort-location">{{ $feature[0]['city'] }} , <span class="highlight"> {{ $feature[0]['state'] }}</span> </p>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
          </div>
        </div>

      @endforeach

      @endif
    </div>

  </div>
</div>
