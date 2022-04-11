@extends('dashboard.layouts.main')

@section('container')
<div class="row mb-4">
    <div class="mb-md-0 mb-4">
      <div class="card">
        <div class="flex">
            <div class="mx-3 my-4">
                <a href="/dashboard/user/create" class="btn-lg btn-info">Add User</a>
            </div>
        </div>
        <div class="card-body px-0 pb-2">
          <div class="table-responsive">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Date</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nama</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Role User</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($users as $user )
                  <tr>
                    <td>
                        <div class="d-flex justify-content-center">
                            {{ $loop->iteration }}
                        </div>
                    </td>
                    <td>
                        <div class="d-flex justify-content-center">
                          <h6 class="mb-0 text-sm">{{ $user->created_at->toDateString() }}</h6>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex justify-content-center">
                            <h6 class="mb-0 text-sm">{{ $user->name }}</h6>
                        </div>
                    </td>
                    <td>
                        <div class="d-flex justify-content-center">
                            <h6 class="mb-0 text-sm">{{ $user->roleName }}</h6>
                        </div>
                    </td>
                    <td>
                        {{-- <div class="d-flex justify-content-center px-2 py-1">
                            <a href="/dashboard/vehicles/{{ $vehicle->id }}">
                                <button type="button" class="btn btn-info btn-sm mx-1">detail</button>
                            </a>
                            <a href="/dashboard/vehicles/{{ $vehicle->id }}/edit">
                                <button type="button" class="btn btn-warning btn-sm mx-1">edit</button>
                            </a>
                          <form action="/dashboard/vehicles/{{ $vehicle->id }}" method="post" class="d-inline">
                              @method('delete')
                              @csrf
                              <button class="btn btn-danger btn-sm mx-1">delete</button>
                          </form>
                        </div> --}}
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
