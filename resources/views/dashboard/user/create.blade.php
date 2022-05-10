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
                <div class="mb-3">
                    <label for="nip" class="form-label">NIP</label>
                    <input type="number" class="form-control @error('nip')
                    is-invalid
                    @enderror" id="nip" name="nip" value="{{ old('nip') }}" placeholder="Masukkan nip" required autofocus>
                    @error('nip')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control @error('name')
                    is-invalid
                    @enderror" id="name" name="name" value="{{ old('name') }}" placeholder="Masukkan nama" required>
                    @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control @error('email')
                    is-invalid
                    @enderror" id="email" name="email" value="{{ old('email') }}" placeholder="Masukkan email" required>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                        <label for="role" class="ms-0">Role User</label>
                        <select class="form-select @error('role')
                        is-invalid
                        @enderror" id="role" name="role">
                            <option selected disabled>Pilih Role User</option>
                            @foreach ($roles as $role)
                            <option value="{{ $role->name }}">{{ $role->name }}</option>
                            @endforeach
                        </select>
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control @error('password')
                    is-invalid
                    @enderror" id="password" name="password" required>
                    @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password-confirm" class="form-label">Confirm Password</label>
                    <input type="password" class="form-control @error('password-confirmation')
                    is-invalid
                    @enderror" id="password-confirm" name="password-confirmation" required>
                </div>
                <div class="row mx-auto mb-3">
                    <button type="submit" class="btn btn-primary">Register</button>
                </div>
              </form>
        </div>
    </div>
</div>
@endsection
