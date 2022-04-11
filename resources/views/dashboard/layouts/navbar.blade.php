<nav class="navbar navbar-main bg-gradient-info navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
    <div class="container-fluid py-1 px-3">
      {{-- <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
          <li class="breadcrumb-item text-sm"><a class="text-white" href="javascript:;">Pages</a></li>
          <li class="breadcrumb-item text-sm text-white active" aria-current="page">Dashboard</li>
        </ol>
        <h6 class="font-weight-bolder mb-0">Dashboard</h6>
      </nav> --}}
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
        {{-- <div class="ms-md-auto pe-md-3 d-flex align-items-center">
          <div class="input-group input-group-outline">
            <label class="form-label">Type here...</label>
            <input type="text" class="form-control">
          </div>
        </div> --}}
        <ul class="navbar-nav d-flex justify-content-end ms-auto">
          {{-- <li class="nav-item d-flex align-items-center">
            <a href="javascript:;" class="nav-link text-body font-weight-bold px-0">
              <i class="fa fa-user me-sm-1"></i>
              <span class="d-sm-inline d-none">Sign In</span>
            </a>
          </li> --}}
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
          {{-- <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
            <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
              <div class="sidenav-toggler-inner">
                <i class="sidenav-toggler-line"></i>
                <i class="sidenav-toggler-line"></i>
                <i class="sidenav-toggler-line"></i>
              </div>
            </a>
          </li> --}}
        </ul>
      </div>
    </div>
  </nav>
