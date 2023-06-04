@user
@if(is_null(session('auth')->email_verified_at))
    <div class="alert alert-info">
        Verify your account <a href="{{ route('auth.verify') }}" class="alert-link">here</a>
    </div>
@endif
@enduser
