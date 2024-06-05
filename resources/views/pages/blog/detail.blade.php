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
                    <img src="{{ asset('guest') }}/img/intern/blog1.jpg" alt="Teknik menguasai Negosiasi"
                        class="img-fluid">
                </div>

                <h1 class="title">Menguasai Teknik Negosiasi Win-Win Solution: Langkah Sukses dalam Berbisnis</h1>

                <div class="meta-top">
                    <ul>
                        <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="#">Eni
                                Irnawati</a></li>
                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time
                                    datetime="Tanggalpenulisan">6 Juni 2024</time></a></li>
                    </ul>
                </div><!-- End meta top -->

                <div class="content">
                    <div class="row">

                        <!-- 2 first paragraph of the draft -->
                        <div class="mt-4">
                            <p><span class="fw-lighter">Pelajari seni negosiasi win-win solution untuk mencapai kesepakatan
                                    yang saling menguntungkan dan membangun hubungan bisnis yang langgeng. Artikel ini
                                    mengulas langkah-langkah
                                    strategis dan teori fundamental dalam menerapkan teknik negosiasi win-win solution,
                                    membuka jalan menuju kesuksesan bisnis berkelanjutan.</p>
                        </div>
                        <!-- The rest of the draft goes here -->


                    </div><!-- End post content -->

                    <div class="meta-bottom">
                        <i class="bi bi-folder"></i>
                        <ul class="cats">
                            <li><a target="_blank" href="#">Business</a></li>
                        </ul>
                    </div>
                </div>


            </article><!-- End post article -->

        </div>
        <div class="col-lg-4 mt-4">

            <div class="widget sidebar-widget-profile ">
                <div class="tgAbout-me swiper-slider">
                    <div class="tgAbout-thumb">
                        <img src="{{ asset('guest') }}img/intern/eni.jpg" class="img-thumbnail" alt="XXXKEYWORDS">
                    </div>
                    <div class="tgAbout-info">
                        <p class="intro">Penulis <b>Eni Irnawati</b></p>
                        <span class="designation">Content Writer - Dialogika</span>
                    </div>
                    <div class="tgAbout-social">
                        <a href="https://instagram.com/dialogika.co"><i class="fab fa-instagram"></i></a>
                        <a href="https://twitter.com/dialogika_co"><i class="fab fa-twitter"></i></a>
                        <a href="https://facebook.com/dialgika.co"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://youtube.com/@dialogika_co"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="tgAbout-me swiper-slider mt-4">
                    <div class="tgAbout-thumb">
                        <img src="{{ asset('guest') }}img/intern/eni.jpg" class="img-thumbnail" alt="XXXKEYWORDS">
                    </div>
                    <div class="tgAbout-info">
                        <p class="intro">Penulis <b>Eni Irnawati</b></p>
                        <span class="designation">Content Writer - Dialogika</span>
                    </div>
                    <div class="tgAbout-social">
                        <a href="https://instagram.com/dialogika.co"><i class="fab fa-instagram"></i></a>
                        <a href="https://twitter.com/dialogika_co"><i class="fab fa-twitter"></i></a>
                        <a href="https://facebook.com/dialgika.co"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://youtube.com/@dialogika_co"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>

            <div class="sidebar mt-4 order-2 order-md-2">
                @include('layouts.guest.components.category')
                <div class="sidebar-item tags mt-4">
                    <h3 class="sidebar-title">Tags</h3>
                    <ul class="mt-3">
                        <li><a href="#">App</a></li>
                        <li><a href="#">IT</a></li>
                        <li><a href="#">Business</a></li>
                        <li><a href="#">Mac</a></li>
                        <li><a href="#">Design</a></li>
                        <li><a href="#">Office</a></li>
                        <li><a href="#">Creative</a></li>
                        <li><a href="#">Studio</a></li>
                        <li><a href="#">Smart</a></li>
                        <li><a href="#">Tips</a></li>
                        <li><a href="#">Marketing</a></li>
                    </ul>
                </div><!-- End sidebar tags-->
            </div><!-- End Sidebar -->

            @include('layouts.guest.components.classes')
        </div>

    </div>
@endsection
