@extends('layouts.template')
@section('title','Peneriaan Retribusi')
@section('content')  
<script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>  
<script src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
 
<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-m
        d-center flex-column flex-md-row">
            <div>
              @php
                $level = Properti_app::getlevel();  
               @endphp  
              @if($level != 1 && $level != 2)
                <h2 class="text-white pb-2 fw-bold">Pelaporan Retribusi </h2>
                <h5 class="text-white op-7 mb-2">Satuan kerja : [{{ $rsatker->kode }}] {{ $rsatker->nama }}</h5>
               @else
                <h2 class="text-white pb-2 fw-bold">Pelaporan Retribusi </h2>
                <h5 class="text-white op-7 mb-2">Halaman Administrator</h5>
             @endif 
            </div>
            <div class="ml-md-auto py-2 py-md-0">
                <a href="#" class="btn btn-white btn-border btn-round mr-2">Penerimaan Retribusi .</a>
                <a href="{{ route('penerimaan.create') }}" class="tambah btn btn-secondary btn-round">Lapor Retirbusi</a>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header"> 
            </div>
            <div class="card-body"> 
                 @if($level != 1 && $level != 2) 
                 @else  
            <form id="exampleValidation" action="" method="POST" class="simpan" enctype="multipart/form-data">
                @csrf 
                <div class="card-body">
                    <div class="form-group row">
                        <label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Tahun <span
                                class="required-label">*</span></label>
                        <div class="col-sm-8"> 
                        <select class="form-control" name="tahun"> 
                            @foreach (range($tahun,'2010') as $th)
                            <option value="{{ $th }}">{{ $th }}</option>
                            @endforeach
                        </select>
                        </div>  
                    </div>
                    <div class="form-group row">
                        <label for="username" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Satuan Kerja (OPD) <span
                                class="required-label">*</span></label>
                        <div class="col-sm-8">
                            <select class="form-control" name="satker_id">
                            @foreach ($satker as $opd)   
                            <option value="{{ $opd->kode }}">[{{ $opd->kode }}] - {{ $opd->nama }}</option>
                            @endforeach
                        </select>    
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="username" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Jenis Retribusi Daerah <span
                                class="required-label">*</span></label>
                        <div class="col-sm-8">
                            <select class="form-control" name="rekening_obj_id" id="rekening_obj_id" required>
                                <option value="">Pilih Jenis Retribusi</option> 
                                @foreach ($rekening_object as $obj)   
                            <option value="{{ $obj->id }}">[{{ $obj->kd_rek_obj }}] - {{ $obj->nm_rek_obj }}</option>
                            @endforeach
                        </select>    
                        </div>
                    </div>
            
                    <div class="form-group row">
                        <label for="username" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Rincian Jenis Retribusi <span
                                class="required-label">*</span></label>
                        <div class="col-sm-8">
                            <div id="rek_rincian_obj"></div>  
                        </div>
                    </div>
                
                    <div class="form-group row">
                        <label for="period" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Periode  <span
                                class="required-label">*</span></label>
                        <div class="col-sm-8">
                        <input type="date" id="dari"   class="form-control"> 
                        <br />
                        <input type="date" id="sampai" class="form-control">  
                        </div>
                    </div> 

                    <div class="form-group row">
                        <label for="password" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Di Buat Oleh <span
                                class="required-label">*</span></label>
                        <div class="col-sm-8">
                            <select class="form-control" id="by_id">
                                <option></option>
                            </select>
                        </div>
                    </div> 
                </div>
                <div class="card-action">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="#" class="btn btn-info" id="tampilkan"><i class="fa fa-eye"></i>Tampilkan </a>
                        </div>
                    </div>
                </div>
            </form>  
                 @endif  
                <div class="show_form"></div>  



                <a href="{{ Url('/') }}" class="btn btn-danger"><i class="fa fa-excel"></i>Export Excel </a>
                <div class="table-responsive">
                    <table id="tmpenerimaan" class="display table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>J.Retribusi</th>
                                <th>K.Rek</th>
                                <th>Uraian</th>
                                <th>Jumlah</th> 
                                <th>Tgl Terima</th>
                                <th>Action</th> 
                              </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>J.Retribusi</th>
                                <th>K.Rek</th>
                                <th>Uraian</th>
                                <th>Jumlah</th> 
                                <th>Tgl Terima</th>
                                <th>Action</th> 
                              </tr> 
                        </tfoot> 
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
    $(document).ready(function () { 
      $('#tmpenerimaan').DataTable({ 
            dom: 'Bfrtip',
            buttons: [
                'copyHtml5',
                'excelHtml5',
                'csvHtml5',
                'pdfHtml5'
            ], 
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
                url: "{{ Url('penerimaan_datatable') }}", "type": "GET","data":function(data){  

                    var tahun           = $('#tahun').val();
                    var satker_id       = $('#satker_id').val();
                    var rekening_obj_id = $('#rekening_obj_id').val();
                    var sikd_rek_obj_id = $('#sikd_rek_obj_id').val();
                    
                    data.tahun            = tahun;
                    data.satker_id        = satker_id;
                    data.rekening_obj_id  = rekening_obj_id;
                    data.sikd_rek_obj_id  = sikd_rek_obj_id;  
              
                } 
            },
            columns: [
            {
                data: 'DT_RowIndex',
                orderable:false,
            },
            {
                data : 'jenis_rek_ob',
            },
             {
                data : 'kd_rek_rincian_obj',
            }, 
            {
                data : 'nm_rek_rincian_obj',
            },
            {
                data : 'jumlah',
                "orderable": false,
                render: function(data, type, row) {
                    var numFormat = $.fn.dataTable.render.number(",", ".", 0, "Rp.").display;
                    var total = parseInt(row.jumlah);
                    return numFormat(total);
              }
            },
            {
                data : 'tanggal',
            }, 
            {
                data : 'action',
                orderable :false,
            }
            
            ],
            order: [
            [0, 'desc']
            ], 
            "footerCallback": function(row, data, start, end, display) {
                                    var api = this.api(),
                                        data;
                                    var intVal = function(i) {
                                        return typeof i === 'string' ?
                                            i.replace(/[\$,]/g, '') * 1 :
                                            typeof i === 'number' ?
                                            i : 0;
                                    };
                                    var subtotalall = api
                                        .column(4)
                                        .data()
                                        .reduce(function(a, b) {
                                            return intVal(a) + intVal(b);
                                        }, 0);
                                    var format_jual = $.fn.dataTable.render.number(",", ".", 0, "Rp.").display;
                                    $(api.column(4).footer()).html(format_jual(subtotalall));
                                },
         
                            });  
                $('#tampilkan').click(function(e){
                        e.prevenDefault(); 
                            $('#tmpenerimaan').DataTable().ajax.reload();
                            $('#tmpenerimaan').DataTable().ajax.draw();  
                     });   
    });
