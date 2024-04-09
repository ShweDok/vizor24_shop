<div class="block block-rounded block-mode-hidden">
    <div class="block-header block-header-default">
        <h3 class="block-title">
            Загружаемые реестры <small>Новые</small> <small> | <a href="{{ route('app.registry-accrual-special',['filter_done'=>0]) }}">Показать все</a></small>
        </h3>
        <div class="block-options">
            <button type="button" class="btn-block-option" data-toggle="block-option" data-action="content_toggle"></button>
        </div>
    </div>
    <div class="block-content fs-sm">
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
                @foreach(range(1,3) as $i)
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
        </div>
    </div>
</div>