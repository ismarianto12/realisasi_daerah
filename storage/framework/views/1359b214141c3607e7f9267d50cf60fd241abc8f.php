<title>Report Hasil Pendapatan Daerah Tangerang selatan</title>

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
        font-size: 12px;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2
    }

    th {
        background-color: #fff;
        color: #000;
        width: auto;
        height: auto;
        font-size: 12.5px;
        padding: 10px 10px 10px;
    }
</style>


<div style="float:left">
    <img src="<?php echo e(asset('assets/template/img/tangsel.png')); ?>" style="width: 60px;height:60px;margin-top:25px">
</div>

<center>
    <h2> PEMERINTAH KOTA TANGERANG SELATAN </h2>
    <h3>LAPORAN REALISASI ANGGARAN PENDAPATAN DAN BELANJA PEMDA </h3>
    <h4> PER REKENING JENIS</h4>
    TAHUN ANGGARAN <?php echo e($tahun); ?>

    [<?php echo e($opd['kode']); ?>] - [<?php echo e($opd['nama']); ?>]
    <br />
    PERIODE : <?php echo e($dari); ?> S/D <?php echo e($sampai); ?>

    <br />
</center>
<br />
<br />
<table>
    <thead>
        <tr style="border-bottom: 0.1px solid #ddd">
            <th>No</th>
            <th>Uraian</th>
            <th>Pagu Anggaran</th>
            <th colspan="3">Jumlah Realisasi (Rp.)</th>
            <th colspan="2">Lebih Kurang<br /></th>
        </tr>
        <tr>
            <th></th>
            <th></th>
            <th></th>
            <th>S/D Periode Lalu</th>
            <th>Periode Ini</th>
            <th>Total</th>
            <th>(Rp.)</th>
            <th>%</th>
        </tr>
        <tr>
            <th>1</th>
            <th>2</th>
            <th>3</th>
            <th>4</th>
            <th>5</th>
            <th>6</th>
            <th>7</th>
            <th>8</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $idx = 0; count($render);
        ?>
        <?php $__currentLoopData = $render; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td <?php if($list['bold']['val']==TRUE): ?> style="font-weight:bold" <?php endif; ?>><?php echo e($list['kd_rek']['val']); ?></td>
            <td <?php if($list['bold']['val']==TRUE): ?> style="font-weight:bold" <?php endif; ?>><?php echo e($list['nm_rek']['val']); ?></td>
            <td><?php echo e($list['pagu']['val']); ?></td>
            <td><?php echo e($list['periode_lalu']['val']); ?></td>
            <td><?php echo e($list['periode_ini']['val']); ?></td>
            <td><?php echo e($list['total']['val']); ?></td>
            <td><?php echo e($list['divide']['val']); ?></td>
            <td><?php echo e($list['persen']['val']); ?></td>
        </tr>
        <?php $idx++ ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </tbody>
</table><?php /**PATH D:\xampp64\www\retribusi\resources\views/laporan_pendapatan/jenis_object.blade.php ENDPATH**/ ?>