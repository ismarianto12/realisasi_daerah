@extends('layouts.page')

@section('content')
<div class="page bg-light">
    @include('layouts._includes.toolbar')
    <div class="container-fluid my-3">
        <div id="alert"></div>

        <form class="needs-validation" id="form" method="POST" novalidate>
            @csrf
            {{ method_field('POST') }}
            <div class="card">
                <div class="card-body">
                    <div class="form-row form-inline">
                        <div class="col-md-12">
                            <input type="hidden" name="id" id="id" value="{{ isset($id) ? $id : 0 }}">
                            <input type="hidden" id="tmsikd_setup_tahun_anggaran_id" name="tmsikd_setup_tahun_anggaran_id"
                                value="{{ $tmrka_kegiatan->tmrka_program->tmrapbd->tmsikd_setup_tahun_anggaran->id }}" />
                            <input type="hidden" id="tmrapbd_id" name="tmrapbd_id" value="{{ $tmrka_kegiatan->tmrka_program->tmrapbd->id }}" />
                            <input type="hidden" id="tmsikd_satker_id" name="tmsikd_satker_id"
                                value="{{ $tmrka_kegiatan->tmrka_program->tmsikd_satker->id }}" />
                            <input type="hidden" id="tmsikd_sub_skpd_id" name="tmsikd_sub_skpd_id"
                                value="{{ isset($tmrka_kegiatan->tmrka_program->tmsikd_sub_skpd->id) ? $tmrka_kegiatan->tmrka_program->tmsikd_sub_skpd->id:0 }}" />
                            <input type="hidden" id="tmsikd_bidang_id" name="tmsikd_bidang_id"
                                value="{{ $tmrka_kegiatan->tmrka_program->tmsikd_bidang->id }}" />
                            <input type="hidden" id="tmrka_kegiatan_id" name="tmrka_kegiatan_id"
                                value="{{ $tmrka_kegiatan->id }}" />
                            <input type="hidden" id="tmrenstra_kegiatan_id" name="tmrenstra_kegiatan_id"
                                value="{{ $tmrka_kegiatan->tmrenstra_kegiatan_id }}" />

                            <div class="form-group m-0">
                                <label class="col-form-label s-12 col-md-3">Tahun :</label>
                                <label
                                    class="r-0 s-12 col-md-5 tl">{{ $tmrka_kegiatan->tmrka_program->tmrapbd->tmsikd_setup_tahun_anggaran->tahun }}
                                    &nbsp; {{ $tmrka_kegiatan->tmrka_program->tmrapbd->jenis }}</label>
                            </div>
                            <div class="form-group m-0">
                                <label class="col-form-label s-12 col-md-3">PD :</label>
                                <label
                                    class="r-0 s-12 col-md-8 tl">{{ '['.$tmrka_kegiatan->tmrka_program->tmsikd_satker->kode.'] '.$tmrka_kegiatan->tmrka_program->tmsikd_satker->nama }}</label>
                            </div>
                            <div class="form-group m-0">
                                <label class="col-form-label s-12 col-md-3">Unit Kerja :</label>
                                <label
                                    class="r-0 s-12 col-md-8 tl">@if($tmrka_kegiatan->tmrka_program->tmsikd_sub_skpd){{ '['.$tmrka_kegiatan->tmrka_program->tmsikd_sub_skpd->kode.'] '.$tmrka_kegiatan->tmrka_program->tmsikd_sub_skpd->nama }}@endif</label>
                            </div>
                            <div class="form-group m-0">
                                <label class="col-form-label s-12 col-md-3">Bidang Urusan :</label>
                                <label
                                    class="r-0 s-12 col-md-8 tl">{{ '['.$tmrka_kegiatan->tmrka_program->tmsikd_bidang->kd_bidang.'] '.$tmrka_kegiatan->tmrka_program->tmsikd_bidang->nm_bidang }}</label>
                            </div>

                            <div class="form-group m-0">
                                <label class="col-form-label s-12 col-md-3">RKA Program :</label>
                                <label
                                    class="r-0 s-12 col-md-8 tl">{{ '['.$tmrka_kegiatan->tmrka_program->kd_program.'] '. $tmrka_kegiatan->tmrka_program->tmrenstra_program->uraian_program }}</label>
                            </div>
                            <div class="form-group m-0">
                                <label class="col-form-label s-12 col-md-3">Kegiatan :</label>
                                <label
                                    class="r-0 s-12 col-md-8 tl">{{ '['.$tmrka_kegiatan->tmrenstra_kegiatan->kd_kegiatan.'] '.$tmrka_kegiatan->tmrenstra_kegiatan->nm_kegiatan}}</label>
                            </div>
                            <div class="form-group m-0">
                                <label class="col-form-label s-12 col-md-3">Sub Kegiatan :</label>
                                <label
                                    class="r-0 s-12 col-md-8 tl">{{ '['.$tmrka_kegiatan->tmrenstra_sub_kegiatan->kd_sub_kegiatan.'] '.$tmrka_kegiatan->tmrenstra_sub_kegiatan->nm_sub_kegiatan}}</label>
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
                    <table class="table table-striped table-bordered mb-0" id="tbl_indikator">
                        <thead>
                            <tr>
                                <th>&nbsp;&nbsp;&nbsp;</th>
                                <th width="5%">No Indikator</th>
                                <th>Uraian Indikator</th>
                                <th>Satuan</th>
                                <th>Target Tahun Ini</th>
                                <th>Target Akhir Renstra</th>
                                <th>Realisasi s/d Tahun Lalu</th>
                                <th>Target Tahun Depan</th>
                            </tr>

                        </thead>
                        <tbody>
                            @php $idx = 0; @endphp
                            @if($indikator_kinerjas)
                            @foreach($indikator_kinerjas as $indikator_rincian)
                            <input type="hidden" name="tmrka_kegiatan_indikator_id[{{ $idx }}]"
                                id="tmrka_kegiatan_indikator_id_{{ $idx }}" value="{{ $indikator_rincian->id }}" />
                            <tr>
                                <td align="center">
                                    <input name="cboxInput[]" id="cboxInput_{{ $idx }}" type="checkbox" class="s-12"
                                        style="width:100%;margin-left:0px" value="{{ $idx }}" \="">
                                </td>
                                <td align="center">
                                    <input name="no_indikator_rinc[{{ $idx }}]" id="no_indikator_rinc_{{ $idx }}"
                                        type="text" style="width:100%" class="s-12" size="44"
                                        onblur="cboxChecked(this);" value="{{ $indikator_rincian->no_indikator }}">
                                </td>

                                <td align="center">
                                    <input name="uraian_indikator_rinc[{{ $idx }}]" id="uraian_indikator_rinc_{{ $idx }}"
                                        type="text" style="width:100%" class="s-12" size="44"
                                        onblur="cboxChecked(this);" value="{{ $indikator_rincian->uraian_indikator }}">
                                </td>

                                <td align="center">
                                    <input name="satuan_rinc[{{ $idx }}]" id="satuan_rinc_{{ $idx }}" type="text"
                                        style="width:100%" class="s-12" maxlength="20" size="10"
                                        value="{{ $indikator_rincian->satuan }}">
                                </td>
                                <td align="center">
                                    <input name="target_thn_ini_rinc[{{ $idx }}]" id="target_thn_ini_rinc_{{ $idx }}"
                                        type="number" style="width:100%;text-align:right;" class="s-12 number" size="10"
                                        onblur="isFloat(this, 'Harga'); cboxChecked(this);"
                                        value="{{ $indikator_rincian->target_thn_ini }}">
                                </td>

                                <td align="center">
                                    <input name="target_renstra_rinc[{{ $idx }}]" id="target_renstra_rinc_{{ $idx }}"
                                        type="number" style="width:100%;text-align:right;" class="s-12 number" size="10"
                                        onblur="isFloat(this, 'Harga'); cboxChecked(this);"
                                        value="{{ $indikator_rincian->target_renstra }}">
                                </td>
                                <td align="center">
                                    <input name="realisasi_sd_thn_lalu_rinc[{{ $idx }}]"
                                        id="realisasi_sd_thn_lalu_rinc_{{ $idx }}" type="number"
                                        style="width:100%;text-align:right;" class="s-12 number" size="10"
                                        onblur="isFloat(this, 'Harga'); cboxChecked(this);"
                                        value="{{ $indikator_rincian->realisasi_sd_thn_lalu }}">
                                </td>
                                <td align="center">
                                    <input name="target_thn_dpn_rinc[{{ $idx }}]" id="target_thn_dpn_rinc_{{ $idx }}"
                                        type="number" style="width:100%;text-align:right;" class="s-12 number" size="10"
                                        onblur="isFloat(this, 'Harga'); cboxChecked(this);"
                                        value="{{ $indikator_rincian->target_thn_dpn }}">
                                </td>

                            </tr>
                            @php $idx++; @endphp
                            @endforeach
                            @endif

                            @php $idx_ = $idx+5; @endphp
                            @for($idx;$idx<$idx_;$idx++) <tr>
                                <td align="center">
                                    <input name="cboxInput[]" id="cboxInput_{{ $idx }}" type="checkbox" class="s-12"
                                        style="width:100%;margin-left:0px" value="{{ $idx }}" \="">
                                </td>

                                <td align="center">
                                    <input name="no_indikator_rinc[{{ $idx }}]" id="no_indikator_rinc_{{ $idx }}"
                                        type="text" style="width:100%" class="s-12" size="44"
                                        onblur="cboxChecked(this);">
                                </td>
                                <td align="center">
                                    <input name="uraian_indikator_rinc[{{ $idx }}]" id="uraian_indikator_rinc_{{ $idx }}"
                                        type="text" style="width:100%" class="s-12" size="44"
                                        onblur="cboxChecked(this);">
                                </td>

                                <td align="center">
                                    <input name="satuan_rinc[{{ $idx }}]" id="satuan_rinc_{{ $idx }}" type="text"
                                        style="width:100%" class="s-12" maxlength="20" size="10">
                                </td>
                                <td align="center">
                                    <input name="target_thn_ini_rinc[{{ $idx }}]" id="target_thn_ini_rinc_{{ $idx }}"
                                        type="number" style="width:100%;text-align:right;" class="s-12 number" size="10"
                                        onblur="isFloat(this, 'target_thn_ini_rinc_'); cboxChecked(this);">
                                </td>

                                <td align="center">
                                    <input name="target_renstra_rinc[{{ $idx }}]" id="target_renstra_rinc_{{ $idx }}"
                                        type="number" style="width:100%;text-align:right;" class="s-12 number" size="10"
                                        onblur="isFloat(this, 'target_renstra_rinc_'); cboxChecked(this);">
                                </td>
                                <td align="center">
                                    <input name="realisasi_sd_thn_lalu_rinc[{{ $idx }}]"
                                        id="realisasi_sd_thn_lalu_rinc_{{ $idx }}" type="number"
                                        style="width:100%;text-align:right;" class="s-12 number" size="10"
                                        onblur="isFloat(this, 'realisasi_sd_thn_lalu_rinc_'); cboxChecked(this);">
                                </td>
                                <td align="center">
                                    <input name="target_thn_dpn_rinc[{{ $idx }}]" id="target_thn_dpn_rinc_{{ $idx }}"
                                        type="number" style="width:100%;text-align:right;" class="s-12 number" size="10"
                                        onblur="isFloat(this, 'target_thn_dpn_rinc_'); cboxChecked(this);">
                                </td>
                                </tr>
                                @endfor

                        </tbody>
                        <tfoot>
                            <tr class="bg-white">
                                <td colspan="10" class="p-2">
                                    <a href="javascript:deleteTableRow('tbl_indikator');"
                                        class="btn btn-outline-secondary btn-sm" title="Tambah data">
                                        <i class="icon-trash"></i>
                                    </a>
                                    <a href="javascript:addTableRow('tbl_indikator',3,'');"
                                        class="btn btn-outline-secondary btn-sm" title="Hapus data">
                                        <i class="icon-plus"></i>
                                    </a>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

        </form>





    </div>
