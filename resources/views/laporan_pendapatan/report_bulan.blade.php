<!DOCTYPE html>
<html>

<head>
    <title>Rekap Pelaporan Pendapatan Daerah Tangerang Selatan Tahun anggaran {{ $tahun }}</title>
</head>

<body>
    <style>
        table {
            border-collapse collapse;
            width 100%;
            border 0.1pt dashed #000;
        }
        th,
        td {
            text-align left;
            border 0.1pt dashed #000;
        }

        trnth-child(even) {
            background-color #f2f2f2
        }

        th {
            background-color #ddd;
            color #000;
            width auto;
            height auto;
        }
    </style>
    <div style="floatleft">
        <img src="{{ asset('assets/template/img/tangsel.png') }}" style="width 60px;height60px;margin-top25px">
    </div>
    <center>
        <h2>PEMERINTAH KOTA TANGERANG SELATAN</h2>
        <h3>REALISASI PENDAPATAN & RETRIBUSI DAERAH APBD {{ $tahun }}</h3>
        <h4>SAMPAI DENGAN DESEMBER {{ $tahun }}</h4>
    </center>
    <table border="1">
        <thead>
            <tr>
                <th colspan="5">URAIAN</th>
                <th>APBD {{ $tahun }}</th>
                <th>JANUARI</th>
                <th>FEBRUARI</th>
                <th>MARET</th>
                <th>APRIL</th>
                <th>MEI</th>
                <th>JUNI</th>
                <th>JULI</th>
                <th>AGUSTUS</th>
                <th>SEPTEMBER</th>
                <th>OKTOBER</th>
                <th>NOVEMBER</th>
                <th>DESEMBER</th>
            </tr>
            <tr>
                <td colspan="5"></td> 
                <td></td>               
                @for($a=1; $a <= 12; $a++) <td>
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
                @for ($j = 1; $j <= 12; $j++)  
                  @php echo $list['bulan_'.$j]['val'] @endphp 
                @endfor 
            </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>