@if(request()->get('print') == 'y')
 <script>
  window.print()
</script>
@endif
<link rel="stylesheet" href="{{ asset('/assets/template/') }}/css/bootstrap.min.css">

<center>
  <h3>Satuan Kerja / OPD <b>[{{ $satker_kd }}] - {{ $satkernm }}</b></h3>
  <hr />
  Pertanggal {{ Properti_app::tgl_indo(date('Y-m-d')) }}
</center>

@if($dataset == '')
<div class="alert alert-danger"><i class="fa fa-danger"></i> Satker ini belum ada rekening pad </div>
<img src="https://image.freepik.com/free-vector/error-404-concept-illustration_114360-1811.jpg" class="img-reponsive">

@else
@php
$getid = request()->segments(3);
@endphp

<a href="{{ Url('pendapatan/dapatkanpadopd/'.$getid[2]) }}?print=y" class="btn btn-primary btn-xs" target="_blank"><i
    class="fa fa-print"></i>Print
  Data</a>
<hr />

<table class="table table-striped">
  @foreach ($dataset as $rekeningdatas)
  <tr @if($rekeningdatas['bold']['val']==TRUE) style="
        text-align: center;
        font-weight: bold;
    " ; @else @endif>
    <td>[{{ $rekeningdatas['kd_rek']['val'] }}] -
      {{ $rekeningdatas['nm_rek']['val'] }}</td>
    <td>@php
      if($rekeningdatas['lapor']['val'] ==''){
      echo 'Status Lapor OPD';
      }else{
      echo $rekeningdatas['lapor']['val'];
      }
      @endphp
  </tr>
  @endforeach
</table>
@endif