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
                <div class="blog-details-area clearfix">
                    <div class="blog-details-bottom">
                      <div class="row align-items-baseline">
                        <div class="col-xl-6 col-md-5">
                          <div class="blog-details-share">
                            <h6 class="share-title">Rate This Article:</h6>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                <form class="rate" id="rate-us" onclick="HeroForm()">
                                    <input type="radio" id="star5" name="Rating" value="5" />
                                    <label for="star5" title="text">5 stars</label>
                                    <input type="radio" id="star4" name="Rating" value="4" />
                                    <label for="star4" title="text">4 stars</label>
                                    <input type="radio" id="star3" name="Rating" value="3" />
                                    <label for="star3" title="text">3 stars</label>
                                    <input type="radio" id="star2" name="Rating" value="2" />
                                    <label for="star2" title="text">2 stars</label>
                                    <input type="radio" id="star1" name="Rating" value="1" />
                                    <label for="star1" title="text">1 star</label>
                                  </form>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Button trigger modal -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Give Me Your Comment</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            <div class="reply-form">
                                <p>Masukkan pendapat anda dalam kolom komentar berikut</p>
                                        <form id="myForm" role="form">
                                        <div class="row">

                                            <div class="col-md-12 form-group">
                                            <input type="text" name="Name" class="form-control" placeholder="Masukkan nama lengkap"
                                                />
                                            </div>
                                            <div class="col-md-12">
                                            <textarea class="form-control" name="Ket" rows="17"
                                                placeholder="Masukkan Komentar anda"></textarea>
                                            </div>

                                        </div>
                                        </form>
                                    </div>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-primary">submit</button>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="comments">

                        <h4 class="comments-count">Writer Notes</h4>

                        <div id="comment-2" class="comment">
                          <div class="d-flex">
                            <div class="comment-img"><img src="#" alt="Beerama" class="rounded"></div>
                            <div>
                              <time datetime="hh/dd/yy">28 November 2024</time>
                              <p>
                                In order to better protect your Creative Market account, we'd like to verify a sign-in from the device noted below. Help us keep your account secure by letting us know if this was you
                              </p>
                            </div>
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
