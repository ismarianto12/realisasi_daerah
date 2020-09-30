@extends('layouts.template')
@section('content')
<div class="page bg-light">
    @include('layouts._includes.toolbar')
    <div class="container-fluid my-3">
        <div id="alert"></div>
        <form class="needs-validation" id="form" method="POST" novalidate>
            <div class="page bg-light">
                <div class="container-fluid my-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group form-show-validation row">
                                <label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Tahun <span
                                        class="required-label">*</span></label>
                                <div class="col-sm-6">
                                    <select name="tahun_id" id="tahun_id" placeholder=""
                                        class="form-control select2 r-0 light" autocomplete="off"
                                        onchange="selectOnChange()">
                                        @foreach ($tahuns as $tahun)
                                        <option value="{{$tahun->id}}" @if($tahun_active==$tahun->id)
                                            selected="selected"@endif>{{$tahun->tahun}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group form-show-validation row">
                                <label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Satuan Kerja
                                    <span class="required-label">*</span></label>
                                <div class="col-sm-6">
                                    <select name="tmsikd_satker_id" id="tmsikd_satker_id" class="form-control select2 "
                                        required onchange="selectOnChange()">
                                        @foreach($tmsikd_satkers as $tmsikd_satker)
                                        <option value="{{ $tmsikd_satker->id }}" @if($tmsikd_satker_id==$tmsikd_satker->
                                            id)
                                            selected="selected"@endif>
                                            [{{ $tmsikd_satker->kode }}] &nbsp; {{ $tmsikd_satker->nama }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="card-header">
                                <h6>List Rekening Mata Anggaran</h6>
                            </div>
                            <div class="card-body">
                                <div class="form-row form-inline">
                                    <div class="col-md-12">
                                        <div class="form-group form-show-validation row">
                                            <label for="name" class="col-md-3 text-right">Tanggal Lapor Realisasi <span
                                                    class="required-label">*</span></label>
                                            <div class="col-sm-8">
                                                <input type="date" name="tanggal_lapor" id="tanggal_lapor" class="form-control" placeholder="Dari .."
                                                    value="{{ $dari }}">
                                            </div>

                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group m-0">
                                                <label for="tmrekening_akun_id"
                                                    class="col-form-label s-12 col-md-3"><strong>Rek.
                                                        Akun :</strong></label>
                                                <div class="col-md-5 p-0 mb-2">
                                                    <select name="tmrekening_akun_id"
                                                        class="form-control r-0 s-12 select2" id="tmrekening_akun_id">
                                                        <option value="0">&nbsp;</option>
                                                        @foreach($tmrekening_akuns as $key=>$tmrekening_akun)
                                                        <option value="{{ $tmrekening_akun->id }}">
                                                            {{ '['.$tmrekening_akun->kd_rek_akun.'] '.$tmrekening_akun->nm_rek_akun }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group m-0">
                                                <label for="tmrekening_akun_kelompok_id"
                                                    class="col-form-label s-12 col-md-3"><strong>Rek. Kelompok
                                                        :</strong></label>
                                                <div class="col-md-5 p-0 mb-2">
                                                    <select name="tmrekening_akun_kelompok_id"
                                                        class="form-control r-0 s-12 select2"
                                                        id="tmrekening_akun_kelompok_id">
                                                        <option value="0">&nbsp;</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group m-0">
                                                <label for="tmrekening_akun_kelompok_jenis_id"
                                                    class="col-form-label s-12 col-md-3"><strong>Rek.
                                                        Jenis</strong></label>
                                                <div class="col-md-5 p-0 mb-2">
                                                    <select name="tmrekening_akun_kelompok_jenis_id"
                                                        class="form-control r-0 s-12 select2"
                                                        id="tmrekening_akun_kelompok_jenis_id">
                                                        <option value="0">&nbsp;</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group m-0">
                                                <label for="tmrekening_akun_kelompok_jenis_objek_id"
                                                    class="col-form-label s-12 col-md-3"><strong>Rek. Obj
                                                        :</strong></label>
                                                <div class="col-md-5 p-0 mb-2">
                                                    <select name="tmrekening_akun_kelompok_jenis_objek_id"
                                                        class="form-control r-0 s-12 select2"
                                                        id="tmrekening_akun_kelompok_jenis_objek_id">
                                                        <option value="0">&nbsp;</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="jumlah_mak" class="col-md-3">Jumlah :</label>
                                                <div class="col-md-8">
                                                    <input name="jumlah_mak" id="jumlah_mak" type="number"
                                                        placeholder="" class="form-control number" autocomplete="off" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="alert alert-danger">Pendapatan daerah yang sudah di entrikan pertanggal tidak di
                                muncul kan lagi , jika ada kesalaha pada pengentrian data sebelumnya harap harap hapus
                                dan entri kembali </div>
                            <div class="entri_rek"></div>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@section('script')
<script>
    $(function(){
    $('.entri_rek').html('<div class="alert alert-success">Sedang meload data ...</div>'); 
    $('#tmrekening_akun_id').on('change', function(){
        val = $(this).val();
        option = "<option value=''>&nbsp;</option>";
        if(val == ""){
            $('#tmrekening_akun_kelompok_id').html(option);
            $('#tmrekening_akun_kelompok_jenis_id').html(option);
            $('#tmrekening_akun_kelompok_jenis_objek_id').html(option);
            // selectOnChange();
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
                    // selectOnChange();
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
            // selectOnChange();
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
                    // selectOnChange();
                }
            }, 'JSON');
        }
    });

    $('#tmrekening_akun_kelompok_jenis_id').on('change', function(){
        val = $(this).val();
        option = "<option value=''>&nbsp;</option>";
        if(val == ""){
            $('#tmrekening_akun_kelompok_jenis_objek_id').html(option);
            // selectOnChange();
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
                    // selectOnChange();
                }
            }, 'JSON');
            
        }
    });   

    $('#tmrekening_akun_kelompok_jenis_objek_id').on('change', function(){
        val_id = $(this).val();
        var form_url = "{{ route('pendapatan.form_pendapatan',':id') }}".replace(':id',val_id);
        $('.entri_rek').load(form_url).slideDown(); 
      });
  }); 


  //save data if true
  function add(){
    save_method = "add";
    $('#form').trigger('reset');
    $('input[name=_method]').val('POST');
    $('#txtSave').html('');
}
add();


  function save(){ $('#form').submit(); }
  $('#form').on('submit', function (event) {
      event.preventDefault();
      var tanggal_lapor = $('#tanggal_lapor').val();
      if(tanggal_lapor == ''){
          $.alert('Tanggal Lapor Nya Jangan kosong Bosq','Perhatian : ');
      }else{ 
      if ($(this)[0].checkValidity() === false) {
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
              $('#alert').html("<div role='alert' class='alert alert-danger alert-dismissible'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button><strong>Kesalaha Sedikti Bossq : </strong> " + respon.message + "<ol class='pl-3'>" + err + "</ol></div>");
          }).always(function(){
              $('#btnSave').removeAttr('disabled');
          });
          return false;
      }
      $(this).addClass('was-validated');
    }
  });

</script>
@endsection
@endsection