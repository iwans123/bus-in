<!DOCTYPE html>
<html>
<head>
<style>
body{
    font-size: 7pt;
}
h2{
    margin-left: 20px;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  border: 1px solid black
}

td, th {
  border: 1px solid black;
  text-align: left;
  padding: 3px
}

.text-center{
    text-align: center;
}
.bg-kriteria{

}
.bg-primary{
    background-color: rgb(0, 174, 255);
}
.bg-success{
    background-color: green;
}
.bg-danger{
    background-color: red;
    color: white;
}
table{
    margin-top: 3px;
}
</style>
<body>
{{-- kop surat --}}
<table style="border: none">
    <tbody>
        <tr style="border: none">
            <td style="border: none">
                <img src="{{ public_path('imagepdf/favicon.png') }}" alt="" style="max-height: 70px;">
            </td>
            <td class="text-center" style="border: none">
                <h1 style="font-size: 17pt">POLITEKNIK KESELAMATAN TRANSPORTASI JALAN TEGAL</h1>
                <P>Jl.Perintis Kemerdekaan No.17,Slerok,Kec.Tegal Tim., Kota Tegal, Jawa Tengah 52125</P>
            </td>
            <td style="border: none">
                <img src="{{ public_path('imagepdf/dishub.png') }}" alt="" style="max-height: 70px;">
            </td>
        </tr>
    </tbody>
</table>
<hr style="border: 3px solid black; border-style:double;">

{{-- detail kendaraan --}}
<table>
    <colgroup span="3"></colgroup>
    <thead>
        <tr>
            <th colspan="6" scope="colgroup"  class="bg-primary">Data Pemeriksaan</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>1.</td>
            <td>Hari / Tanggal</td>
            @if ($transaksis->count())
                <td>{{ $transaksis[0]->created_at->toDateString() }}</td>
            @else
                <td></td>
            @endif
            <td>6.</td>
            <td>Nama PO</td>
            <td>{{ $vehicle->name_po }}</td>
        </tr>
        <tr>
            <td>2.</td>
            <td>Lokasi</td>
            <td>{{ $vehicle->location }}</td>
            <td>7.</td>
            <td>Nomor Kendaraan</td>
            <td>{{ $vehicle->number_vehicle }}</td>
        </tr>
        <tr>
            <td>3.</td>
            <td>Nama Lokasi</td>
            <td>{{ $vehicle->location_name }}</td>
            <td>8.</td>
            <td>Nomor STUK</td>
            <td>{{ $vehicle->number_stuk }}</td>
        </tr>
        <tr>
            <td>4.</td>
            <td>Nama Pengemudi</td>
            <td>{{ $vehicle->driver }}</td>
            <td>8.</td>
            <td>Jenis Trayek</td>
            <td>{{ $vehicle->jenis_angkutan }}</td>
        </tr>
        <tr>
            <td>5.</td>
            <td>Umur</td>
            <td>{{ $vehicle->birthday }} Tahun</td>
            <td>10.</td>
            <td>Trayek</td>
            <td>{{ $vehicle->trayek }}</td>
        </tr>
    </tbody>
</table>

