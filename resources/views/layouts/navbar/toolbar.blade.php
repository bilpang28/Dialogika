<div class="container-xxl  py-6 py-lg-0 d-flex flex-column flex-lg-row align-items-lg-stretch justify-content-lg-between">
    <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
        <h1 class="page-heading d-flex fw-bolder fs-3 flex-column justify-content-center my-0" contenteditable="true">@yield('title')</h1>
        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 ">
            <li class="breadcrumb-item text-muted">
                <a href="" class="text-muted text-hover-warning"><i class="fa-solid fa-home fs-7"></i></a>
            </li>
            @hasSection('title-sub')
            <li class="breadcrumb-item">
                <span class="bullet bg-warning w-5px h-2px"></span>
            </li>
            <li class="breadcrumb-item">
                <li class="breadcrumb-item">@yield('title-sub')</li>
            </li>
            @endif
            @hasSection('title')
            <li class="breadcrumb-item">
                <span class="bullet bg-warning w-5px h-2px"></span>
            </li>
            <li class="breadcrumb-item">@yield('title')</li>
            @endif
        </ul>
    </div>
    <div class="d-flex align-items-center gap-2 gap-lg-3">
        @include('layouts.navbar.components.navbar-button')
        @yield('button-action')
    </div>
</div>
