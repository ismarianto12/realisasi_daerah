<?php if(request()->get('print') == 'y'): ?>

    <style type="tex/css">
        body {
  background: rgb(204,204,204); 
}
page[size="A4"] {
  background: white;
  width: 21cm;
  height: 29.7cm;
  display: block;
  margin: 0 auto;
  margin-bottom: 0.5cm;
  box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
}
@media  print {
  body, page[size="A4"] {
    margin: 0;
    box-shadow: 0;
  }
}
   </style>

    <script>
        window.print()

    </script>
<?php endif; ?>
<html>

<head>

    <title></title>

</head>

<body>
    <page size="A4">
        <link rel="stylesheet" href="<?php echo e(asset('/assets/template/')); ?>/css/bootstrap.min.css">
        <center>
            <h3>Satuan Kerja / OPD <b>[<?php echo e($satker_kd); ?>] - <?php echo e($satkernm); ?></b></h3>
            <hr />
            Pertanggal <?php echo e(Properti_app::tgl_indo($sekarang)); ?>

            <hr />
        </center>
        <div class="alert alert-success">
            <tt class="modal-title" id="exampleModalLongTitle"><i class="fa fa-check"></i>Riwayat Pad yang
                di
                laporkan pada tanggal <?php echo e(Properti_app::tgl_indo($sekarang)); ?>

            </tt>
        </div>
        <?php if($dataset == ''): ?>
            <div class="alert alert-danger"><i class="fa fa-danger"></i> Satker ini belum ada rekening pad </div>
            <img src="https://image.freepik.com/free-vector/error-404-concept-illustration_114360-1811.jpg"
                class="img-reponsive">

        <?php else: ?>
            <?php
            $getid = request()->segments(3);
            ?>

            <a href="<?php echo e(Url('pendapatan/dapatkanpadopd/' . $getid[2])); ?>?print=y" class="btn btn-primary btn-xs"
                target="_blank"><i class="fa fa-print"></i>Print
                Data</a>
            <hr />

            <table class="table table-striped">
                <?php $__currentLoopData = $dataset; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rekeningdatas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr <?php if($rekeningdatas['bold']['val'] == true): ?> style="
        text-align: center;
        font-weight: bold;
" ; <?php else: ?> <?php endif; ?>>
                        <td>[<?php echo e($rekeningdatas['kd_rek']['val']); ?>] -
                            <?php echo e($rekeningdatas['nm_rek']['val']); ?>

                        </td>
                        <td><?php
                            if($rekeningdatas['lapor']['val'] ==''){
                            echo 'Status Lapor OPD';
                            }else{
                            echo $rekeningdatas['lapor']['val'];
                            }
                            ?>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
    </page>
    <?php endif; ?>
</body>

</html>
<?php /**PATH C:\wamp64\www\realisasi_daerah\resources\views/pendapatan/pendapatan/detailpadopd.blade.php ENDPATH**/ ?>