@extends('layouts.page')

@section('content')
<div class="page bg-light">
    @include('layouts._includes.toolbar')
    <div class="container-fluid my-3">
        <div id="alert"></div>
        <div class="card">
            <div class="card-body no-b">
                <form class="needs-validation" id="form" method="POST" novalidate>
                    {{ method_field('POST') }}
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th width="40"></th>
                                <th width="130">Kode Rek. Akun ( <span class="text-danger">*</span> )</th>
                                <th>Nama Rek. Akun ( <span class="text-danger">*</span> )</th>
                                <th width="120">Kode Rek. Aset</th>
                                <th width="120">Kode Rek. Akrual</th>
                                <th width="120">Kode Rek. Utang</th>
                            </tr>
                        </thead>
                        <tbody id="vform">
                            <tr>
                                @include('layouts._includes.form.deleterow')
                                <td><input type="text" name="kd_rek_akun[]" id="kd_rek_akun" onkeypress="return number(event)" class="form-control r-0 s-12" autocomplete="off"/></td>
                                <td><input type="text" name="nm_rek_akun[]" class="form-control r-0 s-12" autocomplete="off"/></td>
                                <td><input type="text" name="kd_rek_aset[]" class="form-control r-0 s-12" autocomplete="off"/></td>
                                <td><input type="text" name="kd_rek_akrual[]" class="form-control r-0 s-12" autocomplete="off"/></td>
                                <td><input type="text" name="kd_rek_utang[]" class="form-control r-0 s-12" autocomplete="off"/></td>
                            </tr>
                        <tbody>
                    </table>
                    <a class="btn btn-outline-secondary btn-sm" title="Tambah baris" onclick="javascript:add_form()"><i class="icon-add"></i> Tambah Baris</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
    @include('layouts._includes.form.js_deleterow')

    function add(){
        $('#form').trigger('reset');
        $('#kd_rek_akun').focus();
    }
    add();

    function save(){ $('#form').submit(); }
    $('#form').on('submit', function (event) {
        if ($(this)[0].checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
        }else{
            $('#alert').html('');
            $('#btnSave').attr('disabled', true);

            url = "{{ route($route.'store') }}";
            $.post(url, $(this).serialize(), function(data){
                $('#alert').html("<div role='alert' class='alert alert-success alert-dismissible'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button><strong>Success!</strong> " + data.message + "</div>");
                add();
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

    // Proteksi Angka
    function number(evt) {
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))

        return false;
        return true;
    }
</script>
@endsection