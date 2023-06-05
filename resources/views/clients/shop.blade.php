@extends("layouts.masterClients")

@section('produits')

<div class="product_area_heading section-heading">
    <h2>Tous nos Produits</h2>
    <p>Découvrez nos produits de qualité, conçus pour vous offrir une expérience exceptionnelle. Laissez-vous séduire par l'excellence à portée de main.</p>
</div>
<div class="top_product row justify-content-center">
    @foreach ($produits as $produit)
        <!-- Single Product -->
        <div class="col-lg-3 col-md-4 col-sm-6 single-product text-center">
            <div class="product_img">
                <a href="shopSingle.html" target="blank"><img src="{{ asset('produits/' . $produit->image) }}"
                        alt="product_img"></a>
                <div class="cart_overly_btn">

                    <form action="" method="post">
                        {{-- @csrf
                        <input type="hidden" name="produit_id" value="{{ $produit->id }}">
                        <input type="hidden" name="libelle" value="{{ $produit->nomproduit }}">
                        <input type="number" name="quantity" value="1" > <!-- Champs pour la quantité --> --}}
                        @auth
                        <a class="color_1_bg" href="{{ route('prevue.commande', ['produit_id' => $produit->id]) }}" class="btn btn-warning">Ajouter au panier</a>
                        @else
                        <a class="color_1_bg" href="{{ route('login.clients') }}" class="btn btn-warning">Ajouter au panier</a>
                        @endauth
                    </form>
                    {{-- <div class="overly">
                        <a href="" class="color_1_bg">Ajouter au panier</a>
                    </div> --}}
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

@endsection
