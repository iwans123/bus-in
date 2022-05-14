<table>
    <thead>
        <tr>
            <th>NO</th>
            <th>TANGGAL</th>
            <th>NAMA PO</th>
            <th>NO. KEND</th>
            <th>TRAYEK</th>
            <th>WAKTU</th>
            <th>JUMLAH PENUMPANG</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($kedatangans as $kedatangan)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $kedatangan->created_at->toDateString() }}</td>
                <td>{{ $kedatangan->name_po }}</td>
                <td>{{ $kedatangan->number_vehicle }}</td>
                <td>{{ $kedatangan->trayek }}</td>
                <td>{{ $kedatangan->created_at->toTimeString() }}</td>
                <td>{{ $kedatangan->jumlahPenumpang }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
