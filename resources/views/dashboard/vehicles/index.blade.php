@extends('dashboard.layouts.main')

@section('container')
<div class="row mb-4">
    {{-- <div class="col-lg-8 col-md-6 mb-md-0 mb-4"> --}}
    <div class="mb-md-0 mb-4">
      <div class="card border-success">
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
        <div class="flex">
            <div class="mx-3 my-4">
                <a href="/dashboard/vehicles/create" class="btn btn-info bg-gradient fw-bold">Add Vehicle</a>
            </div>
        </div>
        <div class="card-body px-0 pb-2 mx-3">
          <div class="table-responsive card mb-3">
            <table class="table align-items-center mb-0">
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
                          <h6 class="mb-0 text-sm">{{ $vehicle->created_at->toDateString() }}</h6>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex justify-content-center">
                            <h6 class="mb-0 text-sm">{{ $vehicle->driver }}</h6>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex justify-content-center">
                            <h6 class="mb-0 text-sm">{{ $vehicle->number_vehicle }}</h6>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex justify-content-center">
                            <h6 class="mb-0 text-sm">{{ $vehicle->name_po }}</h6>
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
