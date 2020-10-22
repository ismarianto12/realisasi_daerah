<!DOCTYPE html>
<html>

<head>
    <title>Rekap Pelaporan Pendapatan Daerah Tangerang Selatan Tahun anggaran {{ $tahun }}</title>
</head>

<body>

    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            border: 0.1pt dashed #000;
        }

        th,
        td {
            text-align: left;
            border: 0.1pt dashed #000;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2
        }

        th {
            background-color: #ddd;
            color: #000;
            width: auto;
            height: auto;
        }
    </style> 
    <div style="float:left">
        <img src="{{ asset('assets/template/img/tangsel.png') }}" style="width: 60px;height:60px;margin-top:25px">
    </div>
    <center>
        <h2>PEMERINTAH KOTA TANGERANG SELATAN</h2>
        <h3>REALISASI PENDAPATAN & RETRIBUSI DAERAH APBD {{ $tahun }}</h3>
        <h4>SAMPAI DENGAN DESEMBER {{ $tahun }}</h4>
    </center>
    <table>
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
                <td colspan="2"></td>
                <td colspan="3"></td>
                <td></td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td>7</td>
                <td>8</td>
                <td>9</td>
                <td>10</td>
                <td>11</td>
                <td>12</td>
            </tr>
        </thead>
        <tbody>
            @foreach($akun_kelompok as $kelompok)
            @php
            $total_pad = $tmpendapatan::tbykelompok($kelompok['kd_rek_kelompok'])->first();
            @endphp
            <tr style="
            background: #4e72d5;
            color: #fff;">
                <td colspan="2"><b>{{ $kelompok['kd_rek_kelompok'] }}</b></td>
                <td colspan="3"><b>{{ $kelompok['nm_rek_kelompok'] }}</b></td>
                <td>{{ number_format($total_pad['total_pad'],0,0,'.') }}</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            @php
            //table tmrekening_akun_kelompok_jenis
            $qkjenis = $kelompok_jenis::where('tmrekening_akun_kelompok_id',$kelompok['id'])->get();
            @endphp
            @foreach($qkjenis as $kjenis)
            @php
            $where = [
            'tmrekening_akun_kelompok_jenis_objeks.tmrekening_akun_kelompok_jenis_id'=>$kjenis['kd_rek_jenis'],
            'tmpendapatan.tahun'=>$tahun
            ];
            $rjenis = $tmpendapatan::tbykelompok_jenis($where)->first();
            $jml_rek_jenis = ($rjenis['jumlah_obj']) ? $rjenis['jumlah_obj'] : 0;
            @endphp
            <tr>
                <td colspan="2"><b>{{ $kjenis['kd_rek_jenis'] }}</b></td>
                <td colspan="3"><b>{{ $kjenis['nm_rek_jenis'] }}</b></td>
                <td>{{ number_format($jml_rek_jenis,0,0,'.') }}</td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            @php
            $qkjenis_obj = $kelompok_object::where('tmrekening_akun_kelompok_jenis_id',$kjenis['kd_rek_jenis'])->get();
            @endphp
            @foreach($qkjenis_obj as $rjenis_obj)
            @php
            $kd_rek_obj = $rjenis_obj['kd_rek_obj'];
            @endphp
            <tr>
                <td></td>
                <td></td>
                <td colspan="1">{{ $rjenis_obj['kd_rek_obj'] }}</td>
                <td colspan="1">{{ $rjenis_obj['nm_rek_obj'] }}</td>
                <td></td>
                <td></td>
                <td><b>{{ $tmpendapatan::tbykelompok_object($kd_rek_obj,1) }}</b></td>
                <td><b>{{ $tmpendapatan::tbykelompok_object($kd_rek_obj,2) }}</b></td>
                <td><b>{{ $tmpendapatan::tbykelompok_object($kd_rek_obj,3) }}</b></td>
                <td><b>{{ $tmpendapatan::tbykelompok_object($kd_rek_obj,4) }}</b></td>
                <td><b>{{ $tmpendapatan::tbykelompok_object($kd_rek_obj,5) }}</b></td>
                <td><b>{{ $tmpendapatan::tbykelompok_object($kd_rek_obj,6) }}</b></td>
                <td><b>{{ $tmpendapatan::tbykelompok_object($kd_rek_obj,7) }}</b></td>
                <td><b>{{ $tmpendapatan::tbykelompok_object($kd_rek_obj,8) }}</b></td>
                <td><b>{{ $tmpendapatan::tbykelompok_object($kd_rek_obj,9) }}</b></td>
                <td><b>{{ $tmpendapatan::tbykelompok_object($kd_rek_obj,10) }}</b></td>
                <td><b>{{ $tmpendapatan::tbykelompok_object($kd_rek_obj,11) }}</b></td>
                <td><b>{{ $tmpendapatan::tbykelompok_object($kd_rek_obj,12) }}</b></td>
            </tr>
            @endforeach
            @endforeach
            @endforeach

        </tbody>
    </table>
</body>

</html>