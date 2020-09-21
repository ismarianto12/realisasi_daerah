@extends('layouts.template')
@section('title', 'Tambah target pendapatan')

@section('content')
<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold">@yield('title')</h2>
                <h5 class="text-white op-7 mb-2"></h5>
            </div>
            <div class="ml-md-auto py-2 py-md-0">
                <a href="#" class="btn btn-white btn-border btn-round mr-2">Target Pendapatan (Termasuk pajak dan retribusi) . </a>
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
                <form id="form" action="{{ $action }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{ $method_field }}
                    <div class="card-body">
                        <div class="form-group form-show-validation row">
                            <label for="username" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Jumlah Target
                                <span class="required-label">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" placeholder="jumlah target pendapatan"
                                    aria-label="username" aria-describedby="username-addon" id="username" name="jumlah"
                                    required value="{{ $jumlah }}">
                            </div>
                        </div>

                        <div class="form-group form-show-validation row">
                            <label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Jumlah Perubahan
                                Jika ada <span class="required-label">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" name="realname" class="form-control" id="jumalah perubahan"
                                    placeholder="Jumlah perubahan target" value="{{ $jumlah_perubahan }}">
                            </div>
                        </div>

                        <div class="form-group form-show-validation row">
                            <label for="password" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Rincian Rekening
                                object pendapatan <span class="required-label">*</span></label>
                            <div class="col-sm-8">
                                <div class="alert alert-succcess">
                                    <ul>
                                        <li>Rekening Pendapatan .
                                            <ul>
                                                <li>Pendapatan 1</li>
                                                <li>Pendapatan 2</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>

                            </div>
                        </div>

                        <div class="form-group form-show-validation row">
                            <label for="password" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Dasar Hukum
                                Target Pendapatan
                                <span class="required-label">*</span></label>
                            <div class="col-sm-8">
                                <input type="dasar_hukum" class="form-control" id="dasar_hukum" name="dasar_hukum"
                                    placeholder="Dasar Hukum" required value="{{ $dasar_hukum }}">
                            </div>
                        </div>

                        <div class="form-group form-show-validation row">
                            <label for="confirmpassword"
                                class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Keterangan
                                <span class="required-label">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="ket" name="ket"
                                    placeholder="Keterangan Sifat Opsional" required value="{{ $keterangan }}">
                            </div>
                        </div>
                    </div>
                    <div class="card-action">
                        <div class="row">
                            <div class="col-md-12">
                                <input class="simpan btn btn-success btn-sm" type="submit" value="Simpan">
                                <a href="#" class="btn btn-danger btn-sm" id="cancel">Cancel</a> 
                                <a href="{{ Url('pendapatan/target') }}" class="btn btn-info btn-sm" id="home"><i class="fa fa-home"></i>Home</a>
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
        $('#form').on('submit',function(e) {
            e.preventDefault(); 
            if ($(this)[0].checkValidity() === false) {
                e.preventDefault();
                e.stopPropagation();
            }else{ 
               $('#alert').html('');
               $('#btnSave').attr('disabled', true);
               url = $(this).attr('action');
               $.post(url, $(this).serialize(),function(data){
                  $('#alert').html("<div role='alert' class='alert alert-success alert-dismissible'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button><strong>Success!</strong>Data berhasil di simpan</div>");
             },'JSON').fail(function(data){
                    err = ''; respon = data.responseJSON;
                    $.each(respon.errors, function(index, value){
                        err += "<li>" + value +"</li>";
                    });
                    $('#alert').html("<div role='alert' class='alert alert-danger alert-dismissible'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button><strong>Error!</strong> " + respon.message + "<ol class='pl-3 m-0'>" + err + "</ol></div>");
                }).always(function(){
                    $('.simpan').removeAttr('disabled');
                });  
            }
        });
    });
</script>
@endsection
@endsection