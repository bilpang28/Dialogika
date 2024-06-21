<div class="row">
    <div class="mt-5">
        {{ $articles->links() }}
    </div>
    @foreach ($articles as $article)
        <div class="col-lg-4">
            <div class="card mx-5 mt-10">
                {{-- <a href="" class="p-3 bg-info rounded-circle"
                    style="position: absolute; top: 10px; right: 10px; z-index:20">
                    <span class="fa fa-pencil text-light"></span>
                </a> --}}
                <a href="{{ route('management.blog.detail', ['id' => $article->id]) }}">
                    <img src="{{ asset('storage/article/header/' . $article->header_pic) }}" class="card-img-top card"
                        style="object-fit: cover;width: 100%;height: 150px;" alt="...">
                    <div class="card-body">
                        <h3 class="card-title">{{ $article->title }}</h3>
                        <div class="card-text text-start">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <i class="bi bi-person"></i>
                                    <a href="article.html">{{ $article->user->name }}</a>
                                </li>
                                <li class="list-inline-item">
                                    <i class="bi bi-clock"></i>
                                    <a href="blog-details.html"><time
                                            datetime="Tanggalpenulisan">{{ Carbon\Carbon::parse($article->craeted_at)->format('d M Y') }}</time></a>
                                </li>
                            </ul>

                            {{-- separator --}}
                            <hr class="my-3">
                            <div class="meta-bottom">
                                <i class="bi bi-folder"></i><a target="_blank" href="#">
                                    {{ $article->category->name }}</a>
                            </div>
                        </div>
                    </div>
                </a>
                <div class="px-8 pb-5 row justify-content-space-between">
                    <div class="px-5 col-6">
                        <a href="{{ route('management.blog.edit', ['id' => $article->id]) }}"
                            class="btn btn-info btn-sm "><span class="fa-solid fa-pencil"></span></a>
                    </div>
                    <div class="px-5 col-6 text-end">
                        <button href="{{ route('management.blog.edit', ['id' => $article->id]) }}"
                            class="btn btn-danger btn-sm" onclick="deleteArticle({{ $article->id }})"><span
                                class="fa-solid fa-trash"></span></button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    {{-- pagination --}}
    <div class="mt-5">
        {{ $articles->links() }}
    </div>

    <script>
        const deleteArticle = (id) => {
            Swal.fire({
                title: 'Apakah Anda Yakin?',
                text: "Data yang dihapus tidak dapat dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#d33',
                cancelButtonColor: '#3085d6',
                confirmButtonText: 'Ya, Hapus!',
                cancelButtonText: 'Batal'
            }).then((willDelete) => {
                if (willDelete) {
                    $.ajax({
                        url: `{{ route('management.blog.destroy') }}`,
                        type: 'DELETE',
                        data: {
                            id: id
                        },
                        headers: {
                            'X-CSRF-TOKEN': "{{ csrf_token() }}"
                        },
                        success: function(response) {
                            toastr.success("Article berhasil dihapus", 'Success!');

                            setTimeout(() => {
                                location.reload();
                            }, 1000);
                        },
                        error: function(xhr, status, error) {
                            const data = xhr.responseJSON;
                            toastr.error(data.message, 'Opps!');
                        }
                    });
                } else {
                    swal("Your article is safe!");
                }
            });
        }
        // pagination
        document.addEventListener('DOMContentLoaded', function() {
            const pagination = document.querySelector('.pagination');
            pagination.classList.add('justify-content-center');
            pagination.classList.add('mt-5');
        });
    </script>
</div>
