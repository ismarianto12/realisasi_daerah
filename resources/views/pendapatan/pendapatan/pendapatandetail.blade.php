<h2>Detail Pelaporan Satuan kerja opd</h2>

<div style="text-align: right;">
	<a href="{{ Url('pendapatan/'.$pendapatan_id.'/edit?satker_id='.$tmsikd_satker_id.'&tgl='.$tanggal_lapor) }}"
		class="btn btn btn-warning" target="_blank"><i class="fa fa-edit"></i>Edit data</a>
</div>
<hr />

<table class="table table-striped">
	<tr>
		<td>Satuan Kerja (OPD)</td>
		<td>[{{ $opd['kode'] }}] <b>{{ $opd['n_opd'] }}</b></td>
	</tr>
</table>

<hr />
<table class="table">
	@foreach($datas as $list)

	<tr>
		<td>Kode Rek</td>
		<td>{{ $list['kode_rek']['val'] }}</td>
	</tr>
	<tr>
		<td>Nama Rek</td>
		<td>{{ $list['nama_rek']['val'] }}</td>
	</tr>
	<tr>
		<td>Jumlah yang di laporkan </td>
		<td>{{ $list['jumlah']['val'] }}</td>
	</tr>
	<tr>
		<td>Tanggal dan waktu </td>
		<td>{{ $list['tanggal_lapor']['val'] }}</td>

	</tr>
	@endforeach
 
</table>