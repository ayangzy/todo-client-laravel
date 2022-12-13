@extends('auth.layouts.app')

@section('content')

<div class="container container-login animated fadeIn">
    <h3 class="text-center">Todo Login</h3>
    <div class="login-form">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="form-group form-floating-label">
                <input id="email" name="email" type="text" class="form-control input-border-bottom @error('email') is-invalid @enderror" value="{{ old('email') }}" autocomplete="email" autofocus required>
                <label for="email" class="placeholder">Email</label>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group form-floating-label">
                <input id="password" name="password" type="password" class="form-control input-border-bottom @error('password') is-invalid @enderror" autocomplete="current-password" required>
                <label for="password" class="placeholder">Password</label>
                <div class="show-password">
                    <i class="icon-eye"></i>
                </div>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="row form-sub m-0">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" name="remember" id="rememberme" value="" {{ old('remember') ? 'checked' : '' }}>
                    <label class="custom-control-label" for="rememberme">Remember Me</label>
                </div>

            </div>
            <div class="form-action mb-3">
                <button type="submit" class="btn btn-success btn-rounded btn-login"> <i class="fas fa-sign-in-alt mr-2"></i>Sign In</button>
            </div>
        </form>
        <div class="login-account">
            <p><span class="msg">Not yet Registered? </span><a href="{{ route('register') }}">Register</a></p>

        </div>

    </div>
</div>
@endsection
