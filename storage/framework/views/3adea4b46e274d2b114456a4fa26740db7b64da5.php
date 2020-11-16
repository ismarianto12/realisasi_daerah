<table class="table table-striped mb-0 mt-2">
    <thead>
        <tr>
            <th width="5%" class="p-2">&nbsp;</th>
            <th width="10%">Kode Rekening</th>
            <th width="30%">Uraian</th>
            <th width="7%">Volume Transaksi</th>
            <th width="7%">Satuan</th>
            <th width="15%">Jumlah Transaksi</th>
        </tr>
    </thead>
    <tbody>
        <?php if($fdataset == 0): ?>
        <tr>
            <td colspan="6">
                <div class="alert alert-danger">
                    <h3>Data rincian object kosong (dinas opd pada rincian object ini belum di tambahkan).</h3>
                </div>
            </td>
        </tr>
        <?php else: ?>
        <?php $idx= 0;
        $ttlMak = count($fdataset);
        ?>;
        <?php $__currentLoopData = $fdataset; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
        $style = $list['style']['val'];
        ?>
        <tr>
            <td style="<?php echo e($style); ?>" align="center">
                <input name="cboxInput[]" id="cboxInput_<?php echo e($idx); ?>" type="checkbox" style="margin-right:0px !important"
                    value="<?php echo e($idx); ?>">
            </td>
            <td style="<?php echo e($style); ?>">
                <?php echo e($list['kd_rek']['val']); ?>

            </td>
            </td>
            <td style="<?php echo e($style); ?>"><?php echo e($list['nm_rek']['val']); ?></td>
            <td style="<?php echo e($style); ?>">
                <input name="volume[<?php echo e($idx); ?>]" id="volume_<?php echo e($idx); ?>" type="text" style="text-align:right"
                    class="form-control auto" autocomplete="off"
                    onblur="isFloat(this, 'Volume'); cboxChecked(this); calcJumlahMak(this); sumTotalMak(<?php echo e($ttlMak); ?>); "
                    value="<?php echo e($list['rvolume']['val']); ?>">
            </td>
            <td style="<?php echo e($style); ?>">
                <input name="satuan[<?php echo e($idx); ?>]" id="satuan_<?php echo e($idx); ?>" type="text" class="form-control"
                    autocomplete="off" maxlength="20" onblur="cboxChecked(this); "
                    value="<?php echo e($list['rsatuan']['val']); ?>">
            </td>
            <td style="<?php echo e($style); ?>">
                <input name="jumlah[<?php echo e($idx); ?>]" id="jumlah_<?php echo e($idx); ?>" type="number" style="text-align:right"
                    class="form-control number" autocomplete="off" onblur="isFloat(this, 'Jumlah');" title=""
                    value="<?php echo e($list['jumlah']['val']); ?>">
            </td>
        </tr>
        <input name="cboxInputVal[<?php echo e($idx); ?>]" id="cboxInputVal_<?php echo e($idx); ?>" type="hidden"
            value="<?php echo e($list['kd_rek_rincian_obj']['val']); ?>" />

        <input name="kd_rincian_sub[<?php echo e($idx); ?>]" type="hidden" value="<?php echo e($list['kd_rincian_sub']['val']); ?>" />


        <input name="cboxInputRinci[<?php echo e($idx); ?>]" id="cboxInputRinci<?php echo e($idx); ?>" type="hidden"
            value="<?php echo e($list['kd_rek_rincian_obj']['val']); ?>" />
        <?php $idx++ ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </tbody>
</table>
<script src="<?php echo e(asset('assets/template/js/autoNumeric.js')); ?>"></script>


<script type="text/javascript">
    $('.auto').autoNumeric('init');
    function cboxChecked(fld) {
        var arr = fld.id.split('_');
        var idx = arr[(arr.length-1)];
        var vol = $('#volume_'+idx).val();
        var satuan = $('#satuan_'+idx).val();
        var harga = $('#harga_'+idx).val();
        if (vol != '' || satuan != '' || harga != '') {
            document.getElementById('cboxInput_'+idx).checked = true;
        } else {
            document.getElementById('cboxInput_'+idx).checked = false;
        }
    }
      
</script><?php /**PATH D:\xampp64\www\retribusi\resources\views/pendapatan/pendapatan/form_pendapatan_edit.blade.php ENDPATH**/ ?>