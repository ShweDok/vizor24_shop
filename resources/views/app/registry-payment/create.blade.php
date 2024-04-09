@extends('layouts.app')

@section('content')
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Заказать реестр оплат</h3>
        </div>
        <div class="block-content block-content-full">
            <div class="row mr-5">
                <div class="col-lg-4 fs-sm text-muted">
                    <p>
                        Выберите тип периода реестра оплат, по умолчанию "День". Рекомендуем заказывать именно дневные реестры.
                    </p>
                    <p>
                        Укажите услугу, для которой предназначается данный реестр. Или оставьте пустым (будет учитывать все услуги)
                    </p>
                    <p>
                        Укажите тип оплаты, для которого будет создан реестр. Или оставьте пустым (будет учитывать все типы оплат)
                    </p>
                </div>
                <div class="col-lg-8 space-y-5 px-4">

                    <form class="space-y-4" action="{{ route('app.tickets.store') }}" method="POST" onsubmit="return false;">
                        @csrf
                        <div class="row mt-0">

                            <label class="col-sm-4 col-form-label" for="period_type">Тип периода</label>
                            <select class="form-select" name="period_type" id="period_type">
                                <option selected value="day">День</option>
                                <option value="week">Неделя</option>
                                <option value="month">Месяц</option>
                                <option value="custom">Настраиваемый</option>
                            </select>

                        </div>

                        <div class="row">
                            <label class="form-label" for="date_day__">Дата (день)</label>
                            <input type="text" class="js-flatpickr form-control" id="date_day" name="date_day" placeholder="Выберите дату" data-date-format="d.m.Y">
                        </div>

                        <div class="row">
                            <label class="form-label" for="date_week__">Дата недели (автоматически будет выбран понедельник недели)</label>
                            <input type="text" class="js-flatpickr form-control" id="date_week" name="date_week" placeholder="Выберите дату" data-date-format="d.m.Y">
                        </div>

                        <div class="row">
                            <label class="form-label" for="date_month__">Дата месяца (автоматически будет выбрано первое число месяца)</label>
                            <input type="text" class="js-flatpickr form-control" id="date_month" name="date_month" placeholder="Выберите дату" data-date-format="d.m.Y">
                        </div>

                        {{-- <div class="row"> --}}
                        {{--     <input type="text" class="js-flatpickr form-control" id="example-flatpickr-range" name="example-flatpickr-range" placeholder="Select Date Range" data-mode="range" data-min-date="today"> --}}
                        {{-- </div> --}}
                        <div class="row">
                            <label class="form-label">Даты начала и конца периода</label>
                            <div class="input-daterange input-group px-0" data-date-format="dd.mm.yyyy" data-week-start="1" data-autoclose="true" data-today-highlight="true">
                                <input type="text" class="form-control" id="date_custom_range_from" name="date_custom_range_from" placeholder="Начало" data-week-start="1" data-autoclose="true" data-today-highlight="true">
                                <span class="input-group-text fw-semibold"><i class="fa fa-fw fa-arrow-right"></i></span>
                                <input type="text" class="form-control" id="date_custom_range_to" name="date_custom_range_to" placeholder="Конец" data-week-start="1" data-autoclose="true" data-today-highlight="true">
                            </div>
                            {{-- <input type="text" class="form-control" id="date_custom_range_from" name="date_custom_range_from" placeholder="From" data-week-start="1" data-autoclose="true" data-today-highlight="true"> --}}
                            {{-- <span class="input-group-text fw-semibold"><i class="fa fa-fw fa-arrow-right"></i></span> --}}
                            {{-- <input type="text" class="form-control" id=date_custom_range_to" name="date_custom_range_to" placeholder="To" data-week-start="1" data-autoclose="true" data-today-highlight="true"> --}}
                        </div>

                        <div class="row">

                            <label class="col-sm-4 col-form-label" for="service">Услуга</label>
                            <select class="form-select" name="service" id="service">
                                <option selected value="all">-- ВСЕ --</option>
                                <option value="app">Услуги ЖКХ</option>
                                <option value="payment">Отопление</option>
                                <option value="accrual">Водоснабжение</option>
                                <option value="other">Домофон</option>
                            </select>

                        </div>

                        <div class="row">

                            <label class="col-sm-4 col-form-label" for="payment_type">Тип оплаты</label>
                            <select class="form-select" name="payment_type" id="payment_type">
                                <option value="cash">Наличные</option>
                                <option value="cashless">Безнал</option>
                                <option value="online">Онлайн</option>
                                <option value="cash,cashless">Наличные + Безнал</option>
                                <option value="cash,online">Наличные + Онлайн</option>
                                <option value="cashless,online">Безнал + Онлайн</option>
                                <option selected value="cash,cashless,online">Наличные + Безнал + Онлайн</option>
                            </select>

                        </div>

                        <div class="row">
                            <div class="ms-auto">
                                <button type="submit" class="btn btn-alt-success"><i class="fa fa-coins"></i>&nbsp; Заказать реестр</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <!-- Page JS Plugins -->
    <script src="{{ asset('assets/js/plugins/flatpickr/flatpickr.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/select2/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/jquery.maskedinput/jquery.maskedinput.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/ion-rangeslider/js/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/dropzone/min/dropzone.min.js') }}"></script>

    <!-- Page JS Helpers (Flatpickr + BS Datepicker + BS Maxlength + Select2 + Masked Inputs + Ion Range Slider plugins) -->
    <script>One.helpersOnLoad(['js-flatpickr', 'jq-datepicker', 'jq-maxlength', 'jq-select2', 'jq-masked-inputs', 'jq-rangeslider']);</script>
@endpush

@push('css')
    <!-- Stylesheets -->
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('assets/js/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/js/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/js/plugins/ion-rangeslider/css/ion.rangeSlider.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/js/plugins/dropzone/min/dropzone.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/js/plugins/flatpickr/flatpickr.min.css') }}">
@endpush