@extends('dashboard.layouts.main')

@section('container')
<div class="row">
    <div class="mt-5 mb-md-0 mb-4">
        {{-- detail kendaraan --}}
        <div class="card border-success px-2 my-3">
            <div class="card-body container pb-2">
                <div class="row">
                    <div class="col-md">
                        <div class="row border border-dark my-1">
                            <div class="col-1 border-end border-dark">
                                <span>
                                    1
                                </span>
                            </div>
                            <div class="col-4 border-end border-dark">
                                <span>
                                    Hari Tanggal:
                                </span>
                            </div>
                            <div class="col">
                                @if ($transaksis->count())
                                    <span>
                                        {{ $transaksis[0]->created_at->toDateString() }}
                                    </span>
                                @else
                                    <span>-</span>
                                @endif
                            </div>
                        </div>
                        <div class="row border border-dark my-1">
                            <div class="col-1 border-end border-dark">
                                <span>
                                    2
                                </span>
                            </div>
                            <div class="col-4 border-end border-dark">
                                <span>
                                    Lokasi:
                                </span>
                            </div>
                            <div class="col border">
                                <span>
                                    {{ $vehicle->location }}
                                </span>
                            </div>
                        </div>
                        <div class="row border border-dark my-1">
                            <div class="col-1 border-end border-dark">
                                <span>
                                    3
                                </span>
                            </div>
                            <div class="col-4 border-end border-dark">
                                <span>
                                    Nama Lokasi:
                                </span>
                            </div>
                            <div class="col border">
                                <span>
                                    {{ $vehicle->location_name }}
                                </span>
                            </div>
                        </div>
                        <div class="row border border-dark my-1">
                            <div class="col-1 border-end border-dark">
                                <span>
                                    4
                                </span>
                            </div>
                            <div class="col-4 border-end border-dark">
                                <span>
                                    Nama Pengemudi:
                                </span>
                            </div>
                            <div class="col border">
                                <span>
                                    {{ $vehicle->driver }}
                                </span>
                            </div>
                        </div>
                        <div class="row border border-dark my-1">
                            <div class="col-1 border-end border-dark">
                                <span>
                                    5
                                </span>
                            </div>
                            <div class="col-4 border-end border-dark">
                                <span>
                                    Umur:
                                </span>
                            </div>
                            <div class="col border">
                                <span>
                                    {{ $vehicle->birthday }}
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="row border border-dark my-1">
                            <div class="col-1 border-end border-dark">
                                <span>
                                    6
                                </span>
                            </div>
                            <div class="col-4 border-end border-dark">
                                <span>
                                    Nama PO:
                                </span>
                            </div>
                            <div class="col">
                                <span>
                                    {{ $vehicle->name_po }}
                                </span>
                            </div>
                        </div>
                        <div class="row border border-dark my-1">
                            <div class="col-1 border-end border-dark">
                                <span>
                                    7
                                </span>
                            </div>
                            <div class="col-4 border-end border-dark">
                                <span>
                                    No Kend:
                                </span>
                            </div>
                            <div class="col border">
                                <span>
                                    {{ $vehicle->number_vehicle }}
                                </span>
                            </div>
                        </div>
                        <div class="row border border-dark my-1">
                            <div class="col-1 border-end border-dark">
                                <span>
                                    8
                                </span>
                            </div>
                            <div class="col-4 border-end border-dark">
                                <span>
                                    No STUK:
                                </span>
                            </div>
                            <div class="col border">
                                <span>
                                    {{ $vehicle->number_stuk }}
                                </span>
                            </div>
                        </div>
                        <div class="row border border-dark my-1">
                            <div class="col-1 border-end border-dark">
                                <span>
                                    9
                                </span>
                            </div>
                            <div class="col-4 border-end border-dark">
                                <span>
                                    Jenis Trayek:
                                </span>
                            </div>
                            <div class="col border">
                                <span>
                                    {{ $vehicle->jenis_angkutan }}
                                </span>
                            </div>
                        </div>
                        <div class="row border border-dark my-1">
                            <div class="col-1 border-end border-dark text-truncate">
                                <span>
                                    10
                                </span>
                            </div>
                            <div class="col-4 border-end border-dark">
                                <span>
                                    Trayek:
                                </span>
                            </div>
                            <div class="col border">
                                <span>
                                    {{ $vehicle->trayek }}
                                </span>
                            </div>
                        </div>
                    </div>
                    <a href="/dashboard/vehicles/downloadpdf/{{ $vehicle->id }}" class="btn btn-warning bg-gradient fw-bold mt-3">Unduh Rampcheck
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-exclamation" viewBox="0 0 16 16">
                            <path d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.553.553 0 0 1-1.1 0L7.1 4.995z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        {{-- unsur administrasi --}}
        <div class="card-transparant border border-success px-2 my-3">
                <div class="card-body mx-2 px-0 pb-2">
                    <div class="mx-3">
                        <h4>I. Unsur Administrasi</h4>
                    </div>
                    <div class="table-responsive bg-transparant card">
                        <table class="table table-bordered border-dark align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-white text-xs text-truncate font-weight-bolder opacity-7 bg-primary bg-gradient">NO</th>
                                    <th class="text-uppercase text-white text-xs text-truncate font-weight-bolder opacity-7 bg-primary bg-gradient">KRITERIA</th>
                                    <th class="text-center text-uppercase text-white text-xs text-truncate font-weight-bolder bg-success bg-gradient">DIIJINKAN OPEARASIONAL</th>
                                    <th class="text-center text-uppercase text-white text-xs text-truncate font-weight-bolder bg-danger bg-gradient">TILANG & DILARANG OPERASIONAL</th>
                                </tr>
                            </thead>
                            <tbody class="fw-bold" style="color: #413F42">
                                @if ($verifikasis->count())
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <span>1</span>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="font-weight-bold mb-0">Kartu Uji / STUK</p>
                                    </td>
                                    <td class="align-middle text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="ada" name="kartu_uji" id="kartu_uji"
                                            @if ($verifikasis[0]->kartu_uji == 'ada')
                                                checked
                                            @else
                                                disabled
                                            @endif>
                                            <label class="custom-control-label" for="kartu_uji">ada, berlaku</label>
                                        </div>
                                    </td>
                                    <td class="align-middle text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="tidak ada" name="kartu_uji" id="kartu_uji"
                                            @if ($verifikasis[0]->kartu_uji == 'tidak ada')
                                                checked
                                            @else
                                                disabled
                                            @endif>
                                            <label class="custom-control-label" for="kartu_uji">Tidak ada</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="tidak berlaku" name="kartu_uji" id="kartu_uji"
                                            @if ($verifikasis[0]->kartu_uji == 'tidak berlaku')
                                                checked
                                            @else
                                                disabled
                                            @endif>
                                            <label class="custom-control-label" for="kartu_uji">Tidak berlaku</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="tidak sesuai fisik" name="kartu_uji" id="kartu_uji"
                                            @if ($verifikasis[0]->kartu_uji == 'tidak sesuai fisik')
                                                checked
                                            @else
                                                disabled
                                            @endif>
                                            <label class="custom-control-label" for="kartu_uji">Tidak sesuai fisik</label>
                                        </div>
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
                                        <div class="form-check form-check-inline">
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
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="tidak ada" name="kp_reguler" id="customRadio1"
                                            @if ($verifikasis[0]->kp_reguler == 'tidak ada')
                                                checked
                                            @else
                                                disabled
                                            @endif>
                                            <label class="custom-control-label" for="customRadio1">Tidak ada</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="tidak berlaku" name="kp_reguler" id="customRadio1"
                                            @if ($verifikasis[0]->kp_reguler == 'tidak berlaku')
                                                checked
                                            @else
                                                disabled
                                            @endif>
                                            <label class="custom-control-label" for="customRadio1">Tidak berlaku</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="tidak sesuai fisik" name="kp_reguler" id="customRadio1"
                                            @if ($verifikasis[0]->kp_reguler == 'tidak sesuai fisik')
                                                checked
                                            @else
                                                disabled
                                            @endif>
                                            <label class="custom-control-label" for="customRadio1">Tidak sesuai fisik</label>
                                        </div>
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
                                        <div class="form-check form-check-inline">
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
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="tidak ada" name="kp_cadangan" id="customRadio1"
                                            @if ($verifikasis[0]->kp_cadangan == 'tidak ada')
                                                checked
                                            @else
                                                disabled
                                            @endif>
                                            <label class="custom-control-label" for="customRadio1">Tidak ada</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="tidak berlaku" name="kp_cadangan" id="customRadio1"
                                            @if ($verifikasis[0]->kp_cadangan == 'tidak berlaku')
                                                checked
                                            @else
                                                disabled
                                            @endif>
                                            <label class="custom-control-label" for="customRadio1">Tidak berlaku</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="tidak sesuai fisik" name="kp_cadangan" id="customRadio1"
                                            @if ($verifikasis[0]->kp_cadangan == 'tidak sesuai fisik')
                                                checked
                                            @else
                                                disabled
                                            @endif>
                                            <label class="custom-control-label" for="customRadio1">Tidak sesuai fisik</label>
                                        </div>
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
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="A umum" name="sim_pengemudi" id="customRadio1"
                                            @if ($verifikasis[0]->sim_pengemudi == 'A umum')
                                                checked
                                            @else
                                                disabled
                                            @endif>
                                            <label class="custom-control-label" for="customRadio1">A umum</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="B umum" name="sim_pengemudi" id="customRadio1"
                                            @if ($verifikasis[0]->sim_pengemudi == 'B umum')
                                                checked
                                            @else
                                                disabled
                                            @endif>
                                            <label class="custom-control-label" for="customRadio1">B umum</label>
                                        </div>
                                        <div class="form-check form-check-inline">
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
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="sim tidak sesuai" name="sim_pengemudi" id="customRadio1"
                                            @if ($verifikasis[0]->sim_pengemudi == 'sim tidak sesuai')
                                                    checked
                                                @else
                                                    disabled
                                                @endif>
                                            <label class="custom-control-label" for="customRadio1">SIM tidak sesuai</label>
                                        </div>
                                    </td>
                                </tr>
                                @else
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1">
                                            <span>1</span>
                                        </div>
                                    </td>
                                    <td>
                                        <p class="font-weight-bold mb-0">Kartu Uji / STUK</p>
                                    </td>
                                    <td class="align-middle text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="ada" name="kartu_uji" id="kartu_uji" disabled>
                                            <label class="custom-control-label" for="kartu_uji">ada, berlaku</label>
                                        </div>
                                    </td>
                                    <td class="align-middle text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="tidak ada" name="kartu_uji" id="kartu_uji" disabled>
                                            <label class="custom-control-label" for="kartu_uji">Tidak ada</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="tidak berlaku" name="kartu_uji" id="kartu_uji" disabled>
                                            <label class="custom-control-label" for="kartu_uji">Tidak berlaku</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="tidak sesuai fisik" name="kartu_uji" id="kartu_uji" disabled>
                                            <label class="custom-control-label" for="kartu_uji">Tidak sesuai fisik</label>
                                        </div>
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
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="ada" name="kp_reguler" id="customRadio1"
                                           disabled>
                                            <label class="custom-control-label" for="customRadio1">ada, berlaku</label>
                                        </div>
                                    </td>
                                    <td class="align-middle text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="tidak ada" name="kp_reguler" id="customRadio1"
                                            disabled>
                                            <label class="custom-control-label" for="customRadio1">Tidak ada</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="tidak berlaku" name="kp_reguler" id="customRadio1"
                                            disabled>
                                            <label class="custom-control-label" for="customRadio1">Tidak berlaku</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="tidak sesuai fisik" name="kp_reguler" id="customRadio1"
                                            disabled>
                                            <label class="custom-control-label" for="customRadio1">Tidak sesuai fisik</label>
                                        </div>
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
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="ada" name="kp_cadangan" id="customRadio1"
                                            disabled>
                                            <label class="custom-control-label" for="customRadio1">ada, berlaku</label>
                                        </div>
                                    </td>
                                    <td class="align-middle text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="tidak ada" name="kp_cadangan" id="customRadio1"
                                            disabled>
                                            <label class="custom-control-label" for="customRadio1">Tidak ada</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="tidak berlaku" name="kp_cadangan" id="customRadio1"
                                           disabled>
                                            <label class="custom-control-label" for="customRadio1">Tidak berlaku</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="tidak sesuai fisik" name="kp_cadangan" id="customRadio1"
                                            disabled>
                                            <label class="custom-control-label" for="customRadio1">Tidak sesuai fisik</label>
                                        </div>
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
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="A umum" name="sim_pengemudi" id="customRadio1"
                                            disabled>
                                            <label class="custom-control-label" for="customRadio1">A umum</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="B umum" name="sim_pengemudi" id="customRadio1"
                                            disabled>
                                            <label class="custom-control-label" for="customRadio1">B umum</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="C umum" name="sim_pengemudi" id="customRadio1"
                                            disabled>
                                            <label class="custom-control-label" for="customRadio1">C umum</label>
                                        </div>
                                    </td>
                                    <td class="align-middle text-center">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" value="sim tidak sesuai" name="sim_pengemudi" id="customRadio1"
                                            disabled>
                                            <label class="custom-control-label" for="customRadio1">SIM tidak sesuai</label>
                                        </div>
                                    </td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
        </div>

        {{-- unsur teknis utama --}}
        <div class="card-transparant border border-success px-2 my-3">
            <div class="my-3 mx-2">
                <h4>
                    II. Unsur Teknis Utama
                </h4>
            </div>
            <div class="table-responsive bg-transparant mx-2 mb-3">
                <table class="table table-bordered border-dark align-items-center mb-0">
                <thead>
                    <tr>
                    <th class="text-uppercase text-white text-xs text-truncate font-weight-bolder opacity-7 bg-primary bg-gradient">NO</th>
                    <th class="text-uppercase text-white text-xs text-truncate font-weight-bolder opacity-7 bg-primary bg-gradient">KRITERIA</th>
                    <th class="text-center text-uppercase text-white text-xs text-truncate font-weight-bolder bg-success">DIIJINKAN OPEARASIONAL</th>
                    <th class="text-center text-uppercase text-white text-xs text-truncate font-weight-bolder bg-danger">TILANG & DILARANG OPERASIONAL</th>
                    </tr>
                </thead>
                <tbody class="fw-bold" style="color: #413F42">
                    @if ($transaksis->count())
                    {{-- sistem penerangan --}}
                        @if ($transaksis[0]->status_transaksi == false)
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <span class="font-weight-bold text-dark">A</span>
                                </div>
                            </td>
                            <td>
                                <p class="font-weight-bold text-dark mb-0">Sistem Penerangan</p>
                            </td>
                            <td></td>
                            <td></td>
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
                            <td></td>
                            <td></td>
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
                                <div class="form-check form-check-inline">
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
                                <span>Tidak Menyala:</span>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak menyala kanan" name="_dekat_dekat" id="customRadio1"
                                    @if ($penerangans[0]->lampuUtama_dekat == 'tidak menyala kanan')
                                        checked
                                    @else
                                        disabled
                                    @endif>
                                    <label class="custom-control-label" for="customRadio1">kanan</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak menyala kiri" name="lampuUtama_dekat" id="customRadio1"
                                    @if ($penerangans[0]->lampuUtama_dekat == 'tidak menyala kiri')
                                        checked
                                    @else
                                        disabled
                                    @endif>
                                    <label class="custom-control-label" for="customRadio1">kiri</label>
                                </div>
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
                            <div class="form-check form-check-inline">
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
                                <span>Tidak Menyala:</span>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak menyala kanan" name="lampuUtama_jauh" id="customRadio1"
                                    @if ($penerangans[0]->lampuUtama_jauh == 'tidak menyala kanan')
                                    checked
                                    @else
                                        disabled
                                    @endif>
                                    <label class="custom-control-label" for="customRadio1">kanan</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak menyala kiri" name="lampuUtama_jauh" id="customRadio1"
                                    @if ($penerangans[0]->lampuUtama_jauh == 'tidak menyala kiri')
                                    checked
                                    @else
                                        disabled
                                    @endif>
                                    <label class="custom-control-label" for="customRadio1">kiri</label>
                                </div>
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
                            <td></td>
                            <td></td>
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
                            <div class="form-check form-check-inline">
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
                                <span>Tidak Menyala:</span>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak menyala kanan" name="sein_depan" id="customRadio1"
                                    @if ($penerangans[0]->sein_depan == 'tidak menyala kanan')
                                        checked
                                    @else
                                        disabled
                                    @endif>
                                    <label class="custom-control-label" for="customRadio1">kanan</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak menyala kiri" name="sein_depan" id="customRadio1"
                                    @if ($penerangans[0]->sein_depan == 'tidak menyala kiri')
                                        checked
                                    @else
                                        disabled
                                    @endif>
                                    <label class="custom-control-label" for="customRadio1">kiri</label>
                                </div>
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
                            <div class="form-check form-check-inline">
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
                                <span>Tidak Menyala:</span>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak menyala kanan" name="sein_belakang" id="customRadio1"
                                    @if ($penerangans[0]->sein_belakang == 'tidak menyala kanan')
                                        checked
                                    @else
                                        disabled
                                    @endif>
                                    <label class="custom-control-label" for="customRadio1">kanan</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak menyala kiri" name="sein_belakang" id="customRadio1"
                                    @if ($penerangans[0]->sein_belakang == 'tidak menyala kiri')
                                        checked
                                    @else
                                        disabled
                                    @endif>
                                    <label class="custom-control-label" for="customRadio1">kiri</label>
                                </div>
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
                                <div class="form-check form-check-inline">
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
                                <span>Tidak Menyala:</span>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak menyala kanan" name="lampuRem" id="customRadio1"
                                    @if ($penerangans[0]->lampuRem == 'tidak menyala kanan')
                                        checked
                                    @else
                                        disabled
                                    @endif>
                                    <label class="custom-control-label" for="customRadio1">kanan</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak menyala kiri" name="lampuRem" id="customRadio1"
                                    @if ($penerangans[0]->lampuRem == 'tidak menyala kiri')
                                        checked
                                    @else
                                        disabled
                                    @endif>
                                    <label class="custom-control-label" for="customRadio1">kiri</label>
                                </div>
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
                                <div class="form-check form-check-inline">
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
                                <div class="form-check form-check-inline">
                                    <span>Tidak Menyala:</span>
                                    <input class="form-check-input" type="radio" value="tidak menyala kanan" name="lampuMundur" id="customRadio1"
                                    @if ($penerangans[0]->lampuMundur == 'tidak menyala kanan')
                                        checked
                                    @else
                                        disabled
                                    @endif>
                                    <label class="custom-control-label" for="customRadio1">kanan</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak menyala kiri" name="lampuMundur" id="customRadio1"
                                    @if ($penerangans[0]->lampuMundur == 'tidak menyala kiri')
                                        checked
                                    @else
                                        disabled
                                    @endif>
                                    <label class="custom-control-label" for="customRadio1">kiri</label>
                                </div>
                            </td>
                        </tr>
                        {{-- Sistem Pengereman --}}
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <span class="font-weight-bold text-dark">B</span>
                                </div>
                            </td>
                            <td>
                                <p class="font-weight-bold text-dark mb-0">Sistem Pengereman</p>
                            </td>
                            <td></td>
                            <td></td>
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
                                <div class="form-check form-check-inline">
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
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak berfungsi" name="remUtama" id="customRadio1"
                                    @if ($pengeremans[0]->remUtama == 'tidak berfungsi')
                                        checked
                                    @else
                                        disabled
                                    @endif>
                                    <label class="custom-control-label" for="customRadio1">Tidak berfungsi</label>
                                </div>
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
                                <div class="form-check form-check-inline">
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
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak berfungsi" name="remParkir" id="customRadio1"
                                    @if ($pengeremans[0]->remParkir == 'tidak berfungsi')
                                        checked
                                    @else
                                        disabled
                                    @endif>
                                    <label class="custom-control-label" for="customRadio1">Tidak berfungsi</label>
                                </div>
                            </td>
                        </tr>
                        {{-- C. Kondisi badan kendaraan --}}
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <span class="font-weight-bold text-dark">C</span>
                                </div>
                            </td>
                            <td>
                                <p class="font-weight-bold text-dark mb-0">Badan kendaraan</p>
                            </td>
                            <td></td>
                            <td></td>
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
                                <div class="form-check form-check-inline">
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
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="buruk" name="kaca_depan" id="customRadio1"
                                    @if ($badanKendaraans[0]->kaca_depan == 'buruk')
                                        checked
                                    @else
                                        disabled
                                    @endif>
                                    <label class="custom-control-label" for="customRadio1">Buruk</label>
                                </div>
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
                                <div class="form-check form-check-inline">
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
                                <span>Tidak Berfungsi:</span>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak berfungsi kanan" name="pintu_utama" id="customRadio1"
                                    @if ($badanKendaraans[0]->pintu_utama == 'tidak berfungsi kanan')
                                        checked
                                    @else
                                        disabled
                                    @endif>
                                    <label class="custom-control-label" for="customRadio1">kanan</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak berfungsi kiri" name="pintu_utama" id="customRadio1"
                                    @if ($badanKendaraans[0]->pintu_utama == 'tidak berfungsi kiri')
                                        checked
                                    @else
                                        disabled
                                    @endif>
                                    <label class="custom-control-label" for="customRadio1">kiri</label>
                                </div>
                            </td>
                        </tr>
                        {{-- D. Ban --}}
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <span class="font-weight-bold text-dark">D</span>
                                </div>
                            </td>
                            <td>
                                <p class="font-weight-bold text-dark mb-0">Ban</p>
                            </td>
                            <td></td>
                            <td></td>
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
                            <td></td>
                            <td></td>
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
                            <div class="form-check form-check-inline">
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
                                <span>Tidak Laik:</span>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak laik kanan" name="ban_depan" id="customRadio1"
                                    @if ($bans[0]->ban_depan == 'tidak laik kanan')
                                        checked
                                    @else
                                        disabled
                                    @endif>
                                    <label class="custom-control-label" for="customRadio1">kanan</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak laik kiri" name="ban_depan" id="customRadio1"
                                    @if ($bans[0]->ban_depan == 'tidak laik kiri')
                                        checked
                                    @else
                                        disabled
                                    @endif>
                                <label class="custom-control-label" for="customRadio1">kiri</label>
                                </div>
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
                            <div class="form-check form-check-inline">
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
                            <div class="form-check form-check-inline">
                                    <span>Tidak Laik:</span>
                                    <input class="form-check-input" type="radio" value="tidak laik kanan" name="ban_belakang" id="customRadio1"
                                    @if ($bans[0]->ban_belakang == 'tidak laik kanan')
                                        checked
                                    @else
                                        disabled
                                    @endif>
                                    <label class="custom-control-label" for="customRadio1">kanan</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak laik kiri" name="ban_belakang" id="customRadio1"
                                    @if ($bans[0]->ban_belakang == 'tidak laik kiri')
                                        checked
                                    @else
                                        disabled
                                    @endif>
                                    <label class="custom-control-label" for="customRadio1">kiri</label>
                                </div>
                            </td>
                        </tr>
                        {{-- E. Perlengkapan --}}
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <span class="font-weight-bold text-dark">E</span>
                                </div>
                            </td>
                            <td>
                                <p class="font-weight-bold text-dark mb-0">Perlengkapan</p>
                            </td>
                            <td></td>
                            <td></td>
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
                                <div class="form-check form-check-inline">
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
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak fungsi" name="sabukPengemudi" id="customRadio1"
                                    @if ($perlengkapans[0]->sabukPengemudi == 'tidak fungsi')
                                        checked
                                    @else
                                        disabled
                                    @endif>
                                    <label class="custom-control-label" for="customRadio1">Tidak fungsi</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak ada" name="sabukPengemudi" id="customRadio1"
                                    @if ($perlengkapans[0]->sabukPengemudi == 'tidak ada')
                                        checked
                                    @else
                                        disabled
                                    @endif>
                                    <label class="custom-control-label" for="customRadio1">tidak ada</label>
                                </div>
                            </td>
                        </tr>
                        {{-- F. Pengukur Kecepatan --}}
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <span class="font-weight-bold text-dark">F</span>
                                </div>
                            </td>
                            <td>
                                <p class="font-weight-bold text-dark mb-0">Pengukur Kecepatan</p>
                            </td>
                            <td></td>
                            <td></td>
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
                                <div class="form-check form-check-inline">
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
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak fungsi" name="pengukurKecepatan" id="customRadio1"
                                    @if ($pengukurKecepatans[0]->pengukurKecepatan == 'tidak fungsi')
                                        checked
                                    @else
                                        disabled
                                    @endif>
                                    <label class="custom-control-label" for="customRadio1">Tidak fungsi</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak ada" name="pengukurKecepatan" id="customRadio1"
                                    @if ($pengukurKecepatans[0]->pengukurKecepatan == 'tidak ada')
                                        checked
                                    @else
                                        disabled
                                    @endif>
                                    <label class="custom-control-label" for="customRadio1">tidak ada</label>
                                </div>
                            </td>
                        </tr>
                        {{-- G. Pengahapus kaca (wiper) --}}
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <span class="font-weight-bold text-dark">G</span>
                                </div>
                            </td>
                            <td>
                                <p class="font-weight-bold text-dark mb-0">Penghapus Kaca (WIPER)</p>
                            </td>
                            <td></td>
                            <td></td>
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
                                <div class="form-check form-check-inline">
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
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak fungsi" name="wiper" id="customRadio1"
                                    @if ($wipers[0]->wiper == 'tidak fungsi')
                                        checked
                                    @else
                                        disabled
                                    @endif>
                                    <label class="custom-control-label" for="customRadio1">Tidak fungsi</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak ada" name="wiper" id="customRadio1"
                                    @if ($wipers[0]->wiper == 'tidak ada')
                                        checked
                                    @else
                                        disabled
                                    @endif>
                                    <label class="custom-control-label" for="customRadio1">tidak ada</label>
                                </div>
                            </td>
                        </tr>
                        {{--H. Tanggap Darurat --}}
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <span class="font-weight-bold text-dark">H</span>
                                </div>
                            </td>
                            <td>
                                <p class="font-weight-bold text-dark mb-0">Tanggap Darurat</p>
                            </td>
                            <td></td>
                            <td></td>
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
                                <div class="form-check form-check-inline">
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
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak ada" name="pintuDarurat" id="customRadio1"
                                    @if ($tanggapDarurats[0]->pintuDarurat == 'tidak ada')
                                        checked
                                    @else
                                        disabled
                                    @endif>
                                    <label class="custom-control-label" for="customRadio1">tidak ada</label>
                                </div>
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
                                <div class="form-check form-check-inline">
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
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak ada" name="jendelaDarurat" id="customRadio1"
                                    @if ($tanggapDarurats[0]->jendelaDarurat == 'tidak ada')
                                        checked
                                    @else
                                        disabled
                                    @endif>
                                    <label class="custom-control-label" for="customRadio1">tidak ada</label>
                                </div>
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
                                <div class="form-check form-check-inline">
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
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak ada" name="alatPemecahkaca" id="customRadio1"
                                    @if ($tanggapDarurats[0]->alatPemecahkaca == 'tidak ada')
                                        checked
                                    @else
                                        disabled
                                    @endif>
                                    <label class="custom-control-label" for="customRadio1">tidak ada</label>
                                </div>
                            </td>
                        </tr>
                        @else
                        {{-- sistem penerangan --}}
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <span class="font-weight-bold text-dark">A</span>
                                </div>
                            </td>
                            <td>
                                <p class="font-weight-bold text-dark mb-0">Sistem Penerangan</p>
                            </td>
                            <td></td>
                            <td></td>
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
                            <td></td>
                            <td></td>
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
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="menyala" name="lampuUtama_dekat" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">semua menyala</label>
                                </div>
                            </td>
                            <td class="align-middle">
                                <span>Tidak Menyala:</span>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak menyala kanan" name="_dekat_dekat" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">kanan</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak menyala kiri" name="lampuUtama_dekat" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">kiri</label>
                                </div>
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
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="menyala" name="lampuUtama_jauh" id="customRadio1"
                                        disabled>
                                    <label class="custom-control-label" for="customRadio1">semua menyala</label>
                                </div>
                            </td>
                            <td class="align-middle">
                                <span>Tidak Menyala:</span>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak menyala kanan" name="lampuUtama_jauh" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">kanan</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak menyala kiri" name="lampuUtama_jauh" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">kiri</label>
                                </div>
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
                            <td></td>
                            <td></td>
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
                                <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" value="menyala" name="sein_depan" id="customRadio1"
                                        disabled>
                                        <label class="custom-control-label" for="customRadio1">semua menyala</label>
                                </div>
                            </td>
                            <td class="align-middle">
                                <span>Tidak Menyala:</span>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak menyala kanan" name="sein_depan" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">kanan</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak menyala kiri" name="sein_depan" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">kiri</label>
                                </div>
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
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="menyala" name="sein_belakang" id="customRadio1"
                                        disabled>
                                    <label class="custom-control-label" for="customRadio1">semua menyala</label>
                                </div>
                            </td>
                            <td class="align-middle">
                                <span>Tidak Menyala:</span>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak menyala kanan" name="sein_belakang" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">kanan</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak menyala kiri" name="sein_belakang" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">kiri</label>
                                </div>
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
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="menyala" name="lampuRem" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">semua menyala</label>
                                </div>
                            </td>
                            <td class="align-middle">
                                <span>Tidak Menyala:</span>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak menyala kanan" name="lampuRem" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">kanan</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak menyala kiri" name="lampuRem" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">kiri</label>
                                </div>
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
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="menyala" name="lampuMundur" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">semua menyala</label>
                                </div>
                            </td>
                            <td class="align-middle">
                                <div class="form-check form-check-inline">
                                    <span>Tidak Menyala:</span>
                                    <input class="form-check-input" type="radio" value="tidak menyala kanan" name="lampuMundur" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">kanan</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak menyala kiri" name="lampuMundur" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">kiri</label>
                                </div>
                            </td>
                        </tr>
                        {{-- Sistem Pengereman --}}
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <span class="font-weight-bold text-dark">B</span>
                                </div>
                            </td>
                            <td>
                                <p class="font-weight-bold text-dark mb-0">Sistem Pengereman</p>
                            </td>
                            <td></td>
                            <td></td>
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
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="berfungsi" name="remUtama" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">Berfungsi</label>
                                </div>
                            </td>
                            <td class="align-middle">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak berfungsi" name="remUtama" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">Tidak berfungsi</label>
                                </div>
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
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="berfungsi" name="remParkir" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">Berfungsi</label>
                                </div>
                            </td>
                            <td class="align-middle">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak berfungsi" name="remParkir" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">Tidak berfungsi</label>
                                </div>
                            </td>
                        </tr>
                        {{-- C. Kondisi badan kendaraan --}}
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <span class="font-weight-bold text-dark">C</span>
                                </div>
                            </td>
                            <td>
                                <p class="font-weight-bold text-dark mb-0">Badan kendaraan</p>
                            </td>
                            <td></td>
                            <td></td>
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
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="baik" name="kaca_depan" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">Baik</label>
                                </div>
                            </td>
                            <td class="align-middle">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="buruk" name="kaca_depan" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">Buruk</label>
                                </div>
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
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="berfungsi" name="pintu_utama" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">Semua berfungsi</label>
                                </div>
                            </td>
                            <td class="align-middle">
                                <span>Tidak Berfungsi:</span>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak berfungsi kanan" name="pintu_utama" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">kanan</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak berfungsi kiri" name="pintu_utama" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">kiri</label>
                                </div>
                            </td>
                        </tr>
                        {{-- D. Ban --}}
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <span class="font-weight-bold text-dark">D</span>
                                </div>
                            </td>
                            <td>
                                <p class="font-weight-bold text-dark mb-0">Ban</p>
                            </td>
                            <td></td>
                            <td></td>
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
                            <td></td>
                            <td></td>
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
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="laik" name="ban_depan" id="customRadio1"
                                        disabled>
                                    <label class="custom-control-label" for="customRadio1">Semua laik</label>
                                </div>
                            </td>
                            <td class="align-middle">
                                <span>Tidak Laik:</span>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak laik kanan" name="ban_depan" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">kanan</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak laik kiri" name="ban_depan" id="customRadio1"
                                    disabled>
                                <label class="custom-control-label" for="customRadio1">kiri</label>
                                </div>
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
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="laik" name="ban_belakang" id="customRadio1"
                                        disabled>
                                    <label class="custom-control-label" for="customRadio1">Semua laik</label>
                                </div>
                            </td>
                            <td class="align-middle">
                            <div class="form-check form-check-inline">
                                    <span>Tidak Laik:</span>
                                    <input class="form-check-input" type="radio" value="tidak laik kanan" name="ban_belakang" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">kanan</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak laik kiri" name="ban_belakang" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">kiri</label>
                                </div>
                            </td>
                        </tr>
                        {{-- E. Perlengkapan --}}
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <span class="font-weight-bold text-dark">E</span>
                                </div>
                            </td>
                            <td>
                                <p class="font-weight-bold text-dark mb-0">Perlengkapan</p>
                            </td>
                            <td></td>
                            <td></td>
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
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="ada" name="sabukPengemudi" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">Ada dan fungsi</label>
                                </div>
                            </td>
                            <td class="align-middle">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak fungsi" name="sabukPengemudi" id="customRadio1"
                                disabled>
                                    <label class="custom-control-label" for="customRadio1">Tidak fungsi</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak ada" name="sabukPengemudi" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">tidak ada</label>
                                </div>
                            </td>
                        </tr>
                        {{-- F. Pengukur Kecepatan --}}
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <span class="font-weight-bold text-dark">F</span>
                                </div>
                            </td>
                            <td>
                                <p class="font-weight-bold text-dark mb-0">Pengukur Kecepatan</p>
                            </td>
                            <td></td>
                            <td></td>
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
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="ada" name="pengukurKecepatan" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">Ada dan fungsi</label>
                                </div>
                            </td>
                            <td class="align-middle">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak fungsi" name="pengukurKecepatan" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">Tidak fungsi</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak ada" name="pengukurKecepatan" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">tidak ada</label>
                                </div>
                            </td>
                        </tr>
                        {{-- G. Pengahapus kaca (wiper) --}}
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <span class="font-weight-bold text-dark">G</span>
                                </div>
                            </td>
                            <td>
                                <p class="font-weight-bold text-dark mb-0">Penghapus Kaca (WIPER)</p>
                            </td>
                            <td></td>
                            <td></td>
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
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="ada" name="wiper" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">ada</label>
                                </div>
                            </td>
                            <td class="align-middle">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak fungsi" name="wiper" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">Tidak fungsi</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak ada" name="wiper" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">tidak ada</label>
                                </div>
                            </td>
                        </tr>
                        {{--H. Tanggap Darurat --}}
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <span class="font-weight-bold text-dark">H</span>
                                </div>
                            </td>
                            <td>
                                <p class="font-weight-bold text-dark mb-0">Tanggap Darurat</p>
                            </td>
                            <td></td>
                            <td></td>
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
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="ada" name="pintuDarurat" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">ada</label>
                                </div>
                            </td>
                            <td class="align-middle">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak ada" name="pintuDarurat" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">tidak ada</label>
                                </div>
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
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="ada" name="jendelaDarurat" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">ada</label>
                                </div>
                            </td>
                            <td class="align-middle">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak ada" name="jendelaDarurat" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">tidak ada</label>
                                </div>
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
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="ada" name="alatPemecahkaca" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">ada</label>
                                </div>
                            </td>
                            <td class="align-middle">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak ada" name="alatPemecahkaca" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">tidak ada</label>
                                </div>
                            </td>
                        </tr>
                        @endif
                    @else
                        {{-- sistem penerangan --}}
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <span class="font-weight-bold text-dark">A</span>
                                </div>
                            </td>
                            <td>
                                <p class="font-weight-bold text-dark mb-0">Sistem Penerangan</p>
                            </td>
                            <td></td>
                            <td></td>
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
                            <td></td>
                            <td></td>
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
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="menyala" name="lampuUtama_dekat" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">semua menyala</label>
                                </div>
                            </td>
                            <td class="align-middle">
                                <span>Tidak Menyala:</span>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak menyala kanan" name="_dekat_dekat" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">kanan</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak menyala kiri" name="lampuUtama_dekat" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">kiri</label>
                                </div>
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
                            <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="menyala" name="lampuUtama_jauh" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">semua menyala</label>
                            </div>
                            </td>
                            <td class="align-middle">
                                <span>Tidak Menyala:</span>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak menyala kanan" name="lampuUtama_jauh" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">kanan</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak menyala kiri" name="lampuUtama_jauh" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">kiri</label>
                                </div>
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
                            <td></td>
                            <td></td>
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
                            <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="menyala" name="sein_depan" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">semua menyala</label>
                            </div>
                            </td>
                            <td class="align-middle">
                                <span>Tidak Menyala:</span>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak menyala kanan" name="sein_depan" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">kanan</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak menyala kiri" name="sein_depan" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">kiri</label>
                                </div>
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
                            <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="menyala" name="sein_belakang" id="customRadio1"
                                    disabled>
                                <label class="custom-control-label" for="customRadio1">semua menyala</label>
                            </div>
                            </td>
                            <td class="align-middle">
                                <span>Tidak Menyala:</span>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak menyala kanan" name="sein_belakang" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">kanan</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak menyala kiri" name="sein_belakang" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">kiri</label>
                                </div>
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
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="menyala" name="lampuRem" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">semua menyala</label>
                                </div>
                            </td>
                            <td class="align-middle">
                                <span>Tidak Menyala:</span>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak menyala kanan" name="lampuRem" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">kanan</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak menyala kiri" name="lampuRem" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">kiri</label>
                                </div>
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
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="menyala" name="lampuMundur" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">semua menyala</label>
                                </div>
                            </td>
                            <td class="align-middle">
                                <div class="form-check form-check-inline">
                                    <span>Tidak Menyala:</span>
                                    <input class="form-check-input" type="radio" value="tidak menyala kanan" name="lampuMundur" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">kanan</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak menyala kiri" name="lampuMundur" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">kiri</label>
                                </div>
                            </td>
                        </tr>
                        {{-- Sistem Pengereman --}}
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <span class="font-weight-bold text-dark">B</span>
                                </div>
                            </td>
                            <td>
                                <p class="font-weight-bold text-dark mb-0">Sistem Pengereman</p>
                            </td>
                            <td></td>
                            <td></td>
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
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="berfungsi" name="remUtama" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">Berfungsi</label>
                                </div>
                            </td>
                            <td class="align-middle">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak berfungsi" name="remUtama" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">Tidak berfungsi</label>
                                </div>
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
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="berfungsi" name="remParkir" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">Berfungsi</label>
                                </div>
                            </td>
                            <td class="align-middle">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak berfungsi" name="remParkir" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">Tidak berfungsi</label>
                                </div>
                            </td>
                        </tr>
                        {{-- C. Kondisi badan kendaraan --}}
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <span class="font-weight-bold text-dark">C</span>
                                </div>
                            </td>
                            <td>
                                <p class="font-weight-bold text-dark mb-0">Badan kendaraan</p>
                            </td>
                            <td></td>
                            <td></td>
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
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="baik" name="kaca_depan" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">Baik</label>
                                </div>
                            </td>
                            <td class="align-middle">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="buruk" name="kaca_depan" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">Buruk</label>
                                </div>
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
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="berfungsi" name="pintu_utama" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">Semua berfungsi</label>
                                </div>
                            </td>
                            <td class="align-middle">
                                <span>Tidak Berfungsi:</span>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak berfungsi kanan" name="pintu_utama" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">kanan</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak berfungsi kiri" name="pintu_utama" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">kiri</label>
                                </div>
                            </td>
                        </tr>
                        {{-- D. Ban --}}
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <span class="font-weight-bold text-dark">D</span>
                                </div>
                            </td>
                            <td>
                                <p class="font-weight-bold text-dark mb-0">Ban</p>
                            </td>
                            <td></td>
                            <td></td>
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
                            <td></td>
                            <td></td>
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
                            <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="laik" name="ban_depan" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">Semua laik</label>
                            </div>
                            </td>
                            <td class="align-middle">
                                <span>Tidak Laik:</span>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak laik kanan" name="ban_depan" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">kanan</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak laik kiri" name="ban_depan" id="customRadio1"
                                    disabled>
                                <label class="custom-control-label" for="customRadio1">kiri</label>
                                </div>
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
                            <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="laik" name="ban_belakang" id="customRadio1"
                                    disabled>
                                <label class="custom-control-label" for="customRadio1">Semua laik</label>
                            </div>
                            </td>
                            <td class="align-middle">
                            <div class="form-check form-check-inline">
                                    <span>Tidak Laik:</span>
                                    <input class="form-check-input" type="radio" value="tidak laik kanan" name="ban_belakang" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">kanan</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak laik kiri" name="ban_belakang" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">kiri</label>
                                </div>
                            </td>
                        </tr>
                        {{-- E. Perlengkapan --}}
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <span class="font-weight-bold text-dark">E</span>
                                </div>
                            </td>
                            <td>
                                <p class="font-weight-bold text-dark mb-0">Perlengkapan</p>
                            </td>
                            <td></td>
                            <td></td>
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
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="ada" name="sabukPengemudi" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">Ada dan fungsi</label>
                                </div>
                            </td>
                            <td class="align-middle">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak fungsi" name="sabukPengemudi" id="customRadio1"
                                disabled>
                                    <label class="custom-control-label" for="customRadio1">Tidak fungsi</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak ada" name="sabukPengemudi" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">tidak ada</label>
                                </div>
                            </td>
                        </tr>
                        {{-- F. Pengukur Kecepatan --}}
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <span class="font-weight-bold text-dark">F</span>
                                </div>
                            </td>
                            <td>
                                <p class="font-weight-bold text-dark mb-0">Pengukur Kecepatan</p>
                            </td>
                            <td></td>
                            <td></td>
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
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="ada" name="pengukurKecepatan" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">Ada dan fungsi</label>
                                </div>
                            </td>
                            <td class="align-middle">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak fungsi" name="pengukurKecepatan" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">Tidak fungsi</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak ada" name="pengukurKecepatan" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">tidak ada</label>
                                </div>
                            </td>
                        </tr>
                        {{-- G. Pengahapus kaca (wiper) --}}
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <span class="font-weight-bold text-dark">G</span>
                                </div>
                            </td>
                            <td>
                                <p class="font-weight-bold text-dark mb-0">Penghapus Kaca (WIPER)</p>
                            </td>
                            <td></td>
                            <td></td>
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
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="ada" name="wiper" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">ada</label>
                                </div>
                            </td>
                            <td class="align-middle">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak fungsi" name="wiper" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">Tidak fungsi</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak ada" name="wiper" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">tidak ada</label>
                                </div>
                            </td>
                        </tr>
                        {{--H. Tanggap Darurat --}}
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <span class="font-weight-bold text-dark">H</span>
                                </div>
                            </td>
                            <td>
                                <p class="font-weight-bold text-dark mb-0">Tanggap Darurat</p>
                            </td>
                            <td></td>
                            <td></td>
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
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="ada" name="pintuDarurat" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">ada</label>
                                </div>
                            </td>
                            <td class="align-middle">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak ada" name="pintuDarurat" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">tidak ada</label>
                                </div>
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
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="ada" name="jendelaDarurat" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">ada</label>
                                </div>
                            </td>
                            <td class="align-middle">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak ada" name="jendelaDarurat" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">tidak ada</label>
                                </div>
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
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="ada" name="alatPemecahkaca" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">ada</label>
                                </div>
                            </td>
                            <td class="align-middle">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak ada" name="alatPemecahkaca" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">tidak ada</label>
                                </div>
                            </td>
                        </tr>
                    @endif
                </tbody>
                </table>
            </div>
        </div>

        {{-- unsur teknis penunjang --}}
        <div class="card-transparant border border-success px-2 my-3">
            <div class="my-3 mx-2">
                <h4>
                    III. Unsur Teknis Penunjang
                </h4>
            </div>
            <div class="table-responsive bg-transparant mx-2 mb-3">
                <table class="table table-bordered border-dark align-items-center mb-0">
                <thead>
                    <tr>
                        <th class="text-uppercase text-white text-xs text-truncate font-weight-bolder opacity-7 bg-primary bg-gradient">NO</th>
                        <th class="text-uppercase text-white text-xs text-truncate font-weight-bolder opacity-7 bg-primary bg-gradient">KRITERIA</th>
                        <th class="text-center text-uppercase text-white text-xs text-truncate font-weight-bolder bg-success">DIIJINKAN OPEARASIONAL</th>
                        <th class="text-center text-uppercase text-white text-xs text-truncate font-weight-bolder bg-danger">TILANG & DILARANG OPERASIONAL</th>
                    </tr>
                </thead>
                @if ($transaksis->count())
                <tbody class="fw-bold" style="color: #413F42">
                        @if ($transaksis[0]->status_transaksi == false)
                        {{-- A. sistem penerangan penunjang --}}
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <span class="font-weight-bold text-dark">A</span>
                                </div>
                            </td>
                            <td>
                                <p class="font-weight-bold text-dark mb-0">Sistem Penerangan</p>
                            </td>
                            <td></td>
                            <td></td>
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
                            <td></td>
                            <td></td>
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
                                <div class="form-check form-check-inline">
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
                                <span>Tidak Menyala:</span>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak menyala kanan" name="lampuPosisi_depan" id="customRadio1"
                                    @if ($peneranganPenunjangs[0]->lampuPosisi_depan == 'tidak menyala kanan')
                                        checked
                                    @else
                                        disabled
                                    @endif>
                                    <label class="custom-control-label" for="customRadio1">kanan</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak menyala kiri" name="lampuPosisi_depan" id="customRadio1"
                                    @if ($peneranganPenunjangs[0]->lampuPosisi_depan == 'tidak menyala kiri')
                                        checked
                                    @else
                                        disabled
                                    @endif>
                                    <label class="custom-control-label" for="customRadio1">kiri</label>
                                </div>
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
                                <div class="form-check form-check-inline">
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
                                <span>Tidak Menyala:</span>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak menyala kanan" name="lampuPosisi_belakang" id="customRadio1"
                                    @if ($peneranganPenunjangs[0]->lampuPosisi_belakang == 'tidak menyala kanan')
                                            checked
                                    @else
                                        disabled
                                    @endif>
                                    <label class="custom-control-label" for="customRadio1">kanan</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak menyala kiri" name="lampuPosisi_belakang" id="customRadio1"
                                    @if ($peneranganPenunjangs[0]->lampuPosisi_belakang == 'tidak menyala kiri')
                                        checked
                                    @else
                                        disabled
                                    @endif>
                                    <label class="custom-control-label" for="customRadio1">kiri</label>
                                </div>
                            </td>
                        </tr>
                        {{-- B. Badan Kendaraan --}}
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <span class="font-weight-bold text-dark">B</span>
                                </div>
                            </td>
                            <td>
                                <p class="font-weight-bold text-dark mb-0">Badan Kendaraan</p>
                            </td>
                            <td></td>
                            <td></td>
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
                                <div class="form-check form-check-inline">
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
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak sesuai" name="kacaSpion" id="customRadio1"
                                    @if ($badankendaraanPenunjangs[0]->kacaSpion == 'tidak sesuai')
                                        checked
                                    @else
                                        disabled
                                    @endif>
                                    <label class="custom-control-label" for="customRadio1">Tidak sesuai</label>
                                </div>
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
                                <div class="form-check form-check-inline">
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
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak fungsi" name="klakson" id="customRadio1"
                                    @if ($badankendaraanPenunjangs[0]->klakson == 'tidak fungsi')
                                        checked
                                    @else
                                        disabled
                                    @endif>
                                    <label class="custom-control-label" for="customRadio1">Tidak fungsi</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak ada" name="klakson" id="customRadio1"
                                    @if ($badankendaraanPenunjangs[0]->klakson == 'tidak ada')
                                        checked
                                    @else
                                        disabled
                                    @endif>
                                    <label class="custom-control-label" for="customRadio1">Tidak ada</label>
                                </div>
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
                                <div class="form-check form-check-inline">
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
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="keropos" name="lantaiTangga" id="customRadio1"
                                    @if ($badankendaraanPenunjangs[0]->lantaiTangga == 'keropos')
                                        checked
                                    @else
                                        disabled
                                    @endif>
                                    <label class="custom-control-label" for="customRadio1">Keropos / berlubang</label>
                                </div>
                            </td>
                        </tr>
                        {{-- C. Kapasitas tempat duduk --}}
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <span class="font-weight-bold text-dark">C</span>
                                </div>
                            </td>
                            <td>
                                <p class="font-weight-bold text-dark mb-0">Kapasitas Tempat Duduk</p>
                            </td>
                            <td></td>
                            <td></td>
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
                                <div class="form-check form-check-inline">
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
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak sesuai" name="tempatDuduk" id="customRadio1"
                                    @if ($kapasitasPenunjangs[0]->tempatDuduk == 'tidak sesuai')
                                        checked
                                    @else
                                        disabled
                                    @endif>
                                    <label class="custom-control-label" for="customRadio1">Tidak sesuai</label>
                                </div>
                            </td>
                        </tr>
                        {{-- D. Perlengkapan Kendaraan --}}
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <span class="font-weight-bold text-dark">D</span>
                                </div>
                            </td>
                            <td>
                                <p class="font-weight-bold text-dark mb-0">Perlengakapan Kendaraan</p>
                            </td>
                            <td></td>
                            <td></td>
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
                                <div class="form-check form-check-inline">
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
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak laik" name="banCadangan" id="customRadio1"
                                    @if ($perlengkapanPenunjangs[0]->banCadangan == 'tidak laik')
                                        checked
                                    @else
                                        disabled
                                    @endif>
                                    <label class="custom-control-label" for="customRadio1">Tidak laik</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak ada" name="banCadangan" id="customRadio1"
                                    @if ($perlengkapanPenunjangs[0]->banCadangan == 'tidak ada')
                                        checked
                                    @else
                                        disabled
                                    @endif>
                                    <label class="custom-control-label" for="customRadio1">Tidak ada</label>
                                </div>
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
                                <div class="form-check form-check-inline">
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
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak ada" name="segitigaPengaman" id="customRadio1"
                                    @if ($perlengkapanPenunjangs[0]->segitigaPengaman == 'tidak ada')
                                        checked
                                    @else
                                        disabled
                                    @endif>
                                    <label class="custom-control-label" for="customRadio1">Tidak ada</label>
                                </div>
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
                                <div class="form-check form-check-inline">
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
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak ada" name="dongkrak" id="customRadio1"
                                    @if ($perlengkapanPenunjangs[0]->dongkrak == 'tidak ada')
                                        checked
                                    @else
                                        disabled
                                    @endif>
                                    <label class="custom-control-label" for="customRadio1">Tidak ada</label>
                                </div>
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
                                <div class="form-check form-check-inline">
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
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak ada" name="pembukaRoda" id="customRadio1"
                                    @if ($perlengkapanPenunjangs[0]->pembukaRoda == 'tidak ada')
                                        checked
                                    @else
                                        disabled
                                    @endif>
                                    <label class="custom-control-label" for="customRadio1">Tidak ada</label>
                                </div>
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
                                <div class="form-check form-check-inline">
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
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak fungsi" name="lampuSenter" id="customRadio1"
                                    @if ($perlengkapanPenunjangs[0]->lampuSenter == 'tidak fungsi')
                                        checked
                                    @else
                                        disabled
                                    @endif>
                                    <label class="custom-control-label" for="customRadio1">Tidak fungsi</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak ada" name="lampuSenter" id="customRadio1"
                                    @if ($perlengkapanPenunjangs[0]->lampuSenter == 'tidak ada')
                                        checked
                                    @else
                                        disabled
                                    @endif>
                                    <label class="custom-control-label" for="customRadio1">Tidak ada</label>
                                </div>
                            </td>
                        </tr>
                        @else
                        {{-- A. sistem penerangan penunjang --}}
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <span class="font-weight-bold text-dark">A</span>
                                </div>
                            </td>
                            <td>
                                <p class="font-weight-bold text-dark mb-0">Sistem Penerangan</p>
                            </td>
                            <td></td>
                            <td></td>
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
                            <td></td>
                            <td></td>
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
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="menyala" name="lampuPosisi_depan" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">semua menyala</label>
                                </div>
                            </td>
                            <td class="align-middle">
                                <span>Tidak Menyala:</span>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak menyala kanan" name="lampuPosisi_depan" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">kanan</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak menyala kiri" name="lampuPosisi_depan" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">kiri</label>
                                </div>
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
                                <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" value="menyala" name="lampuPosisi_belakang" id="customRadio1"
                                        disabled>
                                        <label class="custom-control-label" for="customRadio1">semua menyala</label>
                                </div>
                            </td>
                            <td class="align-middle">
                                <span>Tidak Menyala:</span>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak menyala kanan" name="lampuPosisi_belakang" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">kanan</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak menyala kiri" name="lampuPosisi_belakang" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">kiri</label>
                                </div>
                            </td>
                        </tr>
                        {{-- B. Badan Kendaraan --}}
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <span class="font-weight-bold text-dark">B</span>
                                </div>
                            </td>
                            <td>
                                <p class="font-weight-bold text-dark mb-0">Badan Kendaraan</p>
                            </td>
                            <td></td>
                            <td></td>
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
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="sesuai" name="kacaSpion" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">Sesuai</label>
                                </div>
                            </td>
                            <td class="align-middle">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak sesuai" name="kacaSpion" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">Tidak sesuai</label>
                                </div>
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
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="ada" name="klakson" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">ada</label>
                                </div>
                            </td>
                            <td class="align-middle">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak fungsi" name="klakson" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">Tidak fungsi</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak ada" name="klakson" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">Tidak ada</label>
                                </div>
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
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="baik" name="lantaiTangga" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">baik</label>
                                </div>
                            </td>
                            <td class="align-middle">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="keropos" name="lantaiTangga" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">Keropos / berlubang</label>
                                </div>
                            </td>
                        </tr>
                        {{-- C. Kapasitas tempat duduk --}}
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <span class="font-weight-bold text-dark">C</span>
                                </div>
                            </td>
                            <td>
                                <p class="font-weight-bold text-dark mb-0">Kapasitas Tempat Duduk</p>
                            </td>
                            <td></td>
                            <td></td>
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
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="sesuai" name="tempatDuduk" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">sesuai</label>
                                </div>
                            </td>
                            <td class="align-middle">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak sesuai" name="tempatDuduk" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">Tidak sesuai</label>
                                </div>
                            </td>
                        </tr>
                        {{-- D. Perlengkapan Kendaraan --}}
                        <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                    <span class="font-weight-bold text-dark">D</span>
                                </div>
                            </td>
                            <td>
                                <p class="font-weight-bold text-dark mb-0">Perlengakapan Kendaraan</p>
                            </td>
                            <td></td>
                            <td></td>
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
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="ada" name="banCadangan" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">Ada dan laik</label>
                                </div>
                            </td>
                            <td class="align-middle">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak laik" name="banCadangan" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">Tidak laik</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak ada" name="banCadangan" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">Tidak ada</label>
                                </div>
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
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="ada" name="segitigaPengaman" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">Ada</label>
                                </div>
                            </td>
                            <td class="align-middle">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak ada" name="segitigaPengaman" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">Tidak ada</label>
                                </div>
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
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="ada" name="dongkrak" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">Ada</label>
                                </div>
                            </td>
                            <td class="align-middle">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak ada" name="dongkrak" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">Tidak ada</label>
                                </div>
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
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="ada" name="pembukaRoda" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">Ada</label>
                                </div>
                            </td>
                            <td class="align-middle">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak ada" name="pembukaRoda" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">Tidak ada</label>
                                </div>
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
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="ada" name="lampuSenter" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">Ada</label>
                                </div>
                            </td>
                            <td class="align-middle">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak fungsi" name="lampuSenter" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">Tidak fungsi</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="tidak ada" name="lampuSenter" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">Tidak ada</label>
                                </div>
                            </td>
                        </tr>
                        @endif
                    </tbody>
                    @else
                    <tbody>
                    {{-- A. sistem penerangan penunjang --}}
                    <tr>
                        <td>
                            <div class="d-flex px-2 py-1">
                                <span class="font-weight-bold text-dark">A</span>
                            </div>
                        </td>
                        <td>
                            <p class="font-weight-bold text-dark mb-0">Sistem Penerangan</p>
                        </td>
                        <td></td>
                        <td></td>
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
                        <td></td>
                        <td></td>
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
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" value="menyala" name="lampuPosisi_depan" id="customRadio1"
                                disabled>
                                <label class="custom-control-label" for="customRadio1">semua menyala</label>
                            </div>
                        </td>
                        <td class="align-middle">
                            <span>Tidak Menyala:</span>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" value="tidak menyala kanan" name="lampuPosisi_depan" id="customRadio1"
                                disabled>
                                <label class="custom-control-label" for="customRadio1">kanan</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" value="tidak menyala kiri" name="lampuPosisi_depan" id="customRadio1"
                                disabled>
                                <label class="custom-control-label" for="customRadio1">kiri</label>
                            </div>
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
                            <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" value="menyala" name="lampuPosisi_belakang" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label" for="customRadio1">semua menyala</label>
                            </div>
                        </td>
                        <td class="align-middle">
                            <span>Tidak Menyala:</span>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" value="tidak menyala kanan" name="lampuPosisi_belakang" id="customRadio1"
                                disabled>
                                <label class="custom-control-label" for="customRadio1">kanan</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" value="tidak menyala kiri" name="lampuPosisi_belakang" id="customRadio1"
                                disabled>
                                <label class="custom-control-label" for="customRadio1">kiri</label>
                            </div>
                        </td>
                    </tr>
                    {{-- B. Badan Kendaraan --}}
                    <tr>
                        <td>
                            <div class="d-flex px-2 py-1">
                                <span class="font-weight-bold text-dark">B</span>
                            </div>
                        </td>
                        <td>
                            <p class="font-weight-bold text-dark mb-0">Badan Kendaraan</p>
                        </td>
                        <td></td>
                        <td></td>
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
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" value="sesuai" name="kacaSpion" id="customRadio1"
                                disabled>
                                <label class="custom-control-label" for="customRadio1">Sesuai</label>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" value="tidak sesuai" name="kacaSpion" id="customRadio1"
                                disabled>
                                <label class="custom-control-label" for="customRadio1">Tidak sesuai</label>
                            </div>
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
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" value="ada" name="klakson" id="customRadio1"
                                disabled>
                                <label class="custom-control-label" for="customRadio1">ada</label>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" value="tidak fungsi" name="klakson" id="customRadio1"
                                disabled>
                                <label class="custom-control-label" for="customRadio1">Tidak fungsi</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" value="tidak ada" name="klakson" id="customRadio1"
                                disabled>
                                <label class="custom-control-label" for="customRadio1">Tidak ada</label>
                            </div>
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
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" value="baik" name="lantaiTangga" id="customRadio1"
                                disabled>
                                <label class="custom-control-label" for="customRadio1">baik</label>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" value="keropos" name="lantaiTangga" id="customRadio1"
                                disabled>
                                <label class="custom-control-label" for="customRadio1">Keropos / berlubang</label>
                            </div>
                        </td>
                    </tr>
                    {{-- C. Kapasitas tempat duduk --}}
                    <tr>
                        <td>
                            <div class="d-flex px-2 py-1">
                                <span class="font-weight-bold text-dark">C</span>
                            </div>
                        </td>
                        <td>
                            <p class="font-weight-bold text-dark mb-0">Kapasitas Tempat Duduk</p>
                        </td>
                        <td></td>
                        <td></td>
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
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" value="sesuai" name="tempatDuduk" id="customRadio1"
                                disabled>
                                <label class="custom-control-label" for="customRadio1">sesuai</label>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" value="tidak sesuai" name="tempatDuduk" id="customRadio1"
                                disabled>
                                <label class="custom-control-label" for="customRadio1">Tidak sesuai</label>
                            </div>
                        </td>
                    </tr>
                    {{-- D. Perlengkapan Kendaraan --}}
                    <tr>
                        <td>
                            <div class="d-flex px-2 py-1">
                                <span class="font-weight-bold text-dark">D</span>
                            </div>
                        </td>
                        <td>
                            <p class="font-weight-bold text-dark mb-0">Perlengakapan Kendaraan</p>
                        </td>
                        <td></td>
                        <td></td>
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
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" value="ada" name="banCadangan" id="customRadio1"
                                disabled>
                                <label class="custom-control-label" for="customRadio1">Ada dan laik</label>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" value="tidak laik" name="banCadangan" id="customRadio1"
                                disabled>
                                <label class="custom-control-label" for="customRadio1">Tidak laik</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" value="tidak ada" name="banCadangan" id="customRadio1"
                                disabled>
                                <label class="custom-control-label" for="customRadio1">Tidak ada</label>
                            </div>
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
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" value="ada" name="segitigaPengaman" id="customRadio1"
                                disabled>
                                <label class="custom-control-label" for="customRadio1">Ada</label>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" value="tidak ada" name="segitigaPengaman" id="customRadio1"
                                disabled>
                                <label class="custom-control-label" for="customRadio1">Tidak ada</label>
                            </div>
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
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" value="ada" name="dongkrak" id="customRadio1"
                                disabled>
                                <label class="custom-control-label" for="customRadio1">Ada</label>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" value="tidak ada" name="dongkrak" id="customRadio1"
                                disabled>
                                <label class="custom-control-label" for="customRadio1">Tidak ada</label>
                            </div>
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
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" value="ada" name="pembukaRoda" id="customRadio1"
                                disabled>
                                <label class="custom-control-label" for="customRadio1">Ada</label>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" value="tidak ada" name="pembukaRoda" id="customRadio1"
                                disabled>
                                <label class="custom-control-label" for="customRadio1">Tidak ada</label>
                            </div>
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
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" value="ada" name="lampuSenter" id="customRadio1"
                                disabled>
                                <label class="custom-control-label" for="customRadio1">Ada</label>
                            </div>
                        </td>
                        <td class="align-middle">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" value="tidak fungsi" name="lampuSenter" id="customRadio1"
                                disabled>
                                <label class="custom-control-label" for="customRadio1">Tidak fungsi</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" value="tidak ada" name="lampuSenter" id="customRadio1"
                                disabled>
                                <label class="custom-control-label" for="customRadio1">Tidak ada</label>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                    @endif
                </table>
            </div>
        </div>

        {{-- kesimpulan --}}
        <div class="card border-success px-2 my-3">
            <div class="my-3 mx-2">
                <h4>
                    KESIMPULAN
                </h4>
            </div>
            <div class="table-responsive mx-2">
                <table class="table table-bordered border-dark align-items-center mb-0">
                    <thead>
                        <tr>
                        <th class="text-center text-uppercase text-white text-xs text-truncate font-weight-bolder bg-success bg-gradient">LAIK JALAN</th>
                        <th class="text-center text-uppercase text-white text-xs text-truncate font-weight-bolder bg-danger bg-gradient">TIDAK LAIK JALAN</th>
                        <th class="text-center text-uppercase text-secondary text-xs text-truncate font-weight-bolder">CATATAN</th>
                        </tr>
                    </thead>
                    @if ($transaksis->count())
                    <tbody class="fw-bold" style="color: #413F42">
                        <tr>
                            <td class="align-middle text-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="ada" id="customRadio1"
                                    @if ($transaksis[0]->status_firstVerifikasi == true && $transaksis[0]->status_secondVerifikasi == true)
                                        checked
                                    @else
                                        disabled
                                    @endif>
                                    <label class="custom-control-label" for="customRadio1">DIIJINKAN OPERASIONAL</label>
                                </div>
                            </td>
                            <td class="align-middle text-center">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="tidak ada" id="customRadio1"
                                    @if ($transaksis[0]->status_firstVerifikasi == false || $transaksis[0]->status_secondVerifikasi == false)
                                        checked
                                    @else
                                        disabled
                                    @endif>
                                    <label class="custom-control-label" for="customRadio1">TILANG DAN DILARANG OPERASIONAL</label>
                                </div>
                            </td>
                            <td class="align-middle">
                                @if ($transaksis[0]->status_firstVerifikasi == true && $transaksis[0]->status_secondVerifikasi == true)
                                    <span>DIIJINKAN OPERASIONAL</span>
                                @else
                                    <span>TILANG DAN DILARANG OPERASIONAL</span>
                                @endif
                            </td>
                        </tr>
                    </tbody>
                    @else
                    <tbody style="color: #413F42">
                        <tr>
                            <td class="align-middle text-center border">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="ada" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label fw-bold" for="customRadio1">DIIJINKAN OPERASIONAL</label>
                                </div>
                            </td>
                            <td class="align-middle text-center border">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" value="tidak ada" id="customRadio1"
                                    disabled>
                                    <label class="custom-control-label fw-bold" for="customRadio1">TILANG DAN DILARANG OPERASIONAL</label>
                                </div>
                            </td>
                            <td class="align-middle">

                            </td>
                        </tr>
                    </tbody>
                    @endif
                </table>
            </div>
            @if ($transaksis->count())
                <div class="row mt-2 mb-5 mx-2">
                    <h4>CATATAN KENDARAAN</h4>
                    <div class="col">
                        <span>wajib diisi :</span>
                        <div class="card" style="width: 23rem; height: 15rem;">
                            <div class="card-body">
                                @if ($transaksis[0]->status_firstVerifikasi == true && $transaksis[0]->status_secondVerifikasi == true)
                                    <p class="card-text">DIIJINKAN OPERASIONAL</p>
                                @else
                                    <p class="card-text">TILANG DAN DILARANG OPERASIONAL</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <span>foto kerusakan :</span>
                        <div class="card" style="width: 23rem; height: 15rem;">
                            @if ($transaksis[0]->image)
                                <img src="{{ asset('upload/bukti/' . $transaksis[0]->image) }}" style="max-height: 15rem;" alt="">
                            @endif
                        </div>
                    </div>
                </div>
            @else
                <div class="row mt-2 mb-5 mx-2">
                    <h4>CATATAN KENDARAAN</h4>
                    <div class="col">
                        <span>wajib diisi :</span>
                        <div class="card" style="width: 23rem; height: 15rem;">
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <span>foto kerusakan :</span>
                        <div class="card" style="width: 23rem; height: 15rem;">

                        </div>
                    </div>
                </div>
            @endif
            @if ($transaksis->count())
                <div class="table-responsive mb-3 mx-2">
                        <div class="row">
                                <div class="col-md d-flex align-items-start flex-column border" style="height: 200px;">
                                    <div class="px-2 py-1">
                                        <p>Catatan:
                                        </p>
                                        <p>
                                            Jika setiap unsur terdapat pelanggaran,
                                            maka sanksi yang dikenakan adalah sanksi yang paling berat
                                        </p>
                                    </div>
                                </div>
                                @if ($transaksis->count())
                                <div class="col-md d-flex align-items-start flex-column border" style="height: 200px;">
                                    <div class="mb-auto px-2 py-1">
                                        <h6>PENGEMUDI</h6>
                                    </div>
                                    <div class="px-2 py-1">
                                        <h6>NAMA: {{ $vehicle->driver }}</h6>
                                    </div>
                                </div>
                                <div class="col-md d-flex align-items-start flex-column border" style="height: 200px;">
                                    <div class="mb-auto px-2 py-1">
                                        <h6>PENYEDIK PEGAWAI NEGERI SIPIL</h6>
                                    </div>
                                    <div class="px-2 py-1">
                                        <h6>NIP: {{ $transaksis[0]->ppns_nip }}</h6>
                                        <h6>NAMA: {{ $transaksis[0]->ppns_name }}</h6>
                                    </div>
                                </div>
                                <div class="col-md d-flex align-items-start flex-column border" style="height: 200px;">
                                    <div class="mb-auto px-2 py-1">
                                        <h6>PENGUJI KENDARAAN BERMOTOR</h6>
                                    </div>
                                    <div class="px-2 py-1">
                                        <h6>NIP: {{ $transaksis[0]->penguji_nip }}</h6>
                                        <h6>NAMA: {{ $transaksis[0]->penguji_name }}</h6>
                                    </div>
                                </div>
                                @endif
                        </div>
                </div>
            @else
                <div class="table-responsive card mb-3 mx-2">
                    <div class="row">
                            <div class="col-md d-flex align-items-start flex-column border" style="height: 200px;">
                                <div class="px-2 py-1">
                                    <p>Catatan:
                                    </p>
                                    <p>
                                        Jika setiap unsur terdapat pelanggaran,
                                        maka sanksi yang dikenakan adalah sanksi yang paling berat
                                    </p>
                                </div>
                            </div>
                            <div class="col-md d-flex align-items-start flex-column border" style="height: 200px;">
                                <div class="mb-auto px-2 py-1">
                                    <h6>PENGEMUDI</h6>
                                </div>
                                <div class="px-2 py-1">
                                    <h6>NAMA: {{ $vehicle->driver }}</h6>
                                </div>
                            </div>
                            <div class="col-md d-flex align-items-start flex-column border" style="height: 200px;">
                                <div class="mb-auto px-2 py-1">
                                    <h6>PENYEDIK PEGAWAI NEGERI SIPIL</h6>
                                </div>
                                <div class="px-2 py-1">
                                    <h6>NIP: </h6>
                                    <h6>NAMA: </h6>
                                </div>
                            </div>
                            <div class="col-md d-flex align-items-start flex-column border" style="height: 200px;">
                                <div class="mb-auto px-2 py-1">
                                    <h6>PENGUJI KENDARAAN BERMOTOR</h6>
                                </div>
                                <div class="px-2 py-1">
                                    <h6>NIP: </h6>
                                    <h6>NAMA: </h6>
                                </div>
                            </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
