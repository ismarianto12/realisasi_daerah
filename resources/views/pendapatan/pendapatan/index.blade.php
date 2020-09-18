@extends('layouts.page')
@section('content')
<div class="page bg-light">
    @include('layouts._includes.toolbar')
    <div class="container-fluid my-3">
        {{-- @if ($r->count() > 1)
            <div role='alert' class='alert alert-danger alert-dismissible'>
                <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                    <span aria-hidden='true'>×</span>
                </button>
                <strong>Error ! </strong> Duplikat Kegiatan<ol class='pl-3 m-0'></ol>
                Hapus kegiatan yang tidak memiliki sumber data ?  
                <a class="text-danger" title="Hapus Data" id="btnDelete" href="#" onclick="javascript:confirm_del_include()">
                    <strong>Ya</strong>
                </a>
            </div>
        @endif --}}
        <div class="card">
            <div class="card-body">
                <div class="form-row form-inline">
                    <div class="col-md-8">
                        <div class="form-group m-0">
                            <label for="tahun_id" class="form-control-label col-md-3"><strong>Tahun RKA </strong></label>
                            <div class="col-md-2">
                                <select name="tahun_id" id="tahun_id" placeholder="" class="form-control select2" autocomplete="off" onchange="selectOnChange()">
                                    @foreach ($tahuns as $tahun)
                                        <option value="{{$tahun->id}}"@if($tahun_id == $tahun->id) selected="selected"@endif>{{$tahun->tahun}}</option>
                                    @endforeach
                                </select>
                            </div>&nbsp;
                            
                            <div class="col-md-4">
                                <select name="tmrapbd_id" id="tmrapbd_id" placeholder="" class="form-control select2 " autocomplete="off" onchange="selectOnChange()">
                                    @foreach ($tmrapbds as $tmrapbds)
                                        <option value="{{ $tmrapbds->id }}"@if($tmrapbd_id == $tmrapbds->id) selected="selected"@endif>{{ $tmrapbds->jenis }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tanggal_lapor" class="col-md-3">Tanggal Pelaporan </label>
                            <div class="col-md-8">
                                <input type="date" class="form-control" name="tanggal_lapor" id="tanggal_lapor"
                                value="{{ $tanggal_lapor }}">
                            </div>
                        </div>

                        <div class="form-group m-0">
                            <label for="tmsikd_satker_id" class="form-control-label col-md-3"><strong>PD </strong></label>
                            <div class="col-md-8">
                                <select name="tmsikd_satker_id" id="tmsikd_satker_id" class="form-control select2 " required onchange="selectOnChange('tmsikd_satker_id')">
                                    @foreach($tmsikd_satkers as $tmsikd_satker)
                                        <option value="{{ $tmsikd_satker->id }}"@if($tmsikd_satker_id == $tmsikd_satker->id) selected="selected"@endif>
                                            [{{ $tmsikd_satker->kode }}] &nbsp; {{ $tmsikd_satker->nama }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group m-0">
                            <label for="tmsikd_sub_skpd_id" class="form-control-label col-md-3"><strong>Sub Unit </strong></label>
                            <div class="col-md-6">
                                <select name="tmsikd_sub_skpd_id" id="tmsikd_sub_skpd_id" class="form-control select2s " onchange="selectOnChange('tmsikd_sub_skpd_id')">
                                    @if($tmsikd_sub_skpds->count() == 0)<option value="0">&nbsp;</option>
                                    @elseif($tmsikd_sub_skpds != null)<option value="0">UNIT INDUK</option>@endif
                                    @foreach($tmsikd_sub_skpds as $tmsikd_sub_skpd)
                                        <option value="{{ $tmsikd_sub_skpd->id }}"@if($tmsikd_sub_skpd_id == $tmsikd_sub_skpd->id) selected="selected"@endif>
                                            [{{ $tmsikd_sub_skpd->kode }}] &nbsp; {{ $tmsikd_sub_skpd->nama }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group m-0">
                            <label for="tmsikd_bidang_id" class="form-control-label col-md-3"><strong>Bidang Urusan </strong></label>
                            <div class="col-md-6">
                                <select name="tmsikd_bidang_id" id="tmsikd_bidang_id" class="form-control select2s " onchange="selectOnChange('tmsikd_bidang_id')">
                                    @foreach($tmsikd_bidangs as $tmsikd_bidang)
                                        <option value="{{ $tmsikd_bidang->id }}"@if($tmsikd_bidang_id == $tmsikd_bidang->id) selected="selected"@endif>
                                            [{{ $tmsikd_bidang->kd_bidang }}] &nbsp; {{ $tmsikd_bidang->nm_bidang }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div> 
                    
                    </div>
                    {{-- <div class="col-md-4">
                        <div class="form-group m-0">
                            <label class="form-control-label col-md-5"><strong>Status PPAS :</strong></label>
                            @if ($status_anggaran == null)
                                <label class="r-0 col-md-7 tl">-</label>
                            @elseif($status_anggaran->status_ppas == 0)
                                <label class="r-0 col-md-7 tl">Draft</label>
                            @elseif($status_anggaran->status_ppas == 1)
                                <label class="r-0 col-md-7 tl">Final</label>
                            @elseif($status_anggaran->status_ppas == 2)
                                <label class="r-0 col-md-7 tl">Revisi</label>
                            @endif
                        </div>
                        <div class="form-group m-0">
                            <label class="form-control-label col-md-5"><strong>Dokumen PPAS :</strong></label>
                            <label class="r-0 col-md-7 tl">
                                @if ($status_anggaran == null)
                                    -
                                @else
                                    <a href="" class="mr-2" href="#">PDF</a>
                                    <span style="border-left: 1px black solid; height: 18px;"></span>
                                    <a href="" class="ml-2" href="#">XLS</a>
                                @endif
                            </label>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
        <div class="card mt-2">
            <div class="card-body">
                <div class="table-responsive">
                    @if ($tanggal_lapor !='')
                       Pelaporan Per periode tanggal @php
                          echo '<b>'.Properti_app::tgl_indo($tanggal_lapor).'</b>';
                       @endphp
                    @endif 
                    @php
                   // dd($tmsikd_satkers);
                    @endphp

                 [ {{ $satker_kode }} ] - [ {{ $satker_nm }}  ]
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
    </div>
</div>
@endsection

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
                
                data.tahun_id           = tahun_id;
                data.tmrapbd_id         = tmrapbd_id;
                data.tmsikd_satker_id   = tmsikd_satker_id;
                data.tmsikd_sub_skpd_id = tmsikd_sub_skpd_id;
                data.tmsikd_bidang_id   = tmsikd_bidang_id;
                data.tanggal_lapor      = tanggal_lapor;
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
                    .append('<td><td/>')
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
        document.location.href = "{{ route($route.'index') }}?tahun_id=" + tahun_id + "&tmrapbd_id=" + tmrapbd_id + "&tmsikd_satker_id=" + tmsikd_satker_id + "&tmsikd_sub_skpd_id=" + tmsikd_sub_skpd_id + "&tmsikd_bidang_id=" + tmsikd_bidang_id+ "&tanggal_lapor=" + tanggal_lapor;
    }
</script>
@endsection
