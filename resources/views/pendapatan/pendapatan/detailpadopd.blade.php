<h3>Satuan Kerja / OPD <b>[{{ $satker_kd }}] - {{ $satkernm }}</b></h3>
<hr />

<table class="table table-striped">
    @foreach ($dataset as $rekeningdatas)

    <tr @if($rekeningdatas['bold']['val']==TRUE) style="
        background: rebeccapurple;
        color: #fff;
        text-align: center;
        font-weight: bold;
    "; @endif>
        <td>[{{ $rekeningdatas['kd_rek']['val'] }}] -
            {{ $rekeningdatas['nm_rek']['val'] }}</td>
        <td>@php echo $rekeningdatas['lapor']['val'] @endphp
    </tr>
    @endforeach
</table>