{{-- unsur administrasi --}}
<table>
    <col>
    <colgroup span="2"></colgroup>
    <tr>
        <th rowspan="2" class="bg-primary bg-kriteria"> I.UNSUR ADMINISTRASI</th>
        <th colspan="2" scope="colgroup" class="bg-primary text-center">Hasil / Sanksi</th>
    </tr>
    <tr>
        <th class="bg-success text-center" scope="col">DIIJINKAN OPEARASIONAL</th>
        <th class="bg-danger text-center" scope="col">TILANG & DILARANG OPERASIONAL</th>
    </tr>
    @if ($verifikasis->count())
        <tr>
            <td>
                <span>1. Kartu Uji</span>
            </td>
            <td class="text-center">
                @if ($verifikasis[0]->kartu_uji == 'ada')
                    <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                    <span>ada, berlaku</span>
                @else
                    <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                    <span>ada, berlaku</span>
                @endif
            </td>
            <td class="text-center">
                @if ($verifikasis[0]->kartu_uji == 'tidak ada')
                    <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                    <span>tidak ada</span>
                    <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                    <span>tidak berlaku</span>
                    <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                    <span>tidak sesuai fisik</span>
                @elseif ($verifikasis[0]->kartu_uji == 'tidak berlaku')
                    <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                    <span>tidak ada</span>
                    <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                    <span>tidak berlaku</span>
                    <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                    <span>tidak sesuai fisik</span>
                @elseif ($verifikasis[0]->kartu_uji == 'tidak sesuai fisik')
                    <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                    <span>tidak ada</span>
                    <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                    <span>tidak berlaku</span>
                    <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                    <span>tidak sesuai fisik</span>
                @else
                    <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                    <span>tidak ada</span>
                    <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                    <span>tidak berlaku</span>
                    <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                    <span>tidak sesuai fisik</span>
                @endif
            </td>
        </tr>
        <tr>
            <td>2. Kp Reguler</td>
            <td class="text-center">
                @if ($verifikasis[0]->kp_reguler == 'ada')
                    <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                    <span>ada, berlaku</span>
                @else
                    <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                    <span>ada, berlaku</span>
                @endif
            </td>
            <td class="text-center">
                @if ($verifikasis[0]->kp_reguler == 'tidak ada')
                    <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                    <span>tidak ada</span>
                    <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                    <span>tidak berlaku</span>
                    <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                    <span>tidak sesuai fisik</span>
                @elseif ($verifikasis[0]->kartu_uji == 'tidak berlaku')
                    <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                    <span>tidak ada</span>
                    <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                    <span>tidak berlaku</span>
                    <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                    <span>tidak sesuai fisik</span>
                @elseif ($verifikasis[0]->kartu_uji == 'tidak sesuai fisik')
                    <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                    <span>tidak ada</span>
                    <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                    <span>tidak berlaku</span>
                    <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                    <span>tidak sesuai fisik</span>
                @else
                    <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                    <span>tidak ada</span>
                    <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                    <span>tidak berlaku</span>
                    <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                    <span>tidak sesuai fisik</span>
                @endif
            </td>
        </tr>
        <tr>
            <td>3. Kp Cadangan</td>
            <td class="text-center">
                @if ($verifikasis[0]->kp_cadangan == 'ada')
                    <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                    <span>ada, berlaku</span>
                @else
                    <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                    <span>ada, berlaku</span>
                @endif
            </td>
            <td class="text-center">
                @if ($verifikasis[0]->kp_cadangan == 'tidak ada')
                    <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                    <span>tidak ada</span>
                    <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                    <span>tidak berlaku</span>
                    <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                    <span>tidak sesuai fisik</span>
                @elseif ($verifikasis[0]->kartu_uji == 'tidak berlaku')
                    <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                    <span>tidak ada</span>
                    <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                    <span>tidak berlaku</span>
                    <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                    <span>tidak sesuai fisik</span>
                @elseif ($verifikasis[0]->kartu_uji == 'tidak sesuai fisik')
                    <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                    <span>tidak ada</span>
                    <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                    <span>tidak berlaku</span>
                    <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                    <span>tidak sesuai fisik</span>
                @else
                    <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                    <span>tidak ada</span>
                    <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                    <span>tidak berlaku</span>
                    <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                    <span>tidak sesuai fisik</span>
                @endif
            </td>
        </tr>
        <tr>
            <td>4. Sim Pengemudi</td>
            <td class="text-center">
                @if ($verifikasis[0]->sim_pengemudi == 'A umum')
                    <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                    <span>A umum</span>
                    <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                    <span>B umum</span>
                    <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                    <span>C umum</span>
                @elseif ($verifikasis[0]->sim_pengemudi == 'B umum')
                    <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                    <span>A umum</span>
                    <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                    <span>B umum</span>
                    <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                    <span>C umum</span>
                @elseif ($verifikasis[0]->sim_pengemudi == 'C umum')
                    <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                    <span>A umum</span>
                    <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                    <span>B umum</span>
                    <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                    <span>C umum</span>
                @else
                    <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                    <span>A umum</span>
                    <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                    <span>B umum</span>
                    <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                    <span>C umum</span>
                @endif
            </td>
            <td class="text-center">
                @if ($verifikasis[0]->sim_pengemudi == 'sim tidak sesuai')
                    <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                    <span>SIM tidak sesuai</span>
                @else
                    <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                    <span>SIM tidak sesuai</span>
                @endif
            </td>
        </tr>
    @else
        @include('pdf.administrasi')
    @endif
</table>

