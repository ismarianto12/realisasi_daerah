@extends('layouts.template')

@section('title','Pendapatan Daerah')
@section('content')
@include('layouts._includes.toolbar')

<div class="page bg-light">
    <div class="container-fluid my-3">
        <div class="card">
            <div class="card-body">
                <div class="form-group form-show-validation row">
                    <label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Tahun <span
                            class="required-label">*</span></label>
                    <div class="col-sm-6">
                        <select name="tahun_id" id="tahun_id" placeholder="" class="form-control select2 r-0 light"
                            autocomplete="off">
                            @foreach ($tahuns as $tahun)
                            <option value="{{$tahun->id}}" @if($tahun_active==$tahun->id)
                                selected="selected"@endif>{{$tahun->tahun}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group form-show-validation row">
                    <label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Satuan Kerja
                        <span class="required-label">*</span></label>
                    <div class="col-sm-6">
                        <select name="tmsikd_satker_id" id="tmsikd_satker_id" class="form-control select2 " required>
                            @php
                            $levelid = Properti_app::getlevel();
                            @endphp
                            @if($levelid == 3)

                            @else
                            <option value="0">--Semua Satuan OPD (SATKER)--</option>
                            @endif

                            @foreach($tmsikd_satkers as $tmsikd_satker)
                            <option value="{{ $tmsikd_satker->id }}" @if($tmsikd_satker_id==$tmsikd_satker->id)
                                selected="selected"@endif>
                                [{{ $tmsikd_satker->kode }}] &nbsp; {{ $tmsikd_satker->nama }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                {{--  <div class="card-header">
                    <h6>List Rekening Pendapatan</h6>
                </div>  --}}
                <div class="card-body">
                    <div class="form-row form-inline">
                        <div class="col-md-12">

                            <div class="form-group form-show-validation row">
                                <label for="name" class="col-md-3 text-right">Tanggal Lapor <span
                                        class="required-label">*</span></label>
                                <div class="col-sm-4">
                                    <input type="text" id="tgl_lapor" class="datepicker form-control"
                                        placeholder="Dari .." value="{{ $dari }}">
                                </div>
                            </div>
                            <hr />
                            <div class="form-group form-show-validation row">
                                <div class="col-sm-4">
                                    <button class="btn btn-primary btn-xs" id="cari_data"><i
                                            class="fa fa-search"></i>Tampilkan Data</button>
                                </div>
                            </div>

                            {{--  <div class="col-md-12">
                                <div class="form-group m-0">
                                    <label for="tmrekening_akun_id" class="col-form-label s-12 col-md-3"><strong>Rek.
                                            Akun :</strong></label>
                                    <div class="col-md-5 p-0 mb-2">
                                        <select name="tmrekening_akun_id" class="form-control r-0 s-12 select2"
                                            id="tmrekening_akun_id">
                                            <option value="0">--Pilihan Data--</option>
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
                                id="tmrekening_akun_kelompok_id">
                                <option value="0">--Pilihan Data--</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group m-0">
                        <label for="tmrekening_akun_kelompok_jenis_id" class="col-form-label s-12 col-md-3"><strong>Rek.
                                Jenis</strong></label>
                        <div class="col-md-5 p-0 mb-2">
                            <select name="tmrekening_akun_kelompok_jenis_id" class="form-control r-0 s-12 select2"
                                id="tmrekening_akun_kelompok_jenis_id">
                                <option value="0">--Pilihan Data--</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group m-0">
                        <label for="tmrekening_akun_kelompok_jenis_objek_id"
                            class="col-form-label s-12 col-md-3"><strong>Rek. Obj :</strong></label>
                        <div class="col-md-5 p-0 mb-2">
                            <select name="tmrekening_akun_kelompok_jenis_objek_id" class="form-control r-0 s-12 select2"
                                id="tmrekening_akun_kelompok_jenis_objek_id" onchange="selectOnChange();">
                                <option value="0">--Pilihan Data--</option>
                            </select>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</div>
<div class="card-body">
</div>
</div>
</div>
<div id="btn_cetak"></div>
<div class="card">
    <div class="card-body">
        <small>Klik kode rekening untuk melihat rincian .</small>
        <center>
            <div class="satker_show"></div>
        </center>
        @if($tgl_lapor != '')
        <div class="alert alert-danger">Data berhasil di tambahkan Silahkan cek rincian pelaporan pada tanggal
            {{ Properti_app::tgl_indo($tgl_lapor) }}</div>
        @endif
        <table id="datatable" class="table table-striped no-b" style="width:100%">
            <thead>
                <tr>
                    <th width="5%">&nbsp;</th>
                    <th width="10%">Kode Rekening</th>
                    <th width="35%">Uraian</th>
                    <th width="10%">Volume Transaksi</th>
                    <th width="15%">Jumlah Transaksi</th>
                    <th width="15%">Tanggal Lapor</th>
                    <th width="15%">Status Lapor</th>
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
        {extend:'copyHtml5', className: 'btn btn-info btn-xs'},
        {extend:'excelHtml5', className: 'btn btn-success btn-xs'},
        {extend:'csvHtml5', className: 'btn btn-warning btn-xs'},
        {extend:'pdfHtml5', className: 'btn btn-prirmay btn-xs'}
        ],
        processing: true,
        serverSide: true,
        ordering: false,
        pageLength: 10,
        lengthChange: false,
        ajax: {
            url: "{{ route($route.'api') }}",
            method: 'POST',
            data:function(data){ 
                data.tahun_id  = $('#tahun_id').val();
                data.tmsikd_satker_id = $('#tmsikd_satker_id').val();
                data.tgl_lapor  = $('#tgl_lapor').val(); 

                data.tmrekening_akun_id  = $('#tmrekening_akun_id').val();
                data.tmrekening_akun_kelompok_id  = $('#tmrekening_akun_kelompok_id').val();
                data.tmrekening_akun_kelompok_jenis_id  = $('#tmrekening_akun_kelompok_jenis_id').val();
                data.tmrekening_akun_kelompok_jenis_objek_id  = $('#tmrekening_akun_kelompok_jenis_objek_id').val();
            }
        },  
        columns: [ 
        {data: 'id', name: 'id', orderable: false, searchable: false, className: 'text-center'},
        {data: 'kd_rek_rincian_obj', name: 'kd_rek_rincian_obj'},
        {data: 'nm_rek_rincian_obj', name: 'nm_rek_rincian_obj'},
        {data: 'volume', name: 'volume', className: 'text-right',orderable: false, searchable: false},  
        {data: 'jumlah_lapor', name: 'jumlah', className: 'text-right',orderable: false, searchable: false},  
        {data: 'tanggal_lapor', name: 'tanggal_lapor', className: 'text-right',orderable: false, searchable: false},   
        {data: 'action', name: 'action', className: 'text-right',orderable: false, searchable: false},   
        
        ], 
        rowGroup: {
            startRender: function(rows, group){
                return $('<tr/>')
                    .append('<td></td>')
                    .append(group)
            },
            endRender: null,
            dataSrc: ['r_kd_rek_obj']
        }
    });        
    @include('layouts._includes.tablechecked')

//if data change fiunction 

$('#tmrekening_akun_id').on('change', function(){
    val = $(this).val();
    option = "<option value='0'>--Semua Data--</option>";
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
    option = "<option value='0'>--Semua Data--</option>";
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
    option = "<option value='0'>--Semua Data--</option>";
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

$('.satker_show').html('<div class="alert alert-danger">Belum ada satuan kerja yang di pilih .</div>')
 

$('#cari_data').on('click',function(e){
 e.preventDefault();     
 var tgl_lapor      =  $('#tgl_lapor').val();  
 var tahun_id       = $('#tahun_id').val();
 var val_satker_id  = $('#tmsikd_satker_id').val();
  
  $('.satker_show').html('<div class="alert alert-danger">sedang mencari data di tanggal '+ tgl_lapor,'please wait ...</div>');
   // 'tahun_id='+$('tahun_id').val() +'&tmrapbd_id='+$('tmrapbd_id').val()+'&tmsikd_satker_id='+$('tmsikd_satker_id').val();
  table.api().ajax.reload();
  url = "{{ route('aplikasi.get_satker',':id') }}".replace(':id',val_satker_id);
  $.get(url,function(data){
 if(data){  
    $.alert('data berhasil di tampilkan pada tanggal : '+ tgl_lapor,'Pencarian selesai ');
    $('.satker_show').html('<div class="alert alert-success"><h3> ['+data.kode+']['+data.satker_name+' ] BERDASARKAN TANGGAL LAPOR : '+tgl_lapor+'</h3></div>')
}else{ 
    $('.satker_show').html('<div class="alert alert-danger">Belum ada satuan kerja yang di pilih .</div>')
}  
}) 
})
 
$('#datatable').on('click','#detail',function(e){
    e.preventDefault();
    
    $('.load_page').html('<center><h3>Mohon Bersabar .... </h3><b>Sedang membuka halaman harap tunggu ...</b></center>');
    $('#modal_loader').modal('show');  
    
    $(this).toggleClass('selected');
    c = $(this).children('td:first').children('input[type=checkbox]');
    if(!c.is(':disabled')){
        c.prop('checked', false);
    }
 
    var page = $(this).attr('to'); 
     $.get(page,function(data){
        $('.load_page').load(page);
        $('#modal_loader').modal('show');  
    }).fail(function(){ 
        $.alert('halaman tidak bisa di load kesalahan ... ','terjadi ganguan');
    });
 });

function del(){
    $('.load_page').html('<center><h3>Proses Hapus .... </h3><b>Sedang menghapus data harap tunggu ...</b></center>');
    $('#modal_loader').modal('show');  
    
        var c = new Array();
        $("input:checked").each(function(){ c.push($(this).val()); });
        if(c.length == 0){
            $.alert("Silahkan memilih data yang akan dihapus.");
        }else{
           // var tgl_lapor = $('input:checked').data('tgl_lapor');
             var tgl_lapor      =  $('#tgl_lapor').val();   
            $.post("{{ route($route.'destroy', [':id']) }}&tgl_lapor="+tgl_lapor, {'_method' : 'DELETE', 'id' : c}, function(data) {
                if(data){
                    $.each(data, function(index, value){
                        $('.load_page').html('<center><h3>Info</h3><b>'+data.message+'.</b></center>');
                        $('#modal_loader').modal('show'); 
                    }); 
                }
                table.api().ajax.reload();
                 
            }, "JSON").fail(function(data){
                if(data){
                    $.each(data, function(index, value){
                        $('.load_page').html('<center><h3>Info</h3><b>'+data.message+'.</b></center>');
                        $('#modal_loader').modal('show'); 
                    }); 
                }
      
                reload();
            });
            
        }
    }

    function get_info(n){
        alert(n);

    }
</script>

{{-- modal loader data --}}

<div class="modal fade" id="modal_loader" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="width: auto;">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"><i class="fa fa-check"></i>Rincian Pad di laporkan .
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="load_page"><i class="fa fa-share fa-spin"></i>Loading ...</div>
            </div>
        </div>
    </div>
</div>


{{--  modal loading  --}}
<div class="modal fade" id="loading_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="width: auto;">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"><i class="fa fa-check"></i>Sedang Mencari Data ....
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="halaman_isi"><i class="fa fa-share fa-spin"></i>Loading ...</div>
            </div>
        </div>
    </div>
</div>



{{-- end modal loader --}}


@endsection
@endsection