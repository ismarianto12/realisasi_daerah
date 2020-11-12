<h3>Satuan Kerja / OPD <b>[{{ $satker_kd }}] - {{ $satkernm }}</b></h3>
<hr />

@if($dataset == '')
<div class="alert alert-danger"><i class="fa fa-danger"></i> Satker ini belum ada rekening pad </div>
<img src="https://image.freepik.com/free-vector/error-404-concept-illustration_114360-1811.jpg" class="img-reponsive">

@else
<table class="table table-striped">
    @foreach ($dataset as $rekeningdatas)

    <tr @if($rekeningdatas['bold']['val']==TRUE) style="
        background: rebeccapurple;
        color: #fff;
        text-align: center;
        font-weight: bold;
    " ; @endif>
        <td>[{{ $rekeningdatas['kd_rek']['val'] }}] -
            {{ $rekeningdatas['nm_rek']['val'] }}</td>
        <td>@php echo $rekeningdatas['lapor']['val'] @endphp
    </tr>
    @endforeach
</table>
@endif