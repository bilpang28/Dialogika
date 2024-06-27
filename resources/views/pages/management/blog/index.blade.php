@extends('layouts.app')
@section('title', 'Blog')
@section('sidebar-status', 'true')

@section('navbar')
    @include('layouts.navbar.navbar')
@endsection

@section('content')
    <div class="mt-10">
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input. <br> <br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="row mb-6 align-items-center">
            <div class="col-lg-6 gap-3 d-flex align-items-center">
                <span class="fs-7 text-uppercase fw-bolder text-dark d-none d-md-block">My Article Collection</span>
            </div>
            <div class="col-lg-6 d-flex justify-content-end">
                <div class="tab_all_menu_lead">
                    <a href="{{ route('management.blog.create') }}" class="btn btn-info btn-sm me-3 btn_tambah_lead"><i
                            class="fa-solid fa-plus"></i>Artikel Baru</a>
                </div>

            </div>
        </div>

        {{-- search input --}}
        <div class="row mb-6">
            <div class="col-lg-12">
                <form action="{{ route('management.blog.index') }}" method="GET">
                    <div class="input-group">
                        <input type="text" class="form-control" name="search" placeholder="Search..."
                            value="{{ request()->query('search') }}">
                        <button class="btn btn-primary" type="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>
        @include('pages.components.list-blog')
    </div>
@endsection
