@extends('layouts.app')

@section('content')
    <div class="block block-rounded">
        <div class="block-content py-3">
            <form action="{{ route('app.tickets') }}" method="GET">
                <div class="row">
                    {{-- <div class="col col-lg-3"> --}}
                    <div class="col-12 mb-2 mb-lg-0 col-lg-3">
                        <a href="{{ route('app.tickets.create') }}" style="width: 100%" class="btn btn-alt-warning btn-sm"><i class="fa fa-plus-circle"></i> Создать обращение</a>
                    </div>
                    {{-- </div> --}}

                    <div class="col">
                        <input class="form-control form-control-sm" value="{{ request('filter_search','') }}" name="filter_search" id="filter_search" placeholder="&#x1F50D; Поиск..">
                    </div>

                    <div class="col">
                        <select class="form-select form-select-sm" name="filter_done" id="filter_done" onchange="this.form.submit()">
                            <option {{ request('filter_done',"0")=="0" ? 'selected' : '' }} value="0">Статус: Актуально</option>
                            <option {{ request('filter_done',"0")=="1" ? 'selected' : '' }} value="1">Статус: Выполнено</option>
                            <option {{ request('filter_done',"0")=="-1" ? 'selected' : '' }} value="-1">Статус: Все</option>
                        </select>
                    </div>
                </div>
            </form>

        </div>
    </div>

    <div class="block block-rounded">
        <div class="block-header block-header-default">

            <h3 class="block-title">Обращения</h3>

        </div>
        <div class="block-content tab-content overflow-hidden">

            <div class="table-responsive">
                <table class="table table-sm table-vcenter">
                    <thead>
                    <tr>
                        <th class="text-center" style="width: 50px;">#</th>
                        <th>Тема</th>
                        <th class="d-none d-md-table-cell">Сообщение</th>
                        <th class="d-none d-sm-table-cell text-center" style="width: 1%;">Обновлено</th>
                        <th class="text-center" style="width: 1%;">&#128488;</th>
                        <th class=" text-center" style="width: 1%;">Статус</th>
                        <th class="text-center" style="width: 1%;">Действие</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach(range(1,20) as $i)
                        <tr>
                            <th class="text-center" scope="row">{{ $i }}</th>
                            <td class="fw-semibold fs-sm">
                                <a href="{{ route('app.tickets.show', ['id'=>0]) }}">Работа приложения</a>
                            </td>
                            <td class="d-none d-md-table-cell fw-normal fs-sm">
                                <a href="{{ route('app.tickets.show', ['id'=>0]) }}">{{ \Str::limit('Описание проблемы, ключевые вопросы по проблеме и прочая информация', 40, '...') }}</a>
                            </td>
                            <td nowrap class="d-none d-sm-table-cell fs-xs">
                                {{ date('d.m.Y H:i') }}
                            </td>
                            <td class="fw-normal fs-sm text-center">
                                @if($i % 2)
                                    <span class="badge rounded-pill bg-secondary-subtle text-black ms-2">3</span>
                                @else
                                    <span class="badge rounded-pill bg-primary ms-2">5</span>
                                @endif
                            </td>
                            <td class="">
                                @if($i % 2)
                                    <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">Выполнено</span>
                                @else
                                    <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Актуально</span>
                                @endif
                            </td>
                            <td class="text-center">
                                <div class="btn-group">
                                    <a href="{{ route('app.tickets.edit',['id'=>0]) }}" type="button" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Редактировать">
                                        <i class="fa fa-fw fa-pencil-alt"></i>
                                    </a>
                                    @if($i % 2)
                                        <form action="{{ route('app.tickets.set-undone',['id'=>0]) }}" method="POST">
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Возобновить">
                                                <i class="fa fa-fw fa-undo"></i>
                                            </button>
                                        </form>
                                    @else
                                        <form action="{{ route('app.tickets.set-done',['id'=>0]) }}" method="POST" onsubmit="if (!confirm('Отметить обращение закрытым')) return false;">
                                            @csrf
                                            <button type="submit" class="btn btn-sm btn-alt-secondary" data-bs-toggle="tooltip" title="Выполнено">
                                                <i class="fa fa-fw fa-check"></i>
                                            </button>
                                        </form>
                                    @endif
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                @include('parts.pagination',['instances'=>[]])
            </div>
        </div>
    </div>
    <!-- END Table Sections -->
@endsection

@push('js')

@endpush