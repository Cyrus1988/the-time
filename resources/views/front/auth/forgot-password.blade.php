@extends('front.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card">
                    <div class="account-in">
                        <div class="container">
                            <h3>Login to account</h3>
                            <div class="mb-4 text-sm text-gray-600">
                                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                            </div>
                            <form method="POST" action="{{ route('password.request') }}">
                                @csrf
                                <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <div>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="clearfix"></div>
                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <div class="submit-btn">
                                            <a href="{{ __('Email Password Reset Link') }}"><input type="submit" value="Send link"></a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
