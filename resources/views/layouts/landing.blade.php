<!doctype html>
<html lang="ru">

@include('layouts.common.head')

<body>

<div id="page-container" class="sidebar-dark side-scroll page-header-fixed page-header-dark main-content-boxed">


    @include('layouts.landing.nav')

    <!-- Main Container -->
    <main id="main-container">
        @yield('content')
    </main>
    <!-- END Main Container -->

    <!-- Footer -->
    <footer id="page-footer" class="bg-body-extra-light">
        @include('layouts.landing.footer')
    </footer>
    <!-- END Footer -->
</div>
<!-- END Page Container -->

<!--
    OneUI JS

    Core libraries and functionality
    webpack is putting everything together at assets/_js/main/app.js
-->
<script src="{{asset('assets/js/oneui.app.min.js')}}"></script>
</body>
</html>
