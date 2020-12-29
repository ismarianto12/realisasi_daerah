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
                            <div class="alert alert-danger">Pendapatan daerah yang sudah di entrikan pertanggal
                                tidak di
                                muncul kan lagi , jika ada kesalaha pada pengentrian data sebelumnya harap harap
                                hapus
                                dan entri kembali </div>
                            <div class="entri_rek"></div>
                        </div>

                        <div class="card-body">

                            <div class="card-body">
                                <div class="form-row form-inline">
                                    <div class="col-md-12">
                                        <table class="table table-striped">
                                            <tr>
                                                <input type="hidden" name="tahun_id" value="<?php echo e($tahun_ang); ?>">
                                                <input type="hidden" name="tanggal_lapor" value="<?php echo e($tgl_lapor); ?>"
                                                    id="tanggal_lapor">
                                                <input type="hidden" name="tmsikd_satker_id" value="<?php echo e($fsatker_id); ?>">
                                                <td>Tahun Anggaran</td>
                                                <td><?php echo e($tahun_ang); ?></td>
                                                <td>Tanggal Lapor</td>
                                                <td><?php echo e(Properti_app::tgl_indo($tgl_lapor)); ?> Jam <?php echo e($jam); ?></td>
                                            </tr>

                                            <tr>
                                                <input type="hidden" name="tanggal_lapor" value="<?php echo e($tgl_lapor); ?>"
                                                    id="tanggal_lapor">
                                                <input type="hidden" name="tmsikd_satker_id" value="<?php echo e($fsatker_id); ?>">
                                                <td>Tanggal Lapor</td>
                                                <td><?php echo e(Properti_app::tgl_indo($tgl_lapor)); ?> Jam <?php echo e($jam); ?></td>
                                            </tr>
                                        </table>
                                        <h2>Rincian PAD <sup><a href="#"
                                                    to="https://www.google.com/search?q=Pad+adalah&oq=Pad+adalah+&aqs=chrome..69i57.1951j0j1&sourceid=chrome&ie=UTF-8"
                                                    title="apa itu pad" id="question_ans">[?]</a></sup> yang di laporkan
                                        </h2>

                                        <table class="table striped">
                                            <?php $__currentLoopData = $rekenings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($item['keterangan']['val']); ?></td>
                                                <td>[<?php echo e($item['kode_rek']['val']); ?>] - <?php echo e($item['nm_rekening']['val']); ?>

                                                </td>
                                            </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </table>

                                    </div>
                                </div>
                            </div>
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
          $('#alert').html('<div class="alert alert-info"><i class="fa fa-info"></i>Harap bersabar Sedang Mengirim Ke server ......</div>');
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
 //to show dialog add question data 
 $(function(){
    $('#question_ans').click(function(){
        var content = $(this).attr('to');
        $('#content_qa').load(content);
        $('#modalgoogle').modal('show');
         
    });
 });
   

</script>  

<div class="modal fade" id="modalgoogle" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="width: auto;">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="content_qa"></div>
            </div>
        </div>
    </div>
</div>




<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\realisasi_daerah\resources\views/pendapatan/pendapatan/form_add.blade.php ENDPATH**/ ?>