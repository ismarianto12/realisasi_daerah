<?php $__env->startSection('content'); ?>
<div class="page bg-light">
    <?php echo $__env->make('layouts._includes.toolbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <small><i>Jika ada perubahan silahkan edit dengan mengklik tombol edit di atas : )</i></small>
    <div class="container-fluid my-3">
        <div id="alert"></div>
        <div class="card">
            <div class="card-body">
                <div class="form-row form-inline">
                    <div class="col-md-12">
                        <div class="form-group m-0">
                            <label class="col-form-label col-md-2"><strong>Rek. Akun :</strong></label>
                            <label class="col-md-8"><?php echo e('[ '.$tmrekening_akun_kelompok_jenis_objek_rincian->tmrekening_akun_kelompok_jenis_objek->tmrekening_akun_kelompok_jenis->tmrekening_akun_kelompok->tmrekening_akun->kd_rek_akun.' ] '.$tmrekening_akun_kelompok_jenis_objek_rincian->tmrekening_akun_kelompok_jenis_objek->tmrekening_akun_kelompok_jenis->tmrekening_akun_kelompok->nm_rek_kelompok); ?></label>
                        </div>
                        <div class="form-group m-0">
                            <label class="col-form-label col-md-2"><strong>Rek. Kelompok :</strong></label>
                            <label class="col-md-8"><?php echo e('[ '.$tmrekening_akun_kelompok_jenis_objek_rincian->tmrekening_akun_kelompok_jenis_objek->tmrekening_akun_kelompok_jenis->tmrekening_akun_kelompok->kd_rek_kelompok.' ] '.$tmrekening_akun_kelompok_jenis_objek_rincian->tmrekening_akun_kelompok_jenis_objek->tmrekening_akun_kelompok_jenis->tmrekening_akun_kelompok->nm_rek_kelompok); ?></label>
                        </div>
                        <div class="form-group m-0">
                            <label class="col-form-label col-md-2"><strong>Rek. Jenis :</strong></label>
                            <label class="col-md-8"><?php echo e('[ '.$tmrekening_akun_kelompok_jenis_objek_rincian->tmrekening_akun_kelompok_jenis_objek->tmrekening_akun_kelompok_jenis->kd_rek_jenis.' ] '.$tmrekening_akun_kelompok_jenis_objek_rincian->tmrekening_akun_kelompok_jenis_objek->tmrekening_akun_kelompok_jenis->nm_rek_jenis); ?></label>
                        </div>
                        <div class="form-group m-0">
                            <label class="col-form-label col-md-2"><strong>Rek. Obj :</strong></label>
                            <label class="col-md-8"><?php echo e('[ '.$tmrekening_akun_kelompok_jenis_objek_rincian->tmrekening_akun_kelompok_jenis_objek->kd_rek_obj.' ] '.$tmrekening_akun_kelompok_jenis_objek_rincian->tmrekening_akun_kelompok_jenis_objek->nm_rek_obj); ?></label>
                        </div>
                        <div class="form-group m-0">
                            <label class="col-form-label col-md-2"><strong>Kode Rek. Rincian Obj :</strong></label>
                            <label class="col-md-8"><?php echo e($tmrekening_akun_kelompok_jenis_objek_rincian->kd_rek_rincian_obj); ?></label>
                        </div>
                        <div class="form-group m-0">
                            <label class="col-form-label col-md-2 pl-0"><strong>Nama Rek. Rincian Obj :</strong></label>
                            <label class="col-md-8"><?php echo e($tmrekening_akun_kelompok_jenis_objek_rincian->nm_rek_rincian_obj); ?></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-2">
            <div class="card-header">
                <h6>Keterkaitan Rekening P64</h6>
            </div> 
        </div>
         
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script type="text/javascript">
    function del(){
        $.post("<?php echo e(route($route.'destroy', ':id')); ?>", {'_method' : 'DELETE', 'id' : <?php echo e($id); ?> }, function(data) {
            document.location.href = "<?php echo e(route($route.'index')); ?>";
        }, "JSON").fail(function(){
            reload();
        });
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp64\www\retribusi\resources\views/koderincianobjek/show.blade.php ENDPATH**/ ?>