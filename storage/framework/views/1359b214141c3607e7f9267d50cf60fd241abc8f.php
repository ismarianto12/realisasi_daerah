<title>Report Hasil Pendapatan Daerah Tangerang selatan</title>

<style>
    table {
        border-collapse: collapse;
        width: 100%;
        border : 0.1pt dashed #000;
    }

    th,
    td {
        text-align: left; 
        border : 0.1pt dashed #000;
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
    <img src="<?php echo e(asset('assets/template/img/logo_tangsel.png')); ?>" style="width: 60px;height:60px;margin-top:15px">
</div>

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
<table>
    <thead>
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
        <tr style="background: greenyellow">
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
        <?php $__currentLoopData = $render; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
        $rjenis_old = $rperiode_lalu->where(\DB::raw('substr(tmpendapatan.tmrekening_akun_kelompok_jenis_objek_rincian_id,1,3)'),$list['kd_rek_jenis'])
        ->first();
        $targetby_jenis = $listarget::select(\DB::raw('sum(jumlah) as
        tjenis'))->where(\DB::raw('substr(rekneing_rincian_akun_jenis_objek_id,1,3)'),$list['kd_rek_jenis'])->first();
        $sjenis = ($targetby_jenis['tjenis'] - $list['jml_rek_jenis']);
        ?>
        <tr>
            <td><b><?php echo e($list['kd_rek_jenis']); ?></b></td>
            <td><b><?php echo e($list['nm_rek_jenis']); ?></b></td>
            <td><b><?php echo e(number_format($targetby_jenis['tjenis'],0,0,'.')); ?></b></td>
            <td><b><?php echo e(number_format($rjenis_old['jml_rek_jenis'],0,0,'.')); ?></b></td>
            <td><b><?php echo e(number_format($list['jml_rek_jenis'],0,0,'.')); ?></b></td>
            <td></td>
            <td><?php echo e(number_format($sjenis,0,0,'.')); ?></td>
            <td></td>
        </tr>
        <?php
        $a = $tmpendapatan->report_pendapatan(['tmrekening_akun_kelompok_jenis.id' => $list->id_rek_jenis],
        'tmrekening_akun_kelompok_jenis_objeks.id')->get();
        ?>
        <?php $__currentLoopData = $a; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ls): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
        $robj_old =  $rperiode_lalu->where(\DB::raw('substr(tmpendapatan.tmrekening_akun_kelompok_jenis_objek_rincian_id,1,5)'),$list['kd_rek_obj'])
        ->first();

        $object_target = $listarget::select(\DB::raw('sum(jumlah) as
        tjenis_objek'))->where(\DB::raw('substr(rekneing_rincian_akun_jenis_objek_id,1,3)'),$ls['kd_rek_obj'])->first();
        $sobj = ($object_target['tjenis_objek'] - $ls['jml_rek_obj']);
        ?>
        <tr>
            <td><b><?php echo e($ls['kd_rek_obj']); ?></b></td>
            <td><b><?php echo e($ls['nm_rek_obj']); ?></b></td>
            <td><?php echo e(number_format($object_target['tjenis_objek'],0,0,'.')); ?></td>
            <td><b><?php echo e(number_format($robj_old['jml_rek_obj'])); ?></b></td>
            <td><b><?php echo e(number_format($ls['jml_rek_obj'],0,0,'.')); ?></b></td>
            <td></td>
            <td><?php echo e(number_format($sobj,0,0,'.')); ?></td>
            <td></td>
        </tr>
        <?php
        $b = $tmpendapatan->report_pendapatan(['tmrekening_akun_kelompok_jenis_objeks.id' => $ls->id_rek_obj],
        'tmrekening_akun_kelompok_jenis_objek_rincians.id')->get();

        ?>
        <?php $__currentLoopData = $b; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php

        $rincian_target = $listarget::where('rekneing_rincian_akun_jenis_objek_id',$item['kd_rek_rincian_obj'])->first();
        $rtarget = ($rincian_target['jumlah']) ? number_format($rincian_target['jumlah'],0,0,'.') : '0';
        $srinci = ($rincian_target['jumlah'] - $list['jml_rek_rincian']);
        $rrinci_old =  $rperiode_lalu->where(\DB::raw('tmpendapatan.tmrekening_akun_kelompok_jenis_objek_rincian_id'),$item['kd_rek_rincian_obj'])
        ->first();
       
        ?>
        <tr>
            <td><?php echo e($item['id_rek_rincians']); ?></td>
            <td><?php echo e($item['nm_rek_rincian_obj']); ?></td>
            <td><?php echo e($rtarget); ?></td>
            <td><b><?php echo e(number_format($rrinci_old['jml_rek_rincian'],0,0,'.')); ?></b></td>
            <td><b><?php echo e(number_format($item['jml_rek_rincian'],0,0,'.')); ?></b></td>
            <td></td>
            <td><?php echo e(number_format($srinci,0,0,'.')); ?></td>
            <td></td>
        </tr>

        <?php
        $c = $tmpendapatan->report_pendapatan(['tmrekening_akun_kelompok_jenis_objek_rincians.id' =>
        $ls->id_rek_rincians], 'rek_rincian_sub_id')->get();
        $srinci_sub = ($rincian_target['jumlah'] - $list['jml_rek_rincian_sub']);
        ?>
        <?php if($c->count() == 0 || $c == NULL): ?>
        <?php else: ?>
        <?php $__currentLoopData = $c; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php
          $rrinci_sub_old =  $rperiode_lalu->where(\DB::raw('tmpendapatan.tmrekening_akun_kelompok_jenis_objek_rincian_sub_id'),$item['rek_rincian_sub_id'])
          ->first();
   
          ?>  
        <tr>
            <td><?php echo e($r['rek_rincian_sub_id']); ?></td>
            <td><?php echo e($r['nm_rek_rincian_objek_sub']); ?></td>
            <td></td>
            <td>
                <?php if($rrinci_sub_old['jml_rek_rincian_sub'] == 0): ?>
                <?php else: ?>
                <?php echo e(number_format($rrinci_sub_old['jml_rek_rincian_sub'],0,0,'.')); ?>

                <?php endif; ?>
            <td>
            <td>
                <?php if($r['jml_rek_rincian_sub'] == 0): ?>
                <?php else: ?>
                <?php echo e(number_format($r['jml_rek_rincian_sub'],0,0,'.')); ?>

                <?php endif; ?>
            <td>

            </td>
            <td><?php if($srinci_sub == 0): ?>
                <?php else: ?>
                <?php endif; ?>
            </td>
            <td></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </tbody>
</table><?php /**PATH D:\xampp64\www\retribusi\resources\views/laporan_pendapatan/jenis_object.blade.php ENDPATH**/ ?>