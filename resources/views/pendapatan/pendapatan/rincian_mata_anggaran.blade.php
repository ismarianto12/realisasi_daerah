@extends('layouts.page')

@section('content')
<div class="page bg-light">
    @include('layouts._includes.toolbar')
    <div class="container-fluid my-3">
        <div id="alert"></div>
        <form class="needs-validation" id="form" method="POST" novalidate>
            {{ method_field('POST') }}
            <input name="tmrka_mata_anggaran_id" id="tmrka_mata_anggaran_id" type="hidden" value="{{ $tmrka_mata_anggaran_id }}" />
            <input name="jumlah_ttl" id="jumlah_ttl" type="hidden" value="{{ $edit == null ? 0 : $r->jumlah }}" />
            <input name="ttl_rows" id="ttl_rows" type="hidden" value="5" />        
            <div class="card">
                <div class="card-body">
                    <div class="form-row form-inline">
                        <div class="col-md-12">
                            <div class="form-group m-0">
                                <label class="col-form-label s-12 col-md-3">Tahun :</label>
                                <label class="r-0 s-12 col-md-5 tl">{{ $tmrapbds->tmsikd_setup_tahun_anggaran->tahun }} &nbsp; {{ $tmrapbds->jenis }}</label>
                            </div>
                            <div class="form-group m-0">
                                <label class="col-form-label s-12 col-md-3">PD :</label>
                                <label class="r-0 s-12 col-md-8 tl">{{ '['.$rka->tmrka->tmsikd_satker->kode.'] '.$rka->tmrka->tmsikd_satker->nama }}</label>
                            </div>
                            <div class="form-group m-0">
                                <label class="col-form-label s-12 col-md-3">Unit Kerja :</label>
                                <label class="r-0 s-12 col-md-5 tl">
                                    {{ $rka->tmrka->tmsikd_sub_skpd == null ? '' : '['.$rka->tmrka->tmsikd_sub_skpd->kode.']' }} &nbsp; 
                                    {{ $rka->tmrka->tmsikd_sub_skpd == null ? '' : $rka->tmrka->tmsikd_sub_skpd->nama }}
                                </label>
                            </div>
                            <div class="form-group m-0">
                                <label class="col-form-label s-12 col-md-3">Bidang Urusan :</label>
                                <label class="r-0 s-12 col-md-8 tl">{{ '['.$rka->tmrka->tmsikd_bidang->kd_bidang.'] '.$rka->tmrka->tmsikd_bidang->nm_bidang }}</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-header no-b">
                    <h6><strong>Rekening Mata Anggaran Kegiatan</strong></h6>
                </div>
                <div class="card-body">
                    <div class="form-row form-inline">
                        <div class="col-md-12">
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
                        </div>
                    </div>
                    <table class="table mb-0 mt-2">
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
                                @if (count($check) === 0)
                                    <td>
                                        <input name="volume" id="volume" type="number" style="width:100%;text-align:right" class="s-12 number"  maxlength="20" size="20" value="{{ $r->volume }}" onblur=" isFloat(this, 'Volume'); calcJumlahMak(this);">
                                    </td>
                                    <td>
                                        <input name="satuan" id="satuan" type="text" style="width:100%" class="s-12" maxlength="20"  size="30" value="{{ $r->satuan }}">
                                    </td>
                                    <td>
                                        <input name="harga" id="harga" type="number" style="width:100%;text-align:right" class="s-12 number"  maxlength="20" size="20" value="{{ $r->harga }}" onblur=" isFloat(this, 'Harga'); calcJumlahMak(this);">
                                    </td>
                                    <td>
                                        <input name="jumlah" id="jumlah" type="number" style="width:100%;text-align:right" class="s-12 number" readonly="readonly" maxlength="20" size="20" value="{{ $r->jumlah }}" onblur=" isFloat(this, 'Jumlah');">
                                    </td>
                                @else
                                    <td>
                                        <input name="volume" id="volume" type="number" style="width:100%;text-align:right" class="s-12 number" readonly="readonly" maxlength="20" size="20" value="{{ $r->volume }}" onblur=" isFloat(this, 'Volume');">
                                    </td>
                                    <td>
                                        <input name="satuan" id="satuan" type="text" style="width:100%" class="s-12" maxlength="20" readonly="readonly" size="30" value="{{ $r->satuan }}">
                                    </td>
                                    <td>
                                        <input name="harga" id="harga" type="number" style="width:100%;text-align:right" class="s-12 number" readonly="readonly" maxlength="20" size="20" value="{{ $r->harga }}" onblur=" isFloat(this, 'Harga');">
                                    </td>
                                    <td>
                                        <input name="jumlah" id="jumlah" type="number" style="width:100%;text-align:right" class="s-12 number" readonly="readonly" maxlength="20" size="20" value="{{ $r->jumlah }}" onblur=" isFloat(this, 'Jumlah');">
                                    </td>
                                @endif
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
                                <th colspan="10" class="no-b p-2 card-header">
                                    <h6><strong>Rincian Sub Mata Anggaran Kegiatan</strong></h6>
                                </th>
                            </tr>
                            <tr class="text-center">
                                <th rowspan="2" width="4%">&nbsp;</th>
                                <th rowspan="2" width="10%">Jns Item</th>
                                <th colspan="3" class="no-b">No Item</th>
                                <th rowspan="2" width="30%">Uraian (<span class="text-danger ml-1">*</span> )</th>
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
                            @php $idx = 0; @endphp
                            @if($rincians)
                            @foreach($rincians as $rincian)
                            <input type="hidden" name="tmrka_rincian_mata_anggaran_id[{{ $idx }}]" id="tmrka_rincian_mata_anggaran_id_{{ $idx }}" value="{{ $rincian->id }}" />
                            <tr>
                                <td align="center">
                                    <input name="cboxInput[]" id="cboxInput_{{ $idx }}" type="checkbox" class="s-12" style="width:100%;margin-left:0px" value="{{ $idx }}" \="">
                                </td>
                                <td align="center">
                                    <select name="jns_item_rinc[{{ $idx }}]" id="jns_item_rinc_{{ $idx }}" class="s-12" style="width:100%" onchange="onChangeJnsItem(this); ">
                                        @foreach($jnsItems as $key=>$jnsItem)
                                        <option value="{{ $key }}"{{ $rincian->jns_item == $key ?  'selected="selected" ' : '' }}>{!! $jnsItem !!}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td align="center">
                                    <input name="no_item_h_rinc[{{ $idx }}]" id="no_item_h_rinc_{{ $idx }}" type="number" style="width:100%;text-align:right;" class="s-12 number" size="3" onblur=" isInteger(this, 'No Item H');" value="{{ $rincian->no_item_h }}">
                                </td>
                                <td align="center">
                                    <input name="no_item_s_rinc[{{ $idx }}]" id="no_item_s_rinc_{{ $idx }}" type="number" style="width:100%;text-align:right;" class="s-12 number" size="3" onblur=" isInteger(this, 'No Item S');"  value="{{ $rincian->no_item_s }}">
                                </td>
                                <td align="center">
                                    <input name="no_item_rinc[{{ $idx }}]" id="no_item_rinc_{{ $idx }}" type="number" style="width:100%;text-align:right;" class="s-12 number" size="3" onblur=" isInteger(this, 'No Item'); "  value="{{ $rincian->no_item }}">
                                </td>
                                <td align="center">
                                    <input name="uraian_rinc[{{ $idx }}]" id="uraian_rinc_{{ $idx }}" type="text" style="width:100%" class="s-12" size="44" onblur="cboxChecked(this);"  value="{{ $rincian->uraian }}">
                                </td>
                                <td align="center">
                                    <input name="volume_rinc[{{ $idx }}]" id="volume_rinc_{{ $idx }}" type="number" style="width:100%;text-align:right;" class="s-12 number" size="10" onblur="isFloat(this, 'Volume'); cboxChecked(this); calcJumlahRincMak(this); sumTotalRincMak(); "  value="{{ $rincian->volume }}">
                                </td>
                                <td align="center">
                                    <input name="satuan_rinc[{{ $idx }}]" id="satuan_rinc_{{ $idx }}" type="text" style="width:100%" class="s-12" maxlength="20" size="10"  value="{{ $rincian->satuan }}">
                                </td>
                                <td align="center">
                                    <input name="harga_rinc[{{ $idx }}]" id="harga_rinc_{{ $idx }}" type="number" style="width:100%;text-align:right;" class="s-12 number" size="10" onblur="isFloat(this, 'Harga'); cboxChecked(this); calcJumlahRincMak(this); sumTotalRincMak(); "  value="{{ $rincian->harga }}">
                                </td>
                                <td align="center">
                                    <input name="jumlah_rinc[{{ $idx }}]" id="jumlah_rinc_{{ $idx }}" type="text" style="width:100%;text-align:right;" class="s-12 number" size="15" disabled="disabled" readonly="readonly"  value="{{ Html_number::decimal($rincian->jumlah) }}">
                                </td>
                            </tr>
                            @php $idx++; @endphp
                            @endforeach
                            @endif

                            @php $idx_ = $idx+5; @endphp
                            @for($idx;$idx<$idx_;$idx++)
                            <tr>
                                <td align="center">
                                    <input name="cboxInput[]" id="cboxInput_{{ $idx }}" type="checkbox" class="s-12" style="width:100%;margin-left:0px" value="{{ $idx }}" \="">
                                </td>
                                <td align="center">
                                    <select name="jns_item_rinc[{{ $idx }}]" id="jns_item_rinc_{{ $idx }}" class="s-12" style="width:100%" onchange="onChangeJnsItem(this); ">
                                        @foreach($jnsItems as $key=>$jnsItem)
                                        <option value="{{ $key }}">{!! $jnsItem !!}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td align="center">
                                    <input name="no_item_h_rinc[{{ $idx }}]" id="no_item_h_rinc_{{ $idx }}" type="number" style="width:100%;text-align:right;" class="s-12 number" size="3" onblur=" isInteger(this, 'No Item H'); " \="">
                                </td>
                                <td align="center">
                                    <input name="no_item_s_rinc[{{ $idx }}]" id="no_item_s_rinc_{{ $idx }}" type="number" style="width:100%;text-align:right;" class="s-12 number" size="3" onblur=" isInteger(this, 'No Item S'); " \="">
                                </td>
                                <td align="center">
                                    <input name="no_item_rinc[{{ $idx }}]" id="no_item_rinc_{{ $idx }}" type="number" style="width:100%;text-align:right;" class="s-12 number" size="3" onblur=" isInteger(this, 'No Item'); " \="">
                                </td>
                                <td align="center">
                                    <input name="uraian_rinc[{{ $idx }}]" id="uraian_rinc_{{ $idx }}" type="text" style="width:100%" class="s-12" size="44" onblur="cboxChecked(this); " \="">
                                </td>
                                <td align="center">
                                    <input name="volume_rinc[{{ $idx }}]" id="volume_rinc_{{ $idx }}" type="number" style="width:100%;text-align:right;" class="s-12 number" size="10" onblur="isFloat(this, 'Volume'); cboxChecked(this); calcJumlahRincMak(this); sumTotalRincMak(); " \="">
                                </td>
                                <td align="center">
                                    <input name="satuan_rinc[{{ $idx }}]" id="satuan_rinc_{{ $idx }}" type="text" style="width:100%" class="s-12" maxlength="20" size="10" \="">
                                </td>
                                <td align="center">
                                    <input name="harga_rinc[{{ $idx }}]" id="harga_rinc_{{ $idx }}" type="number" style="width:100%;text-align:right;" class="s-12 number" size="10" onblur="isFloat(this, 'Harga'); cboxChecked(this); calcJumlahRincMak(this); sumTotalRincMak(); " \="">
                                </td>
                                <td align="center">
                                    <input name="jumlah_rinc[{{ $idx }}]" id="jumlah_rinc_{{ $idx }}" type="number" style="width:100%;text-align:right;" class="s-12 number" size="15" disabled="disabled" readonly="readonly">
                                </td>
                            </tr>
                            @endfor
                            <tr class="bg-white">
                                <td colspan="10" class="p-2">
                                    <a href="javascript:deleteTableRow('sub_mak'); sumTotalRincMak()" class="btn btn-outline-secondary btn-sm" title="Tambah data">
                                        <i class="icon-trash"></i>
                                    </a>
                                    <a href="javascript:addTableRow('sub_mak',3,'');" class="btn btn-outline-secondary btn-sm" title="Hapus data">
                                        <i class="icon-plus"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{ asset('js/libs/form_utilities.js') }}"></script>