{{-- unsur teknis utama --}}
<table>
    <thead>
        <col>
        <colgroup span="2"></colgroup>
        <colgroup span="2"></colgroup>
        <tr>
            <th rowspan="2" class="bg-primary bg-kriteria" colspan="3"> II.UNSUR TEKNIS UTAMA</th>
            <th colspan="2" scope="colgroup" class="bg-primary text-center">Hasil / Sanksi</th>
        </tr>
        <tr>
        <th class="bg-success text-center" scope="col">DIIJINKAN OPEARASIONAL</th>
        <th class="bg-danger text-center" scope="col">TILANG & DILARANG OPERASIONAL</th>
    </thead>
    @if ($transaksis->count())
        @if ($transaksis[0]->status_transaksi == false)
            {{-- sistem penerangan --}}
            <tbody>
                <tr>
                    <th class="text-left" colspan="3">
                        <strong>A.SISTEM PENERANGAN</strong>
                    </th>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
            <tbody>
                {{-- lampu utama kendaraan --}}
                <tr>
                    <th rowspan="8" scope="rowgroup"></th>
                    <th scope="row">1</th>
                    <td>
                        <span>Lampu Utama Kendaraan</span>
                    </td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td>
                        <span>a. Dekat</span>
                    </td>
                    <td class="text-center">
                        @if ($penerangans[0]->lampuUtama_dekat == 'menyala')
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>semua menyala</span>
                        @else
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>semua menyala</span>
                        @endif
                    </td>
                    <td class="text-center">
                        <span>tidak menyala:</span>
                        @if ($penerangans[0]->lampuUtama_dekat == 'tidak menyala kanan')
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>kanan</span>
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>kiri</span>
                        @elseif ($penerangans[0]->lampuUtama_dekat == 'tidak menyala kiri')
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>kanan</span>
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>kiri</span>
                        @else
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>kanan</span>
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>kiri</span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td>
                        <span>b. Jauh</span>
                    </td>
                    <td class="text-center">
                        @if ($penerangans[0]->lampuUtama_jauh == 'menyala')
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>semua menyala</span>
                        @else
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>semua menyala</span>
                        @endif
                    </td>
                    <td class="text-center">
                        <span>tidak menyala:</span>
                        @if ($penerangans[0]->lampuUtama_jauh == 'tidak menyala kanan')
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>kanan</span>
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>kiri</span>
                        @elseif ($penerangans[0]->lampuUtama_jauh == 'tidak menyala kiri')
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>kanan</span>
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>kiri</span>
                        @else
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>kanan</span>
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>kiri</span>
                        @endif
                    </td>
                </tr>
                {{-- lampu penunjuk arah sein --}}
                <tr>
                    <th scope="row">2</th>
                    <td>
                        <span>Lampu Penunjuk Arah (sein)</span>
                    </td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td>
                        <span>a. Depan</span>
                    </td>
                    <td class="text-center">
                        @if ($penerangans[0]->sein_depan == 'menyala')
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>semua menyala</span>
                        @else
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>semua menyala</span>
                        @endif
                    </td>
                    <td class="text-center">
                        <span>tidak menyala:</span>
                        @if ($penerangans[0]->sein_depan == 'tidak menyala kanan')
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>kanan</span>
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>kiri</span>
                        @elseif ($penerangans[0]->sein_depan == 'tidak menyala kiri')
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>kanan</span>
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>kiri</span>
                        @else
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>kanan</span>
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>kiri</span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td>
                        <span>b. Belakang</span>
                    </td>
                    <td class="text-center">
                        @if ($penerangans[0]->sein_belakang == 'menyala')
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>semua menyala</span>
                        @else
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>semua menyala</span>
                        @endif
                    </td>
                    <td class="text-center">
                        <span>tidak menyala:</span>
                        @if ($penerangans[0]->sein_belakang == 'tidak menyala kanan')
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>kanan</span>
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>kiri</span>
                        @elseif ($penerangans[0]->sein_belakang == 'tidak menyala kiri')
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>kanan</span>
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>kiri</span>
                        @else
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>kanan</span>
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>kiri</span>
                        @endif
                    </td>
                </tr>
                {{-- lampu rem --}}
                <tr>
                    <th scope="row">3</th>
                    <td>
                        <span>Lampu Rem</span>
                    </td>
                    <td class="text-center">
                        @if ($penerangans[0]->lampuRem == 'menyala')
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>semua menyala</span>
                        @else
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>semua menyala</span>
                        @endif
                    </td>
                    <td class="text-center">
                        <span>tidak menyala:</span>
                        @if ($penerangans[0]->lampuRem == 'tidak menyala kanan')
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>kanan</span>
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>kiri</span>
                        @elseif ($penerangans[0]->lampuRem == 'tidak menyala kiri')
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>kanan</span>
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                        <span>kiri</span>
                        @else
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>kanan</span>
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>kiri</span>
                        @endif
                    </td>
                </tr>
                {{-- lampu mundur --}}
                <tr>
                    <th scope="row">4</th>
                    <td>
                        <span>Lampu Mundur</span>
                    </td>
                    <td class="text-center">
                        @if ($penerangans[0]->lampuMundur == 'menyala')
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>semua menyala</span>
                        @else
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>semua menyala</span>
                        @endif
                    </td>
                    <td class="text-center">
                        <span>tidak menyala:</span>
                        @if ($penerangans[0]->lampuMundur == 'tidak menyala kanan')
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>kanan</span>
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>kiri</span>
                        @elseif ($penerangans[0]->lampuMundur == 'tidak menyala kiri')
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>kanan</span>
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>kiri</span>
                        @else
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>kanan</span>
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>kiri</span>
                        @endif
                    </td>
                </tr>
            </tbody>
            {{-- sistem pengereman --}}
            <tbody>
                <tr>
                    <th class="text-left" colspan="3">
                        <strong>B.SISTEM PENGEREMAN</strong>
                    </th>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <th></th>
                    <th scope="row">5</th>
                    <td>
                        <span>Kondisi Rem Utama</span>
                    </td>
                    <td class="text-center">
                        @if ($pengeremans[0]->remUtama == 'berfungsi')
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>berfungsi</span>
                        @else
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>berfungsi</span>
                        @endif
                    </td>
                    <td class="text-center">
                        @if ($pengeremans[0]->remUtama == 'tidak berfungsi')
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>tidak berfungsi</span>
                        @else
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>tidak berfungsi</span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <th scope="row">6</th>
                    <td>
                        <span>Kondisi Rem Parkir</span>
                    </td>
                    <td class="text-center">
                        @if ($pengeremans[0]->remParkir == 'berfungsi')
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>berfungsi</span>
                        @else
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>berfungsi</span>
                        @endif
                    </td>
                    <td class="text-center">
                        @if ($pengeremans[0]->remParkir == 'tidak berfungsi')
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>tidak berfungsi</span>
                        @else
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>tidak berfungsi</span>
                        @endif
                    </td>
                </tr>
            </tbody>
            {{-- badan kendaraan --}}
            <tbody>
                <tr>
                    <th class="text-left" colspan="3">
                        <strong>C. BADAN KENDARAAN</strong>
                    </th>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <th></th>
                    <th scope="row">7</th>
                    <td>
                        <span>Kondisi Kaca Depan</span>
                    </td>
                    <td class="text-center">
                        @if ($badanKendaraans[0]->kaca_depan == 'baik')
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>baik</span>
                        @else
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>baik</span>
                        @endif
                    </td>
                    <td class="text-center">
                        @if ($badanKendaraans[0]->kaca_depan == 'buruk')
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>buruk</span>
                        @else
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>buruk</span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <th scope="row">8</th>
                    <td>
                        <span>Pintu Utama</span>
                    </td>
                    <td class="text-center">
                        @if ($badanKendaraans[0]->pintu_utama == 'berfungsi')
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>semua berfungsi</span>
                        @else
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>semua berfungsi</span>
                        @endif
                    </td>
                    <td class="text-center">
                        <span>tidak berfungsi:</span>
                        @if ($badanKendaraans[0]->pintu_utama == 'tidak berfungsi kanan')
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>kanan</span>
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>kiri</span>
                        @elseif ($badanKendaraans[0]->pintu_utama == 'tidak berfungsi kiri')
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>kanan</span>
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>kiri</span>
                        @else
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>kanan</span>
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>kiri</span>
                        @endif
                    </td>
                </tr>
            </tbody>
            {{-- ban --}}
            <tbody>
                <tr>
                    <th class="text-left" colspan="3">
                        <strong>D. BAN</strong>
                    </th>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <th></th>
                    <th scope="row">9</th>
                    <td>
                        <span>a. Kondisi Ban Depan</span>
                    </td>
                    <td class="text-center">
                        @if ($bans[0]->ban_depan == 'laik')
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>semua laik</span>
                        @else
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>semua laik</span>
                        @endif
                    </td>
                    <td class="text-center">
                        <span>tidak laik:</span>
                        @if ($bans[0]->ban_depan == 'tidak laik kanan')
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>kanan</span>
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>kiri</span>
                        @elseif ($bans[0]->ban_depan == 'tidak laik kiri')
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>kanan</span>
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>kiri</span>
                        @else
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>kanan</span>
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>kiri</span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <th scope="row"></th>
                    <td>
                        <span>b. Kondisi Ban Belakang</span>
                    </td>
                    <td class="text-center">
                        @if ($bans[0]->ban_belakang == 'laik')
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>semua laik</span>
                        @else
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>semua laik</span>
                        @endif
                    </td>
                    <td class="text-center">
                        <span>tidak laik:</span>
                        @if ($bans[0]->ban_belakang == 'tidak laik kanan')
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>kanan</span>
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>kiri</span>
                        @elseif ($bans[0]->ban_belakang == 'tidak laik kiri')
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>kanan</span>
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>kiri</span>
                        @else
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>kanan</span>
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>kiri</span>
                        @endif
                    </td>
                </tr>
            </tbody>
            {{-- perlengkapan --}}
            <tbody>
                <tr>
                    <th class="text-left" colspan="3">
                        <strong>E. PERLENGKAPAN</strong>
                    </th>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <th></th>
                    <th scope="row">10</th>
                    <td>
                        <span>Sabuk Keselamtan Pengemudi</span>
                    </td>
                    <td class="text-center">
                        @if ($perlengkapans[0]->sabukPengemudi == 'ada')
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>ada dan fungsi</span>
                        @else
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>ada dan fungsi</span>
                        @endif
                    </td>
                    <td class="text-center">
                        @if ($perlengkapans[0]->sabukPengemudi == 'tidak fungsi')
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>tidak fungsi</span>
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>tidak ada</span>
                        @elseif ($perlengkapans[0]->sabukPengemudi == 'tidak ada')
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>tidak fungsi</span>
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>tidak ada</span>
                        @else
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>tidak fungsi</span>
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>tidak ada</span>
                        @endif
                    </td>
                </tr>
            </tbody>
            {{-- pengukur kecepatan --}}
            <tbody>
                <tr>
                    <th class="text-left" colspan="3">
                        <strong>A. PENGUKUR KECEPATAN</strong>
                    </th>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <th></th>
                    <th scope="row">11</th>
                    <td>
                        <span>Pengukur Kecepatan</span>
                    </td>
                    <td class="text-center">
                        @if ($pengukurKecepatans[0]->pengukurKecepatan == 'ada')
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>ada dan fungsi</span>
                        @else
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>ada dan fungsi</span>
                        @endif
                    </td>
                    <td class="text-center">
                        @if ($pengukurKecepatans[0]->pengukurKecepatan == 'tidak fungsi')
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>tidak fungsi</span>
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>tidak ada</span>
                        @elseif ($pengukurKecepatans[0]->pengukurKecepatan == 'tidak ada')
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>tidak fungsi</span>
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>tidak ada</span>
                        @else
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>tidak fungsi</span>
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>tidak ada</span>
                        @endif
                    </td>
                </tr>
            </tbody>
            {{-- wiper --}}
            <tbody>
                <tr>
                    <th class="text-left" colspan="3">
                        <strong>G. PENGHAPUS KACA (wiper)</strong>
                    </th>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <th></th>
                    <th scope="row">12</th>
                    <td>
                        <span>Penghapus Kaca (wiper)</span>
                    </td>
                    <td class="text-center">
                        @if ($wipers[0]->wiper == 'ada')
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>ada</span>
                        @else
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>ada</span>
                        @endif
                    </td>
                    <td class="text-center">
                        @if ($wipers[0]->wiper == 'tidak fungsi')
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>tidak fungsi</span>
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>tidak ada</span>
                        @elseif ($wipers[0]->wiper == 'tidak ada')
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>tidak fungsi</span>
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>tidak ada</span>
                        @else
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>tidak fungsi</span>
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>tidak ada</span>
                        @endif
                    </td>
                </tr>
            </tbody>
            {{-- tanggap darurat --}}
            <tbody>
                <tr>
                    <th class="text-left" colspan="3">
                        <strong>H. TANGGAP DARURAT</strong>
                    </th>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <th></th>
                    <th scope="row">13</th>
                    <td>
                        <span>Pintu Darurat</span>
                    </td>
                    <td class="text-center">
                        @if ($tanggapDarurats[0]->pintuDarurat == 'ada')
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>ada</span>
                        @else
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>ada</span>
                        @endif
                    </td>
                    <td class="text-center">
                        @if ($tanggapDarurats[0]->pintuDarurat == 'tidak ada')
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>tidak ada</span>
                        @else
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>tidak ada</span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <th scope="row">14</th>
                    <td>
                        <span>Jendela Darurat</span>
                    </td>
                    <td class="text-center">
                        @if ($tanggapDarurats[0]->jendelaDarurat == 'ada')
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>ada</span>
                        @else
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>ada</span>
                        @endif
                    </td>
                    <td class="text-center">
                        @if ($tanggapDarurats[0]->jendelaDarurat == 'tidak ada')
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>tidak ada</span>
                        @else
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>tidak ada</span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <th scope="row">15</th>
                    <td>
                        <span>Alat Pemecah Kaca</span>
                    </td>
                    <td class="text-center">
                        @if ($tanggapDarurats[0]->alatPemecahkaca == 'ada')
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>ada</span>
                        @else
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>ada</span>
                        @endif
                    </td>
                    <td class="text-center">
                        @if ($tanggapDarurats[0]->alatPemecahkaca == 'tidak ada')
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>tidak ada</span>
                        @else
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>tidak ada</span>
                        @endif
                    </td>
                </tr>
            </tbody>
        @else
            @include('pdf.teknisUtama')
        @endif
    @else
        @include('pdf.teknisUtama')
    @endif
