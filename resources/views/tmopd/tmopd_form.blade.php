<form action="{{ $action }}" method="POST" id="form">
    @csrf
    {{ method_field($method_field) }}
    <div class="card-body">
        <div class="form-group form-show-validation row">
            <label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Kode <span
                    class="required-label">*</span></label>
            <div class="col-sm-8">
                <input name="kode" type="number" class="form-control" id="kode" placeholder="Kode Satuan Kerja"
                    value="{{ $kode }}">
            </div>
        </div>
        <div class="form-group form-show-validation row">
            <label for="satker" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Nama Satuan Kerja <span
                    class="required-label">*</span></label>
            <div class="col-sm-8">
                <input type="text" class="form-control" placeholder="Masukan Nama Satuan kerja" aria-label="username"
                    aria-describedby="username-addon" id="n_opd" name="n_opd" required value="{{ $n_opd }}">
            </div>
        </div>

        <div class="form-group form-show-validation row">
            <label for="password" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Keterangan (Sifat Opsional)<span
                    class="required-label">*</span></label>
            <div class="col-sm-8">
                <input type="text" class="form-control" id="ket" name="ket" placeholder="Ket " required
                    value="{{ $ket }}">
            </div>
        </div>

        <div class="form-group form-show-validation row">
            <label for="password" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Aktive<span
                    class="required-label">*</span></label>
            <div class="col-sm-8">
                <select class="form-control" name="active" id="active">
                    @php
                    $active = [
                    1 =>'Active',
                    2 =>'Non Active'
                    ];
                    @endphp
                    @foreach ($active as $item => $val)
                    <option value="{{ $item }} @if($item == $active) 'selected'; @endif">{{ $val }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <div class="card-action">
        <div class="row">
            <div class="col-md-12">
                <button id="btnSave" class="btnSave btn btn-success" type="submit"><i
                        class="fa fa-save"></i>Simpan</button>
                <a href="#" class="btn btn-danger" id="cancel">Cancel</a>
            </div>
        </div>
    </div>
</form>

<script>
    $(function(){ 
        $('#cancel').on('click',function(e){
            e.preventDefault(); 
            $('.show_form').hide().slideUp();
        }); 
        
    $('#form').on('submit', function (event) {
        event.preventDefault(); 
            $('#alert').html('');
            $('#btnSave').attr('disabled', true); 
            url = "{{ route($route.'store') }}";
            $.post(url, $(this).serialize(), function(data){
                $('#alert').html("<div role='alert' class='alert alert-success alert-dismissible'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button><strong>Success!</strong> " + data.message + "</div>");
                $('#satkertb').DataTable().ajax.reload();
            }, "JSON").fail(function(data){
                err = ''; respon = data.responseJSON;
                $.each(respon.errors, function(index, value){
                    err += "<li>" + value +"</li>";
                });
                $('#alert').html("<div role='alert' class='alert alert-danger alert-dismissible'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button><strong>Error!</strong> " + respon.message + "<ol class='pl-3 m-0'>" + err + "</ol></div>");
            }).always(function(){
                $('#btnSave').removeAttr('disabled');
            }); 
    });
});   
</script>