@extends('layouts.app')
@section('title', 'Blog')
@section('sidebar-status', 'true')

@section('navbar')
    @include('layouts.navbar.navbar')
@endsection

@section('content')
    <script src="{{ asset('/sense/plugins/custom/tinymce/tinymce.bundle.js') }}"></script>
    <div class="container mt-10">
        <h1>Create New Article</h1>

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

        <form id="form_create_article" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-5">
                <label for="category_id">Category</label>
                <select name="category_id[]" id="category_id" class="form-control" data-control="select2" required multiple>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group mb-5">
                <label for="header_pic">Header Picture (File)</label>
                <input type="file" class="form-control" id="header_pic" name="header_pic" required accept="image/*">
            </div>

            <div class="form-group mb-5">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>

            <div class="form-group mb-5">
                <label for="source">Source</label>
                <input type="text" class="form-control" id="source" name="source">
            </div>

            <div class="form-group mb-5">
                <label for="body">Body</label>
                <textarea id="kt_docs_tinymce_hidden" name="body" class="tox-target">
                </textarea>
            </div>

            <div class="form-group mb-5">
                <label for="w">Writer</label>
                <select name="writer_id[]" id="writer_id" class="form-control" data-control="select2" required multiple
                    placeholder="Pilih siapa penulisnya">
                    @foreach ($writers as $writer)
                        <option value="{{ $writer->id }}">{{ $writer->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group mb-5">
                <label for="keyword">Keyword</label>
                <input type="text" class="form-control" id="keyword" name="keyword" placeholder="ayam, kucing, hewan">
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

        $('#form_create_article').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                url: "{{ route('management.blog.store') }}",
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                header: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                },
                success: function(data) {
                    toastr.success(data.message, 'Selamat 🚀 !');

                    setTimeout(function() {
                        window.location.href = "{{ route('management.blog.index') }}";
                    }, 1000);
                },
                error: function(xhr, status, error) {
                    const data = xhr.responseJSON;
                    const errors = data.errors;
                    let toastrData = '';
                    for (const key in errors) {
                        if (errors.hasOwnProperty(key)) {
                            toastrData += errors[key].join('<br>');
                        }
                    }
                    toastr.error(toastrData, 'Opps!');
                }
            });
        });
    </script>
@endsection
