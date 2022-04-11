@extends('dashboard.layouts.main')

@section('container')
<div class="card px-5">
    <form method="post" action="/dashboard/vehicles/{{ $vehicle->id }}">
        @method('put')
        @csrf
        <div class="row">
          <div class="col-md-6">
            <div class="input-group input-group-outline my-3">
              <label for="date" class="form-label"></label>
              <input type="date" class="form-control" id="date" name="update_at" value="{{ $vehicle->update_at }}">
            </div>
          </div>
          <div class="col-md-6">
            <div class="input-group input-group-outline my-3">
              <label for="po" class="form-label">PO</label>
              <input type="text" class="form-control" id="po" name="name_po" value="{{ $vehicle->name_po }}">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="input-group input-group-outline my-3">
              <label for="lokasi" class="form-label">Lokasi</label>
              <input type="text" class="form-control" id="lokasi" name="location">
            </div>
          </div>
          <div class="col-md-6">
            <div class="input-group input-group-outline my-3">
              <label for="namaLokasi" class="form-label">Nama Lokasi</label>
              <input type="text" class="form-control" id="namaLokasi" name="location_name">
            </div>
          </div>
        </div>
        <div class="row">
            <div class="col-md-6">
              <div class="input-group input-group-outline my-3">
                <label for="noKendaraan" class="form-label">No Kendaraan</label>
                <input type="text" class="form-control" id="noKendaraan" name="number_vehicle">
              </div>
            </div>
            <div class="col-md-6">
              <div class="input-group input-group-outline my-3">
                <label for="jenisKendaraan" class="form-label">Jenis Kendaraan</label>
                <input type="text" class="form-control" id="jenisKendaraan" name="jenis_kendaraan">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="input-group input-group-outline my-3">
                <label for="namaPengemudi" class="form-label">Nama Pengemudi</label>
                <input type="text" class="form-control" id="namaPengemudi" name="driver">
              </div>
            </div>
            <div class="col-md-6">
                <div class="input-group input-group-static my-3">
                  <label for="lahir">Tgl Lahir</label>
                  <input type="date" class="form-control" id="lahir" name="birthday">
                </div>
              </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="input-group input-group-outline my-3">
                <label for="stuk" class="form-label">No STUK</label>
                <input type="text" class="form-control" id="stuk" name="number_stuk">
              </div>
            </div>
            <div class="col-md-6">
                <div class="input-group input-group-outline my-3">
                  <label for="jenisAngkutan" class="form-label">Jenis Angkutan</label>
                  <input type="text" class="form-control" id="jenisAngkutan" name="jenis_angkutan">
                </div>
              </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="input-group input-group-outline my-3">
                <label for="trayek" class="form-label">Trayek</label>
                <input type="text" class="form-control" id="trayek" name="trayek">
              </div>
            </div>
          </div>

          <button type="submit" class="btn btn-info">Submit</button>
      </form>
</div>
@endsection
