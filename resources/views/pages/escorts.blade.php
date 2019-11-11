<?php $path = "img/escort/images/" ?>

<div class="container main-body" id="escorts-main-body">
    <div class="row">

      <div class="col-md-12 heading">
          <h4 class="landing-header">{{ $search_phrase }}</h4>
      </div>

      <div class="col-md-12">

        @if($search_hit)

        <div class="row">

            @foreach($escorts as $escort)

            <?php $image_url = $path."{$escort['profile_image']}"; ?>

            <div class="col-md-2 col-sm-6 col-xs-6 escorts-img-holder" id="other_escorts">
              <a href="/escort/{{ $escort['user']['username'] }}">
                <div class="sb-widget widget-register" style="background-image:url({{ asset($image_url) }}); background-position: center; background-repeat: no-repeat; background-size: cover; vertical-align: middle;" id="other_escorts_inner">
                  @if ( $escort['escort']['rank'] == "platinum")
                      <img src="{{ asset('img/exclusive-ribbon.png') }}" alt="" class="img-responsive ribbon">
                  @elseif ( $escort['escort']['rank'] == "gold")
                      <img src="{{ asset('img/exclusive-ribbon.png') }}" alt="" class="img-responsive ribbon">
                  @elseif ( $escort['escort']['rank'] == "silver")
                      <img src="{{ asset('img/exclusive-ribbon.png') }}" alt="" class="img-responsive ribbon">
                  @elseif ( $escort['escort']['rank'] == "regular")
                      <img src="{{ asset('img/exclusive-ribbon.png') }}" alt="" class="img-responsive ribbon">
                  @endif

                  @if( $escort['escort']['verified'] == 1)
                      <img src="{{ asset('img/verified.png') }}" alt="" class="img-responsive verified-icon pull-right" id="other_escorts_inner_verified_icon">
                  @endif
                  <div class="escort-info" id="other_escorts_info">
                    <div class="escort-info-inner" id="other_escorts_info_inner">
                      <h4 class="escort-name">{{ $escort['user']['username'] }}</h4>
                      <p class="escort-location">{{ $escort['escort']['city'] }} , <span class="highlight"> {{ $escort['escort']['state'] }}</span> </p>
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

        @else

          <div class="row search-miss-row">
            <h4 class="search-miss">{{ $escorts }}</h4>
          </div>

        @endif

      </div>

    </div>
</div>
