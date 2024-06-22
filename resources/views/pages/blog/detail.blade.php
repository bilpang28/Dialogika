@extends('layouts.guest')

@section('content')
    <div class="row ">
        <div class="col-lg-1 mt-4">
            <div class="blog-details-social">
                <ul class="list-wrap">
                    <li><a href="https://facebook.com/dialogika.co" target="__blank"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li><a href="https://twitter.com/dialogika_co" target="__blank"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="https://linkedin.com/company/dialogika" target="__blank"><i
                                class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="https://tiktok.com/@dialogika.co" target="__blank"><i class="fab fa-tiktok"></i></a></li>
                    <li><a href="https://instagram.com/dialogika.co" target="__blank"><i class="fab fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-7 mt-4">
            <article class="article">
                <div class="post-img">
                    <img src="{{ asset('storage/article/header') . '/' . $article->header_pic }}"
                        alt="Teknik menguasai Negosiasi" class="img-fluid">
                </div>

                <h1 class="title">{{ $article->title }}</h1>

                <div class="meta-top">
                    <ul>
                        <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a
                                href="#">{{ $article->writer->name }}</a></li>
                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time
                                    datetime="Tanggalpenulisan">{{ Carbon\Carbon::parse($article->craeted_at)->format('d M Y') }}</time></a>
                        </li>
                    </ul>
                </div><!-- End meta top -->

                <div class="content">
                    <div class="row">
                        {!! $article->body !!}
                    </div><!-- End post content -->

                    <div class="meta-bottom">
                        <i class="bi bi-folder"></i>
                        <ul class="cats">
                            @foreach ($article->categories as $category)
                                <li><a target="_blank" href="#">{{ $category->name }}, </a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="blog-details-area clearfix">
                    <div class="blog-details-bottom">
                        <div class="row align-items-baseline">
                            <div class="col-xl-6 col-md-5">
                                <div class="blog-details-share">
                                    <h6 class="share-title">Rate This Article:</h6>
                                    <a data-bs-toggle="modal" data-bs-target="#modalRating">
                                        <form class="rate">
                                            <label for="star5" data-value="5" class="rating" title="text">5
                                                stars</label>
                                            <label for="star4" data-value="4" class="rating" title="text">4
                                                stars</label>
                                            <label for="star3" data-value="3" class="rating" title="text">3
                                                stars</label>
                                            <label for="star2" data-value="2" class="rating" title="text">2
                                                stars</label>
                                            <label for="star1" data-value="1" class="rating" title="text">1
                                                star</label>
                                        </form>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Button trigger modal -->
                <div class="modal fade" id="modalRating" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                    aria-labelledby="modalRatingLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="modalRatingLabel">Give Me Your Comment</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="reply-form">
                                    <p>Masukkan pendapat anda dalam kolom komentar berikut</p>
                                    <form id="rating_form" role="form">
                                        @csrf
                                        <div class="row">
                                            <input type="hidden" name="rating" id="rating">
                                            <input type="hidden" name="article_id" value="{{ $article->id }}">
                                            <div class="col-md-12 form-group">
                                                <input type="text" name="name" class="form-control"
                                                    placeholder="Masukkan nama lengkap" />
                                            </div>
                                            <div class="col-md-12 mt-2">
                                                <textarea class="form-control" name="comment" rows="5" placeholder="Masukkan Komentar anda"></textarea>
                                            </div>

                                        </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary">submit</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>



            </article><!-- End post article -->

        </div>
        <div class="col-lg-4 mt-4">

            <div class="widget sidebar-widget-profile ">
                @foreach ($article->writers as $writer)
                    <div class="tgAbout-me swiper-slider" style="margin-bottom:50px">
                        <div class="tgAbout-thumb">
                            @if ($writer->profile_pic)
                                <img src="{{ asset('storage/user/profile/' . $writer->profile_pic) }}"
                                    class="img-thumbnail" alt="XXXKEYWORDS">
                            @else
                                <img src="{{ asset('guest/img') }}/logo-square.png" class="img-thumbnail"
                                    alt="XXXKEYWORDS">
                            @endif
                        </div>
                        <div class="tgAbout-info">
                            <p class="intro">Penulis <b>{{ $writer->name }}</b></p>
                            <span class="designation">Content Writer - Dialogika</span>
                        </div>
                        <div class="tgAbout-social">
                            <a href="https://instagram.com/dialogika.co"><i class="fab fa-instagram"></i></a>
                            <a href="https://twitter.com/dialogika_co"><i class="fab fa-twitter"></i></a>
                            <a href="https://facebook.com/dialgika.co"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://youtube.com/@dialogika_co"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="sidebar mt-4 order-2 order-md-2">
                {{-- @include('layouts.guest.components.category') --}}
                <div class="sidebar-item tags mt-4">
                    <h3 class="sidebar-title">Tags</h3>
                    <ul class="mt-3">
                        @foreach ($article->categories as $category)
                            <li><a href="#">{{ $category->name }}</a></li>
                        @endforeach
                    </ul>
                </div><!-- End sidebar tags-->
            </div><!-- End Sidebar -->

            @include('layouts.guest.components.classes')
        </div>

    </div>

    <script>
        $('.rating').on('click', function() {
            // get data-value
            var rating = $(this).data('value');
            $('#rating').val(rating);
        })

        $('#rating_form').submit(function(e) {
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                url: "{{ route('blog.rating') }}",
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(data) {
                    alert('Terima kasih atas penilaian anda');

                    setTimeout(function() {
                        location.reload();
                    }, 1000);
                },
                error: function(xhr, status, error) {
                    const data = xhr.responseJSON;
                    console.log(data)
                    alert(data);
                }
            })
        })
    </script>
@endsection
