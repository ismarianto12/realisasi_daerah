<h3>Satuan Kerja / OPD <b>[{{ $satker_kd }}] - {{ $satkernm }}</b></h3>
<hr />

<table class="table table-striped">
    <tr>
        <td>Kelompok Jenis Rekening</td>
        <td>[{{ $rekeningdatas['kd_rek_jenis'] }}] -
            {{ $rekeningdatas['nm_rek_jenis'] }}</td>
    </tr>

    <tr>
        <td>Kelompok Rekening Jenis Object</td>
        <td>[{{ $rekeningdatas['kd_rek_obj'] }}] -
            {{ $rekeningdatas['nm_rek_obj'] }}</td>
    </tr>

    <tr>
        <td>Kelompok Rekening Jenis Object Rincian</td>
        <td>[{{ $rekeningdatas['kd_rek_rincian_obj'] }}] -
            {{ $rekeningdatas['nm_rek_rincian_obj'] }}</td>
    </tr>

    <tr>
        <td>Kelompok Rekening Jenis Object Rincian Sub</td>
        <td>[{{ $rekeningdatas['kd_rek_rincian_objek_sub'] }}] -
            {{ $rekeningdatas['kd_rek_rincian_objek_sub'] }}</td>
    </tr>
</table>