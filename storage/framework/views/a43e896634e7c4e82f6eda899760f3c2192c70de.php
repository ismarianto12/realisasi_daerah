<h3>Satuan Kerja / OPD <b>[<?php echo e($satker_kd); ?>] - <?php echo e($satkernm); ?></b></h3>
<hr />

<?php if($dataset == ''): ?>
<div class="alert alert-danger"><i class="fa fa-danger"></i> Satker ini belum ada rekening pad </div>
<img src="https://image.freepik.com/free-vector/error-404-concept-illustration_114360-1811.jpg" class="img-reponsive">

<?php else: ?>
<table class="table table-striped">
    <?php $__currentLoopData = $dataset; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rekeningdatas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <tr <?php if($rekeningdatas['bold']['val']==TRUE): ?> style="
        background: rebeccapurple;
        color: #fff;
        text-align: center;
        font-weight: bold;
    " ; <?php endif; ?>>
        <td>[<?php echo e($rekeningdatas['kd_rek']['val']); ?>] -
            <?php echo e($rekeningdatas['nm_rek']['val']); ?></td>
        <td><?php echo $rekeningdatas['lapor']['val'] ?>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php endif; ?><?php /**PATH D:\xampp64\www\retribusi\resources\views/pendapatan/pendapatan/detailpadopd.blade.php ENDPATH**/ ?>