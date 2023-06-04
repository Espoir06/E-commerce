@extends('layouts.masteracceuil')

@section('produits')
    <!-- Start Top Product -->
    <section class="top_product_area section-padding">
        <div class="container">
            @if ($produits->count() == 0)
                <div class="alert alert-info" role="alert">
                    Aucun produit encore enrégistrez sur la plateforme.
                </div>
            @else
                <div class="product_area_heading section-heading">

                    <h2>Top Produits</h2>
                    <p>Nos produits dans le top 100 de ces derniers mois. faites confiance a notre expertise et nous vous
                        donnons le meilleur de nous.</p>
                </div>

                @if (session()->has('panier'))
                    <div class="alert alert-success">
                        {{ session('panier') }}
                    </div>
                @endif

                <div class="top_product row justify-content-center">
                    @foreach ($produits as $produit)
                        <!-- Single Product -->
                        <div class="col-lg-3 col-md-4 col-sm-6 single-product text-center">
                            <div class="product_img">
                                <a href="shopSingle.html" target="blank"><img
                                        src="{{ asset('produits/' . $produit->image) }}" alt="product_img"></a>
                                <div class="cart_overly_btn">
                                    <form action="" method="post">
                                        @csrf
                                        <a class="color_1_bg" href="{{ route('login.clients') }}"
                                            class="btn btn-warning">Ajouter au panier</a>
                                    </form>
                                </div>
                            </div>
                            <div class="product_text pt-2 pb-2">
                                <h4>{{ $produit->nomproduit }}</h4>
                                <p>
                                    <a href="#">laptop, </a>
                                    <a href="#"> phone,</a>
                                    <a href="#"> watch</a>
                                </p>
                                <p><span class="color_1">CFA {{ $produit->prixproduit }} </span><del></del></p>
                                <div class="product_rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                            <div class="product_viwe">
                                <a href="wishlist.html" title="Wishlist"><i class="far fa-heart"></i></a>
                                <a href="shopSingle.html" title="Viwe"><i class="far fa-eye"></i></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif

        </div>
    </section>
    <!-- End Top Product -->
@endsection

@section('vedette')
    <!-- Start featured Product -->
    <section class="featured_product_area section-padding">
        <div class="container">
            @if ($produits->count() == 0)
                <div class="alert alert-info" role="alert">
                    Aucun produit encore enrégistrez sur la plateforme.
                </div>
            @else
                <div class="featured_area_heading section-heading">
                    <h2>Produit vedette</h2>
                    <p>Nos produts phare depuis un certains moment, ne vous posez plus de questions. Commander !</p>
                </div>

                <!-- Features Single Row -->
                <div class="featured_product row justify-content-center">
                    <!-- Single Product -->

                    @foreach ($produitsvedettes as $produit)
                        <div class="col-lg-4 col-md-4 col-sm-6 single-product text-center mix watch">
                            <div class="product_img">
                                <a href="shopSingle.html" target="blank"><img
                                        src="{{ asset('produits/' . $produit->image) }}" alt="product_img"></a>
                                <div class="cart_overly_btn">
                                    <div class="overly">
                                        <a href="{{ route('login.clients') }}" class="color_1_bg">Ajouter au panier</a>
                                    </div>
                                </div>
                            </div>
                            <div class="product_text pt-2 pb-2">
                                <h4>{{ $produit->nomproduit }}</h4>
                                <p>
                                    <a href="#">laptop, </a>
                                    <a href="#"> phone,</a>
                                    <a href="#"> watch</a>
                                </p>
                                <p><span class="color_1">CFA {{ $produit->prixproduit }}</span><del></del></p>
                                <div class="product_rating">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                            </div>
                            <div class="product_viwe">
                                <a href="wishlist.html" title="Wishlist"><i class="far fa-heart"></i></a>
                                <a href="shopSingle.html" title="Viwe"><i class="far fa-eye"></i></a>

                            </div>
                        </div>
                    @endforeach
            @endif
        </div>


        </div>
        </div>
    </section>
    <!-- End featured Product -->
@endsection
