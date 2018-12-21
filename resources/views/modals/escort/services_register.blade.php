<div class="modal fade" id="services-register" tabindex="-1" role="dialog" aria-labelledby="signupLabel">

    <div class="modal-dialog  modal-lg" role="document">

        <div class="modal-content">

            <div class="modal-header text-center">
                <h4 style="color:#fff; text-align:center;">Be sure to add only the services you offer</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close" name="button"><span style="color:white" aria-hidden="true">&times;</span></button>
            </div>

            <form class="form" action="service-register" method="post" id="service-register-form">
                {{ csrf_field() }}
                <div class="modal-body">
                  <div class="row">
                      <input type="text" name="escort_id" value="{{$details['escort']['id']}}" style="display:none">
                      <?php
                        $count = count($details['servicesFields']);
                        $prev = $count - 1;

                        unset($details['servicesFields'][0]);
                        unset($details['servicesFields'][1]);
                        unset($details['servicesFields'][$count - 2]);
                        unset($details['servicesFields'][$count - 1]);
                        $n = 1;
                      ?>

                      <ul class="list-group">

                          @foreach($details['servicesFields'] as $services)
                            <div class="col-md-3 col-sm-4 col-xs-4 service-register-div">
                              <li class="list-group-item service-register-list">
                                <input type="checkbox" class="service-register-checkbox" id="service{{$n}}" name="service{{$n}}" value="{{$services}}"><label for="service{{$n}}"><p class="service-register-p">{{$services}}</p></label>
                              </li>
                            </div>
                            <?php $n++; ?>
                          @endforeach

                      </ul>

                   </div>
                </div>

                <div class="modal-footer">
                   <button type="submit" class="btn btn-primary btn-block" name="submit-service" id="register-submit-service" style="font-weight:600;">Submit</button>
                 </div>

            </form>

            <p id="edit-user-message" class="success-message"></p>

        </div>

    </div>
</div>