<script src="{{ asset('js/libs/validate_form.js') }}"></script>
<script src="{{ asset('js/libs/autoNumeric.js') }}"></script>
<script type="text/javascript">
    $('.auto').autoNumeric('init');

    function cboxChecked(fld) {
        var arr = fld.id.split('_');
        var idx = arr[(arr.length-1)];
        var vol = document.getElementById('volume_rinc_'+idx).value;
        var satuan = document.getElementById('satuan_rinc_'+idx).value;
        var harga = document.getElementById('harga_rinc_'+idx).value;
        var uraian = document.getElementById('uraian_rinc_'+idx).value;
        if (vol != '' || satuan != '' || harga != ''  || uraian != '') {
            document.getElementById('cboxInput_'+idx).checked = true;
        } else {
            document.getElementById('cboxInput_'+idx).checked = false;
        }
    }
    
    function onChangeJnsItem(fld) {
        var incrval = 5;
        var arr = fld.id.split('_');
        var idx = arr[(arr.length-1)];
        opt = 'rinc_';
        if (idx == 0) {
            if ($('#id_rka_mata_anggaran').val() == '') {
                hpre = 0;
                spre = 0;
                ipre = 0;
                incrval = 1;
            } else {
                hpre = null;
                spre = null;
                ipre = null;
                incrval = null;
            }
        } else {
            hpre = parseInt($('#no_item_h_rinc_'+(parseInt(idx)-1).toString()).val()) || 0;
            spre = parseInt($('#no_item_s_rinc_'+(parseInt(idx)-1).toString()).val()) || 0;
            ipre = parseInt($('#no_item_rinc_'+(parseInt(idx)-1).toString()).val()) || 0;
        } 
        if (fld.options[fld.selectedIndex].value == 'H') {
            if (hpre == 1) incrval--;
            $('#volume_rinc_'+idx).val('');
            $('#satuan_rinc_'+idx).val('');
            $('#harga_rinc_'+idx).val('');
            $('#jumlah_rinc_'+idx).val('');
            $('#no_item_h_rinc_'+idx).val(hpre+incrval);
            $('#no_item_s_rinc_'+idx).val(0);
            $('#no_item_rinc_'+idx).val(0);
            $('#no_item_h_rinc_'+idx).prop('disabled',false);
            $('#no_item_s_rinc_'+idx).prop('disabled',true);
            $('#no_item_rinc_'+idx).prop('disabled',true);
            $('#uraian_rinc_'+idx).prop('disabled',false);
            $('#volume_rinc_'+idx).prop('disabled',true);
            $('#satuan_rinc_'+idx).prop('disabled',true);
            $('#harga_rinc_'+idx).prop('disabled',true);
            $('#jumlah_rinc_'+idx).prop('disabled',true);
        } else if (fld.options[fld.selectedIndex].value == 'S') {
            if (spre == 1) incrval--;
            $('#volume_rinc_'+idx).val('');
            $('#satuan_rinc_'+idx).val('');
            $('#harga_rinc_'+idx).val('');
            $('#jumlah_rinc_'+idx).val('');
            $('#no_item_h_rinc_'+idx).val(hpre);
            $('#no_item_s_rinc_'+idx).val(spre+incrval);     
            $('#no_item_rinc_'+idx).val(0);
            $('#no_item_h_rinc_'+idx).prop('disabled',false);
            $('#no_item_s_rinc_'+idx).prop('disabled',false);
            $('#no_item_rinc_'+idx).prop('disabled',true);
            $('#uraian_rinc_'+idx).prop('disabled',false);
            $('#volume_rinc_'+idx).prop('disabled',true);
            $('#satuan_rinc_'+idx).prop('disabled',true);
            $('#harga_rinc_'+idx).prop('disabled',true);
            $('#jumlah_rinc_'+idx).prop('disabled',true);
        } else if (fld.options[fld.selectedIndex].value == 'I') {
            if (ipre == 1) incrval--;
            $('#no_item_h_rinc_'+idx).val(hpre);
            $('#no_item_s_rinc_'+idx).val(spre);
            $('#no_item_rinc_'+idx).val(ipre+incrval);
            $('#no_item_h_rinc_'+idx).prop('disabled',false);
            $('#no_item_s_rinc_'+idx).prop('disabled',false);
            $('#no_item_rinc_'+idx).prop('disabled',false);
            $('#uraian_rinc_'+idx).prop('disabled',false);
            $('#volume_rinc_'+idx).prop('disabled',false);
            $('#satuan_rinc_'+idx).prop('disabled',false);
            $('#harga_rinc_'+idx).prop('disabled',false);
            $('#jumlah_rinc_'+idx).prop('disabled',false);
        } else {
            $('#no_item_h_rinc_'+idx).val('');
            $('#no_item_s_rinc_'+idx).val('');
            $('#no_item_rinc_'+idx).val('');
            $('#volume_rinc_'+idx).val('');
            $('#satuan_rinc_'+idx).val('');
            $('#harga_rinc_'+idx).val('');
            $('#jumlah_rinc_'+idx).val('');
            $('#no_item_h_rinc_'+idx).prop('disabled',true);
            $('#no_item_s_rinc_'+idx).prop('disabled',true);
            $('#no_item_rinc_'+idx).prop('disabled',true);
            $('#uraian_rinc_'+idx).prop('disabled',true);
            $('#volume_rinc_'+idx).prop('disabled',true);
            $('#satuan_rinc_'+idx).prop('disabled',true);
            $('#harga_rinc_'+idx).prop('disabled',true);
            $('#jumlah_rinc_'+idx).prop('disabled',true);
        }
    }

    function calcJumlahMak(fld) {
        var vol = document.getElementById('volume').value;
        var harga = document.getElementById('harga').value;
        if (vol != '' || harga != '') {
            document.getElementById('jumlah').value = (vol * harga).toFixed(2);
        }
        return 1;
    }

    function calcJumlahRincMak(fld) {
        var arr = fld.id.split('_');
        var idx = arr[(arr.length-1)];
        var vol = document.getElementById('volume_rinc_'+idx).value;
        var harga = document.getElementById('harga_rinc_'+idx).value;
        if (vol != '' || harga != '') {
            document.getElementById('jumlah_rinc_'+idx).value = (vol * harga).toFixed(2);
        } else {
            document.getElementById('jumlah_rinc_'+idx).value = '';
        }
        return 1;
    }

    function countTtlRows() {
        document.getElementById('ttl_rows').value += 1;
    }

    function sumTotalRincMak() {
        var ttlMak = 0;
        var ttlRows = document.getElementById('ttl_rows');
        var jmlTtl = document.getElementById('jumlah_ttl');
        var idx = 0;
        while (idx < ttlRows.value) {
            var fldJumlah = document.getElementById('jumlah_rinc_'+idx);
            if (fldJumlah != null && fldJumlah.value != '') {
                ttlMak += parseFloat(fldJumlah.value);
            }
            idx++;
        }
        if (jmlTtl != null) ttlMak += parseFloat(jmlTtl.value);
        if (ttlMak > 0) {
            document.getElementById('jumlah').value = ttlMak;
            document.getElementById('volume').value = '';
            document.getElementById('satuan').value = '';
            document.getElementById('harga').value = '';
            document.getElementById('volume').readOnly = true;
            document.getElementById('satuan').readOnly = true;
            document.getElementById('harga').readOnly = true;
        } else if (jmlTtl == null) {
            document.getElementById('jumlah').value = 0;
            document.getElementById('volume').readOnly = false;
            document.getElementById('satuan').readOnly = false;
            document.getElementById('harga').readOnly = false;
        }
    }

    for(i=0;i<{{ $idx}};i++)
        $('#jns_item_rinc_' + i).change();

    function save(){ $('#form').submit(); }
    $('#form').on('submit', function (event) {
        if ($(this)[0].checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
        }else{
            $('#alert').html('');
            $('#btnSave').attr('disabled', true);

            url = "{{ route($route.'store') }}";
            $.post(url, $(this).serialize(), function(data){
                $('#alert').html("<div role='alert' class='alert alert-success alert-dismissible'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button><strong>Success!</strong> " + data.message + "</div>");
                document.location.href = "{{ route($permission.'.show', $tmrka_mata_anggaran_id) }}";
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
</script>
@endsection