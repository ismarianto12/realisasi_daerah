@extends('layouts.template')

 
@section('content')
 
<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold">Laporan Penerimaaan</h2>
                <h5 class="text-white op-7 mb-2"> Pendapatapan Daerah   </h5>
            </div>
            <div class="ml-md-auto py-2 py-md-0">
                <a href="#" class="btn btn-white btn-border btn-round mr-2">Rerport Penerimaan</a>
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
                        <select name="tahun_id" id="tahun_id" placeholder="" class="form-control select2 r-0 light" autocomplete="off" onchange="selectOnChange()">
                            @foreach ($tahuns as $tahun)    
                                <option value="{{$tahun->id}}"@if($tahun_id == $tahun->id) selected="selected"@endif>{{$tahun->tahun}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group form-show-validation row">
                    <label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Jenis Laporan                        
                        <span
                            class="required-label">*</span></label>
                    <div class="col-sm-6">
                        @php
                            $jenis = [
                            1=> 'Realisasi Anggaran Per Rekening Jenis',
                            2=> 'Realisasi Anggaran Per Rekening Object',
                            3=> 'Realisasi Anggaran Per Rincian Object' 
                            ];   
                        @endphp
                        <select name="jenis" id="jenis_id" class="form-control"> 
                        @foreach($jenis as $datajen => $val)
                            <option value="{{ $datajen }}">{{ $val }}</option>
                         @endforeach
                        </select>
                    </div>
                </div>
                
                <div class="form-group form-show-validation row">
                    @php
                        $monthname = [
                                    1 => 'Januari',
                                    2=>'Februari',
                                    3=>'Maret',
                                    4=>'April',
                                    5=>'Mei',
                                    6=>'Juni',
                                    7=>'Juli',
                                    8=>'Agustus',
                                    9=>'September',
                                    10=>'Oktober',
                                    11=>'November',
                                    12=>'Desember'  
                                ];   
                    @endphp
                   
                    <label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Periode (Tanggal) <span
                            class="required-label">*</span></label>
                    <div class="col-sm-3">
                         <input type="date" id="dari" class="form-control" placeholder="Dari ..">
                    </div>
                     S /D     
                    <div class="col-sm-3">   
                      <input type="date" class="form-control" id="sampai" placeholder="Sampai dengan"> 
                    </div>
                </div> 
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                    <button class="btn btn-primary" id="tampilkan_data"><i class="fa fa-list"></i>Tampilkan Data</button>
            </div>
        </div> 
  
</div>
<script>
        $(function(){
            $('#tampilkan_data').on('click',function(e){
                e.preventDefault();
                var tahun_id  = $('#tahun_id').val();
                var jenis_id  = $('#jenis_id').val();

                 var dari    = $('#dari').val();
                //sampai dengan 
                 var sampai  = $('#sampai').val();
  
                window.location.href = '{{ route('result_data') }}?tahun_id=' +tahun_id + '&jenis_id='+jenis_id+'&dari='+dari+'&sampai='+ sampai;
 
            }); 
        }); 
</script> 




@endsection
