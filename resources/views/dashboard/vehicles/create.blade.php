@extends('dashboard.layouts.main')

@section('container')
<div class="row d-flex justify-content-center">
    <div class="col-md-6">
        <div class="card px-5">
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
                <div class="mb-5">
                    <div class="input-group input-group-static my-3 is-focused @error('name_po')
                            is-invalid
                        @enderror">
                        <label for="po" class="form-label">PO</label>
                        <input type="text" class="form-control" id="po" name="name_po" value="{{ old('name_po') }}">
                    </div>
                    @error('name_po')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-5">
                    <div class="input-group input-group-static mb-3 is-focused @error('location')
                          is-invalid
                        @enderror">
                        <label for="lokasi" class="ms-0">Lokasi</label>
                        <select class="form-control" id="lokasi" name="location">
                            <option selected disabled>Pilih Lokasi</option>
                            <option value="Terminal">Terminal</option>
                            <option value="Pool">Pool</option>
                        </select>
                    </div>
                </div>
                <div class="mb-5">
                  <div class="input-group input-group-static my-3 is-focused @error('location_name')
                      is-invalid
                      @enderror">
                    <label for="namaLokasi" class="form-label">Nama Lokasi</label>
                    <input type="text" class="form-control" id="namaLokasi" name="location_name">
                  </div>
                  @error('location_name')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                  @enderror
                </div>
                <div class="mb-5">
                    <div class="input-group input-group-static my-3 is-focused @error('number_vehicle')
                            is-invalid
                        @enderror">
                        <label for="noKendaraan" class="form-label">No Kendaraan</label>
                        <input type="text" class="form-control" id="noKendaraan" name="number_vehicle">
                    </div>
                    @error('number_vehicle')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-5">
                    <div class="input-group input-group-static mb-3 is-focused @error('jenis_kendaraan')
                        is-invalid
                        @enderror">
                        <label for="lokasi" class="ms-0">Jenis Kendaraan</label>
                        <select class="form-control" id="lokasi" name="jenis_kendaraan">
                            <option selected disabled>Pilih Jenis Kendaraan</option>
                            <option value="Reguler">Reguler</option>
                            <option value="Cadangan">Cadangan</option>
                        </select>
                    </div>
                </div>
                <div class="mb-5">
                    <div class="input-group input-group-static my-3 is-focused @error('driver')
                        is-invalid
                        @enderror">
                        <label for="namaPengemudi" class="form-label">Nama Pengemudi</label>
                        <input type="text" class="form-control" id="namaPengemudi" name="driver">
                    </div>
                    @error('driver')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-5">
                    <div class="input-group input-group-static my-3 is-focused @error('birthday')
                            is-invalid
                        @enderror">
                      <label for="lahir">Tgl Lahir</label>
                      <input type="date" class="form-control" id="lahir" name="birthday">
                    </div>
                </div>
                <div class="mb-5">
                    <div class="input-group input-group-static my-3 is-focused @error('number_stuk')
                            is-invalid
                        @enderror">
                        <label for="stuk" class="form-label">No STUK</label>
                        <input type="text" class="form-control" id="stuk" name="number_stuk">
                    </div>
                    @error('number_stuk')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-5">
                    <div class="input-group input-group-static mb-3 is-focused @error('jenis_angkutan')
                            is-invalid
                        @enderror">
                        <label for="lokasi" class="ms-0">Jenis Angkutan</label>
                        <select class="form-control" id="lokasi" name="jenis_angkutan">
                            <option selected disabled>Pilih Jenis Angkutan</option>
                            <option value="AKAP">AKAP</option>
                            <option value="AKDP">AKDP</option>
                            <option value="Pariwisata">Pariwisata</option>
                        </select>
                    </div>
                </div>
                <div class="mb-5">
                    <div class="input-group input-group-static my-3 is-focused @error('trayek')
                            is-invalid
                        @enderror">
                        <label for="trayek" class="form-label">Trayek</label>
                        <input type="text" class="form-control" id="trayek" name="trayek">
                    </div>
                    @error('trayek')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                  <button type="submit" class="btn btn-info">Submit</button>
              </form>
        </div>
    </div>
</div>
@endsection
