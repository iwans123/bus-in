@extends('dashboard.layouts.main')

@section('container')
<div class="row mb-4">
    {{-- <div class="col-lg-8 col-md-6 mb-md-0 mb-4"> --}}
    <div class="mb-md-0 mb-4">
      <div class="card border-success">
        <div class="d-flex">
            <div class="my-4 mx-4">
                <a href="/dashboard/keberangkatan/create" class="btn btn-info my-3 fw-bold">Add</a>
            </div>
            <div class="my-4">
                <a href="/dashboard/keberangkatan/exportexcel" class="btn btn-success my-3 fw-bold">Export</a>
            </div>
            <div class="my-4">
                <button class="btn btn-warning mb-3 my-3 mx-3 text-white fw-bold" onclick='window.location.reload(true);'>Refresh</button>
            </div>
        </div>
        <div class="card-body px-0 pb-2 mx-3">
          <div class="table-responsive card mb-3">
            <table class="table align-items-center mb-0">
              <thead>
                <tr class="bg-success">
                  <th class="text-center text-uppercase text-white text-xxs text-truncate font-weight-bolder opacity-7">No</th>
                  <th class="text-center text-uppercase text-white text-xxs text-truncate font-weight-bolder opacity-7">Tanggal</th>
                  <th class="text-center text-uppercase text-white text-xxs text-truncate font-weight-bolder opacity-7">Nama PO</th>
                  <th class="text-center text-uppercase text-white text-xxs text-truncate font-weight-bolder opacity-7">No. Kend</th>
                  <th class="text-center text-uppercase text-white text-xxs text-truncate font-weight-bolder opacity-7">Trayek</th>
                  <th class="text-center text-uppercase text-white text-xxs text-truncate font-weight-bolder opacity-7">Waktu</th>
                  <th class="text-center text-uppercase text-white text-xxs text-truncate font-weight-bolder opacity-7">Jumlah Penumpang</th>
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
                            <h6 class="mb-0 text-sm">{{ $keberangkatan->created_at->toDateString() }}</h6>
                          </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex justify-content-center px-2 py-1">
                          <div class="d-flex justify-content-center">
                            <h6 class="mb-0 text-sm">{{ $keberangkatan->name_po }}</h6>
                          </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex justify-content-center px-2 py-1">
                          <div class="d-flex justify-content-center">
                            <h6 class="mb-0 text-sm">{{ $keberangkatan->number_vehicle }}</h6>
                          </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex justify-content-center px-2 py-1">
                          <div class="d-flex justify-content-center">
                            <h6 class="mb-0 text-sm">{{ $keberangkatan->trayek }}</h6>
                          </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex justify-content-center px-2 py-1">
                          <div class="d-flex justify-content-center">
                            <h6 class="mb-0 text-sm">{{ $keberangkatan->created_at->toTimeString() }}</h6>
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
                  </tr>
                  @endforeach
              </tbody>
            </table>
            <div class="my-3 mx-3">
                {{ $keberangkatans->links() }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
