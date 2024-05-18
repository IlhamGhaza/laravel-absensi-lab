@extends('layouts.auth')

@section('title', 'Verify Email')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush

@section('main')
    <div class="card card-primary">
        <div class="card-header">
            <h4>Verify Your Email Address</h4>
        </div>

        <div class="card-body">
            @if (session('status') == 'verification-link-sent')
                <div class="alert alert-success" role="alert">
                    A new verification link has been sent to the email address you provided during registration.
                </div>
            @endif

            <p>Before proceeding, please check your email for a verification link.</p>
            <p>If you did not receive the email, you can request another by clicking the button below.</p>

            <form method="POST" action="{{ route('verification.send') }}">
                @csrf
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                        Resend Verification Email
                    </button>
                </div>
            </form>

            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <div class="form-group">
                    <button type="submit" class="btn btn-secondary btn-lg btn-block">
                        Logout
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraries -->
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>
@endpush
