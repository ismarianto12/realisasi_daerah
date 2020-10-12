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
    <tbody></tbody>
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