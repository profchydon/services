<div class="all-wrapper with-side-panel solid-bg-all">

  <div class="layout-w">

    @include('layouts.sidebar')

    <div class="container-fluid">

        @include('layouts.nav')

        <div class="row inner-row-content transactions-inner-row-content">

            <section class="col-md-12">

                @include('layouts._unverified')

                <!-- <div class="row">
                  <div class="col-md-4">
                      <div class="">

                      </div>
                  </div>
                  <div class="col-md-4">
                      <h2>Hw</h2>
                  </div>
                  <div class="col-md-4">
                      <h2>Hw</h2>
                  </div>
                </div> -->

                <div class="row transaction-details">

                    <fieldset>

                        <div class="table-responsive">
                          <table class="table table-hover">
                              <thead>
                                  <tr>
                                    <td>S/No</td>
                                    <td>Type</td>
                                    <td>Amount</td>
                                    <td>Reference Id</td>
                                    <td>Date Paid</td>
                                  </tr>
                              </thead>
                              <tbody>
                                <?php $i = 1 ?>
                                @foreach($transactions as $transaction)

                                <tr>
                                  <td>{{$i}}</td>
                                  <td>{{$transaction['type']}}</td>
                                  <td>{{$transaction['amount']}}</td>
                                  <td>{{$transaction['reference_id']}}</td>
                                  <td>{{$transaction['created_at']}}</td>
                                </tr>
                                <?php $i++; ?>
                                @endforeach

                              </tbody>
                          </table>
                        </div>

                        {{ $transactions->links() }}
                    </fieldset>
                </div>

            </section>

        </div>

    </div>

  </div>

</div>
