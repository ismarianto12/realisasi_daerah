@extends('layouts.page')

@section('content')
<div class="page bg-light">
    @include('layouts._includes.toolbar')
    <div class="container-fluid my-3">
        <div id="alert"></div>
        <div class="card">
            <div class="card-body">
                <div class="form-row form-inline">
                    <div class="col-md-12">
                        <input type="hidden" id="tmsikd_setup_tahun_anggaran_id" value="{{ $tmrka_kegiatan->tmrka_program->tmrapbd->tmsikd_setup_tahun_anggaran->id }}"/>
                        <input type="hidden" id="tmrapbd_id" value="{{ $tmrka_kegiatan->tmrka_program->tmrapbd->id }}"/>
                        <input type="hidden" id="tmsikd_satker_id" value="{{ $tmrka_kegiatan->tmrka_program->tmsikd_satker->id }}"/>
                        <input type="hidden" id="tmsikd_sub_skpd_id" value="{{ isset($tmrka_kegiatan->tmrka_program->tmsikd_sub_skpd->id) ? $tmrka_kegiatan->tmrka_program->tmsikd_sub_skpd->id:0 }}"/>
                        <input type="hidden" id="tmsikd_bidang_id" value="{{ $tmrka_kegiatan->tmrka_program->tmsikd_bidang->id }}"/>
                        <input type="hidden" id="tmrenstra_sub_kegiatan_id" value="{{ $tmrka_kegiatan->tmrenstra_sub_kegiatan_id }}"/>
                       
                        <div class="form-group m-0">
                            <label class="col-form-label s-12 col-md-3">Tahun :</label>
                            <label class="r-0 s-12 col-md-5 tl">{{ $tmrka_kegiatan->tmrka_program->tmrapbd->tmsikd_setup_tahun_anggaran->tahun }} &nbsp; {{ $tmrka_kegiatan->tmrka_program->tmrapbd->jenis }}</label>
                        </div>
                        <div class="form-group m-0">
                            <label class="col-form-label s-12 col-md-3">PD :</label>
                            <label class="r-0 s-12 col-md-8 tl">{{ '['.$tmrka_kegiatan->tmrka_program->tmsikd_satker->kode.'] '.$tmrka_kegiatan->tmrka_program->tmsikd_satker->nama }}</label>
                        </div>
                        <div class="form-group m-0">
                            <label class="col-form-label s-12 col-md-3">Unit Kerja :</label>
                            <label class="r-0 s-12 col-md-8 tl">@if($tmrka_kegiatan->tmrka_program->tmsikd_sub_skpd){{ '['.$tmrka_kegiatan->tmrka_program->tmsikd_sub_skpd->kode.'] '.$tmrka_kegiatan->tmrka_program->tmsikd_sub_skpd->nama }}@endif</label>
                        </div>
                        <div class="form-group m-0">
                            <label class="col-form-label s-12 col-md-3">Bidang Urusan :</label>
                            <label class="r-0 s-12 col-md-8 tl">{{ '['.$tmrka_kegiatan->tmrka_program->tmsikd_bidang->kd_bidang.'] '.$tmrka_kegiatan->tmrka_program->tmsikd_bidang->nm_bidang }}</label>
                        </div>

                        <div class="form-group m-0">
                            <label class="col-form-label s-12 col-md-3">RKA Program :</label>
                            <label class="r-0 s-12 col-md-8 tl">{{ '['.$tmrka_kegiatan->tmrka_program->kd_program.'] '. $tmrka_kegiatan->tmrka_program->tmrenstra_program->uraian_program }}</label>
                        </div>
                        <div class="form-group m-0">
                            <label class="col-form-label s-12 col-md-3">Kegiatan :</label>
                            <label class="r-0 s-12 col-md-8 tl">{{ '['.$tmrka_kegiatan->tmrenstra_kegiatan->kd_kegiatan.'] '.$tmrka_kegiatan->tmrenstra_kegiatan->nm_kegiatan}}</label>
                        </div>
                        <div class="form-group m-0">
                            <label class="col-form-label s-12 col-md-3">Sub Kegiatan :</label>
                            <label class="r-0 s-12 col-md-8 tl">{{ '['.$tmrka_kegiatan->tmrenstra_sub_kegiatan->kd_sub_kegiatan.'] '.$tmrka_kegiatan->tmrenstra_sub_kegiatan->nm_sub_kegiatan}}</label>
                        </div>

                        {{-- <div class="form-group m-0">
                            <label class="col-form-label s-12 col-md-3">Pagu Indikatif :</label>
                            <label class="r-0 s-12 col-md-8 tl">{{ Html_number::decimal($tmrka_kegiatan->pagu_indikatif) }}</label>
                        </div> --}}
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-2">
            <div class="card-body">
                <div class="table-responsive">
                    <table id="datatable" class="table table-striped no-b" style="width:100%">
                        <thead>
                            <tr>
                                <th width="5%">&nbsp;</th>
                                <th width="10%">Kode Rekening</th>
                                <th width="35%">Uraian</th>
                                <th width="10%">Volume</th>
                                <th width="15%">Satuan</th>
                                <th width="10%">Harga</th>
                                <th width="15%">Jumlah</th>
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
<script src="{{ asset('js/dataTables.rowGroup.min.js') }}"></script>
<script type="text/javascript">

    $("#btnCreate").prop("href","{{ route($route.'create').'?tmrka_kegiatan_id='.$tmrka_kegiatan_id }}")


    var table = $('#datatable').dataTable({
        processing: true,
        serverSide: true,
        ordering: false,
        pageLength: {{ config('app.page_length') }},
        lengthChange: false,
        ajax: {
            url: "{{ route($route.'api') }}",
            method: 'POST',
            data:function(data){
                var tahun_id           = $('#tahun_id').val();
                var tmrapbd_id         = $('#tmrapbd_id').val();
                var tmsikd_satker_id   = $('#tmsikd_satker_id').val();
                var tmsikd_sub_skpd_id = $('#tmsikd_sub_skpd_id').val();
                var tmsikd_bidang_id   = $('#tmsikd_bidang_id').val()
                var tmrenstra_sub_kegiatan_id   = $('#tmrenstra_sub_kegiatan_id').val()
                data.tahun_id           = tahun_id;
                data.tmrapbd_id         = tmrapbd_id;
                data.tmsikd_satker_id   = tmsikd_satker_id;
                data.tmsikd_sub_skpd_id = tmsikd_sub_skpd_id;
                data.tmsikd_bidang_id   = tmsikd_bidang_id;
                data.tmrenstra_sub_kegiatan_id   = tmrenstra_sub_kegiatan_id;
            }
        },
        columns: [
            {data: 'id', name: 'id', orderable: false, searchable: false, className: 'text-center'},
            {data: 'kd_rek_rincian_objek_sub', name: 'kd_rek_rincian_objek_sub'},
            {data: 'nm_rek_rincian_objek_sub', name: 'nm_rek_rincian_objek_sub'},
            {data: 'volume', name: 'volume', className: 'text-right'},
            {data: 'satuan', name: 'satuan', className: 'text-center'},
            {data: 'harga', name: 'harga', className: 'text-right'},
            {data: 'jumlah', name: 'jumlah', className: 'text-right'}
        ],
        rowGroup: {
            startRender: function(rows, group){
                return $('<tr/>')
                    .append('<td></td>')
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
                $('#btnReload').click();
            }, "JSON").fail(function(){
                reload();
            });
        }
    }
</script>
@endsection
