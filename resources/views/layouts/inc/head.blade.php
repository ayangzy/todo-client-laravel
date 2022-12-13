<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<title>Home</title>
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
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendors/select2/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendors/select2/css/select2-bootstrap.css') }}">

<link rel="stylesheet" href="{{ asset('assets/js/plugin/toastr/toastr.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendors/dropify/css/dropify.min.css') }}">

<link rel="stylesheet" href="{{ asset('assets/css/atlantis.min.css') }}">

<!--Custom Css-->
<link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

<style>
    .card,
    .card-light {
        margin-bottom: 10px !important;
    }

    .alert .close {
        width: 0px !important;
        top: 0px !important;
    }

</style>
