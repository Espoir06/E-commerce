@extends('layouts.masterClients')

@section('contenu')
    <div class="product_area_heading section-heading">
        <h2>Mes commandes</h2>
        <marquee behavior="" direction="">Pour toute commande effectuer vous serez contactez par le fournisseur pour etre livré</marquee>
        {{-- <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas alias nulla ducimus magnam inquibusdam.</p> --}}
    </div>
    @if ($mescommandes->count() == 0)
        <div class="alert alert-info" role="alert">
            Vous n'avez passer aucune commande pour le moment.
        </div>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">N°</th>
                    <th scope="col">Nom produit</th>
                    <th scope="col">Prix produit</th>
                    <th scope="col">Quantité</th>
                    <th scope="col">Total</th>
                    <th scope="col">Statut</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($mescommandes as $commande)
                    <tr>
                        <th scope="row">{{ $loop->index + 1 }}</th>
                        <td>{{ $commande->produit->nomproduit }}</td>
                        <td>{{ $commande->produit->prixproduit }}</td>
                        <td>{{ $commande->quantite }}</td>
                        <td>{{ $commande->total }}</td>
                        <td>
                            <p
                                @if ($commande->etat == 'annuler') class="bg-danger text-light" @elseif($commande->etat == 'valider') class="bg-success text-light"  @elseif($commande->etat == 'enattente') class="bg-warning" @endif>
                                {{ $commande->etat }}</p>
                        </td>
                        <td>
                            <a href="#" onclick="if(confirm('voulez vous vraiment annuler cette commande?')){
                              document.getElementById('form-{{ $commande->id }}').submit()}" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                            <form action=""  id="form-{{ $commande->id }}">
                              @csrf
                              <input type="hidden" name="_method" value="delete">
                            </form>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
    @endif
@endsection
