<div class="col-md-12 heading">
    <h4 class="landing-header">Platinum Escorts</h4>
</div>

@if ($platinumEscorts === "No platinum escort available right now")


@else

  <?php $path = "img/escort/images/" ?>

  @foreach($platinumEscorts as $platinumEscort)

    <?php $image_url = $path."{$platinumEscort->escort->profile_image}"; ?>

    <div class="col-md-3 col-sm-6 col-xs-6 escorts-img-holder">
      <a href="escort/{{ $platinumEscort->user->username }}">
        <div class="sb-widget widget-register" style="background-image:url({{ asset($image_url) }}); background-position: center; background-repeat: no-repeat; background-size: cover; vertical-align: middle;">
          <img src="{{ asset('img/exclusive-ribbon.png') }}" alt="" class="img-responsive ribbon">
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
      <a href="escorts/platinum/all" class="btn btn-primary btn block">See More Platinum Escorts</a>
  </div>

@endif
