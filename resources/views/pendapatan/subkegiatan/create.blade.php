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
        <form class="needs-validation" id="form" method="POST" novalidate>
            {{ method_field('POST') }}

            <input type="hidden" name="tmsikd_setup_tahun_anggaran_id" value="{{ $tmrka_kegiatan->tmrka_program->tmrapbd->tmsikd_setup_tahun_anggaran->id }}"/>
            <input type="hidden" name="tmrapbd_id" value="{{ $tmrka_kegiatan->tmrka_program->tmrapbd->id }}"/>
            <input type="hidden" name="tmsikd_satker_id" value="{{ $tmrka_kegiatan->tmrka_program->tmsikd_satker->id }}"/>
            <input type="hidden" name="tmsikd_sub_skpd_id" value="{{ isset($tmrka_kegiatan->tmrka_program->tmsikd_sub_skpd->id) ? $tmrka_kegiatan->tmrka_program->tmsikd_sub_skpd->id:0 }}"/>
            <input type="hidden" name="tmsikd_bidang_id" value="{{ $tmrka_kegiatan->tmrka_program->tmsikd_bidang->id }}"/>
            <input type="hidden" name="kegiatan_id" value="{{ $tmrka_kegiatan->id }}"/>


        <div class="card mt-2">
            <div class="card-header no-b">
                <h6>List Rekening Mata Anggaran Kegiatan</h6>
            </div>
            <div class="card-body p-2">
                <div class="form-row form-inline">
                    <div class="col-md-12 centered">
                        <div class="form-group m-0">
                            <label for="rekKel_id" class="col-form-label s-12 col-md-3">Rek Kelompok <span class="text-danger ml-1">*</span>&nbsp;:</label>
                            <div class="col-md-6 p-0 mb-2">
                                <select name="rekKel_id" id="rekKel_id" placeholder="" class="form-control select2s r-0 s-12" autocomplete="off" onchange="selectOnChange('rekKel_id')">
                                    @foreach($rekKels as $key=>$rekKel)
                                    <option value="{{ $rekKel->id }}"{{ $rekKel_id == $rekKel->id ? " selected='selected'" : ''}}>[{{ $rekKel->kd_rek_kelompok }}] {{ $rekKel->nm_rek_kelompok }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group m-0">
                            <label for="rekJeni_id" class="col-form-label s-12 col-md-3">Rek Jenis <span class="text-danger ml-1">*</span>&nbsp;:</label>
                            <div class="col-md-6 p-0 mb-2">
                                <select name="rekJeni_id" id="rekJeni_id" placeholder="" class="form-control select2s r-0 s-12" autocomplete="off" onchange="selectOnChange('rekJeni_id')">
                                    @foreach($rekJenis as $key=>$rekJeni)
                                    <option value="{{ $rekJeni->id }}"{{ $rekJeni_id == $rekJeni->id ? " selected='selected'" : ''}}>[{{ $rekJeni->kd_rek_jenis }}] {{ $rekJeni->nm_rek_jenis }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group m-0">
                            <label for="rekObj_id" class="col-form-label s-12 col-md-3">Rek Objek <span class="text-danger ml-1">*</span>&nbsp;:</label>
                            <div class="col-md-6 p-0 mb-2">
                                <select name="rekObj_id" id="rekObj_id" placeholder=""  class="form-control select2s r-0 s-12 col-md-4" autocomplete="off" onchange="selectOnChange('rekObj_id')">
                                    @foreach($rekObjs as $key=>$rekObj)
                                    <option value="{{ $rekObj->id }}"{{ $rekObj_id == $rekObj->id ? " selected='selected'" : ''}}>[{{ $rekObj->kd_rek_obj }}] {{ $rekObj->nm_rek_obj }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group m-0">
                            <label for="rekRincian_id" class="col-form-label s-12 col-md-3">Rek Rincian :</label>
                            <div class="col-md-6 p-0 mb-2">
                                <select name="rekRincian_id" id="rekRincian_id" placeholder=""  class="form-control select2s r-0 s-12 col-md-4" autocomplete="off"onchange="selectOnChange('rekRincian_id')">
                                    <option value="">&nbsp;</option>
                                    @foreach($rekRincians as $key=>$rekRincian)
                                    <option value="{{ $rekRincian->id }}"{{ $rekRincian_id == $rekRincian->id ? " selected='selected'" : ''}}>[{{ $rekRincian->kd_rek_rincian_obj }}] {{ $rekRincian->nm_rek_rincian_obj }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group m-0">
                            <label for="tmsikd_sumber_anggaran_id" class="col-form-label s-12 col-md-3">Sumber Anggaran :</label>
                            <div class="col-md-6 p-0 mb-2">
                                <select name="tmsikd_sumber_anggaran_id" id="tmsikd_sumber_anggaran_id" placeholder=""  class="form-control select2s r-0 s-12 col-md-4" autocomplete="off"onchange="">
                                    <option value="">&nbsp;</option>
                                    @foreach($tmsikd_sumber_anggarans as $tmsikd_sumber_anggaran)
                                    <option value="{{ $tmsikd_sumber_anggaran->id }}">[{{ $tmsikd_sumber_anggaran->kd_sumber_anggaran }}] {{ $tmsikd_sumber_anggaran->nm_sumber_anggaran }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group m-0">
                            <label for="jumlah_mak" class="col-form-label s-12 col-md-3">Jumlah :</label>
                            <input name="jumlah_mak" id="jumlah_mak" type="number" placeholder="" class="form-control r-0 s-12 col-md-3 number" autocomplete="off" readonly="readonly" />
                            &nbsp;<small class="text-danger" id="over" style="display:none"></small>
                        </div>
                    </div>
                </div>
                <table class="table table-striped mb-0">
                    <thead>
                        <tr>
                            <th width="5%" class="p-2">&nbsp;</th>
                            <th width="10%">Kode Rekening</th>
                            <th width="30%">Uraian</th>
                            <th width="7%">Volume</th>
                            <th width="7%">Satuan</th>
                            <th width="13%">Harga</th>
                            <th width="15%">Jumlah</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $idx = 0; @endphp
                        @foreach($listRincianSubs as $rincianSub)
                        @php $style = (isset($rincianSub['style']) ? $rincianSub['style'] : ''); @endphp
                        <tr>
                            <td style="{{ $style }}" align="center">
                                <input name="cboxInput[]" id="cboxInput_{{ $idx }}" type="checkbox" style="margin-right:0px !important"@if(isset($rincianSub['cbox']['accRight'])) disabled="disabled"@else value="{{ $idx }}"@endif \="">
                            </td>
                            <td style="{{ $style }}">
                                {{ $rincianSub['kd_rek']['val'] }}
                            </td>
                            </td>
                            <td style="{{ $style }}">{{ $rincianSub['nm_rek']['val'] }}</td>
                            <input type="hidden" name="nm_rek[]" value="{{$rincianSub['nm_rek']['val']}}" >
                            <td style="{{ $style }}">
                                @empty($rincianSub['cbox']['accRight'])
                                <input name="volume[{{ $idx }}]" id="volume_{{ $idx }}" type="text" style="text-align:right" class="form-control r-0 s-12 auto" autocomplete="off" onblur="isFloat(this, 'Volume'); cboxChecked(this); calcJumlahMak(this); sumTotalMak(26); " \="">
                                @endempty
                            </td>
                            <td style="{{ $style }}">
                                @empty($rincianSub['cbox']['accRight'])
                                <input name="satuan[{{ $idx }}]" id="satuan_{{ $idx }}" type="text" class="form-control r-0 s-12" autocomplete="off" maxlength="20" onblur="cboxChecked(this); " \="">
                                @endempty
                            </td>
                            <td style="{{ $style }}">
                                @empty($rincianSub['cbox']['accRight'])
                                <input name="harga[{{ $idx }}]" id="harga_{{ $idx }}" type="number" style="text-align:right" class="form-control r-0 s-12 number" autocomplete="off" onblur="isFloat(this, 'Harga'); cboxChecked(this); calcJumlahMak(this); sumTotalMak(26); " \="">
                                @endempty
                            </td>
                            <td style="{{ $style }}">
                                @empty($rincianSub['cbox']['accRight'])
                                <input name="jumlah[{{ $idx }}]" id="jumlah_{{ $idx }}" type="number" style="text-align:right" class="form-control r-0 s-12 number" autocomplete="off" readonly="readonly" onblur="isFloat(this, 'Jumlah');" title="">
                                @endempty
                            </td>
                        </tr>
                        <input name="kd_rekening[{{ $idx }}]" id="kd_rekening_{{ $idx }}" type="hidden" value="{{ $rincianSub['kd_rek']['val'] }}" />
                        <input name="cboxInputVal[{{ $idx }}]" id="cboxInputVal_{{ $idx }}" type="hidden" value="{{ $rincianSub['tmrekening_akun_kelompok_jenis_objek_rincian_sub_id']['val'] }}" />
                        @php $idx++ @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        </form>
    </div>
</div>
@endsection

@section('script')
<script src="{{ asset('js/libs/validate_form.js') }}"></script>
<script src="{{ asset('js/libs/autoNumeric.js') }}"></script>
<script type="text/javascript">
    var pagu = {{ $sisa_pagu  }};
    var pagu_f = '{{ $sisa_pagu_f  }}';
    $("#btnRead").prop("href","{{ route($route.'index').'?tmrka_kegiatan_id='.$tmrka_kegiatan_id }}")


    // $('.auto').autoNumeric('init');

    function cboxChecked(fld) {
        var arr = fld.id.split('_');
        var idx = arr[(arr.length-1)];
        var vol = $('#volume_'+idx).val();
        var satuan = $('#satuan_'+idx).val();
        var harga = $('#harga_'+idx).val();
        if (vol != '' || satuan != '' || harga != '') {
            document.getElementById('cboxInput_'+idx).checked = true;
        } else {
            document.getElementById('cboxInput_'+idx).checked = false;
        }
    }

    function calcJumlahMak(fld) {
        var arr = fld.id.split('_');
        var idx = arr[(arr.length-1)];
        var vol = document.getElementById('volume_'+idx).value;
        var harga = document.getElementById('harga_'+idx).value;
        if (vol != '' || harga != '') {
            document.getElementById('jumlah_'+idx).value = (vol * harga).toFixed(2);
        } else {
            document.getElementById('jumlah_'+idx).value = '';
        }
        return 1;
    }

    function sumTotalMak(ttlRow) {
        var ttlMak = 0;
        var idx = 0;
        while (idx < ttlRow) {
            var fldJumlah = document.getElementById('jumlah_'+idx);
            if (fldJumlah != null && document.getElementById('cboxInput_'+idx).checked) {
                ttlMak += parseFloat(fldJumlah.value);
            }
            idx++;
        }

        // if(ttlMak > pagu ){
        //     $("#btnSave").prop("onclick",null);
        //     $('#jumlah_mak').prop("title",'Melebihi Pagu Indikatif');
        //     $('#jumlah_mak').addClass("is-invalid");
        //     $('#over').html('Melebihi batas pagu indikatif (maks: '+pagu_f+' )').show();
            
        // }else{
        //     $("#btnSave").attr("onclick",'javascript:save();');
        //     $('#jumlah_mak').prop("title",'');
        //     $('#jumlah_mak').removeClass("is-invalid");
        //     $('#over').hide();
        // }
        document.getElementById('jumlah_mak').value = ttlMak;
        return true;
    }
    
    @if(!isset($id))
        function add(){
            save_method = "add";
            $('#form').trigger('reset');
            $('input[name=_method]').val('POST');
            $('#txtSave').html('');
            $('#tmsikd_setup_tahun_anggaran_id').focus();
        }
        add();
    @else
    function edit(id){
        save_method = 'edit';
        $('#txtSave').html("Perubahan");
        $('input[name=_method]').val('PATCH');
        $('#jns_rka').val("{{$tmrka->jns_rka}}").trigger("change.select2");
        $('#jns_sumber_data').val("{{$tmrka->jns_sumber_data}}").trigger("change.select2");
        $('#status_rka').val("{{$tmrka->status_rka}}").trigger("change.select2");
        $('#keterangan').val("{{$tmrka->keterangan}}");
        $('#id').val("{{ $id }}");
    }
    edit();
    @endif

    function save(){ $('#form').submit(); }
    $('#form').on('submit', function (event) {
        if ($(this)[0].checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
        }else{
            $('#alert').html('');
            $('#btnSave').attr('disabled', true);

            url = (save_method == 'add') ? "{{ route($route.'store') }}" : "{{ route($route.'update', ':id') }}".replace(':id', $('#id').val());
            $.post(url, $(this).serialize(), function(data){
                $('#alert').html("<div role='alert' class='alert alert-success alert-dismissible'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button><strong>Success!</strong> " + data.message + "</div>");
                document.location.href = "{{ route($route.'index').'?tmrka_kegiatan_id='.$tmrka_kegiatan_id }}";
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

    function selectOnChange(f){
        rekJeni_id = $('#rekJeni_id').val();
        rekObj_id = $('#rekObj_id').val();
        rekRincian_id = $('#rekRincian_id').val();
        rekKel_id = $('#rekKel_id').val();
        if(f == 'rekKel_id'){
            rekJeni_id = '';
            rekObj_id = '';
            rekRincian_id = '';
        }
        if(f == 'rekJeni_id'){
            rekObj_id = '';
            rekRincian_id = '';
        }else if(f == 'rekObj_id'){
            rekRincian_id = '';
        }
        document.location.href = "{{ route($route.'create') }}?tmrka_kegiatan_id={{$tmrka_kegiatan_id}}&rekJeni_id=" + rekJeni_id + "&rekObj_id=" + rekObj_id + "&rekRincian_id=" + rekRincian_id+ "&rekKel_id=" + rekKel_id;
    }
</script>
@endsection
