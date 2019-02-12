<div class="col-md-12 heading">
    <h4 class="landing-header">Gold Escorts</h4>
</div>

@if ($platinumEscorts === "No gold escort available right now")

<div class="col-md-3 col-sm-6 col-xs-6 escorts-img-holder">
    <h5>No Gold Escort at the momment.</h5>
</div>

@else

  @foreach($platinumEscorts as $platinumEscort)

  <div class="col-md-3 col-sm-6 col-xs-6 escorts-img-holder">
    <a href="escort/{{ $platinumEscort->user->username }}">
      <div class="sb-widget widget-register" style="background-image:url(img/escort/images/{{ $platinumEscort->escort->profile_image }}); background-position: center; background-repeat: no-repeat; background-size: cover; vertical-align: middle;">
        <img src="/img/exclusive-ribbon.png" alt="" class="img-responsive ribbon">
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

  @endforeach

  <div class="col-md-12 text-center see-more-div">
      <a href="escorts/gold/all" class="btn btn-primary btn block">See More Platinum Escorts</a>
  </div>

@endif
