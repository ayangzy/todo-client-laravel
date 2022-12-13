<div class="main-header">
    <!-- Logo Header -->
    <div class="logo-header" data-background-color="green2">

        <a href="{{route('home')}}" class="logo text-white">
            Todo Client App
        </a>
        <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
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
    <nav class="navbar navbar-header navbar-expand-lg" data-background-color="green2">

        <div class="container-fluid">

            <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">

                <li class="nav-item dropdown hidden-caret">
                    <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                        <div class="avatar-sm">
                            <img src="{{ asset('assets/img/user200x200.png') }}" alt="..." class="avatar-img rounded-circle">
                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-user animated fadeIn">
                        <div class="dropdown-user-scroll scrollbar-outer">
                            <li>
                                <div class="user-box">
                                    <div class="avatar-lg">
                                        <img src="{{ asset('assets/img/user200x200.png') }}" alt="image profile" class="avatar-img rounded">
                                    </div>
                                    <div class="u-text">
                                        @if(Auth::check())
                                        <h4>{{ Auth::user()->name}}</h4>
                                        <p class="text-muted">{{ Auth::user()->email }}</p>
                                        <a href="route('logout')" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-xs btn-danger btn-sm">Logout</a>
                                        @endif

                                    </div>
                                </div>
                            </li>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End Navbar -->
</div>
