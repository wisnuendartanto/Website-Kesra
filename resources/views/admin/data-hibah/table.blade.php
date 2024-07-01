@foreach ($data as $row)
    <tr>
        <td>{{ $row->lembaga }}</td>
        <td>{{ $row->alamat_lembaga }}</td>
        <td>{{ $row->rekening }}</td>
        <td>{{ number_format($row->nominal, 0, ',', '.') }}</td>
        <td>{{ $row->keterangan }}</td>
        <td>{{ $row->catatan }}</td>
    </tr>
@endforeach
