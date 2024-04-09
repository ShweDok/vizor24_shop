@extends('layouts.auth')

@section('content')
    <div class="p-4 w-100 flex-grow-1 d-flex align-items-center">
        <div class="w-100">
            <!-- Header -->
            <div class="text-center mb-5">
                <p class="mb-3">
                    <i class="fa fa-2x fa-circle-notch text-primary-light"></i>
                </p>
                <h1 class="fw-bold mb-2">
                    Создать аккаунт
                </h1>
                <p class="fw-medium text-muted">
                    Если вы зарегистрированы, <a href="{{ route('auth.login') }}">Вход</a>
                </p>
            </div>
            <!-- END Header -->

            <!-- Sign Up Form -->
            <!-- jQuery Validation (.js-validation-signup class is initialized in js/pages/op_auth_signup.min.js which was auto compiled from _js/pages/op_auth_signup.js) -->
            <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
            <div class="row g-0 justify-content-center">
                <div class="col-sm-8 col-xl-4">
                    <form class="js-validation-signup" action="{{ route('auth.register') }}" method="POST">
                        <div class="mb-4">
                            <input required autocomplete="off" type="text" class="form-control form-control-lg form-control-alt py-3" id="name" name="name" placeholder="Ваше имя">
                        </div>
                        <div class="mb-4">
                            <input required autocomplete="off" type="email" class="form-control form-control-lg form-control-alt py-3" id="email" name="email" placeholder="Email">
                        </div>
                        <div class="mb-4">
                            <div class="d-md-flex align-items-md-center justify-content-md-between">
                                <div class="form-check">
                                    <input required class="form-check-input" type="checkbox" value="" id="signup-terms" name="signup-terms">
                                    <label class="form-check-label" for="signup-terms">Я согласен с <a href="javascript:void(0)">условиями использования</a> и <a href="javascript:void(0)">политикой конфиденциальности</a></label>
                                </div>
                                {{-- <div class="py-2"> --}}
                                {{--     <a class="fs-sm fw-medium" href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#one-signup-terms">View Terms</a> --}}
                                {{-- </div> --}}
                            </div>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-lg btn-alt-success">
                                <i class="fa fa-fw fa-plus me-1 opacity-50"></i> Регистрация
                            </button>
                        </div>
                        <p class="fw-normal text-muted text-center mt-4">
                            Пароль для доступа будет отправлен на указанный Email
                        </p>
                    </form>
                </div>
            </div>
            <!-- END Sign Up Form -->
        </div>
    </div>
@endsection