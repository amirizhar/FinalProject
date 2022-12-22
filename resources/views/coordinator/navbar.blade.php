<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
        <a class="sidebar-brand brand-logo" href="/redirect"><img style="height:65px;" src="assets/images/logo-uniten.png"
                alt="logo" /></a>
        {{-- <a class="sidebar-brand brand-logo-mini" href="redirect"><img src="assets/images/logo-uniten.png"
                alt="logo" /></a> --}}
    </div>
    <ul class="nav">
        <li class="nav-item profile">
        </li>
        <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="/redirect">
                <span class="menu-icon">
                    <i class="mdi mdi-speedometer"></i>
                </span>
                <span class="menu-title">Home</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="/addProject">
                <span class="menu-icon">
                    <i class="mdi mdi-playlist-play"></i>
                </span>
                <span class="menu-title">Create New Project</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="/displayProject">
                <span class="menu-icon">
                    <i class="mdi mdi-table-large"></i>
                </span>
                <span class="menu-title">Delete Project</span>
            </a>
        </li>
        {{-- href="{{ route('register') }}" --}}
        <li class="nav-item menu-items">
            <a class="nav-link" href="/RegisterLecturer">
                <span class="menu-icon">
                    <i class="mdi mdi-table-large"></i>
                </span>
                <span class="menu-title">Register Lecturer</span>
            </a>
        </li>
        <li class="nav-item menu-items">
            <a class="nav-link" href="/deleteLecturer">
                <span class="menu-icon">
                    <i class="mdi mdi-table-large"></i>
                </span>
                <span class="menu-title">Delete Lecturer</span>
            </a>
        </li>
        
    </ul>



    <nav class="navbar p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg"
                    alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="mdi mdi-menu"></span>
            </button>
            <ul class="navbar-nav navbar-nav-right">
                <x-app-layout>

                </x-app-layout>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                data-toggle="offcanvas">
                <span class="mdi mdi-format-line-spacing"></span>
            </button>
        </div>
    </nav>
</nav>
