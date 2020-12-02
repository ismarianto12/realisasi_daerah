@extends('layouts.template')

@section('content')
<div class="page bg-light">
    @include('layouts._includes.toolbar')
    <div class="container-fluid my-3">
        <div id="alert"></div>
        <form class="needs-validation" id="form" method="POST" novalidate>
            {{ method_field('PATCH') }}
            <div class="card">
                <div class="card-body">
                    <div class="form-row form-inline">
                        <div class="col-md-12">
                            <div class="form-group m-0">
                                <label class="col-form-label s-12 col-md-2"><strong>Kode Rek. Akun :</strong></label>
                                <label class="r-0 s-12 col-md-8 tl">{{ $n_rekening_akun }}</label>
                            </div>
                            <div class="form-group m-0">
                                <label class="col-form-label s-12 col-md-2"><strong>Kode Rek. Kelompok
                                        :</strong></label>
                                <label class="r-0 s-12 col-md-8 tl">{{ $n_rekening_akun_kelompok }}</label>
                            </div>
                            <div class="form-group m-0">
                                <label class="col-form-label s-12 col-md-2"><strong>Kode Rek. Jenis :</strong></label>
                                <label class="r-0 s-12 col-md-8 tl">{{ $n_rekening_akun_kelompok_jenis }}</label>
                            </div>
                            <div class="form-group m-0">
                                <label class="col-form-label s-12 col-md-2"><strong>Kode Rek. Obj :</strong></label>
                                <label class="r-0 s-12 col-md-8 tl">{{ $n_rekening_akun_kelompok_jenis_objek }}</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-body">
                    <input type="hidden" id="id" name="id"
                        value="{{ $tmrekening_akun_kelompok_jenis_objek_rincian->id }}" />
                    <div class="form-row form-inline">
                        <div class="col-md-12">

                            <div class="form-group m-0">
                                <label for="kd_rek_rincian_obj" class="col-form-label s-12 col-md-2 pl-0"><strong>Kode
                                        Rek. Rincian Obj <span class="text-danger ml-1">*</span> :</strong></label>
                                <input type="text" name="kd_rek_rincian_obj" id="kd_rek_rincian_obj" placeholder=""
                                    class="form-control r-0 s-12 col-md-5"
                                    value="{{ $tmrekening_akun_kelompok_jenis_objek_rincian->kd_rek_rincian_obj }}"
                                    autocomplete="off" required />
                            </div>
                            <div class="form-group m-0">
                                <label for="nm_rek_rincian_obj" class="col-form-label s-12 col-md-2 pl-0"><strong>Nama
                                        Rek. Rincian Obj <span class="text-danger ml-1">*</span> :</strong></label>
                                <input type="text" name="nm_rek_rincian_obj" id="nm_rek_rincian_obj" placeholder=""
                                    class="form-control r-0 s-12 col-md-5"
                                    value="{{ $tmrekening_akun_kelompok_jenis_objek_rincian->nm_rek_rincian_obj }}"
                                    autocomplete="off" required />
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </form>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
    $('#txtSave').html("Perubahan");
    $('#kd_rek_akun').focus();

    function save(){ $('#form').submit(); }
    $('#form').on('submit', function (event) {
        if ($(this)[0].checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
        }else{
            $('#alert').html('');
            $('#btnSave').attr('disabled', true);

            url = "{{ route($route.'update', ':id') }}".replace(':id', $('#id').val());
            $.post(url, $(this).serialize(), function(data){
                $('#alert').html("<div role='alert' class='alert alert-success alert-dismissible'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button><strong>Success!</strong> " + data.message + "</div>");
                window.location.href='{{ route($route.'index') }}';
            }, "JSON").fail(function(data){
                err = ''; respon = data.responseJSON;
                $.each(respon.errors, function(index, value){
                    err += "<li>" + value +"</li>";
                });
                $('#alert').html("<div role='alert' class='alert alert-danger alert-dismissible'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button><strong>Error!</strong> " + respon.message + "<ol class='pl-3 m-0'>" + err + "</ol></div>");
            }).always(function(){
                $('#btnSave').removeAttr('disabled');
            });
            return false;
        }
        $(this).addClass('was-validated');
    });
</script>
@endsection