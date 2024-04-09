@extends('layouts.app')

@section('content')
    <div class="block block-rounded">
        <div class="block-content py-3">
            <form action="{{ route('app.registry-accrual-special') }}" method="GET">
                <div class="row">
                    {{-- <div class="col col-lg-3"> --}}
                    <div class="col-12 mb-2 mb-lg-0 col-lg-3">
                        <a href="{{ route('app.registry-accrual-special.create') }}" style="width: 100%" class="btn btn-alt-info btn-sm"><i class="fa fa-file-upload"></i>&nbsp; Загрузить реестр</a>
                    </div>
                    {{-- </div> --}}

                    <div class="col">
                        <input class="form-control form-control-sm" value="{{ request('filter_search','') }}" name="filter_search" id="filter_search" placeholder="&#x1F50D; Поиск..">
                    </div>

                    <div class="col">
                        <select class="form-select form-select-sm" name="filter_status" id="filter_status" onchange="this.form.submit()">
                            <option {{ request('filter_status',"all")=="all" ? 'selected' : '' }} value="all">Статус: Все</option>
                            <option {{ request('filter_status',"all")=="wait" ? 'selected' : '' }} value="wait">Статус: Ожидает</option>
                            <option {{ request('filter_status',"all")=="process" ? 'selected' : '' }} value="process">Статус: В процессе</option>
                            <option {{ request('filter_status',"all")=="success" ? 'selected' : '' }} value="success">Статус: Выполнено</option>
                            <option {{ request('filter_status',"all")=="warning" ? 'selected' : '' }} value="warning">Статус: С ошибками</option>
                            <option {{ request('filter_status',"all")=="error" ? 'selected' : '' }} value="error">Статус: Не выполнено</option>
                        </select>
                    </div>
                </div>
            </form>

        </div>
    </div>

    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Загружаемые реестры начислений</h3>
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
                        <th>Название</th>
                        <th nowrap="nowrap" style="width: 1%;">Файл</th>
                        <th nowrap="nowrap" style="width: 1%;">Статус</th>
                        <th class="d-none d-sm-table-cell" style="width: 20%;">Создан</th>
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
                            <td nowrap="nowrap">
                                Filename.ext (100.10MB)
                            </td>
                            <td nowrap="nowrap">
                                <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-secondary-subtle text-secondary">Ожидает</span>
                                {{-- <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-primary-subtle text-primary">В процессе</span> --}}
                                {{-- <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">Выполнено успешно</span> --}}
                                {{-- <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-warning-light text-warning">Выполнено с ошибками</span> --}}
                                {{-- <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-danger-light text-danger">Сбой обработки</span> --}}
                            </td>
                            <td class="d-none d-sm-table-cell">
                                <em class="fs-sm text-muted">{{ date('d.m.Y H:i', strtotime('01.03.2024')) }}</em>
                            </td>
                        </tr>
                        </tbody>
                        <tbody class="fs-sm">
                        <tr>
                            <td class="text-center"></td>
                            <td class="fw-semibold fs-sm">Обработчик:</td>
                            <td colspan="3">
                                Обработчик реестров энергосбыт
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center"></td>
                            <td class="fw-semibold fs-sm">Обработано записей:</td>
                            <td colspan="4">
                                <div class="row m-0 p-0">
                                    <div class="col-xl-2 col-lg-3 col-md-4" style="max-width: none;">
                                        <span class="fw-normal">{{$i*100}} из 3274</span>
                                    </div>
                                    <div class="col-xl-10 col-lg-9 col-md-8">
                                        <div class="progress" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">
                                            <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: {{ round(($i*100)/3274*100) }}%;">
                                                <span class="fs-sm fw-semibold">{{ round(($i*100)/3274*100) }}%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </td>
                        </tr>
                        <tr>
                            <td class="text-center"></td>
                            <td class="fw-semibold fs-sm">Создано реестров начислений:</td>
                            <td colspan="3">
                                3 ( <a href="{{ route('app.registry-accrual.show', ['id' => 0]) }}">32141</a>, <a href="{{ route('app.registry-accrual.show', ['id' => 0]) }}">12315</a>, <a href="{{ route('app.registry-accrual.show', ['id' => 0]) }}">1245123</a> )
                            </td>
                        </tr>
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