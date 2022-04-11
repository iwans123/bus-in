@extends('dashboard.layouts.main')

@section('container')
<div class="row mb-4">
    {{-- <div class="col-lg-8 col-md-6 mb-md-0 mb-4"> --}}
    <div class="mb-md-0 mb-4">
      <div class="card">
        {{-- <div class="card-header pb-0">
          <div class="row">
            <div class="col-lg-6 col-7">
              <h6>Projects</h6>
              <p class="text-sm mb-0">
                <i class="fa fa-check text-info" aria-hidden="true"></i>
                <span class="font-weight-bold ms-1">30 done</span> this month
              </p>
            </div>
            <div class="col-lg-6 col-5 my-auto text-end">
              <div class="dropdown float-lg-end pe-4">
                <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-ellipsis-v text-secondary"></i>
                </a>
                <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                  <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
                  <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a></li>
                  <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else here</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div> --}}
        <div class="row">
            <div class="d-inline col-md-6">
                <form action="/dashboard/verifikasis">
                    <div class="input-group input-group-outline mb-3 my-3 mx-3 px-6">
                        <input name="search" type="text" class="form-control" placeholder="Search ..." value="{{ request('search') }}">
                        <button class="btn-lg btn-info">search</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="card-body px-0 pb-2">
          <div class="table-responsive">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">PO</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nomor Kendaraan</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Pengemudi</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($vehicles as $vehicle )
                  <tr>
                    <td>
                        <div class="d-flex justify-content-center">
                            {{ $loop->iteration }}
                        </div>
                    </td>
                    <td>
                        <div class="d-flex justify-content-center">
                          <h6 class="mb-0 text-sm">{{ $vehicle->name_po }}</h6>
                        </div>
                    </td>
                    <td>
                          <div class="d-flex justify-content-center">
                            <h6 class="mb-0 text-sm">{{ $vehicle->number_vehicle }}</h6>
                          </div>
                    </td>
                    <td class="align-middle text-center text-sm">
                      <span class="text-xs font-weight-bold"> {{ $vehicle->driver }} </span>
                    </td>
                    <td>
                        <div class="d-flex justify-content-center px-2 py-1">
                            <a href="/dashboard/verifikasis/{{ $vehicle->id }}">
                                <button type="button" class="btn btn-info btn-sm mx-1">Add</button>
                            </a>
                        </div>
                    </td>
                  </tr>
                  @endforeach
                {{-- <tr>
                  <td>
                    <div class="d-flex px-2 py-1">
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">2022</h6>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex px-2 py-1">
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">mukudu</h6>
                        </div>
                      </div>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="text-xs font-weight-bold"> ag3333dw </span>
                  </td>
                  <td class="align-middle">
                    <div class="d-flex px-2 py-1">
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">harapan jaya</h6>
                        </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex px-2 py-1">
                      <button type="button" class="btn btn-info btn-sm">detail</button>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>
                    <div class="d-flex px-2 py-1">
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">2022</h6>
                      </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex px-2 py-1">
                      <div class="d-flex flex-column justify-content-center">
                        <h6 class="mb-0 text-sm">mukuda</h6>
                      </div>
                    </div>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="text-xs font-weight-bold"> ag4444er </span>
                  </td>
                  <td class="align-middle">
                    <div class="d-flex px-2 py-1">
                        <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">harapan jaya</h6>
                        </div>
                    </div>
                  </td>
                  <td>
                    <div class="d-flex px-2 py-1">
                      <button type="button" class="btn btn-info btn-sm">detail</button>
                    </div>
                  </td>
                </tr> --}}
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
    {{-- <div class="col-lg-4 col-md-6">
      <div class="card h-100">
        <div class="card-header pb-0">
          <h6>Orders overview</h6>
          <p class="text-sm">
            <i class="fa fa-arrow-up text-success" aria-hidden="true"></i>
            <span class="font-weight-bold">24%</span> this month
          </p>
        </div>
        <div class="card-body p-3">
          <div class="timeline timeline-one-side">
            <div class="timeline-block mb-3">
              <span class="timeline-step">
                <i class="material-icons text-success text-gradient">notifications</i>
              </span>
              <div class="timeline-content">
                <h6 class="text-dark text-sm font-weight-bold mb-0">$2400, Design changes</h6>
                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">22 DEC 7:20 PM</p>
              </div>
            </div>
            <div class="timeline-block mb-3">
              <span class="timeline-step">
                <i class="material-icons text-danger text-gradient">code</i>
              </span>
              <div class="timeline-content">
                <h6 class="text-dark text-sm font-weight-bold mb-0">New order #1832412</h6>
                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">21 DEC 11 PM</p>
              </div>
            </div>
            <div class="timeline-block mb-3">
              <span class="timeline-step">
                <i class="material-icons text-info text-gradient">shopping_cart</i>
              </span>
              <div class="timeline-content">
                <h6 class="text-dark text-sm font-weight-bold mb-0">Server payments for April</h6>
                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">21 DEC 9:34 PM</p>
              </div>
            </div>
            <div class="timeline-block mb-3">
              <span class="timeline-step">
                <i class="material-icons text-warning text-gradient">credit_card</i>
              </span>
              <div class="timeline-content">
                <h6 class="text-dark text-sm font-weight-bold mb-0">New card added for order #4395133</h6>
                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">20 DEC 2:20 AM</p>
              </div>
            </div>
            <div class="timeline-block mb-3">
              <span class="timeline-step">
                <i class="material-icons text-primary text-gradient">key</i>
              </span>
              <div class="timeline-content">
                <h6 class="text-dark text-sm font-weight-bold mb-0">Unlock packages for development</h6>
                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">18 DEC 4:54 AM</p>
              </div>
            </div>
            <div class="timeline-block">
              <span class="timeline-step">
                <i class="material-icons text-dark text-gradient">payments</i>
              </span>
              <div class="timeline-content">
                <h6 class="text-dark text-sm font-weight-bold mb-0">New order #9583120</h6>
                <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">17 DEC</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> --}}
  </div>
@endsection
