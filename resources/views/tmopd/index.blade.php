@extends('layouts.template')
@section('title','Dinas dan satuan kerja.')
@section('content')
<script>
    $(function(){
        $('#satkertb').on('click', '.edit', function() {
            var access = $(this).attr('to');
            $('.show_form').load(access).slideDown();
        }); 

    });  
</script>

<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold">Satuan Kerja</h2>
                <h5 class="text-white op-7 mb-2">Data list sattuan kerja </h5>
            </div>
            <div class="ml-md-auto py-2 py-md-0">
                <a href="#" class="btn btn-white btn-border btn-round mr-2">List master kerja (OPD).</a>
                <a href="#" to="{{ route($route.'create') }}" class="tambah btn btn-secondary btn-round">Tambah Data
                    Master Satuan Kerja. </a>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Master Data Pegawai</h4>
            </div>
            <div class="card-body">
                <div id="alert"></div>
                <div class="show_form"></div>
                <div class="table-responsive">
                    <table id="satkertb" class="display table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Kode</th>
                                <th>Nama</th>
                                <th>Aktif</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot></tfoot>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@foreach($load_script as $script)
@php echo $script @endphp
@endforeach
<script>
    $(function () {
            $.fn.dataTableExt.oApi.fnPagingInfo = function(oSettings) {
                return {
                    "iStart": oSettings._iDisplayStart,
                    "iEnd": oSettings.fnDisplayEnd(),
                    "iLength": oSettings._iDisplayLength,
                    "iTotal": oSettings.fnRecordsTotal(),
                    "iFilteredTotal": oSettings.fnRecordsDisplay(),
                    "iPage": Math.ceil(oSettings._iDisplayStart / oSettings._iDisplayLength),
                    "iTotalPages": Math.ceil(oSettings.fnRecordsDisplay() / oSettings._iDisplayLength)
                };
            };
           var satkertb = $('#satkertb').DataTable({
                //route _table_divisi.
                initComplete: function() {
                    var api = this.api();
                    $('#datatables input')
                    .off('.DT')
                    .on('keyup.DT', function(e) {
                        if (e.keyCode == 13) {
                            api.search(this.value).draw();
                        }
                    });
                },
                oLanguage: {
                    sProcessing: '<i class="fa fa-spinner fa-spin fa-3x fa-fw"></i><span class="sr-only">Loading...</span>'
                },
                processing: true,
                serverSide: true,
                ajax: {
                    method : "POST",
                    url: "{{ route('aplikasi.satker_api') }}",
                },
                columns: [
                {
                data: 'DT_RowIndex',
                    orderable:false,
                },
                {
                    data : 'kode',
                }, 
                {
                    data : 'nama_opd',
                },
                {
                    data: 'active',
                },
                {
                    data : 'action',
                    orderable:false,
                    'responsive' : true,
                }
                ],
            });

        });   

        function konfirmasi_hp(n) {
            $.confirm({
                title: '',
                content: 'Apakah Anda yakin akan menghapus data ini?',
                icon: 'icon icon-question amber-text',
                theme: 'modern',
                closeIcon: true,
                animation: 'scale',
                type: 'red',
                buttons: {
                    ok: {
                        text: 'ok!',
                        btnClass: 'btn-primary',
                        keys: [ 'enter' ],
                        action: function() {
                            del_dt(n);
                        }
                    },
                    cancel: function() {}
                }
            });
        }
        
    function del_dt(n){
        var c = n; 
        $.post("{{ route($route.'destroy', ':id') }}", {'_method' : 'DELETE', 'id' : c}, function(data) {
            satkertb.api().ajax.reload();
            }, "JSON").fail(function(){
                reload();
            });
        }
    

        $(function(){
            $('.tambah').on('click',function(e){
                e.preventDefault();
                var url = $(this).attr('to');
                $('.show_form').load(url).slideDown(); 
                satkertb.ajax.reload();
            });  
          });
 
</script>




@endsection