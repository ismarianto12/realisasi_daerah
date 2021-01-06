<!DOCTYPE html>
<html>

<head>
    <title>Rekap Pelaporan Pendapatan Daerah Tangerang Selatan Tahun anggaran <?php echo e($tahun); ?></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

</head>
<style type="text/css">
    table {
        font-size: 12px;
        table-layout: auto;
        border-collapse: collapse;
        width: 100%;
    }

    td {
        border: 0.1px dotted black;
        border-collapse: collapse;
    }
</style>

<body>

    <div style="float : left">
        <img src="<?php echo e(asset('assets/template/img/tangsel.png')); ?>" style="width: 60px;height:60px;margin-top:45px">
    </div>

    <center>
        <h2>PEMERINTAH KOTA TANGERANG SELATAN</h2>
        <h3>REALISASI PENDAPATAN APBD <?php echo e($tahun); ?></h3>
        <h4>SAMPAI DENGAN DESEMBER <?php echo e($tahun); ?></h4>
    </center>

    <table style="border: 0.5px dotted #000;
                  border-collapse: collapse">
        <thead>
            <tr style="background: royalblue;color: #fff; border: 0.5px dotted #000">
                <th colspan=" 5">URAIAN</th>
                <th>APBD <?php echo e($tahun); ?></th>
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
            <?php $__currentLoopData = $getdatayears; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <?php echo $list['table']['val'] ?>
                <?php echo $list['kd_rek']['val'] ?>
                <?php echo $list['nm_rek']['val'] ?>
                <?php echo $list['juraian']['val'] ?>
                <?php for($j = 1; $j <= 12; $j++): ?> <?php echo $list['bulan_'.$j]['val'] ?> <?php endfor; ?> </tr> <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </tbody> </table> <b>Badan Pendaptan daerah tangerang selatan</b>

</body>

</html><?php /**PATH C:\wamp64\www\realisasi_daerah\resources\views/laporan_pendapatan/report_bulan.blade.php ENDPATH**/ ?>