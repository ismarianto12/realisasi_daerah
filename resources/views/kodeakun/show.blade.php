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
                            <label class="col-form-label s-12 col-md-2"><strong>Kode Rek. Akun :</strong></label>
                            <label class="r-0 s-12 col-md-8 tl">{{ $tmrekening_akun->kd_rek_akun }}</label>
                        </div>
                        <div class="form-group m-0">
                            <label class="col-form-label s-12 col-md-2"><strong>Nama Rek. Akun :</strong></label>
                            <label class="r-0 s-12 col-md-8 tl">{{ $tmrekening_akun->nm_rek_akun }}</label>
                        </div>
                        <div class="form-group m-0">
                            <label class="col-form-label s-12 col-md-2"><strong>Kode Rek. Aset :</strong></label>
                            <label class="r-0 s-12 col-md-8 tl">{{ $tmrekening_akun->kd_rek_aset }}</label>
                        </div>
                        <div class="form-group m-0">
                            <label class="col-form-label s-12 col-md-2"><strong>Kode Rek. Akrual :</strong></label>
                            <label class="r-0 s-12 col-md-8 tl">{{ $tmrekening_akun->kd_rek_akrual }}</label>
                        </div>
                        <div class="form-group m-0">
                            <label class="col-form-label s-12 col-md-2"><strong>Kode Rek. Utang :</strong></label>
                            <label class="r-0 s-12 col-md-8 tl">{{ $tmrekening_akun->kd_rek_utang }}</label>
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