</table>

{{-- unsur teknis penunjang --}}
<table>
    <thead>
        <col>
        <colgroup span="2"></colgroup>
        <colgroup span="2"></colgroup>
        <tr>
            <th rowspan="2" class="bg-primary bg-kriteria" colspan="3"> III.UNSUR TEKNIS PENUNJANG</th>
            <th colspan="2" scope="colgroup" class="bg-primary text-center">Hasil / Sanksi</th>
        </tr>
        <tr>
        <th class="bg-success text-center" scope="col">DIIJINKAN OPEARASIONAL</th>
        <th class="bg-danger text-center" scope="col">TILANG & DILARANG OPERASIONAL</th>
    </thead>
    @if ($transaksis->count())
        @if ($transaksis[0]->status_transaksi == false)
            {{-- sistem penerangan penunjang --}}
            <tbody>
                <tr>
                    <th class="text-left" colspan="3">
                        <strong>B. SISTEM PENERANGAN</strong>
                    </th>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
            <tbody>
                {{-- lampu posisi --}}
                <tr>
                    <th rowspan="3" scope="rowgroup"></th>
                    <th scope="row">16</th>
                    <td>
                        <span>Lampu Posisi</span>
                    </td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td>
                        <span>a. Depan</span>
                    </td>
                    <td class="text-center">
                        @if ($peneranganPenunjangs[0]->lampuPosisi_depan == 'menyala')
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>semua menyala</span>
                        @else
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>semua menyala</span>
                        @endif
                    </td>
                    <td class="text-center">
                        <span>tidak menyala:</span>
                        @if ($peneranganPenunjangs[0]->lampuPosisi_depan == 'tidak menyala kanan')
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>kanan</span>
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>kiri</span>
                        @elseif ($peneranganPenunjangs[0]->lampuPosisi_depan == 'tidak menyala kiri')
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>kanan</span>
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>kiri</span>
                        @else
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>kanan</span>
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>kiri</span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th scope="row"></th>
                    <td>
                        <span>b. Belakang</span>
                    </td>
                    <td class="text-center">
                        @if ($peneranganPenunjangs[0]->lampuPosisi_belakang == 'menyala')
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>semua menyala</span>
                        @else
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>semua menyala</span>
                        @endif
                    </td>
                    <td class="text-center">
                        <span>tidak menyala:</span>
                        @if ($peneranganPenunjangs[0]->lampuPosisi_belakang == 'tidak menyala kanan')
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>kanan</span>
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>kiri</span>
                        @elseif ($peneranganPenunjangs[0]->lampuPosisi_belakang == 'tidak menyala kiri')
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>kanan</span>
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>kiri</span>
                        @else
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>kanan</span>
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>kiri</span>
                        @endif
                    </td>
                </tr>
            </tbody>
            {{-- badan kendaraan penunjang --}}
            <tbody>
                <tr>
                    <th class="text-left" colspan="3">
                        <strong>C. BADAN KENDARAAN</strong>
                    </th>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <th></th>
                    <th scope="row">17</th>
                    <td>
                        <span>Kaca Spion</span>
                    </td>
                    <td class="text-center">
                        @if ($badankendaraanPenunjangs[0]->kacaSpion == 'sesuai')
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>sesuai</span>
                        @else
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>sesuai</span>
                        @endif
                    </td>
                    <td class="text-center">
                        @if ($badankendaraanPenunjangs[0]->kacaSpion == 'tidak sesuai')
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>tidak sesuai</span>
                        @else
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>tidak sesuai</span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <th scope="row">18</th>
                    <td>
                        <span>Klakson</span>
                    </td>
                    <td class="text-center">
                        @if ($badankendaraanPenunjangs[0]->klakson == 'ada')
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>ada</span>
                        @else
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>ada</span>
                        @endif
                    </td>
                    <td class="text-center">
                        @if ($badankendaraanPenunjangs[0]->klakson == 'tidak fungsi')
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>tidak fungsi</span>
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>tidak ada</span>
                        @elseif ($badankendaraanPenunjangs[0]->klakson == 'tidak ada')
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>tidak fungsi</span>
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>tidak ada</span>
                        @else
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>tidak fungsi</span>
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>tidak ada</span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <th scope="row">19</th>
                    <td>
                        <span>Lantai dan Tangga</span>
                    </td>
                    <td class="text-center">
                        @if ($badankendaraanPenunjangs[0]->lantaiTangga == 'baik')
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>baik</span>
                        @else
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>baik</span>
                        @endif
                    </td>
                    <td class="text-center">
                        @if ($badankendaraanPenunjangs[0]->lantaiTangga == 'keropos')
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>keropos / berlubang</span>
                        @else
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>keropos / berlubang</span>
                        @endif
                    </td>
                </tr>
            </tbody>
            {{-- kapasitas tempat duduk --}}
            <tbody>
                <tr>
                    <th class="text-left" colspan="3">
                        <strong>D. KAPASITAS TEMPAT DUDUK</strong>
                    </th>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <th></th>
                    <th scope="row">20</th>
                    <td>
                        <span>Jumlah Tempat Duduk</span>
                    </td>
                    <td class="text-center">
                        @if ($kapasitasPenunjangs[0]->tempatDuduk == 'sesuai')
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>sesuai</span>
                        @else
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>sesuai</span>
                        @endif
                    </td>
                    <td class="text-center">
                        @if ($kapasitasPenunjangs[0]->tempatDuduk == 'tidak sesuai')
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>tidak sesuai</span>
                        @else
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>tidak sesuai</span>
                        @endif
                    </td>
                </tr>
            </tbody>
            {{-- perlengkapan kendaraan --}}
            <tbody>
                <tr>
                    <th class="text-left" colspan="3">
                        <strong>D. PERLENGKAPAN KENDARAAN</strong>
                    </th>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <th></th>
                    <th scope="row">21</th>
                    <td>
                        <span>Ban Cadangan</span>
                    </td>
                    <td class="text-center">
                        @if ($perlengkapanPenunjangs[0]->banCadangan == 'ada')
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>ada dan laik</span>
                        @else
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>ada dan laik</span>
                        @endif
                    </td>
                    <td class="text-center">
                        @if ($perlengkapanPenunjangs[0]->banCadangan == 'tidak laik')
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>tidak laik</span>
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>tidak ada</span>
                        @elseif ($perlengkapanPenunjangs[0]->banCadangan == 'tidak ada')
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>tidak laik</span>
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>tidak ada</span>
                        @else
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>tidak laik</span>
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>tidak ada</span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <th scope="row">22</th>
                    <td>
                        <span>Segitiga Pengaman</span>
                    </td>
                    <td class="text-center">
                        @if ($perlengkapanPenunjangs[0]->segitigaPengaman == 'ada')
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>ada</span>
                        @else
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>ada</span>
                        @endif
                    </td>
                    <td class="text-center">
                        @if ($perlengkapanPenunjangs[0]->segitigaPengaman == 'tidak ada')
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>tidak ada</span>
                        @else
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>tidak ada</span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <th scope="row">23</th>
                    <td>
                        <span>Dongkrak</span>
                    </td>
                    <td class="text-center">
                        @if ($perlengkapanPenunjangs[0]->dongkrak == 'ada')
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>ada</span>
                        @else
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>ada</span>
                        @endif
                    </td>
                    <td class="text-center">
                        @if ($perlengkapanPenunjangs[0]->dongkrak == 'tidak ada')
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>tidak ada</span>
                        @else
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>tidak ada</span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <th scope="row">24</th>
                    <td>
                        <span>Pembuka Roda</span>
                    </td>
                    <td class="text-center">
                        @if ($perlengkapanPenunjangs[0]->pembukaRoda == 'ada')
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>ada</span>
                        @else
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>ada</span>
                        @endif
                    </td>
                    <td class="text-center">
                        @if ($perlengkapanPenunjangs[0]->pembukaRoda == 'tidak ada')
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>tidak ada</span>
                        @else
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>tidak ada</span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <th scope="row">25</th>
                    <td>
                        <span>Lampu Senter</span>
                    </td>
                    <td class="text-center">
                        @if ($perlengkapanPenunjangs[0]->lampuSenter == 'ada')
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>ada</span>
                        @else
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>ada</span>
                        @endif
                    </td>
                    <td class="text-center">
                        @if ($perlengkapanPenunjangs[0]->lampuSenter == 'tidak fungsi')
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>tidak fungsi</span>
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>tidak ada</span>
                        @elseif ($perlengkapanPenunjangs[0]->lampuSenter == 'tidak ada')
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>tidak fungsi</span>
                            <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                            <span>tidak ada</span>
                        @else
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>tidak fungsi</span>
                            <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                            <span>tidak ada</span>
                        @endif
                    </td>
                </tr>
            </tbody>
        @else
            @include('pdf.teknisPenunjang')
        @endif
    @else
        @include('pdf.teknisPenunjang')
    @endif
