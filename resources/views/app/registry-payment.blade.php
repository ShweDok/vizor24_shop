@extends('layouts.app')

@section('content')
    <div class="block block-rounded">
        <div class="block-content py-3">
            <form action="{{ route('app.registry-payment') }}" method="GET">
                <div class="row">
                    {{-- <div class="col col-lg-3"> --}}
                    <div class="col-12 mb-2 mb-lg-0 col-lg-3">
                        <a href="{{ route('app.registry-payment.create') }}" style="width: 100%" class="btn btn-alt-success btn-sm"><i class="fa fa-coins"></i>&nbsp; Заказать реестр</a>
                    </div>
                    {{-- </div> --}}

                    <div class="col">
                        <input class="form-control form-control-sm" value="{{ request('filter_search','') }}" name="filter_search" id="filter_search" placeholder="&#x1F50D; Поиск..">
                    </div>

                    <div class="col">
                        <select class="form-select form-select-sm" name="filter_period" id="filter_period" onchange="this.form.submit()">
                            <option {{ request('filter_period',"day")=="all" ? 'selected' : '' }} value="all">Период: Все</option>
                            <option {{ request('filter_period',"day")=="day" ? 'selected' : '' }} value="day">Период: День</option>
                            <option {{ request('filter_period',"day")=="week" ? 'selected' : '' }} value="week">Период: Неделя</option>
                            <option {{ request('filter_period',"day")=="month" ? 'selected' : '' }} value="month">Период: Месяц</option>
                            <option {{ request('filter_period',"day")=="custom" ? 'selected' : '' }} value="custom">Период: Прочие</option>
                        </select>
                    </div>
                </div>
            </form>

        </div>
    </div>

    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Реестры оплат</h3>
            <div class="block-options">
                <div class="block-options-item">

                    <ul class="nav nav-pills ">
                        <li class="nav-item">
                            <a class="nav-link fs-sm" href="{{ route('app.settings') }}">
                                <i class="fa fa-gear"></i>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
        <div class="block-content">

            <div class="table-responsive">
                <table class="js-table-sections table table-hover table-vcenter">
                    <thead>
                    <tr>
                        <th style="width: 30px;"></th>
                        <th style="width: 25%;">Название</th>
                        <th class="d-none d-sm-table-cell">Доп. инфо</th>
                        <th nowrap="nowrap" class="text-center" style="width: 1%;">Статус</th>
                        <th nowrap="nowrap" class="text-center" style="width: 1%;">Период</th>
                        <th class="d-none d-sm-table-cell text-center" style="width: 1%;">Когда</th>
                    </tr>
                    </thead>
                    @foreach(range(1,20) as $i)
                        <tbody class="js-table-sections-header">
                        <tr>
                            <td class="text-center">
                                <i class="fa fa-angle-right text-muted"></i>
                            </td>
                            <td class="fw-semibold fs-sm">
                                <div class="py-1">
                                    <a href="{{ route('app.registry-accrual-special.show', ['id'=>0]) }}">Март 2024</a>
                                </div>
                            </td>
                            <td class="d-none d-sm-table-cell fw-semibold fs-sm">

                            </td>
                            <td nowrap="nowrap" class="text-center">
                                @if ($i > 4)
                                    <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-subtle text-success">Готов</span>
                                @else
                                    <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-secondary-subtle text-secondary">Формируется</span>
                                @endif
                            </td>
                            <td nowrap="nowrap" class="text-center">
                                @if ($i % 4 == 0)
                                    <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-subtle text-success">День</span>
                                @elseif($i % 3 == 0)
                                    <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-primary-subtle text-primary">Неделя</span>
                                @elseif($i % 2 == 0)
                                    <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Месяц</span>
                                @else
                                    <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-amethyst-light text-amethyst-dark">Прочие</span>
                                @endif
                            </td>
                            <td nowrap class="d-none d-sm-table-cell ">
                                <div class="fs-xs text-muted">
                                    @if ($i % 4 == 0)
                                        <em>{{ date('d.m.Y l', strtotime('01.03.2024')) }}</em>
                                    @elseif($i % 3 == 0)
                                        <em>{{ date('d.m.Y', strtotime('01.03.2024')) }}</em>
                                        <br>
                                        <em>{{ date('d.m.Y', strtotime('07.03.2024')) }}</em>
                                    @elseif($i % 2 == 0)
                                        <em>{{ date('m.Y F', strtotime('01.03.2024')) }}</em>
                                    @else
                                        <em>{{ date('d.m.Y H:i', strtotime('01.03.2024')) }}</em>
                                        <br>
                                        <em>{{ date('d.m.Y H:i', strtotime('01.04.2024')) }}</em>
                                    @endif
                                </div>

                            </td>
                        </tr>
                        </tbody>
                        <tbody class="fs-sm">
                        <tr>
                            <td class="text-center"></td>
                            <td class="fw-semibold fs-sm">Файл:</td>
                            <td colspan="4" class="py-0">
                                <button class="btn btn-alt-primary btn-sm m-0">
                                    <i class="fa fa-file-download"></i>&nbsp;
                                    filename.ext (100.10MB)
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center"></td>
                            <td class="fw-semibold fs-sm">Кол-во записей:</td>
                            <td colspan="4">
                                1234
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center"></td>
                            <td class="fw-semibold fs-sm">Сумма оплат:</td>
                            <td colspan="4">
                                103 278 р.
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center"></td>
                            <td class="fw-semibold fs-sm">Услуга:</td>
                            <td colspan="4">
                                Услуги ЖКХ
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center"></td>
                            <td class="fw-semibold fs-sm">Тип оплаты:</td>
                            <td colspan="4">
                                Нал + Безнал + Онлайн
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center"></td>
                            <td class="fw-semibold fs-sm">Период:</td>
                            <td colspan="4" class="py-0">
                                @if ($i % 4 == 0)
                                    <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-subtle text-success">День</span>
                                @elseif($i % 3 == 0)
                                    <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-primary-subtle text-primary">Неделя</span>
                                @elseif($i % 2 == 0)
                                    <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Месяц</span>
                                @else
                                    <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-secondary-subtle text-secondary">Прочие</span>
                                @endif
                                <span class="fs-xs fw-semibold d-inline-block py-1 text-secondary">
                                <em class="fs-sm text-muted">{{ date('d.m.Y H:i', strtotime('01.03.2024')) }}</em>
                            </span>
                                <span class="fs-xs fw-semibold d-inline-block py-1  text-secondary">
                                <em class="fs-sm text-muted"> ---> </em>
                            </span>
                                <span class="fs-xs fw-semibold d-inline-block py-1 text-secondary">
                                <em class="fs-sm text-muted">{{ date('d.m.Y H:i', strtotime('01.04.2024')) }}</em>
                            </span>
                            </td>
                        </tr>
                        {{-- <tr> --}}
                        {{--     <td class="text-center"></td> --}}
                        {{--     <td class="fw-semibold fs-sm">Начало периода:</td> --}}
                        {{--     <td colspan="3"> --}}
                        {{--         <em class="fs-sm text-muted">{{ date('d.m.Y H:i', strtotime('01.03.2024')) }}</em> --}}
                        {{--     </td> --}}
                        {{-- </tr> --}}
                        {{-- <tr> --}}
                        {{--     <td class="text-center"></td> --}}
                        {{--     <td class="fw-semibold fs-sm">Окончание периода:</td> --}}
                        {{--     <td colspan="3"> --}}
                        {{--         <em class="fs-sm text-muted">{{ date('d.m.Y H:i', strtotime('01.04.2024')) }}</em> --}}
                        {{--     </td> --}}
                        {{-- </tr> --}}
                        {{-- <tr> --}}
                        {{--     <td class="text-center"></td> --}}
                        {{--     <td class="fw-semibold fs-sm">Обработано записей:</td> --}}
                        {{--     <td colspan="4"> --}}
                        {{--         <div class="row m-0 p-0"> --}}
                        {{--             <div class="col-xl-2 col-lg-3 col-md-4" style="max-width: none;"> --}}
                        {{--                 <span class="fw-normal">{{$i*100}} из 3274</span> --}}
                        {{--             </div> --}}
                        {{--             <div class="col-xl-10 col-lg-9 col-md-8"> --}}
                        {{--                 <div class="progress" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"> --}}
                        {{--                     <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: {{ round(($i*100)/3274*100) }}%;"> --}}
                        {{--                         <span class="fs-sm fw-semibold">{{ round(($i*100)/3274*100) }}%</span> --}}
                        {{--                     </div> --}}
                        {{--                 </div> --}}
                        {{--             </div> --}}
                        {{--         </div> --}}

                        {{--     </td> --}}
                        {{-- </tr> --}}
                        </tbody>
                    @endforeach
                </table>
                @include('parts.pagination',['instances'=>[]])
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>One.helpersOnLoad(['one-table-tools-sections']);</script>
@endpush