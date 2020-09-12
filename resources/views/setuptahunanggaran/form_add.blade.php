@extends('layouts.page')
@section('content')
<div class="page bg-light">
    @include('layouts._includes.toolbar')
    <div class="container-fluid my-3">
        <div id="alert"></div>
        <div class="card no-b">
            <div class="card-body">
                <form class="needs-validation" id="form" method="POST" novalidate>
                    {{ method_field('POST') }}
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th width="10px"></th>
                                <th width="600px">Tahun ( * )</th>
                            </tr>
                        </thead>
                        <tbody id="vform">
                            <tr>
                                @include('layouts._includes.form.deleterow')
                                <td><input type="text" name="tahun[]" class="form-control r-0 s-12" autocomplete="off"></td>
                            </tr>
                        <tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
    function add(){
        $('#form').trigger('reset');
    }
    add();

    @include('layouts._includes.form.js_deleterow')

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
</script>
@endsection
