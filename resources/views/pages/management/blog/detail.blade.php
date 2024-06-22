@extends('layouts.app')
@section('title-apps', 'User')
@section('sub-title-apps', 'Management')
@section('desc-apps', '27 Angka favoritku!')
@section('icon-apps', 'fa-solid fa-money-check-dollar')

@section('navbar')
    @include('layouts.navbar.navbar')
@endsection

@section('content')
    <div class="row justify-content-center m-20">
        <div class="col-lg-12">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="card">
                        <img src="{{ asset('storage/article/header/' . $article->header_pic) }}" class="card-img-top">
                        <div class="card-body">
                            <article class="article">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <i class="bi bi-person"></i>
                                        <a href="article.html">{{ $article->writers->first()->name }}</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="bi bi-clock"></i>
                                        <a href="blog-details.html"><time
                                                datetime="Tanggalpenulisan">{{ Carbon\Carbon::parse($article->craeted_at)->format('d M Y') }}</time></a>
                                    </li>
                                </ul>
                                <div class="meta-bottom">
                                    <i class="bi bi-folder"></i>
                                    @foreach ($article->categories as $category)
                                        <a target="_blank" href="#">
                                            {{ $category->name }}</a>,
                                    @endforeach
                                </div>
                                <hr class="my-3">
                                <div class="content">
                                    {!! $article->body !!}
                                </div>
                                <div class="row justify-content-center m-20">
                                    <div class="col-lg-12">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-12">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="row mb-6 align-items-center">
                                                            <div class="col-lg-6 gap-3 d-flex align-items-center">
                                                                <span class="fs-7 text-uppercase fw-bolder text-dark d-none d-md-block">Daftar Artikel
                                                                    </span>
                                                            </div>
                                                            <div class="col-lg-6 d-flex justify-content-end">
                                                                <div class="tab_all_menu_lead">
                                                                    <a href="#kt_modal_create_user" data-bs-toggle="modal"
                                                                        class="btn btn-info btn-sm btn_create_user"><i
                                                                            class="fa-solid fa-plus"></i>Artikel baru</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row rounded">
                                                            <div class="d-grid">
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <table class="table align-top border table-rounded gy-5" id="table">
                                                                            <thead class="">
                                                                                <tr class="fw-bold fs-7 text-gray-500 text-uppercase overflow-y-auto">
                                                                                    <th class="text-center w-50px">#</th>
                                                                                    <th>Name</th>
                                                                                    <th>Rating</th>
                                                                                    <th>Komentar</th>
                                                                                    <th>Aksi</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody class="fs-7">
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



