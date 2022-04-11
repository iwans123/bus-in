@extends('dashboard.layouts.main')

@section('container')
<div class="row d-flex justify-content-center">
    <div class="col-md-6">
        <div class="card px-5">
            <div class="my-3 text-center">
                <h3>
                    Form Tambah Data User
                </h3>
            </div>
            <form method="post" action="/dashboard/user">
                @csrf
                <div class="mb-5">
                    <div class="input-group input-group-static my-3 is-focused @error('name')
                            is-invalid
                        @enderror">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required autofocus>
                    </div>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-5">
                  <div class="input-group input-group-static my-3 is-focused @error('email')
                      is-invalid
                      @enderror">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                  </div>
                  @error('email')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                  @enderror
                </div>
                <div class="mb-5">
                    <div class="input-group input-group-static mb-3 is-focused @error('role')
                          is-invalid
                        @enderror">
                        <label for="role" class="ms-0">Role User</label>
                        <select class="form-control" id="role" name="role_id">
                            <option selected disabled>Pilih Role User</option>
                            @foreach ($roles as $role)
                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mb-5">
                    <div class="input-group input-group-static my-3 is-focused @error('number_vehicle')
                            is-invalid
                        @enderror">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-5">
                    <div class="input-group input-group-static my-3 is-focused @error('driver')
                        is-invalid
                        @enderror">
                        <label for="password-confirm" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="password-confirm" name="password-confirmation" required>
                    </div>
                </div>
                  <button type="submit" class="btn btn-info">Register</button>
              </form>
        </div>
    </div>
</div>
@endsection
