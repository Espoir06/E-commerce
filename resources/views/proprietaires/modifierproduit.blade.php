@extends('layouts.masterProprietaire')

@section('contenu')

@if (session()->has('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif
@foreach($errors->all() as $error)
    <div class="alert alert-danger">
        {{$error}}
    </div>
@endforeach
    
        <form action="{{route('modifier.produit.script', ['produit'=>$produit->id])}}" method="post" enctype="multipart/form-data">
            @csrf

        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="nomproduit" name="nomproduit" value="{{ $produit->nomproduit }}">
            <label for="nomproduit">Nom produit</label>
        </div>
        <div class="form-floating mb-3">
            <select name="categorie_id" id="categorie" class="form-select">
                <option value="" selected>Veuillez choisir la catégorie</option>
                @foreach ($categories as $categorie)
                @if ($categorie->id == $produit->categorie_id)
                <option value="{{$categorie->id}}" selected> {{$categorie->libelle}} </option> 
                @endif
                <option value="{{$categorie->id}}"> {{$categorie->libelle}} </option> 
                @endforeach
            </select>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="prixproduit" name="prixproduit" value="{{ $produit->prixproduit }}">
            <label for="prixproduit">Prix produit</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="quantite" name="quantite" value="{{ $produit->quantite }}">
            <label for="quantite">Quantite produit</label>
        </div>
        <div class="form-floating mb-3">
            <textarea type="text" class="form-control" id="description" name="description" value="{{$produit->description}}">{{ $produit->description}}</textarea>
            <label for="description">Description</label>
        </div>
        <div class="form-floating mb-3">
            <input type="file" class="form-control" id="image" name="image" value="{{ $produit->image}}">
            <label for="image">Image</label>
        </div>

        <button type="submit" class="btn btn-success">Modifier le produit</button>

        </form>
    
@endsection