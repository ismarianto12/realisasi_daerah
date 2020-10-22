<?php $__env->startSection('content'); ?>
<?php

$pagetitle = 'Tambah Pelaporan Pad';
?>

<?php $__env->startSection('title', $pagetitle); ?>

<div class="page bg-light">
    <?php echo $__env->make('layouts._includes.toolbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container-fluid my-3">
        <div id="alert"></div>
        <form class="needs-validation" id="form" method="POST" novalidate>
            <div class="page bg-light">
                <div class="container-fluid my-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group form-show-validation row">
                                <label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Tahun <span
                                        class="required-label">*</span></label>
                                <div class="col-sm-6">
                                    <select name="tahun_id" id="tahun_id" placeholder=""
                                        class="form-control select2 r-0 light" autocomplete="off"
                                        onchange="selectOnChange()">
                                        <?php $__currentLoopData = $tahuns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tahun): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($tahun->id); ?>" <?php if($tahun_active==$tahun->id): ?>
                                            selected="selected"<?php endif; ?>><?php echo e($tahun->tahun); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                </div>
                            </div>
 

                            <div class="card-body">
                                <div class="form-row form-inline">
                                    <div class="col-md-12">
                                        <table class="table table-striped">
                                                <tr>
                                                    <input type="hidden" name="tanggal_lapor" value="<?php echo e($tgl_lapor); ?>" id="tanggal_lapor">
                                                    <input type="hidden" name="tmsikd_satker_id" value="<?php echo e($fsatker_id); ?>"> 
                                                    <td>Tanggal Lapor</td><td><?php echo e(Properti_app::tgl_indo($tgl_lapor)); ?> Jam <?php echo e($jam); ?></td>
                                                </tr> 
                                            </table>  
                                            <h2>Rincian PAD <sup><a href="https://www.google.com/search?q=Pad+adalah&oq=Pad+adalah+&aqs=chrome..69i57.1951j0j1&sourceid=chrome&ie=UTF-8" title="apa itu pad" target="_blank">[?]</a></sup> yang di laporkan </h2>
                                        <table class="table table-striped">
                                            <tr>
                                                <td>Kelompok Jenis Rekening</td>
                                                <td>[<?php echo e($rekeningdatas['kd_rek_jenis']); ?>] -
                                                    <?php echo e($rekeningdatas['nm_rek_jenis']); ?></td>
                                            </tr>

                                            <tr>
                                                <td>Kelompok Rekening Jenis Object</td>
                                                <td>[<?php echo e($rekeningdatas['kd_rek_obj']); ?>] -
                                                    <?php echo e($rekeningdatas['nm_rek_obj']); ?></td>
                                            </tr>

                                            <tr>
                                                <td>Kelompok Rekening Jenis Object Rincian</td>
                                                <td>[<?php echo e($rekeningdatas['kd_rek_rincian_obj']); ?>] -
                                                    <?php echo e($rekeningdatas['nm_rek_rincian_obj']); ?></td>
                                            </tr>

                                            <tr>
                                                <td>Kelompok Rekening Jenis Object Rincian Sub</td>
                                                <td>[<?php echo e($rekeningdatas['kd_rek_rincian_objek_sub']); ?>] -
                                                    <?php echo e($rekeningdatas['kd_rek_rincian_objek_sub']); ?></td>
                                            </tr>
                                        </table>


                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="card-body">
                            <div class="alert alert-danger">Pendapatan daerah yang sudah di entrikan pertanggal
                                tidak di
                                muncul kan lagi , jika ada kesalaha pada pengentrian data sebelumnya harap harap
                                hapus
                                dan entri kembali </div>
                            <div class="entri_rek"></div>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?php $__env->startSection('script'); ?>
<script>
    $(function(){ 
       $('.entri_rek').html('<div class="alert alert-success">Sedang meload data ...</div>');  
        var rek_obj = <?php echo e($kd_rek_obj); ?>;    
        var satker_id  = <?php echo e($fsatker_id); ?>;
        var form_url = "<?php echo e(route('pendapatan.form_pendapatan',':id')); ?>".replace(':id',rek_obj);
          $.get(form_url,{satker_id : satker_id },function(data){
          $('.entri_rek').html(data); 
        }); 
          
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
   
    $('#tmrekening_akun_kelompok_jenis_objek_id').on('change', function(){
        var val_id     = $(this).val(); 
        $('#tmrekening_akun_kelompok_jenis_objek_id option[value="'+val_id+'"]').prop('selected', true);
   });  
}); 
  
  //save data if true
  function add(){
    save_method = "add";
    $('#form').trigger('reset');
    $('input[name=_method]').val('POST');
    $('#txtSave').html('');
}
add();


  function save(){ $('#form').submit(); }
  $('#form').on('submit', function (event) {
      event.preventDefault();
      var tanggal_lapor = $('#tanggal_lapor').val();
      if(tanggal_lapor == ''){
          $.alert('Tanggal Lapor Nya Jangan kosong Bosq','Perhatian : ');
      }else{ 
      if ($(this)[0].checkValidity() === false) {
           event.stopPropagation();
      }else{
          $('#alert').html('');
          $('#btnSave').attr('disabled', true);
          url = (save_method == 'add') ? "<?php echo e(route($route.'store')); ?>" : "<?php echo e(route($route.'update', ':id')); ?>".replace(':id', $('#id').val());
          $.post(url, $(this).serialize(), function(data){
              $('#alert').html("<div role='alert' class='alert alert-success alert-dismissible'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button><strong>Success!</strong> " + data.message + "</div>");
              document.location.href = "<?php echo e(url('pendapatan')); ?>?tgl_lapor=<?php echo e($tgl_lapor); ?>";
          }, "JSON").fail(function(data){
              err = ''; respon = data.responseJSON;
              $.each(respon.errors, function(index, value){
                  err += "<li>" + value +"</li>";
              });
              $('#alert').html("<div role='alert' class='alert alert-danger alert-dismissible'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button><strong>Kesalaha Sedikti Bossq : </strong> " + respon.message + "<ol class='pl-3'>" + err + "</ol></div>");
          }).always(function(){
              $('#btnSave').removeAttr('disabled');
          });
          return false;
      }
      $(this).addClass('was-validated');
    }
  });
 
  

  


</script>
<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp64\www\retribusi\resources\views/pendapatan/pendapatan/form_add.blade.php ENDPATH**/ ?>