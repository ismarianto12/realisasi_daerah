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
        @if($fdataset == 0)
        <tr>
            <td colspan="6">
                <div class="alert alert-danger">
                    <h3>Data rincian object kosong (dinas opd pada rincian object ini belum di tambahkan).</h3>
                </div>
            </td>
        </tr>
        @else
        @php $idx= 0;
        $ttlMak = count($fdataset);
        @endphp;
        @foreach($fdataset as $key => $list)
        @php
        $style = $list['style']['val'];
        @endphp
        <tr>
            <td style="{{ $style }}" align="center">
                <input name="cboxInput[]" id="cboxInput_{{ $idx }}" type="checkbox" style="margin-right:0px !important"
                    value="{{ $idx }}">
            </td>
            <td style="{{ $style }}">
                {{ $list['kd_rek']['val'] }}
            </td>
            </td>
            <td style="{{ $style }}">{{ $list['nm_rek']['val'] }}</td>
            <td style="{{ $style }}">
                <input name="volume[{{ $idx }}]" id="volume_{{ $idx }}" type="text" style="text-align:right"
                    class="form-control auto" autocomplete="off"
                    onblur="isFloat(this, 'Volume'); cboxChecked(this); calcJumlahMak(this); sumTotalMak({{ $ttlMak }}); "
                    \="" value="">
            </td>
            <td style="{{ $style }}">
                <input name="satuan[{{ $idx }}]" id="satuan_{{ $idx }}" type="text" class="form-control"
                    autocomplete="off" maxlength="20" onblur="cboxChecked(this); " \="">
            </td>
            <td style="{{ $style }}">
                <input name="jumlah[{{ $idx }}]" id="jumlah_{{ $idx }}" type="number" style="text-align:right"
                    class="form-control number" autocomplete="off" onblur="isFloat(this, 'Jumlah');" title="" value="">
            </td>
        </tr>
        <input name="cboxInputVal[{{ $idx }}]" id="cboxInputVal_{{ $idx }}" type="hidden"
            value="{{ $list['kd_rek_rincian_obj']['val'] }}" />

        <input name="kd_rincian_sub[{{ $idx }}]" type="hidden" value="{{ $list['kd_rincian_sub']['val'] }}" />
 
        <input name="cboxInputRinci[{{ $idx }}]" id="cboxInputRinci{{ $idx }}" type="hidden"
            value="{{ $list['kd_rek_rincian_obj']['val'] }}" />
        @php $idx++ @endphp
        @endforeach
        @endif
    </tbody>
</table>
    <table>
        <tr>
            <td colspan="3">Total Semua Pad : </td>
            <td colspan="3"></td> 
        </tr>
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

     
   
    function add(){
        save_method = "add";
        $('#form').trigger('reset');
        $('input[name=_method]').val('POST');
        $('#txtSave').html('');
    }
    add();
</script>