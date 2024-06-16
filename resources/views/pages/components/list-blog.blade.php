<div class="row">
    @foreach ($articles as $article)
        <div class="col-lg-4">
            <a href="{{ route('management.blog.detail', ['id' => $article->id]) }}">

                <div class="card mx-5 mt-10">
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
                </div>
            </a>
        </div>
    @endforeach

    {{-- pagination --}}
    <div class="d-flex justify-content-center">
        {{ $articles->links() }}
    </div>
</div>
