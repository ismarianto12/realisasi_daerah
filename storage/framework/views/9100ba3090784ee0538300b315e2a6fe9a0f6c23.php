<div id="msg_error"></div>
<form id="exampleValidation" action="<?php echo e($action); ?>" method="POST" class="simpan" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <?php echo e($method_field); ?>

    <div class="card-body">
        <div class="form-group form-show-validation row">
            <label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Pegawai <span
                    class="required-label">*</span></label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="cari_pgawai" placeholder="Klik Cari " value="">
                <br /><br />
                <div class="alert alert-success">Jika ada perubahan nama pegawai silahkan pilih pada column pencarian .
                </div>

                <?php if($actionform == 'edit'): ?>
                <input type="hidden" name="id" value="<?php echo e($user_id); ?>">
                <label>Nama Pegawai yang di pilih sebelumnya : <?php echo e($pegawainm); ?></label>
                <?php else: ?>
                <?php endif; ?>
                <div id="nama_peg"></div>
                <div id="pegawai_id"></div>

            </div>
        </div>
        <div class="form-group form-show-validation row">
            <label for="username" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Username <span
                    class="required-label">*</span></label>
            <div class="col-sm-8">
                <input type="text" class="form-control" placeholder="username" aria-label="username"
                    aria-describedby="username-addon" id="username" name="username" required value="<?php echo e($username); ?>">
            </div>
        </div>

        <div class="form-group form-show-validation row">
            <label for="password" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Password <span
                    class="required-label">*</span></label>
            <div class="col-sm-8">
                <input type="password" class="form-control" id="password_lama" name="password"
                    placeholder="Enter Password" required value="">
            </div>
        </div>

        <div class="form-group form-show-validation row">
            <label for="password" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Ulangi Password <span
                    class="required-label">*</span></label>
            <div class="col-sm-8">
                <input type="password" class="form-control" id="password_baru" name="password"
                    placeholder="Ulangai Password" required value="">
            </div>
        </div>

        <div class="form-group form-show-validation row">
            <label for="confirmpassword" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">No Telp<span
                    class="required-label">*</span></label>
            <div class="col-sm-8">
                <input type="number" class="form-control" id="telp" name="telp" placeholder="Masukan Nomor Telp"
                    required value="<?php echo e($telp); ?>">
            </div>
        </div>


        <div class="separator-solid"></div>
        <div class="separator-solid"></div>
        <div class="form-group form-show-validation row">
            <label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Upload Image <span
                    class="required-label">*</span></label>
            <div class="col-sm-8">
                <div class="input-file input-file-image">
                    <img class="img-upload-preview img-circle" id="foto" width="100" height="100"
                        src="http://placehold.it/100x100" alt="preview">
                    <input type="file" name="photo" class="form-control form-control-file" id="uploadImg"
                        name="uploadImg" accept="image/*" value="">
                    <label for="uploadImg" class="btn btn-primary btn-round btn-lg"><i class="fa fa-file-image"></i>
                        Upload a Image</label>
                </div>
            </div>
        </div>

        <div class="form-group form-show-validation row">
            <label for="confirmpassword" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Status aktif <span
                    class="required-label">*</span></label>
            <div class="col-sm-8">
                <select class="form-control select2" name="c_status">
                    <?php
                    $arr = [
                    1=>'Aktif',
                    2=>'Non aktif'
                    ];
                    ?>
                    <?php $__currentLoopData = $arr; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ls => $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                    $check = ($ls == $c_status) ? 'checked' : '';
                    ?>
                    <option value="<?php echo e($ls); ?>" <?php echo e($check); ?>><?php echo e($val); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>

        <div class="form-group form-show-validation row">
            <label for="confirmpassword" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Satuan kerja
                (Satker)<span class="required-label">*</span></label>
            <div class="col-sm-8">
                <select class="form-control select2" name="sikd_satker_id">
                    <?php $__currentLoopData = $satker; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($data->id); ?>" <?php if($data->id == $sikd_satker_id): ?> ? selected="selected" <?php endif; ?>
                        >[<?php echo e($data->kode); ?>] <?php echo e($data->nama); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>

        <div class="form-group form-show-validation row">
            <label for="confirmpassword" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Level Akses<span
                    class="required-label">*</span></label>
            <div class="col-sm-8">
                <select class="form-control select2" name="tmuser_level_id">
                    <?php $__currentLoopData = $level; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $lv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                    $lcheck = ($lv['id'] == $tmuser_level_id) ? 'selected="selected"' : '';
                    ?>
                    <option value="<?php echo e($lv['id']); ?>" <?php echo e($lcheck); ?>><?php echo e($lv['description']); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
        </div>

        <div class="form-group form-show-validation row">
            <label for="confirmpassword" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Nomor Telp<span
                    class="required-label">*</span></label>
            <div class="col-sm-8">
                <input type="number" class="form-control" id="telp" name="telp" placeholder="Masukan Nomor Telp"
                    required value="<?php echo e($telp); ?>">
            </div>
        </div>

    </div>
    <div class="card-action">
        <div class="row">
            <div class="col-md-12">
                <input class="simpan btn btn-success btn-xs" type="submit" value="Simpan">
                <a href="#" class="btn btn-danger btn-xs" id="cancel">Cancel</a>
            </div>
        </div>
    </div>
