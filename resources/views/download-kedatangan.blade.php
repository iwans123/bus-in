<table>
    <thead>
        <tr>
            <th>NO</th>
            <th>NAMA PO</th>
            <th>NO. KEND</th>
            <th>TRAYEK</th>
            <th>Waktu</th>
            <th>Jumlah Penumpang</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($kedatangans as $kedatangan)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $kedatangan->name_po }}</td>
                <td>{{ $kedatangan->number_vehicle }}</td>
                <td>{{ $kedatangan->trayek }}</td>
                <td>{{ $kedatangan->created_at->toDateTimeString() }}</td>
                <td>{{ $kedatangan->jumlahPenumpang }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
