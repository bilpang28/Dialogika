@extends('layouts.app')
@section('title', 'Blog')
@section('sidebar-status', 'true')

@section('navbar')
    @include('layouts.navbar.navbar')
@endsection

@section('content')
<script src="{{asset('/sense/plugins/custom/tinymce/tinymce.bundle.js')}}"></script>
    <div class="container">
        <h1>Create New Article</h1>

        <form action="{{ route('management.blog.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="category_id">Category</label>
                <select name="category_id" id="category_id" class="form-control" required>
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="header_pic">Header Picture (File)</label>
                <input type="file" class="form-control" id="header_pic" name="header_pic" required accept="image/*">
            </div>

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" maxlength="30" required>
            </div>

            <div class="form-group">
                <label for="source">Source *optional</label>
                <input type="text" class="form-control" id="source" name="source">
            </div>

            <div class="form-group">
                <label for="profile_pic">Profile Picture </label>
                <input type="file" class="form-control" id="profile_pic" name="profile_pic" accept="image/*">
            </div>

            <div class="form-group">
                <label for="body">Body</label>
                <textarea id="kt_docs_tinymce_hidden" name="body" class="tox-target">

                </textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script>
        tinymce.init({
        selector: "#kt_docs_tinymce_hidden", height : "480",
        menubar: false,
        toolbar: ["styleselect fontselect fontsizeselect",
            "undo redo | cut copy paste | bold italic | link image | alignleft aligncenter alignright alignjustify",
            "bullist numlist | outdent indent | blockquote subscript superscript | advlist | autolink | lists charmap | print preview |  code"],
        plugins : "advlist autolink link image lists charmap print preview code"
        });
    </script>
@endsection
