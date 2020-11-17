@extends('layouts.template')
@section('content')
@php

$pagetitle = ($raction == 'add') ? 'Tambah Pelaporan Pad' : 'Edit Pelaporan Pad'. $nmtitledit;
@endphp

@section('title', $pagetitle)
<div class="page bg-light">
    @include('layouts._includes.toolbar')
    <div class="container-fluid my-3">
        <div id="alert"></div>
        <form class="needs-validation" id="form" method="POST" novalidate>
            {{ method_field('PATCH') }}
            <div class="page bg-light">
                <div class="container-fluid my-3">
                    <div class="card">

                        <div class="card-body">
                            <div class="alert alert-danger">Pendapatan daerah yang sudah di entrikan pertanggal
                                tidak di
                                muncul kan lagi , jika ada kesalaha pada pengentrian data sebelumnya harap harap
                                hapus
                                dan entri kembali </div>
                            <div class="entri_rek"></div>
                        </div>
                        <div class="card-body">

                            <div class="card-body">
                                <div class="form-row form-inline">
                                    <div class="col-md-12">
                                        <table class="table table-striped">
                                            <tr>
                                                <input type="hidden" name="tahun_id" value="{{ $tahun_ang }}">
                                                <input type="hidden" name="tanggal_lapor" value="{{ $tgl_lapor }}"
                                                    id="tanggal_lapor">
                                                <input type="hidden" name="tmsikd_satker_id" value="{{ $fsatker_id }}">
                                                <td>Tahun Anggaran</td>
                                                <td>{{ $tahun_ang }}</td>
                                                <td>Tanggal Lapor</td> 
                                                <td>{{ Properti_app::tgl_indo($tgl_lapor) }} Jam {{ $jam }}</td>
                                            </tr>
                                        </table>
                                        <h2>Rincian PAD <sup><a
                                                    href="https://www.google.com/search?q=Pad+adalah&oq=Pad+adalah+&aqs=chrome..69i57.1951j0j1&sourceid=chrome&ie=UTF-8"
                                                    title="apa itu pad" target="_blank">[?]</a></sup> yang di laporkan
                                        </h2>

                                        <table class="table striped">
                                            @foreach ($rekenings as $item)
                                            <tr>
                                                <td>{{ $item['keterangan']['val'] }}</td>
                                                <td>[{{ $item['kode_rek']['val'] }}] - {{ $item['nm_rekening']['val'] }}
                                                </td>
                                            </tr>
                                            @endforeach
                                        </table>

                                    </div>
                                </div>
                            </div>
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
        @if($raction == 'edit')
        var id_rincian = {{ $rincianid }};    
        var satker_id  = {{ $satkerid }};

        var form_url = "{{ route('pendapatan.edit_pendapatan_form',':id') }}".replace(':id',id_rincian);
          $.get(form_url,{satker_id : satker_id },function(data){
          $('.entri_rek').html(data); 
        }); 
     @endif

    $('.entri_rek').html('<div class="alert alert-success">Sedang meload data ...</div>'); 
    $('#tmrekening_akun_id').on('change', function(){
        val = $(this).val();
        option = "<option value='0'>--Semua Data--</option>";
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
        option = "<option value='0'>--Semua Data--</option>";
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
        option = "<option value='0'>--Semua Data--</option>";
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
 
    
   var tahun         = "{{ $tahun_ang }}";
   var tanggal_lapor = "{{ $tgl_lapor }}";
     val_id = "{{ $id }}";       
     var form_url = "{{ route('pendapatan.edit_pendapatan_form',':id') }}".replace(':id',val_id);
       $.get(form_url,{
        satker_id : satker_id,
        tahun : tahun,
        tanggal_lapor : tanggal_lapor
    },function(data){
       $('.entri_rek').html(data); 
     }); 

 
    $('#tmrekening_akun_kelompok_jenis_objek_id').on('change', function(){
        var val_id     = $(this).val(); 
        $('#tmrekening_akun_kelompok_jenis_objek_id option[value="'+val_id+'"]').prop('selected', true);
   });  
}); 
 

function selectOnChange()
{ 
    //silent 
 } 
  //save data if true
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
          url = "{{ route('pendapatan.updateas', $id) }}"; 
          $.ajax({
             type   : 'POST',
             url    : url,
             data   : $(this).serialize(),
             success:function(data){
              //  $('#alert').html(data);
              $('#alert').html("<div role='alert' class='alert alert-success alert-dismissible'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button><strong>Success!</strong>Data berhasil di edit </div>");
              document.location.href = "{{ url('pendapatan') }}?tgl_lapor="+tanggal_lapor;
           },error:function(data){
              err = ''; respon = data.responseJSON;
              $.each(respon.errors, function(index, value){
                  err += "<li>" + value +"</li>";
              });
              $('#alert').html("<div role='alert' class='alert alert-danger alert-dismissible'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button><strong>Kesalaha Sedikti Bossq : </strong> " + respon.message + "<ol class='pl-3'>" + err + "</ol></div>");
            }
          }); 
       }
       $(this).addClass('was-validated');
    }
  });
   


</script>
@endsection
@endsection