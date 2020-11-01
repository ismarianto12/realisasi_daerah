<?php $__env->startSection('content'); ?>
<div class="page bg-light">
    <?php echo $__env->make('layouts._includes.toolbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container-fluid my-3">
        <div class="card">
            <div class="card-body">
                <div class="form-row form-inline">
                    <div class="col-md-12">
                        <div class="form-group m-0">
                            <label for="tmrekening_akun_id" class="col-form-label s-12 col-md-3"><strong>Rek. Akun
                                    :</strong></label>
                            <div class="col-md-5 p-0 mb-2">
                                <select name="tmrekening_akun_id" class="form-control r-0 s-12 select2"
                                    id="tmrekening_akun_id" onchange="selectOnChange()">
                                    <option value="0">--Pilihan Data--</option>
                                    <?php $__currentLoopData = $tmrekening_akuns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$tmrekening_akun): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($tmrekening_akun->id); ?>">
                                        <?php echo e('['.$tmrekening_akun->kd_rek_akun.'] '.$tmrekening_akun->nm_rek_akun); ?>

                                    </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
                            <th width="130">Kode Rek. Kelompok</th>
                            <th>Nama Rek. Kelompok</th>
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
<script type="text/javascript" src="<?php echo e(asset('assets/template/js/plugin/datatables/dataTables.rowGroup.min.js')); ?>">
</script>

<script type="text/javascript">
    $('#btnCreate').on('click', function(){
        if($('#tmrekening_akun_id').val() == 0) {
            event.preventDefault();
            event.stopPropagation();
            $.alert("Silahkan memilih <strong>Rek. Akun</strong> yang akan ditambah.");
        }
    });

    var table = $('#datatable').dataTable({
        processing: true,
        serverSide: true,
        order: [1, 'asc'],
        pageLength: 50,
        ajax: {
            url: "<?php echo e(route($route.'api')); ?>",
            method: 'POST',
            data:function(data){
                data.tmrekening_akun_id = $('#tmrekening_akun_id').val();   
            }
        },
        columns: [
            {data: 'id', name: 'id', orderable: false, searchable: false, align: 'center', className: 'text-center'},
            {data: 'kd_rek_kelompok', name: 'kd_rek_kelompok'},
            {data: 'nm_rek_kelompok', name: 'nm_rek_kelompok'},
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
        $('#btnCreate').attr('href', "<?php echo e(route($route.'create')); ?>?tmrekening_akun_id=" + $('#tmrekening_akun_id').val());
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.template', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp64\www\retribusi\resources\views/kodekelompok/index.blade.php ENDPATH**/ ?>