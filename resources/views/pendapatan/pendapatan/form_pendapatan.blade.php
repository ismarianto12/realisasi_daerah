<table class="table table-striped mb-0 mt-2">
    <thead>
        <tr>
            <th width="5%" class="p-2">&nbsp;</th>
            <th width="10%">Kode Rekening</th>
            <th width="30%">Uraian</th>
            <th width="7%">Volume Transaksi</th>
            <th width="7%">Satuan</th> 
            <th width="15%">Jumlah Transaksi</th>
        </tr>
    </thead>
    <tbody>
        @if($dataSet == '' || $dataSet == 0)     

        <tr><td colspan="6"><div class="alert alert-danger"><center>Data rincian object kosong.</center></div></td></tr> 
        
        @else

        @php $idx = 0; $ttlMak = count($dataSet); @endphp
        @foreach($dataSet as $rincianSub)
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
        <input name="cboxInputRinci[{{ $idx }}]" id="cboxInputRinci{{ $idx }}" type="hidden" value="{{ $rincianSub['tmrekening_akun_kelompok_jenis_objek_rincian_id']['val'] }}" />
        @php $idx++ @endphp
        @endforeach
        @endif
    </tbody>
</table>
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

</script>




