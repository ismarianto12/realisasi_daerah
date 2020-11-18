<!DOCTYPE html>
<html>

<head>
    <title>Rekap Pelaporan Pendapatan Daerah Tangerang Selatan Tahun anggaran {{ $tahun }}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>

<body>

    <center>
        <h2>PEMERINTAH KOTA TANGERANG SELATAN</h2>
        <h3>REALISASI PENDAPATAN & RETRIBUSI DAERAH APBD {{ $tahun }}</h3>
        <h4>SAMPAI DENGAN DESEMBER {{ $tahun }}</h4>
    </center>

    <table border="1">
        <thead>
            <tr style="background: royalblue;color: #fff; border: 0.5px dotted #000">
                <th colspan=" 5">URAIAN</th>
                <th>APBD {{ $tahun }}</th>
                <th>JAN</th>
                <th>FEB</th>
                <th>MAR</th>
                <th>APR</th>
                <th>MEI</th>
                <th>JUN</th>
                <th>JUL</th>
                <th>AGUS</th>
                <th>SEPT</th>
                <th>OKT</th>
                <th>NOV</th>
                <th>DES</th>
            </tr>
            <tr style="background: royalblue;color: #fff; border: 0.5px dotted #000">
                <td colspan="5"></td>
                <td></td>
                @for($a=1; $a <= 12; $a++) <td style="text-align:center">
                    {{ $a }}
                    </td>
                    @endfor
            </tr>
        </thead>
        <tbody>
            @foreach ($getdatayears as $list)
            <tr>
                @php echo $list['table']['val'] @endphp
                @php echo $list['kd_rek']['val'] @endphp
                @php echo $list['nm_rek']['val'] @endphp
                @php echo $list['juraian']['val'] @endphp
                @for ($j = 1; $j <= 12; $j++) @php echo $list['bulan_'.$j]['val'] @endphp @endfor </tr> @endforeach </tbody> </table> </body> </html>