@extends('dashboard.layouts.main')

@section('container')
<div class="row mb-4">
    <div class="mb-md-0">
      <div class="card-transparant border border-success">
        <div class="flex">
            <div class="mx-3 my-3">
                <a href="/dashboard/vehicles/create" class="btn btn-info bg-gradient fw-bold">Add Vehicle</a>
            </div>
        </div>
        <div class="card-body px-0 pb-2 mx-3">
          <div class="table-responsive bg-transparant card mb-3">
            <table class="table table-bordered border-dark table-sm align-middle align-items-center mb-0">
              <thead>
                <tr class="bg-success">
                    <th class="text-center text-uppercase text-white text-xxs text-truncate font-weight-bolder opacity-7">No</th>
                    <th class="text-center text-uppercase text-white text-xxs text-truncate font-weight-bolder opacity-7">Date</th>
                    <th class="text-center text-uppercase text-white text-xxs text-truncate font-weight-bolder opacity-7 ps-2">Pengemudi</th>
                    <th class="text-center text-uppercase text-white text-xxs text-truncate font-weight-bolder opacity-7">No Kendaraan</th>
                    <th class="text-center text-uppercase text-white text-xxs text-truncate font-weight-bolder opacity-7">PO</th>
                    <th class="text-center text-uppercase text-white text-xxs text-truncate font-weight-bolder opacity-7">Action</th>
                </tr>
              </thead>
              <tbody style="color: #413F42">
                  @foreach ($vehicles as $vehicle )
                  <tr>
                    <td>
                        <div class="d-flex justify-content-center">
                            <h6 class="mb-0 fw-bold">{{ $loop->iteration }}</h6>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex justify-content-center">
                          <h6 class="mb-0 fw-bold">{{ $vehicle->created_at->toDateString() }}</h6>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex justify-content-center">
                            <h6 class="mb-0 fw-bold">{{ $vehicle->driver }}</h6>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex justify-content-center">
                            <h6 class="mb-0 fw-bold">{{ $vehicle->number_vehicle }}</h6>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex justify-content-center">
                            <h6 class="mb-0 fw-bold">{{ $vehicle->name_po }}</h6>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex justify-content-center px-2 py-1">
                            <a href="/dashboard/vehicles/{{ $vehicle->id }}">
                                <button type="button" class="btn btn-info bg-gradient btn-sm mx-1 fw-bold">detail</button>
                            </a>
                            <a href="/dashboard/vehicles/{{ $vehicle->id }}/edit">
                                <button type="button" class="btn btn-warning bg-gradient btn-sm mx-1 fw-bold">edit</button>
                            </a>
                          <form action="/dashboard/vehicles/{{ $vehicle->id }}" method="post" class="d-inline">
                              @method('delete')
                              @csrf
                              <button class="btn btn-danger bg-gradient btn-sm mx-1 fw-bold">delete</button>
                          </form>
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
