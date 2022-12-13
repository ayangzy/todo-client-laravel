<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- head -->
    <link rel="stylesheet" href="{{asset('assets/css/toastr.min.css')}}">
    @include('layouts.inc.head')
    @stack('page-style')
</head>

<body>
    <div class="wrapper">
        <div id="overlay" style="display:none;" onclick="return off()">
            <div id="text">
                <img src="{{ asset('assets/img/loader.svg') }}" />
            </div>
        </div>
        <div id="modal-placeholder"></div>
        <!-- header-->
        @include('layouts.inc.header')

        <div class="main-panel py-5">
            @yield('content')

        </div>

    </div>
    @include('layouts.inc.footer-scripts')
    @stack('script')
</body>

</html>


<script src="{{asset('assets/js/toastr.min.js')}}"></script>

<script>
    @if(Session::has('info'))
    toastr.info("{{Session::get('info')}}")
    @endif

</script>
