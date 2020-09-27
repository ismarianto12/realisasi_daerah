@extends('layouts.template')
@section('title', 'Tambah target pendapatan')
@section('content')

{{-- @php
    dd($trekening);
    @endphp --}}


    <div class="panel-header bg-primary-gradient">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                    <h2 class="text-white pb-2 fw-bold">@yield('title')</h2>
                    <h5 class="text-white op-7 mb-2"></h5>
                </div>
                <div class="ml-md-auto py-2 py-md-0">
                    <a href="#" class="btn btn-white btn-border btn-round mr-2">Target Pendapatan (Termasuk pajak dan
                    retribusi) . </a>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div id="alert"></div>
                </div>
                <div class="card-body">
                    <div id="msg_error"></div>
                    <form id="form" action="{{ $action }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        {{ $method_field }}
                        <div class="card-body">

                            <div class="form-group form-show-validation row">
                                <label for="password" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Rincian Rekening
                                    object pendapatan <span class="required-label">*</span></label>
                                    <div class="col-sm-8">
                                        <div class="alert alert-success">
                                            @foreach($trekening as $key)
                                            <ul>
                                                <li> {{ $key->Tmrekening_akun_kelompok_jenis_objek->nm_rek_obj }}.
                                                    <ul>
                                                        <li>{{ $key['nm_rek_rincian_obj'] }}</li>
                                                        <input type="hidden" name="rekneing_rincian_akun_jenis_objek_id"
                                                        value="{{ $key['id'] }}">
                                                    </ul>
                                                </li>
                                            </ul>
                                            @endforeach
                                        </div>

                                    </div>
                                </div>


                                <div class="form-group form-show-validation row">
                                    <label for="username" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Total Target +
                                        Perubahan
                                        <span class="required-label">*</span></label>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" placeholder="jumlah target "
                                            aria-label="username" aria-describedby="target-addon" id="tpendapatan" name="jumlah"
                                            required value="{{ $jumlah }}">
                                            <div class="rincian_jtarget"></div>
                                        </div>
                                    </div>




                                    <div class="form-group form-show-validation row">
                                        <label for="tahun_pendapatan" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">
                                            Tahun Pendapatan.
                                            <span class="required-label">*</span></label>
                                            <div class="col-sm-8">
                                                <select name="tahun" class="form-control">
                                                    @foreach($tahuns as $val)
                                                    <option value="{{ $val->tahun }}">{{ $val->tahun }} </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group form-show-validation row">
                                            <label for="password" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Dasar Hukum
                                                Target Pendapatan
                                                <span class="required-label">*</span></label>
                                                <div class="col-sm-8">
                                                    <input type="dasar_hukum" class="form-control" id="dasar_hukum" name="dasar_hukum"
                                                    placeholder="Dasar Hukum" required value="{{ $dasar_hukum }}">
                                                </div>
                                            </div>

                                            <div class="form-group form-show-validation row">
                                                <label for="confirmpassword"
                                                class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Keterangan
                                                <span class="required-label">*</span></label>
                                                <div class="col-sm-8">
                                                    <textarea class="form-control" name="keterangan"> {{ $keterangan }} </textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-action">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input class="simpan btn btn-success btn-sm" type="submit" value="Simpan">
                                                    <a href="#" class="btn btn-danger btn-sm" id="cancel">Cancel</a>
                                                    <a href="{{ Url('pendapatan/target') }}" class="btn btn-info btn-sm" id="home"><i
                                                        class="fa fa-home"></i>Home</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                        @section('script')
                        <script type="text/javascript">
                            $(function() {  
                                $('#form').on('submit',function(e) {
                                    e.preventDefault(); 
                                    if ($(this)[0].checkValidity() === false) {
                                        e.preventDefault();
                                        e.stopPropagation();
                                    }else{ 
                                     $('#alert').html('');
                                     $('#btnSave').attr('disabled', true);
                                     url = $(this).attr('action');
                                     $.post(url, $(this).serialize(),function(data){
                                      $('#alert').html("<div role='alert' class='alert alert-success alert-dismissible'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button><strong>Success!</strong>Data berhasil di simpan</div>");
                                      window.location.href = '{{ Url("pendapatan/target") }}';
                                  },'JSON').fail(function(data){
                                    err = ''; respon = data.responseJSON;
                                    $.each(respon.errors, function(index, value){
                                        err += "<li>" + value +"</li>";
                                    });
                                    $('#alert').html("<div role='alert' class='alert alert-danger alert-dismissible'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>×</span></button><strong>Error!</strong> " + respon.message + "<ol class='pl-3 m-0'>" + err + "</ol></div>");
                                }).always(function(){
                                    $('.simpan').removeAttr('disabled');
                                });  
                            }
                        });

        //action form  
        $('.rincian_jtarget').html('<b>Loading ..</b>');
        $("#tpendapatan").on('keyup', function(){
            var n = parseInt($(this).val().replace(/\D/g,''),10);
            $(this).val(n.toLocaleString());
             myFunc(); //call another function too
         });


        @if($action == 'add')  
        load_url = "{{ Url('pendapatan/trtargetrincian_form_edit/'.$targetid) }}"; 
        @elseif(action == 'edit')
        load_url = "{{ Url('pendapatan/trtargetrincian_form/'.$targetid) }}";  
        @endif 
        $('.rincian_jtarget').load(load_url);

    });
</script>
@endsection
@endsection