@php

$current_year = date('Y');
$dob = (int)$escort['escort']['year_of_birth'];
$age = $current_year - $dob;
$phone = $escort['user']['phone'];
$phone = (int)$phone;
$phone = "234".$phone;
$path = "img/escort/images/";
$video_path = "video/escort/";
$img = $escort['escort']['profile_image'];
$profile_image = $path."{$img}";
$profile_page = "http://xcort.humanelove.org/escort/".$escort['user']['username'];
$text = $profile_page."\n \n Hi,%20I%20just%20viewed%20your%20profile%20on%20xcort.ng%20and%20i'm%20interested%20in%20meeting%20you";
$verification_img = "img/escort/verification/".$escort['verification']['image'];
@endphp

<div class="all-wrapper with-side-panel solid-bg-all">

  <div class="layout-w">

    @include('layouts.admin-sidebar')

    <div class="container-fluid">

        @include('layouts.nav')

        @include('_messages')

        <div class="row inner-row-content" id="admin-dashboard-container">

          <div class="col-md-4">
            <h5 class="details-header">Details: </h5>
            <ul class="list-group">
                <li class="list-group-item"><span class="details-key">Name</span> : {{ $escort['user']['name'] }} </li>
                <li class="list-group-item"><span class="details-key">Username</span> : {{ $escort['user']['username'] }} </li>
                <li class="list-group-item"><span class="details-key">Email</span> : {{ $escort['user']['email'] }} </li>
                <li class="list-group-item"><span class="details-key">Phone Number</span> : {{ $escort['user']['phone'] }} </li>
                <li class="list-group-item"><span class="details-key">Account created: </span> : {{ Carbon\Carbon::parse($escort['user']['created_at'])->toDayDateTimeString() }} </li>
                <li class="list-group-item"><span class="details-key">Last seen</span> : {{ Carbon\Carbon::parse($escort['user']['updated_at'])->toDayDateTimeString() }} </li>
                @if(!($escort['escort']) == NULL)
                    <li class="list-group-item"><span class="details-key">Profile views: </span> : {{ $escort['escort']['views'] }} </li>
                @endif
            </ul>
        </div>

        <div class="col-md-4">
          <h5 class="details-header">verification Image: </h5>
          @if($escort['verification']['image'] == "")
            <h4>No verification picture</h4>
          @else
            <img src="{{ asset($verification_img) }}" class="img-responsive escort-page-profile-image"/>
          @endif
        </div>

        <div class="col-md-4">
          <h5 class="details-header">Profile Image: </h5>
          @if($img == "")
            <h4>No profile picture</h4>
          @else
            <img src="{{ asset($profile_image) }}" class="img-responsive escort-page-profile-image"/>
          @endif
        </div>

      </div>  

      <div class="row inner-row-content" id="admin-dashboard-container">
            <h5 class="details-header">Images </h5>
            <br>

            @if($escort['images'] != "NULL" )

              <div id="animated-thumbnails">
                <a href="{{ asset($path."/".$escort['images']['image_1']) }}">
                  <img src="{{ asset($path."/".$escort['images']['image_1']) }}" />
                </a>
                <a href="{{ asset($path."/".$escort['images']['image_2']) }}">
                  <img src="{{ asset($path."/".$escort['images']['image_2']) }}" />
                </a>
                <a href="{{ asset($path."/".$escort['images']['image_3']) }}">
                  <img src="{{ asset($path."/".$escort['images']['image_3']) }}" />
                </a>
                <a href="{{ asset($path."/".$escort['images']['image_4']) }}">
                  <img src="{{ asset($path."/".$escort['images']['image_4']) }}" />
                </a>
                <a href="{{ asset($path."/".$escort['images']['image_5']) }}">
                  <img src="{{ asset($path."/".$escort['images']['image_5']) }}" />
                </a>
                <a href="{{ asset($path."/".$escort['images']['image_6']) }}">
                  <img src="{{ asset($path."/".$escort['images']['image_6']) }}" />
                </a>
              </div>

            @else
              <br>
              <h4>No images</h4>
            @endif
      </div>

      <div class="row inner-row-content" id="admin-dashboard-container">
          <div class="col-md-6">
              <a href="/admin/verify/escort/true/{{$escort['verification']['id']}}/{{$escort['escort']['id']}}" class="btn btn-primary btn-block">Accept</a>
          </div>
          <div class="col-md-6">
              <a href="#" class="btn btn-primary btn-block">Reject</a>
          </div>
      </div>

    </div>

  </div>

</div>
