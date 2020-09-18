@extends('layouts.template')

@section('title','Report Pendapatan')
@section('content')


<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold">Laporan Penerimaaan</h2>
                <h5 class="text-white op-7 mb-2"> Pendapatapan Daerah </h5>
            </div>
            <div class="ml-md-auto py-2 py-md-0">
                <a href="#" class="btn btn-white btn-border btn-round mr-2">Rerport Penerimaan</a>
                <a href="#" to="#" class="tambah btn btn-secondary btn-round">Data Penerimaaan </a>
            </div>
        </div>
    </div>
</div>
<div class="page bg-light">
    <div class="container-fluid my-3">
        <div class="card">
            <div class="card-body">
                <div class="form-group form-show-validation row">
                    <label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Tahun <span
                            class="required-label">*</span></label>
                    <div class="col-sm-6">
                        <select name="tahun_id" id="tahun_id" placeholder="" class="form-control select2 r-0 light"
                            autocomplete="off" onchange="selectOnChange()">
                            @foreach ($tahuns as $tahun)
                            <option value="{{$tahun->id}}" @if($tahun_id==$tahun->id)
                                selected="selected"@endif>{{$tahun->tahun}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group form-show-validation row">
                    <label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Satuan Kerja
                        <span class="required-label">*</span></label>
                    <div class="col-sm-6">
                        <select name="tmsikd_satker_id" id="tmsikd_satker_id" class="form-control select2 " required
                            onchange="selectOnChange('tmsikd_satker_id')">
                            @foreach($tmsikd_satkers as $tmsikd_satker)
                            <option value="{{ $tmsikd_satker->id }}" @if($tmsikd_satker_id==$tmsikd_satker->id)
                                selected="selected"@endif>
                                [{{ $tmsikd_satker->kode }}] &nbsp; {{ $tmsikd_satker->nama }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="card-header">
                    <h6>List Rekening Mata Anggaran</h6>
                </div>
                <div class="card-body">
                    <div class="form-row form-inline">
                        <div class="col-md-12">


                            <div class="form-group form-show-validation row">
                                <label for="name" class="col-md-3 text-right">Periode (Tanggal) <span
                                        class="required-label">*</span></label>
                                <div class="col-sm-4">
                                    <input type="date" id="dari" class="form-control" placeholder="Dari .."
                                        value="{{ $dari }}">
                                </div>
                                S /D
                                <div class="col-sm-4">
                                    <input type="date" class="form-control" id="sampai" placeholder="Sampai dengan"
                                        value="{{ $sampai }}">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group m-0">
                                    <label for="tmrekening_akun_id" class="col-form-label s-12 col-md-3"><strong>Rek.
                                            Akun :</strong></label>
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
                                    <label for="tmrekening_akun_kelompok_id"
                                        class="col-form-label s-12 col-md-3"><strong>Rek. Kelompok :</strong></label>
                                    <div class="col-md-5 p-0 mb-2">
                                        <select name="tmrekening_akun_kelompok_id" class="form-control r-0 s-12 select2"
                                            id="tmrekening_akun_kelompok_id">
                                            <option value="0">&nbsp;</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group m-0">
                                    <label for="tmrekening_akun_kelompok_jenis_id"
                                        class="col-form-label s-12 col-md-3"><strong>Rek. Jenis</strong></label>
                                    <div class="col-md-5 p-0 mb-2">
                                        <select name="tmrekening_akun_kelompok_jenis_id"
                                            class="form-control r-0 s-12 select2"
                                            id="tmrekening_akun_kelompok_jenis_id">
                                            <option value="0">&nbsp;</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group m-0">
                                    <label for="tmrekening_akun_kelompok_jenis_objek_id"
                                        class="col-form-label s-12 col-md-3"><strong>Rek. Obj :</strong></label>
                                    <div class="col-md-5 p-0 mb-2">
                                        <select name="tmrekening_akun_kelompok_jenis_objek_id"
                                            class="form-control r-0 s-12 select2"
                                            id="tmrekening_akun_kelompok_jenis_objek_id" onchange="selectOnChange();">
                                            <option value="0">&nbsp;</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <button id="tampilkan" class="btn btn-primary"><i class="fa fa-search"></i>Tampilkan</button>
            </div>


        </div>
    </div>

    <div id="btn_cetak"></div>
    <div class="card">
        <div class="card-body">
            <table id="datatable" class="table table-striped no-b" style="width:100%">
                <thead>
                    <tr>
                        <th width="5%">&nbsp;</th>
                        <th width="10%">Kode Rekening</th>
                        <th width="35%">Uraian</th>
                        <th width="10%">Volume Transaksi</th>
                        <th width="15%">Jumlah Transaksi</th>
                        <th width="15%">Tanggal Lapor</th>
                    </tr>
                </thead>
                <tbody></tbody>
            </table>
        </div>
    </div>
</div>


@section('script')
<script type="text/javascript" src="{{ asset('assets/template/js/plugin/datatables/datatables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/template/js/plugin/datatables/dataTables.rowGroup.min.js') }}">
</script>

<script type="text/javascript"
    src="{{  asset('assets/template/js/plugin/datatables/button/dataTables.buttons.min.js') }}"></script>
<script type="text/javascript" src="{{  asset('assets/template/js/plugin/datatables/button/jszip.min.js') }}"></script>
<script type="text/javascript" src="{{  asset('assets/template/js/plugin/datatables/button/pdfmake.min.js') }}">
</script>
<script type="text/javascript" src="{{  asset('assets/template/js/plugin/datatables/button/vfs_fonts.js') }}"></script>
<script type="text/javascript" src="{{  asset('assets/template/js/plugin/datatables/button/buttons.html5.min.js') }}">
</script>

<script type="text/javascript">
    var table = $('#datatable').dataTable({
        dom: 'Bfrtip',
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
        ],
        processing: true,
        serverSide: true,
        ordering: false,
        pageLength: 10,
        lengthChange: false,
        ajax: {
            url: "{{ route('reportpendapatan_api') }}",
            method: 'POST',
            data:function(data){
                
            data.tahun_id  = $('#tahun_id').val();
            data.tmsikd_satker_id  = $('#tmsikd_satker_id').val();
            data.dari  = $('#dari').val();
            data.sampai  = $('#sampai').val();
            data.tmrekening_akun_id  = $('#tmrekening_akun_id').val();
            data.tmrekening_akun_kelompok_id  = $('#tmrekening_akun_kelompok_id').val();
            data.tmrekening_akun_kelompok_jenis_id  = $('#tmrekening_akun_kelompok_jenis_id').val();
            data.tmrekening_akun_kelompok_jenis_objek_id  = $('#tmrekening_akun_kelompok_jenis_objek_id').val();
        } 
        },  
        columns: [ 
            {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false, className: 'text-center'},
            {data: 'kd_rek_rincian_objek_sub', name: 'kd_rek_rincian_objek_sub'},
            {data: 'nm_rek_rincian_objek_sub', name: 'nm_rek_rincian_objek_sub'},
            {data: 'volume', name: 'volume', className: 'text-right'},  
            {data: 'jumlah', name: 'jumlah', className: 'text-right'},  
            {data: 'tgl_lapor', name: 'tgl_lapor', className: 'text-right'},  
        ], 
        rowGroup: {
            startRender: function(rows, group){
                return $('<tr/>')
                    .append('<td/>')
                    .append(group)
            },
            endRender: null,
            dataSrc: ['kd_rek_jenis', 'kd_rek_obj', 'kd_rek_rincian_obj']
        }
    });
    @include('layouts._includes.tablechecked')
 
//if data change fiunction 

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


//tampilkan data 
$('#btn_cetak').html();
$(function(){
  $('#tampilkan').on('click',function(){        
        tahun_id   = $('#tahun_id').val();
        tmsikd_satker_id   = $('#tmsikd_satker_id').val();
        dari   = $('#dari').val();
        sampai   = $('#sampai').val();
        tmrekening_akun_id = $('#tmrekening_akun_id').val();
        tmrekening_akun_kelompok_id = $('#tmrekening_akun_kelompok_id').val();
        tmrekening_akun_kelompok_jenis_id =  $('#tmrekening_akun_kelompok_jenis_id').val();
        tmrekening_akun_kelompok_jenis_objek_id  =  $('#tmrekening_akun_kelompok_jenis_objek_id').val();

        if(tmsikd_satker_id ==''){
            $.alert({title : 'Keterangan',content : 'pilih opd pilih terlebih daulu'});
        }else if(dari ==''){
            $.alert({title : 'Keterangan',content : 'silahkan pilih tanggal mulai terlebih daulu'});
        }else if(sampai ==''){
            $.alert({title : 'Keterangan',content : 'silahkan pilih tanggal sampai dengan terlebih daulu'});
        }else if(tmrekening_akun_id ==''){
            $.alert({title : 'Keterangan',content : 'tmrekening_akun_id  pilih terlebih daulu'});
        }else if(tmrekening_akun_kelompok_id ==''){
            $.alert({title : 'Keterangan',content : 'tmrekening_akun_kelompok_id  pilih terlebih daulu'});
        }else if(tmrekening_akun_kelompok_jenis_id ==''){
            $.alert({title : 'Keterangan',content : 'tmrekening_akun_kelompok_jenis_id  pilih terlebih daulu'});
        }else if(tmrekening_akun_kelompok_jenis_objek_id ==''){
            $.alert({title : 'Keterangan',content : 'tmrekening_akun_kelompok_jenis_objek_id  pilih terlebih daulu'});
        }else{   

           var type = 1;
            var url = '{{ Url("result_data") }}?tahun_id='+tahun_id+'&tmsikd_satker_id='+tmsikd_satker_id+'&dari='+dari+'&sampai='+sampai+'&tmrekening_akun_id='+tmrekening_akun_id+'&tmrekening_akun_kelompok_id='+tmrekening_akun_kelompok_id+'&tmrekening_akun_kelompok_jenis_id='+tmrekening_akun_kelompok_jenis_id+'&tmrekening_akun_kelompok_jenis_objek_id='+tmrekening_akun_kelompok_jenis_objek_id+'&type='+type;
            $('#btn_cetak').html("<a href='"+url+"' class='btn btn-primary'><i class='fa fa-print'></i>Cetak Data</a>");  
          table.api().ajax.reload();  
        }
    });  
})     
</script>
@endsection

@endsection