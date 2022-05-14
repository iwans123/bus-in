@extends('dashboard.layouts.main')

@section('container')
<div class="row d-flex justify-content-center">
    <div class="col-md-6">
        <div class="card border-success px-5">
            <div class="my-3 text-center">
                <h3>
                    Form Ubah Data Kendaraan
                </h3>
            </div>
            <form method="post" action="/dashboard/vehicles/{{ $vehicle->id }}">
                @method('put')
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
                        <input type="text" class="form-select @error('name_po')
                        is-invalid
                    @enderror" id="po" name="name_po" placeholder="Masukkan nama po" value="{{ $vehicle->name_po }}">
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
                        @if ($vehicle->location == 'Terminal')
                            <option disabled>Pilih Lokasi</option>
                            <option selected value="Terminal">Terminal</option>
                            <option value="Pool">Pool</option>
                        @elseif ($vehicle->location == 'Pool')
                            <option disabled>Pilih Lokasi</option>
                            <option value="Terminal">Terminal</option>
                            <option selected value="Pool">Pool</option>
                        @else
                            <option selected disabled>Pilih Lokasi</option>
                            <option value="Terminal">Terminal</option>
                            <option value="Pool">Pool</option>
                        @endif
                        </select>
                </div>
                <div class="mb-3">
                    <label for="namaLokasi" class="form-label">Nama Lokasi</label>
                    <input type="text" class="form-control @error('location_name')
                    is-invalid
                    @enderror" id="namaLokasi" name="location_name" placeholder="Masukkan nama lokasi" value="{{ $vehicle->location_name }}">
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
                        @enderror" id="noKendaraan" name="number_vehicle" placeholder="Masukkan nomor kendaraan" value="{{ $vehicle->number_vehicle }}">
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
                        @if ($vehicle->jenis_kendaraan == 'Reguler')
                            <option disabled>Pilih Jenis Kendaraan</option>
                            <option selected value="Reguler">Reguler</option>
                            <option value="Cadangan">Cadangan</option>
                        @elseif ($vehicle->jenis_kendaraan == 'Cadangan')
                            <option disabled>Pilih Jenis Kendaraan</option>
                            <option value="Reguler">Reguler</option>
                            <option selected value="Cadangan">Cadangan</option>
                        @else
                            <option selected disabled>Pilih Jenis Kendaraan</option>
                            <option value="Reguler">Reguler</option>
                            <option value="Cadangan">Cadangan</option>
                        @endif
                        </select>
                </div>
                <div class="mb-3">
                        <label for="namaPengemudi" class="form-label">Nama Pengemudi</label>
                        <input type="text" class="form-control @error('driver')
                        is-invalid
                        @enderror" id="namaPengemudi" name="driver" placeholder="Masukkan nama pengemudi" value="{{ $vehicle->driver }}">
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
                    @enderror" id="lahir" name="birthday" placeholder="Masukkan Tanggal lahir" value="{{ $vehicle->birthday }}">
                </div>
                <div class="mb-3">
                    <label for="stuk" class="form-label">No Telepon</label>
                    <input type="number" class="form-control @error('telephon')
                    is-invalid
                    @enderror" id="stuk" name="telephon" placeholder="Masukkan Nomor Telepon" value="{{ $vehicle->telephon }}">
                    @error('telephon')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                        <label for="stuk" class="form-label">No STUK</label>
                        <input type="text" class="form-control @error('number_stuk')
                        is-invalid
                        @enderror" id="stuk" name="number_stuk" placeholder="Masukkan nomor STUK" value="{{ $vehicle->number_stuk }}">
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
                        @if ($vehicle->jenis_angkutan == 'AKAP')
                            <option disabled>Pilih Jenis Angkutan</option>
                            <option selected value="AKAP">AKAP</option>
                            <option value="AKDP">AKDP</option>
                            <option value="Pariwisata">Pariwisata</option>
                        @elseif ($vehicle->jenis_angkutan == 'AKDP')
                            <option disabled>Pilih Jenis Angkutan</option>
                            <option value="AKAP">AKAP</option>
                            <option selected value="AKDP">AKDP</option>
                            <option value="Pariwisata">Pariwisata</option>
                        @elseif ($vehicle->jenis_angkutan == 'Pariwisata')
                            <option disabled>Pilih Jenis Angkutan</option>
                            <option value="AKAP">AKAP</option>
                            <option value="AKDP">AKDP</option>
                            <option selected value="Pariwisata">Pariwisata</option>
                        @else
                            <option selected disabled>Pilih Jenis Angkutan</option>
                            <option value="AKAP">AKAP</option>
                            <option value="AKDP">AKDP</option>
                            <option value="Pariwisata">Pariwisata</option>
                        @endif
                        </select>
                </div>
                <div class="mb-3">
                        <label for="trayek" class="form-label">Trayek</label>
                        <input type="text" class="form-control @error('trayek')
                        is-invalid
                        @enderror" id="trayek" name="trayek" placeholder="Masukkan trayek" value="{{ $vehicle->trayek }}">
                        @error('trayek')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                </div>
                <div class="row mb-3">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
        </div>
    </div>
</div>
@endsection
