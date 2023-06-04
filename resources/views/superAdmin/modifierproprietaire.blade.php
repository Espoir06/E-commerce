@extends('layouts.masterAdmin')

@section('contenu')

@if (session()->has('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif


        <form action="{{ route('modif.proprietaire.action', ['proprietaire'=>$proprietaire->id]) }}" method="post">
            @csrf

        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="nom" name="nom" value="{{ $proprietaire->nomprop }}">
            <label for="nom">Nom Proprietaire</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="prenom" name="prenom" value="{{ $proprietaire->prenomprop }}">
            <label for="prenom">Prenom propriétaire</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="email" name="email" value="{{ $proprietaire->email }}">
            <label for="email">Email propriétaire</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="motdepasse" name="motdepasse" placeholder="saisissez a nouveau le mdp">
            <label for="motdepasse">Mot de passe</label>
        </div>

        <button type="submit" class="btn btn-success">Enregistrez</button>

        </form>
    
@endsection