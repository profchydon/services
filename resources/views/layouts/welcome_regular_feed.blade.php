<div class="col-md-12 heading">
    <h4 class="landing-header">Other Escorts near you</h4>
</div>




@if ($escorts === "No escort available right now")


@else

    @foreach($escorts as $escort)

    <div class="col-md-3 col-sm-6 col-xs-6 escorts-img-holder">
      <a href="escort/{{ $escort->user->username }}">
        <div class="sb-widget widget-register" style="background-image:url(img/escort/images/{{ $escort->escort->profile_image }}); background-position: center; background-repeat: no-repeat; background-size: cover; vertical-align: middle;">
          @if ( $escort->escort->rank === "platinum")
              <span id="vip" class="platinum-badge">P</span>
          @elseif ( $escort->escort->rank === "gold")
              <span id="vip" class="gold-badge">G</span>
          @elseif ( $escort->escort->rank === "silver")
              <span id="vip" class="silver-badge">S</span>
          @elseif ( $escort->escort->rank === "regular")
              <span id="vip" class="regular-badge">R</span>
          @endif

          <div class="escort-info">
            <div class="escort-info-inner">
              <h4 class="escort-name">{{ $escort->user->username }}</h4>
              <p class="escort-location">{{ $escort->escort->city }} , {{ $escort->escort->state }}</p>
              @if( $escort->escort->verified == 1)
                  <span class="verified pull-right">verified</span>
              @endif
            </div>
          </div>
        </div>
      </a>
    </div>

    @endforeach

    <div class="col-md-12 text-center see-more-div">
        <a href="escorts" class="btn btn-primary btn block">See More</a>
    </div>

@endif
