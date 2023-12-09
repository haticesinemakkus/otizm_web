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
    <nav class="navbar navbar-expand-lg" style="background: #111;">
        <div class="container">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"><i class="fas fa-bars"></i></span>
            </button>

            <!-- navbar links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('index') }}">Anasayfa</a>
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
                                <a class="nav-link" href="{{ route('target') }}">Neyi Hedefliyoruz?</a>
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

    <section class="works section-padding" data-scroll-index="2">
        <div class="container">
            <div class="row">

                <div class="section-head offset-md-2 col-md-8 offset-lg-3 col-lg-6">
                    <h4><span> NEYİ HEDEFLİYORUZ</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis ut odio perspiciatis fugit enim quod sed, ipsa, officiis doloremque sit laboriosam aliquid sunt officia debitis ratione, possimus hic ipsum. Obcaecati. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sunt, consequuntur eius? Impedit laborum, nam officia accusamus ipsa ea consectetur harum commodi animi! Dicta officia quo nisi, asperiores reprehenderit saepe delectus?Lorem ipsum dolor sit amet consectetur adipisicing elit. Ut obcaecati nostrum distinctio voluptas architecto non hic sunt quo officiis fuga reprehenderit quos repellat quis provident, id tenetur possimus porro culpa. Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, suscipit totam doloribus quia quos voluptate laudantium quidem, tempore natus quisquam nemo inventore? Dicta quo corporis voluptatem a nisi, natus veniam.
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum sit saepe vitae ut nemo harum? Non provident eos, autem repellat accusamus sequi modi nemo. Quasi quae id expedita quam eius. </p>
                </div>

            </div>
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
                    <div class="access-helper-item" data-access-btn="access-readable-font">Okunabilir Yazı Tipi
                    </div>
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
                    <div class="access-helper-item" data-access-btn="access-underline-links">Bağlantıların Altını
                        Çiz
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

            var allSubMenus = document.querySelectorAll('.navbar-nav ul');
            allSubMenus.forEach(function(menu) {
                if (menu !== subItems) {
                    menu.style.display = 'none';
                }
            });

            if (subItems.style.display === 'none' || subItems.style.display === '') {
                subItems.style.display = 'block';
            } else {
                subItems.style.display = 'none';
            }
        }
    </script>
</body>

</html>
