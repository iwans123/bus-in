{{-- <nav class="navbar navbar-main bg-gradient-info navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
      <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
          <ul class="navbar-nav">
            @can('admin')
            <li class="nav-item">
              <a class="nav-link {{ Request::is('home') ? 'active text-dark' : 'text-white' }}" href="/home">
                <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="material-icons opacity-10">dashboard</i>
                </div>
                <span class="nav-link-text ms-1">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/vehicles*') ? 'active text-dark' : 'text-white' }}" href="/dashboard/vehicles">
                    <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">table_view</i>
                    </div>
                    <span class="nav-link-text ms-1">List Vehicle</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/verifikasis*') ? 'active text-dark' : 'text-white' }}" href="/dashboard/verifikasis">
                    <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">receipt_long</i>
                    </div>
                    <span class="nav-link-text ms-1">Verifikasi 1</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/secondVerifikasis*') ? 'active text-dark' : 'text-white' }}" href="/dashboard/secondVerifikasis">
                    <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">receipt_long</i>
                    </div>
                    <span class="nav-link-text ms-1">Verifikasi 2</span>
                </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('dashboard/kedatangan*') ? 'active text-dark' : 'text-white' }}" href="/dashboard/kedatangan">
                <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="material-icons opacity-10">view_in_ar</i>
                </div>
                <span class="nav-link-text ms-1">Kedatangan</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('dashboard/keberangkatan*') ? 'active text-dark' : 'text-white' }}" href="/dashboard/keberangkatan">
                <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="material-icons opacity-10">view_in_ar</i>
                </div>
                <span class="nav-link-text ms-1">Keberangkatan</span>
              </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/user*') ? 'active text-dark' : 'text-white' }}" href="/dashboard/user">
                  <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">view_in_ar</i>
                  </div>
                  <span class="nav-link-text ms-1">Data User</span>
                </a>
            </li>
            @elsecan('ppns')
            <li class="nav-item">
                <a class="nav-link {{ Request::is('home') ? 'active text-dark' : 'text-white' }}" href="/home">
                  <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">dashboard</i>
                  </div>
                  <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/vehicles*') ? 'active text-dark' : 'text-white' }}" href="/dashboard/vehicles">
                    <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">table_view</i>
                    </div>
                    <span class="nav-link-text ms-1">List Vehicle</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/verifikasis*') ? 'active text-dark' : 'text-white' }}" href="/dashboard/verifikasis">
                    <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">receipt_long</i>
                    </div>
                    <span class="nav-link-text ms-1">Verifikasi 1</span>
                </a>
            </li>
            @elsecan('penguji')
            <li class="nav-item">
                <a class="nav-link {{ Request::is('home') ? 'active text-dark' : 'text-white' }}" href="/home">
                  <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">dashboard</i>
                  </div>
                  <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/secondVerifikasis*') ? 'active text-dark' : 'text-white' }}" href="/dashboard/secondVerifikasis">
                    <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">receipt_long</i>
                    </div>
                    <span class="nav-link-text ms-1">Verifikasi 2</span>
                </a>
            </li>
            @elsecan('post')
            <li class="nav-item">
                <a class="nav-link {{ Request::is('home') ? 'active text-dark' : 'text-white' }}" href="/home">
                  <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">dashboard</i>
                  </div>
                  <span class="nav-link-text ms-1">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/kedatangan*') ? 'active text-dark' : 'text-white' }}" href="/dashboard/kedatangan">
                  <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">view_in_ar</i>
                  </div>
                  <span class="nav-link-text ms-1">Kedatangan</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/keberangkatan*') ? 'active text-dark' : 'text-white' }}" href="/dashboard/keberangkatan">
                  <div class="text-dark text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">view_in_ar</i>
                  </div>
                  <span class="nav-link-text ms-1">Keberangkatan</span>
                </a>
              </li>
            @endcan
        </ul>
      </div>
      <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
        <ul class="navbar-nav d-flex justify-content-end ms-auto">
          <li class="nav-item d-flex align-items-center mx-4 text-white font-weight-bold">
              @if (Auth::user()->role_id == 1)
              <span>Admin by</span>
              @endif
          </li>
          <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle nav-link text-white font-weight-bold px-0" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }}
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
    </div>
