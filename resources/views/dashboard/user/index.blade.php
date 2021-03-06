@extends('dashboard.layouts.main')

@section('container')
<div class="row mb-4">
    <div class="mb-md-0 mb-4">
      <div class="card-transparant border border-success">
        <div class="flex">
            <div class="mx-3 my-3">
                <a href="/dashboard/user/create" class="btn btn-info bg-gradient fw-bold">Add User</a>
            </div>
        </div>
        <div class="card-body px-0 pb-2 mx-3">
          <div class="table-responsive bg-transparant card mb-3">
            <table class="table table-bordered border-dark align-items-center mb-0">
              <thead>
                <tr class="bg-success bg-gradient">
                    <th class="text-center text-uppercase text-white text-xxs font-weight-bolder opacity-7">No</th>
                    <th class="text-center text-uppercase text-white text-xxs font-weight-bolder opacity-7">Date</th>
                    <th class="text-center text-uppercase text-white text-xxs font-weight-bolder opacity-7">Nama</th>
                    <th class="text-center text-uppercase text-white text-xxs font-weight-bolder opacity-7">Email</th>
                    <th class="text-center text-uppercase text-white text-xxs font-weight-bolder opacity-7">NIP</th>
                    <th class="text-center text-uppercase text-white text-xxs font-weight-bolder opacity-7">Role</th>
                    <th class="text-center text-uppercase text-white text-xxs font-weight-bolder opacity-7">Action</th>
                </tr>
              </thead>
              <tbody class="fw-bold" style="color: #413F42">
                  @foreach ($users as $user )
                  <tr>
                    <td class="align-middle text-center">
                        <div class="d-flex justify-content-center">
                            {{ $loop->iteration }}
                        </div>
                    </td>
                    <td class="align-middle text-center">
                        <div class="d-flex justify-content-center">
                          <h6 class="mb-0 fw-bold">{{ $user->created_at->toDateString() }}</h6>
                        </div>
                    </td>
                    <td class="align-middle text-center">
                        <div class="d-flex justify-content-center">
                            <h6 class="mb-0 fw-bold">{{ $user->name }}</h6>
                        </div>
                    </td>
                    <td class="align-middle text-center">
                        <div class="d-flex justify-content-center">
                            <h6 class="mb-0 fw-bold">{{ $user->email }}</h6>
                        </div>
                    </td>
                    <td class="align-middle text-center">
                        <div class="d-flex justify-content-center">
                            <h6 class="mb-0 fw-bold">{{ $user->nip }}</h6>
                        </div>
                    </td>
                    <td class="align-middle text-center">
                        <div class="d-flex justify-content-center">
                            @if ($user->hasRole('admin'))
                                <h6 class="mb-0 fw-bold text-uppercase">ADMIN</h6>
                            @elseif ($user->hasRole('ppns'))
                                <h6 class="mb-0 fw-bold text-uppercase">PPNS</h6>
                            @elseif ($user->hasRole('penguji'))
                                <h6 class="mb-0 fw-bold text-uppercase">PENGUJI</h6>
                            @elseif ($user->hasRole('post'))
                                <h6 class="mb-0 fw-bold text-uppercase">POST</h6>
                            @endif
                        </div>
                    </td>
                    <td class="align-middle text-center text-sm">
                        <div class="d-flex justify-content-center px-2">
                            @if (!$user->hasRole('admin'))
                            <form action="/dashboard/user/{{ $user->id }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger bg-gradient btn-sm mx-1 fw-bold">delete</button>
                            </form>
                            @else
                                <span class="btn btn-outline-danger">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation" viewBox="0 0 16 16">
                                    <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.553.553 0 0 1-1.1 0L7.1 4.995z"/>
                                    </svg>
                                </span>
                            @endif
                        </div>
                    </td>
                  </tr>
                  @endforeach
              </tbody>
            </table>
            <div class="my-3 mx-3">
                {{ $users->links() }}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
