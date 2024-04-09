<!doctype html>
<html lang="ru">

@include('layouts.common.head')

<body>

<div id="page-container">

    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <div class="bg-image" style="background-image: url('{{asset('assets/media/photos/photo28@2x.jpg')}}');">
            <div class="row g-0 bg-primary-dark-op">
                <!-- Meta Info Section -->
                <div class="hero-static col-lg-4 d-none d-lg-flex flex-column justify-content-center">
                    <div class="p-4 p-xl-5 flex-grow-1 d-flex align-items-center">
                        <div class="w-100">
                            <a class="link-fx fw-semibold fs-2 text-white" href="{{ route('landing.main') }}">
                                {{ config('app.name') }}
                            </a>
                            <p class="text-white-75 me-xl-8 mt-2">
                                Добро пожаловать.
                            </p>
                        </div>
                    </div>
                    @include('layouts.auth.left_footer')
                </div>
                <!-- END Meta Info Section -->

                <!-- Main Section -->
                <div class="hero-static col-lg-8 d-flex flex-column align-items-center bg-body-extra-light">
                    <div class="p-3 w-100 d-lg-none text-center">
                        <a class="link-fx fw-semibold fs-3 text-dark" href="{{ route('landing.main') }}">
                            {{ config('app.name') }}
                        </a>
                    </div>

                    @yield('content')

                    @include('layouts.auth.right_footer')

                </div>
                <!-- END Main Section -->
            </div>
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->
</div>
<!-- END Page Container -->

<!--
    OneUI JS

    Core libraries and functionality
    webpack is putting everything together at assets/_js/main/app.js
-->
<script src="{{asset('assets/js/oneui.app.min.js')}}"></script>

<!-- jQuery (required for jQuery Validation plugin) -->
<script src="{{asset('assets/js/lib/jquery.min.js')}}"></script>

<!-- Page JS Plugins -->
<script src="{{asset('assets/js/plugins/jquery-validation/jquery.validate.min.js')}}"></script>

<!-- Page JS Code -->
<script src="{{asset('assets/js/pages/op_auth_signin.min.js')}}"></script>
</body>
</html>
