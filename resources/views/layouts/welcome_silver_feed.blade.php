<div class="col-md-12 heading">
    <h4 class="landing-header">Silver Escorts</h4>
</div>

@if ($platinumEscorts === "No silver escort available right now")


@else

  @foreach($platinumEscorts as $platinumEscort)

  <div class="col-md-3 col-sm-6 col-xs-6 escorts-img-holder">
    <a href="escort/{{ $platinumEscort->user->username }}">
      <div class="sb-widget widget-register" style="background-image:url(img/escort/images/{{ $platinumEscort->escort->profile_image }}); background-position: center; background-repeat: no-repeat; background-size: cover; vertical-align: middle;">
        <span id="vip">P</span>
        <span id="video"></span>
        <div class="escort-info">
          <div class="escort-info-inner">
            <h4 class="escort-name">{{ $platinumEscort->user->username }}</h4>
            <p class="escort-location">{{ $platinumEscort->escort->city }} , {{ $platinumEscort->escort->state }}</p>
            @if( $platinumEscort->escort->verified == 1)
                <span class="verified pull-right">verified</span>
            @endif
          </div>
        </div>
      </div>
    </a>
  </div>

  <div class="col-md-12 text-center see-more-div">
      <a href="escorts/rank/platinum" class="btn btn-primary btn block">See More Platinum Escorts</a>
  </div>

  @endforeach

@endif
