@extends('dashboard.layouts.main')

@section('container')
<div class="row mb-4">
    {{-- <div class="col-lg-8 col-md-6 mb-md-0 mb-4"> --}}
    <div class="mb-md-0 mb-4">
      <div class="card">
        <div class="row">
            <div class="d-inline col-md-6">
                <form action="/dashboard/kedatangan/create">
                    <div class="row">
                        <div class="input-group input-group-outline mb-3 my-3 mx-3 px-6">
                            <input name="search" type="text" class="form-control" placeholder="Search ..." value="{{ request('search') }}">
                            <button class="btn-lg btn-info">search</button>
                        </div>
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
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">TRAYEK</th>
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
                      <div class="d-flex justify-content-center px-2 py-1">
                        <div class="d-flex justify-content-center">
                          <h6 class="mb-0 text-sm">{{ $vehicle->name_po }}</h6>
                        </div>
                      </div>
                    </td>
                    <td>
                      <div class="d-flex justify-content-center px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{ $vehicle->number_vehicle }}</h6>
                          </div>
                      </div>
                    </td>
                    <td class="align-middle text-center text-sm">
                      <span class="text-xs font-weight-bold"> {{ $vehicle->driver }} </span>
                    </td>
                    <td class="align-middle">
                      <div class="d-flex justify-content-center px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm">{{ $vehicle->trayek }}</h6>
                          </div>
                      </div>
                    </td>
                    <td>
                        <div class="d-flex justify-content-center px-2 py-1">
                            <a href="/dashboard/kedatanganadd/{{ $vehicle->id }}">
                                <button type="button" class="btn btn-info btn-sm mx-1">Add</button>
                            </a>
                        </div>
                    </td>
                  </tr>
                  @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
