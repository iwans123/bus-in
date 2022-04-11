@extends('dashboard.layouts.main')

@section('container')
<div class="row d-flex justify-content-center">
    {{-- <div class="col-lg-4 col-md-3">
        <div class="card h-50">
          <div class="card-body p-3">
            <div class="row gx-4 mb-2">
                <div class="col-auto">
                  <div class="avatar avatar-xl position-relative">
                    <img src="../assets/img/bruce-mars.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
                  </div>
                </div>
            </div>
            <div class="row gx-4 mb-2">
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
          </div>
        </div>
    </div> --}}
    <div class="col-md-6 mb-4">
        <div class="card">
            <div class="card-body p-3">
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
                <hr class="horizontal gray-light my-4">
                <ul class="list-group">
                  <li class="list-group-item border-0 ps-0 pt-0 text-sm"><strong class="text-dark">PO:</strong> &nbsp;{{ $vehicle->name_po }}</li>
                  <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Lokasi:</strong> &nbsp;{{ $vehicle->location }}</li>
                  <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Nama Lokasi:</strong> &nbsp;{{ $vehicle->location_name }}</li>
                  <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">No Kendaraan:</strong> &nbsp;{{ $vehicle->number_vehicle }}</li>
                  <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Jenis Kendaraan:</strong> &nbsp;{{ $vehicle->jenis_kendaraan }}</li>
                  <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">No STUK:</strong> &nbsp;{{ $vehicle->number_stuk }}</li>
                  <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Jenis Angkutan:</strong> &nbsp;{{ $vehicle->jenis_angkutan }}</li>
                  <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Trayek:</strong> &nbsp;{{ $vehicle->trayek }}</li>
                  <li class="list-group-item border-0 ps-0 pb-0">
                    <strong class="text-dark text-sm">Verifikasi 1:</strong> &nbsp;
                        @if ($vehicle->firstStatus == true)
                            <span class="text-xs font-weight-bold badge bg-success">Active</span>
                        @else
                            <span class="text-xs font-weight-bold badge bg-danger">Non Active</span>
                        @endif
                    <strong class="text-dark text-sm">Verifikasi 2:</strong> &nbsp;
                        @if ($vehicle->secondStatus == true)
                            <span class="text-xs font-weight-bold badge bg-success">Active</span>
                        @else
                            <span class="text-xs font-weight-bold badge bg-danger">Non Active</span>
                        @endif
                        </a>
                        <a href="/dashboard/downloadpdf" class="btn btn-info mx-6">Unduh</a>
                  </li>
                  <li>
                  </li>
                </ul>
              </div>
        </div>
    </div>
    {{-- <div class="mb-md-0 mb-4">
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
                    <div class="col-md-3">
                        <div class="input-group input-group-static my-3">
                            @if ($vehicle->status == true)
                                <span class="text-xs font-weight-bold badge bg-success">Active</span>
                            @else
                                <span class="text-xs font-weight-bold badge bg-danger">Non Active</span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row">

                </div>
        </div>
    </div> --}}
