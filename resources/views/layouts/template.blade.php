<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>BADAN PENDAPATAN DAERAH - PELAPORAN PENDAPATAPAN {{ Properti_app::getTahun() }}</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="{{ asset('assets\template\img/icon.ico') }}" />
    <!-- Fonts and icons -->
    <script src="{{ asset('/assets/template/') }}/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular",
                    "Font Awesome 5 Brands", "simple-line-icons"
                ],
                urls: ['{{ asset('/assets/template/') }}/css/fonts.min.css']
            },
            active: function () {
                sessionStorage.fonts = true;
            }
        });
        
    <!--- Ismarianto Github io --->
    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('/assets/template/') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/assets/template/') }}/css/atlantis.css">

    <link rel="stylesheet" href="{{ asset('/assets/template/') }}/css/demo.css">
    <script src="{{ asset('/assets/template/') }}/js/sweetalert2@9.js"></script>
    <script src="{{ asset('/assets/template/') }}/js/core/jquery.3.2.1.min.js"></script>
    <script src="{{ asset('/assets/template/') }}/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js">
    </script>


    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('/assets/template/') }}/css/tooltipster.bundle.min.css">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('/assets/template/') }}/css/tooltipster-sideTip-borderless.min.css">

</head>

<body>
    <div class="wrapper">
        <div class="main-header">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="blue">

                <a href="" class="logo">
                    <img src="{{ asset('assets/template/img/logo.png') }}" alt="navbar brand" class="navbar-brand"
                        style="
                        height: 38px;
                    ">
                </a>
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse"
                    data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="icon-menu"></i>
                    </span>
                </button>
                <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
                <div class="nav-toggle">
                    <button class="btn btn-toggle toggle-sidebar">
                        <i class="icon-menu"></i>
                    </button>
                </div>
            </div>
            <!-- End Logo Header -->

            <!-- Navbar Header -->
            <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">

                <div class="container-fluid">
                    <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                        <li class="nav-item toggle-nav-search hidden-caret">
                            <a class="nav-link" data-toggle="collapse" href="#search-nav" role="button"
                                aria-expanded="false" aria-controls="search-nav">
                                <i class="fa fa-search"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown hidden-caret">
                            <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-envelope"></i>
                            </a>
                            <ul class="dropdown-menu messages-notif-box animated fadeIn"
                                aria-labelledby="messageDropdown">
                                <li>
                                    <div class="dropdown-title d-flex justify-content-between align-items-center">
                                        Messages
                                        <a href="#" class="small">Mark all as read</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="message-notif-scroll scrollbar-outer">
                                        <div class="notif-center">
                                            <a href="#">
                                                <div class="notif-img">
                                                    <img src="{{ asset('/assets/template/') }}/img/jm_denis.jpg"
                                                        alt="Img Profile"
                                                        onerror="this.src='{{ asset('assets/template/img/no-image.png') }}'">
                                                </div>
                                                <div class="notif-content">
                                                    <span class="subject">Jimmy Denis</span>
                                                    <span class="block">
                                                        How are you ?
                                                    </span>
                                                    <span class="time">5 minutes ago</span>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notif-img">
                                                    <img src="{{ asset('/assets/template/') }}/img/chadengle.jpg"
                                                        alt="Img Profile">
                                                </div>
                                                <div class="notif-content">
                                                    <span class="subject">Chad</span>
                                                    <span class="block">
                                                        Ok, Thanks !
                                                    </span>
                                                    <span class="time">12 minutes ago</span>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notif-img">
                                                    <img src="{{ asset('/assets/template/') }}/img/mlane.jpg"
                                                        alt="Img Profile">
                                                </div>
                                                <div class="notif-content">
                                                    <span class="subject">Jhon Doe</span>
                                                    <span class="block">
                                                        Ready for the meeting today...
                                                    </span>
                                                    <span class="time">12 minutes ago</span>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notif-img">
                                                    <img src="{{ asset('/assets/template/') }}/img/talha.jpg"
                                                        alt="Img Profile">
                                                </div>
                                                <div class="notif-content">
                                                    <span class="subject">Talha</span>
                                                    <span class="block">
                                                        Hi, Apa Kabar ?
                                                    </span>
                                                    <span class="time">17 minutes ago</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a class="see-all" href="javascript:void(0);">See all messages<i
                                            class="fa fa-angle-right"></i> </a>
                                </li>
                            </ul>
                        </li>
                        @php
                        $flevel = Properti_app::getlevel();
                        $level = ($flevel) ? $flevel : 3;
                        @endphp
                        @if ($level != 3)
                        <li class="nav-item dropdown hidden-caret">
                            <a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="notification">Loading ...</span>
                            </a>
                            <ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
                                <li>
                                    <div class="dropdown-title">Status opd yang input pendapatan pada
                                        {{ Properti_app::tgl_indo(date('Y-m-d')) }}</div>
                                </li>
                                <li>
                                    <div class="notif-scroll scrollbar-outer">
                                        <div class="notif-center">
                                            <div class="notif_opd"></div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a class="see-all" href="{{ route('pendapatan.index') }}">Lihat Semua Pendapatan .<i
                                            class="fa fa-angle-right"></i> </a>
                                </li>
                            </ul>
                        </li>
                        @endif

                        <li class="nav-item dropdown hidden-caret">
                            <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
                                <i class="fas fa-layer-group"></i>
                            </a>
                            <div class="dropdown-menu quick-actions quick-actions-info animated fadeIn">
                                <div class="quick-actions-header">
                                    <span class="title mb-1">Akses Cepat</span>
                                    <span class="subtitle op-8">Shortcuts</span>
                                </div>
                                <div class="quick-actions-scroll scrollbar-outer">
                                    <div class="quick-actions-items">
                                        <div class="row m-0">
                                            <a class="col-6 col-md-4 p-0" href="{{ url('pendapatan/target') }}">
                                                <div class="quick-actions-item">
                                                    <div class="avatar-item bg-danger rounded-circle">
                                                        <i class="far fa-calendar-alt"></i>
                                                    </div>
                                                    <span class="text">Rincian Target PAD</span>
                                                </div>
                                            </a>
                                            <a class="col-6 col-md-4 p-0" href="{{ url('pendapatan') }}">
                                                <div class="quick-actions-item">
                                                    <div class="avatar-item bg-warning rounded-circle">
                                                        <i class="fas fa-map"></i>
                                                    </div>
                                                    <span class="text">Pelaporan PAD</span>
                                                </div>
                                            </a>
                                            <a class="col-6 col-md-4 p-0" href="{{ url('laporan/keseluruhan') }}">
                                                <div class="quick-actions-item">
                                                    <div class="avatar-item bg-info rounded-circle">
                                                        <i class="fas fa-file-excel"></i>
                                                    </div>
                                                    <span class="text">Report Hasil PAD</span>
                                                </div>
                                            </a>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link quick-sidebar-toggler">
                                <i class="fa fa-th"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown hidden-caret">
                            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#"
                                aria-expanded="false">
                                <div class="avatar-sm">
                                    <img src="@php echo asset('./file/photo_user/'.Properti_app::propuser('photo')) @endphp"
                                        alt="..." class="avatar-img rounded-circle"
                                        onerror="this.src='{{ asset('assets/template/img/no-image.png') }}'">
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-user animated fadeIn">
                                <div class="dropdown-user-scroll scrollbar-outer">
                                    <li>
                                        <div class="user-box">
                                            <div class="avatar-lg"><img
                                                    src="@php echo asset('./file/photo_user/'.Properti_app::propuser('photo')) @endphp"
                                                    alt="image profile" class="avatar-img rounded"
                                                    onerror="this.src='{{ asset('assets/template/img/no-image.png') }}'">
                                            </div>
                                            <div class="u-text">
                                                <h4>{{ Auth::user()->realname }}</h4>
                                                <p class="text-muted"></p><a href="{{ Url('akses/profile') }}"
                                                    class="btn btn-xs btn-secondary btn-sm" target="_blank">View
                                                    Profile</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="{{ Url('akses/profile') }}">My Profile</a>

                                        <a class="dropdown-item" href="#">Inbox</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">Account Setting</a>
                                        <div class="dropdown-divider"></div>
                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <button type="submit" name="submit" class="dropdown-item"><i
                                                    class="fas fa-th-large"></i>&nbsp;&nbsp;<b>
                                                    Logout</b></button>
                                        </form>
                                    </li>
                                </div>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- End Navbar -->
        </div>

        <!-- Sidebar -->
        <div class="sidebar sidebar-style-2">
            <div class="sidebar-wrapper scrollbar scrollbar-inner">
                <div class="sidebar-content">
                    <div class="user">
                        <div class="avatar-sm float-left mr-2">
                            <img src="@php echo asset('./file/photo_user/'.Properti_app::propuser('photo')) @endphp"
                                alt="..." class="avatar-img rounded-circle"
                                onerror="this.src='{{ asset('assets/template/img/no-image.png') }}'">
                        </div>
                        <div class="info">
                            <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                                <span>
                                    <h4>{{ Auth::user()->realname }}</h4>
                                    <span class="user-level">{{ Properti_app::getsatker() }}</span>
                                    <span class="caret"></span>
                                </span>
                            </a>
                            <div class="clearfix"></div>
                            <div class="collapse in" id="collapseExample">
                                <ul class="nav">
                                    <li>
                                        <a href="{{ Url('akses/profile') }}">
                                            <span class="link-collapse">Edit Profile</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#settings">
                                            <span class="link-collapse">Settings</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <ul class="nav nav-primary">
                        <li class="nav-item active">
                            <a data-toggle="collapse" href="#base">
                                <i class="fas fa-layer-group"></i>
                                <p>Dashboard </p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="base">
                                <ul class="nav nav-collapse">
                                    <li>
                                        <a href="{{ Url('/') }}">
                                            <span class="sub-item">Home</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        @php echo Menu_app::list_menu() @endphp
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Sidebar -->

        <div class="main-panel">
            <div class="container">
                @yield('content')
            </div>

            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Help
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Licenses
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright ml-auto">
                        @php
                        echo date('Y')
                        @endphp <i class="fa fa-heart heart text-danger"></i> by <a href="#"> copyright {{ date('Y') }}
                            BADAN PENDAPATAN DAERAH TANGERANG SELATAN</a>
                    </div>
                </div>
            </footer>
        </div>

    </div>
    <!--   Core JS Files   -->

    <script src="{{ asset('/assets/template/') }}/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"
        integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ=="
        crossorigin="anonymous"></script>
    <script src="{{ asset('assets/template') }}/js/plugin/datepicker/bootstrap-datetimepicker.min.js"></script>
    <script src="{{ asset('assets/template/js/aplikasi.js') }}"></script>

    <!-- jQuery Scrollbar -->
    <script src="{{ asset('/assets/template/') }}/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js">
    </script>

    <!-- Moment JS -->
    <script src="{{ asset('/assets/template/') }}/js/plugin/moment/moment.min.js"></script>

    <!-- Chart JS -->
    <script src="{{ asset('/assets/template/') }}/js/plugin/chart.js/chart.min.js"></script>

    <!-- jQuery Sparkline -->
    <script src="{{ asset('/assets/template/') }}/js/plugin/jquery.sparkline/jquery.sparkline.min.js">
    </script>

    <!-- Chart Circle -->
    <script src="{{ asset('/assets/template/') }}/js/plugin/chart-circle/circles.min.js">
    </script>


    <!-- Bootstrap Notify -->
    <script src="{{ asset('/assets/template/') }}/js/plugin/bootstrap-notify/bootstrap-notify.min.js">
    </script>

    <!-- Bootstrap Toggle -->
    <script src="{{ asset('/assets/template/') }}/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js">
    </script>

    <!-- jQuery Vector Maps -->
    <script src="{{ asset('/assets/template/') }}/js/plugin/jqvmap/jquery.vmap.min.js"></script>
    <script src="{{ asset('/assets/template/') }}/js/plugin/jqvmap/maps/jquery.vmap.world.js">
    </script>


    <script src="{{ asset('/assets/template/') }}/js/core/bootstrap.min.js"></script>

    <!-- Fullcalendar -->
    <script src="{{ asset('/assets/template/') }}/js/plugin/fullcalendar/fullcalendar.min.js">
    </script>

    <!-- DateTimePicker -->
    <script src="{{ asset('/assets/template/') }}/js/plugin/datepicker/bootstrap-datetimepicker.min.js">
    </script>

    <!-- jQuery Validation -->
    <script src="{{ asset('/assets/template/') }}/js/plugin/jquery.validate/jquery.validate.min.js">
    </script>

    <!-- Summernote -->
    <script src="{{ asset('/assets/template/') }}/js/plugin/summernote/summernote-bs4.min.js">
    </script>

    <!-- Select2 -->
    <script src="{{ asset('/assets/template/') }}/js/plugin/select2/select2.full.min.js">
    </script>

    <!-- Sweet Alert -->
    <script src="{{ asset('/assets/template/') }}/js/plugin/sweetalert/sweetalert.min.js">
    </script>

    <!-- Atlantis JS -->
    <script src="{{ asset('/assets/template/') }}/js/atlantis.min.js"></script>
    <!-- Moment JS -->
    <script src="{{ asset('/assets/template/') }}/js/plugin/moment/moment.min.js"></script>
    <script src="{{ asset('/assets/template/') }}/js/tooltipster.bundle.min.js"></script>

    <!-- Chart JS -->
    <script src="{{ asset('/assets/template/') }}/js/plugin/chart.js/chart.min.js"></script>

    @yield('script')

    <div class="modal fade" id="modalopdetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content" style="width: auto;">
                <div class="modal-header">
                    <div class="alert alert-success">
                        <h4 class="modal-title" id="exampleModalLongTitle"><i class="fa fa-check"></i>Riwayat Pad yang di
                            laporkan pada tanggal {{ Properti_app::tgl_indo(date('Y-m-d')) }}
                        </h4>
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="contentdata_opd"></div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(function(){
        $('.notif_opd').html('<div class="alert alert-danger">Loading ..</div>');
            url = '{{ route('aplikasi.opdinput') }}';
            $.get(url,function(data){
            hasil = '';  
            $.each(data, function(index, value){
                hasil += '<a href="#" onfocus="detail_data('+value.opd_kode+')"><div class="notif-img">'+value.image+'</div> <div class="notif-content"><span class="block">'+value.opd_kode+'</span><span class="time">'+value.opn_nm+'</span></div></a>';
             });
             $('.notif_opd').html('<li>'+hasil+'</li>'); 
           },'JSON');     
          //
           url = '{{ route('aplikasi.opdinput') }}?total=1';
          $.get(url,function(data){
            $('.notification').html(data);
         },'JSON'); 
      }); 
    </script>
    <script>
        $(function(){
            $('.modal_opd').on('click',function(e){
                e.preventDefault();
                $('#modalopdetail').modal('show'); 
            });

            $('.select2').select2({
                dropdownAutoWidth : true,
                width: 'auto'
            });
            
             $('.js-example-basic-multiple').select2();

        }); 

     function detail_data(n) 
     { 
         var url   = "{{ Url('pendapatan/dapatkanpadopd/:id') }}".replace(':id',n);
         $('.contentdata_opd').html('<div class="alert alert-succcess">Sedang meload halaman harap bersabar ....</div>');   
         $.get(url,function(data){  
            $('.contentdata_opd').html(data);
         }).fail(function(data){
            $('.contentdata').load('Maaf gagal meload halaman karena suatu kesalahan'); 
         });
         $('#modalopdetail').modal('show');
         $('.nav-item dropdown hidden-caret submenu').attr('open');
     }
    </script>
    <script src="{{ asset('/assets/template/') }}/js/core/popper.min.js"></script>




</body>

</html>