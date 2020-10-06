<h2>Jenis Pad yang di laporkan  : {{ $data->nm_rek_obj }}</h2>
<h3>Tanggal Lapor {{ $data->tanggal_lapor }}</h3>
<hr />
<h4><b>Total dari : {{ $data->nm_rek_obj }} , {{ number_format(0,0,'.',$data->jumlah,'.') }} </b></h4>
<table class="table table">
	<tr>
		<td>Berdasarkan Rek Rincian Object</td>
		<td>{{ number_format(0,0,'.',$data->jml_rek_rincian_obj,'.') }}</td>
	</tr>
	<tr>
		<td>Berdasarkan Rek Object</td>
		<td>{{ number_format(0,0,'.',$data->jml_rek_obj,'.') }}</td>
	</tr>
	<tr>
		<td>Berdasarkan Rek Jenis</td>
		<td>{{ number_format(0,0,'.',$data->jml_rek_jenis,'.') }}</td>
	</tr> 
</table>
  