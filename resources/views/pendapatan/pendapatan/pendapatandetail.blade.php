<h2>Jenis Pad yang di laporkan : {{ $data->nm_rek_obj }}</h2>
<h3>Tanggal Lapor {{ $data->tanggal_lapor }}</h3>
<hr />
<h4><b>Total dari : {{ $data->nm_rek_obj }} , {{ Html_number::numeric($data->jumlah) }} </b></h4>
<table class="table table">
	<tr>
		<td>Berdasarkan Rek Rincian Object</td>
		<td>{{ Html_number::numeric($data->jml_rek_rincian_obj) }}</td>
	</tr>
	<tr>
		<td>Berdasarkan Rek Object</td>
		<td>{{ Html_number::numeric($data->jml_rek_obj) }}</td>
	</tr>
	<tr>
		<td>Berdasarkan Rek Jenis</td>
		<td>{{ Html_number::numeric($data->jml_rek_jenis) }}</td>
	</tr>
</table>