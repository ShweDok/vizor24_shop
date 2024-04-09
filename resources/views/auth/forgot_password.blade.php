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
                    Напомним пароль
                </h1>
                <p class="fw-medium text-muted">
                    Укажите электронную почту, на которую был зарегистрирован аккаунт.
                </p>
            </div>
            <!-- END Header -->

            <!-- Reminder Form -->
            <!-- jQuery Validation (.js-validation-reminder class is initialized in js/pages/op_auth_reminder.min.js which was auto compiled from _js/pages/op_auth_reminder.js) -->
            <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
            <div class="row g-0 justify-content-center">
                <div class="col-sm-8 col-xl-4">
                    <form class="js-validation-reminder" action="{{ route('auth.forgot_password') }}" method="POST">
                        <div class="mb-4">
                            <input required type="text" class="form-control form-control-lg form-control-alt py-3" id="email" name="email" placeholder="Email">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-lg btn-alt-primary">
                                <i class="fa fa-fw fa-envelope me-1 opacity-50"></i> Отправить пароль
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- END Reminder Form -->
        </div>
    </div>
@endsection