@extends('layouts.template')

@section('title', 'Setting Rekening Sub Rincian Object , Nama Rincian Object')
@section('content')  
@include('layouts._includes.toolbar')
<div class="page bg-light">
    <div class="container-fluid my-3">
        <div class="alert alert-danger">  Setting sub rekening rincian sub rincian object .{{ $nama_rincian }}</div>
        <div class="card">
            <div class="card-body">
                <h3>Setting Akses {{ $nama_rincian }}</h3>
                <br />
                <br /> 
                <div class="form-row form-inline">
                    <div class="col-md-12">
                        <nav>
                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                                    role="tab" aria-controls="nav-home" aria-selected="true">Setting Rekening
                                    Rincian</a>
                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                                    role="tab" aria-controls="nav-profile" aria-selected="false">List Rekening
                                    Rincian</a>
                            </div>
                        </nav>
                        <br />
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                aria-labelledby="nav-home-tab">


                                <div class="form-group m-0">
                                    <label for="notsetting" class="col-form-label s-12 col-md-3"><strong>Filter By Belum
                                            Di setting
                                            Satker
                                            :</strong></label>
                                    <div class="col-md-5 p-0 mb-2">
                                        <select name="notsetting" id="notsetting" class="form-control select2 " required
                                            onchange="selectOnChange()">
                                            <option value="0">Semua Object Rincian Setting</option>
                                            <option value="1">Lihat Yang Belum di Sett</option>
                                            <option value="2">Yang Sudah Di Setting</option>
                                        </select>
                                    </div>

                                </div>
                                <div class="form-group m-0">
                                    <div class="col-md-5 p-0 mb-2">
                                        * ) untuk mengedit satker cukup checklist dan tekan tombol set.
                                        <br /><br />
                                        <hr />
                                        <a class="btn-primary btn-sm" title="Simpan Data" id="btnSave" href="#"
                                            onclick="javascript:save_rek()"><i class="fa fa-save"></i> Set Rekening
                                            Satker <span id="txtSave"></span></a>

                                        <a class="btn-warning btn-sm" title="Batalkan" id="btnCancel" href="#"
                                            onclick="javascript:confirm_cancel()"><i class="fa fa-refresh"></i>
                                            Batalkan</a>
                                        <hr />

                                    </div>
                                </div>

                            </div>
                            <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                aria-labelledby="nav-profile-tab">
                                <small><i>Jika Level akses OPD = Kosong Silahkan tambahkan Pada rekening rincian dengan
                                        memmilih
                                        list opd di bawah .</i></small>
                                <div class="form-group m-0">
                                    <label for="tmrekening_akun_id" class="col-form-label s-12 col-md-3"><strong>Filter
                                            By Opd /
                                            Satker
                                            :</strong></label>
                                    <div class="col-md-5 p-0 mb-2">
                                        <select name="tmsikd_satker_id" id="tmsikd_satker_id"
                                            class="form-control select2 " required onchange="selectOnChange()">
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


                            </div>
                        </div>
                        <br /><br />


                    </div>
                </div>
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
            url: "{{ route('settingrek.api_data_setting_sub',$rincian_id) }}",
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
            {data: 'kd_rek_rincian_objek_sub', name: 'kd_rek_rincian_objek_sub'},
            {data: 'nm_rek_rincian_objek_sub', name: 'nm_rek_rincian_objek_sub'},
            {data: 'nm_satker', name: 'nm_satker',orderable: false, searchable: false},
           
        ]
    });
    //if change data 

    function selectOnChange()
    {
       table.ajax.reload();   
    }
 
    @include('layouts._includes.tablechecked')
    
    function del_cancel(){
        var c = new Array();
        $("input:checked").each(function(){ c.push($(this).val()); });
        if(c.length == 0){
            $.alert("Silahkan nama dan kode rekening yang akan di batalkan .");
        }else{
            $.post("{{ route('settingrek.batalkan_sub', ':id') }}", {'_method' : 'POST', 'id' : c}, function(data) {
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
       $.post("{{ route('settingrek.update_rincian_sub', ':id') }}",
                 {
                   "_method" : "PATCH", "id": c,'satker_id': satker_id     
                 }, 
            function(data) {
                $('#datatable').DataTable().ajax.reload();  
                $('#modal_satker').modal('hide');   
                $.alert("Data Set rekening berhasil di simpan silahkan lihat hasil nya di tab list rekenign rincian","Success"); 
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
$('#nav-profile-tab').click(function(){
     $('#notsetting').val(2); 
     $('#tmsikd_satker_id').val('');
     selectOnChange();  
})

     
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
                            <button class="btn btn-primary btn-xs" id="simpandata"><i class="fa fa-save"></i>Simpan
                                Data</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection