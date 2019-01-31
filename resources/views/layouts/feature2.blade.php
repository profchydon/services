<div class="container">
  <div class="row">

    <div id="partner-slide" class="owl-carousel">

      @if($features == NULL)
      @else

      @foreach($features as $feature)

        <div class="item">
          <div class="row">
              <a href="/escort/{{ $feature[0]['username'] }}">
                <div class="escorts-img-holder">
                  <div class="sb-widget widget-register" id="feature-widget" style="background-image:url(/img/escort/images/{{$feature[0]['profile_image']}}); background-position: center; background-repeat: no-repeat; background-size: cover; vertical-align: middle;">
                    @if ( $feature[0]['rank'] === "platinum")
                        <span id="vip" class="platinum-badge">P</span>
                    @elseif ( $feature[0]['rank'] === "gold")
                        <span id="vip" class="gold-badge">G</span>
                    @elseif ( $feature[0]['rank'] === "silver")
                        <span id="vip" class="silver-badge">S</span>
                    @elseif ( $feature[0]['rank'] === "regular")
                        <span id="vip" class="regular-badge">R</span>
                    @endif
                    <div class="escort-info">
                      <div class="escort-info-inner">
                        <h4 class="escort-name">{{ $feature[0]['name'] }}</h4>
                        <p class="escort-location">{{ $feature[0]['city'] }} , {{ $feature[0]['state'] }} </p>
                        <span class="verified pull-right">verified</span>
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
