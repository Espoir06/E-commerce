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
                            <form action="{{ route('deconnection.client') }}" method="post">
                                @csrf
                                <li><button><i class="fas fa-sign-in-alt"></i>Deconnexion</button></li>
                            </form>
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
                            </div>
                        </div>

                        <div class="col-md-3 wishlist-area">
                            <div class="header-cart-count user-account">
                                <a href="{{ route('login.clients') }}"><i class="fa fa-user-circle"></i><span>Mon
                                        compte</span></a>
                            </div>
                            <div class="header-wishlist header-cart-count ">
                                <a href="wishlist.html"><i class="far fa-heart"><span>3</span></i></a>
                            </div>
                            <!-- header-cart -->
                            <div class="header-cart header-cart-count ">
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#h_cartModal"><i
                                        class="fas fa-shopping-bag"><span>3</span></i></a>
                            </div>
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
                                <li class="nav-item"><a href="{{ route('index.boutique.page') }}"
                                        class="nav-link">Accueil</a></li>
                                <li class="nav-item"><a href="{{ route('shop.page') }}" class="nav-link">Boutique</a>
                                </li>
                                <li class="nav-item"><a
                                        href="{{ route('affiche.panier.client', ['user_id' => auth()->user()->id]) }}"
                                        class="nav-link">Mon panier</a></li>
                                <li class="nav-item"><a href="{{ route('profil.du.client') }}"
                                        class="nav-link">Profil</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- End Header -->

        <!-- Start Top Product -->
        <section class="top_product_area section-padding">
            <div class="container">

                <div class="top_product row justify-content-center">
                    <!-- les produits a afficher -->
                    @yield('produits')
                    @yield('vedette')
                    @yield('contenu')
                    @yield('commande')
                </div>
            </div>
        </section>
        <!-- End Top Product -->



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
                            <h4>Free Delivery</h4>
                            <p>Orders over $300</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3 single-shop-service">
                        <div class="shop-service">
                            <i class="far fa-clock"></i>
                            <h4>Livraison rapide</h4>
                            <p>30 minute deliveriy</p>
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
                                    <li><a href="account.html">Compte</a></li>
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
                                    <input type="email" name="subscrib_email" placeholder="Enter Your Email"
                                        class="form-control">
                                    <input type="submit" name="subscrib_btn" class="btn color_1_bg"
                                        value="Subscribe">
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
                        <div class="payment-card col-md-6 col-sm-8">
                            <div class="card-img">
                                <a href="checkout.html"><img src="assets/images/payment_card/pay.jpg"
                                        alt="payment-card"></a>
                            </div>
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
