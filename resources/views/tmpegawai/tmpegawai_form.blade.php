<div id="msg_error"></div>
<form id="exampleValidation" action="{{ $action }}" method="POST" class="simpan" enctype="multipart/form-data">
    @csrf
    {{ $method_field }}
    <div class="card-body">
        <div class="form-group form-show-validation row">
            <label for="tgl_masuk" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Tgl masuk <span
                    class="required-label">*</span></label>
            <div class="col-sm-8">
                <input type="date" name="tgl_masuk" class="form-control" id="tgl_masuk" placeholder="Klik Cari "
                    value="">
            </div>
        </div>

        <div class="form-group form-show-validation row">
            <label for="nip" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Nip <span
                    class="required-label">*</span></label>
            <div class="col-sm-8">
                <input type="text" name="nip" class="form-control" id="nip" placeholder="Nip Pegawai ." value="">
            </div>
        </div>

        <div class="form-group form-show-validation row">
            <label for="password" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Password <span
                    class="required-label">*</span></label>
            <div class="col-sm-8">
                <select name="jabatan_id" class="form-control" id="jabatan_id">
                    @foreach ($jabatan as $jabat)
                    <option value="{{  $jabat['jabatan_id'] }}">{{ $jabat['n_jabatan'] }} </option>

                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group form-show-validation row">
            <label for="confirmpassword" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">No Telp<span
                    class="required-label">*</span></label>
            <div class="col-sm-8">
                <input type="number" class="form-control" id="telp" name="telp" placeholder="Masukan Nomor Telp"
                    required value="{{ $telp }}">
            </div>
        </div>


        <div class="form-group form-show-validation row">
            <label for="confirmpassword" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Status aktif <span
                    class="required-label">*</span></label>
            <div class="col-sm-8">
                <select class="form-control " name="c_status">
                    @php
                    $arr = [
                    1=>'Aktif',
                    2=>'Non aktif'
                    ];
                    @endphp
                    @foreach($arr as $ls => $val)
                    @php
                    $check = ($ls == $c_status) ? 'checked' : '';
                    @endphp
                    <option value="{{ $ls }}" {{ $check }}>{{ $val }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group form-show-validation row">
            <label for="confirmpassword" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Satuan kerja
                (Satker)<span class="required-label">*</span></label>
            <div class="col-sm-8">
                <select class="form-control " name="sikd_satker_id">
                    @foreach($satker as $data)
                    @php
                    $lcheck = ($data->id == $sikd_satker_id) ? 'checked' : '';
                    @endphp
                    <option value="{{ $data->id }}" {{ $lcheck }}>[{{ $data->kode }}] {{ $data->nama }}</option>
                    @endforeach
                </select>
            </div>
        </div> 

        <div class="form-group form-show-validation row">
            <label for="confirmpassword" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Nomor Telp<span
                    class="required-label">*</span></label>
            <div class="col-sm-8">
                <input type="number" class="form-control" id="telp" name="telp" placeholder="Masukan Nomor Telp"
                    required value="{{ $telp }}">
            </div>
        </div>

    </div>
    <div class="card-action">
        <div class="row">
            <div class="col-md-12">
                <input class="simpan btn btn-success" type="submit" value="Simpan">
                <a href="#" class="btn btn-danger" id="cancel">Cancel</a>
            </div>
        </div>
    </div>
</form>

<script>
    $(function () {
      //preview AFTER upload
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
                    '_csrf': '{{ csrf_token() }}'
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
                        $('#msg_error').html(html).fadeOut();
                        $("#datauser").DataTable().ajax.reload(); 
                    },
                    error: function(xhr, error, status) { 
                        alert(error)
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



{{--  list data pegtawai  --}}
<div class="modal fade" id="modal_pegawai" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="width: auto;">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"><i class="fa fa-check"></i> Pilih data notulen
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
                url: "{{ Url('tmpegawai/api/data/params') }}",
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

</script>