</form>

<script>
    $(function () {

        function readURL(input) {
            if (input.files && input.files[0]) {
              var reader = new FileReader(); 
              reader.onload = function(e) {
                $('#foto').attr('src', e.target.result);
              }
              
              reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
          }
        $('#uploadImg').change(function(){
            var ext = $('#uploadImg').val().split('.').pop().toLowerCase();
            if ($.inArray(ext, ['gif', 'png', 'jpg', 'jpeg']) == -1) {
                 //swal('File Error', 'tidak bisa upload', 'warning');
                alert('gambar tidak bisa di upload extensi salah');
                $('#foto').val('');
            } else {
                readURL(this);
            }

        });
          
        $('#cancel').on('click',function (e) {
            e.preventDefault();
            $('.show_form').hide().slideUp();
        });

        //simpan data
        $('.simpan').on('submit', function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            
            var password_lama = $('#password_lama').val();
            var password_baru = $('#password_baru').val();

            if(password_baru != password_lama){
                Swal.fire({
                    title: 'Perhatian',
                    text: "Maaf Password anda tidak sama.",
                    icon: 'warning',
                });
            }else{  

             $.ajax({
                type: 'post',
                url: $(this).attr('action'),
                data: formData,
                headers: {
                    '_csrf': '<?php echo e(csrf_token()); ?>'
                },
                mimeType: "multipart/form-data",
                contentType: false,
                processData: false,
                dataType: "json",
                success: function(data) {
                    if (data.status == 1) {
                          html = '<div class="alert alert-success">' + data.msg + '</div><br />';
                            //$('#sample_form')[0].reset();
                            //   $('#example2').DataTable().ajax.reload();
                           $('.show_form').hide().slideUp();
                       } else if (data.status == 2) {
                            html = '';
                            for (var count = 0; count < data.msg.length; count++) {
                                html += '<div class="alert alert-danger msg">' + data.msg[count] + '</div>';
                            }  
                        }
                        $('#msg_error').html(html);
                        $("#datauser").DataTable().ajax.reload(); 
                    },
                    error: function(data) {  
                        err = ''; respon = data.responseJSON;
                        $.each(respon.errors, function(index, value){
                            err += "<li>" + value +"</li>";
                        });
                        $('#msg_error').html("<div role='alert' class='alert alert-danger alert-dismissible'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button><strong>Error!</strong> " + respon.message + "<ol class='pl-3 m-0'>" + err + "</ol></div>");
                    }
                });
              }
            });
         
             //cari data id_ pegawai 
            $('#cari_pgawai').on('click',function(e){
                e.preventDefault();
                $('#modal_pegawai').modal('show');         
         }); 
    });
</script>




<div class="modal fade" id="modal_pegawai" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="width: auto;">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"><i class="fa fa-check"></i> Pilih data Pegawai di
                    list
                    rapat.</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger">
                    <i class="fa fa-user"></i>
                    * ) perlu di ketahui untuk menambahkan data user login , silahkan tambahkan data pegawai terlebih
                    dahulu jika tidak ada list table
                </div>
                <table id="list_pegawai" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama Pegawai</th>
                            <th>Nip</th>
                            <th>Jabatan</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () { 
        $('#list_pegawai').DataTable({
             initComplete: function() {
                 var api = this.api();
                $('#datatables input')
                .off('.DT')
                .on('keyup.DT', function(e) {
                    if (e.keyCode == 13) {
                        api.search(this.value).draw();
                    }
                });
            },
            oLanguage: {
                sProcessing: '<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span>'
            },
            processing: true,
            serverSide: true,
            ajax: {
                url: "<?php echo e(Url('tmpegawai/api/data/params')); ?>",
            },
            columns: [
            {
                data: 'DT_RowIndex', 
                
            },
            {
                data : 'n_pegawai',  
            },
            {
                data : 'nip', 
             }, 
            {
                data : 'tmjabatan.n_jabatan', 
            }, 
            {
                data : 'select', 
             }
            ],
            'responsive' : true,
        }); 
        //even data click
        $('#list_pegawai').on('click','#pilih',function(){
            var pegawai_id = $(this).attr('data-id');
            var namapeg    = $(this).attr('data-nama');
            $('#nama_peg').html('<br /><input type="text" id="nama_peg" name="realname" class="form-control" value="'+namapeg+'" readonly>');
            $('#pegawai_id').html('<input type="hidden" id="pegawai_id" name="pegawai_id" class="form-control" value="'+pegawai_id+'">');  
            $('#modal_pegawai').modal('hide');      
        });    
    });  


    
    $(function(){
        $('.select2').select2({
            dropdownAutoWidth : true,
            width: 'auto'
        });
    }); 
</script><?php /**PATH D:\xampp64\www\retribusi\resources\views/user/user_form.blade.php ENDPATH**/ ?>