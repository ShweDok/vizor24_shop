<?php

use Illuminate\Support\Facades\Route;

/** Страницы базового сайта, посадочной страницы */
/** ----------------------- */
Route::name('landing.')->group(function () {
    Route::get('/', [\App\Http\Controllers\Landing\MainController::class, 'mainPage'])->name('main');
    Route::get(
        '/application_register_provider',
        [
            \App\Http\Controllers\Landing\ApplicationRegisterProviderController::class,
            'applicationRegisterProviderPage'
        ]
    )->name('application_register_provider');
    Route::post(
        '/application_register_provider',
        \App\Http\Controllers\Landing\Forms\ApplicationRegisterProviderFormController::class
    )->name('application_register_provider');
});

/** Страницы авторизации -- */
/** ----------------------- */
Route::name('auth.')->prefix('/auth')->group(function () {
    Route::get('/login', [\App\Http\Controllers\Auth\LoginController::class, 'loginPage'])->name('login');
    Route::post('/login', [\App\Http\Controllers\Auth\LoginController::class, 'loginAction'])->name('login');

    Route::post('/logout', [\App\Http\Controllers\Auth\LogoutController::class, 'logoutAction'])->name('logout');

    Route::get('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'registerPage'])->name('register');
    Route::post('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'registerAction'])->name('register');

    Route::get('/forgot_password', [\App\Http\Controllers\Auth\ForgotPasswordController::class, 'forgotPasswordPage'])->name('forgot_password');
    Route::post('/forgot_password', [\App\Http\Controllers\Auth\ForgotPasswordController::class, 'forgotPasswordAction'])->name('forgot_password');
});

/** Страницы приложения -- */
/** ----------------------- */
Route::name('app.')->prefix('/app')->group(function () {
    Route::get('/main', \App\Http\Controllers\App\MainController::class)
        ->name('main');

    Route::get('/registry-accrual', [\App\Http\Controllers\App\RegistryAccrualController::class, 'index'])
        ->name('registry-accrual');

    Route::get('/registry-accrual-special', [\App\Http\Controllers\App\RegistryAccrualSpecialController::class, 'index'])
        ->name('registry-accrual-special');

    Route::get('/registry-payment', [\App\Http\Controllers\App\RegistryPaymentController::class, 'index'])
        ->name('registry-payment');

    Route::get('/select-provider', [\App\Http\Controllers\App\SelectProviderController::class, 'page'])
        ->name('select-provider');

    Route::post('/select-provider/{id}', [\App\Http\Controllers\App\SelectProviderController::class, 'select'])
        ->name('select-provider');

    Route::get('/settings', \App\Http\Controllers\App\MainController::class)
        ->name('settings');

    Route::get('/settings/registry-creator', \App\Http\Controllers\App\MainController::class)
        ->name('settings.registry-creator');

    Route::get('/settings/registry-receiver', \App\Http\Controllers\App\MainController::class)
        ->name('settings.registry-receiver');

    Route::get('/settings/registry-sender', \App\Http\Controllers\App\MainController::class)
        ->name('settings.registry-receiver');

    Route::get('/settings/provider', \App\Http\Controllers\App\MainController::class)
        ->name('settings.provider');

    Route::get('/settings/profile', [\App\Http\Controllers\App\ProfileController::class, 'edit'])
        ->name('settings.profile');

    Route::get('/settings/profile/update', [\App\Http\Controllers\App\ProfileController::class, 'update'])
        ->name('settings.profile.update');

    Route::get('/settings/profile/change-password', [\App\Http\Controllers\App\ProfileController::class, 'change_password'])
        ->name('settings.profile.change-password');

    Route::get('/registry-accrual/create', \App\Http\Controllers\App\MainController::class)
        ->name('registry-accrual.create');

    Route::get('/registry-accrual/{id}/show', \App\Http\Controllers\App\MainController::class)
        ->name('registry-accrual.show');

    Route::get('/registry-accrual-special/create', [\App\Http\Controllers\App\RegistryAccrualSpecialController::class, 'create'])
        ->name('registry-accrual-special.create');

    Route::get('/registry-accrual-special/{id}/show', \App\Http\Controllers\App\MainController::class)
        ->name('registry-accrual-special.show');

    Route::get('/registry-payment/create', [\App\Http\Controllers\App\RegistryPaymentController::class, 'create'])
        ->name('registry-payment.create');

    Route::get('/registry-payment/{id}/show', \App\Http\Controllers\App\MainController::class)
        ->name('registry-payment.show');

    Route::get('/search', \App\Http\Controllers\App\MainController::class)
        ->name('search');

    Route::get('/notifications', \App\Http\Controllers\App\MainController::class)
        ->name('notifications');

    Route::get('/tickets', [\App\Http\Controllers\App\TicketsController::class, 'index'])
        ->name('tickets');

    Route::get('/tickets/create', [\App\Http\Controllers\App\TicketsController::class, 'create'])
        ->name('tickets.create');
    Route::get('/tickets/{id}/edit', [\App\Http\Controllers\App\TicketsController::class, 'edit'])
        ->name('tickets.edit');
    Route::get('/tickets/{id}/show', [\App\Http\Controllers\App\TicketsController::class, 'show'])
        ->name('tickets.show');
    Route::post('/tickets/{id}/update', [\App\Http\Controllers\App\TicketsController::class, 'update'])
        ->name('tickets.update');
    Route::post('/tickets/{id}/create-comment', [\App\Http\Controllers\App\TicketsController::class, 'create_comment'])
        ->name('tickets.create-comment');
    Route::post('/tickets/store', [\App\Http\Controllers\App\TicketsController::class, 'store'])
        ->name('tickets.store');
    Route::post('/tickets/{id}/set-done', [\App\Http\Controllers\App\TicketsController::class, 'set_done'])
        ->name('tickets.set-done');
    Route::post('/tickets/{id}/set-undone', [\App\Http\Controllers\App\TicketsController::class, 'set_undone'])
        ->name('tickets.set-undone');

    Route::get('/select-provider', [\App\Http\Controllers\App\TicketsController::class, 'index'])
        ->name('select-provider');
});


