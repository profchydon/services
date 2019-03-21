<div class="all-wrapper with-side-panel solid-bg-all">

  <div class="layout-w">

    @include('layouts.sidebar')

    <div class="container-fluid">

        @include('layouts.nav')

        <div class="row inner-row-content">

          <section class="upgrade-pricing-section">

              <h2 class="feature-heading text-center">INCREASE YOUR PROFILE VISIBLITY. SUBSCRIBE FOR A FEATURE PACKAGE TODAY</h2>
              <h4 class="feature-sub-heading text-center">Get your profile listed on the feature slider on all pages</h4>


              <div class="col-md-3">

              </div>

              <div class="col-md-6">
                <div class="card-body">
                  <h5 class="card-title text-muted text-uppercase package-heading text-center">Go Feature</h5>
                  <h6 class="card-price text-center">N5,000<span class="period">/week</span></h6>
                  <hr>
                  <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Profile listed on the feature slider on all relevant pages.</li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Free exclusive video session.</li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Exclusive access to exclusive clients</li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Dedicated verification support</li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Access to set pricing above N70,000</li>
                    <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Unlimited Private Projects</li>
                    <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Dedicated Phone Support</li>
                    <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Free Subdomain</li>
                    <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Monthly Status Reports</li>
                  </ul>

                  <div class="row">

                    <form class="form-group" method="post">

                        {{ csrf_field() }}
                        <input type="text" name="escort_id" id="escort_id" class="project__contact__box__input project__contact__box__input--3" value="{{ session('escort_id') }}" style="display:none"/>

                        <input type="text" name="email" id="email" class="project__contact__box__input project__contact__box__input--3" value="{{ Auth::user()->email }}" style="display:none"/>

                        <input type="text" name="api_key" id="api_key" class="project__contact__box__input project__contact__box__input--3" value="{{ Auth::user()->api_key }}" style="display:none"/>

                        <input type="text" name="user_id" id="user_id" class="project__contact__box__input project__contact__box__input--3" value="{{ Auth::user()->id }}" style="display:none"/>

                    </form>

                  </div>

                  <form >

                    <label for="" id="feature-label">How long do you want to subscribe for?</label>
                    <select class="form-control" name="" id="duration">
                        <option value="7">7 days - N5,000</option>
                        <option value="14">14 days - N9,000</option>
                        <option value="21">21 days - N13,000</option>
                        <option value="31">31 days - N17,000</option>
                    </select>

                    <script src="https://js.paystack.co/v1/inline.js"></script>
                    <button type="button" onclick="goFeature()" class="btn-get-started feature-subscribe-btn btn-block"> Pay now </button>
                  </form>

                </div>
              </div>

              <div class="col-md-3">

              </div>


          </section>

        </div>

    </div>

  </div>

</div>
