

@if ($escorts == "No escort available right now")


@else

<div class="col-md-12 heading">
    <h4 class="landing-header">New <span class="highlight">Escorts</span></h4>
</div>
    <?php $path = "img/escort/images/" ?>

    @foreach($escorts as $escort)

    <?php $image_url = $path."{$escort->profile_image}"; ?>

    <div class="col-md-2 col-sm-6 col-xs-6 escorts-img-holder">
      <a href="escort/{{ $escort->user->username }}">
        <div class="sb-widget widget-register" style="background-image:url({{ asset($image_url) }}); background-position: center; background-repeat: no-repeat; background-size: cover; vertical-align: middle;">
          
          @if ( $escort->escort->rank == "platinum")
              {{-- <img src="{{ asset('img/exclusive-ribbon.png') }}" alt="" class="img-responsive ribbon"> --}}
              <div class="badges-desktop-wrapper-right">
                <div class="badge-vip">
                  <span>vip</span>
                </div>
              </div>
          @elseif ( $escort->escort->rank == "gold")
              {{-- <img src="/img/exclusive-ribbon.png" alt="" class="img-responsive ribbon"> --}}
              <div class="badges-desktop-wrapper-right">
                <div class="badge-vip">
                  <span>vip</span>
                </div>
              </div>
          @elseif ( $escort->escort->rank == "silver")
              {{-- <img src="/img/exclusive-ribbon.png" alt="" class="img-responsive ribbon"> --}}
          @elseif ( $escort->escort->rank == "regular")
              {{-- <img src="/img/exclusive-ribbon.png" alt="" class="img-responsive ribbon"> --}}
          @endif

          @if( $escort->escort->verified == 1)
              <img src="{{ asset('img/verified.png') }}" alt="" class="img-responsive verified-icon pull-right">
          @endif

          @if( $escort->video)
              <img src="{{ asset('img/video2.png') }}" alt="" class="img-responsive video-icon">
          @endif

          <div class="escort-info">
            <div class="escort-info-inner">
              <h4 class="escort-name">{{ $escort->user->name }}</h4>
              <p class="escort-location">{{ $escort->escort->city }} , <span class="highlight"> {{ $escort->escort->state }}</span></p>

            </div>
          </div>
        </div>
      </a>
    </div>

    @endforeach

    <div class="col-md-12 text-center see-more-div">
        <a href="escorts" class="btn btn-primary btn block see-more-button">See More Escorts</a>
    </div>

@endif
