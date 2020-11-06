<?php $__env->startSection('title','Restrict Accesss'); ?> 
<?php $__env->startSection('content'); ?>  


<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold"><?php echo e($title); ?></h2>
            </div>

        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp64\www\retribusi\resources\views/restrict.blade.php ENDPATH**/ ?>