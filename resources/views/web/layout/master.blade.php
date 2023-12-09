<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="keywords" content="HTML5 Template Coco onepage themeforest">
    <meta name="description" content="Coco - Onepage Multi-Purpose HTML5 Template">
    <meta name="author" content="">
    <title>Coco</title>
    <link rel="shortcut icon" href="{{ asset('frontend/img/favicon.ico') }}">
    {{-- <link href="../../css?family=Raleway:100,200,300,400,500,600,700,800" rel="stylesheet">
    <link href="../../css-1?family=Rubik:300,400,500,700,900" rel="stylesheet"> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400&display=swap" rel="stylesheet">

    <!-- Plugins -->
    <link rel="stylesheet" href="{{ asset('frontend/css/plugins.css') }}">

    <!-- Core Style Css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">
    <style>
        body {
            font-family: 'Cormorant';
        }

        .header {
            position: relative;
            height: 500px;
            /* Başlık için istediğiniz yüksekliği ayarlayın */
            overflow: hidden;
        }

        .header .owl-carousel {
            height: 100%;
        }

        .header .item {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 100%;
        }

        .testimonials {
            position: relative;
            z-index: 1;
        }

        .hakkimizda,
        .savunuculuk,
        .hukuki,
        .haberler {
            display: none;
        }

        .nav-item ul li a {
            font-size: 15px !important;
            margin: 10px 3px !important;
        }
    </style>
</head>

<body>
    <div class="loading">
        <div class="text-center middle">
            <div class="lds-ellipsis">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
    </div>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"><i class="fas fa-bars"></i></span>
            </button>

            <!-- navbar links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#" data-scroll-nav="0">Anasayfa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="toggleSubItems(event, 'hakkimizda')">Hakkımızda</a>
                        <ul class="hakkimizda">
                            <li>
                                <a class="nav-link" href="{{ route('denizliOtizm') }}">Denizli Otizm <br> Derneği</a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{ route('istanbulOtizm') }}">İstanbul Otizm <br> Gönüllüleri
                                    Derneği</a>
                            </li>
                            <li>
                                <a class="nav-link" href="{{ route('purpose') }}">Proje’nin Amacı</a>
                            </li>
                            <li>
                                <a class="nav-link" href="#">Neyi Hedefliyoruz?</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="toggleSubItems(event, 'hukuki')">Hukuki
                            Kaynaklar</a>
                        <ul class="hukuki">
                            <li>
                                <a class="nav-link" href="#">Mevzuat</a>
                            </li>
                            <li>
                                <a class="nav-link" href="#">Birleşmiş Milletler</a>
                            </li>
                            <li>
                                <a class="nav-link" href="#">İçtihat</a>
                            </li>
                            <li>
                                <a class="nav-link" href="#">Otizm</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="toggleSubItems(event, 'savunuculuk')">Savunuculuk ve
                            Destek</a>
                        <ul class="savunuculuk">
                            <li>
                                <a class="nav-link" href="#">Savunuculuk</a>
                            </li>
                            <li>
                                <a class="nav-link" href="#">Başvuru Mekanizmaları</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="toggleSubItems(event, 'haberler')">Haberler ve
                            Toplantılar</a>
                        <ul class="haberler">
                            <li>
                                <a class="nav-link" href="#">Toplantılar</a>
                            </li>
                            <li>
                                <a class="nav-link" href="#">Çevrimiçi Toplantılar</a>
                            </li>
                            <li>
                                <a class="nav-link" href="#">Haberler</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-scroll-nav="5">İletişim</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- End Navbar ====
    ======================================= -->


    <!-- =====================================
    ==== Start Header -->

    <header class="header pos-re slider-fade" data-scroll-index="0">

        <div class="owl-carousel owl-theme">
            <div class="item bg-img" data-overlay-dark="5" data-background="{{ asset('frontend/img/3.jpg') }}">
                <div class="text-center v-middle caption mt-30">
                    <h4>Ayrımcılığa Karşı</h4>
                    <h1>BİRLİKTE GÜÇLÜYÜZ</h1>
                    <div class="row">
                        <div class="offset-md-1 col-md-10 offset-lg-2 col-lg-8">
                            <p>Otistikler ve ailerinin haklarına erişimini güçlendirmek için ayrımcılığa karşı birlikte
                                hareket ediyoruz.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item bg-img" data-overlay-dark="5" data-background="{{ asset('frontend/img/2.jpg') }}">
                <div class="text-center v-middle caption mt-30">
                    <h4>Ayrımcılığa Karşı</h4>
                    <h1>BİRLİKTE GÜÇLÜYÜZ</h1>
                    <div class="row">
                        <div class="offset-md-1 col-md-10 offset-lg-2 col-lg-8">
                            <p>Otistikler ve ailerinin haklarına erişimini güçlendirmek için ayrımcılığa karşı birlikte
                                hareket ediyoruz.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item bg-img" data-overlay-dark="5" data-background="{{ asset('frontend/img/1.jpg') }}">
                <div class="text-center v-middle caption mt-30">
                    <h4>Ayrımcılığa Karşı</h4>
                    <h1>BİRLİKTE GÜÇLÜYÜZ</h1>
                    <div class="row">
                        <div class="offset-md-1 col-md-10 offset-lg-2 col-lg-8">
                            <p>Otistikler ve ailerinin haklarına erişimini güçlendirmek için ayrımcılığa karşı birlikte
                                hareket ediyoruz.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <section class="works section-padding" data-scroll-index="2">
        <div class="container">
            <div class="row">

                <div class="section-head offset-md-2 col-md-8 offset-lg-3 col-lg-6">
                    <h4><span>PROJE KAPSAMINDA</h4>
                    <p>We are a passionate digital design agency that specializes in beautiful and easy-to-use digital
                        design & web development services.</p>
                </div>

            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="filtering text-center mb-30 col-sm-12">
                    <div class="filter">
                        <span data-filter='*' class="active">All</span>
                        @foreach ($project_categories as $category)
                            <span data-filter='.{{ $category->title }}'>{{ $category->title }}</span>
                        @endforeach
                    </div>
                </div>

                <div class="clearfix"></div>

                <!-- gallery -->
                <div class="gallery full-width">

                    @foreach ($projects as $project)
                        <div class="col-lg-3 col-md-6 items {{ $project->category->title }}">
                            <div class="item-img">
                                <img src="{{ asset('upload/project/' . $project->image) }}" alt="image">
                                <div class="item-img-overlay">
                                    <div class="overlay-info full-width">
                                        <p>{{ $project->category->title }}</p>
                                        <h6>{{ $project->title }}</h6>
                                        <a href="img/portfolio/1.jpg" class="popimg">
                                            <span class="icon"><i class="fas fa-long-arrow-alt-right"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>
    </section>

    <div data-scroll-index="1" class="process section-padding bg-img bg-fixed pos-re text-center"
        data-overlay-dark="7" data-background="{{ asset('frontend/img/bg6.jpg') }}">
        <div class="container">
            <div class="row">

                <div class="section-head offset-md-2 col-md-8 offset-lg-3 col-lg-6">
                    <h4>PROJE HEDEFLERİ</h4>
                    <p>We are a passionate digital design agency that specializes in beautiful and easy-to-use digital
                        design & web development services.</p>
                </div>
                <div class="full-width clearfix"></div>
                @foreach ($plans as $key => $plan)
                    <div class="col-lg-3 col-md-6">
                        <div
                            class="item @if (($key + 1) % 2 == 1) odd @elseif($key == 0) first @endif  mb-md50">
                            <img src="{{ asset('upload/plan/' . $plan->icon) }}" class="tobotm" alt="">
                            <span class="icon icon-basic-lightbulb"></span>
                            <div class="cont">
                                <h3>0{{ $key + 1 }}</h3>
                                <h6>{{ $plan->title }}</h6>
                                <p>{{ $plan->description }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>

        <div class="curve curve-gray-t curve-top"></div>
        <div class="curve curve-bottom"></div>
    </div>
    <section class="blog section-padding" data-scroll-index="4">
        <div class="container">
            <div class="row">

                <div class="section-head offset-md-2 col-md-8 offset-lg-3 col-lg-6">
                    <h4><span>HABERLER </span> VE TOPLANTILAR</h4>
                </div>
                @foreach ($news as $new)
                    <div class="col-lg-4">
                        <div class="item mb-md50">
                            <div class="post-img">
                                <div class="img">
                                    <img src="img/blog/1.jpg" alt="">
                                </div>
                            </div>
                            <div class="cont">
                                <div class="info">
                                    <a href="#0">By : {{ $new->createdBy->name ?? 'Admin' }}</a>
                                    <a href="#0">{{ $new->created_at->format('d.m.Y') }}</a>
                                    <a href="#0" class="tag">{{ $new->category->name }}</a>
                                </div>
                                <h6><a href="#0">{{ $new->category->name }}</a></h6>
                                <p>{{ $new->description }}</p>
                                <a href="#0" class="more">Read More <i class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section data-scroll-index="3" class="testimonials section-padding bg-img bg-fixed pos-re" data-overlay-dark="7"
        data-background="{{ asset('frontend/img/bg4.jpg') }}">
        <div class="container">
            <div class="row">

                <div class="section-head offset-md-2 col-md-8 offset-lg-3 col-lg-6">
                    <h4>PROJE <span>KATILIMCILARIMIZ</span> NE DİYOR?</h4>
                    <p>Farklı illerden katılımcılarımız olan otizm alanında çalışan sivil toplum örgütleri ayrımcılıkla
                        mücadele ve otistiklerin ve ailelerinin haklarına erişimi konusunda ne düşünüyor?</p>
                </div>

                <div class="owl-carousel owl-theme text-center col-lg-10 offset-lg-1">
                    @foreach ($comments as $comment)
                        <div class="item-box">
                            <span class="quote">
                                <img src="img/quot.png" alt="">
                            </span>
                            <p>{{ $comment->comment }}</p>
                            <div class="info">
                                <div class="author-img">
                                    <img src="img/clients/1.jpg" alt="">
                                </div>
                                <div class="cont">
                                    <h6>{{ $comment->name }}</h6>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>

        <div class="curve curve-top"></div>
    </section>



    <section class="contact section-padding" data-scroll-index="5">
        <div class="container">
            <div class="row">

                <div class="section-head offset-md-2 col-md-8 offset-lg-3 col-lg-6">
                    <h4>Get <span>In</span> Touch</h4>
                    <p>We are a passionate digital design agency that specializes in beautiful and easy-to-use digital
                        design & web development services.</p>
                </div>

                <div class="col-lg-5">
                    <div class="contact-info mb-md50">
                        <h5>Contact Us :</h5>
                        <p>Nulla metus metus ullamcorper vel tincidunt sed euismod nibh Quisque volutpat</p>
                        <div class="item">
                            <span class="icon icon-basic-tablet"></span>
                            <div class="cont">
                                <h6>Phone : </h6>
                                <p>{{ $setting->phone1 }}</p>
                            </div>
                        </div>
                        <div class="item">
                            <span class="icon icon-basic-mail-open-text"></span>
                            <div class="cont">
                                <h6>Email : </h6>
                                <p>{{ $setting->email }}</p>
                            </div>
                        </div>
                        <div class="item">
                            <span class="icon icon-basic-geolocalize-05"></span>
                            <div class="cont">
                                <h6>Address : </h6>
                                <p>{{ $setting->address1 }}</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <form class="form" method="post" action="{{ route('demand_save') }}"
                        enctype="multipart/form-data">

                        <div class="messages"></div>

                        <div class="controls">

                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="form_name" type="text" name="name" placeholder="Name"
                                            required="required">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="form_email" type="email" name="email" placeholder="Email"
                                            required="required">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input id="form_subject" type="text" name="subject"
                                            placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea id="form_message" name="message" placeholder="Message" rows="4" required="required"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <button type="submit" class="butn butn-bg"><span>Send Message</span></button>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>


    <section data-scroll-index="6" class="hero">
        <div class="section-padding pos-re">
            <div class="container">
                <div class="row">
                    <div class="feat-item mb-md50 col-lg-3">
                        <div class="text-center">
                            <a href="https://www.esithaklar.org/" target="_blank">
                                <img src="{{ asset('upload/ab_logo/image3.png') }}" alt=""
                                    style="height: 100%; width: 107%;">
                            </a>
                        </div>
                    </div>

                    <div class="feat-item active mb-md50 col-lg-3">
                        <div class="text-center">
                            <a href="https://www.nhc.nl/" target="_blank">
                                <img src="{{ asset('upload/ab_logo/image4.png') }}" alt=""
                                    style="width:71%;height:90%">
                            </a>
                        </div>
                    </div>

                    <div class="feat-item col-lg-3">
                        <div class="text-center">
                            <a href="https://www.otizm.info/" target="_blank">
                                <img src="{{ asset('upload/ab_logo/image5.png') }}" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="feat-item col-lg-3">
                        <div class="text-center">
                            <a href="https://denizliotizm.org/" target="_blank">
                                <img src="{{ asset('upload/ab_logo/image6.jpeg') }}" alt="">
                            </a>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="feat-item mb-md50 col-lg-3">
                        <div class="text-center">
                            <img src="{{ asset('upload/ab_logo/ab_finance.png') }}" alt="">
                        </div>
                    </div>
                    <div class="feat-item col-lg-9" style="padding: 95px 30px;">
                        <p style="font-size: 17px;">Bu websitesi Avrupa Birliği Ayrımcılığa Karşı Birlikte: Ayrımcılık
                            Mağdurlarının Adalete
                            Erişiminin İyileştirilmesi İçin Sivil Toplum Koalisyonu İnşa Edilmesi projesi kapsamında
                            Avrupa Birliği’nin maddi desteği ile hazırlanmıştır. İçeriğin sorumluluğu tamamıyla Denizli
                            Otizm Derneği ve İstanbul Otizm Gönüllüleri derneği’ne aittir ve AB'nin görüşlerini
                            yansıtmamaktadır.”</p>
                    </div>
                </div>
            </div>

            <div class="curve curve-gray-b curve-bottom"></div>
        </div>
    </section>

    <footer class="text-center pos-re">
        <div class="container">
            <div class="social">
                <a href="{{ $setting->facebook_link }}"><i class="fab fa-facebook-f"></i></a>
                <a href="{{ $setting->twitter_link }}"><i class="fab fa-twitter"></i></a>
                <a href="{{ $setting->linkedin_link }}"><i class="fab fa-linkedin-in"></i></a>
            </div>

            <p>&copy; 2023 © <a href="https://quarrysoftdev.com">Quarry Software
                    Development</a>. Tüm Hakları saklıdır.</p>
        </div>

        <div class="curve curve-top curve-center"></div>
    </footer>
    <div class="access-helper" data-access="">
        <div class="row">
            <div class="access-helper-open" data-toggle="access-helper-content" data-target-class="opened">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 491.98 491.98">
                    <!-- SVG paths here -->
                </svg>
            </div>
            <div class="access-helper-content">
                <div class="access-helper-list">
                    <div class="access-helper-close" data-toggle="access-helper-content" data-target-class="opened">
                        Kapat</div>
                    <div class="access-helper-title">Yazı Boyutu</div>
                    <div class="access-helper-font-size" data-font-size="16">
                        <div class="access-helper-item" data-font-btn="access-size-minus">A-</div>
                        <div class="access-helper-item" data-font-btn="access-size-plus">A+</div>
                    </div>
                    <div class="access-helper-item" data-access-btn="access-readable-font">Okunabilir Yazı Tipi</div>
                    <div class="access-helper-title">Renk Seç</div>
                    <div class="access-choose-colors">
                        <div class="aks-color-group">
                            <input id="color_1" name="color" type="radio" class="aks-color"
                                data-color="#8ac454">
                            <input id="color_2" name="color" type="radio" class="aks-color"
                                data-color="#20c4a4">
                            <input id="color_3" name="color" type="radio" class="aks-color"
                                data-color="#00affd">
                            <input id="color_4" name="color" type="radio" class="aks-color"
                                data-color="#8568f4">
                            <input id="color_5" name="color" type="radio" class="aks-color"
                                data-color="#ae52d4">
                            <input id="color_6" name="color" type="radio" class="aks-color"
                                data-color="#ec4ea5">
                            <input id="color_7" name="color" type="radio" class="aks-color"
                                data-color="#ff7102">
                            <input id="color_8" name="color" type="radio" class="aks-color"
                                data-color="#f9c525">
                            <input id="color_9" name="color" type="radio" class="aks-color"
                                data-color="#a9a9a9">
                        </div>
                    </div>
                    <div class="access-helper-item" data-access-btn="access-choose-color">Renk Seçin</div>
                    <div class="access-helper-item" data-access-btn="access-underline-links">Bağlantıların Altını Çiz
                    </div>
                </div>
            </div>
        </div>
        <div class="access-assistant">
            <div class="access-assistant-content">
                <div class="access-assistant-close" data-toggle="access-assistant" data-target-class="opened">
                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round" fill="none"
                        shape-rendering="geometricPrecision">
                        <path d="M18 6L6 18"></path>
                        <path d="M6 6l12 12"></path>
                    </svg>
                </div>
                <h2>Sesli Komut</h2>
                <ul class="access-assistant-list">
                    <!-- Sesli komut listesi buraya eklenebilir -->
                </ul>
            </div>
        </div>
    </div>


    <script src="{{ asset('frontend/js/jquery-3.0.0.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery-migrate-3.0.0.min.js') }}"></script>
    <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/scrollIt.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.stellar.min.js') }}"></script>
    <script src="{{ asset('frontend/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/js/YouTubePopUp.jquery.js') }}"></script>
    <script src="{{ asset('frontend/js/validator.js') }}"></script>
    <script src="{{ asset('frontend/js/scripts.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var openButton = document.querySelector('.access-helper-open');
            var closeButton = document.querySelector('.access-helper-close');

            openButton.addEventListener('click', function() {
                var targetClass = openButton.getAttribute('data-target-class');
                document.querySelector('.access-helper-content').classList.add(targetClass);
            });

            closeButton.addEventListener('click', function() {
                var targetClass = closeButton.getAttribute('data-target-class');
                document.querySelector('.access-helper-content').classList.remove(targetClass);
            });

            var readableFontButton = document.querySelector('[data-access-btn="access-readable-font"]');
            var isFontLarge = false;

            readableFontButton.addEventListener('click', function() {
                var allElements = document.body.getElementsByTagName('*');

                for (var i = 0; i < allElements.length; i++) {
                    var currentFontSize = parseInt(window.getComputedStyle(allElements[i]).fontSize);
                    var newFontSize = isFontLarge ? currentFontSize - 6 : currentFontSize + 6;
                    allElements[i].style.fontSize = newFontSize + 'px';
                }

                isFontLarge = !isFontLarge;
            });

            // Renk seçme
            var colorRadios = document.querySelectorAll('.aks-color');
            colorRadios.forEach(function(radio) {
                radio.addEventListener('change', function() {
                    document.body.style.backgroundColor = this.dataset.color;
                });
            });

            // Renk seçim panelini göster/gizle
            var colorChooser = document.querySelector('.access-choose-colors');
            document.querySelector('[data-access-btn="access-choose-color"]').addEventListener('click', function() {
                colorChooser.style.display = (colorChooser.style.display === 'block') ? 'none' : 'block';
            });

            var underlineLinksBtn = document.querySelector('[data-access-btn="access-underline-links"]');

            underlineLinksBtn.addEventListener('click', function() {
                var allLinks = document.querySelectorAll('a');

                allLinks.forEach(function(link) {
                    link.classList.toggle('underline-links');
                });
            });

        });

        function toggleSubItems(event, sectionClass) {
            var clickedItem = event.currentTarget;
            var subItems = clickedItem.nextElementSibling;

            // Tüm alt menülerin gizlenmesi
            var allSubMenus = document.querySelectorAll('.navbar-nav ul');
            allSubMenus.forEach(function(menu) {
                if (menu !== subItems) {
                    menu.style.display = 'none';
                }
            });

            // Eğer alt menü display: none ise aç
            if (subItems.style.display === 'none' || subItems.style.display === '') {
                subItems.style.display = 'block';
            } else {
                subItems.style.display = 'none';
            }
        }
    </script>

</body>

</html>
