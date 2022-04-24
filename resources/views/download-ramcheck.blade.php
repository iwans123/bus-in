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
            </tr>
        @endforeach
    </tbody>
</table>
