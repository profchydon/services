<?php

  $path = "img/escort/images/";
  $video_path = "video/escort/";

?>

<div class="all-wrapper with-side-panel solid-bg-all">

  <div class="layout-w">

    @include('layouts.admin-sidebar')

    <div class="container-fluid">

        @include('layouts.nav')

        <div class="row inner-row-content">

            <section class="col-md-12">

              <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <td>#</td>
                        <td>Name</td>
                        <td>User Type</td>
                        <td>Status</td>
                      </tr>

                    </thead>

                    <tbody>
                      @php $i = 1; @endphp
                      @foreach($escorts as $escort)

                      <tr>
                        <td>{{$i}}</td>
                        <td>{{$escort['name']}}</td>
                        <td>{{$escort['user_type']}}</td>
                        <td>{{$escort['status']}}</td>
                        <td> <a href="/admin/verify/escort/{{$escort['escort_id']}}">View</a> </td>
                      </tr>
                      @php $i++; @endphp
                      @endforeach

                    </tbody>
                </table>
              </div>

              <div class="row text-center">
                  {{ $escorts->links() }}
              </div>

            </section>

        </div>

    </div>

  </div>

</div>
