<table>
    <thead>
        <tr>
            <th>NO</th>
            <th>TANGGAL</th>
            <th>NAMA PO</th>
            <th>JENIS ANGKUTAN</th>
            <th>TRAYEK</th>
            <th>NO. KEND</th>
            <th>KESIMPULAN</th>
            <th>CATATAN</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($transaksis as $transaksi)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $transaksi->created_at->toDateString() }}</td>
                <td>{{ $transaksi->name_po }}</td>
                <td>{{ $transaksi->jenis_angkutan }}</td>
                <td>{{ $transaksi->trayek }}</td>
                <td>{{ $transaksi->number_vehicle }}</td>
                @if ($transaksi->status_firstVerifikasi == true && $transaksi->status_secondVerifikasi == true)
                <td style="color: green">
                    <span>Laik</span>
                </td>
                @else
                <td style="color: red">
                    <span>Tidak laik</span>
                </td>
                @endif
                <td>
                    @if ($transaksi->status_firstVerifikasi == true && $transaksi->status_secondVerifikasi == true)
                        DIIJINKAN OPERASIONAL
                    @else
                        TILANG DAN DILARANG OPERASIONAL
                    @endif
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
