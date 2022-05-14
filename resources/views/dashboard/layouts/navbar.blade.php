<nav class="navbar-expand-md navbar-dark bg-gradient bg-primary" aria-label="Third navbar example">
    <div class="d-flex flex justify-content-between mx-2">
        <a class="navbar-brand" href="/home">
            <img src="{{ url('css/favicon.png') }}" alt="logo" style="max-height: 50px">
            <span class="fw-bold">Ramcheck</span>
        </a>
        <div class="d-flex align-items-center">
            <ul class="navbar-nav ">
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle nav-link text-white font-weight-bold px-0" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        @if (Auth::user()->hasRole('admin'))
                            <span class="fw-bold">Admin by</span>
                        @elseif (Auth::user()->hasRole('ppns'))
                            <span class="fw-bold">PPNS by</span>
                        @elseif (Auth::user()->hasRole('penguji'))
                            <span class="fw-bold">Penguji by</span>
                        @elseif (Auth::user()->hasRole('post'))
                            <span class="fw-bold">Post by</span>
                        @endif
                        <span class="fw-bold">{{ Auth::user()->name }}</span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
        </div>
        {{-- <div class="collapse navbar-collapse container" id="navbarsExample03"> --}}
    </div>
</nav>
<nav class="navbar navbar-expand-md navbar-dark bg-secondary bg-gradient navbar-collapse"  aria-label="Third navbar example">
    <button class="navbar-toggler mx-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse mx-2"  id="navbarsExample03">
        <ul class="navbar-nav me-auto mb-2 mb-sm-0 text-center">
            @hasrole('admin')
            <li class="nav-item">
                <a class="nav-link {{ Request::is('home') ? 'active text-dark fw-bold btn btn-light mx-2' : 'text-white fw-bold' }}" href="/home">
                    <span class="nav-link-text ms-1">Home</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/vehicles*') ? 'active text-dark fw-bold btn btn-light' : 'text-white fw-bold' }}" href="/dashboard/vehicles">
                    <span class="nav-link-text ms-1">Data Kendaraan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/verifikasis*') ? 'active text-dark fw-bold btn btn-light' : 'text-white fw-bold' }}" href="/dashboard/verifikasis">
                    <span class="nav-link-text ms-1">Verifikasi 1</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/secondVerifikasis*') ? 'active text-dark fw-bold btn btn-light' : 'text-white fw-bold' }}" href="/dashboard/secondVerifikasis">
                    <span class="nav-link-text ms-1">Verifikasi 2</span>
                </a>
            </li>
            <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/kedatangan*') ? 'active text-dark fw-bold btn btn-light' : 'text-white fw-bold' }}" href="/dashboard/kedatangan">
                <span class="nav-link-text ms-1">Kedatangan</span>
            </a>
            </li>
            <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/keberangkatan*') ? 'active text-dark fw-bold btn btn-light' : 'text-white fw-bold' }}" href="/dashboard/keberangkatan">
                <span class="nav-link-text ms-1">Keberangkatan</span>
            </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/user*') ? 'active text-dark fw-bold btn btn-light' : 'text-white fw-bold' }}" href="/dashboard/user">
                <span class="nav-link-text ms-1">Data User</span>
                </a>
            </li>
            @endhasrole
            @hasrole('ppns')
            <li class="nav-item">
                <a class="nav-link {{ Request::is('home') ? 'active text-dark fw-bold btn btn-light' : 'text-white fw-bold' }}" href="/home">
                <span class="nav-link-text ms-1">Home</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/vehicles*') ? 'active text-dark fw-bold btn btn-light' : 'text-white fw-bold' }}" href="/dashboard/vehicles">
                    <span class="nav-link-text ms-1">Data Kendaraan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/verifikasis*') ? 'active text-dark fw-bold btn btn-light' : 'text-white fw-bold' }}" href="/dashboard/verifikasis">
                    <span class="nav-link-text ms-1">Verifikasi 1</span>
                </a>
            </li>
            @endhasrole
            @hasrole('penguji')
            <li class="nav-item">
                <a class="nav-link {{ Request::is('home') ? 'active text-dark fw-bold btn btn-light' : 'text-white fw-bold' }}" href="/home">
                <span class="nav-link-text ms-1">Home</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/secondVerifikasis*') ? 'active text-dark fw-bold btn btn-light' : 'text-white fw-bold' }}" href="/dashboard/secondVerifikasis">
                    <span class="nav-link-text ms-1">Verifikasi 2</span>
                </a>
            </li>
            @endhasrole
            @hasrole('post')
            <li class="nav-item">
                <a class="nav-link {{ Request::is('home') ? 'active text-dark fw-bold btn btn-light' : 'text-white fw-bold' }}" href="/home">
                <span class="nav-link-text ms-1">Home</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/kedatangan*') ? 'active text-dark fw-bold btn btn-light' : 'text-white fw-bold' }}" href="/dashboard/kedatangan">
                <span class="nav-link-text ms-1">Kedatangan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/keberangkatan*') ? 'active text-dark fw-bold btn btn-light' : 'text-white fw-bold' }}" href="/dashboard/keberangkatan">
                <span class="nav-link-text ms-1">Keberangkatan</span>
                </a>
            </li>
            @endhasrole
        </ul>
        {{-- <ul class="navbar-nav border">
        </ul> --}}
    </div>
</nav>
