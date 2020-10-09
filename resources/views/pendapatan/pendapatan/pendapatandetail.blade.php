<h2>Detail Pelaporan Satuan kerja opd</h2>

<div style="text-align: right;">
<a href="{{ Url('pendapatan/'.$pendapatan_id.'/edit') }}" class="btn btn btn-warning" target="_blank"><i class="fa fa-edit"></i>Edit data</a>
</div> 
<hr />

<table class="table table-striped"> 
	<tr><td>Satuan Kerja (OPD)</td>
		<td>[{{ $opd->kode }}] <b>{{ $opd->n_opd }}</b></td>
	</tr> 
	
	<tr><td>Rekening Object</td>
		<td>{{ $data->nm_rek_obj }}</td>
	</tr>
	<tr><td>Tanggal Lapor</td>
		<td>{{ $data->tanggal_lapor }}</td>
	</tr> 
	<tr><td>Total </td>
		<td> {{ Html_number::numeric($data->jumlah) }} </td>
	</tr>   
</table>
 
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
