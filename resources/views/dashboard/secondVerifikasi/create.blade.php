@extends('dashboard.layouts.main')

@section('container')
<div class="card container border-success">
    <div class="row">
        <div class="border col-md-1">
            <span>NO.STUK</span>
        </div>
        <div class="border col">
            {{ $verifikasi->vehicle->number_stuk }}
        </div>
        <div class="border col-md-1">
            <span>NO.KEND</span>
        </div>
        <div class="border col">
            {{ $verifikasi->vehicle->number_vehicle }}
        </div>
    </div>
</div>
<form method="post" action="/dashboard/secondVerifikasis">
    @csrf
    <div class="input-group input-group-outline">
        <label class="form-label"></label>
        <input name="verifikasi_id" type="hidden" class="form-control hiden" value="{{ $verifikasi->id }}">
        <input name="vehicle_id" type="hidden" class="form-control hiden" value="{{ $verifikasi->vehicle_id }}">
    </div>
    {{-- unsur teknis utama --}}
    <div class="card-transparant border border-success px-2">
        <div class="my-3">
            <h3>
                II. Unsur Teknis Utama
            </h3>
        </div>
        <div class="table-responsive bg-transparant card mb-3">
            <table class="table table-bordered border-dark align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-white text-xs font-weight-bolder opacity-7 bg-primary bg-gradient">NO</th>
                  <th class="text-uppercase text-white text-xs font-weight-bolder opacity-7 bg-primary bg-gradient">KRITERIA</th>
                  <th class="text-center text-uppercase text-white text-xs font-weight-bolder bg-success bg-gradient">DIIJINKAN OPEARASIONAL</th>
                  <th class="text-center text-uppercase text-white text-xs font-weight-bolder bg-danger bg-gradient">TILANG & DILARANG OPERASIONAL</th>
                </tr>
              </thead>
              <tbody class="fw-bold" style="color: #413F42">
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
                        <input class="form-check-input" type="radio" value="menyala" name="lampuUtama_dekat" id="customRadio1">
                        <label class="custom-control-label" for="customRadio1">semua menyala</label>
                    </div>
                  </td>
                  <td class="align-middle">
                    <span>Tidak Menyala:</span>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="tidak menyala kanan" name="lampuUtama_dekat" id="customRadio1">
                        <label class="custom-control-label" for="customRadio1">kanan</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="tidak menyala kiri" name="lampuUtama_dekat" id="customRadio1">
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
                          <input class="form-check-input" type="radio" value="menyala" name="lampuUtama_jauh" id="customRadio1">
                          <label class="custom-control-label" for="customRadio1">semua menyala</label>
                      </div>
                    </td>
                    <td class="align-middle">
                        <span>Tidak Menyala:</span>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" value="tidak menyala kanan" name="lampuUtama_jauh" id="customRadio1">
                          <label class="custom-control-label" for="customRadio1">kanan</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" value="tidak menyala kiri" name="lampuUtama_jauh" id="customRadio1">
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
                          <input class="form-check-input" type="radio" value="menyala" name="sein_depan" id="customRadio1">
                          <label class="custom-control-label" for="customRadio1">semua menyala</label>
                      </div>
                    </td>
                    <td class="align-middle">
                        <span>Tidak Menyala:</span>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" value="tidak menyala kanan" name="sein_depan" id="customRadio1">
                          <label class="custom-control-label" for="customRadio1">kanan</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" value="tidak menyala kiri" name="sein_depan" id="customRadio1">
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
                          <input class="form-check-input" type="radio" value="menyala" name="sein_belakang" id="customRadio1">
                          <label class="custom-control-label" for="customRadio1">semua menyala</label>
                      </div>
                    </td>
                    <td class="align-middle">
                        <span>Tidak Menyala:</span>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" value="tidak menyala kanan" name="sein_belakang" id="customRadio1">
                          <label class="custom-control-label" for="customRadio1">kanan</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" value="tidak menyala kiri" name="sein_belakang" id="customRadio1">
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
                            <input class="form-check-input" type="radio" value="menyala" name="lampuRem" id="customRadio1">
                            <label class="custom-control-label" for="customRadio1">semua menyala</label>
                        </div>
                    </td>
                    <td class="align-middle">
                        <span>Tidak Menyala:</span>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" value="tidak menyala kanan" name="lampuRem" id="customRadio1">
                            <label class="custom-control-label" for="customRadio1">kanan</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" value="tidak menyala kiri" name="lampuRem" id="customRadio1">
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
                            <input class="form-check-input" type="radio" value="menyala" name="lampuMundur" id="customRadio1">
                            <label class="custom-control-label" for="customRadio1">semua menyala</label>
                        </div>
                    </td>
                    <td class="align-middle">
                        <span>Tidak Menyala:</span>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" value="tidak menyala kanan" name="lampuMundur" id="customRadio1">
                            <label class="custom-control-label" for="customRadio1">kanan</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" value="tidak menyala kiri" name="lampuMundur" id="customRadio1">
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
                            <input class="form-check-input" type="radio" value="berfungsi" name="remUtama" id="customRadio1">
                            <label class="custom-control-label" for="customRadio1">Berfungsi</label>
                        </div>
                    </td>
                    <td class="align-middle">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" value="tidak berfungsi" name="remUtama" id="customRadio1">
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
                            <input class="form-check-input" type="radio" value="berfungsi" name="remParkir" id="customRadio1">
                            <label class="custom-control-label" for="customRadio1">Berfungsi</label>
                        </div>
                    </td>
                    <td class="align-middle">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" value="tidak berfungsi" name="remParkir" id="customRadio1">
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
                            <input class="form-check-input" type="radio" value="baik" name="kaca_depan" id="customRadio1">
                            <label class="custom-control-label" for="customRadio1">Baik</label>
                        </div>
                    </td>
                    <td class="align-middle">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" value="buruk" name="kaca_depan" id="customRadio1">
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
                            <input class="form-check-input" type="radio" value="berfungsi" name="pintu_utama" id="customRadio1">
                            <label class="custom-control-label" for="customRadio1">Semua berfungsi</label>
                        </div>
                    </td>
                    <td class="align-middle">
                        <span>Tidak Berfungsi:</span>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" value="tidak berfungsi kanan" name="pintu_utama" id="customRadio1">
                            <label class="custom-control-label" for="customRadio1">kanan</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" value="tidak berfungsi kiri" name="pintu_utama" id="customRadio1">
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
                          <input class="form-check-input" type="radio" value="laik" name="ban_depan" id="customRadio1">
                          <label class="custom-control-label" for="customRadio1">Semua laik</label>
                      </div>
                    </td>
                    <td class="align-middle">
                        <span>Tidak Laik:</span>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" value="tidak laik kanan" name="ban_depan" id="customRadio1">
                          <label class="custom-control-label" for="customRadio1">kanan</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" value="tidak laik kiri" name="ban_depan" id="customRadio1">
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
                          <input class="form-check-input" type="radio" value="laik" name="ban_belakang" id="customRadio1">
                          <label class="custom-control-label" for="customRadio1">Semua laik</label>
                      </div>
                    </td>
                    <td class="align-middle">
                        <span>Tidak Laik:</span>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" value="tidak laik kanan" name="ban_belakang" id="customRadio1">
                          <label class="custom-control-label" for="customRadio1">kanan</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" value="tidak laik kiri" name="ban_belakang" id="customRadio1">
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
                            <input class="form-check-input" type="radio" value="ada" name="sabukPengemudi" id="customRadio1">
                            <label class="custom-control-label" for="customRadio1">Ada dan fungsi</label>
                        </div>
                    </td>
                    <td class="align-middle">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" value="tidak fungsi" name="sabukPengemudi" id="customRadio1">
                            <label class="custom-control-label" for="customRadio1">Tidak fungsi</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" value="tidak ada" name="sabukPengemudi" id="customRadio1">
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
                            <input class="form-check-input" type="radio" value="ada" name="pengukurKecepatan" id="customRadio1">
                            <label class="custom-control-label" for="customRadio1">Ada dan fungsi</label>
                        </div>
                    </td>
                    <td class="align-middle">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" value="tidak fungsi" name="pengukurKecepatan" id="customRadio1">
                            <label class="custom-control-label" for="customRadio1">Tidak fungsi</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" value="tidak ada" name="pengukurKecepatan" id="customRadio1">
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
                            <input class="form-check-input" type="radio" value="ada" name="wiper" id="customRadio1">
                            <label class="custom-control-label" for="customRadio1">ada</label>
                        </div>
                    </td>
                    <td class="align-middle">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" value="tidak fungsi" name="wiper" id="customRadio1">
                            <label class="custom-control-label" for="customRadio1">Tidak fungsi</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" value="tidak ada" name="wiper" id="customRadio1">
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
                            <input class="form-check-input" type="radio" value="ada" name="pintuDarurat" id="customRadio1">
                            <label class="custom-control-label" for="customRadio1">ada</label>
                        </div>
                    </td>
                    <td class="align-middle">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" value="tidak ada" name="pintuDarurat" id="customRadio1">
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
                            <input class="form-check-input" type="radio" value="ada" name="jendelaDarurat" id="customRadio1">
                            <label class="custom-control-label" for="customRadio1">ada</label>
                        </div>
                    </td>
                    <td class="align-middle">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" value="tidak ada" name="jendelaDarurat" id="customRadio1">
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
                            <input class="form-check-input" type="radio" value="ada" name="alatPemecahkaca" id="customRadio1">
                            <label class="custom-control-label" for="customRadio1">ada</label>
                        </div>
                    </td>
                    <td class="align-middle">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" value="tidak ada" name="alatPemecahkaca" id="customRadio1">
                            <label class="custom-control-label" for="customRadio1">tidak ada</label>
                        </div>
                    </td>
                </tr>
              </tbody>
            </table>
          </div>
    </div>
    {{-- unsur teknis penunjang --}}
    <div class="card-transparant border border-success px-2 my-3">
        <div class="my-3">
            <h3>
                III. Unsur Teknis Penunjang
            </h3>
        </div>
        <div class="table-responsive bg-transparant card mb-3">
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
                        <input class="form-check-input" type="radio" value="menyala" name="lampuPosisi_depan" id="customRadio1">
                        <label class="custom-control-label" for="customRadio1">semua menyala</label>
                    </div>
                  </td>
                  <td class="align-middle">
                    <span>Tidak Menyala:</span>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="tidak menyala kanan" name="lampuPosisi_depan" id="customRadio1">
                        <label class="custom-control-label" for="customRadio1">kanan</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" value="tidak menyala kiri" name="lampuPosisi_depan" id="customRadio1">
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
                          <input class="form-check-input" type="radio" value="menyala" name="lampuPosisi_belakang" id="customRadio1">
                          <label class="custom-control-label" for="customRadio1">semua menyala</label>
                      </div>
                    </td>
                    <td class="align-middle">
                        <span>Tidak Menyala:</span>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" value="tidak menyala kanan" name="lampuPosisi_belakang" id="customRadio1">
                          <label class="custom-control-label" for="customRadio1">kanan</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" value="tidak menyala kiri" name="lampuPosisi_belakang" id="customRadio1">
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
                            <input class="form-check-input" type="radio" value="sesuai" name="kacaSpion" id="customRadio1">
                            <label class="custom-control-label" for="customRadio1">Sesuai</label>
                        </div>
                    </td>
                    <td class="align-middle">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" value="tidak sesuai" name="kacaSpion" id="customRadio1">
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
                            <input class="form-check-input" type="radio" value="ada" name="klakson" id="customRadio1">
                            <label class="custom-control-label" for="customRadio1">ada</label>
                        </div>
                    </td>
                    <td class="align-middle">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" value="tidak fungsi" name="klakson" id="customRadio1">
                            <label class="custom-control-label" for="customRadio1">Tidak fungsi</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" value="tidak ada" name="klakson" id="customRadio1">
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
                            <input class="form-check-input" type="radio" value="baik" name="lantaiTangga" id="customRadio1">
                            <label class="custom-control-label" for="customRadio1">baik</label>
                        </div>
                    </td>
                    <td class="align-middle">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" value="keropos" name="lantaiTangga" id="customRadio1">
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
                            <input class="form-check-input" type="radio" value="sesuai" name="tempatDuduk" id="customRadio1">
                            <label class="custom-control-label" for="customRadio1">sesuai</label>
                        </div>
                    </td>
                    <td class="align-middle">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" value="tidak sesuai" name="tempatDuduk" id="customRadio1">
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
                            <input class="form-check-input" type="radio" value="ada" name="banCadangan" id="customRadio1">
                            <label class="custom-control-label" for="customRadio1">Ada dan laik</label>
                        </div>
                    </td>
                    <td class="align-middle">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" value="tidak laik" name="banCadangan" id="customRadio1">
                            <label class="custom-control-label" for="customRadio1">Tidak laik</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="tidak ada" name="banCadangan" id="customRadio1">
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
                            <input class="form-check-input" type="radio" value="ada" name="segitigaPengaman" id="customRadio1">
                            <label class="custom-control-label" for="customRadio1">Ada</label>
                        </div>
                    </td>
                    <td class="align-middle">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" value="tidak ada" name="segitigaPengaman" id="customRadio1">
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
                            <input class="form-check-input" type="radio" value="ada" name="dongkrak" id="customRadio1">
                            <label class="custom-control-label" for="customRadio1">Ada</label>
                        </div>
                    </td>
                    <td class="align-middle">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" value="tidak ada" name="dongkrak" id="customRadio1">
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
                            <input class="form-check-input" type="radio" value="ada" name="pembukaRoda" id="customRadio1">
                            <label class="custom-control-label" for="customRadio1">Ada</label>
                        </div>
                    </td>
                    <td class="align-middle">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" value="tidak ada" name="pembukaRoda" id="customRadio1">
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
                            <input class="form-check-input" type="radio" value="ada" name="lampuSenter" id="customRadio1">
                            <label class="custom-control-label" for="customRadio1">Ada</label>
                        </div>
                    </td>
                    <td class="align-middle">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" value="tidak fungsi" name="lampuSenter" id="customRadio1">
                            <label class="custom-control-label" for="customRadio1">Tidak fungsi</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" value="tidak ada" name="lampuSenter" id="customRadio1">
                            <label class="custom-control-label" for="customRadio1">Tidak ada</label>
                        </div>
                    </td>
                </tr>
              </tbody>
            </table>
          </div>
    </div>
    {{-- bukti gambar --}}
    <div class="card border-success px-2">
        <div class="my-3">
            <h3>
                Bukti Gambar
            </h3>
        </div>
        <div class="input-group my-3">
            <input type="file" class="form-control" @error('image') is-invalid @enderror id="image" name="image" onchange="previewImage()">
            <label class="input-group-text" for="image">Upload Photo</label>
            @error('image')
            <div class="invalid-feedback">
                {{ $message }}
            </div>
            @enderror
        </div>
        <img class="img-preview img-fluid my-2" style="max-width: 350px;">
        <button type="submit" class="btn btn-primary mb-2">Submit</button>
    </div>
</form>
<script>

    function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>
@endsection
