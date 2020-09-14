@extends('layouts.template')

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
                        <div class="form-group m-0">
                            <label class="col-form-label s-12 col-md-3">Jumlah Anggaran :</label>
                            <label class="r-0 s-12 col-md-8 tl">{{Html_number::decimal($tmrka_kegiatans->jmlanggaran_subkegiatan($tmrka_kegiatan->id))}}</label>
                        </div>

                        
                    </div>
                </div>
            </div>
        </div>

   
        <div class="card mt-2">
            <div class="card-header no-b">
                <h6>Rekening Mata Anggaran Kegiatan</h6>
            </div>
            <div class="card-body">
                <div class="form-row form-inline">
                    <div class="col-md-12">
                        <div class="form-group m-0">
                            <label class="col-form-label s-12 col-md-3">Rek Kelompok :</label>
                            <label class="r-0 s-12 col-md-5 tl">[{{ $r->kd_rek_kelompok }}] {{ $r->nm_rek_kelompok }}</label>
                        </div>
                        <div class="form-group m-0">
                            <label class="col-form-label s-12 col-md-3">Rek Jenis :</label>
                            <label class="r-0 s-12 col-md-5 tl">[{{ $r->kd_rek_jenis }}] {{ $r->nm_rek_jenis }}</label>
                        </div>
                        <div class="form-group m-0">
                            <label class="col-form-label s-12 col-md-3">Rek Objek :</label>
                            <label class="r-0 s-12 col-md-5 tl">[{{ $r->kd_rek_obj }}] {{ $r->nm_rek_obj }}</label>
                        </div>
                        <div class="form-group m-0">
                            <label class="col-form-label s-12 col-md-3">Rek Objek Rincian :</label>
                            <label class="r-0 s-12 col-md-5 tl">[{{ $r->kd_rek_rincian_obj }}] {{ $r->nm_rek_rincian_obj }}</label>
                        </div>
                        <div class="form-group m-0">
                            <label class="col-form-label s-12 col-md-3">Rek Objek Sub Rincian :</label>
                            <label class="r-0 s-12 col-md-5 tl">[{{ $r->kd_rek_rincian_objek_sub }}] {{ $r->nm_rek_rincian_objek_sub }}</label>
                        </div>
                        <div class="form-group m-0">
                            <label class="col-form-label s-12 col-md-3">Sumber Anggaran :</label>
                            @php
                                if($r->tmsikd_sumber_anggaran_id){
                                    $sa = $tmsikd_sumber_anggarans->whereid($r->tmsikd_sumber_anggaran_id)->first();
                                    $txt = '['.$sa->kd_sumber_anggaran.'] '. $sa->nm_sumber_anggaran;
                                }else{
                                    $txt = '-';
                                }
                            @endphp
                            <label class="r-0 s-12 col-md-5 tl">{{ $txt }} </label>
                        </div>
                    </div>
                </div>
                <table class="table table-bordered mt-2 mb-0">
                    <thead>
                        <tr>
                            <th width="5%">&nbsp;</th>
                            <th width="7%">Volume</th>
                            <th width="7%">Satuan</th>
                            <th width="13%">Harga</th>
                            <th width="15%">Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td></td>
                            <td>{{ Html_number::decimal($r->volume) }}</td>
                            <td>{{ $r->satuan }}</td>
                            <td>{{ Html_number::decimal($r->harga) }}</td>
                            <td>{{ Html_number::decimal($r->jumlah) }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card mt-2 b-0">
            <div class="card-body p-0">
                <table class="table table-striped table-bordered mb-0" id="sub_mak">
                    <thead>
                        <tr>
                            <th colspan="10" class="no-b p-2">
                                <strong>Rincian Sub Mata Anggaran Kegiatan</strong>
                            </th>
                        </tr>
                        <tr>
                            <th rowspan="2" width="4%">&nbsp;</th>
                            <th rowspan="2" width="10%">Jns Item</th>
                            <th colspan="3" class="no-b">No Item</th>
                            <th rowspan="2" width="30%">Uraian</th>
                            <th rowspan="2" width="7%">Volume</th>
                            <th rowspan="2" width="8%">Satuan</th>
                            <th rowspan="2" width="12%">Harga</th>
                            <th rowspan="2" width="18%">Jumlah</th>
                        </tr>
                        <tr>
                            <th width="5%">Header</th>
                            <th width="5%">Sub Header</th>
                            <th width="5%">Item</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($rincians as $key=>$rincian)
                        <tr>
                            <td><input name="cboxHapus[]" id="list_subrincobj_cboxHapus_0" type="checkbox" value="{{ $rincian->id }}"></td>
                            <td>{{ $jnsItems[$rincian->jns_item] }}</td>
                            <td>{{ $rincian->no_item_h }}</td>
                            <td>{{ $rincian->no_item_s }}</td>
                            <td>{{ $rincian->no_item }}</td>
                            <td @if($rincian->jns_item == 'H' || $rincian->jns_item == 'S') class="font-weight-bold"@endif>{{ $rincian->uraian }}</td>
                            @if($rincian->jns_item == 'I')
                            <td align="right">{{ $rincian->volume }}</td>
                            <td>{{ $rincian->satuan }}</td>
                            <td align="right">{{ Html_number::decimal($rincian->harga) }}</td>
                            <td align="right">{{ Html_number::decimal($rincian->jumlah) }}</td>
                            @else
                            <td></td>
                            <td></td>
                            <td></td>
                            <td align="right" class="font-weight-bold">{{ Html_number::decimal($rincian->jns_item == 'H' ? $rincian->jumlah_h : $rincian->jumlah_s) }}</td>
                            @endif
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="10" class="p-2">
                                <div class="btn-group">
    
                                    @if ($toolbar_view)
                                    
                                    <a class="btn btn-outline-secondary btn-sm" title="Masukan Data Baru" href="{{ route('rka.rkaskpd.blnj.rincian_mata_anggaran.create', 'tmrka_mata_anggaran_id='.$id) }}" id="btnCreate"><i class="icon icon-add pr-0"></i> Tambah</a>
                                    <a class="btn btn-outline-secondary btn-sm" title="Hapus Data" id="btnDelete" href="#" onclick="javascript:confirm_del()"><i class="icon icon-trash-can pr-0"></i> Hapus</a>
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

$("#btnRead").prop("href","{{ route($route.'index').'?tmrka_kegiatan_id='.$tmrka_kegiatan_id }}")


    function del(){
        var c = new Array();
        $("input:checked").each(function(){ c.push($(this).val()); });
        if(c.length == 0){
            $.alert("Silahkan memilih data yang akan dihapus.");
        }else{
            $.post("{{ route('rka.rkaskpd.blnj.rincian_mata_anggaran.destroy', ':id') }}", {'_method' : 'DELETE', 'id' : c}, function(data) {
                $('#btnReload').click();
            }, "JSON").fail(function(){
                reload();
            });
        }
    }
</script>
@endsection
