@extends('layouts.template')
@section('title','Edit Profile User .')
@section('content')

<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold">@yield('title')</h2>
                <h5 class="text-white op-7 mb-2"></h5>
            </div>
            <div class="ml-md-auto py-2 py-md-0">
                <a href="#" class="btn btn-white btn-border btn-round mr-2">Edit Password</a>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div id="alert"></div>
            </div>
            <div class="card-body">
                <div id="msg_error"></div>
                <form id="exampleValidation" action="{{ $action }}" method="POST" class="simpan"
                    enctype="multipart/form-data">
                    @csrf
                    {{ method_field('PATCH') }}
                    <div class="card-body">
                        <div class="form-group form-show-validation row">
                            <label for="username" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Username <span
                                    class="required-label">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" placeholder="username" aria-label="username"
                                    aria-describedby="username-addon" id="username" name="username" required
                                    value="{{ $username }}">
                            </div>
                        </div>

                        <div class="form-group form-show-validation row">
                            <label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Nama <span
                                    class="required-label">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" name="realname" class="form-control" id="nama" placeholder="Nama"
                                    value="{{ $nama }}">
                            </div>
                        </div>

                        <div class="form-group form-show-validation row">
                            <label for="password" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Password <span
                                    class="required-label">*</span></label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control" id="password" name="password"
                                    placeholder="Enter Password" required value="">
                            </div>
                        </div>

                        <div class="form-group form-show-validation row">
                            <label for="password" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Ulangi Password
                                <span class="required-label">*</span></label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control" id="password_baru" name="password"
                                    placeholder="Ulangai Password" required value="">
                            </div>
                        </div>

                        <div class="form-group form-show-validation row">
                            <label for="confirmpassword" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">No
                                Telp<span class="required-label">*</span></label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="telp" name="telp"
                                    placeholder="Masukan Nomor Telp" required value="{{ $telp }}">
                            </div>
                        </div>

                        <div class="separator-solid"></div>
                        <div class="form-group form-show-validation row">
                            <label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Upload Image <span
                                    class="required-label">*</span></label>
                            <div class="col-sm-8">
                                <div class="input-file input-file-image">
                                    <img class="img-upload-preview img-circle" id="foto" width="100" height="100"
                                        src="{{ $photo }}" alt="preview">
                                    <input type="file" name="photo" class="form-control form-control-file"
                                        id="uploadImg" name="uploadImg" accept="image/*" required value="">
                                    <label for="uploadImg" class="btn btn-primary btn-round btn-lg"><i
                                            class="fa fa-file-image"></i>
                                        Upload a Image</label>
                                </div>
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

            </div>
        </div>
    </div>
</div>
@section('script')
<script type="text/javascript">
    $(function() {  
        $('.simpan').submit(function(e) {
            e.preventDefault();
            var username = $('#username').val();
            var password = $('#password').val();
            var password_ul = $('#password_baru').val();
            var nama = $('#nama').val();  

            if (password == '') {
                $.alert('Keterangan', 'Password tidak boleh kosong');
            } else if (password_ul == '') {
                $.alert('Keterangan', 'Ulangi Password tidak boleh kosong');
            } else if (password != password_ul) {
                $.alert('Keterangan', 'password tidak sama silahkan ulangi');
            } else if (nama == '') {
                $.alert('Keterangan', 'Nama tidak boleh kosong');
            } else {
                var datastring = new FormData(this);
                $.ajax({
                    url: $(this).attr('action'),
                    type: 'post',
                    data: datastring,
                    cache: false,
                    contentType: false,
                    processData: false,
                    beforeSend: function() {
                        $('#cupdate').attr("disabled", "disabled");
                        $('#cupdate').css("opacity", ".5");
                    },
                    success: function(data) {
                        $.alert('Data username dan password berhasil di update', 'success');
                        $('#cupdate').css("opacity", "");
                        $("#cupdate").removeAttr("disabled");
                    },
                    error: function(data) { 
                     err = ''; respon = data.responseJSON;
                    $.each(respon.errors, function(index, value){
                        err += "<li>" + value +"</li>";
                    });
                    $('#alert').html("<div role='alert' class='alert alert-danger alert-dismissible'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button><strong>Error!</strong> " + respon.message + "<ol class='pl-3 m-0'>" + err + "</ol></div>");
                    }
                });
            }
        });
    });
</script>
@endsection

@endsection