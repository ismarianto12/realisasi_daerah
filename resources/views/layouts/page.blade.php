<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
    <link rel="stylesheet" type="text/css" href="http://localhost/simral/public/css/tooltipster-sideTip-borderless.min.css">
    
    <script src="{{ asset('/assets/template/js/aplikasi.js') }}"></script>
</head>

<body class="light">
    {{-- <div id="loader" class="loader">
        <div style="position: botom;top:50%;left: 50%;transform: translate(-50%, -50%);z-index:1000">
            <div class="preloader-wrapper big active">
                <div class="spinner-layer spinner-blue-only">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div><div class="gap-patch">
                    <div class="circle"></div>
                </div><div class="circle-clipper right">
                    <div class="circle"></div>
                </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div id="app">
        <div class="main-wrapper">
            <div class="main" style="min-height:423px">
                @yield('content')
            </div>
        </div>
    </div>

    <!--/#app -->
    <script type="text/javascript">
        var APP_URL = {!! json_encode(url('/').'/') !!}
        function waitForContent(){
            $('#loader').removeClass('loader-fade');
        }
        function closeForContent(){
            $('#loader').addClass('loader-fade');
        }
    </script> 
    <script src="{{ asset('/assets/template/') }}/js/core/popper.min.js"></script>
    <script type="text/javascript">
        $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
    </script>
    @yield('script')
</body>

</html>
