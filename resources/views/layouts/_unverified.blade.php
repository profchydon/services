@if ( !( session('verified') === 1))
<div class="unverified-alert-div">
    <h5 class="unverified-alert text-center">
      Hi {{ Auth::user()->username }}, your account is currently not verified. Note that only verified accounts are displayed to users on the homepage.
    </h5>
    <a href="#" class="btn btn-primary">Verify your account now</a>
</div>
@endif
