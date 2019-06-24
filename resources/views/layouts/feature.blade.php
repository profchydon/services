<div class="feature-container">
  <div class="row">

    <h4 class="feature-header">Featured <span class="highlight">Escorts</span> </h4>
    <!-- <h4 class="feature-header">Fe<span class="highlight">atu</span>red<span class="highlight"> Esc</span>or<span class="highlight">ts</span></h4> -->

    <div id="partner-slide" class="owl-carousel">

      @if($features == NULL)


      @else

      <?php $path = "img/escort/images/" ?>

      @foreach($features as $feature)

        <?php $image_url = $path."{$feature[0]->profile_image}"; ?>

        <div class="item">
          <div class="row">
              <a href="/escort/{{ $feature[0]->username }}">
                <div class="escorts-img-holder" id="feature-escorts-img-holder">
                  <div class="sb-widget widget-register" id="feature-widget" style="background-image:url({{ asset($image_url) }}); background-position: center; background-repeat: no-repeat; background-size: cover; vertical-align: middle;">
                    @if ( $feature[0]->rank == "platinum")
                        <img src="{{ asset('img/exclusive-ribbon.png') }}" alt="" class="img-responsive feature-ribbon">
                    @elseif ( $feature[0]->rank == "gold")
                        <img src="{{ asset('img/exclusive-ribbon.png') }}" alt="" class="img-responsive feature-ribbon">
                    @elseif ( $feature[0]->rank == "silver")
                        <img src="{{ asset('img/exclusive-ribbon.png') }}" alt="" class="img-responsive feature-ribbon">
                    @elseif ( $feature[0]->rank == "regular")
                        <img src="{{ asset('img/exclusive-ribbon.png') }}" alt="" class="img-responsive feature-ribbon">
                    @endif

                    @if( $feature[0]->verified == 1)
                        <img src="{{ asset('img/verified.png') }}" alt="" class="img-responsive verified-icon pull-right" id="featured-verified-icon">
                    @endif

                    <!-- @if( $feature[0]->video)
                        <img src="{{ asset('img/video.png') }}" alt="" class="img-responsive video-icon">
                    @endif -->
                    <div class="escort-info">
                      <div class="escort-info-inner">
                        <h4 class="escort-name">{{ $feature[0]->name }}</h4>
                        <p class="escort-location">{{ $feature[0]->city }} , <span class="highlight"> {{ $feature[0]->state }}</span> </p>
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
