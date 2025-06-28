
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow" style="border-radius: 20px;">
                <div class="card-header text-center bg-white" style="border-top-left-radius: 20px; border-top-right-radius: 20px;">
                    <img src="{{ asset('img/laughingcat.png') }}" alt="Cat Logo" width="60" class="mb-2">
                    <h3 style="color:#00a2ff; font-weight:bold; margin-bottom:0;">CatLover Petshop</h3>
                    <small class="text-muted">Login to your favorite cat shop!</small>
                </div>

                <div class="card-body" style="background:#a4deff;">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn" style="background:#00a2ff; color:white; font-weight:bold;">
                                    <i class="fas fa-paw"></i> {{ __('Login') }}
                                </button>
                                <a style="color:black" class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center bg-white" style="border-bottom-left-radius: 20px; border-bottom-right-radius: 20px;">
                    <small style="color:#00a2ff;">&copy; {{ date('Y') }} CatLover Petshop</small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
