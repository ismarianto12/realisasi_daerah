<?php $__env->startSection('title','Pendapatan Daerah'); ?>
<?php $__env->startSection('content'); ?>

<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold">Laporan Penerimaan</h2>
                <h5 class="text-white op-7 mb-2"> Pendapatapan Daerah </h5>
            </div>
            <div class="ml-md-auto py-2 py-md-0">
                <a href="#" class="btn btn-white btn-border btn-round mr-2">Rerport Penerimaan</a>
                <a href="#" to="#" class="tambah btn btn-secondary btn-round">Data Penerimaan </a>
            </div>
        </div>
    </div>
</div>
<div class="page bg-light">
    <div class="container-fluid my-3">
        <div class="card">
            <div class="card-body">
                <div class="form-group form-show-validation row">
                    <label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Tahun <span
                            class="required-label">*</span></label>
                    <div class="col-sm-6">
                        <select name="tahun_id" id="tahun_id" placeholder="" class="form-control select2 r-0 light"
                            autocomplete="off" onchange="selectOnChange()">
                            <?php $__currentLoopData = $tahuns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tahun): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($tahun->id); ?>"><?php echo e($tahun->tahun); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
                <div class="form-group form-show-validation row">
                    <label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Satuan Kerja
                        <span class="required-label">*</span></label>
                    <div class="col-sm-6">
                        <select name="tmsikd_satker_id" id="tmsikd_satker_id" class="form-control select2 " required
                            onchange="selectOnChange('tmsikd_satker_id')">
                            <?php
                            $level = Properti_app::getlevel();
                            ?>
                            <?php if($level == 3): ?>
                            <?php else: ?>
                            <option value="0">Semua Satuan kerja</option>
                            <?php endif; ?>

                            <?php $__currentLoopData = $tmsikd_satkers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tmsikd_satker): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($tmsikd_satker->id); ?>" <?php if($tmsikd_satker_id==$tmsikd_satker->id): ?>
                                selected="selected"<?php endif; ?>>
                                [<?php echo e($tmsikd_satker->kode); ?>] &nbsp; <?php echo e($tmsikd_satker->nama); ?>

                            </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>

                <div class="card-header">
                    <h6>List Rekening Mata Anggaran</h6>
                </div>
                <div class="card-body">
                    <div class="form-row form-inline">
                        <div class="col-md-12">
                            <div class="form-group form-show-validation row">
                                <label for="name" class="col-md-3 text-right">Periode (Tanggal) <span
                                        class="required-label">*</span></label>
                                <div class="col-sm-4">
                                    <input type="text" id="dari" class="datepicker form-control" placeholder="Dari .."
                                        value="<?php echo e($dari); ?>">
                                </div>
                                S /D
                                <div class="col-sm-4">
                                    <input type="text" class="datepicker form-control" id="sampai"
                                        placeholder="Sampai dengan" value="<?php echo e($sampai); ?>">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group m-0">
                                    <label for="tmrekening_akun_id" class="col-form-label s-12 col-md-3"><strong>Rek.
                                            Akun :</strong></label>
                                    <div class="col-md-5 p-0 mb-2">
                                        <select name="tmrekening_akun_id" class="form-control r-0 s-12 select2"
                                            id="tmrekening_akun_id">
                                            <option value="0">--Pilih Rekening Akun--</option>
                                            <?php $__currentLoopData = $tmrekening_akuns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$tmrekening_akun): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($tmrekening_akun->id); ?>">
                                                <?php echo e('['.$tmrekening_akun->kd_rek_akun.'] '.$tmrekening_akun->nm_rek_akun); ?>

                                            </option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group m-0">
                                    <label for="tmrekening_akun_kelompok_id"
                                        class="col-form-label s-12 col-md-3"><strong>Rek. Kelompok :</strong></label>
                                    <div class="col-md-5 p-0 mb-2">
                                        <select name="tmrekening_akun_kelompok_id" class="form-control r-0 s-12 select2"
                                            id="tmrekening_akun_kelompok_id">
                                            <option value="0">--Pilihan Data--</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group m-0">
                                    <label for="tmrekening_akun_kelompok_jenis_id"
                                        class="col-form-label s-12 col-md-3"><strong>Rek. Jenis</strong></label>
                                    <div class="col-md-5 p-0 mb-2">
                                        <select name="tmrekening_akun_kelompok_jenis_id"
                                            class="form-control r-0 s-12 select2"
                                            id="tmrekening_akun_kelompok_jenis_id">
                                            <option value="0">--Pilihan Data--</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group m-0">
                                    <label for="tmrekening_akun_kelompok_jenis_id"
                                        class="col-form-label s-12 col-md-3"><strong>Jenis file</strong></label>
                                    <div class="col-md-5 p-0 mb-2">
                                        <select class="form-control select2" id="type_params">
                                            <option value="0">- Pilih Jenis File -</option>
                                            <option value="pdf">PDF</option>
                                            <option value="rtf">WORD (RTF)</option>
                                            <option value="xls">XLS</option>
                                        </select>
                                    </div>
                                 </div>
                                     <hr />
                                    <button id="tampilkan" class="btn btn-primary"><i
                                            class="fa fa-search"></i>Tampilkan</button>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="btn_cetak"></div>
