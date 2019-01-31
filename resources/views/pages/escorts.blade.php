<div class="container main-body">
    <div class="row">

      <div class="col-md-12">

          <div class="row">

              <div class="col-md-12 heading">
                  <h4 class="landing-header">Escorts near you</h4>
              </div>

              @foreach($escorts as $escort)

              <div class="col-md-2 col-sm-6 col-xs-6 escorts-img-holder" id="other_escorts">
                <a href="/escort/{{ $escort['user']['username'] }}">
                  <div class="sb-widget widget-register" style="background-image:url(/img/escort/images/{{$escort['escort']['profile_image']}}); background-position: center; background-repeat: no-repeat; background-size: cover; vertical-align: middle;" id="other_escorts_inner">
                    @if ( $escort['escort']['rank'] === "platinum")
                        <span id="other_info_vip" class="platinum-badge">P</span>
                    @elseif ( $escort['escort']['rank'] === "gold")
                        <span id="other_info_vip" class="gold-badge">G</span>
                    @elseif ( $escort['escort']['rank'] === "silver")
                        <span id="other_info_vip" class="silver-badge">S</span>
                    @elseif ( $escort['escort']['rank'] === "regular")
                        <span id="other_info_vip" class="regular-badge">R</span>
                    @endif
                    <div class="escort-info" id="other_escorts_info">
                      <div class="escort-info-inner" id="other_escorts_info_inner">
                        <h4 class="escort-name">{{ $escort['user']['username'] }}</h4>
                        <p class="escort-location">{{ $escort['escort']['city'] }} , {{ $escort['escort']['state'] }}</p>
                        @if( $escort['escort']['verified'] == 1)
                            <span class="verified pull-right">verified</span>
                        @endif
                      </div>
                    </div>
                  </div>
                </a>
              </div>

              @endforeach

          </div>

          <div class="row text-center">
              {{ $escorts->links() }}
          </div>

      </div>
    </div>
</div>
