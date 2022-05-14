@extends('layouts.app')

{{-- @section('content')
<main class="form-signin text-center" >
    <div class="min-vh-100 opacity-75 bg-gradient bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-8 col-12 mx-auto">
                    <div class="card p-3 border-success mt-5">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="d-flex justify-content-around">
                                <img class="mb-4" src="/css/favicon.png" alt="" width="72" height="72">
                                <img class="mb-4" src="/css/dishub.png" alt="" width="72" height="72">
                            </div>
                          <h1 class="h3 mb-3 fw-bold">Login</h1>

                          <div class="form-floating mb-2">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            <label for="floatingInput">Email address</label>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          </div>
                          <div class="form-floating mb-2">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password" name="password" required autocomplete="current-password">
                            <label for="floatingPassword">Password</label>
                          </div>
                          <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                          <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection --}}
@section('content')
<style>
    .bg-login{
        background: white;
        border-radius: 50px;
        box-shadow: 12px 12px 22px;
    }
    .bg-img{
        background: url('/css/board.jpg');
        background-size: 100% 100%;
        background-repeat: no-repeat;
        border-top-left-radius: 50px;
        border-bottom-left-radius: 50px;
        padding: 0;
    }

    @media (max-width: 768px) {
        .bg-img{
            border-top-right-radius: 50px;
            border-bottom-left-radius: 0;
        }
        .logo{
            margin-left: 20px
        }
    }
</style>
<main class="" >
    <div class="min-vh-100 bg-light py-5">
        <div class="container pt-5">
            <div class="row bg-login g-0">
                <div class="col-lg-7 bg-img">
                    <div class="row m-3">
                        <div class="col-2 mx-2">
                            <img class="mb-4" src="/css/favicon.png" alt="" width="72" height="72">
                        </div>
                        <div class="col-2 logo">
                            <img class="mb-4" src="/css/dishub.png" alt="" width="72" height="72">
                        </div>
                    </div>
                    <div class="row m-3 text-white">
                        <h1>Ditujukan Untuk Memenuhi Persyaratan Tugas Akhir</h1>
                        <span>Rikza Fatchur Maulana</span>
                        <span>19.03.0596</span>
                        <span>TO B</h3>
                    </div>
                </div>
                <div class="col-lg-5 p-5">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                      <h1 class="h3 mb-3 fw-bold">Login Rampcheck</h1>

                      <div class="form-floating mb-2">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        <label for="floatingInput">Email address</label>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                      <div class="form-floating mb-2">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password" name="password" required autocomplete="current-password">
                        <label for="floatingPassword">Password</label>
                      </div>
                      <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
                      <p class="mt-5 mb-3 text-muted">&copy; 2022</p>
                    </form>
                    {{-- <div class="card p-3 border-success mt-5">
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
