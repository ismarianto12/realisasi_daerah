<div class="card">
    <div class="card-body p-2">
        <div class="form-row form-inline">
            <div class="col-md-12">
                <div class="form-group m-0">
                    <label class="col-form-label s-12 col-md-3">Kecamatan :</label>
                    <label class="r-0 s-12 col-md-8 tl"><strong>{{ $kec->tmklasf_wilayah->kode_klasf.' - '.$kec->nama_wilayah }}</strong></label>
                </div>
                <div class="form-group m-0">
                    <label class="col-form-label s-12 col-md-3">Kelurahan :</label>
                    <label class="r-0 s-12 col-md-8 tl"><strong>{{ $kel->tmklasf_wilayah->kode_klasf.' - '.$kel->nama_wilayah }}</strong></label>
                </div>
            </div>
        </div>
    </div>
</div>