@extends('layouts.template')
@section('title','Pendapatan Daerah')
@section('content')

<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold">Laporan Keseluruhan PAD</h2>
                <h5 class="text-white op-7 mb-2"> Report PAD </h5>
            </div>
            <div class="ml-md-auto py-2 py-md-0">
                <a href="#" class="btn btn-white btn-border btn-round mr-2">Report Penerimaan</a>
                <a href="#" to="#" class="tambah btn btn-secondary btn-round">Data Penerimaaan </a>
            </div>
        </div>
    </div>
</div>
<div class="page bg-light">
    <div class="container-fluid my-3">
        <div class="card">
            <div class="card-body">
                <div class="form-group form-show-validation row">
                    <label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Tahun <span
                            class="required-label">*</span></label>
                    <div class="col-sm-6">
                        <select name="tahun_id" id="tahun_id" placeholder="" class="form-control select2 r-0 light"
                            autocomplete="off" onchange="selectOnChange()">
                            @foreach ($tahuns as $tahun)
                            <option value="{{$tahun->id}}">{{$tahun->tahun}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="col-md-6">
                    <div class="form-group m-0">
                        <select class="form-control" id="type_params">
                            <option value="pdf">PDF</option>
                            <option value="rtf">WORD (RTF)</option>
                            <option value="xls">XLS</option>
                        </select>
                        <hr />
                        <button id="tampilkan" class="btn btn-primary"><i class="fa fa-search"></i>Tampilkan</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="btn_cetak"></div>
</div>
@section('script')
<script>
    $(function(){

        $('#tmrekening_akun_id').on('change', function(){
            val = $(this).val();
            option = "<option value=''>&nbsp;</option>";
            if(val == ""){
                $('#tmrekening_akun_kelompok_id').html(option);
                $('#tmrekening_akun_kelompok_jenis_id').html(option);
                $('#tmrekening_akun_kelompok_jenis_objek_id').html(option);
                selectOnChange();
            }else{
                $('#tmrekening_akun_kelompok_id').html("<option value=''>Loading...</option>");
                url = "{{ route('rekening.kodejenis.kodekelompokByKodeakun', ':id') }}".replace(':id', val);
                $.get(url, function(data){
                    if(data){
                        $.each(data, function(index, value){
                            option += "<option value='" + value.id + "'>[" + value.kd_rek_kelompok +"] " + value.nm_rek_kelompok +"</li>";
                        });
                        $('#tmrekening_akun_kelompok_id').empty().html(option);

                        $("#tmrekening_akun_kelompok_id").val($("#tmrekening_akun_kelompok_id option:first").val()).trigger("change.select2");
                    }else{
                        $('#tmrekening_akun_kelompok_id').html(option);
                        $('#tmrekening_akun_kelompok_jenis_id').html(option);
                        $('#tmrekening_akun_kelompok_jenis_objek_id').html(option);
                        selectOnChange();
                    }
                }, 'JSON');
            }
            $('#tmrekening_akun_kelompok_id').change();
        });

        $('#tmrekening_akun_kelompok_id').on('change', function(){
            val = $(this).val();
            option = "<option value=''>&nbsp;</option>";
            if(val == ""){
                $('#tmrekening_akun_kelompok_jenis_id').html(option);
                $('#tmrekening_akun_kelompok_jenis_objek_id').html(option);
                selectOnChange();
            }else{
                $('#tmrekening_akun_kelompok_jenis_id').html("<option value=''>Loading...</option>");
                url = "{{ route('rekening.kodeobjek.kodejenisByKodekelompok', ':id') }}".replace(':id', val);
                $.get(url, function(data){
                    if(data){
                        $.each(data, function(index, value){
                            option += "<option value='" + value.id + "'>[" + value.kd_rek_jenis +"] " + value.nm_rek_jenis +"</li>";
                        });
                        $('#tmrekening_akun_kelompok_jenis_id').empty().html(option);

                        $("#tmrekening_akun_kelompok_jenis_id").val($("#tmrekening_akun_kelompok_jenis_id option:first").val()).trigger("change.select2");
                    }else{
                        $('#tmrekening_akun_kelompok_jenis_id').html(option);
                        $('#tmrekening_akun_kelompok_jenis_objek_id').html(option);
                        selectOnChange();
                    }
                }, 'JSON');
            }
        });

        $('#tmrekening_akun_kelompok_jenis_id').on('change', function(){
            val = $(this).val();
            option = "<option value=''>&nbsp;</option>";
            if(val == ""){
                $('#tmrekening_akun_kelompok_jenis_objek_id').html(option);
                selectOnChange();
            }else{
                $('#tmrekening_akun_kelompok_jenis_objek_id').html("<option value=''>Loading...</option>");
                url = "{{ route('rekening.koderincianobjek.kodeobjekByKodejenis', ':id') }}".replace(':id', val);
                $.get(url, function(data){
                    if(data){
                        $.each(data, function(index, value){
                            option += "<option value='" + value.id + "'>[" + value.kd_rek_obj +"] " + value.nm_rek_obj +"</li>";
                        });
                        $('#tmrekening_akun_kelompok_jenis_objek_id').empty().html(option);

                        $("#tmrekening_akun_kelompok_jenis_objek_id").val($("#tmrekening_akun_kelompok_jenis_objek_id option:first").val()).trigger("change.select2");
                    }else{
                        $('#tmrekening_akun_kelompok_jenis_objek_id').html(option);
                        selectOnChange();
                    }
                }, 'JSON');
            }
        });

        $('#tampilkan').click(function(e){
         e.preventDefault(); 
         var tahun_id  = $('#tahun_id').val();
         var tmsikd_satker_id  = $('#tmsikd_satker_id').val();
         var dari  = $('#dari').val();
         var sampai  = $('#sampai').val();
         var rekjenis_id  = $('#tmrekening_akun_kelompok_jenis_id').val();

         if(tahun_id == ''){ 
            $.alert('tahun anggaran boleh kosong');
        }
        if(tmsikd_satker_id == ''){
            $.alert('Satuan kerja tidak boleh kosong');
        }else if(dari == ''){
            $.alert('tanggal awal tidak boleh kosong');
        }else if(sampai == ''){
            $.alert('tanggal akhir tidak boleh kosong');
        }else if(rekjenis_id == ''){
            $.alert('rekening jenis object tidak boleh kosong');
        }else{ 
         var jenis = $('#type_params').val();
         if(jenis == '' || jenis == 0){
            $.alert('jenis laporan tidak boleh kosong');
        }else{ 
            if(jenis == 'pdf'){
                window.open("{{ route('laporan.action_bulan') }}?tahun_id="+tahun_id+"&tmsikd_satker_id="+tmsikd_satker_id+"&dari="+dari+"&sampai="+sampai+"&rekjenis_id="+rekjenis_id+'&jenis='+jenis,'_blank');
            }else{ 
               window.location.href= "{{ route('laporan.action_bulan') }}?tahun_id="+tahun_id+"&tmsikd_satker_id="+tmsikd_satker_id+"&dari="+dari+"&sampai="+sampai+"&rekjenis_id="+rekjenis_id+'&jenis='+jenis;
           } 
       } 
   }
}) 

    });
function selectOnChange()
{

}

</script>

@endsection
@endsection