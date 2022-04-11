<!DOCTYPE html>
<html>
<head>
<style>
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
  padding: 5px
}

.text-center{
    text-align: center;
}

/* tr:nth-child(even) {
  background-color: #dddddd;
  border: 1px solid black
} */
.bg-success{
    background-color: green;
    color: white;
}
.bg-danger{
    background-color: red;
}
</style>
<body>
{{-- unsur administrasi --}}
<h2>I.Unsur Administrasi</h2>

<table>
  <tr>
    <th>NO</th>
    <th>KRITERIA</th>
    <th class="bg-success">DIIJINKAN OPEARASIONAL</th>
    <th class="bg-danger">TILANG & DILARANG OPERASIONAL</th>
  </tr>
  @if ($verifikasi->count())
    <tr>
        <td>1</td>
        <td>
            <span>
                Kartu Uji
            </span>
        </td>
        <td>
            @if ($verifikasi[0]->kartu_uji == 'ada')
                <span class="bg-success">ada, berlaku</span>
            @endif
        </td>
        <td>
            @if ($verifikasi[0]->kartu_uji == 'tidak ada')
                <span class="bg-danger">&#x2714</span>
                <span>tidak ada</span>
                <span>tidak berlaku</span>
                <span>tidak sesuai fisik</span>
            @elseif ($verifikasi[0]->kartu_uji == 'tidak berlaku')
                <span>tidak ada</span>
                <span class="bg-danger">&#x2714</span>
                <span>tidak berlaku</span>
                <span>tidak sesuai fisik</span>
            @elseif ($verifikasi[0]->kartu_uji == 'tidak sesuai fisik')
                <span>tidak ada</span>
                <span>tidak berlaku</span>
                <span class="bg-danger">&#x2714</span>
                <span>tidak sesuai fisik</span>
            @endif
        </td>
    </tr>
    <tr>
        <td>2</td>
        <td>Kp Reguler</td>
        <td>
            @if ($verifikasi[0]->kp_reguler == 'ada')
                <span>&#x2714 ada, berlaku</span>
            @endif
        </td>
        <td>
            @if ($verifikasi[0]->kp_reguler == 'tidak ada')
                <span class="bg-danger">&#x2714</span>
                <span>tidak ada</span>
                <span>tidak berlaku</span>
                <span>tidak sesuai fisik</span>
            @elseif ($verifikasi[0]->kp_reguler == 'tidak berlaku')
                <span>tidak ada</span>
                <span class="bg-danger">&#x2714</span>
                <span>tidak berlaku</span>
                <span>tidak sesuai fisik</span>
            @elseif ($verifikasi[0]->kp_reguler == 'tidak sesuai fisik')
                <span>tidak ada</span>
                <span>tidak berlaku</span>
                <span class="bg-danger">&#x2714</span>
                <span>tidak sesuai fisik</span>
            @endif
        </td>
    </tr>
    <tr>
        <td>3</td>
        <td>Kp Cadangan</td>
        <td>
            @if ($verifikasi[0]->kp_cadangan == 'ada')
                <span>&#x2714 ada, berlaku</span>
            @else
                <span>&#x25A2</span>
                <span>ada, berlaku</span>
            @endif
        </td>
        <td>
            @if ($verifikasi[0]->kp_cadangan == 'tidak ada')
                <span class="bg-danger">&#x2714</span>
                <span>tidak ada</span>
                <span>tidak berlaku</span>
                <span>tidak sesuai fisik</span>
            @elseif ($verifikasi[0]->kp_cadangan == 'tidak berlaku')
                <span>&#x25A2</span>
                <span>tidak ada</span>
                <span class="bg-danger">&#x2714</span>
                <span>tidak berlaku</span>
                <span>&#x25A2</span>
                <span>tidak sesuai fisik</span>
            @elseif ($verifikasi[0]->kp_cadangan == 'tidak sesuai fisik')
                <span>&#x25A2</span>
                <span>tidak ada</span>
                <span>tidak berlaku</span>
                <span class="bg-danger">&#x2714</span>
                <span>tidak sesuai fisik</span>
            @endif
        </td>
    </tr>
    <tr>
        <td>4</td>
        <td>Sim Pengemudi</td>
        <td>
            @if ($verifikasi[0]->sim_pengemudi == 'ada')
                v ada
            @endif
        </td>
        <td></td>
    </tr>
  @endif
