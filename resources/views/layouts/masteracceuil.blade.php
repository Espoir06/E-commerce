
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechMarketHub</title>
    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">
    <!-- CSS Link -->
    <link rel="stylesheet" href="{{ asset('accueil/css/bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('accueil/css/fontawesome5.min.css') }}">
    <!-- Carousel -->
    <link rel="stylesheet" href="{{ asset('accueil/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('accueil/css/owl.theme.default.min.css') }}">
    <!-- Css -->
    <link rel="stylesheet" href="{{ asset('accueil/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('accueil/css/responsive.css') }}">
    <!-- Favicon -->
    <link rel='shortcut icon' type='image/x-icon' href='{{ asset('accueil/images/icon.png') }}' />
</head>

<body>
    <div class="main">
        <!-- Header Area -->
        <header class="header-area sticky-top">
            <!-- Header Top -->
            <div class="header-top d-flex align-items-center">
                <div class="container">
                    <div class="header-links float-left">
                        <ul class="nav">
                            <li><a href="tell::8801234567890"><i class="fas fa-phone-alt"></i>+228 91 34 05 87</a></li>

                            <li><a href="mailto::admin@gmail.com"><i class="fas fa-envelope"></i>admin@gmail.com</a>
                            </li>

                            <li><i class="fas fa-map-marker-alt"></i>Rue yark Lomé-Togo</li>
                        </ul>
                    </div>
                    <div class="header-links float-right">
                        <ul class="nav">
                            <li><a href="{{route('login.clients')}}"><i class="fas fa-sign-in-alt"></i>Login</a></li>
                            <li><a href="{{route('register.clients')}}"><i class="fas fa fa-user"></i>Creez compte</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Header Mid -->
            <div class="header-mid-area">
                <div class="container">
                    <div class="row header-mid align-items-center justify-content-space-between">
                        <div class="col-md-3 col-sm-4">
                            <div class="header-logo">
                                <a href="index.html"><img src="assets/images/logo.png" alt="img"></a>
                                TechMarketHub
                            </div>
                        </div>

                        <div class="col-md-3 wishlist-area">
                            <div class="header-cart-count user-account">
                                <a href="account.html"><i class="fa fa-user-circle"></i><span>ACCOUNT</span></a>
                            </div>
                            <div class="header-wishlist header-cart-count ">
                                <a href="wishlist.html"><i class="far fa-heart"><span>3</span></i></a>
                            </div>
                            <!-- header-cart -->
                            {{-- <div class="header-cart header-cart-count ">
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#h_cartModal"><i
                                        class="fas fa-shopping-bag"><span></span></i></a>
                                <!-- Cart Modal -->
                                <div class="modal fade" id="h_cartModal" tabindex="-1"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Votre panier</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body cart-modal-body">
                                                <div class="cart-modal-header mb-4">
                                                    <h5>Vous avez <span class="me"></span> Produits</h5>
                                                </div>
                                                <!-- Cart Modal -->
                                                <div class="cart-modal">

                                                </div>
                                                <div class="cart-modal-price">
                                                    <h5>Total Price:</h5>
                                                    <h5>$900USD</h5>
                                                </div>
                                                <div class="cart-modal-btn mt-4">
                                                    <a href="cart.html" class=" color_1_bg">View Cart</a>
                                                    <a href="checkout.html" class=" color_1_bg">Checkout</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header Button Area -->
            <div class="header-button ">
                <div class="container">
                    <div class="row navber-area justify-content-between">
                        <div class="category_item col-lg-3 col-md-4 col-sm-4">
                            <div class="nav-item cat_item_btn pe-3 ps-3"><i class="fas fa-bars"></i>MARKET

                            </div>
                        </div>
                        <div class="navber col-lg-8 col-md-8 col-sm-8 ">
                            <div class="mobile-menu-icon">
                                <span id="mobile-menu"><i class="fas fa-bars"></i></span>
                            </div>
                            <ul class="nav">
                                <li class="nav-item"><a href="{{ route('acceuil.boutique') }}" class="nav-link">Accueil</a></li>
                                {{-- <li class="nav-item"><a href="about.html" class="nav-link">About</a></li> --}}
                                <li class="nav-item"><a href="" class="nav-link">Boutique</a></li>
                                <li class="nav-item"><a href="{{ route('login.clients') }}" class="nav-link">profil</a></li>
                                <li class="nav-item"><a href="" class="nav-link">Contact</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- End Header -->

        @yield('produits')
        @yield('commande')
        @yield('vedette')

        <!-- Start Product Timeing -->
        <section class="product-countdowning-area section-padding bg-dark">
            <div class="container">
                <div class="row countdowning">
                    <div class="col-md-5 col-sm-12 single_timeing">
                        <div class="timeing_product_img">
                            <img src="accueil/images/product/h2.png" alt="hot_product">
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 single_timeing">
                        <div class="countdown_area">
                            <div class="countdown">
                                <ul id="example" class="nav">
                                    <li class="single_countdown"><span class="days time">30</span>
                                        <p class="days_text time_text">Jours</p>
                                    </li>
                                    <li class="single_countdown"><span class="hours time">15</span>
                                        <p class="hours_text time_text">Heures</p>
                                    </li>
                                    <li class="single_countdown"><span class="minutes time">50</span>
                                        <p class="minutes_text time_text">Minutes</p>
                                    </li>
                                    <li class="single_countdown"><span class="seconds time ">19</span>
                                        <p class="seconds_text time_text">Secondes</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="countdown_text">
                                <h2>L'actualité de la semaine</h2>
                                <h5>Nouvelle collection jusqu'à 50% de réduction</h5>
                                <a href="#" class="btn color_1_bg">Acheter maintenant</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Product Timeing -->


        <!-- Start shop-services Area -->
        <section class="shop-services section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-3 col-sm-3 single-shop-service">
                        <div class="shop-service">
                            <i class="fa fa-dollar-sign"></i>
                            <h4>Argent liquide</h4>
                            <p>Remboursement</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 single-shop-service">
                        <div class="shop-service">
                            <i class="fa fa-truck-moving"></i>
                            <h4>Livraison gratuite</h4>
                            <p>Au dela de CFA 30.000</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 single-shop-service">
                        <div class="shop-service">
                            <i class="far fa-clock"></i>
                            <h4>Livraison rapide</h4>
                            <p>en 30 minutes</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 single-shop-service">
                        <div class="shop-service">
                            <i class="fa fa-sync"></i>
                            <h4>Retour libre</h4>
                            <p>Retour sous 30 jours</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End shop-services Area Area -->

        <!-- Start Footer Area -->
        <footer class="footer-area">
            <div class="container">
                <div class="footer row section-padding">
                    <!-- Single Footer -->
                    <div class="col-md-4 col-sm-6 single-footer">
                        <div class="footer-about ">
                            <h5 class="font-weight-bold">A propos</h5>
                            <div class="footer-text mt-3">
                                <p>Le e-commerce en un clic avec des avantages énormes</p>
                                <p><i class="fas fa-map-marker-alt"></i>Rue yark Lomé-Togo</p>
                                <p><a href="tell:+8801234567890"><i class="fa fa-phone-alt"></i>+228 91 34 05 87</a>
                                </p>
                                <p><a href="mailto:admin@gmail.com"><i class="fa fa-envelope"> </i>admin@gmail.com
                                    </a></p>
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer -->
                    <div class="col-md-2 col-sm-3 single-footer footer-pages">
                        <div class="footer-page">
                            <h5 class="font-weight-bold">Page</h5>
                            <div class="footer-text mt-3">
                                <ul class="p-0">
                                    {{-- <li><a href="index.html">Accueil</a></li> --}}
                                    <li><a href="about.html">A propos</a></li>
                                    <li><a href="contact.html">Contact</a></li>
                                    <li><a href="shop.html">Shop</a></li>
                                    {{-- <li><a href="cart.html">Cart</a></li> --}}
                                    <li><a href="{{ route('admin.connect.page') }}">Administrateur</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer -->
                    <div class="col-md-2 col-sm-3 single-footer footer-cats">
                        <div class="footer-cat ">
                            <h5 class="font-weight-bold">Categories</h5>
                            <div class="footer-text mt-3">
                                <ul class="p-0">
                                    <li><a href="#">Laptop</a></li>
                                    <li><a href="#">Smartphone</a></li>
                                    <li><a href="#">Watch</a></li>
                                    {{-- <li><a href="#">Sunglasses</a></li> --}}
                                    <li><a href="#">HeadPhone</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Single Footer -->
                    <div class="col-md-4 col-sm-8 single-footer subscriber-area">
                        <h5 class="font-weight-bold"> Newsletter souscription</h5>
                        <div class="footer-subscriber">
                            <div class="subscriber-text mt-3">
                                <p> Inscrivez-vous à notre lettre d'information et recevez 20 % de réduction sur votre
                                    premier achat</p>
                            </div>
                            <div class="subscriber-form mt-2">
                                <form method="POST">
                                    <input type="email" name="subscrib_email" placeholder="Tapez votre email"
                                        class="form-control">
                                    <input type="submit" name="subscrib_btn" class="btn color_1_bg"
                                        value="Souscrire">
                                </form>
                            </div>
                        </div>
                        <div class="footer-social mt-3">
                            <ul class="nav justify-content-around">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-copy">
                <div class="container">
                    <div class="copyright-text row justify-content-between align-items-center">
                        <div class="copy-text col-md-6 col-sm-8">
                            <p>&copy; All right reserved | espoir e-commerce <a href="#">BOUILI espoir</a></p>
                        </div>
                    
                    </div>

                </div>
            </div>
            <!-- Back to top btn -->
            <div class="backTOtop">
                <a href="javascript:void(0)" class="btn color_1_bg">
                    <i class="fas fa-chevron-up"></i>
                </a>
            </div>
        </footer>
        <!-- End Footer Area -->

    </div>
    <!-- JS Link -->
    <script src="{{ asset('acceuil/js/jquery.min.js') }}"></script>
    <script src="{{ asset('acceuil/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('acceuil/js/popper.min.js') }}"></script>
    <!-- Plugin -->
    <!-- countdown -->
    <script src="{{ asset('acceuil/vendor/jquery.countdown.min.js') }}"></script>
    <!-- Carousel -->
    <script src="{{ asset('acceuil/vendor/owl.carousel.min.js') }}"></script>
    <!-- mixitup -->
    <script src="acceuil/vendor/mixitup.min.js"></script>
    <script src="{{ asset('acceuil/js/script.js') }}"></script>
</body>

</html>
