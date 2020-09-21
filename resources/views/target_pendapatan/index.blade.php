@extends('layouts.template')
@section('content')
<div class="page bg-light">
    @include('layouts._includes.toolbar')
    <div class="container-fluid my-3">
        <div class="card">
            <div class="card-body">
                <div class="form-row form-inline">
                    <div class="col-md-12">
                        <div class="form-group m-0">
                            <label for="tmrekening_akun_id" class="col-form-label s-12 col-md-3"><strong>Rek. Akun
                                    :</strong></label>
                            <div class="col-md-5 p-0 mb-2">
                                <select name="tmrekening_akun_id" class="form-control r-0 s-12 select2"
                                    id="tmrekening_akun_id">
                                    <option value="0">&nbsp;</option>
                                    @foreach($tmrekening_akuns as $key=>$tmrekening_akun)
                                    <option value="{{ $tmrekening_akun->id }}">
                                        {{ '['.$tmrekening_akun->kd_rek_akun.'] '.$tmrekening_akun->nm_rek_akun }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group m-0">
                            <label for="tmrekening_akun_kelompok_id" class="col-form-label s-12 col-md-3"><strong>Rek.
                                    Kelompok :</strong></label>
                            <div class="col-md-5 p-0 mb-2">
                                <select name="tmrekening_akun_kelompok_id" class="form-control r-0 s-12 select2"
                                    id="tmrekening_akun_kelompok_id" onchange="selectOnChange();">
                                    <option value="0">&nbsp;</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group m-0">
                            <label for="tmrekening_akun_kelompok_jenis_id"
                                class="col-form-label s-12 col-md-3"><strong>Rek. Jenis</strong></label>
                            <div class="col-md-5 p-0 mb-2">
                                <select name="tmrekening_akun_kelompok_jenis_id" class="form-control r-0 s-12 select2"
                                    id="tmrekening_akun_kelompok_jenis_id" onchange="selectOnChange();">
                                    <option value="0">&nbsp;</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group m-0">
                            <label for="tmrekening_akun_kelompok_jenis_objek_id"
                                class="col-form-label s-12 col-md-3"><strong>Rek. Obj :</strong></label>
                            <div class="col-md-5 p-0 mb-2">
                                <select name="tmrekening_akun_kelompok_jenis_objek_id"
                                    class="form-control r-0 s-12 select2" id="tmrekening_akun_kelompok_jenis_objek_id"
                                    onchange="selectOnChange();">
                                    <option value="0">&nbsp;</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group m-0">
                            <label for="tmrekening_akun_kelompok_jenis_objek_rincian_id"
                                class="col-form-label s-12 col-md-3"><strong>Rek. Rincian Obj :</strong></label>
                            <div class="col-md-5 p-0 mb-2">
                                <select name="tmrekening_akun_kelompok_jenis_objek_rincian_id"
                                    class="form-control r-0 s-12 select2"
                                    id="tmrekening_akun_kelompok_jenis_objek_rincian_id" onchange="selectOnChange();">
                                    <option value="0">&nbsp;</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mt-2">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-bordered table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Jumlah Target </th>
                                <th>Jumlah Anggaran Perubahan</th>
                                <th>Jenis PAD </th>
                                <th>Rincian </th>
                                <th>Tahun </th>
                                <th>Ket </th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script type="text/javascript" src="{{ asset('assets/template/js/plugin/datatables/datatables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/template/js/plugin/datatables/dataTables.rowGroup.min.js') }}">
</script>

<script type="text/javascript">
    var table = $('#datatable').dataTable({
        processing: true,
        serverSide: true,
        order: [1, 'asc'],
        pageLength: 50,
        ajax: {
            url: "{{ route($route.'api') }}",
            method: 'POST',
            data:function(data){ 
                data.tmrekening_akun_kelompok_jenis_objek_id = $('#tmrekening_akun_kelompok_jenis_objek_rincian_id').val();
             }
        },
        columns: [
            {data: 'id', name: 'id', orderable: false, searchable: false, align: 'center', className: 'text-center'},
            {data : 'jumlah',name : 'jumlah'},
            {data : 'jumlah_perubahan',name : 'jumlah_perubahan'},
            {data : 'rekneing_rincian_akun_jenis_objek_id',name : 'rekneing_rincian_akun_jenis_objek_id'},
            {data : 'dasar_hukum',name : 'dasar_hukum'},
            {data : 'keterangan',name : 'keterangan'},
            {data : 'tgl_perubahan',name : 'tgl_perubahan'} 
        ] 
    });
    @include('layouts._includes.tablechecked')
    
    function del(){
        var c = new Array();
        $("input:checked").each(function(){ c.push($(this).val()); });
        if(c.length == 0){
            $.alert("Silahkan memilih data yang akan dihapus.");
        }else{
            $.post("{{ route($route.'destroy', ':id') }}", {'_method' : 'DELETE', 'id' : c}, function(data) {
                table.api().ajax.reload();
            }, "JSON").fail(function(){
                reload();
            });
        }
    }
    //select data in list
    $(function(){ 
        $('#tmrekening_akun_id').on('change', function(){
            val = $(this).val();
            option = "<option value=''>&nbsp;</option>";
            if(val == ""){
                $('#tmrekening_akun_kelompok_id').html(option);
                $('#tmrekening_akun_kelompok_jenis_id').html(option);
                $('#tmrekening_akun_kelompok_jenis_objek_id').html(option);
                selectOnChange();
            }else{
                $('#tmrekening_akun_kelompok_id').html("<option value=''>Loading...</option>");
                url = "{{ route('rekening.kodejenis.kodekelompokByKodeakun', ':id') }}".replace(':id', val);
                $.get(url, function(data){
                    if(data){
                        $.each(data, function(index, value){
                            option += "<option value='" + value.id + "'>[" + value.kd_rek_kelompok +"] " + value.nm_rek_kelompok +"</li>";
                        });
                        $('#tmrekening_akun_kelompok_id').empty().html(option);
    
                        $("#tmrekening_akun_kelompok_id").val($("#tmrekening_akun_kelompok_id option:first").val()).trigger("change.select2");
                    }else{
                        $('#tmrekening_akun_kelompok_id').html(option);
                        $('#tmrekening_akun_kelompok_jenis_id').html(option);
                        $('#tmrekening_akun_kelompok_jenis_objek_id').html(option);
                        selectOnChange();
                    }
                }, 'JSON');
            }
            $('#tmrekening_akun_kelompok_id').change();
        });
    
        $('#tmrekening_akun_kelompok_id').on('change', function(){
            val = $(this).val();
            option = "<option value=''>&nbsp;</option>";
            if(val == ""){
                $('#tmrekening_akun_kelompok_jenis_id').html(option);
                $('#tmrekening_akun_kelompok_jenis_objek_id').html(option);
                selectOnChange();
            }else{
                $('#tmrekening_akun_kelompok_jenis_id').html("<option value=''>Loading...</option>");
                url = "{{ route('rekening.kodeobjek.kodejenisByKodekelompok', ':id') }}".replace(':id', val);
                $.get(url, function(data){
                    if(data){
                        $.each(data, function(index, value){
                            option += "<option value='" + value.id + "'>[" + value.kd_rek_jenis +"] " + value.nm_rek_jenis +"</li>";
                        });
                        $('#tmrekening_akun_kelompok_jenis_id').empty().html(option);
    
                        $("#tmrekening_akun_kelompok_jenis_id").val($("#tmrekening_akun_kelompok_jenis_id option:first").val()).trigger("change.select2");
                    }else{
                        $('#tmrekening_akun_kelompok_jenis_id').html(option);
                        $('#tmrekening_akun_kelompok_jenis_objek_id').html(option);
                        selectOnChange();
                    }
                }, 'JSON');
            }
        });
    
        $('#tmrekening_akun_kelompok_jenis_id').on('change', function(){
            val = $(this).val();
            option = "<option value=''>&nbsp;</option>";
            if(val == ""){
                $('#tmrekening_akun_kelompok_jenis_objek_id').html(option);
                selectOnChange();
            }else{
                $('#tmrekening_akun_kelompok_jenis_objek_id').html("<option value=''>Loading...</option>");
                url = "{{ route('rekening.koderincianobjek.kodeobjekByKodejenis', ':id') }}".replace(':id', val);
                $.get(url, function(data){
                    if(data){
                        $.each(data, function(index, value){
                            option += "<option value='" + value.id + "'>[" + value.kd_rek_obj +"] " + value.nm_rek_obj +"</li>";
                        });
                        $('#tmrekening_akun_kelompok_jenis_objek_id').empty().html(option);
    
                        $("#tmrekening_akun_kelompok_jenis_objek_id").val($("#tmrekening_akun_kelompok_jenis_objek_id option:first").val()).trigger("change.select2");
                    }else{
                        $('#tmrekening_akun_kelompok_jenis_objek_id').html(option);
                        selectOnChange();
                    }
                }, 'JSON');
            }
        });   
    $('#btnCreate').on('click', function(){
        if($('#tmrekening_akun_kelompok_jenis_objek_rincian_id').val() == 0 ){  
            event.preventDefault();
            event.stopPropagation();
            $.alert("Silahkan memilih <strong>Rek. object rincian terlebih dahulu</strong>, pada data yang akan ditambah.");
        } 
  }); 

});
    function selectOnChange(){
        table.api().ajax.reload();
        var url = "{{ route($route.'create') }}?rincian_obj_id=" + $('#tmrekening_akun_kelompok_jenis_objek_rincian_id').val();
        $('#btnCreate').attr('href',url);
    }
</script>
@endsection