<h2>Detail Pelaporan Satuan kerja opd</h2>

<div style="text-align: right;">
	<a href="<?php echo e(Url('pendapatan/'.$pendapatan_id.'/edit?satker_id='.$tmsikd_satker_id.'&tgl='.$tanggal_lapor)); ?>"
		class="btn btn btn-warning" target="_blank"><i class="fa fa-edit"></i>Edit data</a>
</div>
<hr />

<table class="table table-striped">
	<tr>
		<td>Satuan Kerja (OPD)</td>
		<td>[<?php echo e($opd['kode']); ?>] <b><?php echo e($opd['n_opd']); ?></b></td>
	</tr>
</table>

<hr />
<table class="table">
	<?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

	<tr>
		<td>Kode Rek</td>
		<td><?php echo e($list['kode_rek']['val']); ?></td>
	</tr>
	<tr>
		<td>Nama Rek</td>
		<td><?php echo e($list['nama_rek']['val']); ?></td>
	</tr>
	<tr>
		<td>Jumlah yang di laporkan </td>
		<td><?php echo e($list['jumlah']['val']); ?></td>
	</tr>
	<tr>
		<td>Tanggal dan waktu </td>
		<td><?php echo e($list['tanggal_lapor']['val']); ?></td>

	</tr>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
 
</table><?php /**PATH C:\wamp64\www\realisasi_daerah\resources\views/pendapatan/pendapatan/pendapatandetail.blade.php ENDPATH**/ ?>