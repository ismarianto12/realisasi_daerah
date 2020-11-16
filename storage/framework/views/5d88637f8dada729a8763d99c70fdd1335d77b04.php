<!DOCTYPE html>
<html>

<head>
    <title>Rekap Pelaporan Pendapatan Daerah Tangerang Selatan Tahun anggaran <?php echo e($tahun); ?></title>
</head>

<body>
    <style>
        table {
            border-collapse collapse;
            width 100%;
            border 0.1pt dashed #000;
        }

        th,
        td {
            text-align left;
            border 0.1pt dashed #000;
        }

        trnth-child(even) {
            background-color #f2f2f2
        }

        th {
            background-color #ddd;
            color #000;
            width auto;
            height auto;
        }
    </style>
    <div style="floatleft">
        <img src="<?php echo e(asset('assets/template/img/tangsel.png')); ?>" style="width 60%;height60%;margin-top25px">
    </div>
    <center>
        <h2>PEMERINTAH KOTA TANGERANG SELATAN</h2>
        <h3>REALISASI PENDAPATAN & RETRIBUSI DAERAH APBD <?php echo e($tahun); ?></h3>
        <h4>SAMPAI DENGAN DESEMBER <?php echo e($tahun); ?></h4>
    </center>
    <table border="1">
        <thead>
            <tr>
                <th colspan="5">URAIAN</th>
                <th>APBD <?php echo e($tahun); ?></th>
                <th>JANUARI</th>
                <th>FEBRUARI</th>
                <th>MARET</th>
                <th>APRIL</th>
                <th>MEI</th>
                <th>JUNI</th>
                <th>JULI</th>
                <th>AGUSTUS</th>
                <th>SEPTEMBER</th>
                <th>OKTOBER</th>
                <th>NOVEMBER</th>
                <th>DESEMBER</th>
            </tr>
            <tr>
                <td colspan="5"></td> 
                <td></td>               
                <?php for($a=1; $a <= 12; $a++): ?> <td>
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
                <?php for($j = 1; $j <= 12; $j++): ?>  
                  <?php echo $list['bulan_'.$j]['val'] ?> 
                <?php endfor; ?> 
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</body>

</html><?php /**PATH D:\xampp64\www\retribusi\resources\views/laporan_pendapatan/report_bulan.blade.php ENDPATH**/ ?>