
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
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="card mt-2 ">
            <div class="card-header ">
                <h6>Indikator Masukan Kegiatan</h6>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped table-bordered mb-0" id="sub_mak">
                    <thead>
                        <tr>
                            <th ></th>
                            <th>No Indikator</th>
                            <th>Uraian Indikator</th>
                            <th>Satuan</th>
                            <th>Target Tahun Ini</th>
                            <th>Target Akhir Renstra</th>
                            <th>Realisasi s/d Tahun Lalu</th>
                            <th>Target Tahun Depan</th>
                        </tr>
                        
                    </thead>
                    <tbody>
                        @forelse ($indikator_kinerjas as $i)
                        <tr>
                            <td><input type="checkbox" name='cbox[]' id="cbox{{ $i->id }}"
                                value="{{ $i->id }}" />
                        </td>
                       
                            <td>{{ $i->no_indikator}}</td>
                            <td>{{ $i->uraian_indikator}}</td>
                            <td>{{ $i->satuan}}</td>
                            <td>{{ Html_number::decimal($i->target_thn_ini) }}</td>
                            <td>{{ Html_number::decimal($i->target_renstra) }}</td>
                            <td>{{ Html_number::decimal($i->realisasi_sd_thn_lalu) }}</td>
                            <td>{{ Html_number::decimal($i->target_thn_dpn) }}</td>
                           
                        </tr>

                        @empty

                        <tr>
                            <td colspan="8" align="center">Tidak ada Indikator</td>
                        </tr>
                        @endforelse
                       
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="10" class="p-2">
                                <div class="btn-group">
                                    @if ($toolbar_view && $toolbar)
                                    
                                    <a class="btn btn-outline-secondary btn-sm" title="Edit Data" href="{{ route($route.'indikator_kinerja.form').'?tmrka_kegiatan_id='.$tmrka_kegiatan_id.'&edit=1' }}" id="btnEdit"><i class="icon icon-edit pr-0"></i> Edit</a>
                                    <a class="btn btn-outline-secondary btn-sm" title="Hapus Data" id="btnDelete" href="#" onclick="javascript:confirm_del()"><i class="icon icon-trash-can pr-0"></i> Hapus</a>
                                    @else
                                        
                                    @endif
                                    
                                </div>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>

        
     

       
    </div>
</div>
@endsection

@section('script')
<script src="{{ asset('js/dataTables.rowGroup.min.js') }}"></script>
<script type="text/javascript">

    $("#btnCreate").prop("href","{{ route($route.'indikator_kinerja.form').'?tmrka_kegiatan_id='.$tmrka_kegiatan_id }}")


    

    function del(){
        var c = new Array();
        $("input:checked").each(function(){ c.push($(this).val()); });
        if(c.length == 0){
            $.alert("Silahkan memilih data yang akan dihapus.");
        }else{
            $.post("{{ route($route.'indikator_kinerja.destroy', ':id') }}", {'_method' : 'DELETE', 'id' : c}, function(data) {
                $('#btnReload').click();
            }, "JSON").fail(function(){
                reload();
            });
        }
    }
</script>
@endsection
