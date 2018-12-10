<div class="container main-body">
    <div class="row">

      <div class="col-md-12">
          <div class="row">

              <div class="col-md-12 heading">
                  <h4 class="landing-header">VIP Escorts</h4>
              </div>

              <?php
                  $vipEscorts = (object)$vipEscorts;
              ?>

              @foreach($vipEscorts as $vipEscort)

              <div class="col-md-2 col-sm-6 col-xs-6 escorts-img-holder" id="vip_escorts">
                <a href="/escort/{{ $vipEscort['user']['username'] }}">
                  <div class="sb-widget widget-register" style="background-image:url(../img/{{ $vipEscort['escort']['profile_image'] }}); background-position: center; background-repeat: no-repeat; background-size: cover; vertical-align: middle;">
                    <span id="vip">VIP</span>
                    <div class="escort-info">
                      <div class="escort-info-inner">
                        <h4 class="escort-name">{{ $vipEscort['user']['username'] }}</h4>
                        <p class="escort-location">{{ $vipEscort['escort']['city'] }} , {{ $vipEscort['escort']['state'] }}</p>
                        @if( $vipEscort['escort']['verified'] == 1)
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
