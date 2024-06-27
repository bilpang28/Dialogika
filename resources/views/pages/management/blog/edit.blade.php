@extends('layouts.app')
@section('title', 'Blog')
@section('sidebar-status', 'true')

@section('navbar')
    @include('layouts.navbar.navbar')
@endsection

@section('content')
    <script src="{{ asset('/sense/plugins/custom/tinymce/tinymce.bundle.js') }}"></script>
    <div class="container mt-10">
        <h1>Edit Article</h1>
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

        <form action="{{ route('management.blog.update', ['id' => $article->id]) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-5">
                <label for="category_id">Category</label>
                <select name="category_id" id="category_id" class="form-control" data-control="select2" required multiple>
                    <option selected hidden disabled>Pilih Kategori</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}"
                            @foreach ($article->categories as $articleCategory)
                                @if ($category->id == $articleCategory->id)
                                selected
                            @endif @endforeach>
                            {{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group mb-5">
                <label for="header_pic">Header Picture (File)</label>
                <input type="file" class="form-control" id="header_pic" name="header_pic" accept="image/*">
                <img src="{{ asset('storage/article/header/' . $article->header_pic) }}" alt="" srcset="">
            </div>

            <div class="form-group mb-5">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" required
                    value="{{ $article->title }}">
            </div>

            {{-- <div class="form-group mb-5">
                <label for="source">Source *optional</label>
                <input type="text" class="form-control" id="source" name="source" value="{{$article->source}}">
            </div>

            <div class="form-group mb-5">
                <label for="profile_pic">Profile Picture </label>
                <input type="file" class="form-control" id="profile_pic" name="profile_pic" accept="image/*" value="{{$article->profile_pic}}">
            </div> --}}

            <div class="form-group mb-5">
                <label for="source">Source</label>
                <input type="text" class="form-control" id="source" name="source" value="{{ $article->source }}">
            </div>

            <div class="form-group mb-5">
                <label for="w">Writer</label>
                <select name="writer_id[]" id="writer_id" class="form-control" data-control="select2" required multiple
                    placeholder="Pilih siapa penulisnya">
                    @foreach ($writers as $writer)
                        <option value="{{ $writer->id }}"
                            @foreach ($article->writers as $articleWriter)
                                @if ($writer->id == $articleWriter->id)
                                selected
                            @endif @endforeach>
                            {{ $writer->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group mb-5">
                <label for="keyword">Keyword</label>
                <input type="text" class="form-control" id="keyword" name="keyword" placeholder="ayam, kucing, hewan"
                    value="{{ $article->keyword }}">
            </div>

            <div class="form-group mb-5">
                <label for="body">Body</label>
                <textarea id="kt_docs_tinymce_hidden" name="body" class="tox-target">
                    {!! $article->body !!}
                </textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script>
        tinymce.init({
            selector: "#kt_docs_tinymce_hidden",
            height: "480",
            menubar: false,
            toolbar: ["styleselect fontselect fontsizeselect",
                "undo redo | cut copy paste | bold italic | link image | alignleft aligncenter alignright alignjustify",
                "bullist numlist | outdent indent | blockquote subscript superscript | advlist | autolink | lists charmap | print preview |  code"
            ],
            plugins: "advlist autolink link image lists charmap print preview code"
        });
    </script>
@endsection
