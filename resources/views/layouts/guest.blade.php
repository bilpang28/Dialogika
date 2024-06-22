<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dialogika Blog</title>
    <meta content="Article" name="description">
    <meta content="Article" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('guest/img') }}/favicon.webp" rel="icon">
    <link href="{{ asset('guest/img') }}/apple-touch-icon.webp" rel="apple-touch-icon">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
    <meta property="og:site_name" content="Dialogika | Kelas Public Speaking" />
    <meta property="og:site" content="dialogika.co" />
    <meta property="og:title" content="Article | Dialogika Blog" />
    <meta property="og:description" content="Article" />
    <meta property="og:image" content="Article" />'
    <meta property="og:url" content="dialogika.co/blog" />
    <meta property="og:type" content="article" />

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('guest') }}/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('guest') }}/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="{{ asset('guest') }}/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="{{ asset('guest') }}/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('guest') }}/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="{{ asset('guest') }}/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="{{ asset('guest') }}/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="{{ asset('guest') }}/vendor/swiper/swiper-bundle.css" rel="stylesheet">


    <!-- Part CSS Files -->
    <link href="{{ asset('guest') }}/part/theme-counter/theme-counter.css" rel="stylesheet" />
    <link href="{{ asset('guest') }}/part/counting-down/count.css" rel="stylesheet" />
    <link href="{{ asset('guest') }}/part/contact-append/contact.css" rel="stylesheet" />
    <link href="{{ asset('guest') }}/part/popup-box/popup.css" rel="stylesheet" />
    <link href="{{ asset('guest') }}/part/blog-content/blog.css" rel="stylesheet" />
    <link href="{{ asset('guest') }}/part/cse-google/cse.css" rel="stylesheet" />
    <link href="{{ asset('guest') }}/part/cta-append/cta.css" rel="stylesheet" />
    <link href="{{ asset('guest') }}/part/cta-echooling/cta.css" rel="stylesheet" />

    <script src="https://kit.fontawesome.com/cdde75dea2.js" crossorigin="anonymous"></script>


    <!-- Template Main CSS File -->
    <link href="{{ asset('guest') }}/css/style.css" rel="stylesheet" />


    <!--  ========================================================  -->
    <!-- Spreadsheet API Form Pendaftaran -->
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
        crossorigin="anonymous"></script>

    <script>
        function SubForm() {
            $.ajax({
                url: "https://api.apispreadsheets.com/data/JYfPTNSLW4GoVohc/",
                type: "post",
                data: $("#myForm").serializeArray(),
                success: function() {
                    alert("Thank You For Asking :)")
                },
                error: function() {
                    alert("You Will Redirect to Whatsapp :)")
                }
            });
        }

        function downloadForm() {
            $.ajax({
                url: "https://api.apispreadsheets.com/data/11004/",
                type: "post",
                data: $("#cheatsheets").serializeArray(),
                success: function() {
                    window.location.href = "asset/pdf/cheatsheet-contoh-public-speaking-yang-baik.pdf";
                },
                error: function() {
                    window.location.href = "asset/pdf/cheatsheet-contoh-public-speaking-yang-baik.pdf";
                }
            })
        };
    </script>
    <!-- End Spreadsheet API Form Pendaftaran -->

    <!-- Meta Pixel Code -->
    <script>
        ! function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ?
                    n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '916674555903437');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://www.facebook.com/tr?id=916674555903437&ev=PageView&noscript=1" /></noscript>
    <!-- End Meta Pixel Code -->

    <!-- Pixel Quora -->
    <!-- DO NOT MODIFY -->
    <!-- Quora Pixel Code (JS Helper) -->
    <script>
        ! function(q, e, v, n, t, s) {
            if (q.qp) return;
            n = q.qp = function() {
                n.qp ? n.qp.apply(n, arguments) : n.queue.push(arguments);
            };
            n.queue = [];
            t = document.createElement(e);
            t.async = !0;
            t.src = v;
            s = document.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s);
        }(window, 'script', 'https://a.quora.com/qevents.js');
        qp('init', 'cae6711903da464ab62f03df5f66aedc');
        qp('track', 'ViewContent');
    </script>
    <noscript><img height="1" width="1" style="display:none"
            src="https://q.quora.com/_/ad/cae6711903da464ab62f03df5f66aedc/pixel?tag=ViewContent&noscript=1" /></noscript>
    <!-- End of Quora Pixel Code -->
    <script>
        qp('track', 'GenerateLead');
    </script>
    <!-- End Pixel Quora -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-HV60XT856G"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-148836422-2');
        gtag('config', 'G-HV60XT856G');
    </script>
    <!-- End Global site tag (gtag.js) - Google Analytics -->

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-KGK9D6H');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Hotjar Tracking Code for https://dialogika.co -->
    <script>
        (function(h, o, t, j, a, r) {
            h.hj = h.hj || function() {
                (h.hj.q = h.hj.q || []).push(arguments)
            };
            h._hjSettings = {
                hjid: 2828594,
                hjsv: 6
            };
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script');
            r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>
    <!-- End Hotjar -->
    <!--  ========================================================  -->
</head>

<body>

    <!-- Google Tag Manager (noscript) -->
    <noscript>
        <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KGK9D6H" height="0" width="0"
            style="display:none;visibility:hidden"></iframe>
    </noscript><!-- End Google Tag Manager (noscript) -->

    <!-- ======= Top Bar, Header, Side Bar ======= -->
    @include('layouts.guest.header')
    <!-- ======= Top Bar, Header, Side Bar ======= -->

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <div class="d-flex justify-content-between align-items-center">
                <h2>Article</h2>
                <ol>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="index.html">Blog</a></li>
                    <li><a href="index.html">Article</a></li>
                </ol>
            </div>

        </div>
    </section><!-- End Breadcrumbs Section -->

    <main id="main">

        <!-- Blog-details Section - Blog Details Page -->
        <section id="blog-details" class="blog-details">
            <div class="container" data-aos="fade-up" data-aos-delay="100">
                @yield('content')
            </div>
        </section><!-- End Blog-details Section -->


    </main><!-- End #main -->

    <!-- ======= Footer & Counter Area ======= -->
    @include('layouts.guest.footer')
    <!-- ======= End Footer & Counter Area ======= -->

    <a href="#tagging-up" class="back-to-top d-flex align-items-center justify-content-center"><i
            class='bx bx-star bx-tada'></i></a>


    <!-- Vendor JS Files -->
    <script src="{{ asset('guest') }}/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="{{ asset('guest') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('guest') }}/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="{{ asset('guest') }}/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="{{ asset('guest') }}/vendor/php-email-form/validate.js"></script>

    <!-- Element -->
    <script src="{{ asset('guest') }}/js/category.js"></script>

    <!-- Part -->
    <script src="{{ asset('guest') }}/part/counting-down/count.js"></script>
    <script src="{{ asset('guest') }}/part/cse-google/cse.js"></script>
    <script src="{{ asset('guest') }}/part/blog-content/blog.js"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('guest') }}/js/timestamp.js"></script>
    <script src="{{ asset('guest') }}/js/whatsapp.js"></script>
    <script src="{{ asset('guest') }}/js/main.js"></script>
</body>

</html>
