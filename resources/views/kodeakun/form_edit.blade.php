@extends('layouts.page')

@section('content')
<div class="page bg-light">
    @include('layouts._includes.toolbar')
    <div class="container-fluid my-3">
        <div id="alert"></div>
        <div class="card">
            <div class="card-body">
                <form class="needs-validation" id="form" method="POST" novalidate>
                    {{ method_field('PATCH') }}
                    <input type="hidden" id="id" name="id" value="{{ $tmrekening_akun->id }}"/>
                    <div class="form-row form-inline">
                        <div class="col-md-12">
                            <div class="form-group m-0">
                                <label for="kd_rek_akun" class="col-form-label s-12 col-md-2"><strong>Kode Rek. Akun <span class="text-danger ml-1"> * :</span></strong></label>
                                <input type="text" name="kd_rek_akun" id="kd_rek_akun" placeholder="" class="form-control r-0 s-12 col-md-5" value="{{ $tmrekening_akun->kd_rek_akun }}" autocomplete="off" required/>
                            </div>
                            <div class="form-group m-0">
                                <label for="nm_rek_akun" class="col-form-label s-12 col-md-2"><strong>Nama Rek. Akun <span class="text-danger ml-1"> * :</span></strong></label>
                                <input type="text" name="nm_rek_akun" id="nm_rek_akun" placeholder="" class="form-control r-0 s-12 col-md-5" value="{{ $tmrekening_akun->nm_rek_akun }}" autocomplete="off" required/>
                            </div>
                            <div class="form-group m-0">
                                <label for="kd_rek_aset" class="col-form-label s-12 col-md-2"><strong>Kode Rek. Aset :</strong></label>
                                <input type="text" name="kd_rek_aset" id="kd_rek_aset" placeholder="" class="form-control r-0 s-12 col-md-5" value="{{ $tmrekening_akun->kd_rek_aset }}" autocomplete="off"/>
                            </div>
                            <div class="form-group m-0">
                                <label for="kd_rek_akrual" class="col-form-label s-12 col-md-2"><strong>Kode Rek. Akrual :</strong></label>
                                <input type="text" name="kd_rek_akrual" id="kd_rek_akrual" placeholder="" class="form-control r-0 s-12 col-md-5" value="{{ $tmrekening_akun->kd_rek_akrual }}" autocomplete="off"/>
                            </div>
                            <div class="form-group m-0">
                                <label for="kd_rek_utang" class="col-form-label s-12 col-md-2"><strong>Kode Rek. Utang :</strong></label>
                                <input type="text" name="kd_rek_utang" id="kd_rek_utang" placeholder="" class="form-control r-0 s-12 col-md-5" value="{{ $tmrekening_akun->kd_rek_utang }}" autocomplete="off"/>
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