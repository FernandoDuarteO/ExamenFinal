@extends('layouts.app')
@section('title', 'Verify Your Email Address')

@section('content')
    <div class="container mt--8 pb-5">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                <div class="card bg-secondary shadow border-0">
                    <div class="card-header bg-transparent pb-5">
                        <div class="text-muted text-center mt-2 mb-3">
                            <h2>Verify Your Email Address</h2>
                        </div>
                    </div>
                    <div class="card-body px-lg-5 py-lg-5">
                        @if (session('status') == 'verification-link-sent')
                            <div class="alert alert-success" role="alert">
                                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                            </div>
                        @endif

                        <div class="text-center text-muted mb-4">
                            <p>{{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}</p>
                        </div>

                        <form method="POST" action="{{ route('verification.send') }}">
                            @csrf
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary my-4">{{ __('Resend Verification Email') }}</button>
                            </div>
                        </form>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <div class="text-center">
                                <button type="submit" class="btn btn-danger my-4">{{ __('Log Out') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
