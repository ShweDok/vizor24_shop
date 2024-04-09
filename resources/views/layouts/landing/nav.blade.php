<nav id="sidebar" aria-label="Main Navigation">
    <!-- Side Header -->
    <div class="content-header bg-white-5">
        <!-- Logo -->
        <a class="fw-semibold text-dual" href="{{route('landing.main')}}">
            <span class="smini-visible">
              <i class="fa fa-circle-notch text-primary"></i>
            </span>
            <span class="smini-hide fs-5 tracking-wider">
              ИПК | Обмен реестрами
            </span>
        </a>
        <!-- END Logo -->

        <!-- Extra -->
        <div>
            <!-- Options -->
            {{-- <div class="dropdown d-inline-block ms-1"> --}}
            {{--      --}}{{-- <button type="button" class="btn btn-sm btn-alt-secondary" id="sidebar-themes-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> --}}
            {{--      --}}{{--     <i class="fa fa-brush"></i> --}}
            {{--      --}}{{-- </button> --}}
            {{--      --}}{{-- <div class="dropdown-menu dropdown-menu-end fs-sm smini-hide border-0" aria-labelledby="sidebar-themes-dropdown"> --}}
            {{--      --}}{{--     <!-- Color Themes --> --}}
            {{--      --}}{{--     <!-- Layout API, functionality initialized in Template._uiHandleTheme() --> --}}
            {{--      --}}{{--     <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="default" href="#"> --}}
            {{--      --}}{{--         <span>Default</span> --}}
            {{--      --}}{{--         <i class="fa fa-circle text-default"></i> --}}
            {{--      --}}{{--     </a> --}}
            {{--      --}}{{--     <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="assets/css/themes/amethyst.min.css" href="#"> --}}
            {{--      --}}{{--         <span>Amethyst</span> --}}
            {{--      --}}{{--         <i class="fa fa-circle text-amethyst"></i> --}}
            {{--      --}}{{--     </a> --}}
            {{--      --}}{{--     <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="assets/css/themes/city.min.css" href="#"> --}}
            {{--      --}}{{--         <span>City</span> --}}
            {{--      --}}{{--         <i class="fa fa-circle text-city"></i> --}}
            {{--      --}}{{--     </a> --}}
            {{--      --}}{{--     <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="assets/css/themes/flat.min.css" href="#"> --}}
            {{--      --}}{{--         <span>Flat</span> --}}
            {{--      --}}{{--         <i class="fa fa-circle text-flat"></i> --}}
            {{--      --}}{{--     </a> --}}
            {{--      --}}{{--     <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="assets/css/themes/modern.min.css" href="#"> --}}
            {{--      --}}{{--         <span>Modern</span> --}}
            {{--      --}}{{--         <i class="fa fa-circle text-modern"></i> --}}
            {{--      --}}{{--     </a> --}}
            {{--      --}}{{--     <a class="dropdown-item d-flex align-items-center justify-content-between fw-medium" data-toggle="theme" data-theme="assets/css/themes/smooth.min.css" href="#"> --}}
            {{--      --}}{{--         <span>Smooth</span> --}}
            {{--      --}}{{--         <i class="fa fa-circle text-smooth"></i> --}}
            {{--      --}}{{--     </a> --}}
            {{--      --}}{{--     <!-- END Color Themes --> --}}
            {{--      --}}{{-- </div> --}}
            {{-- </div> --}}
            <!-- END Options -->

            <!-- Close Sidebar, Visible only on mobile screens -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <a class="d-lg-none btn btn-sm btn-alt-secondary ms-1" data-toggle="layout" data-action="sidebar_close" href="javascript:void(0)">
                <i class="fa fa-fw fa-times"></i>
            </a>
            <!-- END Close Sidebar -->
        </div>
        <!-- END Extra -->
    </div>
    <!-- END Side Header -->

    <!-- Sidebar Scrolling -->
    <div class="js-sidebar-scroll">
        <!-- Side Navigation -->
        <div class="content-side">
            <ul class="nav-main">
                <li class="nav-main-item">
                    <a class="nav-main-link" href="{{route('auth.login')}}">
                        <i class="nav-main-link-icon si si-user"></i>
                        <span class="nav-main-link-name">Вход</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link" href="#contacts">
                        <i class="nav-main-link-icon si si-phone"></i>
                        <span class="nav-main-link-name">Контакты</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link" href="{{ route('landing.application_register_provider') }}">
                        <i class="nav-main-link-icon si si-power"></i>
                        <span class="nav-main-link-name">Подключиться</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- END Side Navigation -->
    </div>
    <!-- END Sidebar Scrolling -->
</nav>
<!-- END Sidebar -->

<!-- Header -->
<header id="page-header">
    <!-- Header Content -->
    <div class="content-header">
        <!-- Left Section -->
        <div class="d-flex align-items-center">
            <!-- Logo -->
            <a class="fw-semibold fs-5 tracking-wider text-dual me-3" href="{{route('landing.main')}}">
                {{--                    {{config('app.name')}}--}}
                ИПК | Обмен реестрами
            </a>
            <!-- END Logo -->
        </div>
        <!-- END Left Section -->

        <!-- Right Section -->
        <div class="d-flex align-items-center">
            <!-- Menu -->
            <div class="d-none d-lg-block">
                <ul class="nav-main nav-main-horizontal nav-main-hover">
                    {{-- <li class="nav-main-item"> --}}
                    {{--     <a class="nav-main-link active" href="{{route('landing.main')}}"> --}}
                    {{--         <i class="nav-main-link-icon si si-home"></i> --}}
                    {{--         <span class="nav-main-link-name">Главная</span> --}}
                    {{--     </a> --}}
                    {{-- </li> --}}
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="#contacts">
                            <i class="nav-main-link-icon si si-phone"></i>
                            <span class="nav-main-link-name">Контакты</span>
                        </a>
                    </li>
                    <li class="nav-main-heading">Extra</li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="{{ route('landing.application_register_provider') }}">
                            <i class="nav-main-link-icon si si-power"></i>
                            <span class="nav-main-link-name">Подключиться</span>
                        </a>
                    </li>
                    <li class="nav-main-item">
                        <a class="nav-main-link" href="{{route('auth.login')}}">
                            <i class="nav-main-link-icon si si-user"></i>
                            <span class="nav-main-link-name">Вход</span>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- END Menu -->

            <!-- Toggle Sidebar -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            <button type="button" class="btn btn-sm btn-alt-secondary d-lg-none ms-1" data-toggle="layout" data-action="sidebar_toggle">
                <i class="fa fa-fw fa-bars"></i>
            </button>
            <!-- END Toggle Sidebar -->
        </div>
        <!-- END Right Section -->
    </div>
    <!-- END Header Content -->


    <!-- Header Loader -->
    <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
    <div id="page-header-loader" class="overlay-header bg-primary-lighter">
        <div class="content-header">
            <div class="w-100 text-center">
                <i class="fa fa-fw fa-circle-notch fa-spin text-primary"></i>
            </div>
        </div>
    </div>
    <!-- END Header Loader -->
</header>
<!-- END Header -->