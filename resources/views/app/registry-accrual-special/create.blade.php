@extends('layouts.app')

@section('content')
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Загрузить реестр начислений</h3>
        </div>
        <div class="block-content block-content-full">
            <div class="row mr-5">
                <div class="col-lg-4 fs-sm text-muted">
                    <p>
                        Выберите файл начислений, оформленный в соответствии с договором. Фойл должен быть объемом не более 300 МБ
                    </p>
                    <p>
                        Укажите услугу, для которой предназначается данный реестр.
                    </p>
                    <p>
                        После того, как реестр будет загружен, он будет поставлен в очередь на обработку.
                    </p>
                    <p>
                        Если выбрать "Не ставить в очередь", то реестр не будет сразу обработан, поставить в очередь можно будет вручную после загрузки реестра
                    </p>
                </div>
                <div class="col-lg-8 space-y-5 px-4">

                    <form class="space-y-4" action="{{ route('app.tickets.store') }}" method="POST" onsubmit="return false;">
                        @csrf
                        <div class="row mt-0">

                            <label class="col-sm-4 col-form-label" for="service">Услуга</label>
                            <select class="form-select" name="service" id="service">
                                <option value="app">Услуги ЖКХ</option>
                                <option value="payment">Отопление</option>
                                <option value="accrual">Водоснабжение</option>
                                <option value="other">Домофон</option>
                            </select>

                        </div>
                        <div class="row">
                            <label class="col-sm-4 col-form-label" for="file">Файл реестра</label>
                            <input class="form-control" type="file" id="file">
                        </div>
                        <div class="row">
                            <label class="col-sm-4 col-form-label" for="process">Очередь на обработку</label>
                            <select class="form-select" name="process" id="process">
                                <option selected value="1">Поставить в очередь</option>
                                <option value="0">Не ставить в очередь</option>
                            </select>
                        </div>

                        <div class="row">
                            <div class="ms-auto">
                                <button type="submit" class="btn btn-alt-info"><i class="fa fa-file-upload"></i>&nbsp; Загрузить реестр</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    {{-- asdf --}}
@endpush