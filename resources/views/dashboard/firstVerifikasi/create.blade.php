@extends('dashboard.layouts.main')

@section('container')
<div class="card px-5">
    <div class="row gx-4 mb-2">
        <div class="col-auto">
            <div class="avatar avatar-xl position-relative">
                <img src="../assets/img/bruce-mars.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
            </div>
        </div>
        <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">
                {{ $vehicle->driver }}
              </h5>
              <p class="mb-0 font-weight-normal text-sm">
                CEO / Co-Founder
              </p>
            </div>
          </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        {{-- <div class="input-group input-group-outline my-3">
          <label for="date" class="form-label">{{ $vehicle->update_at }}</label>
          <input class="form-control" id="date" name="update_at" disabled>
        </div> --}}
        <div class="input-group input-group-static my-3">
            <label for="lahir">Update At</label>
            <input class="form-control" id="lahir" name="birthday" value="{{ $vehicle->update_at }}" disabled>
        </div>
      </div>
      <div class="col-md-3">
        <div class="input-group input-group-static my-3">
            <label for="lahir">PO</label>
            <input class="form-control" id="lahir" name="birthday" value="{{ $vehicle->name_po }}" disabled>
        </div>
      </div>
      <div class="col-md-3">
        <div class="input-group input-group-static my-3">
            <label for="lahir">Lokasi</label>
            <input class="form-control" id="lahir" name="birthday" value="{{ $vehicle->location }}" disabled>
        </div>
      </div>
      <div class="col-md-3">
        <div class="input-group input-group-static my-3">
            <label for="lahir">Nama Lokasi</label>
            <input class="form-control" id="lahir" name="birthday" value="{{ $vehicle->location_name }}" disabled>
        </div>
      </div>
    </div>
    <div class="row">
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="input-group input-group-static my-3">
                <label for="lahir">No Kendaraan</label>
                <input class="form-control" id="lahir" name="birthday" value="{{ $vehicle->number_vehicle }}" disabled>
            </div>
        </div>
        <div class="col-md-3">
            <div class="input-group input-group-static my-3">
                <label for="lahir">Jenis Kendaraan</label>
                <input class="form-control" id="lahir" name="birthday" value="{{ $vehicle->jenis_kendaraan }}" disabled>
            </div>
        </div>
        <div class="col-md-3">
            <div class="input-group input-group-static my-3">
                <label for="lahir">Tgl Lahir</label>
                <input class="form-control" id="lahir" name="birthday" value="{{ $vehicle->birthday }}" disabled>
            </div>
        </div>
        <div class="col-md-3">
            <div class="input-group input-group-static my-3">
                <label for="lahir">No STUK</label>
                <input class="form-control" id="lahir" name="birthday" value="{{ $vehicle->number_stuk }}" disabled>
            </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
            {{-- <div class="input-group input-group-static my-3">
                <label for="lahir">Nama Pengemudi</label>
                <input class="form-control" id="lahir" name="birthday" value="{{ $vehicle->driver }}" disabled>
            </div> --}}
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
            <div class="input-group input-group-static my-3">
                <label for="lahir">Jenis Angkutan</label>
                <input class="form-control" id="lahir" name="birthday" value="{{ $vehicle->jenis_angkutan }}" disabled>
            </div>
          </div>
          <div class="col-md-3">
              <div class="input-group input-group-static my-3">
                  <label for="lahir">Trayek</label>
                  <input class="form-control" id="lahir" name="birthday" value="{{ $vehicle->trayek }}" disabled>
              </div>
          </div>
      </div>
      <div class="row">
      </div>
</div>
<form method="post" action="/dashboard/verifikasis">
    @csrf
    <div class="input-group input-group-outline my-3">
        <label class="form-label"></label>
        <input name="vehicle_id" type="hidden" class="form-control hiden" value="{{ $vehicle->id }}">
    </div>
    <div class="card px-5">
        <div class="my-3">
            <h3>
                Form Ramcheck
            </h3>
        </div>
        <div class="table-responsive">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">NO</th>
                  <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7 ps-2">KRITERIA</th>
                  <th class="text-center text-uppercase text-white text-xs font-weight-bolder bg-success">DIIJINKAN OPEARASIONAL</th>
                  <th class="text-center text-uppercase text-white text-xs font-weight-bolder bg-danger">TILANG & DILARANG OPERASIONAL</th>
                  <th class="text-center text-uppercase text-secondary text-xs font-weight-bolder">KETERANGAN</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <div class="d-flex px-2 py-1">
                      <span>1</span>
                    </div>
                  </td>
                  <td>
                    <p class="font-weight-bold mb-0">Kartu uji / STUK</p>
                  </td>
                  <td class="align-middle text-center">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="ada" name="kartu_uji" id="customRadio1">
                        <label class="custom-control-label" for="customRadio1">ada, berlaku</label>
                    </div>
                  </td>
                  <td class="align-middle text-center">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" value="tidak ada" name="kartu_uji" id="customRadio1">
                        <label class="custom-control-label" for="customRadio1">Tidak ada</label>
                        <input class="form-check-input" type="radio" value="tidak berlaku" name="kartu_uji" id="customRadio1">
                        <label class="custom-control-label" for="customRadio1">Tidak berlaku</label>
                        <input class="form-check-input" type="radio" value="tidak sesuai fisik" name="kartu_uji" id="customRadio1">
                        <label class="custom-control-label" for="customRadio1">Tidak sesuai fisik</label>
                    </div>
                  </td>
                  <td class="align-middle">
                  </td>
                </tr>
                <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <span>2</span>
                      </div>
                    </td>
                    <td>
                      <p class="font-weight-bold mb-0">KP. Reguler</p>
                    </td>
                    <td class="align-middle text-center">
                      <div class="form-check">
                          <input class="form-check-input" type="radio" value="ada" name="kp_reguler" id="customRadio1">
                          <label class="custom-control-label" for="customRadio1">ada, berlaku</label>
                      </div>
                    </td>
                    <td class="align-middle text-center">
                      <div class="form-check">
                          <input class="form-check-input" type="radio" value="tidak ada" name="kp_reguler" id="customRadio1">
                          <label class="custom-control-label" for="customRadio1">Tidak ada</label>
                          <input class="form-check-input" type="radio" value="tidak berlaku" name="kp_reguler" id="customRadio1">
                          <label class="custom-control-label" for="customRadio1">Tidak berlaku</label>
                          <input class="form-check-input" type="radio" value="tidak sesuai fisik" name="kp_reguler" id="customRadio1">
                          <label class="custom-control-label" for="customRadio1">Tidak sesuai fisik</label>
                      </div>
                    </td>
                    <td class="align-middle">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <span>3</span>
                      </div>
                    </td>
                    <td>
                      <p class="font-weight-bold mb-0">KP.Cadangan</p>
                    </td>
                    <td class="align-middle text-center">
                      <div class="form-check">
                          <input class="form-check-input" type="radio" value="ada" name="kp_cadangan" id="customRadio1">
                          <label class="custom-control-label" for="customRadio1">ada, berlaku</label>
                      </div>
                    </td>
                    <td class="align-middle text-center">
                      <div class="form-check">
                          <input class="form-check-input" type="radio" value="tidak ada" name="kp_cadangan" id="customRadio1">
                          <label class="custom-control-label" for="customRadio1">Tidak ada</label>
                          <input class="form-check-input" type="radio" value="tidak berlaku" name="kp_cadangan" id="customRadio1">
                          <label class="custom-control-label" for="customRadio1">Tidak berlaku</label>
                          <input class="form-check-input" type="radio" value="tidak sesuai fisik" name="kp_cadangan" id="customRadio1">
                          <label class="custom-control-label" for="customRadio1">Tidak sesuai fisik</label>
                      </div>
                    </td>
                    <td class="align-middle">
                    </td>
                  </tr>
                  <tr>
                    <td>
                      <div class="d-flex px-2 py-1">
                        <span>4</span>
                      </div>
                    </td>
                    <td>
                      <p class="font-weight-bold mb-0">SIM Pengemudi</p>
                    </td>
                    <td class="align-middle text-center">
                      <div class="form-check">
                          <input class="form-check-input" type="radio" value="A umum" name="sim_pengemudi" id="customRadio1">
                          <label class="custom-control-label" for="customRadio1">A umum</label>
                          <input class="form-check-input" type="radio" value="B umum" name="sim_pengemudi" id="customRadio1">
                          <label class="custom-control-label" for="customRadio1">B umum</label>
                          <input class="form-check-input" type="radio" value="C umum" name="sim_pengemudi" id="customRadio1">
                          <label class="custom-control-label" for="customRadio1">C umum</label>
                      </div>
                    </td>
                    <td class="align-middle text-center">
                      <div class="form-check">
                          <input class="form-check-input" type="radio" value="sim tidak sesuai" name="sim_pengemudi" id="customRadio1">
                          <label class="custom-control-label" for="customRadio1">SIM tidak sesuai</label>
                      </div>
                    </td>
                    <td class="align-middle">
                    </td>
                  </tr>
              </tbody>
            </table>
        </div>
    </div>
    <div class="input-group input-group-outline my-5 col-3">
        <label class="input-group-text" for="inputGroupFile01">Upload</label>
        <input type="file" class="form-control" id="inputGroupFile01">
    </div>
    <button type="submit" class="btn btn-info">Submit</button>
</form>
@endsection
