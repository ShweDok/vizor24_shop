@extends('layouts.landing')

@section('content')
    <!-- Hero -->
    <div class="bg-image" style="background-image: url('{{asset('assets/media/photos/photo36@2x.jpg')}}');">
        <div class="bg-primary-dark-op py-9 overflow-hidden">
            <div class="content content-full text-center">
                <h1 class="display-4 fw-semibold text-white mb-2">
                    Реестрообменник
                </h1>
                <p class="fs-4 fw-normal text-white-50 mb-5">
                    Этот реестрообменник работает независимо от базы данных касс, обрабатывает и проверяет реестры, и только после проверки "порционно" загружает реестр в базу данных касс.
                </p>
                <div>
                    <a class="btn btn-primary px-3 py-2 m-1" href="{{ route('landing.application_register_provider') }}">
                        <i class="fa fa-fw fa-power-off opacity-50 me-1"></i> Подключиться
                    </a>
                    <a class="btn btn-dark px-3 py-2 m-1" href="{{route('auth.login')}}">
                        <i class="fa fa-fw fa-user opacity-50 me-1"></i> Войти
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- END Hero -->

    @include('landing.sections.application_register_provider')
    @include('landing.sections.contacts')

@endsection