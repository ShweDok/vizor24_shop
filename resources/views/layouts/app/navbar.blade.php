<!-- Navigation -->
<div class="bg-primary-darker">
    <div class="content py-3">
        <!-- Toggle Main Navigation -->
        <div class="d-lg-none">
            <!-- Class Toggle, functionality initialized in Helpers.oneToggleClass() -->
            <button type="button" class="btn w-100 btn-alt-secondary d-flex justify-content-between align-items-center" data-toggle="class-toggle" data-target="#main-navigation" data-class="d-none">
                Меню
                <i class="fa fa-bars"></i>
            </button>
        </div>
        <!-- Main Navigation -->
        <div id="main-navigation" class="d-none d-lg-block mt-2 mt-lg-0">
            <ul class="nav-main nav-main-dark nav-main-horizontal nav-main-hover">
                <li class="nav-main-item">
                    <a class="nav-main-link {{ Route::is('app.main') ? 'active' : '' }} " href="{{ route('app.main') }}">
                        <i class="nav-main-link-icon si si-speedometer"></i>
                        <span class="nav-main-link-name">Главная</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link {{ Route::is('app.registry-accrual-special') ? 'active' : '' }}" href="{{ route('app.registry-accrual-special') }}">
                        <i class="nav-main-link-icon si si-list"></i>
                        <span class="nav-main-link-name">Загружаемые реестры</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link {{ Route::is('app.registry-accrual') ? 'active' : '' }}" href="{{ route('app.registry-accrual') }}">
                        <i class="nav-main-link-icon si si-cloud-upload "></i>
                        <span class="nav-main-link-name">Начисления</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link {{ Route::is(['app.registry-payment']) ? 'active' : '' }}" href="{{ route('app.registry-payment') }}">
                        <i class="nav-main-link-icon si si-cloud-download "></i>
                        <span class="nav-main-link-name">Оплаты</span>
                    </a>
                </li>
                <li class="nav-main-item">
                    <a class="nav-main-link {{ Route::is(['app.tickets']) ? 'active' : '' }}" href="{{ route('app.tickets') }}">
                        <i class="nav-main-link-icon si si-fire "></i>
                        <span class="nav-main-link-name">Обращения в ИПК</span>
                    </a>
                </li>
                {{-- <li class="nav-main-heading"></li> --}}
                {{-- <li class="nav-main-item"> --}}
                {{--     <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#"> --}}
                {{--         <i class="nav-main-link-icon si si-puzzle"></i> --}}
                {{--         <span class="nav-main-link-name">Dropdown</span> --}}
                {{--     </a> --}}
                {{--     <ul class="nav-main-submenu"> --}}
                {{--         <li class="nav-main-item"> --}}
                {{--             <a class="nav-main-link" href="javascript:void(0)"> --}}
                {{--                 <span class="nav-main-link-name">Link #1</span> --}}
                {{--             </a> --}}
                {{--         </li> --}}
                {{--         <li class="nav-main-item"> --}}
                {{--             <a class="nav-main-link" href="javascript:void(0)"> --}}
                {{--                 <span class="nav-main-link-name">Link #2</span> --}}
                {{--             </a> --}}
                {{--         </li> --}}
                {{--     </ul> --}}
                {{-- </li> --}}
                {{-- <li class="nav-main-heading">Extra</li> --}}
                {{-- <li class="nav-main-item ms-lg-auto"> --}}
                {{--     <a class="nav-main-link nav-main-link-submenu" data-toggle="submenu" aria-haspopup="true" aria-expanded="false" href="#"> --}}
                {{--         <i class="nav-main-link-icon fa fa-brush"></i> --}}
                {{--         <span class="nav-main-link-name d-lg-none">Themes</span> --}}
                {{--     </a> --}}
                {{-- </li> --}}
            </ul>
        </div>
        <!-- END Main Navigation -->
    </div>
</div>
<!-- END Navigation -->