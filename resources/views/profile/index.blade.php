@extends('layouts.template')

@section('title', 'edit profile')
@section('content')
 
<div class="panel-header bg-primary-gradient">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
            <div>
                <h2 class="text-white pb-2 fw-bold">@yield('title')</h2>
                <h5 class="text-white op-7 mb-2"></h5>
            </div>
            <div class="ml-md-auto py-2 py-md-0">
                <a href="#" class="btn btn-white btn-border btn-round mr-2">Edit Password</a>
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


                <div id="msg_error"></div>
                <form id="exampleValidation" action="{{ $action }}" method="POST" class="simpan"
                    enctype="multipart/form-data">
                    @csrf
                    {{ $method_field }}
                    <div class="card-body">
                        <div class="form-group form-show-validation row">
                            <label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Pegawai <span
                                    class="required-label">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="cari_pgawai" placeholder="Klik Cari "
                                    value="">
                                <div id="nama_peg"></div>
                                <div id="pegawai_id"></div>
                            </div>
                        </div>
                        <div class="form-group form-show-validation row">
                            <label for="username" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Username <span
                                    class="required-label">*</span></label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" placeholder="username" aria-label="username"
                                    aria-describedby="username-addon" id="username" name="username" required
                                    value="{{ $username }}">
                            </div>
                        </div>

                        <div class="form-group form-show-validation row">
                            <label for="password" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Password <span
                                    class="required-label">*</span></label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control" id="password_lama" name="password"
                                    placeholder="Enter Password" required value="">
                            </div>
                        </div>

                        <div class="form-group form-show-validation row">
                            <label for="password" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Ulagngi Password
                                <span class="required-label">*</span></label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control" id="password_baru" name="password"
                                    placeholder="Ulangai Password" required value="">
                            </div>
                        </div>

                        <div class="form-group form-show-validation row">
                            <label for="confirmpassword" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">No
                                Telp<span class="required-label">*</span></label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="telp" name="telp"
                                    placeholder="Masukan Nomor Telp" required value="{{ $telp }}">
                            </div>
                        </div>


                        <div class="separator-solid"></div>
                        <div class="separator-solid"></div>
                        <div class="form-group form-show-validation row">
                            <label class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Upload Image <span
                                    class="required-label">*</span></label>
                            <div class="col-sm-8">
                                <div class="input-file input-file-image">
                                    <img class="img-upload-preview img-circle" id="foto" width="100" height="100"
                                        src="{{ $photo_user } }" alt="preview">
                                    <input type="file" name="photo" class="form-control form-control-file"
                                        id="uploadImg" name="uploadImg" accept="image/*" required value="">
                                    <label for="uploadImg" class="btn btn-primary btn-round btn-lg"><i
                                            class="fa fa-file-image"></i>
                                        Upload a Image</label>
                                </div>
                            </div>
                        </div>


                        <div class="form-group form-show-validation row">
                            <label for="confirmpassword" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Nomor
                                Telp<span class="required-label">*</span></label>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" id="telp" name="telp"
                                    placeholder="Masukan Nomor Telp" required value="{{ $telp }}">
                            </div>
                        </div>

                    </div>
                    <div class="card-action">
                        <div class="row">
                            <div class="col-md-12">
                                <input class="simpan btn btn-success" type="submit" value="Simpan">
                                <a href="#" class="btn btn-danger" id="cancel">Cancel</a>
                            </div>
                        </div>
                    </div>
                </form>
  
            </div>
        </div>
    </div>
</div>




@endsection