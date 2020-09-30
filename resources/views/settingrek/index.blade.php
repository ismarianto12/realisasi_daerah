@extends('layouts.template')

@section('title', 'Setting rekening rincian objek per opd')
@section('content')
 
<div class="page bg-light">
    <div class="container-fluid my-3">
        <div class="alert alert-danger"> Mendeskripsikan rekening object mana saja yang bisa diakses level dinas .</div>
            
        <nav>
            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Setting Satker rekening</a>
                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">List Rekeing OPD</a>
            </div>
        </nav> 

        <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                <div class="card">
                    <div class="card-body">
                        <div class="form-row form-inline">
                            <div class="col-md-12">
                                <div class="form-group m-0">
                                    <label for="tmrekening_akun_id" class="col-form-label s-12 col-md-3"><strong>Filter By Opd /
                                            Satker
                                            :</strong></label>
                                    <div class="col-md-5 p-0 mb-2">
                                        <select name="tmsikd_satker_id" id="tmsikd_satker_id" class="form-control select2 "
                                            required onchange="selectOnChange()">
                                            <option value="0">Semua Satker (OPD)</option>
                                            @foreach($tmsikd_satkers as $tmsikd_satker)
                                            <option value="{{ $tmsikd_satker->id }}">
                                                [{{ $tmsikd_satker->kode }}] &nbsp; {{ $tmsikd_satker->nama }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                             
                                
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
                                <small><i>Jika Level akses OPD = Kosong Silahkan tambahkan Pada rekening rincian dengan memmilih
                                        list opd di bawah .</i></small>
                               
                            </div>
                        </div>

                        <button class="btn btn-primary"><i class="fa fa-save"></i>Simpan </button>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="card-body no-b">
                        <div id="alert"></div>
                        <div class="table-responsive">
                            * ) memeberikan batasan pada setiap opd yang login
                            <table id="datatable" class="table table-bordered table-striped" style="width:100%">
                                <thead>
                                    <th width="30"></th>
                                    <th width="130">Kode Rek. Rincian Obj</th>
                                    <th>Nama Rek. Rincian Obj</th>
                                    <th width="120">Level akses opd</th>
                                    <th width="120">Klasifikasi</th>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
           
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                
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
                                <small><i>Jika Level akses OPD = Kosong Silahkan tambahkan Pada rekening rincian dengan memmilih
                                        list opd di bawah .</i></small>
                                <div class="form-group m-0">
                                    <label for="tmrekening_akun_id" class="col-form-label s-12 col-md-3"><strong>Filter By Opd /
                                            Satker
                                            :</strong></label>
                                    <div class="col-md-5 p-0 mb-2">
                                        <select name="tmsikd_satker_id" id="tmsikd_satker_id" class="form-control select2 "
                                            required onchange="selectOnChange()">
                                            <option value="0">Semua Satker (OPD)</option>
                                            @foreach($tmsikd_satkers as $tmsikd_satker)
                                            <option value="{{ $tmsikd_satker->id }}">
                                                [{{ $tmsikd_satker->kode }}] &nbsp; {{ $tmsikd_satker->nama }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <hr />
                                <div class="form-group m-0">
                                    <label for="notsetting" class="col-form-label s-12 col-md-3"><strong>Filter By Belum Di setting
                                            Satker
                                            :</strong></label>
                                    <div class="col-md-5 p-0 mb-2">
                                        <select name="notsetting" id="notsetting" class="form-control select2 "
                                            required onchange="selectOnChange()">  
                                            <option value="0">Semua Object Rincian Setting</option>
                                            <option value="1">Lihat Yang Belum di Sett</option>  
                                            <option value="2">Yang Sudah Di Setting</option>
                                        </select>
                                    </div>
                                </div>
                
                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card mt-2">
                    <div class="card-body no-b">
                        <div id="alert"></div>
                        <div class="table-responsive">
                            * ) memeberikan batasan pada setiap opd yang login
                            <table id="table_dua" class="table table-bordered table-striped" style="width:100%">
                                <thead>
                                    <th width="30"></th>
                                    <th width="130">Kode Rek. Rincian Obj</th>
                                    <th>Nama Rek. Rincian Obj</th>
                                    <th width="120">Level akses opd</th>
                                    <th width="120">Klasifikasi</th>
                                </thead>
                                <tbody></tbody>
                            </table>
                        </div>
                    </div>
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
    $('#btnCreate').on('click', function(){
        if($('#tmrekening_akun_id').val() == 0 || $('#tmrekening_akun_kelompok_id').val() == 0 || $('#tmrekening_akun_kelompok_jenis_id').val() == 0 || $('#tmrekening_akun_kelompok_jenis_objek_id').val() == 0) {
            event.preventDefault();
            event.stopPropagation();
            $.alert("Silahkan memilih <strong>Rek. Akun</strong>, <strong>Rek. Kelompok</strong>, <strong>Rek. Jenis</strong> dan <strong>Rek. Obj</strong> yang akan ditambah.");
        }
    });

    var table = $('#datatable').DataTable({
        processing: true,
        serverSide: true,
        order: [1, 'asc'],
        pageLength: 50,
        ajax: {
            url: "{{ route('settingrek.api_data_setting') }}",
            method: 'POST',
            data:function(data){
                data.tmsikd_satker_id   = $('#tmsikd_satker_id').val();
                data.tmrekening_akun_id = $('#tmrekening_akun_id').val();
                data.tmrekening_akun_kelompok_id = $('#tmrekening_akun_kelompok_id').val();
                data.tmrekening_akun_kelompok_jenis_id = $('#tmrekening_akun_kelompok_jenis_id').val();
                data.tmrekening_akun_kelompok_jenis_objek_id = $('#tmrekening_akun_kelompok_jenis_objek_id').val();
                data.notsetting   = $('#notsetting').val();
            }
        },
        columns: [
            {data: 'id', name: 'id', orderable: false, searchable: false, align: 'center', className: 'text-center'},
            {data: 'kd_rek_rincian_obj', name: 'kd_rek_rincian_obj'},
            {data: 'nm_rek_rincian_obj', name: 'nm_rek_rincian_obj'},
            {data: 'nm_satker', name: 'nm_satker',orderable: false, searchable: false},
            {data: 'klasifikasi_rek', name: 'klasifikasi_rek'},
        
        ]
    });
    //if change data 
    var table = $('#table_dua').DataTable({
        processing: true,
        serverSide: true,
        order: [1, 'asc'],
        pageLength: 50,
        ajax: {
            url: "{{ route('settingrek.api_data_setting') }}",
            method: 'POST',
            data:function(data){
                data.tmsikd_satker_id   = $('#tmsikd_satker_id').val();
                data.tmrekening_akun_id = $('#tmrekening_akun_id').val();
                data.tmrekening_akun_kelompok_id = $('#tmrekening_akun_kelompok_id').val();
                data.tmrekening_akun_kelompok_jenis_id = $('#tmrekening_akun_kelompok_jenis_id').val();
                data.tmrekening_akun_kelompok_jenis_objek_id = $('#tmrekening_akun_kelompok_jenis_objek_id').val();
                data.notsetting   = $('#notsetting').val();
            }
        },
        columns: [
            {data: 'id', name: 'id', orderable: false, searchable: false, align: 'center', className: 'text-center'},
            {data: 'kd_rek_rincian_obj', name: 'kd_rek_rincian_obj'},
            {data: 'nm_rek_rincian_obj', name: 'nm_rek_rincian_obj'},
            {data: 'nm_satker', name: 'nm_satker',orderable: false, searchable: false},
            {data: 'klasifikasi_rek', name: 'klasifikasi_rek'},
        
        ]
    });

    function selectOnChange()
    {
       table.ajax.reload();   
    }
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

    $('#tmrekening_akun_kelompok_jenis_objek_id').on('change', function(){
        val = $(this).val();
       // alert(val);
        option = "<option value=''>&nbsp;</option>";
        if(val == ""){
            $('#tmrekening_akun_kelompok_jenis_objek_rincian_id').html(option);
            selectOnChange();
        }else{
            $('#tmrekening_akun_kelompok_jenis_objek_rincian_id').html("<option value=''>Loading...</option>");
            url = "{{ route('rekening.kodesubrincianobjek.kodeobjekrincianByKodeobjek', ':id') }}".replace(':id', val);
            $.get(url, function(data){
                if(data){
                    $.each(data, function(index, value){
                        option += "<option value='" + value.id + "'>[" + value.kd_rek_rincian_obj +"] " + value.nm_rek_rincian_obj +"</li>";
                    });
                    $('#tmrekening_akun_kelompok_jenis_objek_rincian_id').empty().html(option);
                    $("#tmrekening_akun_kelompok_jenis_objek_rincian_id").val($("#tmrekening_akun_kelompok_jenis_objek_id option:first").val()).trigger("change.select2");
                }else{
                    $('#tmrekening_akun_kelompok_jenis_objek_rincian_id').html(option);
                    selectOnChange();
                }
            }, 'JSON');
        }
    });

    @include('layouts._includes.tablechecked')
    
    function del_cancel(){
        var c = new Array();
        $("input:checked").each(function(){ c.push($(this).val()); });
        if(c.length == 0){
            $.alert("Silahkan nama dan kode rekening yang akan di batalkan .");
        }else{
            $.post("{{ route('settingrek.batalkan', ':id') }}", {'_method' : 'POST', 'id' : c}, function(data) {
                $('#datatable').DataTable().ajax.reload();
            }, "JSON").fail(function(){
                $('#datatable').DataTable().ajax.reload();
                reload(); 
            });
        }
    }

    function save_rek(){
        var c          = new Array();
        var satker_id  = $('#tmsikd_satker_id_pilih').val();
        $("input:checked").each(function(){ c.push($(this).val()); });
        if(c.length == 0){
            $.alert("Silahkan checklist dulu list rincian object rekening nya gays .","Oops ,wess ");
        }else{
        $('#modal_satker').modal('show');   
        }
        
$('#simpandata').on('click', function (event) { 
    var c          = new Array();
    var satker_id  = $('#tmsikd_satker_id_pilih').val();
    $("input:checked").each(function(){ c.push($(this).val()); });
    if(c.length == 0){
        $.alert("Silahkan checklist dulu list rincian object rekening nya gays .","Perhatian ");
    }else{
       $.post("{{ route($route.'update', ':id') }}",
                 {
                   "_method" : "PATCH", "id": c,'satker_id': satker_id     
                 }, 
            function(data) {
                $('#datatable').DataTable().ajax.reload();  
                $('#modal_satker').modal('hide');   
                selectOnChange();
            }, "JSON").fail(function(data){
                err = ''; respon = data.responseJSON;
                $.each(respon.errors, function(index, value){
                    err += "<li>" + value +"</li>";
                });
                $.alert("<div role='alert' class='alert alert-danger alert-dismissible'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button><strong>Error!</strong> " + respon.message + "<ol class='pl-3 m-0'>" + err + "</ol></div>","Error Gays");
            }).always(function(){
                $('#btnSave').removeAttr('disabled');
            });
    } 

});  
    }
     
</script>
//satker model
<div class="modal fade" id="modal_satker" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="width: auto;">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"><i class="fa fa-check"></i> Pilih data Satuan OPD
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="alert"></div>
                <div class="form-row form-inline">
                    <div class="col-md-12">
                        <div class="form-group m-0">
                            <label for="tmrekening_akun_id" class="col-form-label s-12 col-md-3"><strong>Filter By Opd /
                                    Satker
                                    :</strong></label>
                            <div class="col-md-5 p-0 mb-2">
                                <select name="tmsikd_satker_id_pilih" id="tmsikd_satker_id_pilih"
                                    class="form-control select2 " required>
                                    <option value="0">Semua Satker</option>
                                    @foreach($tmsikd_satkers as $tmsikd_satker)
                                    <option value="{{ $tmsikd_satker->id }}">
                                        [{{ $tmsikd_satker->kode }}] &nbsp; {{ $tmsikd_satker->nama }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group m-0">
                            <button class="btn btn-primary" id="simpandata">Simpan Data</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection