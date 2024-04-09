<div class="bg-body-light">
    <div class="content content-full">
        <div class="p-4 w-100 flex-grow-1 d-flex align-items-center">
            <div class="w-100">
                <!-- Header -->
                <div class="text-center mb-5">
                    {{-- <p class="mb-3"> --}}
                    {{--     <i class="fa fa-2x fa-circle-notch text-primary-light"></i> --}}
                    {{-- </p> --}}
                    <h1 class="fw-bold mb-2">
                        Заявка на регистрацию компании
                    </h1>
                    <p class="fw-medium text-muted">
                        Если вы желаете подать заявку на обмен реестрами через наш обмен реестрами, заполняйте эту форму и мы вам обязательно ответим
                    </p>
                </div>
                <!-- END Header -->

                <!-- Sign Up Form -->
                <!-- jQuery Validation (.js-validation-signup class is initialized in js/pages/op_auth_signup.min.js which was auto compiled from _js/pages/op_auth_signup.js) -->
                <!-- For more info and examples you can check out https://github.com/jzaefferer/jquery-validation -->
                <div class="row g-0 justify-content-center">
                    <div class="col-sm-8 col-xl-4">
                        <form id="applicationRegisterProviderForm" class="js-validation-signup" action="{{ route('landing.application_register_provider') }}" method="POST">
                            @csrf
                            <div class="mb-4">
                                <input required autocomplete="off" type="text" class="form-control form-control-lg form-control-alt py-3" id="name" name="name" placeholder="Ваше имя">
                            </div>
                            <div class="mb-4">
                                <input required autocomplete="off" type="text" class="form-control form-control-lg form-control-alt py-3" id="company" name="name" placeholder="Название компании">
                            </div>
                            <div class="mb-4">
                                <input required autocomplete="off" type="email" class="form-control form-control-lg form-control-alt py-3" id="email" name="email" placeholder="Email">
                            </div>
                            <div class="mb-4">
                                <input required autocomplete="off" type="tel" class="form-control form-control-lg form-control-alt py-3" id="email" name="email" placeholder="Телефон">
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
                                    Отправить заявку
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- END Sign Up Form -->
            </div>
        </div>
    </div>
</div>

@push('css')
    {{-- reCaptcha --}}
    <!-- Include script -->
    <script type="text/javascript">
        function callbackThen(response) {

            // read Promise object
            response.json().then(function (data) {
                console.log(data);
                if (data.success && data.score >= 0.6) {
                    console.log('valid recaptcha');
                } else {
                    document.getElementById('applicationRegisterProviderForm').addEventListener('submit', function (event) {
                        event.preventDefault();
                        alert('recaptcha error');
                    });
                }
            });
        }

        function callbackCatch(error) {
            console.error('Error:', error)
        }
    </script>

    {!!
        htmlScriptTagJsApi([
            'callback_then' => 'callbackThen',
            'callback_catch' => 'callbackCatch',
        ])
    !!}
@endpush