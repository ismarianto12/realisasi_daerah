<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>@yield('title') - RETRIBUSIs {{ Properti_app::getTahun() }}</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="http://demo.themekita.com/atlantis/livepreview/examples/assets/img/icon.ico"
        type="image/x-icon" />
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
    <link rel="stylesheet" type="text/css" href="http://localhost/simral/public/css/tooltipster.bundle.min.css">
    <link rel="stylesheet" type="text/css"
        href="http://localhost/simral/public/css/tooltipster-sideTip-borderless.min.css">

    <script src="{{ asset('/assets/template/js/aplikasi.js') }}"></script>
</head>

<body>
    <div class="wrapper">
        <div class="main-header">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="blue">

                <a href="index.html" class="logo">
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
                                                        alt="Img Profile">
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
                        <li class="nav-item dropdown hidden-caret">
                            <a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="notification">4</span>
                            </a>
                            <ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
                                <li>
                                    <div class="dropdown-title">Opd yang belum input realisasi pendapatan</div>
                                </li>
                                <li>
                                    <div class="notif-scroll scrollbar-outer">
                                        <div class="notif-center">
                                            <a href="#">
                                                <div class="notif-icon notif-primary"> <i class="fa fa-user-plus"></i>
                                                </div>
                                                <div class="notif-content">
                                                    <span class="block">
                                                        Dinas Permukiman Umum dan Tanah
                                                    </span>
                                                    <span class="time">5 minutes ago</span>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notif-icon notif-success"> <i class="fa fa-comment"></i>
                                                </div>
                                                <div class="notif-content">
                                                    <span class="block">
                                                        Rahmad commented on Admin
                                                    </span>
                                                    <span class="time">12 minutes ago</span>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notif-img">
                                                    <img src="{{ asset('/assets/template/') }}/img/profile2.jpg"
                                                        alt="Img Profile">
                                                </div>
                                                <div class="notif-content">
                                                    <span class="block">
                                                        Reza send messages to you
                                                    </span>
                                                    <span class="time">12 minutes ago</span>
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notif-icon notif-danger"> <i class="fa fa-heart"></i> </div>
                                                <div class="notif-content">
                                                    <span class="block">
                                                        Farrah liked Admin
                                                    </span>
                                                    <span class="time">17 minutes ago</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a class="see-all" href="javascript:void(0);">Lihat Semua Pendapatan .<i
                                            class="fa fa-angle-right"></i> </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown hidden-caret">
                            <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
                                <i class="fas fa-layer-group"></i>
                            </a>
                            <div class="dropdown-menu quick-actions quick-actions-info animated fadeIn">
                                <div class="quick-actions-header">
                                    <span class="title mb-1">Quick Actions</span>
                                    <span class="subtitle op-8">Shortcuts</span>
                                </div>
                                <div class="quick-actions-scroll scrollbar-outer">
                                    <div class="quick-actions-items">
                                        <div class="row m-0">
                                            <a class="col-6 col-md-4 p-0" href="#">
                                                <div class="quick-actions-item">
                                                    <div class="avatar-item bg-danger rounded-circle">
                                                        <i class="far fa-calendar-alt"></i>
                                                    </div>
                                                    <span class="text">Calendar</span>
                                                </div>
                                            </a>
                                            <a class="col-6 col-md-4 p-0" href="#">
                                                <div class="quick-actions-item">
                                                    <div class="avatar-item bg-warning rounded-circle">
                                                        <i class="fas fa-map"></i>
                                                    </div>
                                                    <span class="text">Maps</span>
                                                </div>
                                            </a>
                                            <a class="col-6 col-md-4 p-0" href="#">
                                                <div class="quick-actions-item">
                                                    <div class="avatar-item bg-info rounded-circle">
                                                        <i class="fas fa-file-excel"></i>
                                                    </div>
                                                    <span class="text">Reports</span>
                                                </div>
                                            </a>
                                            <a class="col-6 col-md-4 p-0" href="#">
                                                <div class="quick-actions-item">
                                                    <div class="avatar-item bg-success rounded-circle">
                                                        <i class="fas fa-envelope"></i>
                                                    </div>
                                                    <span class="text">Emails</span>
                                                </div>
                                            </a>
                                            <a class="col-6 col-md-4 p-0" href="#">
                                                <div class="quick-actions-item">
                                                    <div class="avatar-item bg-primary rounded-circle">
                                                        <i class="fas fa-file-invoice-dollar"></i>
                                                    </div>
                                                    <span class="text">Invoice</span>
                                                </div>
                                            </a>
                                            <a class="col-6 col-md-4 p-0" href="#">
                                                <div class="quick-actions-item">
                                                    <div class="avatar-item bg-secondary rounded-circle">
                                                        <i class="fas fa-credit-card"></i>
                                                    </div>
                                                    <span class="text">Payments</span>
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
                                    <img src="@php echo asset('./file/photo_user/'.Properti_app::propuser('photo')) @endphp" alt="..."
                                        class="avatar-img rounded-circle">
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-user animated fadeIn">
                                <div class="dropdown-user-scroll scrollbar-outer">
                                    <li>
                                        <div class="user-box">
                                            <div class="avatar-lg"><img
                                                    src="{{ asset('/assets/template/') }}/img/profile.jpg"
                                                    alt="image profile" class="avatar-img rounded"></div>
                                            <div class="u-text">
                                                <h4>{{ Auth::user()->realname }}</h4>
                                                <p class="text-muted">hello@example.com</p><a href="profile.html"
                                                    class="btn btn-xs btn-secondary btn-sm">View Profile</a>
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
                            <img src="@php echo asset('./file/photo_user/'.Properti_app::propuser('photo')) @endphp" alt="..."
                                class="avatar-img rounded-circle">
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
                        @endphp, made with <i class="fa fa-heart heart text-danger"></i> by <a href="#">ThemeKita</a>
                    </div>
                </div>
            </footer>
        </div>

    </div>
    <!--   Core JS Files   -->

    <script src="{{ asset('/assets/template/') }}/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js">
    </script>

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



    <!-- Google Maps Plugin -->
    <script src="{{ asset('/assets/template/') }}/js/plugin/gmaps/gmaps.js"></script>

    <!-- Dropzone -->
    <script src="{{ asset('/assets/template/') }}/js/plugin/dropzone/dropzone.min.js"></script>

    <!-- Fullcalendar -->
    <script src="{{ asset('/assets/template/') }}/js/plugin/fullcalendar/fullcalendar.min.js">
    </script>

    <!-- DateTimePicker -->
    <script src="{{ asset('/assets/template/') }}/js/plugin/datepicker/bootstrap-datetimepicker.min.js">
    </script>

    <!-- Bootstrap Tagsinput -->
    <script src="{{ asset('/assets/template/') }}/js/plugin/bootstrap-tagsinput/bootstrap-tagsinput.min.js">
    </script>

    <!-- Bootstrap Wizard -->
    <script src="{{ asset('/assets/template/') }}/js/plugin/bootstrap-wizard/bootstrapwizard.js">
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

    <!-- Owl Carousel -->
    <script src="{{ asset('/assets/template/') }}/js/plugin/owl-carousel/owl.carousel.min.js">
    </script>

    <!-- Magnific Popup -->
    <script src="{{ asset('/assets/template/') }}/js/plugin/jquery.magnific-popup/jquery.magnific-popup.min.js">
    </script>

    <!-- Atlantis JS -->
    <script src="{{ asset('/assets/template/') }}/js/atlantis.min.js"></script>
    <!-- Moment JS -->
    <script src="{{ asset('/assets/template/') }}/js/plugin/moment/moment.min.js"></script>
    <script src="http://localhost/simral/public/js/tooltipster.bundle.min.js"></script>

    <!-- Chart JS -->
    <script src="{{ asset('/assets/template/') }}/js/plugin/chart.js/chart.min.js"></script>

    <!-- jQuery Sparkline -->
    <script src="{{ asset('/assets/template/') }}/js/plugin/jquery.sparkline/jquery.sparkline.min.js">
    </script>

    <!-- Chart Circle -->
    <script src="{{ asset('/assets/template/') }}/js/plugin/chart-circle/circles.min.js">
    </script>

    <!-- jQuery Vector Maps -->
    <script src="{{ asset('/assets/template/') }}/js/plugin/jqvmap/jquery.vmap.min.js"></script>
    <script src="{{ asset('/assets/template/') }}/js/plugin/jqvmap/maps/jquery.vmap.world.js">
    </script>

    <!-- Bootstrap Notify -->
    <script src="{{ asset('/assets/template/') }}/js/plugin/bootstrap-notify/bootstrap-notify.min.js">
    </script>
    @yield('script')


    <script>
        Circles.create({
            id: 'circles-1',
            radius: 45,
            value: 60,
            maxValue: 100,
            width: 7,
            text: 5,
            colors: ['#f1f1f1', '#FF9E27'],
            duration: 400,
            wrpClass: 'circles-wrp',
            textClass: 'circles-text',
            styleWrapper: true,
            styleText: true
        })

        Circles.create({
            id: 'circles-2',
            radius: 45,
            value: 70,
            maxValue: 100,
            width: 7,
            text: 36,
            colors: ['#f1f1f1', '#2BB930'],
            duration: 400,
            wrpClass: 'circles-wrp',
            textClass: 'circles-text',
            styleWrapper: true,
            styleText: true
        })

        Circles.create({
            id: 'circles-3',
            radius: 45,
            value: 40,
            maxValue: 100,
            width: 7,
            text: 12,
            colors: ['#f1f1f1', '#F25961'],
            duration: 400,
            wrpClass: 'circles-wrp',
            textClass: 'circles-text',
            styleWrapper: true,
            styleText: true
        })

        var totalIncomeChart = document.getElementById('totalIncomeChart').getContext('2d');

        var mytotalIncomeChart = new Chart(totalIncomeChart, {
            type: 'bar',
            data: {
                labels: ["S", "M", "T", "W", "T", "F", "S", "S", "M", "T"],
                datasets: [{
                    label: "Total Income",
                    backgroundColor: '#ff9e27',
                    borderColor: 'rgb(23, 125, 255)',
                    data: [6, 4, 9, 5, 4, 6, 4, 3, 8, 10],
                }],
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                legend: {
                    display: false,
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            display: false //this will remove only the label
                        },
                        gridLines: {
                            drawBorder: false,
                            display: false
                        }
                    }],
                    xAxes: [{
                        gridLines: {
                            drawBorder: false,
                            display: false
                        }
                    }]
                },
            }
        });

        $('#lineChart').sparkline([105, 103, 123, 100, 95, 105, 115], {
            type: 'line',
            height: '70',
            width: '100%',
            lineWidth: '2',
            lineColor: '#ffa534',
            fillColor: 'rgba(255, 165, 52, .14)'
        });

    </script>
    <script src="{{ asset('/assets/template/') }}/js/core/popper.min.js"></script>





</body>

</html>