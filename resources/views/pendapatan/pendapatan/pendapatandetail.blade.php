<h2>Jenis Pad  yang di laporkan adalah : {{ $data->nm_rek_obj }}</h2>
<h3>Tanggal Lapor {{ $data->tanggal_lapor }}</h3>
<table class="table table"> 
	<tr>
		<td>Berdasarkan Rek Rincian Object</td>
		<td>{{ $data->jml_rek_rincian_obj }}</td>
	</tr>
		<tr>
		<td>Berdasarkan Rek Object</td>
		<td>{{ $data->jml_rek_obj }}</td>
	</tr>
		<tr>
		<td>Berdasarkan Rek Jenis</td>
		<td>{{ $data->jml_rek_jenis }}</td>
	</tr>

</table>
   
<!-- 
   jml_rek_rincian_obj
jml_rek_obj
jml_rek_jenis -->