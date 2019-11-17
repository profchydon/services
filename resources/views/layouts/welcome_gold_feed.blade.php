@if ($goldEscorts == "No gold escort available right now")


@else

  <div class="col-md-12 heading">
      <h4 class="landing-header">Gold <span class="highlight">Escorts</span></h4>
  </div>

  <?php $path = "img/escort/images/" ?>

  @foreach($goldEscorts as $goldEscort)

    <?php $image_url = $path."{$goldEscort->profile_image}"; ?>

    <div class="col-md-2 col-sm-6 col-xs-6 escorts-img-holder">
      <a href="escort/{{ $goldEscort->user->username }}">
        <div class="sb-widget widget-register" style="background-image:url({{ asset($image_url) }}); background-position: center; background-repeat: no-repeat; background-size: cover; vertical-align: middle;">
          <div class="badges-desktop-wrapper-right">
            <div class="badge-vip">
              <span>vip</span>
            </div>
          </div>
          @if( $goldEscort->escort->verified == 1)
              <img src="{{ asset('img/verified.png') }}" alt="" class="img-responsive verified-icon pull-right">
          @endif
          @if( $goldEscort->video)
              <img src="{{ asset('img/video2.png') }}" alt="" class="img-responsive video-icon">
          @endif
          <span id="video"></span>
          <div class="escort-info">
            <div class="escort-info-inner">
              <h4 class="escort-name">{{ $goldEscort->user->name }}</h4>
              <p class="escort-location">{{ $goldEscort->escort->city }} , <span class="highlight"> {{ $goldEscort->escort->state }}</span></p>
            </div>
          </div>
        </div>
      </a>
    </div>

  @endforeach

  <div class="col-md-12 text-center see-more-div">
      <a href="escorts/gold/all" class="btn btn-primary btn block see-more-button">See More Gold Escorts</a>
  </div>

@endif
