<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Todo - Login</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="icon" href="{{ asset('assets/img/icon.png') }}" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="{{ asset('assets/js/plugin/webfont/webfont.min.js') }}"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            }
            , custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"
                    , "simple-line-icons"
                ]
                , urls: ['{{ asset('
                    assets / css / fonts.min.css ') }}'
                ]
            }
            , active: function() {
                sessionStorage.fonts = true;
            }
        });

    </script>

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('auth_assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('auth_assets/css/atlantis.min.css') }}">

</head>

<body class="login">
    <div class="wrapper wrapper-login">
        @yield('content')

    </div>
    <!--   Core JS Files   -->
    <script src="{{ asset('auth_assets/js/core/jquery.3.2.1.min.js') }}"></script>
    <script src="{{ asset('auth_assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('auth_assets/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('auth_assets/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('auth_assets/js/atlantis.min.js') }}"></script>

</body>

</html>
