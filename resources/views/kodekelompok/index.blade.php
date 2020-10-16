@extends('layouts.template')

@section('content')
<div class="page bg-light">
    @include('layouts._includes.toolbar')
    <div class="container-fluid my-3">
        <div class="card">
            <div class="card-body">
                <div class="form-row form-inline">
                    <div class="col-md-12">
                        <div class="form-group m-0">
                            <label for="tmrekening_akun_id" class="col-form-label s-12 col-md-3"><strong>Rek. Akun :</strong></label>
                            <div class="col-md-5 p-0 mb-2">
                                <select name="tmrekening_akun_id" class="form-control r-0 s-12 select2" id="tmrekening_akun_id" onchange="selectOnChange()">
                                    <option value="0">--Pilihan Data--</option>
                                    @foreach($tmrekening_akuns as $key=>$tmrekening_akun)
                                        <option value="{{ $tmrekening_akun->id }}">{{ '['.$tmrekening_akun->kd_rek_akun.'] '.$tmrekening_akun->nm_rek_akun }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mt-2">
            <div class="card-body no-b">
                <div class="table-responsive">
                    <table id="datatable" class="table table-bordered table-striped" style="width:100%">
                        <thead>
                            <th width="30"></th>
                            <th width="130">Kode Rek. Kelompok</th>
                            <th>Nama Rek. Kelompok</th>
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
    $('#btnCreate').on('click', function(){
        if($('#tmrekening_akun_id').val() == 0) {
            event.preventDefault();
            event.stopPropagation();
            $.alert("Silahkan memilih <strong>Rek. Akun</strong> yang akan ditambah.");
        }
    });

    var table = $('#datatable').dataTable({
        processing: true,
        serverSide: true,
        order: [1, 'asc'],
        pageLength: 50,
        ajax: {
            url: "{{ route($route.'api') }}",
            method: 'POST',
            data:function(data){
                data.tmrekening_akun_id = $('#tmrekening_akun_id').val();   
            }
        },
        columns: [
            {data: 'id', name: 'id', orderable: false, searchable: false, align: 'center', className: 'text-center'},
            {data: 'kd_rek_kelompok', name: 'kd_rek_kelompok'},
            {data: 'nm_rek_kelompok', name: 'nm_rek_kelompok'},
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

    function selectOnChange(){
        table.api().ajax.reload();
        $('#btnCreate').attr('href', "{{ route($route.'create') }}?tmrekening_akun_id=" + $('#tmrekening_akun_id').val());
    }
</script>
@endsection