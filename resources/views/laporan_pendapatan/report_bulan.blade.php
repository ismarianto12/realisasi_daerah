<!DOCTYPE html>
<html>

<head>
    <title>Rekap Pelaporan Pendapatan Daerah Tangerang Selatan Tahun anggaran {{ $tahun }}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>
<style type="text/css">
    table {
        font-size: 12px;
        table-layout: auto;
        border-collapse: collapse;
        width: 100%;
    }

    td {
        border: 0.1px dotted black;
        border-collapse: collapse;
    }

</style>

<body>

    <div style="float : left">
        <img src="{{ asset('assets/template/img/tangsel.png') }}" style="width: 60px;height:60px;margin-top:45px">
    </div>

    <center>
        <h2>PEMERINTAH KOTA TANGERANG SELATAN</h2>
        <h3>REALISASI PENDAPATAN APBD {{ $tahun }}</h3>
        <h4>SAMPAI DENGAN DESEMBER {{ $tahun }}</h4>
    </center>

    <table style="border: 0.5px dotted #000;
                  border-collapse: collapse">
        <thead>
            <tr style="background: royalblue;color: #fff; border: 0.5px dotted #000">
                <th>Kode</th>
                <th>URAIAN</th>
                <th>APBD <b> {{ Properti_app::tahun_sekarang() }} </b> </th>
                <th>JAN</th>
                <th>FEB</th>
                <th>MAR</th>
                <th>Realisasi</th>
                <th>Lebih/Kurang</th>
                <th>Persentase</th>
                <th>APR</th>
                <th>MEI</th>
                <th>JUN</th>
                <th>Realisasi</th>
                <th>Lebih/Kurang</th>
                <th>Persentase</th>
                <th>JUL</th>
                <th>AGUS</th>
                <th>SEPT</th>
                <th>Realisasi</th>
                <th>Lebih/Kurang</th>
                <th>Persentase</th>
                <th>OKT</th>
                <th>NOV</th>
                <th>DES</th>
                <th>Realisasi</th>
                <th>Lebih/Kurang</th>
                <th>Persentase</th>
            </tr>
            <tr style="background: royalblue;color: #fff; border: 0.5px dotted #000">
                <td colspan="5"></td>
                <td></td>
                @for ($a = 1; $a <= 12; $a++)
                    <td style="text-align:center">
                        {{ $a }}
                    </td>
                @endfor
            </tr>
        </thead>
        <tbody>
            @php
                $n = 1;
            @endphp
            @foreach ($getdatayears as $list)
                <tr>
                    <td>@php echo $list['kd_rek'] @endphp</td>
                    <td>@php echo $list['nama_rek'] @endphp</td>
                    <td>@php echo $list['tot'] @endphp</td>
                    @for ($j = 1; $j <= 12; $j++)
                        <td>
                            @php
                                echo $list['jlbulan_1'];
                            @endphp
                        </td>

                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                    @endfor
                </tr>
                @php  $n++; @endphp
            @endforeach
        </tbody>
    </table> <b>Badan Pendaptan daerah tangerang selatan</b>

</body>

</html>
