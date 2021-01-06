<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold">@yield('title')</h2>
            </div>
            <div class="ml-md-auto py-2 py-md-0">
                <a href="#" class="btn btn-white btn-border btn-round mr-2">Anggaran Pendapatan Daerah .</a>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-body" style="margin-left:30px">
        <div class="row">
            <a class="btn btn-outline-secondary btn-sm" title="Toggle Navigator" id="btnToggleNav"><i
                    class="fa fa-arrow-left"></i></a>
            <div class="btn-group">
                <a onclick="javascript:history.go(-1)" class="btn btn-outline-secondary btn-sm"
                    title="Kembali Ke Halaman Sebelumnya" id="btnBack"><i class="fa fa-arrow-left"></i></a>
                <a onclick="javascript:location.reload()" class="btn btn-outline-secondary btn-sm"
                    title="Segarkan Halaman" id="btnReload"><i class="fa fa-sync"></i></a>
            </div>
            @if(in_array('r', $toolbar))
            <a class="btn btn-outline-secondary  btn-info btn-sm" title="Tampilkan List Data" href="{{ route($route.'index') }}"
                id="btnRead" style="
                color: #fff;
            "><i class="fa fa-list"></i> Semua Data</a>
            @endif
            <div class="btn-group" style="color: #fff">
                @if(in_array('c', $toolbar))
                <a class="btn btn-outline-secondary btn-info btn-sm" title="Masukan Data Baru"
                    href="{{ route($route.'create') }}" id="btnCreate" style="
                    color: #fff;background: green
                "><i class="fa fa-plus"></i> Tambah</a>
                @endif
                @if(in_array('u', $toolbar))
                <a class="btn btn-outline-secondary btn-sm" title="Edit Data" href="{{ route($route.'edit', $id) }}"
                    id="btnEdit" style="
                    color: #fff;
                "><i class="fa fa-edit"></i> Edit</a>
                @endif
                @if(in_array('d', $toolbar))
                <a class="btn btn-outline-secondary btn-danger btn-sm" title="Hapus Data" id="btnDelete" href="#"
                    onclick="javascript:confirm_del()" style="
                    color: #fff;
                "><i class="fa fa-trash"></i> Hapus</a>
                @endif
                @if(in_array('rs', $toolbar))
                <a class="btn btn-outline-secondary btn-sm" title="Batalkan" id="btnCancel" href="#"
                    onclick="javascript:confirm_cancel()"><i class="fa fa-prev"></i> Batalkan</a>
                @endif
            </div>
            @if(in_array('save', $toolbar))
            <a class="btn btn-outline-secondary btn-sm" title="Simpan Data" id="btnSave" href="#"
                onclick="javascript:save()"><i class="fa fa-save"></i> Simpan <span id="txtSave"></span></a>
            @endif
            
            @if(in_array('save_rek', $toolbar))
            <a class="btn btn-outline-secondary btn-sm" title="Simpan Data" id="btnSave" href="#"
                onclick="javascript:save_rek()"><i class="fa fa-save"></i> Simpan Rekening Satker <span id="txtSave"></span></a>
            @endif
            <span id="btnExtra"></span>
            <div class="col-md-7">
                <h5 class="float-right" style="font-weight:300;line-height:1.2;color:#606676">
                    <strong>{{ $title }}</strong>
                    @if(in_array('r', $toolbar) && count($toolbar) == 1 || count($toolbar) == 0)

                    @endif
                </h5>
            </div>
        </div>
    </div>
</div>