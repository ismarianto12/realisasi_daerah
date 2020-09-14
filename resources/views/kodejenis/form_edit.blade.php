@extends('layouts.template')

@section('content')
<div class="page bg-light">
    @include('layouts._includes.toolbar')
    <div class="container-fluid my-3">
        <div id="alert"></div>
        <div class="card">
            <div class="card-body">
                <div class="form-row form-inline">
                    <div class="col-md-12">
                        <div class="form-group m-0">
                            <label class="col-form-label s-12 col-md-2"><strong>Kode Rek. Akun :</strong></label>
                            <label class="r-0 s-12 col-md-0">{{ $n_rekening_akun }}</label>
                        </div>
                        <div class="form-group m-0">
                            <label class="col-form-label s-12 col-md-2"><strong>Kode Rek. Kelompok :</strong></label>
                            <label class="r-0 s-12 col-md-0">{{ $n_rekening_akun_kelompok }}</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mt-2">
            <div class="card-body">
                <form class="needs-validation" id="form" method="POST" novalidate>
                    {{ method_field('PATCH') }}
                    <input type="hidden" id="id" name="id" value="{{ $tmrekening_akun_kelompok_jenis->id }}"/>
                    <div class="form-row form-inline">
                        <div class="col-md-12">
                            <div class="form-group m-0">
                                <label for="kd_rek_jenis" class="col-form-label s-12 col-md-2"><strong>Kode Rek. Jenis <span class="text-danger ml-1">*</span> :</strong></label>
                                <input type="text" name="kd_rek_jenis" id="kd_rek_jenis" placeholder="" class="form-control r-0 s-12 col-md-5" value="{{ $tmrekening_akun_kelompok_jenis->kd_rek_jenis }}" autocomplete="off" required/>
                            </div>
                            <div class="form-group m-0">
                                <label for="nm_rek_jenis" class="col-form-label s-12 col-md-2"><strong>Nama Rek. Jenis <span class="text-danger ml-1">*</span> :</strong></label>
                                <input type="text" name="nm_rek_jenis" id="nm_rek_jenis" placeholder="" class="form-control r-0 s-12 col-md-5" value="{{ $tmrekening_akun_kelompok_jenis->nm_rek_jenis }}" autocomplete="off" required/>
                            </div>
                            <div class="form-group m-0">
                                <label for="klasifikasi_rek" class="col-form-label s-12 col-md-2"><strong>Klasifikasi Rek. :</strong></label>
                                <select name="klasifikasi_rek" id="klasifikasi_rek" placeholder="" class="form-control r-0 s-12 col-md-5">
                                    <option value="">&nbsp;</option>
                                    @foreach($klasifikasi_reks as $klasifikasi_rek)
                                    <option value="{{ $klasifikasi_rek['id'] }}"@if($tmrekening_akun_kelompok_jenis->klasifikasi_rek == $klasifikasi_rek['id']) selected="selected"@endif>{{ $klasifikasi_rek['name'] }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group m-0">
                                <label for="kd_rek_aset" class="col-form-label s-12 col-md-2"><strong>Kode Rek. Aset :</strong></label>
                                <input type="text" name="kd_rek_aset" id="kd_rek_aset" placeholder="" class="form-control r-0 s-12 col-md-5" value="{{ $tmrekening_akun_kelompok_jenis->kd_rek_aset }}" autocomplete="off"/>
                            </div>
                            <div class="form-group m-0">
                                <label for="kd_rek_akrual" class="col-form-label s-12 col-md-2"><strong>Kode Rek. Akrual :</strong></label>
                                <input type="text" name="kd_rek_akrual" id="kd_rek_akrual" placeholder="" class="form-control r-0 s-12 col-md-5" value="{{ $tmrekening_akun_kelompok_jenis->kd_rek_akrual }}" autocomplete="off"/>
                            </div>
                            <div class="form-group m-0">
                                <label for="kd_rek_utang" class="col-form-label s-12 col-md-2"><strong>Kode Rek. Utang :</strong></label>
                                <input type="text" name="kd_rek_utang" id="kd_rek_utang" placeholder="" class="form-control r-0 s-12 col-md-5" value="{{ $tmrekening_akun_kelompok_jenis->kd_rek_utang }}" autocomplete="off"/>
                            </div>
                            <div class="form-group m-0">
                                <label for="dasar_hukum" class="col-form-label s-12 col-md-2"><strong>Dasar Hukum :</strong></label>
                                <textarea name="dasar_hukum" id="dasar_hukum" placeholder="" class="form-control r-0 s-12 col-md-5">{{ $tmrekening_akun_kelompok_jenis->dasar_hukum }}</textarea>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
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