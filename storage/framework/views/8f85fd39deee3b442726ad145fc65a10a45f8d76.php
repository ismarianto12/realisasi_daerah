<?php $__env->startSection('content'); ?>
<div class="page bg-light">
    <?php echo $__env->make('layouts._includes.toolbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container-fluid my-3">
        <div id="alert"></div>
        <form class="needs-validation" id="form" method="POST" novalidate>
            <?php echo e(method_field('PATCH')); ?>

            <div class="card">
                <div class="card-body">
                    <div class="form-row form-inline">
                        <div class="col-md-12">
                            <div class="form-group m-0">
                                <label class="col-form-label s-12 col-md-2"><strong>Kode Rek. Akun :</strong></label>
                                <label class="r-0 s-12 col-md-8 tl"><?php echo e($n_rekening_akun); ?></label>
                            </div>
                            <div class="form-group m-0">
                                <label class="col-form-label s-12 col-md-2"><strong>Kode Rek. Kelompok
                                        :</strong></label>
                                <label class="r-0 s-12 col-md-8 tl"><?php echo e($n_rekening_akun_kelompok); ?></label>
                            </div>
                            <div class="form-group m-0">
                                <label class="col-form-label s-12 col-md-2"><strong>Kode Rek. Jenis :</strong></label>
                                <label class="r-0 s-12 col-md-8 tl"><?php echo e($n_rekening_akun_kelompok_jenis); ?></label>
                            </div>
                            <div class="form-group m-0">
                                <label class="col-form-label s-12 col-md-2"><strong>Kode Rek. Obj :</strong></label>
                                <label class="r-0 s-12 col-md-8 tl"><?php echo e($n_rekening_akun_kelompok_jenis_objek); ?></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-body">
                    <input type="hidden" id="id" name="id"
                        value="<?php echo e($tmrekening_akun_kelompok_jenis_objek_rincian->id); ?>" />
                    <div class="form-row form-inline">
                        <div class="col-md-12">

                            <div class="form-group m-0">
                                <label for="kd_rek_rincian_obj" class="col-form-label s-12 col-md-2 pl-0"><strong>Kode
                                        Rek. Rincian Obj <span class="text-danger ml-1">*</span> :</strong></label>
                                <input type="text" name="kd_rek_rincian_obj" id="kd_rek_rincian_obj" placeholder=""
                                    class="form-control r-0 s-12 col-md-5"
                                    value="<?php echo e($tmrekening_akun_kelompok_jenis_objek_rincian->kd_rek_rincian_obj); ?>"
                                    autocomplete="off" required />
                            </div>
                            <div class="form-group m-0">
                                <label for="nm_rek_rincian_obj" class="col-form-label s-12 col-md-2 pl-0"><strong>Nama
                                        Rek. Rincian Obj <span class="text-danger ml-1">*</span> :</strong></label>
                                <input type="text" name="nm_rek_rincian_obj" id="nm_rek_rincian_obj" placeholder=""
                                    class="form-control r-0 s-12 col-md-5"
                                    value="<?php echo e($tmrekening_akun_kelompok_jenis_objek_rincian->nm_rek_rincian_obj); ?>"
                                    autocomplete="off" required />
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mt-2">
                <div class="card-header">
                    <h6>Keterkaitan Rekening P64</h6>
                </div>
                <div class="card-body no-b">
                    <div class="form-row form-inline">
                        <div class="col-md-12">
                            <div class="form-group m-0">
                                <label for="tmsikd_rek_rincian_obj_p64_id"
                                    class="col-form-label s-12 col-md-2"><strong>Rek. LRA P64 :</strong></label>
                                <div class="col-md-8 p-0 mb-2">
                                    <select name="tmsikd_rek_rincian_obj_p64_id" id="tmsikd_rek_rincian_obj_p64_id"
                                        placeholder="" class="form-control r-0 s-12 select2">
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="card mt-2">
                    <div class="card-header">
                        <h6>Keterkaitan Rekening SAP</h6>
                    </div>
                    <div class="card-body no-b">
                        <div class="form-row form-inline">
                            <div class="col-md-12">
                                <div class="form-group m-0">
                                    <label for="tmsikd_rekening_lra_id"
                                        class="col-form-label s-12 col-md-2"><strong>Rek. LRA :</strong></label>
                                    <div class="col-md-8 p-0 mb-2">
                                        <select name="tmsikd_rekening_lra_id" id="tmsikd_rekening_lra_id" placeholder=""
                                            class="form-control r-0 s-12 select2">
                                            <option value="">&nbsp;</option>
                                            <?php $__currentLoopData = $tmsikd_rekening_lras; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$tmsikd_rekening_lra): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($tmsikd_rekening_lra->id); ?>"
                                                <?php if($tmrekening_akun_kelompok_jenis_objek_rincian->
                                                tmsikd_rekening_lra_id == $tmsikd_rekening_lra->id): ?>
                                                selected="selected"<?php endif; ?>><?php echo e('['.$tmsikd_rekening_lra->kd_rek_lra.'] '.$tmsikd_rekening_lra->nm_rek_lra); ?>

                                            </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group m-0">
                                    <label for="tmsikd_rekening_lak_id"
                                        class="col-form-label s-12 col-md-2"><strong>Rek. LAK :</strong></label>
                                    <div class="col-md-8 p-0 mb-2">
                                        <select name="tmsikd_rekening_lak_id" id="tmsikd_rekening_lak_id" placeholder=""
                                            class="form-control r-0 s-12 select2">
                                            <option value="">&nbsp;</option>
                                            <?php $__currentLoopData = $tmsikd_rekening_laks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$tmsikd_rekening_lak): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($tmsikd_rekening_lak->id); ?>"
                                                <?php if($tmrekening_akun_kelompok_jenis_objek_rincian->
                                                tmsikd_rekening_lak_id == $tmsikd_rekening_lak->id): ?>
                                                selected="selected"<?php endif; ?>><?php echo e('['.$tmsikd_rekening_lak->kd_rek_lak.'] '.$tmsikd_rekening_lak->nm_rek_lak); ?>

                                            </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group m-0">
                                    <label for="tmsikd_rekening_neraca_id"
                                        class="col-form-label s-12 col-md-2"><strong>Rek. Neraca :</strong></label>
                                    <div class="col-md-8 p-0 mb-2">
                                        <select name="tmsikd_rekening_neraca_id" id="tmsikd_rekening_neraca_id"
                                            placeholder="" class="form-control r-0 s-12 select2">
                                            <option value="">&nbsp;</option>
                                            <?php $__currentLoopData = $tmsikd_rekening_neracas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$tmsikd_rekening_neraca_id): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($tmsikd_rekening_neraca_id->id); ?>"
                                                <?php if($tmrekening_akun_kelompok_jenis_objek_rincian->
                                                tmsikd_rekening_neraca_id == $tmsikd_rekening_neraca_id->id): ?>
                                                selected="selected"<?php endif; ?>><?php echo e('['.$tmsikd_rekening_neraca_id->kd_rek_neraca.'] '.$tmsikd_rekening_neraca_id->nm_rek_neraca); ?>

                                            </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script type="text/javascript">
    $('#txtSave').html("Perubahan");
    $('#kd_rek_akun').focus();

    function save(){ $('#form').submit(); }
    $('#form').on('submit', function (event) {
        if ($(this)[0].checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
        }else{
            $('#alert').html('');
            $('#btnSave').attr('disabled', true);

            url = "<?php echo e(route($route.'update', ':id')); ?>".replace(':id', $('#id').val());
            $.post(url, $(this).serialize(), function(data){
                $('#alert').html("<div role='alert' class='alert alert-success alert-dismissible'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button><strong>Success!</strong> " + data.message + "</div>");
            }, "JSON").fail(function(data){
                err = ''; respon = data.responseJSON;
                $.each(respon.errors, function(index, value){
                    err += "<li>" + value +"</li>";
                });
                $('#alert').html("<div role='alert' class='alert alert-danger alert-dismissible'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button><strong>Error!</strong> " + respon.message + "<ol class='pl-3 m-0'>" + err + "</ol></div>");
            }).always(function(){
                $('#btnSave').removeAttr('disabled');
            });
            return false;
        }
        $(this).addClass('was-validated');
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp64\www\retribusi\resources\views/koderincianobjek/form_edit.blade.php ENDPATH**/ ?>