@extends('dashboard.layouts.main')

@section('container')
<div class="row mb-4">
    {{-- <div class="col-lg-8 col-md-6 mb-md-0 mb-4"> --}}
    <div class="mb-md-0 mb-4">
      <div class="card">
        <div class="d-flex">
            <div class="my-4 mx-4">
                <a href="/dashboard/keberangkatan/create" class="btn-lg btn-info my-3">Add</a>
            </div>
            <div class="my-4">
                <a href="" class="btn-lg btn-success my-3">Export</a>
            </div>
            {{-- <div class="col-md-6">
                <form action="/dashboard/keberangkatan">
                    <div class="input-group input-group-outline mb-3 my-3 mx-3 px-6">
                        <input name="search" type="text" class="form-control" placeholder="Search ..." value="{{ request('search') }}">
                        <button class="btn-lg btn-info">search</button>
                    </div>
                </form>
            </div> --}}
        </div>
        <div class="card-body px-0 pb-2">
          <div class="table-responsive">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No Kendaraan</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jumlah Penumpang</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($keberangkatans as $keberangkatan )
                  <tr>
                    <td>
                        <div class="d-flex justify-content-center">
                            {{ $loop->iteration }}
                        </div>
                    </td>
                    <td>
                        <div class="d-flex justify-content-center px-2 py-1">
                          <div class="d-flex justify-content-center">
                            <h6 class="mb-0 text-sm">{{ $keberangkatan->vehicle->number_vehicle }}</h6>
                          </div>
                        </div>
                      </td>
                    <td>
                      <div class="d-flex justify-content-center px-2 py-1">
                        <div class="d-flex justify-content-center">
                          <h6 class="mb-0 text-sm">{{ $keberangkatan->jumlahPenumpang }}</h6>
                        </div>
                      </div>
                    </td>
                    <td>
                        <div class="d-flex justify-content-center px-2 py-1">
                            <a href="/dashboard/keberangkatan/{{ $keberangkatan->id }}">
                                <button type="button" class="btn btn-info btn-sm mx-1">Detail</button>
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
