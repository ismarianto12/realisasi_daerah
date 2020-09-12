@extends('layouts.page')

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
                                <label class="r-0 s-12 col-md-8 tl">{{ '[ '.$tmrekening_akun_kelompok_jenis_objek_rincian_sub->tmrekening_akun_kelompok_jenis_objek_rincian->tmrekening_akun_kelompok_jenis_objek->tmrekening_akun_kelompok_jenis->tmrekening_akun_kelompok->tmrekening_akun->kd_rek_akun.' ] '.$tmrekening_akun_kelompok_jenis_objek_rincian_sub->tmrekening_akun_kelompok_jenis_objek_rincian->tmrekening_akun_kelompok_jenis_objek->tmrekening_akun_kelompok_jenis->tmrekening_akun_kelompok->nm_rek_kelompok }}</label>
                            </div>
                            <div class="form-group m-0">
                                <label class="col-form-label s-12 col-md-2"><strong>Kode Rek. Kelompok :</strong></label>
                                <label class="r-0 s-12 col-md-8 tl">{{ '[ '.$tmrekening_akun_kelompok_jenis_objek_rincian_sub->tmrekening_akun_kelompok_jenis_objek_rincian->tmrekening_akun_kelompok_jenis_objek->tmrekening_akun_kelompok_jenis->tmrekening_akun_kelompok->kd_rek_kelompok.' ] '.$tmrekening_akun_kelompok_jenis_objek_rincian_sub->tmrekening_akun_kelompok_jenis_objek_rincian->tmrekening_akun_kelompok_jenis_objek->tmrekening_akun_kelompok_jenis->tmrekening_akun_kelompok->nm_rek_kelompok }}</label>
                            </div>
                            <div class="form-group m-0">
                                <label class="col-form-label s-12 col-md-2"><strong>Kode Rek. Jenis :</strong></label>
                                <label class="r-0 s-12 col-md-8 tl">{{ '[ '.$tmrekening_akun_kelompok_jenis_objek_rincian_sub->tmrekening_akun_kelompok_jenis_objek_rincian->tmrekening_akun_kelompok_jenis_objek->tmrekening_akun_kelompok_jenis->kd_rek_jenis.' ] '.$tmrekening_akun_kelompok_jenis_objek_rincian_sub->tmrekening_akun_kelompok_jenis_objek_rincian->tmrekening_akun_kelompok_jenis_objek->tmrekening_akun_kelompok_jenis->nm_rek_jenis }}</label>
                            </div>
                            <div class="form-group m-0">
                                <label class="col-form-label s-12 col-md-2"><strong>Kode Rek. Objek :</strong></label>
                                <label class="r-0 s-12 col-md-8 tl">{{ '[ '.$tmrekening_akun_kelompok_jenis_objek_rincian_sub->tmrekening_akun_kelompok_jenis_objek_rincian->tmrekening_akun_kelompok_jenis_objek->kd_rek_obj.' ] '.$tmrekening_akun_kelompok_jenis_objek_rincian_sub->tmrekening_akun_kelompok_jenis_objek_rincian->tmrekening_akun_kelompok_jenis_objek->nm_rek_obj }}</label>
                            </div>
                            <div class="form-group m-0">
                                <label class="col-form-label s-12 col-md-2"><strong>Rek. Rincian Objek :</strong></label>
                                <label class="r-0 s-12 col-md-8 tl">{{ '[ '.$tmrekening_akun_kelompok_jenis_objek_rincian_sub->tmrekening_akun_kelompok_jenis_objek_rincian->kd_rek_rincian_obj.' ] '.$tmrekening_akun_kelompok_jenis_objek_rincian_sub->tmrekening_akun_kelompok_jenis_objek_rincian->nm_rek_rincian_obj }}</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-body">
                    <input type="hidden" id="id" name="id" value="{{ $tmrekening_akun_kelompok_jenis_objek_rincian_sub->id }}"/>
                    <div class="form-row form-inline">
                        <div class="col-md-12">
                            <div class="form-group m-0">
                                <label for="kd_rek_rincian_objek_sub" class="col-form-label s-12 col-md-2 pl-0"><strong>Kode Rek. Sub Rincian Obj <span class="text-danger ml-1">*</span> :</strong></label>
                                <input type="text" name="kd_rek_rincian_objek_sub" id="kd_rek_rincian_objek_sub" placeholder="" class="form-control r-0 s-12 col-md-5" value="{{ $tmrekening_akun_kelompok_jenis_objek_rincian_sub->kd_rek_rincian_objek_sub }}" autocomplete="off" required/>
                            </div>
                            <div class="form-group m-0">
                                <label for="nm_rek_rincian_objek_sub" class="col-form-label s-12 col-md-2 pl-0"><strong>Nama Rek. Sub Rincian Obj <span class="text-danger ml-1">*</span> :</strong></label>
                                <input type="text" name="nm_rek_rincian_objek_sub" id="nm_rek_rincian_objek_sub" placeholder="" class="form-control r-0 s-12 col-md-5" value="{{ $tmrekening_akun_kelompok_jenis_objek_rincian_sub->nm_rek_rincian_objek_sub }}" autocomplete="off" required/>
                            </div>
                            <div class="form-group m-0">
                                <label for="nm_rek_rincian_objek_sub" class="col-form-label s-12 col-md-2 pl-0"><strong>Dasar Hukum :</strong></label>
                                <textarea name="dasar_hukum" id="dasar_hukum" class="form-control r-0 s-12 col-md-5">{{ $tmrekening_akun_kelompok_jenis_objek_rincian_sub->dasar_hukum }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mt-2">
                <div class="card-header">
                    <h6>Keterkaitan Rekening P64</h6>
                </div>
                <div class="card-body no-b">
                    <div class="form-row form-inline">
                        <div class="col-md-12">
                            <div class="form-group m-0">
                                <label for="tmsikd_rek_rincian_obj_p64_id" class="col-form-label s-12 col-md-2"><strong>Rek. LRA P64 :</strong></label>
                                <div class="col-md-8 p-0 mb-2">
                                    <select name="tmsikd_rek_rincian_obj_p64_id" id="tmsikd_rek_rincian_obj_p64_id" placeholder="" class="form-control r-0 s-12 select2">
                                       <option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group m-0">
                                <label for="sikd_rek_akrual_id" class="col-form-label s-12 col-md-2"><strong>Rek. Akrual :</strong></label>
                                <div class="col-md-8 p-0 mb-2">
                                    <select name="sikd_rek_akrual_id" id="sikd_rek_akrual_id" placeholder="" class="form-control r-0 s-12 select2">
                                        <option value="">&nbsp;</option>
                                        @foreach($rekAkruals as $key=>$rekAkrual)
                                        <option value="{{ $rekAkrual->id }}"@if($tmrekening_akun_kelompok_jenis_objek_rincian_sub->sikd_rek_akrual_id == $rekAkrual->id) selected="selected"@endif>{{ '['.$rekAkrual->kd_rek_rincian_obj.'] '.$rekAkrual->nm_rek_rincian_obj }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group m-0">
                                <label for="sikd_rek_aset_id" class="col-form-label s-12 col-md-2"><strong>Rek. Aset :</strong></label>
                                <div class="col-md-8 p-0 mb-2">
                                    <select name="sikd_rek_aset_id" id="sikd_rek_aset_id" placeholder="" class="form-control r-0 s-12 select2">
                                        <option value="">&nbsp;</option>
                                        @foreach($rekAsets as $key=>$rekAset)
                                        <option value="{{ $rekAset->id }}"@if($tmrekening_akun_kelompok_jenis_objek_rincian_sub->sikd_rek_aset_id == $rekAset->id) selected="selected"@endif>{{ '['.$rekAset->kd_rek_rincian_obj.'] '.$rekAset->nm_rek_rincian_obj }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group m-0">
                                <label for="sikd_rek_utang_id" class="col-form-label s-12 col-md-2"><strong>Rek. Utang :</strong></label>
                                <div class="col-md-8 p-0 mb-2">
                                    <select name="sikd_rek_utang_id" id="sikd_rek_utang_id" placeholder="" class="form-control r-0 s-12 select2">
                                        <option value="">&nbsp;</option>
                                        @foreach($rekUtangs as $key=>$rekUtang)
                                        <option value="{{ $rekUtang->id }}"@if($tmrekening_akun_kelompok_jenis_objek_rincian->sikd_rek_utang_id == $rekUtang->id) selected="selected"@endif>{{ '['.$rekUtang->kd_rek_rincian_obj.'] '.$rekUtang->nm_rek_rincian_obj }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="card mt-2">
                <div class="card-header">
                    <h6>Keterkaitan Rekening SAP</h6>
                </div>
                <div class="card-body no-b">
                    <div class="form-row form-inline">
                        <div class="col-md-12">
                            <div class="form-group m-0">
                                <label for="tmsikd_rekening_lra_id" class="col-form-label s-12 col-md-2"><strong>Rek. LRA :</strong></label>
                                <div class="col-md-8 p-0 mb-2">
                                    <select name="tmsikd_rekening_lra_id" id="tmsikd_rekening_lra_id" placeholder="" class="form-control r-0 s-12 select2">
                                        <option value="">&nbsp;</option>
                                        @foreach($tmsikd_rekening_lras as $key=>$tmsikd_rekening_lra)
                                        <option value="{{ $tmsikd_rekening_lra->id }}"@if($tmrekening_akun_kelompok_jenis_objek_rincian_sub->tmsikd_rekening_lra_id == $tmsikd_rekening_lra->id) selected="selected"@endif>{{ '['.$tmsikd_rekening_lra->kd_rek_lra.'] '.$tmsikd_rekening_lra->nm_rek_lra }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group m-0">
                                <label for="tmsikd_rekening_lak_id" class="col-form-label s-12 col-md-2"><strong>Rek. LAK :</strong></label>
                                <div class="col-md-8 p-0 mb-2">
                                    <select name="tmsikd_rekening_lak_id" id="tmsikd_rekening_lak_id" placeholder="" class="form-control r-0 s-12 select2">
                                        <option value="">&nbsp;</option>
                                        @foreach($tmsikd_rekening_laks as $key=>$tmsikd_rekening_lak)
                                        <option value="{{ $tmsikd_rekening_lak->id }}"@if($tmrekening_akun_kelompok_jenis_objek_rincian_sub->tmsikd_rekening_lak_id == $tmsikd_rekening_lak->id) selected="selected"@endif>{{ '['.$tmsikd_rekening_lak->kd_rek_lak.'] '.$tmsikd_rekening_lak->nm_rek_lak }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group m-0">
                                <label for="tmsikd_rekening_neraca_id" class="col-form-label s-12 col-md-2"><strong>Rek. Neraca :</strong></label>
                                <div class="col-md-8 p-0 mb-2">
                                    <select name="tmsikd_rekening_neraca_id" id="tmsikd_rekening_neraca_id" placeholder="" class="form-control r-0 s-12 select2">
                                        <option value="">&nbsp;</option>
                                        @foreach($tmsikd_rekening_neracas as $key=>$tmsikd_rekening_neraca_id)
                                        <option value="{{ $tmsikd_rekening_neraca_id->id }}"@if($tmrekening_akun_kelompok_jenis_objek_rincian_sub->tmsikd_rekening_neraca_id == $tmsikd_rekening_neraca_id->id) selected="selected"@endif>{{ '['.$tmsikd_rekening_neraca_id->kd_rek_neraca.'] '.$tmsikd_rekening_neraca_id->nm_rek_neraca }}</option>
                                        @endforeach
                                    </select>
                                </div>
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