///section add data
  $(function(){
    $('.tambah').on('click',function(){
        var url = $(this).attr('to');
        $('.show_form').load(url).slideDown(); 
    });  
  });
     
   // rek_rincian_obj 
    $(function(){
        $('#rek_rincian_obj').html('<div class="alert alert-danger">Pilih rincian retribusi terlebih dahulu..</div>');
        $('#rekening_obj_id').on('change',function(){
            $('#rek_rincian_obj').html('<option>Sedang Memuat data ..</option>')
             var rekening_obj_id = $(this).val();
             var _token          = '{{ csrf_token() }}'; 
             $.ajax({
                type    : 'POST',
                url     : '{{ Url("rekobj_rincian_json") }}',   
                headers : {
                    '_csrf': '{{ csrf_token() }}'
                },
                data    : 'rekening_obj_id='+rekening_obj_id+'&_token='+_token,   
                chace   :  false,
                dataType : 'json',
                success:function(data){  
                    if(data.data){
                        html = '';
                        for(var count = 0; count < data.data.length; count++){
                            html += data.data[count];
                        } 
                        $('#rek_rincian_obj').html('<select name="sikd_rek_obj_id" id="sikd_rek_obj_id" class="form-control">'+html+'</select>');
                    }
                },
                error:function(data,Xhr,error,Status){ 
                    alert('error'); 
                }  
             });
        });  
    }); 
    
    $(function(){
        $('#tmpenerimaan').on('click','.delete',function(){
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
                        url: '{{ Url("penerimaan/destroy") }}',
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
                                 'Your file has been deleted.',
                                 'success'
                            ); 
                            $("#tmpenerimaan").DataTable().ajax.reload(); 
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

</script>



@endsection
