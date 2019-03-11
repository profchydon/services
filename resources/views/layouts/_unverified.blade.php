@if ( session('verified') === 0 && !($details['escort']) == NULL && $details['escort']['verification_ongoing'] == 0)
<div class="unverified-alert-div">
    <h5 class="unverified-alert text-center">
      Hi {{ Auth::user()->username }}, your account is currently not verified. Note that only verified accounts are displayed to users on the homepage.
    </h5>
    <a href="{{ route('verify') }}" class="btn btn-primary">Verify your account now</a>
</div>
@elseif ( session('verified') === 0 && $details['escort']['verification_ongoing'] == 1 )
<div class="unverified-alert-div">
    <h5 class="unverified-alert text-center">
      Hi {{ Auth::user()->username }}, your account verification is currently in process. Kindly contact admin if you are having difficulties veriying your account.
    </h5>
    <a href="{{ route('verify') }}" class="btn btn-primary">Contact Admin Now</a>
</div>
@endif
