@extends('layouts.template')
@section('title','List Data Pegawai')
@section('content')
<script>
    $(function(){
        $('#pegawai').on('click', '.edit', function() {
            var access = $(this).attr('to');
            $('.show_form').load(access).slideDown();
        }); 
    });  
</script>

<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold">User Hak Akses</h2>
                <h5 class="text-white op-7 mb-2">Level </h5>
            </div>
            <div class="ml-md-auto py-2 py-md-0">
                <a href="#" class="btn btn-white btn-border btn-round mr-2">List data hak akses.</a>
                <a href="#" to="{{ route('pegawai.create') }}" class="tambah btn btn-secondary btn-round">Tambah Data
                    Master Pegawai Akses</a>
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
                <div class="show_form"></div>

                <div class="table-responsive">
                    <table id="pegawai" class="display table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nip</th>
                                <th>Nama</th>
                                <th>Telp</th>
                                <th>Alamat</th>
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
            $('#pegawai').DataTable({
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
                    url: "{{ Url('tmpegawai/api/data') }}",
                },
                columns: [
                {
                data: 'DT_RowIndex',
                    orderable:false,
                },
                {
                    data : 'nip',
                }, 
                {
                    data : 'n_pegawai',
                },
             
                {
                    data : 'telp',
                }, 
                {
                    data : 'alamat',
                }, 
                {
                    data : 'action',
                    orderable:false,
                    'responsive' : true,
                }
                ],
            });

        });   

        $(function(){
            $('.tambah').on('click',function(e){
                e.preventDefault();
                var url = $(this).attr('to');
                $('.show_form').load(url).slideDown(); 
            });  
          });
        
        
          $(function(){
            $('#pegawai').on('click','.delete',function(){
                var id = $(this).attr('data'); 
                Swal.fire({
                    title: 'Penerimaan ' + id + ' Di Hapus ?',
                    text: "Data akan di hapus ",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.value) {
                        $.ajax({
                            url: '{{ Url("user/destroy") }}',
                            type: 'POST',
                            dataType: 'json',
                            data: {
                                id: id,
                                _token: '{{ csrf_token() }}',
                                _method: 'DELETE'
                            }, 
                            success: function(data) {
                                  Swal.fire(
                                     'Deleted!',
                                     'Data berhasil di hapus.',
                                     'success'
                                ); 
                                $("#datauser").DataTable().ajax.reload(); 
                            },
                            error: function(data) {
                                Swal.fire(
                                    'Tidak bisa di hapus!',
                                    'Server tidak respon.',
                                    'danger'
                                );
                            }
                        });
                    }
                })   
            });
        }); 
            
        function del(){
            var c = $(this).attr('id');
            if(c == 0){
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