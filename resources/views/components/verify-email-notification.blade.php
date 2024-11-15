@if(Auth::user() !== null && !Auth::user()->hasVerifiedEmail())
    <p class="bg-green-300 font-medium text-center py-3">Please check your email inbox, as we have sent you a message to activate your account.</p>
@endif
