@extends('layouts.template')
@section('title','Sipkd Rekenign oject')
@section('content')



<script>
    $(function(){
        $('#datauser').on('click', '.edit', function() {
            var access = $(this).attr('to');
            $('.show_form').load(access).slideDown();
        });
    
    });  
    </script>
    
    <div class="panel-header bg-primary-gradient">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                    <h2 class="text-white pb-2 fw-bold">List Data Rek Objec</h2>
                    <h5 class="text-white op-7 mb-2">lis data object rekening </h5>
                </div>
                <div class="ml-md-auto py-2 py-md-0">
                    <a href="#" class="btn btn-white btn-border btn-round mr-2">Lit Data Rekening Object.</a>
                    <a href="#" to="{{ route('sikd_object.create') }}" class="tambah btn btn-secondary btn-round">Tambah</a>
                </div>
            </div>
        </div>
    </div>


<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Data Rekening oject</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="dtable" class="display table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Kd rekening	</th>
                                <th>Nama</th>
                                <th>Klasifikasi rek</th>
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
       @php 
         echo $script
       @endphp 
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
            $('#dtable').DataTable({
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
                    url: "{{ route('sikd_object_datatable') }}",
                },
                columns: [
                {
                    data: 'DT_RowIndex',
                    orderable:false,
                },
                {
                    data : 'kd_rek_obj',
                },
                {
                    data : 'nm_rek_obj',
                }, 
                {
                    data : 'klasifikasi_rek',
                }, 
                {
                    data : 'action',
                    orderable:false,
                    'responsive' : true,
                }
                ],
            });

        });
</script>   
@endsection