<?php $__env->startSection('content'); ?>
<div class="page bg-light">
    <?php echo $__env->make('layouts._includes.toolbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container-fluid my-3">
        <div class="card">
            <div class="card-body">
                <div class="form-row form-inline">
                    <div class="col-md-12">
                        <div class="form-group m-0">
                            <label for="tmrekening_akun_id" class="col-form-label s-12 col-md-3"><strong>Rek. Akun :</strong></label>
                            <div class="col-md-5 p-0 mb-2">
                                <select name="tmrekening_akun_id" class="form-control r-0 s-12 select2" id="tmrekening_akun_id">
                                    <option value="0">--Pilihan Data--</option>
                                    <?php $__currentLoopData = $tmrekening_akuns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$tmrekening_akun): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($tmrekening_akun->id); ?>"><?php echo e('['.$tmrekening_akun->kd_rek_akun.'] '.$tmrekening_akun->nm_rek_akun); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group m-0">
                            <label for="tmrekening_akun_kelompok_id" class="col-form-label s-12 col-md-3"><strong>Rek. Kelompok :</strong></label>
                            <div class="col-md-5 p-0 mb-2">
                                <select name="tmrekening_akun_kelompok_id" class="form-control r-0 s-12 select2" id="tmrekening_akun_kelompok_id">
                                    <option value="0">--Pilihan Data--</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group m-0">
                            <label for="tmrekening_akun_kelompok_jenis_id" class="col-form-label s-12 col-md-3"><strong>Rek. Jenis :</strong></label>
                            <div class="col-md-5 p-0 mb-2">
                                <select name="tmrekening_akun_kelompok_jenis_id" class="form-control r-0 s-12 select2" id="tmrekening_akun_kelompok_jenis_id" onchange="selectOnChange();">
                                    <option value="0">--Pilihan Data--</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mt-2">
            <div class="card-body no-b">
                <div class="table-responsive">
                    <table id="datatable" class="table table-bordered table-striped" style="width:100%">
                        <thead>
                            <th width="30"></th>
                            <th width="130">Kode Rek. Objek</th>
                            <th>Nama Rek. Objek</th>
                            <th width="120">Klasifikasi</th>
                            <th width="120">Kode Rek. Aset</th>
                            <th width="120">Kode Rek. Akrual</th>
                            <th width="120">Kode Rek. Utang</th>
                            <th width="120">Dasar Hukum</th>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
<script type="text/javascript" src="<?php echo e(asset('assets/template/js/plugin/datatables/datatables.min.js')); ?>"></script> 
<script type="text/javascript" src="<?php echo e(asset('assets/template/js/plugin/datatables/dataTables.rowGroup.min.js')); ?>"></script>

