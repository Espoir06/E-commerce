@extends('layouts.masteracceuil')

@section('contenu')

<section class="product-about-area section-padding">
    <div class="container">
        <div class="product-about row align-items-center justify-content-between">
            <div class="col-md-6 col-sm-6 single-product-about">
                <div class="about-text ">
                    <h3>TechMarketHub </h3>
                    <p>TechMarketHub est un site  a l image de coin afrique invitant l ensemble des vendeur de puvoir avoir un compte proprietaire et pouvoir vendre leurs produits.techmarkethub est en outre un site publiblicitaire pour les autres  vendeur </p>
                    <p>Nous n avons pas de limite sur techmarkethub vous pourez disposer de  toutes sorte de produits notament des produits electroniques et plus en encore. avec techmarkethub acheter plus que des produits acheter de la qualiter</p>
                    <a href="{{ route('login.clients') }}" class="btn color_1_bg mt-3">shop now</a>
                </div>
            </div>
            <div class="col-md-5 col-sm-6 single-product-about">
                <div class="about-product-img">
                    <img src="logo.png" alt="product_about">
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
