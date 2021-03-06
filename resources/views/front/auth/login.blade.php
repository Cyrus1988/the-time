@extends('front.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-9">
                <div class="card">
                    <div class="account-in">
                        <div class="container">
                            <h3>Login to account</h3>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <span class="pass">Email*</span>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <div>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div>
                                    <span class="pass">Password*</span>
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="current-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="clearfix"></div>
                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-4">
                                        <div class="submit-btn">
                                            <input type="submit" value="Login">
                                        </div>
                                        @if (Route::has('password.request'))

                                            <div class="submit-btn">
                                                <a class="btn btn-secondary" style="color: black" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            </div>
                                        @endif
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
