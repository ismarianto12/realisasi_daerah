@extends('layouts.template')
@section('content')
@php

$pagetitle = 'Tambah Pelaporan Pad';
@endphp

@section('title', $pagetitle)

<div class="page bg-light">
    @include('layouts._includes.toolbar')
    <div class="container-fluid my-3">
        <div id="alert"></div>
        <form class="needs-validation" id="form" method="POST" novalidate>
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

                                            <tr>
                                                <input type="hidden" name="tanggal_lapor" value="{{ $tgl_lapor }}"
                                                    id="tanggal_lapor">
                                                <input type="hidden" name="tmsikd_satker_id" value="{{ $fsatker_id }}">
                                                <td>Tanggal Lapor</td>
                                                <td>{{ Properti_app::tgl_indo($tgl_lapor) }} Jam {{ $jam }}</td>
                                            </tr>
                                        </table>
                                        <h2>Rincian PAD <sup><a href="#"
                                                    to="https://www.google.com/search?q=Pad+adalah&oq=Pad+adalah+&aqs=chrome..69i57.1951j0j1&sourceid=chrome&ie=UTF-8"
                                                    title="apa itu pad" id="question_ans">[?]</a></sup> yang di laporkan
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
       $('.entri_rek').html('<div class="alert alert-success">Sedang meload data ...</div>');  
        var rek_obj = {{ $kd_rek_obj }};    
        var satker_id  = {{ $fsatker_id }};
        var form_url = "{{ route('pendapatan.form_pendapatan',':id') }}".replace(':id',rek_obj);
          $.get(form_url,{satker_id : satker_id },function(data){
          $('.entri_rek').html(data); 
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
          $('#alert').html('<div class="alert alert-info"><i class="fa fa-info"></i>Harap bersabar Sedang Mengirim Ke server ......</div>');
          $('#btnSave').attr('disabled', true);
          url = (save_method == 'add') ? "{{ route($route.'store') }}" : "{{ route($route.'update', ':id') }}".replace(':id', $('#id').val());
          $.post(url, $(this).serialize(), function(data){
               $('#alert').html("<div role='alert' class='alert alert-success alert-dismissible'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button><strong>Success!</strong> " + data.message + "</div>");
              document.location.href = "{{ url('pendapatan') }}?tgl_lapor={{ $tgl_lapor }}";
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
 //to show dialog add question data 
 $(function(){
    $('#question_ans').click(function(){
        var content = $(this).attr('to');
        $('#content_qa').load(content);
        $('#modalgoogle').modal('show');
         
    });
 });
   

</script>  

<div class="modal fade" id="modalgoogle" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" style="width: auto;">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div id="content_qa"></div>
            </div>
        </div>
    </div>
</div>




@endsection
@endsection