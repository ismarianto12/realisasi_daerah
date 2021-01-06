<?php $__env->startSection('title','Pendapatan Daerah'); ?>
<?php $__env->startSection('content'); ?>

<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold">Laporan Keseluruhan PAD</h2>
                <h5 class="text-white op-7 mb-2"> Report PAD </h5>
            </div>
            <div class="ml-md-auto py-2 py-md-0">
                <a href="#" class="btn btn-white btn-border btn-round mr-2">Report Penerimaan</a>
                <a href="#" to="#" class="tambah btn btn-secondary btn-round">Data Penerimaan </a>
            </div>
        </div>
    </div>
</div>
<div class="page bg-light">
    <div class="container-fluid my-3">
        <div class="card">
            <div class="card-body" style="overflow:auto">
              <div class="form-group form-show-validation row">
                 <input type="hidden" name="tahun_id" id="tahun_id" value="<?php echo e(Properti_app::tahun_sekarang()); ?>">
                 <label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Tahun <span
                            class="required-label">*</span></label>
                    <div class="col-sm-6">
                          <b> <?php echo e(Properti_app::tahun_sekarang()); ?> </b>
                    </div>
                </div>
            </div>
           <div class="card-body" style="overflow:auto">
            <table class="table table-striped" id="tableReport" style="border: 0.5px dotted #000;
                  border-collapse: collapse">
        <thead>
            <tr style="background: royalblue;color: #fff; border: 0.5px dotted #000">
                <th colspan=" 5">URAIAN</th>
                <th>APBD </th>
                <th>JAN</th>
                <th>FEB</th>
                <th>MAR</th>
                <th>APR</th>
                <th>MEI</th>
                <th>JUN</th>
                <th>JUL</th>
                <th>AGUS</th>
                <th>SEPT</th>
                <th>OKT</th>
                <th>NOV</th>
                <th>DES</th>
            </tr>
            <tr style="background: royalblue;color: #fff; border: 0.5px dotted #000">
                <td colspan="5"></td>
                <td></td>
                <?php for($a=1; $a <= 12; $a++): ?> <td style="text-align:center">
                    <?php echo e($a); ?>

                    </td>
                    <?php endfor; ?>
            </tr>
        </thead>
        <tbody>
        </tbody>
         </table>
         </div> 
        </div>
    </div> 
</div>
<?php $__env->startSection('script'); ?>
<script type="text/javascript" src="<?php echo e(asset('assets/template/js/plugin/datatables/datatables.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/template/js/plugin/datatables/dataTables.rowGroup.min.js')); ?>">
</script>

<script type="text/javascript"
    src="<?php echo e(asset('assets/template/js/plugin/datatables/button/dataTables.buttons.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/template/js/plugin/datatables/button/jszip.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/template/js/plugin/datatables/button/pdfmake.min.js')); ?>">
</script>
<script type="text/javascript" src="<?php echo e(asset('assets/template/js/plugin/datatables/button/vfs_fonts.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/template/js/plugin/datatables/button/buttons.html5.min.js')); ?>">
</script>
<script>
     $(document).ready(function() {
         
         var dataTable = $('#tableReport').DataTable({
            oLanguage: {sProcessing: "<b>Sedang Meload Data Harap Bersabar ...</b>"},
            dom: 'Bfrtip',
        buttons: [
        {extend:'copyHtml5', className: 'btn btn-info'},
        {
        className: 'btn btn-success',
          text: 'Cetak Excel <i class="fa fa-print"></i>',
          action: function ( e, dt, button, config ) {
          window.open('<?php echo e(route('laporan.action_bulan')); ?>?tahun_id=1jenis=xls','_blank');
      }
    },
        {
        className: 'btn btn-warning',
          text: 'Cetak PDF <i class="fa fa-print"></i>',
          action: function ( e, dt, button, config ) {
          window.open('<?php echo e(route('laporan.action_bulan')); ?>?tahun_id=1jenis=pdf','_blank');
      } 
     },
         ],
             "processing": true,
             "pageLength": 500,
             "serverSide": true, 
             "bPaginate": false,
             "ajax": {
                 url: "<?php echo e(route('laporan.api_report')); ?>",
                 type: "GET",
                 data: function(data) {
                     searchby = $('#searchby').val();
                     data.searchby = searchby;
                 },
                 error: function() {
                     $(".dataku-error").html("");
                     $("#tableReport").append('<tbody class="dataku-error"><tr><th colspan="19">Tidak ada data untuk ditampilkan</th></tr></tbody>');
                     $("#dataku-error-proses").css("display", "none");
                 }
             }
         });
        });
</script>

<?php $__env->stopSection(); ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\realisasi_daerah\resources\views/laporan_pendapatan//index_perbulan.blade.php ENDPATH**/ ?>