</table>

{{-- kop surat --}}
<table style="border: none">
    <tbody>
        <tr style="border: none">
            <td style="border: none">
                <img src="{{ public_path('imagepdf/favicon.png') }}" alt="" style="max-height: 70px;">
            </td>
            <td class="text-center" style="border: none">
                <h1 style="font-size: 18pt">POLITEKNIK KESELAMATAN TRANSPORTASI JALAN TEGAL</h1>
                <P>Jl.Perintis Kemerdekaan No.17,Slerok,Kec.Tegal Tim., Kota Tegal, Jawa Tengah 52125</P>
            </td>
            <td style="border: none">
                <img src="{{ public_path('imagepdf/dishub.png') }}" alt="" style="max-height: 70px;">
            </td>
        </tr>
    </tbody>
</table>
<hr style="border: 3px solid black; border-style:double;">

{{-- kesimpulan --}}
<table>
    <thead>
        <th class="bg-primary">KESIMPULAN</th>
    </thead>
    <tbody>
        <tr>
            <td>
                <span>
                    BERDASARKAN HASIL DIATAS, MAKA KENDARAAN TERSEBUT DINYATAKAN:
                </span>
            </td>
        </tr>
    </tbody>
</table>
<table>
    <thead>
        <th class="bg-success text-center">LAIK JALAN</th>
        <th class="bg-danger text-center">TIDAK LAIK JALAN</th>
        <th class="bg-primary text-center">CATATAN</th>
    </thead>
    <tbody>
        <tr>
            @if ($transaksis->count())
                @if ($transaksis[0]->status_firstVerifikasi == true && $transaksis[0]->status_secondVerifikasi == true)
                    <td>
                        <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                        <span>DIIJINKAN OPERASIONAL</span>
                    </td>
                    <td>
                        <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                        <span>TILANG & DILARANG OPERASIONAL</span>
                    </td>
                    <td>
                        <span>DIIJINKAN OPERASIONAL</span>
                    </td>
                @elseif ($transaksis[0]->status_firstVerifikasi == false && $transaksis[0]->status_secondVerifikasi == false)
                    <td>
                        <img src="{{ public_path('css/check.png') }}" alt="" style="max-height: 8px;">
                        <span>DIIJINKAN OPERASIONAL</span>
                    </td>
                    <td>
                        <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                        <span>TILANG & DILARANG OPERASIONAL</span>
                    </td>
                    <td>
                        <span>TILANG & DILARANG OPERASIONAL</span>
                    </td>
                @else
                    <td>
                        <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                        <span>DIIJINKAN OPERASIONAL</span>
                    </td>
                    <td>
                        <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                        <span>TILANG & DILARANG OPERASIONAL</span>
                    </td>
                    <td>

                    </td>
                @endif
            @else
                <td>
                    <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                    <span>DIIJINKAN OPERASIONAL</span>
                </td>
                <td>
                    <img src="{{ public_path('css/circle.png') }}" alt="" style="max-height: 8px;">
                    <span>TILANG & DILARANG OPERASIONAL</span>
                </td>
                <td>

                </td>
            @endif
        </tr>
    </tbody>