</table>
{{-- unsur teknis utama --}}
<h2>II.Unsur Teknis Utama</h2>

<table>
  <tr>
    <th>NO</th>
    <th class="text-center">KRITERIA</th>
    <th class="bg-success text-center">DIIJINKAN OPEARASIONAL</th>
    <th class="bg-danger text-center">TILANG & DILARANG OPERASIONAL</th>
  </tr>
  @if ($verifikasi->count())
    <tr>
        <td class="text-center">
            <strong>A</strong>
        </td>
        <td class="text-left">
            <strong>SISTEM PENERANGAN</strong>
        </td>
    </tr>
    <tr>
        <td>1</td>
        <td>
            <span>
                Kartu Uji
            </span>
        </td>
        <td>
            @if ($verifikasi[0]->kartu_uji == 'ada')
                <span class="bg-success">ada, berlaku</span>
            @endif
        </td>
        <td>
            @if ($verifikasi[0]->kartu_uji == 'tidak ada')
                <span class="bg-danger">&#x2714</span>
                <span>tidak ada</span>
                <span>tidak berlaku</span>
                <span>tidak sesuai fisik</span>
            @elseif ($verifikasi[0]->kartu_uji == 'tidak berlaku')
                <span>tidak ada</span>
                <span class="bg-danger">&#x2714</span>
                <span>tidak berlaku</span>
                <span>tidak sesuai fisik</span>
            @elseif ($verifikasi[0]->kartu_uji == 'tidak sesuai fisik')
                <span>tidak ada</span>
                <span>tidak berlaku</span>
                <span class="bg-danger">&#x2714</span>
                <span>tidak sesuai fisik</span>
            @endif
        </td>
    </tr>
    <tr>
        <td>2</td>
        <td>Kp Reguler</td>
        <td>
            @if ($verifikasi[0]->kp_reguler == 'ada')
                <span>&#x2714 ada, berlaku</span>
            @endif
        </td>
        <td>
            @if ($verifikasi[0]->kp_reguler == 'tidak ada')
                <span class="bg-danger">&#x2714</span>
                <span>tidak ada</span>
                <span>tidak berlaku</span>
                <span>tidak sesuai fisik</span>
            @elseif ($verifikasi[0]->kp_reguler == 'tidak berlaku')
                <span>tidak ada</span>
                <span class="bg-danger">&#x2714</span>
                <span>tidak berlaku</span>
                <span>tidak sesuai fisik</span>
            @elseif ($verifikasi[0]->kp_reguler == 'tidak sesuai fisik')
                <span>tidak ada</span>
                <span>tidak berlaku</span>
                <span class="bg-danger">&#x2714</span>
                <span>tidak sesuai fisik</span>
            @endif
        </td>
    </tr>
    <tr>
        <td>3</td>
        <td>Kp Cadangan</td>
        <td>
            @if ($verifikasi[0]->kp_cadangan == 'ada')
                <span>&#x2714 ada, berlaku</span>
            @else
                <span>&#x25A2</span>
                <span>ada, berlaku</span>
            @endif
        </td>
        <td>
            @if ($verifikasi[0]->kp_cadangan == 'tidak ada')
                <span class="bg-danger">&#x2714</span>
                <span>tidak ada</span>
                <span>tidak berlaku</span>
                <span>tidak sesuai fisik</span>
            @elseif ($verifikasi[0]->kp_cadangan == 'tidak berlaku')
                <span>&#x25A2</span>
                <span>tidak ada</span>
                <span class="bg-danger">&#x2714</span>
                <span>tidak berlaku</span>
                <span>&#x25A2</span>
                <span>tidak sesuai fisik</span>
            @elseif ($verifikasi[0]->kp_cadangan == 'tidak sesuai fisik')
                <span>&#x25A2</span>
                <span>tidak ada</span>
                <span>tidak berlaku</span>
                <span class="bg-danger">&#x2714</span>
                <span>tidak sesuai fisik</span>
            @endif
        </td>
    </tr>
    <tr>
        <td>4</td>
        <td>Sim Pengemudi</td>
        <td>
            @if ($verifikasi[0]->sim_pengemudi == 'ada')
                v ada
            @endif
        </td>
        <td></td>
    </tr>
  @endif
</table>
</body>
</html>

