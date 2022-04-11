@extends('layouts.app')

@section('content')
<main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-info shadow-info border-radius-lg py-3 pe-1">
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">{{ __('Login') }}</h4>
                </div>
              </div>
              <div class="card-body">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="input-group input-group-static my-3">
                        <label for="email">Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="input-group input-group-static mb-3">
                        <label for="password">Password</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    {{-- <div class="form-check form-switch d-flex align-items-center mb-3">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label mb-0 ms-2" for="remember">{{ __('Remember Me') }}</label>
                    </div> --}}
                    <div class="text-center">
                        <button type="submit" class="btn bg-gradient-info w-100 my-4 mb-2">{{ __('Login') }}</button>
                        {{-- @if (Route::has('password.request'))
                            <a class="btn btn-link text-info" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif --}}
                    </div>
                    {{-- <p class="mt-4 text-sm text-center">
                        Don't have an account?
                        <a href="{{ route('register') }}" class="text-info text-gradient font-weight-bold">Register</a>
                    </p> --}}
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection
