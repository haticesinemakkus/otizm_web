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
    <link href="../../css?family=Raleway:100,200,300,400,500,600,700,800" rel="stylesheet">
    <link href="../../css-1?family=Rubik:300,400,500,700,900" rel="stylesheet">

    <!-- Plugins -->
    <link rel="stylesheet" href="{{ asset('frontend/css/plugins.css') }}">

    <!-- Core Style Css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}">

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
            <a class="logo" href="#">
                <img src="{{ asset('frontend/img/logo-light.png') }}" alt="logo">
            </a>

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
                        <a class="nav-link" href="#" data-scroll-nav="1">Hakkımızda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-scroll-nav="2">Hukuki Kaynaklar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-scroll-nav="3">Savunuculuk ve Destek</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-scroll-nav="5">Haberler ve Toplantılar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-scroll-nav="6">İletişim</a>
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
            <div class="item bg-img" data-overlay-dark="5" data-background="{{ asset('frontend/img/bg4.jpg') }}">
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
            <div class="item bg-img" data-overlay-dark="5" data-background="{{ asset('frontend/img/bg1.jpg') }}">
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
            <div class="item bg-img" data-overlay-dark="5" data-background="{{ asset('frontend/img/bg2.jpg') }}">
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

    <div class="process section-padding bg-img bg-fixed pos-re text-center" data-overlay-dark="7"
        data-background="img/bg6.jpg">
        <div class="container">
            <div class="row">

                <div class="section-head offset-md-2 col-md-8 offset-lg-3 col-lg-6">
                    <h4>Planlarımız</h4>
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

    <section class="works section-padding" data-scroll-index="2">
        <div class="container">
            <div class="row">

                <div class="section-head offset-md-2 col-md-8 offset-lg-3 col-lg-6">
                    <h4><span>Projelerimiz</h4>
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
                            <span data-filter='.{{ $category->title }}'>{{ $category->name }}</span>
                        @endforeach
                    </div>
                </div>

                <div class="clearfix"></div>

                <!-- gallery -->
                <div class="gallery full-width">

                    @foreach ($projects as $project)
                        <div class="col-lg-3 col-md-6 items {{ $project->category->title }}">
                            <div class="item-img">
                                <img src="{{ asset('upload/project'.$project->image) }}" alt="image">
                                <div class="item-img-overlay">
                                    <div class="overlay-info full-width">
                                        <p>Logo | Branding</p>
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

    <section class="testimonials section-padding bg-img bg-fixed pos-re" data-overlay-dark="7"
        data-background="img/bg4.jpg">
        <div class="container">
            <div class="row">

                <div class="section-head offset-md-2 col-md-8 offset-lg-3 col-lg-6">
                    <h4>What's <span>Clients</span> Says?</h4>
                    <p>We are a passionate digital design agency that specializes in beautiful and easy-to-use digital
                        design & web development services.</p>
                </div>

                <div class="owl-carousel owl-theme text-center col-lg-10 offset-lg-1">
                    <div class="item-box">
                        <span class="quote">
                            <img src="img/quot.png" alt="">
                        </span>
                        <p>Lorem Ipsum is simply dummy text a galley of type and scrambled it to make a type specimen
                            book.</p>
                        <div class="info">
                            <div class="author-img">
                                <img src="img/clients/1.jpg" alt="">
                            </div>
                            <div class="cont">
                                <h6>Alex Smith</h6>
                                <span>Envato Customer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item-box">
                        <span class="quote">
                            <img src="img/quot.png" alt="">
                        </span>
                        <p>Lorem Ipsum is simply dummy text a galley of type and scrambled it to make a type specimen
                            book.</p>
                        <div class="info">
                            <div class="author-img">
                                <img src="img/clients/2.jpg" alt="">
                            </div>
                            <div class="cont">
                                <h6>Alex Smith</h6>
                                <span>Envato Customer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item-box">
                        <span class="quote">
                            <img src="img/quot.png" alt="">
                        </span>
                        <p>Lorem Ipsum is simply dummy text a galley of type and scrambled it to make a type specimen
                            book.</p>
                        <div class="info">
                            <div class="author-img">
                                <img src="img/clients/3.jpg" alt="">
                            </div>
                            <div class="cont">
                                <h6>Alex Smith</h6>
                                <span>Envato Customer</span>
                            </div>
                        </div>
                    </div>
                    <div class="item-box">
                        <span class="quote">
                            <img src="img/quot.png" alt="">
                        </span>
                        <p>Lorem Ipsum is simply dummy text a galley of type and scrambled it to make a type specimen
                            book.</p>
                        <div class="info">
                            <div class="author-img">
                                <img src="img/clients/4.jpg" alt="">
                            </div>
                            <div class="cont">
                                <h6>Alex Smith</h6>
                                <span>Envato Customer</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="curve curve-top"></div>
    </section>

    <section class="blog section-padding" data-scroll-index="5">
        <div class="container">
            <div class="row">

                <div class="section-head offset-md-2 col-md-8 offset-lg-3 col-lg-6">
                    <h4><span>Latest</span> News</h4>
                    <p>We are a passionate digital design agency that specializes in beautiful and easy-to-use digital
                        design & web development services.</p>
                </div>
                <div class="col-lg-4">
                    <div class="item mb-md50">
                        <div class="post-img">
                            <div class="img">
                                <img src="img/blog/1.jpg" alt="">
                            </div>
                        </div>
                        <div class="cont">
                            <div class="info">
                                <a href="#0">By : Admin</a>
                                <a href="#0">06 Aug 2017</a>
                                <a href="#0" class="tag">WordPress</a>
                            </div>
                            <h6><a href="#0">48 Best WordPress Themes</a></h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum
                                has been the dummy text ever</p>
                            <a href="#0" class="more">Read More <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="item mb-md50">
                        <div class="post-img">
                            <div class="img">
                                <img src="img/blog/2.jpg" alt="">
                            </div>
                        </div>
                        <div class="cont">
                            <div class="info">
                                <a href="#0">By : Admin</a>
                                <a href="#0">06 Aug 2017</a>
                                <a href="#0" class="tag">WordPress</a>
                            </div>
                            <h6><a href="#0">48 Best WordPress Themes</a></h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum
                                has been the dummy text ever</p>
                            <a href="#0" class="more">Read More <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="item">
                        <div class="post-img">
                            <div class="img">
                                <img src="img/blog/3.jpg" alt="">
                            </div>
                        </div>
                        <div class="cont">
                            <div class="info">
                                <a href="#0">By : Admin</a>
                                <a href="#0">06 Aug 2017</a>
                                <a href="#0" class="tag">WordPress</a>
                            </div>
                            <h6><a href="#0">48 Best WordPress Themes</a></h6>
                            <p>Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum
                                has been the dummy text ever</p>
                            <a href="#0" class="more">Read More <i class="fas fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="contact section-padding" data-scroll-index="6">
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
                                <p>+20 010 251 789 18 , 251 789 18</p>
                            </div>
                        </div>
                        <div class="item">
                            <span class="icon icon-basic-mail-open-text"></span>
                            <div class="cont">
                                <h6>Email : </h6>
                                <p>Coco_support@website.com</p>
                            </div>
                        </div>
                        <div class="item">
                            <span class="icon icon-basic-geolocalize-05"></span>
                            <div class="cont">
                                <h6>Address : </h6>
                                <p>4655 Carter Street ,Olney, Illinois</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7">
                    <form class="form" id="contact-form" method="post" action="contact.php">

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

    <footer class="text-center pos-re">
        <div class="container">
            <!-- Logo -->
            <a class="logo" href="#">
                <img src="img/logo-light.png" alt="logo">
            </a>

            <div class="social">
                <a href="#0"><i class="fab fa-facebook-f"></i></a>
                <a href="#0"><i class="fab fa-twitter"></i></a>
                <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                <a href="#0"><i class="fab fa-behance"></i></a>
                <a href="#0"><i class="fab fa-pinterest-p"></i></a>
            </div>

            <p>&copy; 2018 UI-ThemeZ. All Rights Reserved.</p>
        </div>

        <div class="curve curve-top curve-center"></div>
    </footer>

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
</body>

</html>
