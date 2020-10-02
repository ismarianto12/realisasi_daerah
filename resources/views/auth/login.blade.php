<!DOCTYPE html>
<html lang="en"> 
<head>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Login</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="http://demo.themekita.com/atlantis/livepreview/examples/assets/img/icon.ico"
        type="image/x-icon" />
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

    <link rel="stylesheet" href="{{ asset('/assets/template/') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/assets/template/') }}/css/atlantis.css">
</head>

<body class="login">
    <div class="wrapper wrapper-login wrapper-login-full p-0">
        <div
            class="login-aside w-50 d-flex flex-column align-items-center justify-content-center text-center bg-secondary-gradient">
            <h1 class="title fw-bold text-white mb-3">SIPAKDE</h1>
            <p class="subtitle text-white op-7">(SISTEM INFORMASI PELAPORAN PENDAPATAN DAERAH)</p>
        </div>
        <div class="login-aside w-50 d-flex align-items-center justify-content-center bg-white">
            <div class="container container-login container-transparent animated fadeIn">
             <form action="{{ route('login') }}" method="POST" class="form-horizontal"> 
                 @csrf
                <h3 class="text-center">Login Aplikasi</h3>
                <div class="login-form">
                    <div class="form-group"> 
                        @if ($errors->has('username'))
                        <b>
                            <strong>{{ $errors->first('username') }}</strong>
                        </b>
                    @endif
                        <label for="username" class="placeholder"><b>Username</b></label>
                        <input id="username" name="username" type="text" class="form-control" required>
                    </div>
                    <div class="form-group"> 
                        @if ($errors->has('password'))
                        <b> 
                            <strong>{{ $errors->first('password') }}</strong>
                        </b>
                    @endif
                        <label for="password" class="placeholder"><b>Password</b></label>
                        <a href="#" class="link float-right">Lupa Password ?</a>
                        <div class="position-relative">
                             <input id="password" name="password" type="password" class="form-control" required>
                            <div class="show-password">
                                <i class="icon-eye"></i>
                            </div>
                        </div>
                    </div>

                    <div class="form-group"> 
                        <select class="form-control" name="year" required="">
                             @foreach(range(date('Y'),2010) as $lstahun) 
                            <option value="{{ $lstahun }}">  
                                 {{ $lstahun }}
                             </option>
                             @endforeach
                        </select>
                    </div>

                    <div class="form-group form-action-d-flex mb-3">
                        <button type="submit" name="login" class="btn btn-secondary col-md-5 float-right mt-3 mt-sm-0 fw-bold">Login</a>
                    </div>
                    <div class="login-account">
                        {{--  <span class="msg">Lupa Akun ?</span>  --}}
                    </div>   
                </div>
            </form>
            </div>     
        </div>
    </div>
    <script src="{{ asset('/assets/template/') }}/js/core/jquery.3.2.1.min.js"></script>
    <script src="{{ asset('/assets/template/') }}/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="{{ asset('/assets/template/') }}/js/core/popper.min.js"></script>
    <script src="{{ asset('/assets/template/') }}/js/core/bootstrap.min.js"></script>
    <script src="{{ asset('/assets/template/') }}/js/atlantis.min.js"></script>
</body>

</html>
