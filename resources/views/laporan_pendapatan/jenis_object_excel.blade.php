<title>Report Hasil Pendapatan Daerah Tangerang selatan</title>

<style>
    table {
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
        background-color: #ddd;
        color: #000;
        width: auto;
        height: auto;
    }
</style> 

<table>
    <tr>
        <td></td>
    </tr>
    <tr>
        <td>
            <b> PEMERINTAH KOTA TANGERANG SELATAN </b>
        </td>
    </tr>
    <tr>
        <td>
            <b>LAPORAN REALISASI ANGGARAN PENDAPATAN DAN BELANJA PEMDA </b>
        </td>
    </tr>
    <tr>
        <td>
            <b> PER REKENING JENIS</b>
        </td>
    </tr>
    <tr>
        <td> TAHUN ANGGARAN {{ $tahun }}</td>
    </tr>
    <tr>
        <td><b>[{{ $opd['kode'] }}] - [{{ $opd['nama'] }}]</b></td>
    </tr>
    <tr>
        <td> PERIODE : {{ $dari }} S/D {{ $sampai }}</td>
    </tr>

</table>
<table>
    <thead>
        <tr style="border-bottom: 0.1px solid #000">
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
        <tr style="background: greenyellow">
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
        $target = $listarget::where('rekneing_rincian_akun_jenis_objek_id',$list['id_rek_obj'])->first();
        $dtarget = ($target['jumlah']) ? number_format($target['jumlah'],0,0,'.') : '0';
        $sjenis = ($dtarget - $list['jml_rek_jenis']);
        @endphp
        <tr>
            <td><b>{{ $list['kd_rek_jenis'] }}</b></td>
            <td><b>{{ $list['nm_rek_jenis'] }}</b></td>
            <td><b>{{ $dtarget }}</b></td>
            <td></td>
            <td><b>{{ number_format($list['jml_rek_jenis'],0,0,'.') }}</b></td>
            <td></td>
            <td>{{ number_format($sjenis,0,0,'.') }}</td>
            <td></td>
        </tr>
        @php
        $a = $tmpendapatan->report_pendapatan(['tmrekening_akun_kelompok_jenis.id' => $list->id_rek_jenis],
        'tmrekening_akun_kelompok_jenis_objeks.id')->get();
        $sobj = ($dtarget - $list['jml_rek_obj']);

        @endphp
        @foreach ($a as $ls)
        <tr>
            <td><b>{{ $ls['kd_rek_obj'] }}</b></td>
            <td><b>{{ $ls['nm_rek_obj'] }}</b></td>
            <td></td>
            <td></td>
            <td><b>{{ number_format($ls['jml_rek_obj'],0,0,'.') }}</b></td>
            <td></td>
            <td>{{ number_format($sobj,0,0,'.') }}</td>
            <td></td>
        </tr>
        @php
        $b = $tmpendapatan->report_pendapatan(['tmrekening_akun_kelompok_jenis_objeks.id' => $ls->id_rek_obj],
        'tmrekening_akun_kelompok_jenis_objek_rincians.id')->get();
        $srinci = ($dtarget - $list['jml_rek_rincian']);

        @endphp
        @foreach ($b as $item)
        <tr>
            <td>{{ $item['id_rek_rincians'] }}</td>
            <td>{{ $item['nm_rek_rincian_obj'] }}</td>
            <td></td>
            <td></td>
            <td><b>{{ number_format($item['jml_rek_rincian'],0,0,'.') }}</b></td>
            <td></td>
            <td>{{ number_format($srinci,0,0,'.') }}</td>
            <td></td>
        </tr>

        @php
        $c = $tmpendapatan->report_pendapatan(['tmrekening_akun_kelompok_jenis_objek_rincians.id' =>
        $ls->id_rek_rincians], 'rek_rincian_sub_id')->get();
        $srinci_sub = ($dtarget - $list['jml_rek_rincian_sub']);
        @endphp
        @if ($c->count() == 0 || $c == NULL)
        @else
        @foreach ($c as $r)

        <tr>
            <td>{{ $r['rek_rincian_sub_id'] }}</td>
            <td>{{ $r['nm_rek_rincian_objek_sub'] }}</td>
            <td></td>
            <td></td>
            <td>
                @if($r['jml_rek_rincian_sub'] == 0)
                @else
                {{ number_format($r['jml_rek_rincian_sub'],0,0,'.') }}
                @endif
            <td></td>
            <td>@if($srinci_sub == 0)
                @else
                {{ number_format($srinci_sub,0,0,'.') }};
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