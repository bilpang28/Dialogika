<div id="kt_app_header" class="app-header">
    <div class="app-container container-xxl d-flex align-items-stretch justify-content-between"
        id="kt_app_header_container">
        <div class="d-flex align-items-center d-lg-none ms-n3" title="Show header menu">
            <div class="btn btn-icon btn-light ms-2 btn-active-color-primary w-35px h-35px"
                id="kt_app_header_menu_toggle">
                <i class="fa-solid fa-bars"></i>
            </div>
        </div>
        <div class="d-flex align-items-center flex-grow-1 flex-lg-grow-0 me-lg-15">
            <a href="">
                <img alt="Logo" src="{{ asset('sense/media/svg/brand-logos/apple-itunes.svg') }}"
                    class="h-35px d-none d-sm-inline" />
            </a>
        </div>
        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1" id="kt_app_header_wrapper">
            <div class="app-header-menu app-header-mobile-drawer align-items-stretch" data-kt-drawer="true"
                data-kt-drawer-name="app-header-menu" data-kt-drawer-activate="{default: true, lg: false}"
                data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="start"
                data-kt-drawer-toggle="#kt_app_header_menu_toggle" data-kt-swapper="true"
                data-kt-swapper-mode="{default: 'append', lg: 'prepend'}"
                data-kt-swapper-parent="{default: '#kt_app_body', lg: '#kt_app_header_wrapper'}">
                <div class="menu menu-rounded menu-active-bg menu-state-primary menu-column menu-lg-row menu-title-gray-500 menu-icon-gray-500 menu-arrow-gray-500 menu-bullet-gray-500 my-5 my-lg-0 align-items-stretch fw-semibold px-2 px-lg-0"
                    id="kt_app_header_menu" data-kt-menu="true">

                    <div class="menu-item menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
                        <span class="menu-link">
                            <a href="{{route('management.blog.index')}}" class="menu-title">Blog</a>
                        </span>
                    </div>
                    <div class="menu-item menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
                        <span class="menu-link">
                            <a href="{{route('management.user.index')}}" class="menu-title">Pengguna</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="app-navbar flex-shrink-0">
            <div class="app-navbar-item ms-4">
                <a href="#" class="btn btn-icon btn-color-gray-500 w-35px h-35px w-md-45px h-md-45px"
                    data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent"
                    data-kt-menu-placement="bottom-end">
                    <span class="theme-light-show">
                        <i class="fs-2 fa-solid fa-sun text-warning"></i>
                    </span>
                    <span class="theme-dark-show ">
                        <i class="fs-2 fa-solid fa-moon text-white"></i>
                    </span>
                </a>
                <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-500 menu-icon-gray-500 menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px"
                    data-kt-menu="true" data-kt-element="theme-mode-menu">
                    <div class="menu-item px-3 my-0">
                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
                            <span class="menu-icon" data-kt-element="icon">
                                <i class="fa-solid fa-sun"></i>
                            </span>
                            <span class="menu-title">Light</span>
                        </a>
                    </div>
                    <div class="menu-item px-3 my-0">
                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
                            <span class="menu-icon" data-kt-element="icon">
                                <i class="fa-solid fa-moon"></i>
                            </span>
                            <span class="menu-title">Dark</span>
                        </a>
                    </div>
                    <div class="menu-item px-3 my-0">
                        <a href="#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
                            <span class="menu-icon" data-kt-element="icon">
                                <i class="fa-solid fa-desktop"></i>
                            </span>
                            <span class="menu-title">System</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="app-navbar-item ms-4" id="kt_header_user_menu_toggle">
                @auth
                    <div class="cursor-pointer symbol symbol-circle symbol-35px symbol-md-45px"
                        data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
                        data-kt-menu-placement="bottom-end">
                        <img src="{{ asset('sense') }}/media/avatars/blank.png" alt="user" />
                    </div>
                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-500 menu-state-bg menu-state-color fw-semibold py-4 fs-base w-275px"
                        data-kt-menu="true">
                        <div class="menu-item px-3">
                            <div class="menu-content d-flex align-items-center px-3">
                                <div class="symbol symbol-circle symbol-45px me-5">
                                    <img alt="Logo" src="{{ asset('sense') }}/media/avatars/blank.png" />
                                </div>
                                <div class="d-flex flex-column">
                                    <div class="fw-bolder d-flex align-items-center fs-6">{{ auth()->user()->name }}
                                    </div>
                                    <span class="text-gray-500 fs-8">{{ auth()->user()->email }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="separator my-2"></div>
                        <div class="menu-item px-5 my-0">
                            <a href="{{route('profile.index')}}" class="menu-link px-5 py-2">
                                <span class="menu-title position-relative">Profile
                                </span>
                            </a>
                        </div>
                        <div class="menu-item px-5 my-0">
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                class="menu-link px-5 py-2">
                                <span class="menu-title position-relative text-danger">Logout
                                    <span
                                        class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">
                                        <i class="fas fa-arrow-right text-danger"></i>
                                    </span>
                                </span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                @endauth
            </div>
            @yield('right-mobile-button')
        </div>
    </div>
</div>