</nav> --}}

<nav class="navbar navbar-expand-sm navbar-dark bg-gradient bg-primary" aria-label="Third navbar example">
    <div class="container-fluid">
      <a class="navbar-brand" href="/home"><img src="{{ url('css/favicon.png') }}" alt="logo" style="max-height: 50px"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample03">
        <ul class="navbar-nav me-auto mb-2 mb-sm-0">
            @hasrole('admin')
            <li class="nav-item">
              <a class="nav-link {{ Request::is('home') ? 'active text-dark fw-bold' : 'text-white fw-bold' }}" href="/home">
                <span class="nav-link-text ms-1">Home</span>
              </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/vehicles*') ? 'active text-dark fw-bold' : 'text-white fw-bold' }}" href="/dashboard/vehicles">
                    <span class="nav-link-text ms-1">Data Kendaraan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/verifikasis*') ? 'active text-dark fw-bold' : 'text-white fw-bold' }}" href="/dashboard/verifikasis">
                    <span class="nav-link-text ms-1">Verifikasi 1</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/secondVerifikasis*') ? 'active text-dark fw-bold' : 'text-white fw-bold' }}" href="/dashboard/secondVerifikasis">
                    <span class="nav-link-text ms-1">Verifikasi 2</span>
                </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('dashboard/kedatangan*') ? 'active text-dark fw-bold' : 'text-white fw-bold' }}" href="/dashboard/kedatangan">
                <span class="nav-link-text ms-1">Kedatangan</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ Request::is('dashboard/keberangkatan*') ? 'active text-dark fw-bold' : 'text-white fw-bold' }}" href="/dashboard/keberangkatan">
                <span class="nav-link-text ms-1">Keberangkatan</span>
              </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/user*') ? 'active text-dark fw-bold' : 'text-white fw-bold' }}" href="/dashboard/user">
                  <span class="nav-link-text ms-1">Data User</span>
                </a>
            </li>
            @endhasrole
            @hasrole('ppns')
            <li class="nav-item">
                <a class="nav-link {{ Request::is('home') ? 'active text-dark fw-bold' : 'text-white fw-bold' }}" href="/home">
                  <span class="nav-link-text ms-1">Home</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/vehicles*') ? 'active text-dark fw-bold' : 'text-white fw-bold' }}" href="/dashboard/vehicles">
                    <span class="nav-link-text ms-1">Data Kendaraan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/verifikasis*') ? 'active text-dark fw-bold' : 'text-white fw-bold' }}" href="/dashboard/verifikasis">
                    <span class="nav-link-text ms-1">Verifikasi 1</span>
                </a>
            </li>
            @endhasrole
            @hasrole('penguji')
            <li class="nav-item">
                <a class="nav-link {{ Request::is('home') ? 'active text-dark fw-bold' : 'text-white fw-bold' }}" href="/home">
                  <span class="nav-link-text ms-1">Home</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/secondVerifikasis*') ? 'active text-dark fw-bold' : 'text-white fw-bold' }}" href="/dashboard/secondVerifikasis">
                    <span class="nav-link-text ms-1">Verifikasi 2</span>
                </a>
            </li>
            @endhasrole
            @hasrole('post')
            <li class="nav-item">
                <a class="nav-link {{ Request::is('home') ? 'active text-dark fw-bold' : 'text-white fw-bold' }}" href="/home">
                  <span class="nav-link-text ms-1">Home</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/kedatangan*') ? 'active text-dark fw-bold' : 'text-white fw-bold' }}" href="/dashboard/kedatangan">
                  <span class="nav-link-text ms-1">Kedatangan</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ Request::is('dashboard/keberangkatan*') ? 'active text-dark fw-bold' : 'text-white fw-bold' }}" href="/dashboard/keberangkatan">
                  <span class="nav-link-text ms-1">Keberangkatan</span>
                </a>
              </li>
              @endhasrole
        </ul>
        <ul class="navbar-nav d-flex justify-content-end ms-auto">
                {{-- <li class="nav-item d-flex align-items-center mx-4 text-white font-weight-bold">
                    @if (Auth::user()->role_id == 1)
                    <span>Admin by</span>
                    @endif
                </li> --}}
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
        </ul>
      </div>
    </div>
</nav>
