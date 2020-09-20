@extends('layouts.template')

@section('title','Report Pendapatan')
@section('content')


<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold">Laporan Penerimaaan</h2>
                <h5 class="text-white op-7 mb-2"> Pendapatapan Daerah </h5>
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
                        <select name="tahun_id" id="tahun_id" placeholder="" class="form-control select2 r-0 light"
                            autocomplete="off" onchange="selectOnChange()">
                            @foreach ($tahuns as $tahun)
                            <option value="{{$tahun->id}}">{{$tahun->tahun}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group form-show-validation row">
                    <label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Satuan Kerja
                        <span class="required-label">*</span></label>
                    <div class="col-sm-6">
                        <select name="tmsikd_satker_id" id="tmsikd_satker_id" class="form-control select2 " required
                            onchange="selectOnChange('tmsikd_satker_id')">
                            @foreach($tmsikd_satkers as $tmsikd_satker)
                            <option value="{{ $tmsikd_satker->id }}" @if($tmsikd_satker_id==$tmsikd_satker->id)
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
                                <label for="name" class="col-md-3 text-right">Periode (Tanggal) <span
                                        class="required-label">*</span></label>
                                <div class="col-sm-4">
                                    <input type="date" id="dari" class="form-control" placeholder="Dari .."
                                        value="{{ $dari }}">
                                </div>
                                S /D
                                <div class="col-sm-4">
                                    <input type="date" class="form-control" id="sampai" placeholder="Sampai dengan"
                                        value="{{ $sampai }}">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <button id="tampilkan" class="btn btn-primary"><i class="fa fa-search"></i>Tampilkan</button>
            </div>

        </div>
    </div>
</div>
 


@section('script')
<script type="text/javascript" src="{{ asset('assets/template/js/plugin/datatables/datatables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('assets/template/js/plugin/datatables/dataTables.rowGroup.min.js') }}">
</script>

<script type="text/javascript"
    src="{{  asset('assets/template/js/plugin/datatables/button/dataTables.buttons.min.js') }}"></script>
<script type="text/javascript" src="{{  asset('assets/template/js/plugin/datatables/button/jszip.min.js') }}"></script>
<script type="text/javascript" src="{{  asset('assets/template/js/plugin/datatables/button/pdfmake.min.js') }}">
</script>
<script type="text/javascript" src="{{  asset('assets/template/js/plugin/datatables/button/vfs_fonts.js') }}"></script>
<script type="text/javascript" src="{{  asset('assets/template/js/plugin/datatables/button/buttons.html5.min.js') }}">
</script> 
@endsection 

@endsection