</div>
<?php $__env->startSection('script'); ?>
<script>
    $(function(){

        $('#tmrekening_akun_id').on('change', function(){
            val = $(this).val();
            option = "<option value='0'>--Semua Data--</option>";
            if(val == ""){
                $('#tmrekening_akun_kelompok_id').html(option);
                $('#tmrekening_akun_kelompok_jenis_id').html(option);
                $('#tmrekening_akun_kelompok_jenis_objek_id').html(option);
                selectOnChange();
            }else{
                $('#tmrekening_akun_kelompok_id').html("<option value=''>Loading...</option>");
                url = "<?php echo e(route('rekening.kodejenis.kodekelompokByKodeakun', ':id')); ?>".replace(':id', val);
                $.get(url, function(data){
                    if(data){
                        $.each(data, function(index, value){
                            option += "<option value='" + value.id + "'>[" + value.kd_rek_kelompok +"] " + value.nm_rek_kelompok +"</li>";
                        });
                        $('#tmrekening_akun_kelompok_id').empty().html(option);

                        $("#tmrekening_akun_kelompok_id").val($("#tmrekening_akun_kelompok_id option:first").val()).trigger("change.select2");
                    }else{
                        $('#tmrekening_akun_kelompok_id').html(option);
                        $('#tmrekening_akun_kelompok_jenis_id').html(option);
                        $('#tmrekening_akun_kelompok_jenis_objek_id').html(option);
                        selectOnChange();
                    }
                }, 'JSON');
            }
            $('#tmrekening_akun_kelompok_id').change();
        });

        $('#tmrekening_akun_kelompok_id').on('change', function(){
            val = $(this).val();
            option = "<option value='0'>--Semua Data--</option>";
            if(val == ""){
                $('#tmrekening_akun_kelompok_jenis_id').html(option);
                $('#tmrekening_akun_kelompok_jenis_objek_id').html(option);
                selectOnChange();
            }else{
                $('#tmrekening_akun_kelompok_jenis_id').html("<option value=''>Loading...</option>");
                url = "<?php echo e(route('rekening.kodeobjek.kodejenisByKodekelompok', ':id')); ?>".replace(':id', val);
                $.get(url, function(data){
                    if(data){
                        $.each(data, function(index, value){
                            option += "<option value='" + value.id + "'>[" + value.kd_rek_jenis +"] " + value.nm_rek_jenis +"</li>";
                        });
                        $('#tmrekening_akun_kelompok_jenis_id').empty().html(option);

                        $("#tmrekening_akun_kelompok_jenis_id").val($("#tmrekening_akun_kelompok_jenis_id option:first").val()).trigger("change.select2");
                    }else{
                        $('#tmrekening_akun_kelompok_jenis_id').html(option);
                        $('#tmrekening_akun_kelompok_jenis_objek_id').html(option);
                        selectOnChange();
                    }
                }, 'JSON');
            }
        });

        $('#tmrekening_akun_kelompok_jenis_id').on('change', function(){
            val = $(this).val();
            option = "<option value='0'>--Semua Data--</option>";
            if(val == ""){
                $('#tmrekening_akun_kelompok_jenis_objek_id').html(option);
                selectOnChange();
            }else{
                $('#tmrekening_akun_kelompok_jenis_objek_id').html("<option value=''>Loading...</option>");
                url = "<?php echo e(route('rekening.koderincianobjek.kodeobjekByKodejenis', ':id')); ?>".replace(':id', val);
                $.get(url, function(data){
                    if(data){
                        $.each(data, function(index, value){
                            option += "<option value='" + value.id + "'>[" + value.kd_rek_obj +"] " + value.nm_rek_obj +"</li>";
                        });
                        $('#tmrekening_akun_kelompok_jenis_objek_id').empty().html(option);

                        $("#tmrekening_akun_kelompok_jenis_objek_id").val($("#tmrekening_akun_kelompok_jenis_objek_id option:first").val()).trigger("change.select2");
                    }else{
                        $('#tmrekening_akun_kelompok_jenis_objek_id').html(option);
                        selectOnChange();
                    }
                }, 'JSON');
            }
        });

        $('#tampilkan').click(function(e){
         e.preventDefault(); 
         var tahun_id  = $('#tahun_id').val();
         var tmsikd_satker_id  = $('#tmsikd_satker_id').val();
         var dari  = $('#dari').val();
         var sampai  = $('#sampai').val();
         var rekjenis_id  = $('#tmrekening_akun_kelompok_jenis_id').val();

         if(tahun_id == ''){ 
            $.alert('tahun anggaran boleh kosong');
        }
        if(tmsikd_satker_id == ''){
            $.alert('Satuan kerja tidak boleh kosong');
        }else if(dari == ''){
            $.alert('tanggal awal tidak boleh kosong');
        }else if(sampai == ''){
            $.alert('tanggal akhir tidak boleh kosong');
        }else{ 
         var jenis = $('#type_params').val();
         if(jenis == '' || jenis == 0){
            $.alert('Pilih jenis File ');
        }else{ 
            if(jenis == 'pdf'){
                window.open("<?php echo e(route('laporan.action_all')); ?>?tahun_id="+tahun_id+"&tmsikd_satker_id="+tmsikd_satker_id+"&dari="+dari+"&sampai="+sampai+"&rekjenis_id="+rekjenis_id+'&jenis='+jenis,'_blank');
            }else{ 
               window.location.href= "<?php echo e(route('laporan.action_all')); ?>?tahun_id="+tahun_id+"&tmsikd_satker_id="+tmsikd_satker_id+"&dari="+dari+"&sampai="+sampai+"&rekjenis_id="+rekjenis_id+'&jenis='+jenis;
           } 
       } 
   }
}) 

    });
function selectOnChange()
{

}

</script>

<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp64\www\retribusi\resources\views/laporan_pendapatan//report_peropd.blade.php ENDPATH**/ ?>