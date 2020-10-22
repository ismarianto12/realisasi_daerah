<title>Report Hasil Pendapatan Daerah Tangerang selatan</title>

<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th,
    td {
        text-align: left;
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

<table>
    <thead>
        <tr>
            <th></th>
            <th>
                <center>
                    <h2> PEMERINTAH KOTA TANGERANG SELATAN </h2>
                    <h3>LAPORAN REALISASI ANGGARAN PENDAPATAN DAN BELANJA PEMDA </h3>
                    <h4> PER REKENING JENIS</h4>
                    TAHUN ANGGARAN <?php echo e($tahun); ?>

                    <b>[<?php echo e($opd['kode']); ?>] - [<?php echo e($opd['nama']); ?>]</b>
                    <br />
                    PERIODE : <?php echo e($dari); ?> S/D <?php echo e($sampai); ?>

                    <br />
                </center>
                <br />
                <br />
            </th>
        </tr>

        <tr style="border-bottom: 0.1px solid #000">
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
            <td>1</td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
            <td>5</td>
            <td>6</td>
            <td>7</td>
            <td>8</td>
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
</table><?php /**PATH D:\xampp64\www\retribusi\resources\views/laporan_pendapatan/jenis_object_excel.blade.php ENDPATH**/ ?>