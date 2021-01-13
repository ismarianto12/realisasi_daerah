@extends('layouts.template')
@section('title', 'Pendapatan Daerah')
@section('content')

    <div class="panel-header bg-primary-gradient">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                    <h2 class="text-white pb-2 fw-bold">Laporan Keseluruhan PAD</h2>
                    <h5 class="text-white op-7 mb-2"> Report PAD </h5>
                </div>
                <div class="ml-md-auto py-2 py-md-0">
                    <a href="#" class="btn btn-white btn-border btn-round mr-2">Report Penerimaan</a>
                    <a href="#" to="#" class="tambah btn btn-secondary btn-round">Data Penerimaan </a>
                </div>
            </div>
        </div>
    </div>
    <div class="page bg-light">
        <div class="container-fluid my-3">
            <div class="card">
                <div class="card-body" style="overflow:auto">
                    <div class="form-group form-show-validation row">
                        <input type="hidden" name="tahun_id" id="tahun_id" value="{{ Properti_app::tahun_sekarang() }}">
                        <label for="name" class="col-lg-3 col-md-3 col-sm-4 mt-sm-2 text-right">Tahun <span
                                class="required-label">*</span></label>
                        <div class="col-sm-6">
                            <b> {{ Properti_app::tahun_sekarang() }} </b>
                        </div>
                    </div>
                </div>
                <div class="card-body" style="overflow:auto"> <small>Untuk Melihat Hasil Report Silahkan Klik Tampilkan
                        Semua
                        <br />
                        Lebih Kurang Dan Persentase Penerimaan Belum Di Hitung.
                    </small>
                    <hr />

                    <table class="table table-striped" id="tableReport" border-collapse: collapse">
                        <thead>
                            <tr>
                                <th>Kode</th>
                                <th>URAIAN</th>
                                <th>APBD <b> {{ Properti_app::tahun_sekarang() }} </b> </th>
                                <th>JAN</th>
                                <th>FEB</th>
                                <th>MAR</th>
                                <th>Realisasi</th>
                                <th>Lebih/Kurang</th>
                                <th>Persentase</th>
                                <th>APR</th>
                                <th>MEI</th>
                                <th>JUN</th>
                                <th>Realisasi</th>
                                <th>Lebih/Kurang</th>
                                <th>Persentase</th>
                                <th>JUL</th>
                                <th>AGUS</th>
                                <th>SEPT</th>
                                <th>Realisasi</th>
                                <th>Lebih/Kurang</th>
                                <th>Persentase</th>
                                <th>OKT</th>
                                <th>NOV</th>
                                <th>DES</th>
                                <th>Realisasi</th>
                                <th>Lebih/Kurang</th>
                                <th>Persentase</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@section('script')
    <script type="text/javascript" src="{{ asset('assets/template/js/plugin/datatables/datatables.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/template/js/plugin/datatables/dataTables.rowGroup.min.js') }}">
    </script>

    <script type="text/javascript"
        src="{{ asset('assets/template/js/plugin/datatables/button/dataTables.buttons.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/template/js/plugin/datatables/button/jszip.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/template/js/plugin/datatables/button/pdfmake.min.js') }}">
    </script>
    <script type="text/javascript" src="{{ asset('assets/template/js/plugin/datatables/button/vfs_fonts.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/template/js/plugin/datatables/button/buttons.html5.min.js') }}">
    </script>
    <script>
        // $.fn.dataTable.ext.errMode = 'throw';
        $('#tableReport').DataTable({
            select: true,
            dom: 'Blfrtip',
            lengthMenu: [
                [10, 25, 50, -1],
                ['Tampilkan 10 Halaman', '25 Halaman', '50 Halaman', 'Tampilkan Semua']
            ],
            buttons: [{
                    extend: 'pdf',
                    className: "btn btn-warning",
                    text: '<i class="fas fa-file-pdf fa-1x" aria-hidden="true"> Download  PDF</i>',
                    orientation: 'landscape',
                    pageSize: 'LETTER'
                },
                {
                    extend: 'csv',
                    className: "btn btn-info",
                    text: '<i class="fas fa-file-csv fa-1x"> Download  CSV</i>'
                },
                {
                    extend: 'excel',
                    className: "btn btn-primary",
                    cutomize: function(xlsx) {
                        var sheet = xlsx.xl.worksheets['sheet1.xml'];
                        $('row c:regex(r,^[A-Z]2$)', sheet).attr('s', '25');
                    },
                    text: '<i class="fas fa-file-excel" aria-hidden="true"> Download  EXCEL</i>'
                },
                'pageLength'
            ],
            processing: true,
            serverSide: true,
            pageLength: 10,
            ajax: {
                url: "{{ route('laporan.ff') }}",
                method: 'GET',
            },
            language: {
                loadingRecords: "<img src='https://cdn.dribbble.com/users/1626465/screenshots/4617986/__-2.gif' class='img-responsive'>"
            },
            columns: [{
                    data: 'kd_rek',
                    name: 'kd_rek',
                    orderable: false,
                    searchable: false,
                    className: 'text-center'
                },
                {
                    data: 'nama_rek',
                    name: 'nama_rek'
                },
                {
                    data: 'tot',
                    name: 'tot'
                },
                {
                    data: 'jlbulan_1',
                    name: 'jlbulan_1',
                    className: 'text-right',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'jlbulan_2',
                    name: 'jlbulan_2',
                    className: 'text-right',
                    orderable: false,
                    searchable: false
                }, {
                    data: 'jlbulan_3',
                    name: 'jlbulan_3',
                    className: 'text-right',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'rl_1',
                    name: 'rl_1',
                    className: 'text-right',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'kurleb_1',
                    name: 'kurleb_1',
                    className: 'text-right',
                    orderable: false,
                    searchable: false
                }, {
                    data: 'pr_1',
                    name: 'pr_1',
                    className: 'text-right',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'jlbulan_4',
                    name: 'jlbulan_4',
                    className: 'text-right',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'jlbulan_5',
                    name: 'jlbulan_5',
                    className: 'text-right',
                    orderable: false,
                    searchable: false
                }, {
                    data: 'jlbulan_6',
                    name: 'jlbulan_6',
                    className: 'text-right',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'rl_2',
                    name: 'rl_2',
                    className: 'text-right',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'kurleb_2',
                    name: 'kurleb_2',
                    className: 'text-right',
                    orderable: false,
                    searchable: false
                }, {
                    data: 'pr_2',
                    name: 'pr_2',
                    className: 'text-right',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'jlbulan_7',
                    name: 'jlbulan_7',
                    className: 'text-right',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'jlbulan_8',
                    name: 'jlbulan_8',
                    className: 'text-right',
                    orderable: false,
                    searchable: false
                }, {
                    data: 'jlbulan_9',
                    name: 'jlbulan_9',
                    className: 'text-right',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'rl_3',
                    name: 'rl_3',
                    className: 'text-right',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'kurleb_3',
                    name: 'kurleb_3',
                    className: 'text-right',
                    orderable: false,
                    searchable: false
                }, {
                    data: 'pr_3',
                    name: 'pr_3',
                    className: 'text-right',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'jlbulan_10',
                    name: 'jlbulan_10',
                    className: 'text-right',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'jlbulan_11',
                    name: 'jlbulan_11',
                    className: 'text-right',
                    orderable: false,
                    searchable: false
                }, {
                    data: 'jlbulan_12',
                    name: 'jlbulan_12',
                    className: 'text-right',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'rl_4',
                    name: 'rl_4',
                    className: 'text-right',
                    orderable: false,
                    searchable: false
                },
                {
                    data: 'kurleb_4',
                    name: 'kurleb_4',
                    className: 'text-right',
                    orderable: false,
                    searchable: false
                }, {
                    data: 'pr_4',
                    name: 'pr_4',
                    className: 'text-right',
                    orderable: false,
                    searchable: false
                },
            ],
        });

    </script>

@endsection
@endsection
