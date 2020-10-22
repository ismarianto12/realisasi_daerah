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
        <?php if(count($rekrincian) == 0): ?>
        <tr>
            <td colspan="6">
                <div class="alert alert-danger">
                    <h3>Data rincian object kosong (dinas opd pada rincian object ini belum di tambahkan).</h3>
                </div>
            </td>
        </tr>
        <?php else: ?>

        <?php $idx = 0; $ttlMak = count($rekrincian); ?>
        <?php $__currentLoopData = $rekrincian; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rinci): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
        $pendapatan =
        $tmpendapatan::where('tmrekening_akun_kelompok_jenis_objek_rincian_id',$rinci['kd_rek_rincian_obj'])->first();
        $style = '';
        ?>
        <tr>
            <td style="<?php echo e($style); ?>" align="center">
                <input name="cboxInput[]" id="cboxInput_<?php echo e($idx); ?>" type="checkbox" style="margin-right:0px !important"
                    value="<?php echo e($idx); ?>">
            </td>
            <td style="<?php echo e($style); ?>">
                <?php echo e($rinci['kd_rek_rincian_obj']); ?>

            </td>
            </td>
            <td style="<?php echo e($style); ?>"><?php echo e($rinci['nm_rek_rincian_obj']); ?></td>
            <td style="<?php echo e($style); ?>">
                <input name="volume[<?php echo e($idx); ?>]" id="volume_<?php echo e($idx); ?>" type="text" style="text-align:right"
                    class="form-control auto" autocomplete="off"
                    onblur="isFloat(this, 'Volume'); cboxChecked(this); calcJumlahMak(this); sumTotalMak(<?php echo e($ttlMak); ?>); "
                    \="" value="">
            </td>
            <td style="<?php echo e($style); ?>">
                <input name="satuan[<?php echo e($idx); ?>]" id="satuan_<?php echo e($idx); ?>" type="text" class="form-control"
                    autocomplete="off" maxlength="20" onblur="cboxChecked(this); " \="">
            </td>

            <td style="<?php echo e($style); ?>">
                <input name="jumlah[<?php echo e($idx); ?>]" id="jumlah_<?php echo e($idx); ?>" type="number" style="text-align:right"
                    class="form-control number" autocomplete="off" onblur="isFloat(this, 'Jumlah');" title="" value="">
            </td>
        </tr>
        <input name="cboxInputVal[<?php echo e($idx); ?>]" id="cboxInputVal_<?php echo e($idx); ?>" type="hidden"
            value="<?php echo e($rinci['kd_rek_rincian_obj']); ?>" />
        <input name="cboxInputRinci[<?php echo e($idx); ?>]" id="cboxInputRinci<?php echo e($idx); ?>" type="hidden"
            value="<?php echo e($rinci['kd_rek_rincian_obj']); ?>" />
        <?php $idx++ ?>


        <?php $sub_rincis =
        $rekrincian_sub::where('tmrekening_akun_kelompok_jenis_objek_rincian_id',$rinci['kd_rek_rincian_obj'])->get();
        ?>
        <?php $__currentLoopData = $sub_rincis; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sub_rinci): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php
        $pendapatan =
        $tmpendapatan::where('tmrekening_akun_kelompok_jenis_objek_rincian_sub_id',$sub_rinci['kd_rek_rincian_objek_sub'])->first();
        $style = '';
        ?>
        <tr>
            <td style="<?php echo e($style); ?>" align="center">
                <input name="cboxInput[]" id="cboxInput_<?php echo e($idx); ?>" type="checkbox" style="margin-right:0px !important"
                    value="<?php echo e($idx); ?>">
            </td>
            <td style="<?php echo e($style); ?>">
                <?php echo e($sub_rinci['kd_rek_rincian_obj']); ?>

            </td>
            </td>
            <td style="<?php echo e($style); ?>"><?php echo e($sub_rinci['nm_rek_rincian_obj']); ?></td>
            <td style="<?php echo e($style); ?>">
                <input name="volume[<?php echo e($idx); ?>]" id="volume_<?php echo e($idx); ?>" type="text" style="text-align:right"
                    class="form-control auto" autocomplete="off"
                    onblur="isFloat(this, 'Volume'); cboxChecked(this); calcJumlahMak(this); sumTotalMak(<?php echo e($ttlMak); ?>); "
                    \="">
            </td>

            <td style="<?php echo e($style); ?>">
                <input name="satuan[<?php echo e($idx); ?>]" id="satuan_<?php echo e($idx); ?>" type="text" class="form-control"
                    autocomplete="off" maxlength="20" onblur="cboxChecked(this); ">
            </td>

            <td style="<?php echo e($style); ?>">
                <input name="jumlah[<?php echo e($idx); ?>]" id="jumlah_<?php echo e($idx); ?>" type="number" style="text-align:right"
                    class="form-control number" autocomplete="off" onblur="isFloat(this, 'Jumlah');" title="">
            </td>
            <input name="kd_rekening_sub[<?php echo e($idx); ?>]" id="kd_rekening_sub<?php echo e($idx); ?>" type="hidden"
                value="<?php echo e($sub_rinci['kd_rek_rincian_objek_sub']); ?>" />
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>

    </tbody>
</table>
<table class="table table-striped">
    <tr>
        <td></td>
        <td></td>
        <td></td>

        <td>Total : </td>
        <td> <input name="" id="" type="text" class="form-control" autocomplete="off" maxlength="20"
                onblur="cboxChecked(this); ">
        </td>
        <td> <input name="" id="" type="text" class="form-control" autocomplete="off" maxlength="20"
                onblur="cboxChecked(this); ">
        </td>
        <td> <input name="" id="" type="text" class="form-control" autocomplete="off" maxlength="20"
                onblur="cboxChecked(this); ">
        </td>
    </tr>
</table>
<script src="<?php echo e(asset('assets/template/js/validate_form.js')); ?>"></script>
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

    function calcJumlahMak(fld) {
        var arr = fld.id.split('_');
        var idx = arr[(arr.length-1)];
        var vol = document.getElementById('volume_'+idx).value;
        var harga = document.getElementById('jumlah_'+idx).value;
        if (vol != '' || harga != '') {
            document.getElementById('jumlah_mak').value = (vol * harga).toFixed(2);
        } else {
            document.getElementById('jumlah_mak').value = '';
        }
        return 1;
    }

    function sumTotalMak(ttlRow) {
        var ttlMak = 0;
        var idx = 0;
        while (idx < ttlRow) {
            var fldJumlah = document.getElementById('jumlah_'+idx);
            if (fldJumlah != null && document.getElementById('cboxInput_'+idx).checked) {
                ttlMak += parseFloat(fldJumlah.value);
            }
            idx++;
        }
        document.getElementById('jumlah_mak').value = ttlMak;
        return true;
    }
   
    function add(){
        save_method = "add";
        $('#form').trigger('reset');
        $('input[name=_method]').val('POST');
        $('#txtSave').html('');
    }
    add();
</script><?php /**PATH D:\xampp64\www\retribusi\resources\views/pendapatan/pendapatan/form_pendapatan_add.blade.php ENDPATH**/ ?>