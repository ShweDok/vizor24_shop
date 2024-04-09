<header id="page-header">
    <div class="content-header">
        <div class="d-flex align-items-center">
            <a class="fw-semibold fs-5 tracking-wider text-dual me-3" href="{{ route('app.main') }}">
                {{ config('app.name') }}
            </a>

            <div class="dropdown d-inline-block me-2">
                <button type="button" class="btn btn-sm btn-alt-secondary" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-fw fa-bell"></i>
                    <span class="text-primary">•</span>
                </button>
                <div class="dropdown-menu dropdown-menu-lg p-0 border-0 fs-sm" aria-labelledby="page-header-notifications-dropdown">
                    <div class="p-2 bg-body-light border-bottom text-center rounded-top">
                        <h5 class="dropdown-header text-uppercase">Уведомления</h5>
                    </div>
                    <ul class="nav-items mb-0">
                        <li>
                            <a class="text-dark d-flex py-2" href="javascript:void(0)">
                                <div class="flex-shrink-0 me-2 ms-3">
                                    <i class="fa fa-fw fa-check-circle text-success"></i>
                                    <i class="fa fa-fw fa-plus-circle text-warning"></i>
                                    <i class="fa fa-fw fa-user-plus text-primary"></i>
                                    <i class="fa fa-fw fa-times-circle text-danger"></i>
                                </div>
                                <div class="flex-grow-1 pe-2">
                                    <div class="fw-semibold">Текст уведомления</div>
                                    <span class="fw-medium text-muted">Время уведомления</span>
                                </div>
                            </a>
                        </li>

                    </ul>
                    <div class="p-2 border-top text-center">
                        <a class="d-inline-block fw-medium" href="{{ route('app.notifications') }}">
                            <i class="fa fa-fw fa-arrow-down me-1 opacity-50"></i> Еще..
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex align-items-center">
            <!-- Open Search Section (visible on smaller screens) -->
            <!-- Layout API, functionality initialized in Template._uiApiLayout() -->
            {{-- <button type="button" class="btn btn-sm btn-alt-secondary d-sm-none" data-toggle="layout" data-action="header_search_on"> --}}
            {{--     <i class="si si-magnifier"></i> --}}
            {{-- </button> --}}
            <!-- END Open Search Section -->

            <!-- Search Form (visible on larger screens) -->
            {{-- <form class="d-none d-sm-inline-block" method="GET" action="{{ route('app.search') }}"> --}}
            {{--     <div class="input-group input-group-sm"> --}}
            {{--         <input type="text" class="form-control form-control-alt" placeholder="Поиск.." id="page-header-search-input2" name="q"> --}}
            {{--         <span class="input-group-text bg-body border-0"> --}}
            {{--       <i class="si si-magnifier"></i> --}}
            {{--     </span> --}}
            {{--     </div> --}}
            {{-- </form> --}}
            <!-- END Search Form -->
            <div class="dropdown d-inline-block ms-2">
                <button type="button" class="btn btn-sm btn-alt-secondary" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle" src="{{ asset('assets/media/providers/provider-default-icon.jpg') }}" alt="Provider Pic" style="width: 21px;">
                    <span class="d-none d-sm-inline-block ms-1">Домофон-сервис</span>
                    <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0 border-0" aria-labelledby="page-header-user-dropdown">
                    <div class="p-3 bg-body-light border-bottom rounded-top">
                        <div class="text-center">
                            <img class="img-avatar img-avatar48 img-avatar-thumb" src="{{ asset('assets/media/providers/provider-default-icon.jpg') }}" alt="">
                        </div>
                        <p class="mb-2 text-center fw-medium">ООО "Домофон-сервис"</p>
                        <p class="mb-0 text-left text-muted fs-sm fw-medium">ID <span class="fw-bold">123</span></p>
                        <p class="mb-0 text-left text-muted fs-sm fw-medium">eID <span class="fw-bold">2201</span></p>
                    </div>
                    <div class="p-2">
                        {{-- <a class="dropdown-item d-flex align-items-center justify-content-between" href="be_pages_generic_inbox.html"> --}}
                        {{--     <span class="fs-sm fw-medium">Входящие сообщения</span> --}}
                        {{--     <span class="badge rounded-pill bg-primary ms-2">3</span> --}}
                        {{-- </a> --}}
                        <form action="{{ route('app.select-provider',['id'=>0]) }}" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item d-flex align-items-center justify-content-between">
                                <span class="fs-sm fw-medium">ИП Иванов И. И.</span>
                                <span class="badge rounded-pill bg-primary ms-2">1</span>
                            </button>
                        </form>
                        <form action="{{ route('app.select-provider',['id'=>0]) }}" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item d-flex align-items-center justify-content-between">
                                <span class="fs-sm fw-medium">ИП Иванова А. А.</span>
                                <span class="badge rounded-pill bg-danger ms-2">3</span>
                            </button>
                        </form>

                        <div role="separator" class="dropdown-divider m-0"></div>
                        <a class="dropdown-item d-flex align-items-center justify-content-between" href="{{ route('app.settings') }}">
                            <span class="fs-sm fw-medium">Все компании</span>
                        </a>
                    </div>
                    {{-- <div role="separator" class="dropdown-divider m-0"></div> --}}
                    {{-- <div class="p-2"> --}}
                    {{--     <a class="dropdown-item d-flex align-items-center justify-content-between" href="{{ route('app.select-provider') }}"> --}}
                    {{--         <span class="fs-sm fw-medium">Сменить компанию</span> --}}
                    {{--     </a> --}}
                    {{-- </div> --}}
                    {{-- <div role="separator" class="dropdown-divider m-0"></div> --}}
                    {{-- <div class="p-2"> --}}
                    {{--     <form action="{{ route('auth.logout') }}" method="POST"> --}}
                    {{--         @csrf --}}
                    {{--         <button type="submit" class="dropdown-item d-flex align-items-center justify-content-between" href="{{ route('auth.logout') }}"> --}}
                    {{--             <span class="fs-sm fw-medium">Выход</span> --}}
                    {{--         </button> --}}
                    {{--     </form> --}}
                    {{-- </div> --}}
                </div>
            </div>
            <!-- User Dropdown -->
            <div class="dropdown d-inline-block ms-2">
                <button type="button" class="btn btn-sm btn-alt-secondary" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle" src="{{ asset('assets/media/avatars/avatar10.jpg') }}" alt="User Pic" style="width: 21px;">
                    <span class="d-none d-sm-inline-block ms-1">Иван</span>
                    <i class="fa fa-fw fa-angle-down d-none d-sm-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-md dropdown-menu-end p-0 border-0" aria-labelledby="page-header-user-dropdown">
                    <div class="p-3 text-center bg-body-light border-bottom rounded-top">
                        {{-- <img class="img-avatar img-avatar48 img-avatar-thumb" src="{{ asset('assets/media/avatars/avatar10.jpg') }}" alt=""> --}}
                        <p class="mt-0 mb-0 fw-medium">Иван Иванов</p>
                        {{-- <p class="mb-0 text-muted fs-sm fw-medium">Компания тыр-пыр</p> --}}
                    </div>
                    <div class="p-2">
                        {{-- <a class="dropdown-item d-flex align-items-center justify-content-between" href="be_pages_generic_inbox.html"> --}}
                        {{--     <span class="fs-sm fw-medium">Входящие сообщения</span> --}}
                        {{--     <span class="badge rounded-pill bg-primary ms-2">3</span> --}}
                        {{-- </a> --}}
                        <a class="dropdown-item d-flex align-items-center justify-content-between" href="{{ route('app.settings.profile') }}">
                            <span class="fs-sm fw-medium">Профиль</span>
                            {{-- <span class="badge rounded-pill bg-primary ms-2">1</span> --}}
                        </a>
                        <a class="dropdown-item d-flex align-items-center justify-content-between" href="{{ route('app.settings') }}">
                            <span class="fs-sm fw-medium">Настройки</span>
                        </a>
                    </div>
                    {{-- <div role="separator" class="dropdown-divider m-0"></div> --}}
                    {{-- <div class="p-2"> --}}
                    {{--     <a class="dropdown-item d-flex align-items-center justify-content-between" href="{{ route('app.select-provider') }}"> --}}
                    {{--         <span class="fs-sm fw-medium">Сменить компанию</span> --}}
                    {{--     </a> --}}
                    {{-- </div> --}}
                    <div role="separator" class="dropdown-divider m-0"></div>
                    <div class="p-2">
                        <form action="{{ route('auth.logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="dropdown-item d-flex align-items-center justify-content-between" href="{{ route('auth.logout') }}">
                                <span class="fs-sm fw-medium">Выход</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- END User Dropdown -->
        </div>
        <!-- END Right Section -->
    </div>
    <!-- END Header Content -->

    <!-- Header Search -->
    {{-- <div id="page-header-search" class="overlay-header bg-body-extra-light"> --}}
    {{--     <div class="content-header"> --}}
    {{--         <form class="w-100" method="GET" action="{{ route('app.search') }}"> --}}
    {{--             <div class="input-group input-group-sm"> --}}
    {{--                 <!-- Layout API, functionality initialized in Template._uiApiLayout() --> --}}
    {{--                 <button type="button" class="btn btn-alt-danger" data-toggle="layout" data-action="header_search_off"> --}}
    {{--                     <i class="fa fa-fw fa-times-circle"></i> --}}
    {{--                 </button> --}}
    {{--                 <input type="text" class="form-control" placeholder="Поиск или нажать ESC.." id="page-header-search-input" name="q"> --}}
    {{--             </div> --}}
    {{--         </form> --}}
    {{--     </div> --}}
    {{-- </div> --}}
    <!-- END Header Search -->

    <!-- Header Loader -->
    <!-- Please check out the Loaders page under Components category to see examples of showing/hiding it -->
    <div id="page-header-loader" class="overlay-header bg-primary-lighter">
        <div class="content-header">
            <div class="w-100 text-center">
                <i class="fa fa-fw fa-circle-notch fa-spin text-primary"></i>
            </div>
        </div>
    </div>
    <!-- END Header Loader -->
</header>
<!-- END Header -->
