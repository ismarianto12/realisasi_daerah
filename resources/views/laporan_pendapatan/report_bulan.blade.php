<!DOCTYPE html>
<html>

<head>
    <title>Rekap Pelaporan Pendapatan Daerah Tangerang Selatan Tahun anggaran {{ $tahun }}</title>
</head>

<body>
    <center>
        <h2>PEMERINTAH KOTA TANGERANG SELATAN</h2>
        <h3>REALISASI PENDAPATAN & RETRIBUSI DAERAH APBD {{ $tahun }}</h3>
        <h4>SAMPAI DENGAN DESEMBER {{ $tahun }}</h4>
    </center>
    <table>
        <tbody>
            <tr>
                <th colspan="5">URAIAN</th>
                <th>APBD {{ $tahun }}</th>
                <th style="width: 106pt;">JANUARI</th>
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
            @foreach($akun_kelompok as $kelompok)
            <tr>
                <td colspan="2"><b>{{ $kelompok['kd_rek_kelompok'] }}</b></td>
                <td colspan="3"><b>{{ $kelompok['nm_rek_kelompok'] }}</b></td>
                <td>{{ $total_pad['total_pad'] }}</td>
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
            $qkjenis = $kelompok_jenis::where('tmrekening_akun_kelompok_id',$kelompok['id'])->get();
            @endphp
            @foreach($qkjenis as $kjenis)
            @php
            $where = [
            'tmrekening_akun_kelompok_jenis_objeks.tmrekening_akun_kelompok_jenis_id'=>$kjenis['kd_rek_jenis'],
            'tmpendapatan.tahun'=>$tahun
            ];
            $rjenis = $tmpendapatan::tbykelompok_jenis($where)->get();
            dd($rjenis);
           
            //$jml_rek_jenis = $rjenis['jumlah'];
            
            @endphp
            <tr>
                <td colspan="2"><b>{{ $kjenis['kd_rek_jenis'] }}</b></td>
                <td colspan="3"><b>{{ $kjenis['nm_rek_jenis'] }}</b></td>
                <td>{{ $jml_rek_jenis }}</td>
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
            $rjenis = $tmpendapatan::pertahun([
            'tmrekening_akun_kelompok_jenis_objeks.kd_rek_obj'=> $rjenis_obj['kd_rek_obj'],
            'tmpendapatan.tahun'=> $tahun
            ])->first();
            $jml_rek_obj = $rjenis['jml_rek_obj'];
            @endphp
            <tr>
                <td></td>
                <td></td>
                <td colspan="1">{{ $rjenis_obj['kd_rek_obj'] }}</td>
                <td colspan="1">{{ $rjenis_obj['nm_rek_obj'] }}</td>
                <td>{{ $jml_rek_obj }}</td>
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
                <td></td>
            </tr>
            @endforeach
            @endforeach
            @endforeach
        </tbody>
        </tbody>
    </table>
</body>

</html>