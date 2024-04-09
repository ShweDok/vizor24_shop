@extends('layouts.app')


@section('content')
    <div class="block block-rounded">
        <div class="block-content py-3">
            {{-- <form action="{{ route('app.tickets') }}" method="GET"> --}}
            <div class="row">
                {{-- <div class="col col-lg-3"> --}}

                <div class="col-12 mb-2 mb-lg-0 col-lg-3">
                    <form action="{{ route('app.tickets.set-done',['id'=>0]) }}" method="POST">
                        @csrf
                        <button style="width: 100%" class="btn btn-alt-success btn-sm"><i class="fa fa-check-circle"></i>&nbsp; Отметить выполненным</button>
                    </form>
                </div>
                <div class="col-12 mb-2 mb-lg-0 col-lg-3">
                    <form action="{{ route('app.tickets.set-undone',['id'=>0]) }}" method="POST">
                        @csrf
                        <button style="width: 100%" class="btn btn-alt-info btn-sm"><i class="fa fa-check-circle"></i>&nbsp; Возобновить</button>
                    </form>
                </div>
                <div class="col-12 mb-2 mb-lg-0 col-lg-3">
                    <a href="{{ route('app.tickets.edit', ['id'=>0]) }}" style="width: 100%" class="btn btn-alt-primary btn-sm"><i class="fa fa-pencil"></i>&nbsp; Редактировать</a>
                </div>

                {{-- </div> --}}

                <div class="col">
                    {{-- <input class="form-control form-control-sm" value="{{ request('filter_search','') }}" name="filter_search" id="filter_search" placeholder="&#x1F50D; Поиск.."> --}}
                </div>

                <div class="col">
                    {{-- <select class="form-select form-select-sm" name="filter_done" id="filter_done" onchange="this.form.submit()"> --}}
                    {{--     <option {{ request('filter_done',"0")=="0" ? 'selected' : '' }} value="0">Статус: Актуально</option> --}}
                    {{--     <option {{ request('filter_done',"0")=="1" ? 'selected' : '' }} value="1">Статус: Выполнено</option> --}}
                    {{--     <option {{ request('filter_done',"0")=="-1" ? 'selected' : '' }} value="-1">Статус: Все</option> --}}
                    {{-- </select> --}}
                </div>
            </div>
            {{-- </form> --}}

        </div>
    </div>

    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">Обращение № 12353</h3>
        </div>
        <div class="block-content">
            <div class="ticket-title">
                <h3>Тема: <span class="fw-normal">Проблемы с реестром</span></h3>
                <h5>Основание: <span class="fw-normal"><a href="javascript:void(0)">Реестр начислений №123456</a></span></h5>
            </div>

            <div class="ticket-content">
                <p>Potenti elit lectus augue eget iaculis vitae etiam, ullamcorper etiam bibendum ad feugiat magna accumsan dolor, nibh molestie cras hac ac ad massa, fusce ante convallis ante urna molestie vulputate bibendum tempus ante justo arcu erat accumsan adipiscing risus, libero condimentum venenatis sit nisl nisi ultricies sed, fames aliquet consectetur consequat nostra molestie neque nullam scelerisque neque commodo turpis quisque etiam egestas vulputate massa, curabitur tellus massa
                    venenatis congue dolor enim integer luctus, nisi suscipit gravida fames quis vulputate nisi viverra luctus id leo dictum lorem, inceptos nibh orci.</p>
            </div>

        </div>
    </div>


    <!-- Timeline -->
    <!--
        Available classes for timeline list:

        'timeline'                                      A normal timeline with icons to the left in all screens
        'timeline timeline-centered timeline-alt'       A centered timeline with odd events to the left and even events to the right (screen width > 1200px)
        'timeline timeline-centered'                    A centered timeline with all events to the left. You can add the class 'timeline-event-alt'
                                                        to 'timeline-event' elements to position them to the right (screen width > 1200px) (useful, if you
                                                        would like to have multiple events to the left or to the right section)
    -->
    <ul class="timeline timeline-alt">

        <li class="timeline-event">
            <div class="timeline-event-icon bg-dark">
                <i class="fa fa-file-edit"></i>
            </div>
            <div class="timeline-event-block block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Обращение создано</h3>
                    <div class="block-options">
                        <div class="timeline-event-time block-options-item fs-sm fw-semibold">
                            1 день назад
                        </div>
                    </div>
                </div>
                <div class="block-content">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <div class="mb-4">
                                {{-- <a class="fw-semibold" href="javascript:void(0)">Евгений Назаров</a><br> --}}
                                <p class="">
                                    Обращение создано Пользователем %UserName%
                                </p>
                                <p>
                                    Основание: <a href="javascript:void(0)">Реестр начислений №123456</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>

        <li class="timeline-event">
            <div class="timeline-event-icon bg-info">
                <i class="fa fa-comment"></i>
            </div>
            <div class="timeline-event-block block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Комментарий</h3>
                    <div class="block-options">
                        <div class="timeline-event-time block-options-item fs-sm fw-semibold">
                            10 минут назад
                        </div>
                    </div>
                </div>
                <div class="block-content">
                    <div class="d-flex">
                        {{-- <a class="flex-shrink-0 img-link me-2" href="javascript:void(0)"> --}}
                        {{--     <img class="img-avatar img-avatar48 img-avatar-thumb" src="{{ asset('assets/media/avatars/avatar1.jpg') }}" alt=""> --}}
                        {{-- </a> --}}
                        <div class="flex-grow-1">
                            <div class="mb-4">
                                <a class="fw-semibold" href="javascript:void(0)">Евгений Назаров</a><br>
                                <p class="mt-2">
                                    Vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam tincidunt sollicitudin sem nec ultrices. Sed at mi velit.
                                </p>
                            </div>
                            <p>
                                <a class="text-dark me-2" href="javascript: $([document.documentElement, document.body]).animate({scrollTop: $('#comment').offset().top }, 2000); $('#comment').focus()">
                                    <i class="fa fa-reply fa-fw text-muted"></i> Ответить
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </li>

        <li class="timeline-event">
            <div class="timeline-event-icon bg-danger">
                <i class="fa fa-diagram-next"></i>
            </div>
            <div class="timeline-event-block block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Статус обращения изменен</h3>
                    <div class="block-options">
                        <div class="timeline-event-time block-options-item fs-sm fw-semibold">
                            5 минут назад
                        </div>
                    </div>
                </div>
                <div class="block-content">
                    <div class="d-flex">
                        <div class="flex-grow-1">
                            <div class="mb-4">
                                {{-- <a class="fw-semibold" href="javascript:void(0)">Евгений Назаров</a><br> --}}
                                <p>Пользователь: %UserName% Изменил статус</p>
                                <p>
                                    <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-info-light text-info">Актуально</span>
                                    -->
                                    <span class="fs-xs fw-semibold d-inline-block py-1 px-3 rounded-pill bg-success-light text-success">Выполнено</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </li>

        <li class="timeline-event">
            <div class="timeline-event-icon bg-info">
                <i class="fa fa-comment"></i>
            </div>
            <div class="timeline-event-block block">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Написать комментарий</h3>
                    <div class="block-options">
                        <div class="timeline-event-time block-options-item fs-sm fw-semibold">

                        </div>
                    </div>
                </div>
                <div class="block-content">
                    <div class="row mb-4">
                        <form action="{{ route('app.tickets.create-comment',['id'=>0, 'reply_to'=>null]) }}" method="POST">
                            @csrf
                            <div class="alert alert-info">
                                <h6>Ответ на комментарий: <a href="javascript:void(0)" class="fw-normal" style="text-transform: none">( Отменить )</a></h6>
                                <p>;asdjhfasodhfpo asdhfpou sadhfopu hsadpuif hsaduip</p>
                            </div>
                            <div class="col">
                                <textarea name="comment" id="comment" rows="4" class="form-control" placeholder="Введите комментарий сюда"></textarea>
                            </div>
                            <div class="col mt-3">
                                <button type="submit" class="btn btn-alt-primary">Отправить</button>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </li>

    </ul>
    <!-- END Timeline -->
@endsection

@push('js')
    <!-- Page JS Plugins -->
    <script src="assets/js/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Page JS Helpers (Magnific Popup Plugin) -->
    <script>One.helpersOnLoad(['jq-magnific-popup']);</script>
@endpush