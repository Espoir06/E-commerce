@extends('layouts.masterProprietaire')

@section('contenu')
    @php
        //  dd(Auth::guard('proprietaire'))
    @endphp
    @if (session()->has('success'))
        <div class="alert alert-success">{{ session()->get('success') }}</div>
    @endif
    @if (session()->has('error'))
        <div class="alert alert-danger">{{ session()->get('error') }}</div>
    @endif
    @if ($commandes->count() == 0)
        <div class="alert alert-info" role="alert">
            Aucune commande déjà valider pour le moment.
        </div>
    @else
        <table class="table" style="font-size: 15px">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Libelle</th>
                    <th scope="col">Nom client</th>
                    <th scope="col">Adresse client</th>
                    <th scope="col">Téléphone client</th>
                    <th scope="col">Quantité</th>
                    <th scope="col">Total</th>
                    <th scope="col">Date commande</th>
                    <th scope="col">Etat</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($commandes as $commande)
                    <tr>
                        <th scope="row">{{ $loop->index + 1 }}</th>
                        <td>{{ $commande->produit->nomproduit }}</td>
                        <td>{{ $commande->client->nom }}</td>
                        <td>{{ $commande->adresselivraison }}</td>
                        <td>{{ $commande->numerotel}}</td>
                        <td>{{ $commande->quantite }}</td>
                        <td>{{ $commande->total }}</td>
                        <td>{{ $commande->created_at }}</td>
                        <td
                            @if ($commande->etat == 'annuler') class="bg-danger" @elseif($commande->etat == 'valider') class="bg-success"  @elseif($commande->etat == 'enattente') class="bg-warning" @endif>
                            {{ $commande->etat }}
                        </td>
                        {{-- <td>
                        <form action="{{ route('valider.commande.client', ['commande_id' => $commande->id]) }}"
                            method="post">
                            @csrf
                            <button class="btn btn-primary">Valider</button>
                        </form>
                        <form action="{{ route('annuler.commande.client', ['commande_id' => $commande->id]) }}"
                            method="post">
                            @csrf
                            <button class="btn btn-danger">Annuler</button>
                        </form>
                    </td> --}}
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection
