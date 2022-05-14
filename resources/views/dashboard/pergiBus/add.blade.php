@extends('dashboard.layouts.main')

@section('container')
<div class="row mb-4">
    <div class="mb-md-0 mb-4">
      <div class="card-transparant border border-success">
        <div class="row">
            <div class="d-inline col-md-6">
                <form action="/dashboard/kedatangan/create">
                    <div class="row">
                        <div class="input-group input-group-outline mb-3 my-3 mx-3 px-6">
                            <input name="search" type="text" class="form-control border-info" placeholder="Search ..." value="{{ request('search') }}">
                            <button class="btn btn-info bg-gradient text-white fw-bold">Search</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="d-inline col-md-6">
                <button class="btn btn-warning bg-gradient mb-3 my-3 mx-3 text-white fw-bold">Refresh</button>
            </div>
        </div>
        <div class="card-body px-0 pb-2 mx-3">
          <div class="table-responsive bg-transparant card mb-3">
            <table class="table table-bordered border-dark table-sm align-items-center mb-0">
              <thead>
                <tr class="bg-success">
                  <th class="text-center text-uppercase text-white text-xxs font-weight-bolder opacity-7">No</th>
                  <th class="text-center text-uppercase text-white text-xxs font-weight-bolder opacity-7">PO</th>
                  <th class="text-center text-uppercase text-white text-xxs font-weight-bolder opacity-7 ps-2">Nomor Kendaraan</th>
                  <th class="text-center text-uppercase text-white text-xxs font-weight-bolder opacity-7">Pengemudi</th>
                  <th class="text-center text-uppercase text-white text-xxs font-weight-bolder opacity-7">TRAYEK</th>
                  <th class="text-center text-uppercase text-white text-xxs font-weight-bolder opacity-7">Action</th>
                </tr>
              </thead>
              <tbody class="fw-bold" style="color: #413F42">
                  @foreach ($vehicles as $vehicle )
                  <tr>
                    <td  class="align-middle text-center text-sm">
                        <div class="d-flex justify-content-center">
                            {{ $loop->iteration }}
                        </div>
                    </td>
                    <td  class="align-middle text-center text-sm">
                      <div class="d-flex justify-content-center px-2 py-1">
                        <div class="d-flex justify-content-center">
                          <span class="mb-0 text-sm">{{ $vehicle->name_po }}</span>
                        </div>
                      </div>
                    </td>
                    <td  class="align-middle text-center text-sm">
                      <div class="d-flex justify-content-center px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <span class="mb-0 text-sm">{{ $vehicle->number_vehicle }}</span>
                          </div>
                      </div>
                    </td>
                    <td class="align-middle text-center text-sm">
                      <span class="text-xs font-weight-bold"> {{ $vehicle->driver }} </span>
                    </td>
                    <td  class="align-middle text-center text-sm">
                      <div class="d-flex justify-content-center px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <span class="mb-0 text-sm">{{ $vehicle->trayek }}</span>
                          </div>
                      </div>
                    </td>
                    <td>
                        <div class="d-flex justify-content-center px-2">
                            <a href="/dashboard/keberangkatanadd/{{ $vehicle->id }}">
                                <button type="button" class="btn btn-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="20" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16">
                                    <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                    </svg>
                                </button>
                            </a>
                        </div>
                    </td>
                  </tr>
                  @endforeach
              </tbody>
            </table>
            <div class="my-3 mx-3">
                {{ $vehicles->links() }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