</div>
@endsection

@section('script')
<script src="{{ asset('js/libs/form_utilities.js') }}"></script>
<script src="{{ asset('js/libs/validate_form.js') }}"></script>
<script src="{{ asset('js/libs/autoNumeric.js') }}"></script>
<script src="{{ asset('js/dataTables.rowGroup.min.js') }}"></script>
<script type="text/javascript">
    $("#btnCreate").prop("href","{{ route($route.'indikator_kinerja.form').'?tmrka_kegiatan_id='.$tmrka_kegiatan_id }}")


    $('.auto').autoNumeric('init');

    function cboxChecked(fld) {
        var arr = fld.id.split('_');
        var idx = arr[(arr.length-1)];
        var no_indikator_rinc = document.getElementById('no_indikator_rinc_'+idx).value;
        var uraian_indikator_rinc = document.getElementById('uraian_indikator_rinc_'+idx).value;
        var satuan_rinc = document.getElementById('satuan_rinc_'+idx).value;
        var target_thn_ini_rinc = document.getElementById('target_thn_ini_rinc_'+idx).value;
        var target_renstra_rinc = document.getElementById('target_renstra_rinc_'+idx).value;
        var realisasi_sd_thn_lalu_rinc = document.getElementById('realisasi_sd_thn_lalu_rinc_'+idx).value;
        var target_thn_dpn_rinc = document.getElementById('target_thn_dpn_rinc_'+idx).value;
        if (no_indikator_rinc != '' || uraian_indikator_rinc != '' || satuan_rinc != ''  || target_thn_ini_rinc != '' || target_renstra_rinc != '' || realisasi_sd_thn_lalu_rinc != '' || target_thn_dpn_rinc != '') {
            document.getElementById('cboxInput_'+idx).checked = true;
        } else {
            document.getElementById('cboxInput_'+idx).checked = false;
        }
    }


 


    function save(){ $('#form').submit(); }
    $('#form').on('submit', function (event) {
        if ($(this)[0].checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
        }else{
            $('#alert').html('');
            $('#btnSave').attr('disabled', true);

            url = "{{ route($route.'indikator_kinerja.store') }}";
            $.post(url, $(this).serialize(), function(data){
                $('#alert').html("<div role='alert' class='alert alert-success alert-dismissible'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button><strong>Success!</strong> " + data.message + "</div>");
                document.location.href = "{{ route($route.'indikator_kinerja').'?tmrka_kegiatan_id='.$tmrka_kegiatan_id }}";
            }, "JSON").fail(function(data){
                err = ''; respon = data.responseJSON;
                $.each(respon.errors, function(index, value){
                    err += "<li>" + value +"</li>";
                });
                $('#alert').html("<div role='alert' class='alert alert-danger alert-dismissible'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button><strong>Error!</strong> " + respon.message + "<ol class='pl-3 m-0'>" + err + "</ol></div>");
            }).always(function(){
                $('#btnSave').removeAttr('disabled');
            });
            return false;
        }
        $(this).addClass('was-validated');
    });

    

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