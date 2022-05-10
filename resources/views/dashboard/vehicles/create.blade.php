@extends('dashboard.layouts.main')

@section('container')
<div class="row d-flex justify-content-center">
    <div class="col-md-6">
        <div class="card border-success px-5">
            <div class="my-3 text-center">
                <h3>
                    Form Tambah Data Kendaraan
                </h3>
            </div>
            <form method="post" action="/dashboard/vehicles">
                @csrf
                <div>
                    <label for="status" class="form-label"></label>
                    <input type="hidden" class="form-control"  id="status" name="firstStatus" value="">
                </div>
                <div>
                    <label for="status" class="form-label"></label>
                    <input type="hidden" class="form-control"  id="status" name="secondStatus" value="">
                </div>
                <div class="mb-3">
                        <label for="po" class="form-label">Nama PO</label>
                        <input type="text" class="form-control @error('name_po')
                        is-invalid
                    @enderror" id="po" name="name_po" placeholder="Masukkan nama po" value="{{ old('name_po') }}">
                    @error('name_po')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                        <label for="lokasi" class="ms-0">Lokasi</label>
                        <select class="form-select @error('location')
                        is-invalid
                      @enderror" id="lokasi" name="location">
                            <option selected disabled>Pilih Lokasi</option>
                            <option value="Terminal">Terminal</option>
                            <option value="Pool">Pool</option>
                        </select>
                </div>
                <div class="mb-3">
                    <label for="namaLokasi" class="form-label">Nama Lokasi</label>
                    <input type="text" class="form-control @error('location_name')
                    is-invalid
                    @enderror" id="namaLokasi" name="location_name" placeholder="Masukkan nama lokasi" value="{{ old('location_name') }}">
                    @error('location_name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                        <label for="noKendaraan" class="form-label">No Kendaraan</label>
                        <input type="text" class="form-control @error('number_vehicle')
                        is-invalid
                        @enderror" id="noKendaraan" name="number_vehicle" placeholder="Masukkan nomor kendaraan" value="{{ old('number_vehicle') }}">
                        @error('number_vehicle')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                </div>
                <div class="mb-3">
                        <label for="lokasi" class="ms-0">Jenis Kendaraan</label>
                        <select class="form-select @error('jenis_kendaraan')
                        is-invalid
                        @enderror" id="lokasi" name="jenis_kendaraan">
                            <option selected disabled>Pilih Jenis Kendaraan</option>
                            <option value="Reguler">Reguler</option>
                            <option value="Cadangan">Cadangan</option>
                        </select>
                </div>
                <div class="mb-3">
                        <label for="namaPengemudi" class="form-label">Nama Pengemudi</label>
                        <input type="text" class="form-control @error('driver')
                        is-invalid
                        @enderror" id="namaPengemudi" name="driver" placeholder="Masukkan nama pengemudi" value="{{ old('driver') }}">
                        @error('driver')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                </div>
                <div class="mb-3">
                    <label for="lahir">Tanggal Lahir</label>
                    <input type="date" class="form-control @error('birthday')
                    is-invalid
                    @enderror" id="lahir" name="birthday" placeholder="Masukkan Tanggal lahir">
                </div>
                <div class="mb-3">
                        <label for="stuk" class="form-label">No STUK</label>
                        <input type="text" class="form-control @error('number_stuk')
                        is-invalid
                        @enderror" id="stuk" name="number_stuk" placeholder="Masukkan nomor STUK" value="{{ old('number_stuk') }}">
                        @error('number_stuk')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                </div>
                <div class="mb-3">
                        <label for="lokasi" class="ms-0">Jenis Angkutan</label>
                        <select class="form-select @error('jenis_angkutan')
                        is-invalid
                        @enderror" id="lokasi" name="jenis_angkutan">
                            <option selected disabled>Pilih Jenis Angkutan</option>
                            <option value="AKAP">AKAP</option>
                            <option value="AKDP">AKDP</option>
                            <option value="Pariwisata">Pariwisata</option>
                        </select>
                </div>
                <div class="mb-3">
                        <label for="trayek" class="form-label">Trayek</label>
                        <input type="text" class="form-control @error('trayek')
                        is-invalid
                        @enderror" id="trayek" name="trayek" placeholder="Masukkan trayek" value="{{ old('trayek') }}">
                        @error('trayek')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                </div>
                <div class="row mb-3">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
        </div>
    </div>
</div>
@endsection