</div>
<div class="row">
    <div class="mt-5 mb-md-0 mb-4">
        {{-- unsur administrasi --}}
        <div class="card px-5">
            <div class="card-body px-0 pb-2">
                <div class="mx-3">
                    <h4>I. Unsur Administrasi</h4>
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
                            @if ($verifikasis->count())
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
                                        <input class="form-check-input" type="radio" value="ada" name="kartu_uji" id="customRadio1"
                                        @if ($verifikasis[0]->kartu_uji == 'ada')
                                            checked
                                        @else
                                            disabled
                                        @endif>
                                        <label class="custom-control-label" for="customRadio1">ada, berlaku</label>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="tidak ada" name="kartu_uji" id="customRadio1"
                                        @if ($verifikasis[0]->kartu_uji == 'tidak ada')
                                            checked
                                        @else
                                            disabled
                                        @endif>
                                        <label class="custom-control-label" for="customRadio1">Tidak ada</label>
                                        <input class="form-check-input" type="radio" value="tidak berlaku" name="kartu_uji" id="customRadio1"
                                        @if ($verifikasis[0]->kartu_uji == 'tidak berlaku')
                                            checked
                                        @else
                                            disabled
                                        @endif>
                                        <label class="custom-control-label" for="customRadio1">Tidak berlaku</label>
                                        <input class="form-check-input" type="radio" value="tidak sesuai fisik" name="kartu_uji" id="customRadio1"
                                        @if ($verifikasis[0]->kartu_uji == 'tidak sesuai fisik')
                                            checked
                                        @else
                                            disabled
                                        @endif>
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
                                        <input class="form-check-input" type="radio" value="ada" name="kp_reguler" id="customRadio1"
                                        @if ($verifikasis[0]->kp_reguler == 'ada')
                                            checked
                                        @else
                                            disabled
                                        @endif>
                                        <label class="custom-control-label" for="customRadio1">ada, berlaku</label>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="tidak ada" name="kp_reguler" id="customRadio1"
                                        @if ($verifikasis[0]->kp_reguler == 'tidak ada')
                                            checked
                                        @else
                                            disabled
                                        @endif>
                                        <label class="custom-control-label" for="customRadio1">Tidak ada</label>
                                        <input class="form-check-input" type="radio" value="tidak berlaku" name="kp_reguler" id="customRadio1"
                                        @if ($verifikasis[0]->kp_reguler == 'tidak berlaku')
                                            checked
                                        @else
                                            disabled
                                        @endif>
                                        <label class="custom-control-label" for="customRadio1">Tidak berlaku</label>
                                        <input class="form-check-input" type="radio" value="tidak sesuai fisik" name="kp_reguler" id="customRadio1"
                                        @if ($verifikasis[0]->kp_reguler == 'tidak sesuai fisik')
                                            checked
                                        @else
                                            disabled
                                        @endif>
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
                                        <input class="form-check-input" type="radio" value="ada" name="kp_cadangan" id="customRadio1"
                                        @if ($verifikasis[0]->kp_cadangan == 'ada')
                                            checked
                                        @else
                                            disabled
                                        @endif>
                                        <label class="custom-control-label" for="customRadio1">ada, berlaku</label>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="tidak ada" name="kp_cadangan" id="customRadio1"
                                        @if ($verifikasis[0]->kp_cadangan == 'tidak ada')
                                            checked
                                        @else
                                            disabled
                                        @endif>
                                        <label class="custom-control-label" for="customRadio1">Tidak ada</label>
                                        <input class="form-check-input" type="radio" value="tidak berlaku" name="kp_cadangan" id="customRadio1"
                                        @if ($verifikasis[0]->kp_cadangan == 'tidak berlaku')
                                            checked
                                        @else
                                            disabled
                                        @endif>
                                        <label class="custom-control-label" for="customRadio1">Tidak berlaku</label>
                                        <input class="form-check-input" type="radio" value="tidak sesuai fisik" name="kp_cadangan" id="customRadio1"
                                        @if ($verifikasis[0]->kp_cadangan == 'tidak sesuai fisik')
                                            checked
                                        @else
                                            disabled
                                        @endif>
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
                                        <input class="form-check-input" type="radio" value="A umum" name="sim_pengemudi" id="customRadio1"
                                        @if ($verifikasis[0]->sim_pengemudi == 'A umum')
                                            checked
                                        @else
                                            disabled
                                        @endif>
                                        <label class="custom-control-label" for="customRadio1">A umum</label>
                                        <input class="form-check-input" type="radio" value="B umum" name="sim_pengemudi" id="customRadio1"
                                        @if ($verifikasis[0]->sim_pengemudi == 'B umum')
                                            checked
                                        @else
                                            disabled
                                        @endif>
                                        <label class="custom-control-label" for="customRadio1">B umum</label>
                                        <input class="form-check-input" type="radio" value="C umum" name="sim_pengemudi" id="customRadio1"
                                        @if ($verifikasis[0]->sim_pengemudi == 'C umum')
                                            checked
                                        @else
                                            disabled
                                        @endif>
                                        <label class="custom-control-label" for="customRadio1">C umum</label>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" value="sim tidak sesuai" name="sim_pengemudi" id="customRadio1"
                                        @if ($verifikasis[0]->sim_pengemudi == 'sim tidak sesuai')
                                                checked
                                            @else
                                                disabled
                                            @endif>
                                        <label class="custom-control-label" for="customRadio1">SIM tidak sesuai</label>
                                    </div>
                                </td>
                                <td class="align-middle">
                                    {{ $verifikasis[0]->lampu_dekat }}
                                </td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        {{-- unsur teknis utama --}}
        <div class="card px-5 my-3">
            <div class="my-3">
                <h4>
                    II. Unsur Teknis Utama
                </h4>
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
                    {{-- sistem penerangan --}}
                    @if ($penerangans->count())
                    <tr>
                        <td>
                            <div class="d-flex px-2 py-1">
                                <span class="font-weight-bold text-dark">A</span>
                            </div>
                        </td>
                        <td>
                            <p class="font-weight-bold text-dark mb-0">Sistem Penerangan</p>
                        </td>
                    </tr>
                    {{-- Lampu utama kendaraan --}}
                    <tr>
                        <td>
                            <div class="d-flex px-2 py-1">
                                <span>1</span>
                            </div>
                        </td>
                        <td>
                            <p class="font-weight-bold mb-0">Lampu Utama Kendaraan</p>
                        </td>
                    </tr>
                    {{-- A. Depan --}}
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">

                        </div>
                      </td>
                      <td>
                        <p class="font-weight-bold mb-0">A.Depan</p>
                      </td>
                      <td class="align-middle">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="menyala" name="lampuUtama_dekat" id="customRadio1"
                            @if ($penerangans[0]->lampuUtama_dekat == 'menyala')
                                checked
                            @else
                                disabled
                            @endif>
                            <label class="custom-control-label" for="customRadio1">semua menyala</label>
                        </div>
                      </td>
                      <td class="align-middle">
                        <div class="form-check">
                            <span>Tidak Menyala:</span>
                            <input class="form-check-input" type="radio" value="tidak menyala kanan" name="_dekat_dekat" id="customRadio1"
                            @if ($penerangans[0]->lampuUtama_dekat == 'tidak menyala kanan')
                                checked
                            @else
                                disabled
                            @endif>
                            <label class="custom-control-label" for="customRadio1">kanan</label>
                            <input class="form-check-input" type="radio" value="tidak menyala kiri" name="lampuUtama_dekat" id="customRadio1"
                            @if ($penerangans[0]->lampuUtama_dekat == 'tidak menyala kiri')
                                checked
                            @else
                                disabled
                            @endif>
                            <label class="custom-control-label" for="customRadio1">kiri</label>
                        </div>
                      </td>
                      <td class="align-middle">
                      </td>
                    </tr>
                    {{-- B. Jauh --}}
                    <tr>
                        <td>
                          <div class="d-flex px-2 py-1">

                          </div>
                        </td>
                        <td>
                          <p class="font-weight-bold mb-0">A.Jauh</p>
                        </td>
                        <td class="align-middle">
                          <div class="form-check">
                                <input class="form-check-input" type="radio" value="menyala" name="lampuUtama_jauh" id="customRadio1"
                                @if ($penerangans[0]->lampuUtama_jauh == 'menyala')
                                checked
                                @else
                                    disabled
                                @endif>
                                <label class="custom-control-label" for="customRadio1">semua menyala</label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="form-check">
                                <span>Tidak Menyala:</span>
                                <input class="form-check-input" type="radio" value="tidak menyala kanan" name="lampuUtama_jauh" id="customRadio1"
                                @if ($penerangans[0]->lampuUtama_jauh == 'tidak menyala kanan')
                                checked
                                @else
                                    disabled
                                @endif>
                                <label class="custom-control-label" for="customRadio1">kanan</label>
                                <input class="form-check-input" type="radio" value="tidak menyala kiri" name="lampuUtama_jauh" id="customRadio1"
                                @if ($penerangans[0]->lampuUtama_jauh == 'tidak menyala kiri')
                                checked
                                @else
                                    disabled
                                @endif>
                                <label class="custom-control-label" for="customRadio1">kiri</label>
                          </div>
                        </td>
                        <td class="align-middle">
                        </td>
                    </tr>
                    {{-- Lampu penunjuk arah (sein) --}}
                    <tr>
                        <td>
                            <div class="d-flex px-2 py-1">
                                <span>2</span>
                            </div>
                        </td>
                        <td>
                            <p class="font-weight-bold mb-0">Lampu Penunjuk arah (sein)</p>
                        </td>
                    </tr>
                    {{-- A. Depan --}}
                    <tr>
                        <td>
                          <div class="d-flex px-2 py-1">

                          </div>
                        </td>
                        <td>
                          <p class="font-weight-bold mb-0">A.Depan</p>
                        </td>
                        <td class="align-middle">
                          <div class="form-check">
                                <input class="form-check-input" type="radio" value="menyala" name="sein_depan" id="customRadio1"
                                @if ($penerangans[0]->sein_depan == 'menyala')
                                    checked
                                @else
                                    disabled
                                @endif>
                                <label class="custom-control-label" for="customRadio1">semua menyala</label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="form-check">
                                <span>Tidak Menyala:</span>
                                <input class="form-check-input" type="radio" value="tidak menyala kanan" name="sein_depan" id="customRadio1"
                                @if ($penerangans[0]->sein_depan == 'tidak menyala kanan')
                                    checked
                                @else
                                    disabled
                                @endif>
                                <label class="custom-control-label" for="customRadio1">kanan</label>
                                <input class="form-check-input" type="radio" value="tidak menyala kiri" name="sein_depan" id="customRadio1"
                                @if ($penerangans[0]->sein_depan == 'tidak menyala kiri')
                                    checked
                                @else
                                    disabled
                                @endif>
                                <label class="custom-control-label" for="customRadio1">kiri</label>
                          </div>
                        </td>
                        <td class="align-middle">
                        </td>
                    </tr>
                    {{-- B. Belakang --}}
                    <tr>
                        <td>
                          <div class="d-flex px-2 py-1">

                          </div>
                        </td>
                        <td>
                          <p class="font-weight-bold mb-0">A.Belakang</p>
                        </td>
                        <td class="align-middle">
                          <div class="form-check">
                                <input class="form-check-input" type="radio" value="menyala" name="sein_belakang" id="customRadio1"
                                @if ($penerangans[0]->sein_belakang == 'menyala')
                                    checked
                                @else
                                    disabled
                                @endif>
                              <label class="custom-control-label" for="customRadio1">semua menyala</label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="form-check">
                                <span>Tidak Menyala:</span>
                                <input class="form-check-input" type="radio" value="tidak menyala kanan" name="sein_belakang" id="customRadio1"
                                @if ($penerangans[0]->sein_belakang == 'tidak menyala kanan')
                                    checked
                                @else
                                    disabled
                                @endif>
                                <label class="custom-control-label" for="customRadio1">kanan</label>
                                <input class="form-check-input" type="radio" value="tidak menyala kiri" name="sein_belakang" id="customRadio1"
                                @if ($penerangans[0]->sein_belakang == 'tidak menyala kiri')
                                    checked
                                @else
                                    disabled
                                @endif>
                                <label class="custom-control-label" for="customRadio1">kiri</label>
                          </div>
                        </td>
                        <td class="align-middle">
                        </td>
                    </tr>
                     {{-- Lampu rem --}}
                     <tr>
                        <td>
                            <div class="d-flex px-2 py-1">
                                <span>3</span>
                            </div>
                        </td>
                        <td>
                            <p class="font-weight-bold mb-0">Lampu Rem</p>
                        </td>
                        <td class="align-middle">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="menyala" name="lampuRem" id="customRadio1"
                                @if ($penerangans[0]->lampuRem == 'menyala')
                                    checked
                                @else
                                    disabled
                                @endif>
                                <label class="custom-control-label" for="customRadio1">semua menyala</label>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="form-check">
                                <span>Tidak Menyala:</span>
                                <input class="form-check-input" type="radio" value="tidak menyala kanan" name="lampuRem" id="customRadio1"
                                @if ($penerangans[0]->lampuRem == 'tidak menyala kanan')
                                    checked
                                @else
                                    disabled
                                @endif>
                                <label class="custom-control-label" for="customRadio1">kanan</label>
                                <input class="form-check-input" type="radio" value="tidak menyala kiri" name="lampuRem" id="customRadio1"
                                @if ($penerangans[0]->lampuRem == 'tidak menyala kiri')
                                    checked
                                @else
                                    disabled
                                @endif>
                                <label class="custom-control-label" for="customRadio1">kiri</label>
                            </div>
                        </td>
                        <td class="align-middle">
                        </td>
                    </tr>
                    {{-- Lampu mundur --}}
                    <tr>
                        <td>
                            <div class="d-flex px-2 py-1">
                                <span>4</span>
                            </div>
                        </td>
                        <td>
                            <p class="font-weight-bold mb-0">Lampu Mundur</p>
                        </td>
                        <td class="align-middle">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="menyala" name="lampuMundur" id="customRadio1"
                                @if ($penerangans[0]->lampuMundur == 'menyala')
                                    checked
                                @else
                                    disabled
                                @endif>
                                <label class="custom-control-label" for="customRadio1">semua menyala</label>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="form-check">
                                <span>Tidak Menyala:</span>
                                <input class="form-check-input" type="radio" value="tidak menyala kanan" name="lampuMundur" id="customRadio1"
                                @if ($penerangans[0]->lampuMundur == 'tidak menyala kanan')
                                    checked
                                @else
                                    disabled
                                @endif>
                                <label class="custom-control-label" for="customRadio1">kanan</label>
                                <input class="form-check-input" type="radio" value="tidak menyala kiri" name="lampuMundur" id="customRadio1"
                                @if ($penerangans[0]->lampuMundur == 'tidak menyala kiri')
                                    checked
                                @else
                                    disabled
                                @endif>
                                <label class="custom-control-label" for="customRadio1">kiri</label>
                            </div>
                        </td>
                        <td class="align-middle">
                        </td>
                    </tr>
                    @endif
                    {{-- Sistem Pengereman --}}
                    @if ($pengeremans->count())
                    <tr>
                        <td>
                            <div class="d-flex px-2 py-1">
                                <span class="font-weight-bold text-dark">B</span>
                            </div>
                        </td>
                        <td>
                            <p class="font-weight-bold text-dark mb-0">Sistem Pengereman</p>
                        </td>
                    </tr>
                    {{-- kondisi rem utama --}}
                    <tr>
                        <td>
                            <div class="d-flex px-2 py-1">
                                <span>5</span>
                            </div>
                        </td>
                        <td>
                            <p class="font-weight-bold mb-0">Kondisi Rem Utama</p>
                        </td>
                        <td class="align-middle">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="berfungsi" name="remUtama" id="customRadio1"
                                @if ($pengeremans[0]->remUtama == 'berfungsi')
                                    checked
                                @else
                                    disabled
                                @endif>
                                <label class="custom-control-label" for="customRadio1">Berfungsi</label>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="tidak berfungsi" name="remUtama" id="customRadio1"
                                @if ($pengeremans[0]->remUtama == 'tidak berfungsi')
                                    checked
                                @else
                                    disabled
                                @endif>
                                <label class="custom-control-label" for="customRadio1">Tidak berfungsi</label>
                            </div>
                        </td>
                        <td class="align-middle">
                        </td>
                    </tr>
                    {{-- kondisi rem parkir --}}
                    <tr>
                        <td>
                            <div class="d-flex px-2 py-1">
                                <span>6</span>
                            </div>
                        </td>
                        <td>
                            <p class="font-weight-bold mb-0">Kondisi Rem Parkir</p>
                        </td>
                        <td class="align-middle">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="berfungsi" name="remParkir" id="customRadio1"
                                @if ($pengeremans[0]->remParkir == 'berfungsi')
                                    checked
                                @else
                                    disabled
                                @endif>
                                <label class="custom-control-label" for="customRadio1">Berfungsi</label>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="tidak berfungsi" name="remParkir" id="customRadio1"
                                @if ($pengeremans[0]->remParkir == 'tidak berfungsi')
                                    checked
                                @else
                                    disabled
                                @endif>
                                <label class="custom-control-label" for="customRadio1">Tidak berfungsi</label>
                            </div>
                        </td>
                        <td class="align-middle">
                        </td>
                    </tr>
                    @endif
                    {{-- C. Kondisi badan kendaraan --}}
                    @if ($badanKendaraans->count())
                    <tr>
                        <td>
                            <div class="d-flex px-2 py-1">
                                <span class="font-weight-bold text-dark">C</span>
                            </div>
                        </td>
                        <td>
                            <p class="font-weight-bold text-dark mb-0">Badan kendaraan</p>
                        </td>
                    </tr>
                    {{-- Kondisi kaca depan --}}
                    <tr>
                        <td>
                            <div class="d-flex px-2 py-1">
                                <span>7</span>
                            </div>
                        </td>
                        <td>
                            <p class="font-weight-bold mb-0">Kondisi Kaca Depan</p>
                        </td>
                        <td class="align-middle">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="baik" name="kaca_depan" id="customRadio1"
                                @if ($badanKendaraans[0]->kaca_depan == 'baik')
                                    checked
                                @else
                                    disabled
                                @endif>
                                <label class="custom-control-label" for="customRadio1">Baik</label>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="buruk" name="kaca_depan" id="customRadio1"
                                @if ($badanKendaraans[0]->kaca_depan == 'buruk')
                                    checked
                                @else
                                    disabled
                                @endif>
                                <label class="custom-control-label" for="customRadio1">Buruk</label>
                            </div>
                        </td>
                        <td class="align-middle">
                        </td>
                    </tr>
                    {{-- pintu utama --}}
                    <tr>
                        <td>
                            <div class="d-flex px-2 py-1">
                                <span>8</span>
                            </div>
                        </td>
                        <td>
                            <p class="font-weight-bold mb-0">Pintu Utama</p>
                        </td>
                        <td class="align-middle">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="berfungsi" name="pintu_utama" id="customRadio1"
                                @if ($badanKendaraans[0]->pintu_utama == 'berfungsi')
                                    checked
                                @else
                                    disabled
                                @endif>
                                <label class="custom-control-label" for="customRadio1">Semua berfungsi</label>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="form-check">
                                <span>Tidak Berfungsi:</span>
                                <input class="form-check-input" type="radio" value="tidak berfungsi kanan" name="pintu_utama" id="customRadio1"
                                @if ($badanKendaraans[0]->pintu_utama == 'tidak berfungsi kanan')
                                    checked
                                @else
                                    disabled
                                @endif>
                                <label class="custom-control-label" for="customRadio1">kanan</label>
                                <input class="form-check-input" type="radio" value="tidak berfungsi kiri" name="pintu_utama" id="customRadio1"
                                @if ($badanKendaraans[0]->pintu_utama == 'tidak berfungsi kiri')
                                    checked
                                @else
                                    disabled
                                @endif>
                                <label class="custom-control-label" for="customRadio1">kiri</label>
                            </div>
                        </td>
                        <td class="align-middle">
                        </td>
                    </tr>
                    @endif
                    {{-- D. Ban --}}
                    @if ($bans->count())
                    <tr>
                        <td>
                            <div class="d-flex px-2 py-1">
                                <span class="font-weight-bold text-dark">D</span>
                            </div>
                        </td>
                        <td>
                            <p class="font-weight-bold text-dark mb-0">Ban</p>
                        </td>
                    </tr>
                    {{-- Kondisi ban --}}
                    <tr>
                        <td>
                            <div class="d-flex px-2 py-1">
                                <span>9</span>
                            </div>
                        </td>
                        <td>
                            <p class="font-weight-bold mb-0">Kondisi Ban</p>
                        </td>
                    </tr>
                    {{-- ban Depan --}}
                    <tr>
                        <td>
                          <div class="d-flex px-2 py-1">

                          </div>
                        </td>
                        <td>
                          <p class="font-weight-bold mb-0">A.Depan</p>
                        </td>
                        <td class="align-middle">
                          <div class="form-check">
                                <input class="form-check-input" type="radio" value="laik" name="ban_depan" id="customRadio1"
                                @if ($bans[0]->ban_depan == 'laik')
                                    checked
                                @else
                                    disabled
                                @endif>
                                <label class="custom-control-label" for="customRadio1">Semua laik</label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="form-check">
                                <span>Tidak Laik:</span>
                                <input class="form-check-input" type="radio" value="tidak laik kanan" name="ban_depan" id="customRadio1"
                                @if ($bans[0]->ban_depan == 'tidak laik kanan')
                                    checked
                                @else
                                    disabled
                                @endif>
                                <label class="custom-control-label" for="customRadio1">kanan</label>
                                <input class="form-check-input" type="radio" value="tidak laik kiri" name="ban_depan" id="customRadio1"
                                @if ($bans[0]->ban_depan == 'tidak laik kiri')
                                    checked
                                @else
                                    disabled
                                @endif>
                              <label class="custom-control-label" for="customRadio1">kiri</label>
                          </div>
                        </td>
                        <td class="align-middle">
                        </td>
                    </tr>
                    {{-- ban Belakang --}}
                    <tr>
                        <td>
                          <div class="d-flex px-2 py-1">

                          </div>
                        </td>
                        <td>
                          <p class="font-weight-bold mb-0">A.Belakang</p>
                        </td>
                        <td class="align-middle">
                          <div class="form-check">
                                <input class="form-check-input" type="radio" value="laik" name="ban_belakang" id="customRadio1"
                                @if ($bans[0]->ban_belakang == 'laik')
                                    checked
                                @else
                                    disabled
                                @endif>
                              <label class="custom-control-label" for="customRadio1">Semua laik</label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="form-check">
                                <span>Tidak Laik:</span>
                                <input class="form-check-input" type="radio" value="tidak laik kanan" name="ban_belakang" id="customRadio1"
                                @if ($bans[0]->ban_belakang == 'tidak laik kanan')
                                    checked
                                @else
                                    disabled
                                @endif>
                                <label class="custom-control-label" for="customRadio1">kanan</label>
                                <input class="form-check-input" type="radio" value="tidak laik kiri" name="ban_belakang" id="customRadio1"
                                @if ($bans[0]->ban_belakang == 'tidak laik kiri')
                                    checked
                                @else
                                    disabled
                                @endif>
                                <label class="custom-control-label" for="customRadio1">kiri</label>
                          </div>
                        </td>
                        <td class="align-middle">
                        </td>
                    </tr>
                    @endif
                    {{-- E. Perlengkapan --}}
                    @if ($perlengkapans->count())
                    <tr>
                        <td>
                            <div class="d-flex px-2 py-1">
                                <span class="font-weight-bold text-dark">E</span>
                            </div>
                        </td>
                        <td>
                            <p class="font-weight-bold text-dark mb-0">Perlengkapan</p>
                        </td>
                    </tr>
                    {{-- sabuk keselamatan pengemudi --}}
                    <tr>
                        <td>
                            <div class="d-flex px-2 py-1">
                                <span>10</span>
                            </div>
                        </td>
                        <td>
                            <p class="font-weight-bold mb-0">Sabuk Keselamatan Pengemudi</p>
                        </td>
                        <td class="align-middle">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="ada" name="sabukPengemudi" id="customRadio1"
                                @if ($perlengkapans[0]->sabukPengemudi == 'ada')
                                    checked
                                @else
                                    disabled
                                @endif>
                                <label class="custom-control-label" for="customRadio1">Ada dan fungsi</label>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="tidak fungsi" name="sabukPengemudi" id="customRadio1"
                                @if ($perlengkapans[0]->sabukPengemudi == 'tidak fungsi')
                                    checked
                                @else
                                    disabled
                                @endif>
                                <label class="custom-control-label" for="customRadio1">Tidak fungsi</label>
                                <input class="form-check-input" type="radio" value="tidak ada" name="sabukPengemudi" id="customRadio1"
                                @if ($perlengkapans[0]->sabukPengemudi == 'tidak ada')
                                    checked
                                @else
                                    disabled
                                @endif>
                                <label class="custom-control-label" for="customRadio1">tidak ada</label>
                            </div>
                        </td>
                        <td class="align-middle">
                        </td>
                    </tr>
                    @endif
                    {{-- F. Pengukur Kecepatan --}}
                    @if ($pengukurKecepatans->count())
                    <tr>
                        <td>
                            <div class="d-flex px-2 py-1">
                                <span class="font-weight-bold text-dark">F</span>
                            </div>
                        </td>
                        <td>
                            <p class="font-weight-bold text-dark mb-0">Pengukur Kecepatan</p>
                        </td>
                    </tr>
                    {{-- pengukur kecepatan --}}
                    <tr>
                        <td>
                            <div class="d-flex px-2 py-1">
                                <span>11</span>
                            </div>
                        </td>
                        <td>
                            <p class="font-weight-bold mb-0">Pengukur Kecepatan</p>
                        </td>
                        <td class="align-middle">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="ada" name="pengukurKecepatan" id="customRadio1"
                                @if ($pengukurKecepatans[0]->pengukurKecepatan == 'ada')
                                    checked
                                @else
                                    disabled
                                @endif>
                                <label class="custom-control-label" for="customRadio1">Ada dan fungsi</label>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="tidak fungsi" name="pengukurKecepatan" id="customRadio1"
                                @if ($pengukurKecepatans[0]->pengukurKecepatan == 'tidak fungsi')
                                    checked
                                @else
                                    disabled
                                @endif>
                                <label class="custom-control-label" for="customRadio1">Tidak fungsi</label>
                                <input class="form-check-input" type="radio" value="tidak ada" name="pengukurKecepatan" id="customRadio1"
                                @if ($pengukurKecepatans[0]->pengukurKecepatan == 'tidak ada')
                                    checked
                                @else
                                    disabled
                                @endif>
                                <label class="custom-control-label" for="customRadio1">tidak ada</label>
                            </div>
                        </td>
                        <td class="align-middle">
                        </td>
                    </tr>
                    @endif
                    {{-- G. Pengahapus kaca (wiper) --}}
                    @if ($wipers->count())
                    <tr>
                        <td>
                            <div class="d-flex px-2 py-1">
                                <span class="font-weight-bold text-dark">G</span>
                            </div>
                        </td>
                        <td>
                            <p class="font-weight-bold text-dark mb-0">Penghapus Kaca (WIPER)</p>
                        </td>
                    </tr>
                    {{-- Penghapus kaca --}}
                    <tr>
                        <td>
                            <div class="d-flex px-2 py-1">
                                <span>12</span>
                            </div>
                        </td>
                        <td>
                            <p class="font-weight-bold mb-0">Penghapus Kaca</p>
                        </td>
                        <td class="align-middle">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="ada" name="wiper" id="customRadio1"
                                @if ($wipers[0]->wiper == 'ada')
                                    checked
                                @else
                                    disabled
                                @endif>
                                <label class="custom-control-label" for="customRadio1">ada</label>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="tidak fungsi" name="wiper" id="customRadio1"
                                @if ($wipers[0]->wiper == 'tidak fungsi')
                                    checked
                                @else
                                    disabled
                                @endif>
                                <label class="custom-control-label" for="customRadio1">Tidak fungsi</label>
                                <input class="form-check-input" type="radio" value="tidak ada" name="wiper" id="customRadio1"
                                @if ($wipers[0]->wiper == 'tidak ada')
                                    checked
                                @else
                                    disabled
                                @endif>
                                <label class="custom-control-label" for="customRadio1">tidak ada</label>
                            </div>
                        </td>
                        <td class="align-middle">
                        </td>
                    </tr>
                    @endif
                    {{--H. Tanggap Darurat --}}
                    @if ($tanggapDarurats->count())
                    <tr>
                        <td>
                            <div class="d-flex px-2 py-1">
                                <span class="font-weight-bold text-dark">H</span>
                            </div>
                        </td>
                        <td>
                            <p class="font-weight-bold text-dark mb-0">Tanggap Darurat</p>
                        </td>
                    </tr>
                    {{-- Pintu Darurat --}}
                    <tr>
                        <td>
                            <div class="d-flex px-2 py-1">
                                <span>13</span>
                            </div>
                        </td>
                        <td>
                            <p class="font-weight-bold mb-0">Pintu Darurat</p>
                        </td>
                        <td class="align-middle">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="ada" name="pintuDarurat" id="customRadio1"
                                @if ($tanggapDarurats[0]->pintuDarurat == 'ada')
                                    checked
                                @else
                                    disabled
                                @endif>
                                <label class="custom-control-label" for="customRadio1">ada</label>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="tidak ada" name="pintuDarurat" id="customRadio1"
                                @if ($tanggapDarurats[0]->pintuDarurat == 'tidak ada')
                                    checked
                                @else
                                    disabled
                                @endif>
                                <label class="custom-control-label" for="customRadio1">tidak ada</label>
                            </div>
                        </td>
                        <td class="align-middle">
                        </td>
                    </tr>
                    {{-- Jendela Darurat --}}
                    <tr>
                        <td>
                            <div class="d-flex px-2 py-1">
                                <span>14</span>
                            </div>
                        </td>
                        <td>
                            <p class="font-weight-bold mb-0">Jendela Darurat</p>
                        </td>
                        <td class="align-middle">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="ada" name="jendelaDarurat" id="customRadio1"
                                @if ($tanggapDarurats[0]->jendelaDarurat == 'ada')
                                    checked
                                @else
                                    disabled
                                @endif>
                                <label class="custom-control-label" for="customRadio1">ada</label>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="tidak ada" name="jendelaDarurat" id="customRadio1"
                                @if ($tanggapDarurats[0]->jendelaDarurat == 'tidak ada')
                                    checked
                                @else
                                    disabled
                                @endif>
                                <label class="custom-control-label" for="customRadio1">tidak ada</label>
                            </div>
                        </td>
                        <td class="align-middle">
                        </td>
                    </tr>
                    {{-- Alat Pemecah kaca --}}
                    <tr>
                        <td>
                            <div class="d-flex px-2 py-1">
                                <span>15</span>
                            </div>
                        </td>
                        <td>
                            <p class="font-weight-bold mb-0">Alat Pemacah Kaca</p>
                        </td>
                        <td class="align-middle">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="ada" name="alatPemecahkaca" id="customRadio1"
                                @if ($tanggapDarurats[0]->alatPemecahkaca == 'ada')
                                    checked
                                @else
                                    disabled
                                @endif>
                                <label class="custom-control-label" for="customRadio1">ada</label>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="tidak ada" name="alatPemecahkaca" id="customRadio1"
                                @if ($tanggapDarurats[0]->alatPemecahkaca == 'tidak ada')
                                    checked
                                @else
                                    disabled
                                @endif>
                                <label class="custom-control-label" for="customRadio1">tidak ada</label>
                            </div>
                        </td>
                        <td class="align-middle">
                        </td>
                    </tr>
                    @endif
                  </tbody>
                </table>
              </div>
        </div>

        {{-- unsur teknis penunjang --}}
        <div class="card px-5 my-3">
            <div class="my-3">
                <h4>
                    III. Unsur Teknis Penunjang
                </h4>
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
                    {{-- A. sistem penerangan penunjang --}}
                    @if ($peneranganPenunjangs->count())
                    <tr>
                        <td>
                            <div class="d-flex px-2 py-1">
                                <span class="font-weight-bold text-dark">A</span>
                            </div>
                        </td>
                        <td>
                            <p class="font-weight-bold text-dark mb-0">Sistem Penerangan</p>
                        </td>
                    </tr>
                    {{-- Lampu posisi --}}
                    <tr>
                        <td>
                            <div class="d-flex px-2 py-1">
                                <span>16</span>
                            </div>
                        </td>
                        <td>
                            <p class="font-weight-bold mb-0">Lampu Posisi</p>
                        </td>
                    </tr>
                    {{-- A.Depan --}}
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">

                        </div>
                      </td>
                      <td>
                        <p class="font-weight-bold mb-0">A.Depan</p>
                      </td>
                      <td class="align-middle">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="menyala" name="lampuPosisi_depan" id="customRadio1"
                            @if ($peneranganPenunjangs[0]->lampuPosisi_depan == 'menyala')
                                checked
                            @else
                                disabled
                            @endif>
                            <label class="custom-control-label" for="customRadio1">semua menyala</label>
                        </div>
                      </td>
                      <td class="align-middle">
                        <div class="form-check">
                            <span>Tidak Menyala:</span>
                            <input class="form-check-input" type="radio" value="tidak menyala kanan" name="lampuPosisi_depan" id="customRadio1"
                            @if ($peneranganPenunjangs[0]->lampuPosisi_depan == 'tidak menyala kanan')
                                checked
                            @else
                                disabled
                            @endif>
                            <label class="custom-control-label" for="customRadio1">kanan</label>
                            <input class="form-check-input" type="radio" value="tidak menyala kiri" name="lampuPosisi_depan" id="customRadio1"
                            @if ($peneranganPenunjangs[0]->lampuPosisi_depan == 'tidak menyala kiri')
                                checked
                            @else
                                disabled
                            @endif>
                            <label class="custom-control-label" for="customRadio1">kiri</label>
                        </div>
                      </td>
                      <td class="align-middle">
                      </td>
                    </tr>
                    {{-- B.Belakang --}}
                    <tr>
                        <td>
                          <div class="d-flex px-2 py-1">

                          </div>
                        </td>
                        <td>
                          <p class="font-weight-bold mb-0">B.Belakang</p>
                        </td>
                        <td class="align-middle">
                          <div class="form-check">
                                <input class="form-check-input" type="radio" value="menyala" name="lampuPosisi_belakang" id="customRadio1"
                                @if ($peneranganPenunjangs[0]->lampuPosisi_belakang == 'menyala')
                                    checked
                                @else
                                    disabled
                                @endif>
                                <label class="custom-control-label" for="customRadio1">semua menyala</label>
                          </div>
                        </td>
                        <td class="align-middle">
                          <div class="form-check">
                                <span>Tidak Menyala:</span>
                                <input class="form-check-input" type="radio" value="tidak menyala kanan" name="lampuPosisi_belakang" id="customRadio1"
                                @if ($peneranganPenunjangs[0]->lampuPosisi_belakang == 'tidak menyala kanan')
                                        checked
                                @else
                                    disabled
                                @endif>
                                <label class="custom-control-label" for="customRadio1">kanan</label>
                                <input class="form-check-input" type="radio" value="tidak menyala kiri" name="lampuPosisi_belakang" id="customRadio1"
                                @if ($peneranganPenunjangs[0]->lampuPosisi_belakang == 'tidak menyala kiri')
                                    checked
                                @else
                                    disabled
                                @endif>
                                <label class="custom-control-label" for="customRadio1">kiri</label>
                          </div>
                        </td>
                        <td class="align-middle">
                        </td>
                    </tr>
                    @endif
                    {{-- B. Badan Kendaraan --}}
                    @if ($badankendaraanPenunjangs->count())
                    <tr>
                        <td>
                            <div class="d-flex px-2 py-1">
                                <span class="font-weight-bold text-dark">B</span>
                            </div>
                        </td>
                        <td>
                            <p class="font-weight-bold text-dark mb-0">Badan Kendaraan</p>
                        </td>
                    </tr>
                    {{-- kaca spion --}}
                    <tr>
                        <td>
                            <div class="d-flex px-2 py-1">
                                <span>17</span>
                            </div>
                        </td>
                        <td>
                            <p class="font-weight-bold mb-0">Kaca Spion</p>
                        </td>
                        <td class="align-middle">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="sesuai" name="kacaSpion" id="customRadio1"
                                @if ($badankendaraanPenunjangs[0]->kacaSpion == 'sesuai')
                                    checked
                                @else
                                    disabled
                                @endif>
                                <label class="custom-control-label" for="customRadio1">Sesuai</label>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="tidak sesuai" name="kacaSpion" id="customRadio1"
                                @if ($badankendaraanPenunjangs[0]->kacaSpion == 'tidak sesuai')
                                    checked
                                @else
                                    disabled
                                @endif>
                                <label class="custom-control-label" for="customRadio1">Tidak sesuai</label>
                            </div>
                        </td>
                        <td class="align-middle">
                        </td>
                    </tr>
                    {{-- Klakson --}}
                    <tr>
                        <td>
                            <div class="d-flex px-2 py-1">
                                <span>18</span>
                            </div>
                        </td>
                        <td>
                            <p class="font-weight-bold mb-0">Klakson</p>
                        </td>
                        <td class="align-middle">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="ada" name="klakson" id="customRadio1"
                                @if ($badankendaraanPenunjangs[0]->klakson == 'ada')
                                    checked
                                @else
                                    disabled
                                @endif>
                                <label class="custom-control-label" for="customRadio1">ada</label>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="tidak fungsi" name="klakson" id="customRadio1"
                                @if ($badankendaraanPenunjangs[0]->klakson == 'tidak fungsi')
                                    checked
                                @else
                                    disabled
                                @endif>
                                <label class="custom-control-label" for="customRadio1">Tidak fungsi</label>
                                <input class="form-check-input" type="radio" value="tidak ada" name="klakson" id="customRadio1"
                                @if ($badankendaraanPenunjangs[0]->klakson == 'tidak ada')
                                    checked
                                @else
                                    disabled
                                @endif>
                                <label class="custom-control-label" for="customRadio1">Tidak ada</label>
                            </div>
                        </td>
                        <td class="align-middle">
                        </td>
                    </tr>
                    {{-- Lantai dan Tangga --}}
                    <tr>
                        <td>
                            <div class="d-flex px-2 py-1">
                                <span>19</span>
                            </div>
                        </td>
                        <td>
                            <p class="font-weight-bold mb-0">Lantai dan Tangga</p>
                        </td>
                        <td class="align-middle">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="baik" name="lantaiTangga" id="customRadio1"
                                @if ($badankendaraanPenunjangs[0]->lantaiTangga == 'baik')
                                    checked
                                @else
                                    disabled
                                @endif>
                                <label class="custom-control-label" for="customRadio1">baik</label>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="keropos" name="lantaiTangga" id="customRadio1"
                                @if ($badankendaraanPenunjangs[0]->lantaiTangga == 'keropos')
                                    checked
                                @else
                                    disabled
                                @endif>
                                <label class="custom-control-label" for="customRadio1">Keropos / berlubang</label>
                            </div>
                        </td>
                        <td class="align-middle">
                        </td>
                    </tr>
                    @endif
                    {{-- C. Kapasitas tempat duduk --}}
                    @if ($kapasitasPenunjangs->count())
                    <tr>
                        <td>
                            <div class="d-flex px-2 py-1">
                                <span class="font-weight-bold text-dark">C</span>
                            </div>
                        </td>
                        <td>
                            <p class="font-weight-bold text-dark mb-0">Kapasitas Tempat Duduk</p>
                        </td>
                    </tr>
                    {{-- Jumlah Tempat Duduk --}}
                    <tr>
                        <td>
                            <div class="d-flex px-2 py-1">
                                <span>20</span>
                            </div>
                        </td>
                        <td>
                            <p class="font-weight-bold mb-0">Jumlah tempat duduk</p>
                        </td>
                        <td class="align-middle">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="sesuai" name="tempatDuduk" id="customRadio1"
                                @if ($kapasitasPenunjangs[0]->tempatDuduk == 'sesuai')
                                    checked
                                @else
                                    disabled
                                @endif>
                                <label class="custom-control-label" for="customRadio1">sesuai</label>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="tidak sesuai" name="tempatDuduk" id="customRadio1"
                                @if ($kapasitasPenunjangs[0]->tempatDuduk == 'tidak sesuai')
                                    checked
                                @else
                                    disabled
                                @endif>
                                <label class="custom-control-label" for="customRadio1">Tidak sesuai</label>
                            </div>
                        </td>
                        <td class="align-middle">
                        </td>
                    </tr>
                    @endif
                    {{-- D. Perlengkapan Kendaraan --}}
                    @if ($perlengkapanPenunjangs->count())
                    <tr>
                        <td>
                            <div class="d-flex px-2 py-1">
                                <span class="font-weight-bold text-dark">D</span>
                            </div>
                        </td>
                        <td>
                            <p class="font-weight-bold text-dark mb-0">Perlengakapan Kendaraan</p>
                        </td>
                    </tr>
                    {{-- Ban Cadangan --}}
                    <tr>
                        <td>
                            <div class="d-flex px-2 py-1">
                                <span>21</span>
                            </div>
                        </td>
                        <td>
                            <p class="font-weight-bold mb-0">Ban Cadangan</p>
                        </td>
                        <td class="align-middle">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="ada" name="banCadangan" id="customRadio1"
                                @if ($perlengkapanPenunjangs[0]->banCadangan == 'ada')
                                    checked
                                @else
                                    disabled
                                @endif>
                                <label class="custom-control-label" for="customRadio1">Ada dan laik</label>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="tidak laik" name="banCadangan" id="customRadio1"
                                @if ($perlengkapanPenunjangs[0]->banCadangan == 'tidak laik')
                                    checked
                                @else
                                    disabled
                                @endif>
                                <label class="custom-control-label" for="customRadio1">Tidak laik</label>
                                <input class="form-check-input" type="radio" value="tidak ada" name="banCadangan" id="customRadio1"
                                @if ($perlengkapanPenunjangs[0]->banCadangan == 'tidak ada')
                                    checked
                                @else
                                    disabled
                                @endif>
                                <label class="custom-control-label" for="customRadio1">Tidak ada</label>
                            </div>
                        </td>
                        <td class="align-middle">
                        </td>
                    </tr>
                    {{-- Segitiga Pengaman --}}
                    <tr>
                        <td>
                            <div class="d-flex px-2 py-1">
                                <span>22</span>
                            </div>
                        </td>
                        <td>
                            <p class="font-weight-bold mb-0">Segitiga Pengaman</p>
                        </td>
                        <td class="align-middle">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="ada" name="segitigaPengaman" id="customRadio1"
                                @if ($perlengkapanPenunjangs[0]->segitigaPengaman == 'ada')
                                    checked
                                @else
                                    disabled
                                @endif>
                                <label class="custom-control-label" for="customRadio1">Ada</label>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="tidak ada" name="segitigaPengaman" id="customRadio1"
                                @if ($perlengkapanPenunjangs[0]->segitigaPengaman == 'tidak ada')
                                    checked
                                @else
                                    disabled
                                @endif>
                                <label class="custom-control-label" for="customRadio1">Tidak ada</label>
                            </div>
                        </td>
                        <td class="align-middle">
                        </td>
                    </tr>
                    {{-- Dongkrak --}}
                    <tr>
                        <td>
                            <div class="d-flex px-2 py-1">
                                <span>23</span>
                            </div>
                        </td>
                        <td>
                            <p class="font-weight-bold mb-0">Dongkrak</p>
                        </td>
                        <td class="align-middle">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="ada" name="dongkrak" id="customRadio1"
                                @if ($perlengkapanPenunjangs[0]->dongkrak == 'ada')
                                    checked
                                @else
                                    disabled
                                @endif>
                                <label class="custom-control-label" for="customRadio1">Ada</label>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="tidak ada" name="dongkrak" id="customRadio1"
                                @if ($perlengkapanPenunjangs[0]->dongkrak == 'tidak ada')
                                    checked
                                @else
                                    disabled
                                @endif>
                                <label class="custom-control-label" for="customRadio1">Tidak ada</label>
                            </div>
                        </td>
                        <td class="align-middle">
                        </td>
                    </tr>
                    {{-- Pembuka Roda --}}
                    <tr>
                        <td>
                            <div class="d-flex px-2 py-1">
                                <span>24</span>
                            </div>
                        </td>
                        <td>
                            <p class="font-weight-bold mb-0">Pembuka Roda</p>
                        </td>
                        <td class="align-middle">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="ada" name="pembukaRoda" id="customRadio1"
                                @if ($perlengkapanPenunjangs[0]->pembukaRoda == 'ada')
                                    checked
                                @else
                                    disabled
                                @endif>
                                <label class="custom-control-label" for="customRadio1">Ada</label>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="tidak ada" name="pembukaRoda" id="customRadio1"
                                @if ($perlengkapanPenunjangs[0]->pembukaRoda == 'tidak ada')
                                    checked
                                @else
                                    disabled
                                @endif>
                                <label class="custom-control-label" for="customRadio1">Tidak ada</label>
                            </div>
                        </td>
                        <td class="align-middle">
                        </td>
                    </tr>
                    {{-- Lampu Senter --}}
                    <tr>
                        <td>
                            <div class="d-flex px-2 py-1">
                                <span>25</span>
                            </div>
                        </td>
                        <td>
                            <p class="font-weight-bold mb-0">Lampu Senter</p>
                        </td>
                        <td class="align-middle">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="ada" name="lampuSenter" id="customRadio1"
                                @if ($perlengkapanPenunjangs[0]->lampuSenter == 'ada')
                                    checked
                                @else
                                    disabled
                                @endif>
                                <label class="custom-control-label" for="customRadio1">Ada</label>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="tidak fungsi" name="lampuSenter" id="customRadio1"
                                @if ($perlengkapanPenunjangs[0]->lampuSenter == 'tidak fungsi')
                                    checked
                                @else
                                    disabled
                                @endif>
                                <label class="custom-control-label" for="customRadio1">Tidak fungsi</label>
                                <input class="form-check-input" type="radio" value="tidak ada" name="lampuSenter" id="customRadio1"
                                @if ($perlengkapanPenunjangs[0]->lampuSenter == 'tidak ada')
                                    checked
                                @else
                                    disabled
                                @endif>
                                <label class="custom-control-label" for="customRadio1">Tidak ada</label>
                            </div>
                        </td>
                        <td class="align-middle">
                        </td>
                    </tr>
                    @endif
                  </tbody>
                </table>
              </div>
        </div>
    </div>
</div>
@endsection