<script type="text/javascript">
    $('#btnCreate').on('click', function(){
        if($('#tmrekening_akun_id').val() == 0 || $('#tmrekening_akun_kelompok_id').val() == 0 || $('#tmrekening_akun_kelompok_jenis_id').val() == 0) {
            event.preventDefault();
            event.stopPropagation();
            $.alert("Silahkan memilih <strong>Rek. Akun</strong>, <strong>Rek. Kelompok</strong> dan <strong>Rek. Jenis</strong> yang akan ditambah.");
        }
    });

    $('#tmrekening_akun_id').on('change', function(){
        val = $(this).val();
        option = "<option value='0'>--Semua Data--</option>";
        if(val == ""){
            $('#tmrekening_akun_kelompok_id').html(option);
            selectOnChange();
        }else{
            $('#tmrekening_akun_kelompok_id').html("<option value=''>Loading...</option>");
            url = "<?php echo e(route('rekening.kodejenis.kodekelompokByKodeakun', ':id')); ?>".replace(':id', val);
            $.get(url, function(data){
                if(data){
                    $.each(data, function(index, value){
                        option += "<option value='" + value.id + "'>[" + value.kd_rek_kelompok +"] " + value.nm_rek_kelompok +"</li>";
                    });
                    $('#tmrekening_akun_kelompok_id').empty().html(option);

                    $("#tmrekening_akun_kelompok_id").val($("#tmrekening_akun_kelompok_id option:first").val()).trigger("change.select2");
                }else{
                    $('#tmrekening_akun_kelompok_id').html(option);
                    selectOnChange();
                }
            }, 'JSON');
        }
        $('#tmrekening_akun_kelompok_id').change();
    });

    $('#tmrekening_akun_kelompok_id').on('change', function(){
        val = $(this).val();
        option = "<option value='0'>--Semua Data--</option>";
        if(val == ""){
            $('#tmrekening_akun_kelompok_jenis_id').html(option);
            selectOnChange();
        }else{
            $('#tmrekening_akun_kelompok_jenis_id').html("<option value=''>Loading...</option>");
            url = "<?php echo e(route('rekening.kodeobjek.kodejenisByKodekelompok', ':id')); ?>".replace(':id', val);
            $.get(url, function(data){
                if(data){
                    $.each(data, function(index, value){
                        option += "<option value='" + value.id + "'>[" + value.kd_rek_jenis +"] " + value.nm_rek_jenis +"</li>";
                    });
                    $('#tmrekening_akun_kelompok_jenis_id').empty().html(option);

                    $("#tmrekening_akun_kelompok_jenis_id").val($("#tmrekening_akun_kelompok_jenis_id option:first").val()).trigger("change.select2");
                }else{
                    $('#tmrekening_akun_kelompok_jenis_id').html(option);
                    selectOnChange();
                }
            }, 'JSON');
        }
    });

    var table = $('#datatable').dataTable({
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ],  

        processing: true,
        serverSide: true,
        order: [1, 'asc'],
        pageLength: 50,
        ajax: {
            url: "<?php echo e(route($route.'api')); ?>",
            method: 'POST',
            data:function(data){
                data.tmrekening_akun_id = $('#tmrekening_akun_id').val();
                data.tmrekening_akun_kelompok_id = $('#tmrekening_akun_kelompok_id').val();
                data.tmrekening_akun_kelompok_jenis_id = $('#tmrekening_akun_kelompok_jenis_id').val();
            }
        },
        columns: [
            {data: 'id', name: 'id', orderable: false, searchable: false, align: 'center', className: 'text-center'},
            {data: 'kd_rek_obj', name: 'kd_rek_obj'},
            {data: 'nm_rek_obj', name: 'nm_rek_obj'},
            {data: 'klasifikasi_rek', name: 'klasifikasi_rek'},
            {data: 'kd_rek_aset', name: 'kd_rek_aset'},
            {data: 'kd_rek_akrual', name: 'kd_rek_akrual'},
            {data: 'kd_rek_utang', name: 'kd_rek_utang'},
            {data: 'dasar_hukum', name: 'dasar_hukum'}
        ]
    });
    <?php echo $__env->make('layouts._includes.tablechecked', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    
    function del(){
        var c = new Array();
        $("input:checked").each(function(){ c.push($(this).val()); });
        if(c.length == 0){
            $.alert("Silahkan memilih data yang akan dihapus.");
        }else{
            $.post("<?php echo e(route($route.'destroy', ':id')); ?>", {'_method' : 'DELETE', 'id' : c}, function(data) {
                table.api().ajax.reload();
            }, "JSON").fail(function(){
                reload();
            });
        }
    }

    function selectOnChange(){
        table.api().ajax.reload();
        $('#btnCreate').attr('href', "<?php echo e(route($route.'create')); ?>?tmrekening_akun_id=" + $('#tmrekening_akun_id').val() + "&tmrekening_akun_kelompok_id=" + $('#tmrekening_akun_kelompok_id').val() + "&tmrekening_akun_kelompok_jenis_id=" + $('#tmrekening_akun_kelompok_jenis_id').val());
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\realisasi_daerah\resources\views/kodeobjek/index.blade.php ENDPATH**/ ?>