<!doctype html>
<html lang="en">

@include('layouts.common.head')

<body>

<div id="page-container" class="page-header-dark main-content-boxed">

    @include('layouts.app.header')

    <!-- Main Container -->
    <main id="main-container">

        @include('layouts.app.navbar')

        <!-- Page Content -->
        <div class="content">
            @yield('content')
        </div>
        <!-- END Page Content -->
    </main>
    <!-- END Main Container -->

    @include('layouts.app.footer')
</div>
<!-- END Page Container -->

<!--
    OneUI JS

    Core libraries and functionality
    webpack is putting everything together at assets/_js/main/app.js
-->
<script src="{{ asset('assets/js/oneui.app.min.js') }}"></script>

<!-- jQuery (required for Easy Pie Chart + jQuery Sparkline Plugins) -->
<script src="{{ asset('assets/js/lib/jquery.min.js') }}"></script>

@stack('js')
</body>
</html>
