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
    }

    tr:nth-child(even) {
        background-color: #f2f2f2
    }

    th {
        background-color: #ddd;
        color: #000;
        width: auto;
        height: auto;
        font-size : 12.5px;
        padding :10px 10px 10px;
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
    <b>[{{ $opd['kode'] }}] - [{{ $opd['nama'] }}]</b>
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
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <td>7</td>
            <td>8</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($render as $list)
        @php
        $rjenis_old     =  $rperiode_lalu->where(\DB::raw('substr(tmpendapatan.tmrekening_akun_kelompok_jenis_objek_rincian_id,1,3)'),$list['kd_rek_jenis'])->first();
        $targetby_jenis = $listarget::select(\DB::raw('sum(jumlah) as tjenis'))->where(\DB::raw('substr(tmrekening_akun_kelompok_jenis_objek_rincian_id,1,3)'),$list['kd_rek_jenis'])->first();
        $sjenis         = ($targetby_jenis['tjenis'] - $list['jml_rek_jenis']);
        $trek_jenis     = ($rjenis_old['jml_rek_jenis'] + $list['jml_rek_jenis']);


        @endphp
        <tr style="background:#fff">
            <td><b>{{ $list['kd_rek_jenis'] }}</b></td>
            <td><b>{{ $list['nm_rek_jenis'] }}</b></td>
            <td><b>{{ number_format($targetby_jenis['tjenis'],0,0,'.') }}</b></td>
            <td><b>{{ number_format($rjenis_old['jml_rek_jenis'],0,0,'.') }}</b></td>
            <td><b>{{ number_format($list['jml_rek_jenis'],0,0,'.') }}</b></td>
            <td><b>{{ number_format($trek_jenis,0,0,'.') }}</b></td>
            <td>{{ number_format($sjenis,0,0,'.') }}</td>
            <td></td>
        </tr>
        @php
        $a = $tmpendapatan->report_pendapatan(['tmrekening_akun_kelompok_jenis.id' => $list->id_rek_jenis],
        'tmrekening_akun_kelompok_jenis_objeks.id')->get();
        @endphp
        @foreach ($a as $ls)
        @php
        $robj_old      = $rperiode_lalu->where(\DB::raw('substr(tmpendapatan.tmrekening_akun_kelompok_jenis_objek_rincian_id,1,5)'),$list['kd_rek_obj'])->first(); 
        $object_target = $listarget::select(\DB::raw('sum(jumlah) as tjenis_objek'))->where(\DB::raw('substr(tmrekening_akun_kelompok_jenis_objek_rincian_id,1,5)'),$ls['kd_rek_obj'])->first();
        $sobj          = ($object_target['tjenis_objek'] - $ls['jml_rek_obj']);

        //perekening jenis report
        $trek_rincian  = ($robj_old['tjenis_objek'] + $ls['jml_rek_obj']); 
        @endphp
        <tr style="background:#fff">
            <td><b>{{ $ls['kd_rek_obj'] }}</b></td>
            <td><b>{{ $ls['nm_rek_obj'] }}</b></td>
            <td>{{ number_format($object_target['tjenis_objek'],0,0,'.') }}</td>
            <td><b>{{ number_format($robj_old['jml_rek_obj']) }}</b></td>
            <td><b>{{ number_format($ls['jml_rek_obj'],0,0,'.') }}</b></td>
            <td><b>{{ number_format($trek_rincian,0,0,'.') }}</b></td>
            <td><b>{{ number_format($sobj,0,0,'.') }}</b></td>
            <td></td>
        </tr>
        @php
        $b = $tmpendapatan->report_pendapatan(['tmrekening_akun_kelompok_jenis_objeks.id' => $ls->id_rek_obj],
        'tmrekening_akun_kelompok_jenis_objek_rincians.id')->get();
        @endphp
        
        @foreach ($b as $item)
        @php

        $rincian_target      = $listarget::where('tmrekening_akun_kelompok_jenis_objek_rincian_id',$item['kd_rek_rincian_obj'])->first();
        $rtarget             = ($rincian_target['jumlah']) ? number_format($rincian_target['jumlah'],0,0,'.') : '0';
        $srinci              = ($rincian_target['jumlah'] - $item['jml_rek_rincian']);
        $rrinci_old          = $rperiode_lalu->where(\DB::raw('tmpendapatan.tmrekening_akun_kelompok_jenis_objek_rincian_id'),$item['kd_rek_rincian_obj'])->first();
        $trek_rincian_sub    = ($rrinci_old['jml_rek_rincian'] + $item['jml_rek_rincian']); 
        @endphp
        <tr style="background:#fff">
            <td>{{ $item['id_rek_rincians'] }}</td>
            <td>{{ $item['nm_rek_rincian_obj'] }}</td>
            <td>{{ $rtarget }}</td>
            <td><b>{{ number_format($rrinci_old['jml_rek_rincian'],0,0,'.') }}</b></td>
            <td><b>{{ number_format($item['jml_rek_rincian'],0,0,'.') }}</b></td>
            <td><i>{{ number_format($trek_rincian_sub,0,0,'.') }}</i></td>
            <td></b>{{ number_format($srinci,0,0,'.') }}</b></td>
            <td></td>
        </tr>

        @php
        $c = $tmpendapatan->report_pendapatan(['tmrekening_akun_kelompok_jenis_objek_rincians.id' =>
        $ls->id_rek_rincians], 'rek_rincian_sub_id')->get();
        $srinci_sub = ($rincian_target['jumlah'] - $list['jml_rek_rincian_sub']);
        @endphp
        @if ($c->count() == 0 || $c == NULL)
        @else
        @foreach ($c as $r)
        @php
        $rrinci_sub_old = $rperiode_lalu->where(\DB::raw('tmpendapatan.tmrekening_akun_kelompok_jenis_objek_rincian_sub_id'),$item['rek_rincian_sub_id'])
        ->first();

        @endphp
        <tr>
            <td>{{ $r['rek_rincian_sub_id'] }}</td>
            <td>{{ $r['nm_rek_rincian_objek_sub'] }}</td>
            <td></td>
            <td>
                @if($rrinci_sub_old['jml_rek_rincian_sub'] == 0)
                @else
                {{ number_format($rrinci_sub_old['jml_rek_rincian_sub'],0,0,'.') }}
                @endif
            <td>
            <td>
                @if($r['jml_rek_rincian_sub'] == 0)
                @else
                {{ number_format($r['jml_rek_rincian_sub'],0,0,'.') }}
                @endif
            <td>

            </td>
            <td>@if($srinci_sub == 0)
                @else
                @endif
            </td>
            <td></td>
        </tr>
        @endforeach
        @endif
        @endforeach

        @endforeach
        @endforeach

    </tbody>
</table>