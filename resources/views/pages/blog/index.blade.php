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
                    <img src="{{ asset('guest/img') }}/intern/blog1.jpg" alt="Teknik menguasai Negosiasi" class="img-fluid">
                </div>

                <a href="{{route('blog.detail', ['id' => 1])}}" class="title">Menguasai Teknik Negosiasi Win-Win Solution: Langkah Sukses dalam
                    Berbisnis</a>

                <div class="meta-top">
                    <ul>
                        <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="article.html">Arya Difa
                                Hendrawan</a></li>
                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time
                                    datetime="Tanggalpenulisan">6 Juni
                                    2024</time></a></li>
                    </ul>
                </div><!-- End meta top -->

                <div class="content">
                    <div class="row">

                        <!-- 2 first paragraph of the draft -->
                        <div class="mt-4">
                            <p><span class="fw-lighter">Pelajari seni negosiasi win-win solution untuk
                                    mencapai kesepakatan yang saling menguntungkan dan membangun hubungan
                                    bisnis yang langgeng. Artikel ini mengulas langkah-langkah
                                    strategis dan teori fundamental dalam menerapkan teknik negosiasi
                                    win-win solution, membuka jalan menuju kesuksesan bisnis berkelanjutan.
                            </p>
                        </div>
                        <div>

                        </div>
                    </div> <!-- End post content -->

                    <div class="meta-bottom">
                        <i class="bi bi-folder"></i>
                        <ul class="cats">
                            <li><a target="_blank" href="#">Negosiasi</a></li>
                        </ul>

            </article>
            <Br></Br>
            <article class="article">
                <div class="post-img">
                    <img src="{{ asset('guest/img') }}/intern/blog2.jpg" alt="Teknik menguasai Negosiasi" class="img-fluid">
                </div>

                <a href="{{route('blog.detail', ['id' => 1])}}" class="title">Pendaftaran LPDP Tahap 2 2024 Segera Dibuka! Siapkan Dokumen dan Temukan
                    Tips Lolos di Sini!</a>

                <div class="meta-top">
                    <ul>
                        <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="article.html">Nasrudin
                                Fahmi</a></li>
                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time
                                    datetime="Tanggalpenulisan">6 Juni
                                    2024</time></a></li>
                    </ul>
                </div><!-- End meta top -->

                <div class="content">
                    <div class="row">

                        <!-- 2 first paragraph of the draft -->
                        <div class="mt-4">
                            <p><span class="fw-lighter">Pelajari seni negosiasi win-win solution untuk
                                    mencapai kesepakatan yang saling menguntungkan dan membangun hubungan
                                    bisnis yang langgeng. Artikel ini mengulas langkah-langkah
                                    strategis dan teori fundamental dalam menerapkan teknik negosiasi
                                    win-win solution, membuka jalan menuju kesuksesan bisnis berkelanjutan.
                            </p>
                        </div>
                    </div><!-- End post content -->

                    <div class="meta-bottom">
                        <i class="bi bi-folder"></i>
                        <ul class="cats">
                            <li><a target="_blank" href="#">Business</a></li>
                        </ul>

            </article>
            <Br></Br>
            <article class="article">
                <div class="post-img">
                    <img src="{{ asset('guest/img') }}/intern/blog3.jpg" alt="Teknik menguasai Negosiasi" class="img-fluid">
                </div>

                <a href="{{route('blog.detail', ['id' => 1])}}" class="title">10 Tips Menganggur Produktif buat Kamu Para Jobseeker!</a>

                <div class="meta-top">
                    <ul>
                        <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="article.html">Agatha
                                Betasabrina
                            </a></li>
                        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-details.html"><time
                                    datetime="Tanggalpenulisan">6 Juni
                                    2024</time></a></li>
                    </ul>
                </div><!-- End meta top -->

                <div class="content">
                    <div class="row">

                        <!-- 2 first paragraph of the draft -->
                        <div class="mt-4">
                            <p><span class="fw-lighter">Pelajari seni negosiasi win-win solution untuk
                                    mencapai kesepakatan yang saling menguntungkan dan membangun hubungan
                                    bisnis yang langgeng. Artikel ini mengulas langkah-langkah
                                    strategis dan teori fundamental dalam menerapkan teknik negosiasi
                                    win-win solution, membuka jalan menuju kesuksesan bisnis berkelanjutan.
                            </p>
                        </div>
                    </div><!-- End post content -->

                    <div class="meta-bottom">
                        <i class="bi bi-folder"></i>
                        <ul class="cats">
                            <li><a target="_blank" href="#">Business</a></li>
                        </ul>

            </article>
            <!-- End post article -->
        </div>
        <div class="col-lg-4 mt-4">

            <div class="widget sidebar-widget-profile ">
                <div class="tgAbout-me swiper-slider">
                    <div class="tgAbout-thumb">
                        <img src="{{ asset('guest/img') }}/logo-square.png" class="img-thumbnail" alt="XXXKEYWORDS">
                    </div>
                    <div class="tgAbout-info">
                        <p class="intro">Welcome to <b>Dialogika Blog</b></p>
                        <span class="designation">UNLEASH YOUR POTENTIAL</span>
                    </div>
                    <div class="tgAbout-social">
                        <a href="https://instagram.com/dialogika.co"><i class="fab fa-instagram"></i></a>
                        <a href="https://twitter.com/dialogika_co"><i class="fab fa-twitter"></i></a>
                        <a href="https://facebook.com/dialgika.co"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://youtube.com/@dialogika_co"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>

            @include('layouts.guest.components.classes')
        </div>
    </div>
@endsection
