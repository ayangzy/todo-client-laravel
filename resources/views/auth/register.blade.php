@extends('auth.layouts.app')

@section('content')

<div class="container container-login animated fadeIn">
    <h3 class="text-center">Todo Login</h3>
    <div class="login-form">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group form-floating-label">
                <input id="name" name="name" type="text" class="form-control input-border-bottom @error('name') is-invalid @enderror" value="{{ old('name') }}" autocomplete="name" autofocus required>
                <label for="name" class="placeholder">Name</label>
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

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

            <div class="form-group form-floating-label">
                <input id="password-confirm" name="password_confirmation" type="password" class="form-control input-border-bottom" autocomplete="current-password" required>
                <label for="password-confirm" class="placeholder">Password Confirm</label>
                <div class="show-password">
                    <i class="icon-eye"></i>
                </div>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="form-action mb-3">
                <button type="submit" class="btn btn-success btn-rounded btn-login"> <i class="fas fa-sign-in-alt mr-2"></i>Sign Up</button>
            </div>
        </form>
        <div class="login-account">
            <p><span class="msg">Already Registered? </span><a href="{{ route('login') }}">Login</a></p>
        </div>
    </div>
</div>
@endsection
