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
        @if(count($rekrincian) == 0)
        <tr>
            <td colspan="6">
                <div class="alert alert-danger">
                    <h3>Data rincian object kosong (dinas opd pada rincian object ini belum di tambahkan).</h3>
                </div>
            </td>
        </tr>
        @else

        @php $idx = 0; $ttlMak = count($rekrincian); @endphp
        @foreach($rekrincian as $rinci)
        @php
        $pendapatan =
         $tmpendapatan::where('tmrekening_akun_kelompok_jenis_objek_rincian_id',$rinci['kd_rek_rincian_obj'])->first();
        $style = '';
        @endphp
        <tr>
            <td style="{{ $style }}" align="center">
                <input name="cboxInput[]" id="cboxInput_{{ $idx }}" type="checkbox" style="margin-right:0px !important"
                    value="{{ $idx }}">
            </td>
            <td style="{{ $style }}">
                {{ $rinci['kd_rek_rincian_obj'] }}
            </td>
            </td>
            <td style="{{ $style }}">{{ $rinci['nm_rek_rincian_obj'] }}</td>
            <td style="{{ $style }}">
                <input name="volume[{{ $idx }}]" id="volume_{{ $idx }}" type="text" style="text-align:right"
                    class="form-control auto" autocomplete="off"
                    onblur="isFloat(this, 'Volume'); cboxChecked(this); calcJumlahMak(this); sumTotalMak({{ $ttlMak }}); "
                    \="" value="{{ $pendapatan['volume'] }}">
            </td> 
            <td style="{{ $style }}">
                <input name="satuan[{{ $idx }}]" id="satuan_{{ $idx }}" type="text" class="form-control"
                    autocomplete="off" maxlength="20" onblur="cboxChecked(this); " \="{{ $pendapatan['satuan'] }}">
            </td>

            <td style="{{ $style }}">
                <input name="jumlah[{{ $idx }}]" id="jumlah_{{ $idx }}" type="number" style="text-align:right"
                    class="form-control number" autocomplete="off" onblur="isFloat(this, 'Jumlah');" title=""
                    value="{{ $pendapatan['jumlah'] }}">
            </td>
        </tr> 
        <input name="kd_rekening[{{ $idx }}]" id="kd_rekening_{{ $idx }}" type="hidden" value="{{ $pendapatan['tmrekening_akun_kelompok_jenis_objek_rincian_sub_id'] }}" />
        <input name="cboxInputVal[{{ $idx }}]" id="cboxInputVal_{{ $idx }}" type="hidden" value="{{ $pendapatan['tmrekening_akun_kelompok_jenis_objek_rincian_id'] }}" />
        <input name="cboxInputRinci[{{ $idx }}]" id="cboxInputRinci{{ $idx }}" type="hidden" value="{{ $pendapatan['tmrekening_akun_kelompok_jenis_objek_rincian_id'] }}" />
        @php $idx++ @endphp


        @php $sub_rincis = $rekrincian_sub::where('tmrekening_akun_kelompok_jenis_objek_rincian_id',$rinci['kd_rek_rincian_obj'])->get(); @endphp
        @foreach($sub_rincis as $sub_rinci)
        @php
        $pendapatan =
         $tmpendapatan::where('tmrekening_akun_kelompok_jenis_objek_rincian_sub_id',$sub_rinci['kd_rek_rincian_objek_sub'])->first();
        $style = '';
        @endphp
        <tr>
            <td style="{{ $style }}" align="center">
                <input name="cboxInput[]" id="cboxInput_{{ $idx }}" type="checkbox" style="margin-right:0px !important"
                    value="{{ $idx }}">
            </td>
            <td style="{{ $style }}">
                {{ $sub_rinci['kd_rek_rincian_obj'] }}
            </td>
            </td>
            <td style="{{ $style }}">{{ $sub_rinci['nm_rek_rincian_obj'] }}</td>
            <td style="{{ $style }}">
                <input name="volume[{{ $idx }}]" id="volume_{{ $idx }}" type="text" style="text-align:right"
                    class="form-control auto" autocomplete="off"
                    onblur="isFloat(this, 'Volume'); cboxChecked(this); calcJumlahMak(this); sumTotalMak({{ $ttlMak }}); "
                    \="" value="{{ $pendapatan['volume'] }}">
            </td>

            <td style="{{ $style }}">
                <input name="satuan[{{ $idx }}]" id="satuan_{{ $idx }}" type="text" class="form-control"
                    autocomplete="off" maxlength="20" onblur="cboxChecked(this); " \="{{ $pendapatan['satuan'] }}">
            </td>

            <td style="{{ $style }}">
                <input name="jumlah[{{ $idx }}]" id="jumlah_{{ $idx }}" type="number" style="text-align:right"
                    class="form-control number" autocomplete="off" onblur="isFloat(this, 'Jumlah');" title=""
                    value="{{ $pendapatan['jumlah'] }}">
            </td>
        </tr> 
        @endforeach
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