</table>
{{-- CATATAN KENDARAAN --}}
<table>
    <colgroup span="2"></colgroup>
    <thead>
        <th class="bg-primary" colspan="2">CATATAN KENDARAAN</th>
    </thead>
    @if ($transaksis->count())
        <tbody>
            <tr>
                <td>
                    <span>
                        WAJIB DIISI:
                    </span>
                </td>
                <td>
                    <span>
                        FOTO KERUSAKAN:
                    </span>
                </td>
            </tr>
            <tr>
                @if ($transaksis[0]->status_firstVerifikasi == true && $transaksis[0]->status_secondVerifikasi == true)
                    <td>
                        <span>
                            DIIJINKAN OPERASIONAL
                        </span>
                    </td>
                    <td>
                        <span>
                        </span>
                    </td>
                @elseif ($transaksis[0]->status_firstVerifikasi == false && $transaksis[0]->status_secondVerifikasi == false)
                    <td>
                        <span>
                            TILANG & DILARANG OPERASIONAL
                        </span>
                    </td>
                    <td style="width: 50%">
                        @if ($transaksis[0]->image)
                            <img src="{{ public_path('upload/bukti/' . $transaksis[0]->image) }}" style="max-height: 15rem;" alt="">
                        @endif
                    </td>
                @endif
            </tr>
        </tbody>
    @endif
