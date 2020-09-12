@extends('layouts.template')

@section('content')
<div class="page bg-light">
    @include('layouts._includes.toolbar')
    <div class="container-fluid my-3">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive no-b">
                    <table id="datatable" class="table table-bordered table-striped" style="width:100%">
                        <thead>
                            <th width="30"></th>
                            <th width="120">Kode Rek. Akun</th>
                            <th>Nama Rek. Akun</th>
                            <th width="120">Kode Rek. Aset</th>
                            <th width="120">Kode Rek. Akrual</th>
                            <th width="120">Kode Rek. Utang</th>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('script')
<script type="text/javascript" src="{{ asset('assets/template/js/plugin/datatables/datatables.min.js') }}"></script> 
<script type="text/javascript" src="{{ asset('assets/template/js/plugin/datatables/dataTables.rowGroup.min.js') }}"></script>


<script type="text/javascript">
    var table = $('#datatable').dataTable({
        processing: true,
        serverSide: true,
        order: [1, 'asc'],
        pageLength: 50,
        ajax: {
            url: "{{ route($route.'api') }}",
            method: 'POST'
        },
        columns: [
            {data: 'id', name: 'id', orderable: false, searchable: false, align: 'center', className: 'text-center'},
            {data: 'kd_rek_akun', name: 'kd_rek_akun'},
            {data: 'nm_rek_akun', name: 'nm_rek_akun'},
            {data: 'kd_rek_aset', name: 'kd_rek_aset'},
            {data: 'kd_rek_akrual', name: 'kd_rek_akrual'},
            {data: 'kd_rek_utang', name: 'kd_rek_utang'}
        ]
    });
    @include('layouts._includes.tablechecked')
    
    function del(){
        var c = new Array();
        $("input:checked").each(function(){ c.push($(this).val()); });
        if(c.length == 0){
            $.alert("Silahkan memilih data yang akan dihapus.");
        }else{
            $.post("{{ route($route.'destroy', ':id') }}", {'_method' : 'DELETE', 'id' : c}, function(data) {
                table.api().ajax.reload();
            }, "JSON").fail(function(){
                reload();
            });
        }
    }
</script>
@endsection