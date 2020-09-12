@extends('layouts.template')
@section('title','Peneriaan Retribusi')
@section('content') 
 
<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                @php
                    $level = Properti_app::getlevel();
                @endphp

                @if($level != 1 && $level != 2)
                    <h2 class="text-white pb-2 fw-bold">Pelaporan Retribusi </h2>
                    <h5 class="text-white op-7 mb-2">Satuan kerja : </h5>
                @else
                    <h2 class="text-white pb-2 fw-bold">Pelaporan Retribusi </h2>
                    <h5 class="text-white op-7 mb-2">Halaman Administrator</h5>
                @endif
            </div>
            <div class="ml-md-auto py-2 py-md-0">
                <a href="#" class="btn btn-white btn-border btn-round mr-2">Penerimaan Retribusi .</a>
                <a href="#" to="{{ route('penerimaan.create') }}"
                    class="tambah btn btn-secondary btn-round">Lapor Retirbusi</a>
            </div>
        </div>
    </div>
</div>  
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h3>Tanggal Pengentrian {{ Properti_app::tgl_indo(date('Y-m-d')) }} Jam {{ date('H:i:s') }}</h3>
            </div>
            <div class="card-body">    
                <div class="form_check"></div>  
                <form id="simpan" action="{{ $action }}" method="POST" 
                    enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        @php
                        $level = Properti_app::getlevel();  
                       @endphp 
                       @if($level != 1 && $level != 2)
                            <input type="hidden" value="{{ Auth::user()->sikd_satker_id }}" name="sikd_satker_id">
                         @else 
                        <div class="form-group row">
                            <label for="sikd_satker_id" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Satuan Kerja (OPD) <span
                                    class="required-label">*</span></label>
                            <div class="col-sm-8">
                                <select class="form-control" name="sikd_satker_id">
                                @foreach ($satker as $opd)   
                                <option value="{{ $opd->kode }}">[{{ $opd->kode }}] - {{ $opd->nama }}</option>
                                @endforeach
                            </select>    
                                </div>
                        </div>
                        @endif    

                        <div class="form-group row">
                            <label for="username" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Jenis Retribusi
                                Daerah <span class="required-label">*</span></label>
                            <div class="col-sm-8">
                                <select class="form-control" name="rekening_obj_id" id="rekening_obj_id" required>
                                    <option value="">Pilih Jenis Retribusi</option>
                                    @foreach($rekening_object as $obj)
                                        <option value="{{ $obj->id }}">[{{ $obj->kd_rek_obj }}] -
                                            {{ $obj->nm_rek_obj }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="username" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Rincian Jenis
                                Retribusi <span class="required-label">*</span></label>
                            <div class="col-sm-8">
                                <div id="rek_rincian_obj"></div>
                            </div>
                        </div> 

                        <div class="form-group row">
                            <label for="tgl_transaksi" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right"> Tanggal Trasaksi
                                Retribusi <span class="required-label">*</span></label>
                            <div class="col-sm-8"> 
                                <input type="date" name="tgl_trx" class="form-control" placeholder="tanggal transaksi ...">
                            </div>
                        </div> 


                        <div class="form-group row">
                            <label for="jumlah" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Jumlah Penerimaan <span
                                    class="required-label">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" name="jumlah" class="form-control" value="">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="jumlah" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Volume Trasaksi <span
                                    class="required-label">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" name="cara_pembayaran" class="form-control" value="">
                            </div>
                        </div>  

            <div class="form-group row">
                <label for="jumlah" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Catatan <span
                        class="required-label">*</span></label>
                <div class="col-sm-8">
                    <input type="text" name="catatan" class="form-control" value="">
                </div>
            </div>         

        <div class="card-action">
            <div class="row">
                 <div class="col-md-12">
                    <button type="submit" id="simpan" class="btn btn-primary btn-sm"><i class="fa fa-disk"></i>Simpan</button>
                    <button type="reset" class="btn btn-warning btn-sm"><i class="fa fa-disk"></i>Cancel</button>
                    <a href="{{ Url('penerimaan') }}" class="btn btn-warning btn-sm"><i class="fa fa-home"></i>Kembali</a>
                        
                </div>
            </div>
        </div> 
        </form> 
    </div>
</div>


<script>
    // rek_rincian_obj 
     $(function(){
         $('#rek_rincian_obj').html('<div class="alert alert-danger">Pilih rincian retribusi terlebih dahulu..</div>');
         $('#rekening_obj_id').on('change',function(){
             $('#rek_rincian_obj').html('<option>Sedang Memuat data ..</option>')
              var rekening_obj_id = $(this).val();
              var _token          = '{{ csrf_token() }}'; 
              $.ajax({
                 type    : 'POST',
                 url     : '{{ Url("rekobj_rincian_json") }}',   
                 headers : {
                     '_csrf': '{{ csrf_token() }}'
                 },
                 data    : 'rekening_obj_id='+rekening_obj_id+'&_token='+_token,   
                 chace   :  false,
                 dataType : 'json',
                 success:function(data){  
                     if(data.data){
                         html = '';
                         for(var count = 0; count < data.data.length; count++){
                             html += data.data[count];
                         } 
                         $('#rek_rincian_obj').html('<select name="sikd_rek_rincian_obj_id" id="sikd_rek_rincian_obj_id" class="form-control">'+html+'</select>');
                     }
                 },
                 error:function(data,Xhr,error,Status){ 
                     alert('error'); 
                 }  
              });
         });  
       
     $('#simpan').on('submit', function(e) {
        e.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
            type: 'post',
            url: $(this).attr('action'),
            data: formData,
            headers: {
                '_csrf': '{{ csrf_token() }}'
            }, 
            dataType: "json",
            success: function(data) {
                if (data.errors) {
                    html = '';
                        for (var count = 0; count < data.errors.length; count++) {
                            html += '<div class="alert alert-danger msg">' + data.errors[count] + '</div>';
                        } 
                     } else if (data.success) {
                        html = '<div class="alert alert-success">' + data.success + '</div>';
                     }
                    $('.form_check').html(html);
                    window.location.href="{{ route('penerimaan.index') }}";
                 },
                error: function(xhr, error, status) {
                    // swal('warning', 'Batal ', 'error');
                    alert(error)
                }
            });
        });
    });       
 </script>
 

@endsection

