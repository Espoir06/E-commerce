@extends('layouts.masterProprietaire')

@section('contenu')

    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    @if ($mesproduits->count() == 0)
        <div class="alert alert-info" role="alert">
            Vous n'avez enrégistrez aucun produit pour le moment.
        </div>
    @else
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">N°</th>
                    <th scope="col">Nom produit</th>
                    <th scope="col">Prix produit</th>
                    <th scope="col">Quantité</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mesproduits as $produit)
                    <tr>
                        <th scope="row">{{ $loop->index + 1 }}</th>
                        <td>{{ $produit->nomproduit }}</td>
                        <td>{{ $produit->prixproduit }} CFA</td>
                        <td>{{ $produit->quantite }}</td>
                        <td>
                            <a href="{{ route('modifier.produit.page', ['produit' => $produit->id]) }}"
                                class="btn btn-primary"><i class="fas fa-edit"></i></a>
                            <a href="#"
                                onclick="if(confirm('voulez vous vraiment supprimer cet element?')){
              document.getElementById('form-{{ $produit->id }}').submit()}"
                                class="btn btn-danger"><i class="fas fa-trash"></i></a>
                            <form action="{{ route('supprimer.produit', ['produit' => $produit->id]) }}"
                                id="form-{{ $produit->id }}" method="post">
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
