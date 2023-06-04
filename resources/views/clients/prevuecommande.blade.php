@extends('layouts.masterClients')

@section('commande')
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="card mt-3 mb-3" style="">
        <div class="row g-0">
            <div class="col">
                <form action="{{ route('passer.commande', ['produit_id' => $leproduit->id]) }}" method="POST">
                    @csrf
                    <div class="col-md-8">
                        <img src="{{ asset('produits/' . $leproduit->image) }}" class="img-fluid rounded-start"
                            alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h3 class="card-title">{{ $leproduit->nomproduit }}</h3>
                            <h4 class="card-text">CFA {{ $leproduit->prixproduit }}</h4>
                            <p class="card-text"><small class="text-muted">{{ $leproduit->description }}</small></p>
                            <input class="form-control mb-3 w-" type="number" name="quantite" id="quantite"
                                oninput="updateTotal()" placeholder="saisir la quantité">
                            <input type="text" name="adresselivraison" class="form-control w- mb-3" placeholder="Veuillez saisir votre adresse">
                            <input type="text" name="numerotel" class="form-control w- mb-3" placeholder="Veuillez saisir votre numéro de téléphone">
                            <input class="form-control w- " id="total" placeholder="Le total" readonly>
                            <input type="hidden" class="form-control w-50 " name="proprietaire" id="total"
                                value="{{ $leproduit->proprietaire_id}}">
                            <button class="btn btn-warning mt-3">Commander</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col mt-3">
                <h3>Description du produit</h3><br>
                <br>
                <br>
                <marquee behavior="alternate" direction="right">{{ $leproduit->description }}</marquee><br><br>
                <marquee behavior="scroll" direction="right">{{ $leproduit->description }}</marquee><br><br>
            </div>
        </div>
    </div>


    <script>
        function updateTotal() {
            var quantite = document.getElementById("quantite").value;
            var prix = {{ $leproduit->prixproduit }};
            var total = quantite * prix;
            document.getElementById("total").value = total;
        }
    </script>
@endsection
