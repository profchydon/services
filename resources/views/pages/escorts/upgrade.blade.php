<div class="all-wrapper with-side-panel solid-bg-all">

  <div class="layout-w">

    @include('layouts.sidebar')

    <div class="container-fluid">

        @include('layouts.nav')

        <div class="row inner-row-content">

          <section class="upgrade-pricing-section">

              <h2 class="upgrade-heading text-center">Upgrade your account today. Choose a package</h2>

              <form class="form-group" method="post">

                  {{ csrf_field() }}
                  <input type="text" name="escort_id" id="escort_id" class="project__contact__box__input project__contact__box__input--3" value="{{ session('escort_id') }}" style="display:none"/>

                  <input type="text" name="email" id="email" class="project__contact__box__input project__contact__box__input--3" value="{{ Auth::user()->email }}" style="display:none"/>

                  <input type="text" name="api_key" id="api_key" class="project__contact__box__input project__contact__box__input--3" value="{{ Auth::user()->api_key }}" style="display:none"/>

                  <input type="text" name="user_id" id="user_id" class="project__contact__box__input project__contact__box__input--3" value="{{ Auth::user()->id }}" style="display:none"/>

              </form>

              <div class="col-md-4">
                <div class="card-body upgrade-account-holder">
                  <h5 class="card-title text-muted text-uppercase package-heading text-center">Silver Package</h5>
                  <h6 class="card-price text-center">N3,000<span class="period">/week</span></h6>
                  <hr>
                  <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Set price rate between:  ₦10,000 - ₦50,000</li>          
                    <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Free gofeature subscription. (Your profile will be listed on featured slider)</li>
                    <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Exclusive access to exclusive clients</li>
                    <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Free 30 minutes studio session</li>
                  </ul>
                  <form >

                    <label for="" id="feature-label">How long do you want to subscribe for?</label>
                    <select class="form-control" name="" id="silver_duration">
                        <option value="7">7 days - N3,000</option>
                        <option value="14">14 days - N5,000</option>
                        <option value="21">21 days - N14,000</option>
                        <option value="31">31 days - N18,000</option>
                    </select>

                    <script src="https://js.paystack.co/v1/inline.js"></script>
                    <button type="button" onclick="goSilver()" class="btn-get-started feature-subscribe-btn btn-block" id="silver-upgrade">Go Silver</button>
                  </form>

                </div>
              </div>

              <div class="col-md-4">
                <div class="card-body upgrade-account-holder">
                  <h5 class="card-title text-muted text-uppercase package-heading text-center">Gold Package</h5>
                  <h6 class="card-price text-center">N5,000<span class="period">/week</span></h6>
                  <hr>
                  <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Set price rate between: ₦10,000 - ₦100,000</li>
                    <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Free gofeature subscription. (Your profile will be listed on featured slider)</li>
                    <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Exclusive access to exclusive clients</li>
                    <li class="text-muted"><span class="fa-li"><i class="fas fa-times"></i></span>Free 30 minutes studio session</li>
                  </ul>
                  <form >

                    <label for="" id="feature-label">How long do you want to subscribe for?</label>
                    <select class="form-control" name="" id="gold_duration">
                        <option value="7">7 days - N5,000</option>
                        <option value="14">14 days - N9,000</option>
                        <option value="21">21 days - N13,000</option>
                        <option value="31">31 days - N17,000</option>
                    </select>

                    <script src="https://js.paystack.co/v1/inline.js"></script>
                    <button type="button" onclick="goGold()" class="btn-get-started feature-subscribe-btn btn-block" id="silver-upgrade">Go Gold</button>
                  </form>

                </div>
              </div>

              <div class="col-md-4">
                <div class="card-body upgrade-account-holder">
                  <h5 class="card-title text-muted text-uppercase package-heading text-center">Platinum Package</h5>
                  <h6 class="card-price text-center">N10,000<span class="period">/week</span></h6>
                  <hr>
                  <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Set price rate between: ₦10,000 - ₦500,000</li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Free gofeature subscription. (Your profile will be listed on featured slider)</li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Exclusive access to exclusive clients</li>
                    <li><span class="fa-li"><i class="fas fa-check"></i></span>Free 30 minutes studio session</li>
                  </ul>
                  <form >

                    <label for="" id="feature-label">How long do you want to subscribe for?</label>
                    <select class="form-control" name="" id="platinum_duration">
                        <option value="7">7 days - N10,000</option>
                        <option value="14">14 days - N19,000</option>
                        <option value="21">21 days - N28,000</option>
                        <option value="31">31 days - N37,000</option>
                    </select>

                    <script src="https://js.paystack.co/v1/inline.js"></script>
                    <button type="button" onclick="goPlatinum()" class="btn-get-started feature-subscribe-btn btn-block" id="silver-upgrade">Go Platinum</button>
                  </form>

                </div>
              </div>


          </section>

        </div>

    </div>

  </div>

</div>
