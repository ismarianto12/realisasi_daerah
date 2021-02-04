<style>
    table,
    td,
    th {
        border: 0.1px solid black;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

</style>

<table>
    <thead>
        <th>#</th>
        <th>Kode</th>
        <th>Nama Rekening</th>
        <th>Jumlah</th>
    </thead>
    <tbody>
        @php
            $j = 1;
        @endphp
        @foreach ($data as $ls)

            @php
                $bold = $ls->ganti == '' ? 'background: #d2c7c7;font-weight: bold;' : '';
            @endphp
            <tr style="{{ $bold }}">
                <td>{{ $j }}</td>
                <td>{{ $ls->kd_rek_akun }}</td>
                <td>{{ $ls->nm_rek_akun }}</td>
                <td>{{ number_format($ls->jumlah, 0, 0, '.') }}</td>
            </tr>
            @php
                $j++;
            @endphp
        @endforeach
    </tbody>
</table>
