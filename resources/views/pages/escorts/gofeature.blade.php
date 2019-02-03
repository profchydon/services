<div class="all-wrapper with-side-panel solid-bg-all">

  <div class="layout-w">

    @include('layouts.sidebar')

    <div class="container-fluid">

        @include('layouts.nav')

        <div class="row inner-row-content">

          @include('layouts._unverified')

            <section class="col-md-6 go-feature-aside">

              <div class="row">
                  <h3 class="feature-h3 text-center">Why Go Feature?</h3>
                  <br>
              </div>

              <ul class="feature-ul">
                  <li> Increased profile view</li>
                  <li> Profile is displayed on the pages sliders</li>
                  <li> Increased profile view</li>
                  <li> Increased profile view</li>
                  <li> Increased profile view</li>
              </ul>

            </section>

            <section class="col-md-5 go-feature-aside">

              <div class="row">

                <form class="form-group" method="post">

                    {{ csrf_field() }}
                    <input type="text" name="escort_id" id="escort_id" class="project__contact__box__input project__contact__box__input--3" value="{{ session('escort_id') }}" style="display:none"/>

                    <input type="text" name="email" id="email" class="project__contact__box__input project__contact__box__input--3" value="{{ Auth::user()->email }}" style="display:none"/>

                    <input type="text" name="api_key" id="api_key" class="project__contact__box__input project__contact__box__input--3" value="{{ Auth::user()->api_key }}" style="display:none"/>

                    <input type="text" name="user_id" id="user_id" class="project__contact__box__input project__contact__box__input--3" value="{{ Auth::user()->id }}" style="display:none"/>

                    <label for="">How long do you want to subscribe for?</label>
                    <select class="form-control" name="" id="duration">
                        <option value="7">7 days</option>
                        <option value="14">14 days</option>
                        <option value="21">21 days</option>
                        <option value="31">31 days</option>
                    </select>

                </form>

              </div>

              <div class="row">
                <form >
                  <script src="https://js.paystack.co/v1/inline.js"></script>
                  <button type="button" onclick="payWithPaystack()" class="btn btn__pay"> Pay now </button>
                </form>
              </div>

            </section>

        </div>

    </div>

  </div>

</div>
