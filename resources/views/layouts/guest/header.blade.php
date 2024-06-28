<!-- ======= Top Bar ======= -->
<div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
        <div class="contact-info d-flex align-items-center">
            <i class="bi bi-envelope"></i> <a href="mailto:admin@dialogika.co">admin@dialogika.co</a>
            <i class="bi bi-phone"></i> +62 851 6299 2597
        </div>
        <div class="d-none d-lg-flex social-links align-items-center">
            <a href="https://link.dialogika.co/twitter" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="https://link.dialogika.co/facebook" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="https://link.dialogika.co/instagram" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="https://link.dialogika.co/linkedin" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
        </div>
    </div>
</div>

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

        <a href="{{route('blog.index')}}" class="logo me-auto"><img src="{{asset('guest')}}/img/logo.webp" alt=""
                class="img-fluid"></a>

        <nav id="navbar" class="navbar order-last order-lg-0">
            <ul class="navbar-desktop-list">
                <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
            </ul>
            <i class="bi bi-list d-block d-md-none" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar"></i>
        </nav><!-- .navbar -->

        <a href="/login" class="appointment-btn">Login<span
                class="d-none d-md-inline"></span></a>
    </div>
</header><!-- End Header -->

<!-- ======= Mobile Nav ======= -->
<nav class="navbar-canvas fixed-top">
    <div class="container-fluid">
        <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header">
                <a href="../index.html">
                    <img src="{{asset('guest')}}/img/logo.webp" class="offcanvas-title" id="offcanvasNavbarLabel" />
                </a>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
            </div>
            <div class="offcanvas-body">
                <a href="#hero">
                    <div class="card">
                        <div class="card-body">Home</div>
                    </div>
                </a>
                <div class="card">
                    <a href="#program-collapse" data-bs-toggle="collapse">
                        <div class="card-body d-flex justify-content-between">
                            <span>Program</span><i class='bx bxs-chevron-down bx-tada'></i>
                        </div>
                    </a>
                    <div class="collapse" id="program-collapse">
                        <a href="#program-online" data-bs-toggle="collapse">
                            <div class="card">
                                <div class="card-body d-flex justify-content-between">
                                    <span>Online</span>
                                    <i class='bx bxs-chevron-down bx-tada'></i>
                                </div>
                                <div class="collapse" id="program-online">
                                    <a href="../program/basic-play.html">
                                        <div class="card card-body">Basic Play</div>
                                    </a>
                                    <a href="../program/basic-plus.html">
                                        <div class="card card-body">
                                            <div class="justify-content-between d-flex">
                                                <span>Basic Plus</span>
                                                <span class="badge bg-warning rounded-pill text-dark">Best Buy</span>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="../program/basic-private.html">
                                        <div class="card card-body">Basic Private</div>
                                    </a>
                                    <hr />
                                    <a href="../program/kids-play.html">
                                        <div class="card card-body">Kids Play</div>
                                    </a>
                                    <a href="../program/kids-plus.html">
                                        <div class="card card-body">
                                            <div class="justify-content-between d-flex">
                                                <span>Kids Plus </span>
                                                <span class="badge bg-info rounded-pill">New</span>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="../program/kids-plus.html">
                                        <div class="card card-body">Kids Private</div>
                                    </a>
                                </div>
                            </div>
                        </a>
                        <a href="#program-offline" data-bs-toggle="collapse">
                            <div class="card">
                                <div class="card-body d-flex justify-content-between">
                                    <span>Offline</span>
                                    <i class='bx bxs-chevron-down bx-tada'></i>
                                </div>
                                <div class="collapse" id="program-offline">
                                    <a href="../program/first-class.html">
                                        <div class="card card-body">
                                            <div class="justify-content-between d-flex">
                                                <span>First Class</span>
                                                <span class="badge bg-warning rounded-pill text-dark">Best Buy</span>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="../program/first-kids.html">
                                        <div class="card card-body">
                                            <div class="justify-content-between d-flex">
                                                <span>First Kids </span>
                                                <span class="badge bg-info rounded-pill">New</span>
                                            </div>
                                        </div>
                                    </a>
                                    <hr />
                                    <a href="../program/first-private.html">
                                        <div class="card card-body">First Private</div>
                                    </a>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="card">
                    <a href="#position-collapse" data-bs-toggle="collapse">
                        <div class="card-body d-flex justify-content-between">
                            <span>Position</span><i class='bx bxs-chevron-down bx-tada'></i>
                        </div>
                    </a>
                    <div class="collapse" id="position-collapse">
                        <a href="../position/client-manager.html">
                            <div class="card card-body">
                                <div class="d-flex justify-content-between">
                                    <span>Client Manager</span>
                                    <span class="badge bg-warning rounded-pill">Best</span>
                                </div>
                            </div>
                        </a>
                        <a href="../position/video-editing.html">
                            <div class="card card-body">Video Editor</div>
                        </a>
                        <hr />
                        <a href="../position/deal-maker.html">
                            <div class="card card-body">
                                <div class="d-flex justify-content-between">
                                    <span>Deal Maker</span>
                                    <span class="badge bg-warning rounded-pill">Best</span>
                                </div>
                            </div>
                        </a>
                        <a href="../position/digital-marketing.html">
                            <div class="card card-body">Digital Marketing</div>
                        </a>
                        <hr />
                        <a href="../position/model-talent.html">
                            <div class="card card-body">
                                <div class="d-flex justify-content-between">
                                    <span>Model Talent</span>
                                    <span class="badge bg-warning rounded-pill">Best</span>
                                </div>
                            </div>
                        </a>
                        <a href="../position/content-writing.html">
                            <div class="card card-body">Content Writing</div>
                        </a>
                        <a href="../position/design-specialist.html">
                            <div class="card card-body">Design Specialist</div>
                        </a>
                        <a href="../position/html-writing.html">
                            <div class="card card-body">HTML Writing</div>
                        </a>
                        <hr />
                        <a href="../position/people-development.html">
                            <div class="card card-body">People Development</div>
                        </a>
                        <a href="../position/recruiter-specialist.html">
                            <div class="card card-body">
                                <span>Recruiter Specialist</span>
                            </div>
                        </a>

                    </div>
                </div>
                <a href="../event/">
                    <div class="card card-body">
                        <div class="justify-content-between d-flex">
                            <span>Event </span>
                            <!-- <span class="badge bg-info rounded-pill">New</span> -->
                        </div>
                    </div>
                </a>
                <a href="../service/" onclick="return false;">
                    <div class="card card-body">
                        <div class="justify-content-between d-flex">
                            <span>Service </span>
                            <span class="badge bg-warning rounded-pill">Coming Soon</span>
                        </div>
                    </div>
                </a>
                <a href="../shop/" onclick="return false;">
                    <div class="card card-body">
                        <div class="justify-content-between d-flex">
                            <span>Shop </span>
                            <span class="badge bg-warning rounded-pill">Coming Soon</span>
                        </div>
                    </div>
                </a>
                <a href="../blog/">
                    <div class="card card-body">Blog</div>
                </a>
            </div>
        </div>
    </div>
</nav><!-- End Mobile Nav -->
