<div class="block block-rounded">
    <div class="block-header block-header-default">
        <h3 class="block-title">
            Обращения <small>Последние актуальные</small> <small> | <a href="{{ route('app.tickets',['filter_done'=>0]) }}">Показать все</a></small>
        </h3>
        <div class="block-options">
            {{-- <button type="button" class="btn-block-option" data-toggle="block-option" data-action="fullscreen_toggle"></button> --}}
            {{-- <button type="button" class="btn-block-option" data-toggle="block-option" data-action="pinned_toggle"> --}}
            {{--     <i class="si si-pin"></i> --}}
            {{-- </button> --}}
            {{-- <button type="button" class="btn-block-option" data-toggle="block-option" data-action="state_toggle" data-action-mode="demo"> --}}
            {{--     <i class="si si-refresh"></i> --}}
            {{-- </button> --}}
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
            {{-- <button type="button" class="btn-block-option" data-toggle="block-option" data-action="close"> --}}
            {{--     <i class="si si-close"></i> --}}
            {{-- </button> --}}
        </div>
    </div>
    <div class="block-content fs-sm">
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
                @foreach(range(1,5) as $i)
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