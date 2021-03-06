@if ($silverEscorts == "No silver escort available right now")


@else
<div class="col-md-12 heading">
    <h4 class="landing-header"> <span class="highlight">Silver </span>Escorts</h4>
</div>

  <?php $path = "img/escort/images/" ?>

  @foreach($silverEscorts as $silverEscort)

    <?php $image_url = $path."{$silverEscort->profile_image}"; ?>

    <div class="col-md-2 col-sm-6 col-xs-6 escorts-img-holder">
      <a href="escort/{{ $silverEscort->user->username }}">
        <div class="sb-widget widget-register" style="background-image:url({{ asset($image_url) }}); background-position: center; background-repeat: no-repeat; background-size: cover; vertical-align: middle;">
          {{-- <img src="{{ asset('img/exclusive-ribbon.png') }}" alt="" class="img-responsive ribbon"> --}}
          @if( $silverEscort->escort->verified == 1)
              <img src="{{ asset('img/verified.png') }}" alt="" class="img-responsive verified-icon pull-right">
          @endif
          @if( $silverEscort->video)
              <img src="{{ asset('img/video2.png') }}" alt="" class="img-responsive video-icon">
          @endif
          <span id="video"></span>
          <div class="escort-info">
            <div class="escort-info-inner">
              <h4 class="escort-name">{{ $silverEscort->user->name }}</h4>
              <p class="escort-location">{{ $silverEscort->escort->city }} , <span class="highlight"> {{ $silverEscort->escort->state }}</span></p>
            </div>
          </div>
        </div>
      </a>
    </div>

  @endforeach

  <div class="col-md-12 text-center see-more-div">
      <a href="escorts/silver/all" class="btn btn-primary btn block see-more-button">See More Silver Escorts</a>
  </div>

@endif
