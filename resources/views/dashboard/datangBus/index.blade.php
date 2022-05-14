@extends('dashboard.layouts.main')

@section('container')
<div class="row mb-4">
    <div class="mb-md-0">
      <div class="card-transparant border border-success">
        <div class="d-flex">
            <div class="my-3 mx-4">
                <a href="/dashboard/kedatangan/create" class="btn btn-info bg-gradient fw-bold">Add</a>
            </div>
            @hasanyrole('admin')
            <div class="my-3">
                <a href="/dashboard/kedatangan/exportexcel" class="btn btn-success bg-gradient fw-bold">Export</a>
            </div>
            @endhasanyrole
            <div class="my-3">
                <button class="btn btn-warning bg-gradient mx-3 text-white fw-bold" onclick='window.location.reload(true);'>Refresh</button>
            </div>
        </div>
        <div class="card-body px-0 pb-2 mx-3">
          <div class="table-responsive bg-transparant card mb-3">
            <table class="table table-bordered border-dark align-items-center mb-0">
              <thead>
                <tr class="bg-success bg-gradient">
                  <th class="text-center text-uppercase text-white text-xxs text-truncate font-weight-bolder opacity-7">No</th>
                  <th class="text-center text-uppercase text-white text-xxs text-truncate font-weight-bolder opacity-7">Tanggal</th>
                  <th class="text-center text-uppercase text-white text-xxs text-truncate font-weight-bolder opacity-7">Nama PO</th>
                  <th class="text-center text-uppercase text-white text-xxs text-truncate font-weight-bolder opacity-7">No. Kend</th>
                  <th class="text-center text-uppercase text-white text-xxs text-truncate font-weight-bolder opacity-7">Trayek</th>
                  <th class="text-center text-uppercase text-white text-xxs text-truncate font-weight-bolder opacity-7">Waktu</th>
                  <th class="text-center text-uppercase text-white text-xxs text-truncate font-weight-bolder opacity-7">Jumlah Penumpang</th>
                </tr>
              </thead>
              <tbody class="fw-bold" style="color: #413F42">
                  @foreach ($kedatangans as $kedatangan )
                  <tr>
                    <td>
                        <div class="d-flex justify-content-center">
                            {{ $loop->iteration }}
                        </div>
                    </td>
                    <td>
                        <div class="d-flex justify-content-center px-2 py-1">
                          <div class="d-flex justify-content-center">
                            <h6 class="mb-0 fw-bold">{{ $kedatangan->created_at->toDateString() }}</h6>
                          </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex justify-content-center px-2 py-1">
                          <div class="d-flex justify-content-center">
                            <h6 class="mb-0 fw-bold">{{ $kedatangan->name_po }}</h6>
                          </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex justify-content-center px-2 py-1">
                          <div class="d-flex justify-content-center">
                            <h6 class="mb-0 fw-bold">{{ $kedatangan->number_vehicle }}</h6>
                          </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex justify-content-center px-2 py-1">
                          <div class="d-flex justify-content-center">
                            <h6 class="mb-0 fw-bold">{{ $kedatangan->trayek }}</h6>
                          </div>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex justify-content-center px-2 py-1">
                          <div class="d-flex justify-content-center">
                            <h6 class="mb-0 fw-bold">{{ $kedatangan->created_at->toTimeString() }}</h6>
                          </div>
                        </div>
                    </td>
                    <td>
                      <div class="d-flex justify-content-center px-2 py-1">
                        <div class="d-flex justify-content-center">
                          <h6 class="mb-0 fw-bold">{{ $kedatangan->jumlahPenumpang }}</h6>
                        </div>
                      </div>
                    </td>
                  </tr>
                  @endforeach
              </tbody>
            </table>
            <div class="my-3 mx-3">
                {{ $kedatangans->links() }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
