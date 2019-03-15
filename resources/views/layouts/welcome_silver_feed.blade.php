<div class="col-md-12 heading">
    <h4 class="landing-header">Silver Escorts</h4>
</div>

@if ($silverEscorts === "No silver escort available right now")


@else

  <?php $path = "img/escort/images/" ?>

  @foreach($silverEscorts as $silverEscort)

    <?php $image_url = $path."{$silverEscort->escort->profile_image}"; ?>

    <div class="col-md-2 col-sm-6 col-xs-6 escorts-img-holder">
      <a href="escort/{{ $silverEscort->user->username }}">
        <div class="sb-widget widget-register" style="background-image:url({{ asset($image_url) }}); background-position: center; background-repeat: no-repeat; background-size: cover; vertical-align: middle;">
          <img src="{{ asset('img/exclusive-ribbon.png') }}" alt="" class="img-responsive ribbon">
          @if( $silverEscort->escort->verified == 1)
              <img src="{{ asset('img/verified.png') }}" alt="" class="img-responsive verified-icon pull-right">
          @endif
          <span id="video"></span>
          <div class="escort-info">
            <div class="escort-info-inner">
              <h4 class="escort-name">{{ $silverEscort->user->username }}</h4>
              <p class="escort-location">{{ $silverEscort->escort->city }} , {{ $silverEscort->escort->state }}</p>
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
