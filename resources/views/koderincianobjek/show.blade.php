@extends('layouts.template')

@section('content')
<div class="page bg-light">
    @include('layouts._includes.toolbar')
    <div class="container-fluid my-3">
        <div id="alert"></div>
        <div class="card">
            <div class="card-body">
                <div class="form-row form-inline">
                    <div class="col-md-12">
                        <div class="form-group m-0">
                            <label class="col-form-label s-12 col-md-2"><strong>Rek. Akun :</strong></label>
                            <label class="r-0 s-12 col-md-8 tl">{{ '[ '.$tmrekening_akun_kelompok_jenis_objek_rincian->tmrekening_akun_kelompok_jenis_objek->tmrekening_akun_kelompok_jenis->tmrekening_akun_kelompok->tmrekening_akun->kd_rek_akun.' ] '.$tmrekening_akun_kelompok_jenis_objek_rincian->tmrekening_akun_kelompok_jenis_objek->tmrekening_akun_kelompok_jenis->tmrekening_akun_kelompok->nm_rek_kelompok }}</label>
                        </div>
                        <div class="form-group m-0">
                            <label class="col-form-label s-12 col-md-2"><strong>Rek. Kelompok :</strong></label>
                            <label class="r-0 s-12 col-md-8 tl">{{ '[ '.$tmrekening_akun_kelompok_jenis_objek_rincian->tmrekening_akun_kelompok_jenis_objek->tmrekening_akun_kelompok_jenis->tmrekening_akun_kelompok->kd_rek_kelompok.' ] '.$tmrekening_akun_kelompok_jenis_objek_rincian->tmrekening_akun_kelompok_jenis_objek->tmrekening_akun_kelompok_jenis->tmrekening_akun_kelompok->nm_rek_kelompok }}</label>
                        </div>
                        <div class="form-group m-0">
                            <label class="col-form-label s-12 col-md-2"><strong>Rek. Jenis :</strong></label>
                            <label class="r-0 s-12 col-md-8 tl">{{ '[ '.$tmrekening_akun_kelompok_jenis_objek_rincian->tmrekening_akun_kelompok_jenis_objek->tmrekening_akun_kelompok_jenis->kd_rek_jenis.' ] '.$tmrekening_akun_kelompok_jenis_objek_rincian->tmrekening_akun_kelompok_jenis_objek->tmrekening_akun_kelompok_jenis->nm_rek_jenis }}</label>
                        </div>
                        <div class="form-group m-0">
                            <label class="col-form-label s-12 col-md-2"><strong>Rek. Obj :</strong></label>
                            <label class="r-0 s-12 col-md-8 tl">{{ '[ '.$tmrekening_akun_kelompok_jenis_objek_rincian->tmrekening_akun_kelompok_jenis_objek->kd_rek_obj.' ] '.$tmrekening_akun_kelompok_jenis_objek_rincian->tmrekening_akun_kelompok_jenis_objek->nm_rek_obj }}</label>
                        </div>
                        <div class="form-group m-0">
                            <label class="col-form-label s-12 col-md-2"><strong>Kode Rek. Rincian Obj :</strong></label>
                            <label class="r-0 s-12 col-md-8 tl">{{ $tmrekening_akun_kelompok_jenis_objek_rincian->kd_rek_rincian_obj }}</label>
                        </div>
                        <div class="form-group m-0">
                            <label class="col-form-label s-12 col-md-2 pl-0"><strong>Nama Rek. Rincian Obj :</strong></label>
                            <label class="r-0 s-12 col-md-8 tl">{{ $tmrekening_akun_kelompok_jenis_objek_rincian->nm_rek_rincian_obj }}</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-2">
            <div class="card-header">
                <h6>Keterkaitan Rekening P64</h6>
            </div>
            <div class="card-body no-b">
                <div class="form-row form-inline">
                    <div class="col-md-12">
                        <div class="form-group m-0">
                            <label class="col-form-label s-12 col-md-2"><strong>Rek. LRA P64 :</strong></label>
                            <label class="r-0 s-12 col-md-8 tl"></label>
                        </div>
                        <div class="form-group m-0">
                            <label class="col-form-label s-12 col-md-2"><strong>Rek. Akrual :</strong></label>
                            <label class="r-0 s-12 col-md-8 tl"></label>
                        </div>
                        <div class="form-group m-0">
                            <label class="col-form-label s-12 col-md-2"><strong>Rek. Aset :</strong></label>
                            <label class="r-0 s-12 col-md-8 tl"></label>
                        </div>
                        <div class="form-group m-0">
                            <label class="col-form-label s-12 col-md-2"><strong>Rek. Utang :</strong></label>
                            <label class="r-0 s-12 col-md-8 tl"></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="card mt-2">
            <div class="card-header">
                <h6>Keterkaitan Rekening SAP</h6>
            </div>
            <div class="card-body no-b">
                <div class="form-row form-inline">
                    <div class="col-md-12">
                        <div class="form-group m-0">
                            <label class="col-form-label s-12 col-md-2"><strong>Rek. LRA :</strong></label>
                            <label class="r-0 s-12 col-md-8 tl"></label>
                        </div>
                        <div class="form-group m-0">
                            <label class="col-form-label s-12 col-md-2"><strong>Rek. LAK :</strong></label>
                            <label class="r-0 s-12 col-md-8 tl"></label>
                        </div>
                        <div class="form-group m-0">
                            <label class="col-form-label s-12 col-md-2"><strong>Rek. Neraca :</strong></label>
                            <label class="r-0 s-12 col-md-8 tl"></label>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

@section('script')
<script type="text/javascript">
    function del(){
        $.post("{{ route($route.'destroy', ':id') }}", {'_method' : 'DELETE', 'id' : {{ $id }} }, function(data) {
            document.location.href = "{{ route($route.'index') }}";
        }, "JSON").fail(function(){
            reload();
        });
    }
</script>
@endsection