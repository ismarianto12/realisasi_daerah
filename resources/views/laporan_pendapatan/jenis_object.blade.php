<title>Report Hasil Pendapatan Daerah Tangerang selatan</title>

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
        font-size: 12px;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2
    }

    th {
        background-color: #fff;
        color: #000;
        width: auto;
        height: auto;
        font-size: 12.5px;
        padding: 10px 10px 10px;
    }
</style>


<div style="float:left">
    <img src="{{ asset('assets/template/img/tangsel.png') }}" style="width: 60px;height:60px;margin-top:25px">
</div>

<center>
    <h2> PEMERINTAH KOTA TANGERANG SELATAN </h2>
    <h3>LAPORAN REALISASI ANGGARAN PENDAPATAN DAN BELANJA PEMDA </h3>
    <h4> PER REKENING JENIS</h4>
    TAHUN ANGGARAN {{ $tahun }}
    [{{ $opd['kode'] }}] - [{{ $opd['nama'] }}]
    <br />
    PERIODE : {{ $dari }} S/D {{ $sampai }}
    <br />
</center>
<br />
<br />
<table>
    <thead>
        <tr style="border-bottom: 0.1px solid #ddd">
            <th>No</th>
            <th>Uraian</th>
            <th>Pagu Anggaran</th>
            <th colspan="3">Jumlah Realisasi (Rp.)</th>
            <th colspan="2">Lebih Kurang<br /></th>
        </tr>
        <tr>
            <th></th>
            <th></th>
            <th></th>
            <th>S/D Periode Lalu</th>
            <th>Periode Ini</th>
            <th>Total</th>
            <th>(Rp.)</th>
            <th>%</th>
        </tr>
        <tr>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>5</th>
            <th>6</th>
            <th>7</th>
            <th>8</th>
        </tr>
    </thead>
    <tbody>
        @php
        $idx = 0; count($render);
        @endphp
        @foreach ($render as $list)
        <tr>
            <td @if($list['bold']['val']==TRUE) style="font-weight:bold" @endif>{{ $list['kd_rek']['val'] }}</td>
            <td @if($list['bold']['val']==TRUE) style="font-weight:bold" @endif>{{ $list['nm_rek']['val'] }}</td>
            <td>{{ $list['pagu']['val'] }}</td>
            <td>{{ $list['periode_lalu']['val'] }}</td>
            <td>{{ $list['periode_ini']['val'] }}</td>
            <td>{{ $list['total']['val'] }}</td>
            <td>{{ $list['divide']['val'] }}</td>
            <td>{{ $list['persen']['val'] }}</td>
        </tr>
        @php $idx++ @endphp
        @endforeach
    </tbody>
</table>