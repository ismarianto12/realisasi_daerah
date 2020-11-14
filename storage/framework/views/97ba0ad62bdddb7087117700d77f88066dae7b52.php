<h2>Detail Pelaporan Satuan kerja opd</h2>

<div style="text-align: right;">
<a href="<?php echo e(Url('pendapatan/'.$pendapatan_id.'/edit?satker_id='.$data->tmsikd_satker_id.'&tgl='.$data->tanggal_lapor)); ?>" class="btn btn btn-warning" target="_blank"><i class="fa fa-edit"></i>Edit data</a>
</div> 
<hr />

<table class="table table-striped"> 
	<tr><td>Satuan Kerja (OPD)</td>
		<td>[<?php echo e($opd->kode); ?>] <b><?php echo e($opd->n_opd); ?></b></td>
	</tr> 
	
	<tr><td>Rekening Object</td>
		<td><?php echo e($data->nm_rek_obj); ?></td>
	</tr>
	<tr><td>Tanggal Lapor</td>
		<td><?php echo e($data->tanggal_lapor); ?></td>
	</tr> 
	<tr><td>Total </td>
		<td> <?php echo e(Html_number::numeric($data->jumlah)); ?> </td>
	</tr>   
</table>
 
<table class="table table">
	<tr>
		<td>Berdasarkan Rek Rincian Object</td>
		<td><?php echo e(Html_number::numeric($data->jml_rek_rincian_obj)); ?></td>
	</tr>
	<tr>
		<td>Berdasarkan Rek Object</td>
		<td><?php echo e(Html_number::numeric($data->jml_rek_obj)); ?></td>
	</tr>
	<tr>
		<td>Berdasarkan Rek Jenis</td>
		<td><?php echo e(Html_number::numeric($data->jml_rek_jenis)); ?></td>
	</tr>
</table>
<?php /**PATH D:\xampp64\www\retribusi\resources\views/pendapatan/pendapatan/pendapatandetail.blade.php ENDPATH**/ ?>