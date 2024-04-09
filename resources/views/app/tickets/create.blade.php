@extends('layouts.app')

@section('content')
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Создать обращение</h3>
        </div>
        <div class="block-content block-content-full">
            <div class="row mr-5">
                <div class="col-lg-4">
                    <p class="fs-sm text-muted">
                        В обращении подробно опишите свой запрос в поддержку.
                    </p>
                </div>
                <div class="col-lg-8 space-y-5 px-4">

                    <form class="space-y-4" action="{{ route('app.tickets.store') }}" method="POST" onsubmit="return false;">
                        @csrf
                        <div class="row mt-0">

                            <label class="col-sm-4 col-form-label" for="subject">Тема вопроса</label>
                            <select class="form-select" name="subject" id="subject">
                                <option value="app">Работа приложения</option>
                                <option value="payment">Реестры оплат</option>
                                <option value="accrual">Реестры начислений</option>
                                <option value="other">Другое</option>
                            </select>

                        </div>
                        <div class="row">
                            <label class="col-sm-4 col-form-label" for="message">Текст обращения</label>
                            <textarea class="form-control" id="message" name="message" rows="10" placeholder="Ваше обращение.."></textarea>
                        </div>

                        <div class="row">
                            <div class="ms-auto">
                                <button type="submit" class="btn btn-alt-primary">Отправить обращение</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection