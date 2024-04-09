@extends('layouts.app')

@section('content')
    <!-- Hero -->
    <div class="bg-image" style="background-image: url('{{ asset('assets/media/photos/photo10@2x.jpg') }}');">
        <div class="bg-primary-dark-op">
            <div class="content content-full text-center">
                {{-- <div class="my-3"> --}}
                {{--     <img class="img-avatar img-avatar-thumb" src="assets/media/avatars/avatar13.jpg" alt=""> --}}
                {{-- </div> --}}
                <h1 class="h2 text-white mb-0">Редактирование профиля</h1>
                {{-- <h2 class="h4 fw-normal text-white-75"> --}}
                {{--     Имя пользователя --}}
                {{-- </h2> --}}
            </div>
        </div>
    </div>
    <!-- END Hero -->

    <!-- Page Content -->
    <div class="content content-boxed">
        <!-- User Profile -->
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">Основные данные</h3>
            </div>
            <div class="block-content">
                <form action="{{ route('app.settings.profile.update') }}" method="POST" enctype="multipart/form-data" onsubmit="return false;">
                    @csrf
                    <div class="row push">
                        <div class="col-lg-4">
                            <p class="fs-sm text-muted">
                                Важные данные вашей учетной записи. Ваше имя пользователя будет доступно для всеобщего обозрения.
                            </p>
                            <p class="fs-sm text-muted">
                                Электронная почта необходима для авторизации в данном приложении и для получения уведомлений
                            </p>
                            <p class="fs-sm text-muted">
                                Телефон необходим для экстренной связи
                            </p>
                            <p class="fs-sm text-muted">
                                Логин телеграм можно использовать в дальнейшем для получения уведомлений на свой телеграм-аккаунт. Для этого необходимо зарегистрироваться в нашем <a target="_blank" href="https://t.me/ipc_cashdesk_bot">телеграм-боте</a>
                            </p>
                        </div>
                        <div class="col-lg-8 col-xl-5">

                            <div class="mb-4">
                                <label class="form-label" for="one-profile-edit-name">ФИО</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Введите ваше имя.." value="{{ auth()->user()->name ?? '' }}">
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="Введите Email.." value="{{ auth()->user()->email ?? '' }}">
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="phone">Телефон</label>
                                <input type="tel" class="form-control" id="phone" name="one-profile-edit-phone" placeholder="Укажите телефон.." value="{{ auth()->user()->phone ?? '' }}">
                            </div>
                            {{-- <div class="mb-4"> --}}
                            {{--     <label class="form-label" for="login">Логин (username)</label> --}}
                            {{--     <input type="text" class="form-control" id="login" name="login" placeholder="Укажите Логин.." value="{{ auth()->user()->login ?? '' }}"> --}}
                            {{-- </div> --}}
                            <div class="mb-4">
                                <label class="form-label" for="login">Телеграм (@username)</label>
                                <input type="text" class="form-control" id="login" name="login" placeholder="Укажите Логин.." value="{{ auth()->user()->login ?? '' }}">
                            </div>

                            <div class="mb-4">
                                <button type="submit" class="btn btn-alt-primary">
                                    Сохранить
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- END User Profile -->

        <!-- Change Password -->
        <div class="block block-rounded">
            <div class="block-header block-header-default">
                <h3 class="block-title">Изменить пароль</h3>
            </div>
            <div class="block-content">
                <form action="{{ route('app.settings.profile.change-password') }}" method="POST">
                    @csrf
                    <div class="row push">
                        <div class="col-lg-4">
                            <p class="fs-sm text-muted">
                                Смена пароля для входа в систему - это простой способ обезопасить свою учетную запись.
                            </p>
                        </div>
                        <div class="col-lg-8 col-xl-5">
                            <div class="mb-4">
                                <label class="form-label" for="password_old">Старый пароль</label>
                                <input autocomplete="off" type="password" class="form-control" id="password_old" name="password_old">
                            </div>
                            <div class="row mb-4">
                                <div class="col-12">
                                    <label class="form-label" for="password_new">Новый пароль</label>
                                    <input autocomplete="off" type="password" class="form-control" id="password_new" name="password_new">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col-12">
                                    <label class="form-label" for="password_confirm">Повторите новый пароль</label>
                                    <input autocomplete="off" type="password" class="form-control" id="password_confirm" name="password_confirm">
                                </div>
                            </div>
                            <div class="mb-4">
                                <button type="submit" class="btn btn-alt-primary">
                                    Сохранить пароль
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- END Change Password -->

    </div>
    <!-- END Page Content -->
@endsection