<!DOCTYPE html>
<html> 
<head> 
    <title>Rekap Pelaporan Pendapatan Daerah Tangerang Selatan Tahun anggaran {{ $tahun }}</title>
</head>  
<body> 
    <style> 
        table { 
            border-left: 0.1px solid #000;
            border-collapse: collapse;
            width: 100%;
        }    
        th,
        td {
            text-align: left;  
        }
    
        tr:nth-child(even) {
            background-color: #f2f2f2
        }
    
        th {
            background-color: #bb5e08;
            color: white;
        }
  
    </style>
    <center> 
       <h2>PEMERINTAH KOTA TANGERANG SELATAN</h2>							
       <h3>REALISASI PENDAPATAN & RETRIBUSI DAERAH APBD {{ $tahun }}</h3>							
       <h4>SAMPAI DENGAN DESEMBER {{ $tahun }}</h4>		
   </center> 
   <table style="border: 1px">
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
        <tr style="background:  rgb(11, 176, 182)">
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
        <tr style="background: rgb(11, 176, 182)">
            <td colspan="2"><b>{{ $kelompok['kd_rek_kelompok'] }}</b></td>
            <td colspan="3"><b>{{ $kelompok['nm_rek_kelompok'] }}</b></td>
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
        @php
        $qkjenis = $kelompok_jenis::where('tmrekening_akun_kelompok_id',$kelompok['id'])->get();
        @endphp
        @foreach($qkjenis as $kjenis)
        <tr style="background: hotpink">
            <td colspan="2"><b>{{ $kjenis['kd_rek_jenis'] }}</b></td>
            <td colspan="3"><b>{{ $kjenis['nm_rek_jenis'] }}</b></td>
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
        @php
        $qkjenis_obj = $kelompok_object::where('tmrekening_akun_kelompok_jenis_id',$kjenis['kd_rek_jenis'])->get();
        @endphp
        @foreach($qkjenis_obj as $rjenis_obj)
        <tr>
            <td></td>
            <td></td>
            <td colspan="1">{{ $rjenis_obj['kd_rek_obj'] }}</td>
            <td colspan="1">{{ $rjenis_obj['nm_rek_obj'] }}</td>
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