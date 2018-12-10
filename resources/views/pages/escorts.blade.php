<div class="container main-body">
    <div class="row">

      <div class="col-md-12">

          <div class="row">

              <div class="col-md-12 heading">
                  <h4 class="landing-header">Escorts near you</h4>
              </div>

              @foreach($escorts as $escort)

              <div class="col-md-2 col-sm-6 col-xs-6 escorts-img-holder" id="other_escorts">
                <a href="escort/{{ $escort['user']['username'] }}">
                  <div class="sb-widget widget-register" style="background-image:url(../img/{{$escort['escort']['profile_image']}}); background-position: center; background-repeat: no-repeat; background-size: cover; vertical-align: middle;">
                    @if( $escort['escort']['vip'] == 1)
                        <span id="vip">VIP</span>
                    @endif
                    <div class="escort-info">
                      <div class="escort-info-inner">
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

      </div>
    </div>
</div>
