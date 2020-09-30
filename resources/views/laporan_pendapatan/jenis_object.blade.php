<center>
    <h2> PEMERINTAH KOTA TANGERANG SELATAN </h2>
    <h3>LAPORAN REALISASI ANGGARAN PENDAPATAN DAN BELANJA PEMDA </h3>
    <h4> PER REKENING JENIS</h4>
    TAHUN ANGGARAN {{ $tahun }} 
    <b>[{{ $opd['kode'] }}] - [{{ $opd['nama'] }}]</b>
    PERIODE : {{ $dari }} S/D {{ $sampai }} 
    <br />
</center>
<table style="border-collapse: collapse; width: 100%;" border="1" cellspacing="1">
    <thead>
        <tr>
            <td>No</td>
            <td>Uraian</td>
            <td>Pagu Anggaran</td>
            <td colspan="3">Jumlah Realisasi (Rp.)</td>
            <td colspan="2">Lebih Kurang<br /><br /></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td>S/D Periode Lalu</td>
            <td>Periode Ini</td>
            <td>Total</td>
            <td>(Rp.)</td>
            <td>%</td>
        </tr>
        <tr style="
        background: yellow;
        text-align: center;">
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
        $dtarget = ($target['jumlah']) ? number_format($target['jumlah'],0,0,'.') : 0;
        @endphp
        <tr>
            <td><b>{{ $list['kd_rek_jenis'] }}</b></td>
            <td><b>{{ $list['nm_rek_jenis'] }}</b></td>
            <td><b>{{ $dtarget }}</b></td>
            <td></td>
            <td><b>{{ number_format($list['jml_rek_jenis'],0,0,'.') }}</b></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        @php
        $a = $tmpendapatan->report_pendapatan(['tmrekening_akun_kelompok_jenis.id' => $list->id_rek_jenis],
        'tmrekening_akun_kelompok_jenis_objeks.id')->get();
        @endphp
        @foreach ($a as $ls)
        <tr>
            <td><b>{{ $ls['kd_rek_obj'] }}</b></td>
            <td><b>{{ $ls['nm_rek_obj'] }}</b></td>
            <td></td>
            <td></td>
            <td><b>{{ number_format($ls['jml_rek_obj'],0,0,'.') }}</b></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        @php
        $b = $tmpendapatan->report_pendapatan(['tmrekening_akun_kelompok_jenis_objeks.id' => $ls->id_rek_obj],
        'tmrekening_akun_kelompok_jenis_objek_rincians.id')->get();
        @endphp
        @foreach ($b as $item)
        <tr>
            <td>{{ $item['id_rek_rincians'] }}</td>
            <td>{{ $item['nm_rek_rincian_obj'] }}</td>
            <td></td>
            <td></td>
            <td>{{ number_format($item['jml_rek_rincian_obj'],0,0,'.') }}</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>

        @php
        $c = $tmpendapatan->report_pendapatan(['tmrekening_akun_kelompok_jenis_objek_rincians.id' =>
        $ls->id_rek_rincians], 'rek_rincian_sub_id')->get();
        @endphp
        @foreach ($c as $r)
        <tr>
            <td>{{ $r['rek_rincian_sub_id'] }}</td>
            <td>{{ $r['nm_rek_rincian_objek_sub'] }}</td>
            <td></td>
            <td></td>
            <td>{{ number_format($r['jumlah'],0,0,'.') }}</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        @endforeach
        @endforeach

        @endforeach
        @endforeach

    </tbody>
</table>