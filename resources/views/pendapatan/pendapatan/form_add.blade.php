@extends('layouts.page')
@section('content')
<div class="page bg-light">
    @include('layouts._includes.toolbar')
    <div class="container-fluid my-3">
        <div id="alert"></div>
        <form class="needs-validation" id="form" method="POST" novalidate>
            {{ method_field('POST') }} 
            <input type="hidden" name="tmsikd_setup_tahun_anggaran_id" value="{{ $tahun_id }}"/>
            <input type="hidden" name="tmrapbd_id" value="{{ $tmrapbd_id }}"/>
            <input type="hidden" name="tmsikd_satker_id" value="{{ $tmsikd_satker_id }}"/>
            <input type="hidden" name="tmsikd_sub_skpd_id" value="{{ $tmsikd_sub_skpd_id }}"/>
            <input type="hidden" name="tmsikd_bidang_id" value="{{ $tmsikd_bidang_id }}"/>
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="col-md-3">Tahun </label>
                                <label class="col-md-5">: {{ $tahuns->tahun }} &nbsp; </label>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3">PD </label>
                                <label class="col-md-8">: {{ '[ '.$tmsikd_satkers->kode.' ] '.$tmsikd_satkers->nama }}</label>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3">Unit Kerja </label>
                                <label class="col-md-8">: @if($tmsikd_sub_skpds !=null){{ '[ '.$tmsikd_sub_skpds->kode.' ] '.$tmsikd_sub_skpds->nama }}@endif</label>
                            </div>
                            <div class="form-group">
                                <label class="col-md-3">Bidang Urusan <small> * ) jika ada </small>  </label>
                                <label class="col-md-8">: [ {{ ($tmsikd_bidangs['kd_bidang']) ? $tmsikd_bidangs['kd_bidang'] : '' }} ] &nbsp; {{ ($tmsikd_bidangs['nm_bidang']) ? $tmsikd_bidangs['nm_bidang'] : ''  }}</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mt-2">
                <div class="card-header no-b">
                    <h6>List Rekening Mata Anggaran</h6>
                </div>
                <div class="card-body">
                    <div class="form-row form-inline">
                        <div class="col-md-12 centered">
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
                                <label for="rekObj_id" class="col-md-3">Rek Objek <span class="text-danger">*</span>&nbsp;:</label>
                                <div class="col-md-8">
                                    <select name="rekObj_id" id="rekObj_id" placeholder=""  class="form-control select2s col-md-4" autocomplete="off" onchange="selectOnChange('rekObj_id')">
                                        @foreach($rekObjs as $key=>$rekObj)
                                        <option value="{{ $rekObj->id }}"{{ $rekObj_id == $rekObj->id ? " selected='selected'" : ''}}>[{{ $rekObj->kd_rek_obj }}] {{ $rekObj->nm_rek_obj }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="rekRincian_id" class="col-md-3">Rek Rincian :</label>
                                <div class="col-md-8">
                                    <select name="rekRincian_id" id="rekRincian_id" placeholder=""  class="form-control select2s col-md-4" autocomplete="off"onchange="selectOnChange('rekRincian_id')">
                                        <option value="">&nbsp;</option>
                                        @foreach($rekRincians as $key=>$rekRincian)
                                        <option value="{{ $rekRincian->id }}"{{ $rekRincian_id == $rekRincian->id ? " selected='selected'" : ''}}>[{{ $rekRincian->kd_rek_rincian_obj }}] {{ $rekRincian->nm_rek_rincian_obj }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                           
                            <div class="form-group">
                                <label for="tmsikd_sumber_anggaran_id" class="col-md-3">Tanggal Pelaporan :</label>
                                <div class="col-md-8">
                                    <input type="date" class="form-control" name="tanggal_lapor" id="tanggal_lapor" required>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="tmsikd_sumber_anggaran_id" class="col-md-3">Sumber Anggaran :</label>
                                <div class="col-md-8">
                                    <select name="tmsikd_sumber_anggaran_id" id="tmsikd_sumber_anggaran_id" placeholder=""  class="form-control select2s col-md-4" autocomplete="off"onchange="">
                                        <option value="">&nbsp;</option>
                                        @foreach($tmsikd_sumber_anggarans as $tmsikd_sumber_anggaran)
                                        <option value="{{ $tmsikd_sumber_anggaran->id }}">[{{ $tmsikd_sumber_anggaran->kd_sumber_anggaran }}] {{ $tmsikd_sumber_anggaran->nm_sumber_anggaran }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="jumlah_mak" class="col-md-3">Jumlah :</label>
                                <div class="col-md-8">
                                <input name="jumlah_mak" id="jumlah_mak" type="number" placeholder="" class="form-control number" autocomplete="off" />
                            </div>
                        </div>
                    </div>
                    </div>

                    <div class="alert alert-danger">Pendapatan daerah yang sudah di entrikan pertanggal tidak di muncul kan lagi , jika ada kesalaha pada pengentrian data sebelumnya harap harap hapus dan entri kembali </div>
                    <table class="table table-striped mb-0 mt-2">
                        <thead>
                            <tr>
                                <th width="5%" class="p-2">&nbsp;</th>
                                <th width="10%">Kode Rekening</th>
                                <th width="30%">Uraian</th>
                                <th width="7%">Volume Transaksi</th>
                                <th width="7%">Satuan</th>
                                {{--  <th width="13%">Harga</th>
                                  --}}
                                <th width="15%">Jumlah Transaksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $idx = 0; $ttlMak = count($listRincianSubs); @endphp
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
                                <td style="{{ $style }}">
                                    @empty($rincianSub['cbox']['accRight'])
                                    <input name="volume[{{ $idx }}]" id="volume_{{ $idx }}" type="text" style="text-align:right" class="form-control auto" autocomplete="off" onblur="isFloat(this, 'Volume'); cboxChecked(this); calcJumlahMak(this); sumTotalMak({{ $ttlMak }}); " \="">
                                    @endempty
                                </td>
                                <td style="{{ $style }}">
                                    @empty($rincianSub['cbox']['accRight'])
                                    <input name="satuan[{{ $idx }}]" id="satuan_{{ $idx }}" type="text" class="form-control" autocomplete="off" maxlength="20" onblur="cboxChecked(this); " \="">
                                    @endempty
                                </td>
                                {{--  <td style="{{ $style }}">
                                    @empty($rincianSub['cbox']['accRight'])
                                    <input name="harga[{{ $idx }}]" id="harga_{{ $idx }}" type="number" style="text-align:right" class="form-control auto" autocomplete="off" onblur="isFloat(this, 'Harga'); cboxChecked(this); calcJumlahMak(this); sumTotalMak({{ $ttlMak }}); " \="">
                                    @endempty
                                </td>  --}}
                                <td style="{{ $style }}">
                                    @empty($rincianSub['cbox']['accRight'])
                                    <input name="jumlah[{{ $idx }}]" id="jumlah_{{ $idx }}" type="number" style="text-align:right" class="form-control number" autocomplete="off"  onblur="isFloat(this, 'Jumlah');" title="">
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
<script src="{{ asset('assets/template/js/validate_form.js') }}"></script>
<script src="{{ asset('assets/template/js/autoNumeric.js') }}"></script>
<script type="text/javascript">
    $('.auto').autoNumeric('init');

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
        var harga = document.getElementById('jumlah_'+idx).value;
        if (vol != '' || harga != '') {
            document.getElementById('jumlah_mak').value = (vol * harga).toFixed(2);
        } else {
            document.getElementById('jumlah_mak').value = '';
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
        document.getElementById('jumlah_mak').value = ttlMak;
        return true;
    }
   
    function add(){
        save_method = "add";
        $('#form').trigger('reset');
        $('input[name=_method]').val('POST');
        $('#txtSave').html('');
    }
    add();
  
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
                document.location.href = "{{ route($route.'index') }}";
            }, "JSON").fail(function(data){
                err = ''; respon = data.responseJSON;
                $.each(respon.errors, function(index, value){
                    err += "<li>" + value +"</li>";
                });
                $('#alert').html("<div role='alert' class='alert alert-danger alert-dismissible'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button><strong>Error!</strong> " + respon.message + "<ol class='pl-3'>" + err + "</ol></div>");
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
        if(f == 'rekJeni_id'){
            rekObj_id = '';
            rekRincian_id = '';
        }else if(f == 'rekObj_id'){
            rekRincian_id = '';
        }
        document.location.href = "{{ route($route.'create') }}?tahun_id={{ $tahun_id }}&tmrapbd_id={{ $tmrapbd_id }}&tmsikd_satker_id={{ $tmsikd_satker_id }}&tmsikd_sub_skpd_id={{ $tmsikd_sub_skpd_id }}&tmsikd_bidang_id={{ $tmsikd_bidang_id }}&rekJeni_id=" + rekJeni_id + "&rekObj_id=" + rekObj_id + "&rekRincian_id=" + rekRincian_id;
    }
</script>
@endsection