</table>
{{-- CATATAN NAMA --}}
<table>
    <tbody>
        <tr>
            <th rowspan="2" scope="rowgroup" style="vertical-align:top; width:250px">
                <p>Catatan:
                </p>
                <p>
                    Jika setiap unsur terdapat pelanggaran,
                    maka sanksi yang dikenakan adalah sanksi yang paling berat
                </p>
            </th>
            <td class="text-center" style="vertical-align:top; height:100px">
                <span>PENGEMUDI</span>
            </td>
            <td class="text-center" style="vertical-align:top; height:100px">
                <span>
                    PENYEDIK PEGAWAI NEGERI SIPIL
                </span>
            </td>
            <td class="text-center" style="vertical-align:top; height:100px">
                <span>
                    PENGUJI KENDARAAN BERMOTOR
                </span>
            </td>
        </tr>
        <tr>
            @if ($transaksis->count())
                <td>
                    <span>
                        Nama: {{ $vehicle->driver }}
                    </span>
                </td>
                <td>
                    <p>
                        NIP: {{ $transaksis[0]->ppns_nip }}
                    </p>
                    <p>
                        Nama: {{ $transaksis[0]->ppns_name }}
                    </p>
                </td>
                <td>
                    <p>
                        NIP: {{ $transaksis[0]->penguji_nip }}
                    </p>
                    <p>
                        Nama: {{ $transaksis[0]->penguji_name }}
                    </p>
                </td>
            @else
            <td>
                <span>
                    Nama:
                </span>
            </td>
            <td>
                <p>
                    NIP:
                </p>
                <p>
                    Nama:
                </p>
            </td>
            <td>
                <p>
                    NIP:
                </p>
                <p>
                    Nama:
                </p>
            </td>
            @endif
        </tr>
    </tbody>
</table>
</body>
</html>

