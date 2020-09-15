@extends('layouts.template')

@section('title','Report Pendapatan')
@section('content') 

  
<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold">Laporan Penerimaaan</h2>
                <h5 class="text-white op-7 mb-2"> Pendapatapan Daerah   </h5>
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
                        <select name="tahun_id" id="tahun_id" placeholder="" class="form-control select2 r-0 light" autocomplete="off" onchange="selectOnChange()">
                            @foreach ($tahuns as $tahun)    
                                <option value="{{$tahun->id}}"@if($tahun_id == $tahun->id) selected="selected"@endif>{{$tahun->tahun}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
             
                <div class="form-group form-show-validation row">
                    <label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Satuan Kerja                        
                        <span
                            class="required-label">*</span></label>
                    <div class="col-sm-6">
                        <select name="tmsikd_satker_id" id="tmsikd_satker_id" class="form-control select2 " required onchange="selectOnChange('tmsikd_satker_id')">
                            @foreach($tmsikd_satkers as $tmsikd_satker)
                                <option value="{{ $tmsikd_satker->id }}"@if($tmsikd_satker_id == $tmsikd_satker->id) selected="selected"@endif>
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
                            <div class="col-md-12 centered">

                                 
                                <div class="form-group form-show-validation row">
                                    <label for="name" class="col-md-3 text-right">Periode (Tanggal) <span
                                            class="required-label">*</span></label>
                                    <div class="col-sm-4">
                                         <input type="date" id="dari" class="form-control" placeholder="Dari ..">
                                    </div>
                                     S /D     
                                    <div class="col-sm-4">   
                                      <input type="date" class="form-control" id="sampai" placeholder="Sampai dengan"> 
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="rekJeni_id" class="col-md-3">Rek Jenis <span class="text-danger">*</span>&nbsp;:</label>
                                    <div class="col-md-8">
                                        <select name="rekJeni_id" id="rekJeni_id" placeholder="" class="form-control select2s r-0 s-12" autocomplete="off" onchange="selectOnChange('rekJeni_id')">
                                            @foreach($rekJenis as $key=>$rekJeni)
                                            <option value="{{ $rekJeni->id }}"{{ $rekJeni_id == $rekJeni->id ? " selected='selected'" : ''}}>[{{ $rekJeni->kd_rek_jenis }}] {{ $rekJeni->nm_rek_jenis }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="rekObj_id" class="col-md-3">Rek Objek <span class="text-danger">*</span>&nbsp</label>
                                    <div class="col-md-8">
                                        <select name="rekObj_id" id="rekObj_id" placeholder=""  class="form-control select2s col-md-4" autocomplete="off" onchange="selectOnChange('rekObj_id')">
                                            @foreach($rekObjs as $key=>$rekObj)
                                            <option value="{{ $rekObj->id }}"{{ $rekObj_id == $rekObj->id ? " selected='selected'" : ''}}>[{{ $rekObj->kd_rek_obj }}] {{ $rekObj->nm_rek_obj }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="rekRincian_id" class="col-md-3">Rek Rincian </label>
                                    <div class="col-md-8">
                                        <select name="rekRincian_id" id="rekRincian_id" placeholder=""  class="form-control select2s col-md-4" autocomplete="off"onchange="selectOnChange('rekRincian_id')">
                                            <option value="">&nbsp;</option>
                                            @foreach($rekRincians as $key=>$rekRincian)
                                            <option value="{{ $rekRincian->id }}"{{ $rekRincian_id == $rekRincian->id ? " selected='selected'" : ''}}>[{{ $rekRincian->kd_rek_rincian_obj }}] {{ $rekRincian->nm_rek_rincian_obj }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div> 
                            </div>
                         </div>
                      </div>  
                   </div>      
               </div>
        </div>

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
<script type="text/javascript" src="{{ asset('assets/template/js/plugin/datatables/dataTables.rowGroup.min.js') }}"></script>
 
<script type="text/javascript" src="{{  asset('assets/template/js/plugin/datatables/button/dataTables.buttons.min.js') }}"></script>
<script type="text/javascript" src="{{  asset('assets/template/js/plugin/datatables/button/jszip.min.js') }}"></script>
<script type="text/javascript" src="{{  asset('assets/template/js/plugin/datatables/button/pdfmake.min.js') }}"></script>
<script type="text/javascript" src="{{  asset('assets/template/js/plugin/datatables/button/vfs_fonts.js') }}"></script>
<script type="text/javascript" src="{{  asset('assets/template/js/plugin/datatables/button/buttons.html5.min.js') }}"></script>
  
<script type="text/javascript">
    $('#btnCreate').attr('href', "{{ route('pendapatan.create') }}?tahun_id=" + $('#tahun_id').val() + "&tmrapbd_id=" + $('#tmrapbd_id').val() + "&tmsikd_satker_id=" + $('#tmsikd_satker_id').val() + "&tmsikd_sub_skpd_id=" + $('#tmsikd_sub_skpd_id').val() + "&tmsikd_bidang_id=" + $('#tmsikd_bidang_id').val());
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
            url: "{{ route('pendapatan_data') }}",
            method: 'POST',
            data:function(data){
                var tahun_id           = $('#tahun_id').val();
                var tmrapbd_id         = $('#tmrapbd_id').val();
                var tmsikd_satker_id   = $('#tmsikd_satker_id').val();
                var tmsikd_sub_skpd_id = $('#tmsikd_sub_skpd_id').val();
                var tmsikd_bidang_id   = $('#tmsikd_bidang_id').val();
                var tanggal_lapor      = $('#tanggal_lapor').val();
                var dari               = $('#dari').val();
                var sampai             = $('#sampai').val();
                
                data.tahun_id           = tahun_id;
                data.tmrapbd_id         = tmrapbd_id;
                data.tmsikd_satker_id   = tmsikd_satker_id;
                data.tmsikd_sub_skpd_id = tmsikd_sub_skpd_id;
                data.tmsikd_bidang_id   = tmsikd_bidang_id;
                data.tanggal_lapor      = tanggal_lapor;
                data.dari               = dari;
                data.sampai             = sampai;
            } 
        },
        columns: [ 
            {data: 'id', name: 'id', orderable: false, searchable: false, className: 'text-center'},
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

    function selectOnChange(){
        tahun_id           = $('#tahun_id').val();
        tmrapbd_id         = $('#tmrapbd_id').val();
        tmsikd_satker_id   = $('#tmsikd_satker_id').val();
        tmsikd_sub_skpd_id = $('#tmsikd_sub_skpd_id').val();
        tmsikd_bidang_id   = $('#tmsikd_bidang_id').val();
        tanggal_lapor      = $('#tanggal_lapor').val();  
        dari               =  $('#dari').val();
        sampai             =  $('#sampai').val();

        rekJeni_id         = $('#rekJeni_id').val();
        rekObj_id          = $('#rekObj_id').val();
        rekRincian_id      = $('#rekRincian_id').val();
        if(f == 'rekJeni_id'){
          rekObj_id  = '';
          rekRincian_id = '';
        }else if(f == 'rekObj_id'){
          rekRincian_id = '';
        } 
        document.location.href = "{{ route($route.'index') }}?tahun_id=" + tahun_id + "&tmrapbd_id=" + tmrapbd_id + "&tmsikd_satker_id=" + tmsikd_satker_id + "&rekJeni_id=" + rekJeni_id+ "rekObj_id=" + rekObj_id+ "rekRincian_id=" + rekRincian_id+ "&dari=" + dari +'&sampai=' +sampai;
    }
</script>  
@endsection

@endsection
