<!doctype html>
<html lang="ru">

@include('layouts.common.head')

<body>

<div id="page-container">

    <!-- Main Container -->
    <main id="main-container">
        <!-- Page Content -->
        <div class="hero">
            <div class="hero-inner text-center">
                <div class="bg-body-extra-light">
                    <div class="content content-full overflow-hidden">
                        <div class="py-4">
                            @yield('content')
                        </div>
                    </div>
                </div>
                <div class="content content-full text-muted fs-sm fw-medium">
                    <!-- Error Footer -->
                    <p class="mb-1">
                        Не хотели бы вы сообщить нам об этом?
                    </p>
                    <a class="link-fx" href="mailto:920914@mail.ru">Сообщите об этом</a> или <a class="link-fx" href="{{ route('landing.main') }}">перейти на главную страницу</a>
                    <!-- END Error Footer -->
                </div>
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
<script src="{{ asset('assets/js/oneui.app.min.js') }}"></script>
</body>
</html>
