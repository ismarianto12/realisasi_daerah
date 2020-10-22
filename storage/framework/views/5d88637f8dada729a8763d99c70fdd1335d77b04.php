<!DOCTYPE html>
<html>

<head>
    <title>Rekap Pelaporan Pendapatan Daerah Tangerang Selatan Tahun anggaran <?php echo e($tahun); ?></title>
</head>

<body>

    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            border: 0.1pt dashed #000;
        }

        th,
        td {
            text-align: left;
            border: 0.1pt dashed #000;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2
        }

        th {
            background-color: #ddd;
            color: #000;
            width: auto;
            height: auto;
        }
    </style> 
    <div style="float:left">
        <img src="<?php echo e(asset('assets/template/img/tangsel.png')); ?>" style="width: 60px;height:60px;margin-top:25px">
    </div>
    <center>
        <h2>PEMERINTAH KOTA TANGERANG SELATAN</h2>
        <h3>REALISASI PENDAPATAN & RETRIBUSI DAERAH APBD <?php echo e($tahun); ?></h3>
        <h4>SAMPAI DENGAN DESEMBER <?php echo e($tahun); ?></h4>
    </center>
    <table>
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
                <td colspan="2"></td>
                <td colspan="3"></td>
                <td></td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>4</td>
                <td>5</td>
                <td>6</td>
                <td>7</td>
                <td>8</td>
                <td>9</td>
                <td>10</td>
                <td>11</td>
                <td>12</td>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $akun_kelompok; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kelompok): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
            $total_pad = $tmpendapatan::tbykelompok($kelompok['kd_rek_kelompok'])->first();
            ?>
            <tr style="
            background: #4e72d5;
            color: #fff;">
                <td colspan="2"><b><?php echo e($kelompok['kd_rek_kelompok']); ?></b></td>
                <td colspan="3"><b><?php echo e($kelompok['nm_rek_kelompok']); ?></b></td>
                <td><?php echo e(number_format($total_pad['total_pad'],0,0,'.')); ?></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <?php
            //table tmrekening_akun_kelompok_jenis
            $qkjenis = $kelompok_jenis::where('tmrekening_akun_kelompok_id',$kelompok['id'])->get();
            ?>
            <?php $__currentLoopData = $qkjenis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kjenis): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
            $where = [
            'tmrekening_akun_kelompok_jenis_objeks.tmrekening_akun_kelompok_jenis_id'=>$kjenis['kd_rek_jenis'],
            'tmpendapatan.tahun'=>$tahun
            ];
            $rjenis = $tmpendapatan::tbykelompok_jenis($where)->first();
            $jml_rek_jenis = ($rjenis['jumlah_obj']) ? $rjenis['jumlah_obj'] : 0;
            ?>
            <tr>
                <td colspan="2"><b><?php echo e($kjenis['kd_rek_jenis']); ?></b></td>
                <td colspan="3"><b><?php echo e($kjenis['nm_rek_jenis']); ?></b></td>
                <td><?php echo e(number_format($jml_rek_jenis,0,0,'.')); ?></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <?php
            $qkjenis_obj = $kelompok_object::where('tmrekening_akun_kelompok_jenis_id',$kjenis['kd_rek_jenis'])->get();
            ?>
            <?php $__currentLoopData = $qkjenis_obj; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rjenis_obj): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php
            $kd_rek_obj = $rjenis_obj['kd_rek_obj'];
            ?>
            <tr>
                <td></td>
                <td></td>
                <td colspan="1"><?php echo e($rjenis_obj['kd_rek_obj']); ?></td>
                <td colspan="1"><?php echo e($rjenis_obj['nm_rek_obj']); ?></td>
                <td></td>
                <td></td>
                <td><b><?php echo e($tmpendapatan::tbykelompok_object($kd_rek_obj,1)); ?></b></td>
                <td><b><?php echo e($tmpendapatan::tbykelompok_object($kd_rek_obj,2)); ?></b></td>
                <td><b><?php echo e($tmpendapatan::tbykelompok_object($kd_rek_obj,3)); ?></b></td>
                <td><b><?php echo e($tmpendapatan::tbykelompok_object($kd_rek_obj,4)); ?></b></td>
                <td><b><?php echo e($tmpendapatan::tbykelompok_object($kd_rek_obj,5)); ?></b></td>
                <td><b><?php echo e($tmpendapatan::tbykelompok_object($kd_rek_obj,6)); ?></b></td>
                <td><b><?php echo e($tmpendapatan::tbykelompok_object($kd_rek_obj,7)); ?></b></td>
                <td><b><?php echo e($tmpendapatan::tbykelompok_object($kd_rek_obj,8)); ?></b></td>
                <td><b><?php echo e($tmpendapatan::tbykelompok_object($kd_rek_obj,9)); ?></b></td>
                <td><b><?php echo e($tmpendapatan::tbykelompok_object($kd_rek_obj,10)); ?></b></td>
                <td><b><?php echo e($tmpendapatan::tbykelompok_object($kd_rek_obj,11)); ?></b></td>
                <td><b><?php echo e($tmpendapatan::tbykelompok_object($kd_rek_obj,12)); ?></b></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>
    </table>
</body>

</html><?php /**PATH D:\xampp64\www\retribusi\resources\views/laporan_pendapatan/report_bulan.blade.php ENDPATH**/ ?>