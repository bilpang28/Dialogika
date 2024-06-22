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


                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
