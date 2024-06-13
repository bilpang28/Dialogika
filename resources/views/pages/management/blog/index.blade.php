@extends('layouts.app')
@section('title', 'Blog')
@section('sidebar-status', 'true')

@section('navbar')
    @include('layouts.navbar.navbar')
@endsection

@section('content')
<div class="mt-10">
    <div class="row mb-6 align-items-center">
        <div class="col-lg-6 gap-3 d-flex align-items-center">
            <span class="fs-7 text-uppercase fw-bolder text-dark d-none d-md-block">My Article Collection</span>
        </div>
        <div class="col-lg-6 d-flex justify-content-end">
            <div class="tab_all_menu_lead">
                <a href="#kt_modal_tambah_lead" data-bs-toggle="modal" class="btn btn-info btn-sm me-3 btn_tambah_lead"><i
                        class="fa-solid fa-plus"></i>Artikel Baru</a>
            </div>

        </div>
    </div>

    @include('pages.components.list-blog')
</div>
@endsection
