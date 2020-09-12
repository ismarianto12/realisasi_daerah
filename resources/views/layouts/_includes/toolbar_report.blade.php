<header class="white p-3 fixed nav-sticky" style="z-index: 999;width: 100%;top: 0px;border-bottom:1px solid #e1e8ee">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5">
                <div class="btn-group">
                    <a onclick="javascript:history.go(-1)" class="btn btn-outline-secondary btn-sm"
                        title="Kembali Ke Halaman Sebelumnya" id="btnBack"><i class="icon icon-arrow_back pr-0"></i></a>
                    <a onclick="javascript:location.reload()" class="btn btn-outline-secondary btn-sm"
                        title="Segarkan Halaman" id="btnReload"><i class="icon icon-refresh2 pr-0"></i></a>
                </div>
            </div>
            <div class="col-md-7 pt-2">
                <h5 class="float-right" style="font-weight:300;line-height:1.2;color:#606676">
                    <strong>{{ $title }}</strong>
                </h5>
            </div>
        </div>
    </div>
</header>
