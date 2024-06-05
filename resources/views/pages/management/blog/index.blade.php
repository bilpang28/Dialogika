@extends('layouts.app')
@section('title', 'Dashboard')
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

    <div class="row">
        <div class="col-lg-4">
            <a href="">
                <div class="card mx-5 mt-10">
                    <img src="{{ asset('sense/media/stock/600x400/img-13.jpg') }}" class="card-img-top card"
                        style="object-fit: cover;width: 100%;height: 150px;" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Artikel title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4">
            <a href="">
                <div class="card mx-5 mt-10">
                    <img src="{{ asset('sense/media/stock/600x400/img-30.jpg') }}" class="card-img-top card"
                        style="object-fit: cover;width: 100%;height: 150px;" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Artikel title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4">
            <a href="">
                <div class="card mx-5 mt-10">
                    <img src="{{ asset('sense/media/stock/600x400/img-10.jpg') }}" class="card-img-top card"
                        style="object-fit: cover;width: 100%;height: 150px;" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Artikel title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-lg-4">
            <a href="">
                <div class="card mx-5 mt-10">
                    <img src="{{ asset('sense/media/stock/600x400/img-3.jpg') }}" class="card-img-top card"
                        style="object-fit: cover;width: 100%;height: 150px;" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Artikel title</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection
