@extends('layouts.masterAdmin')

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

        <form action="{{ route('ajout.prop.script') }}" method="post">
            @csrf

        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="nom" name="nom">
            <label for="nom">Nom Proprietaire</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="prenom" name="prenom">
            <label for="prenom">Prenom propriétaire</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="email" name="email">
            <label for="email">Email propriétaire</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="motdepasse" name="motdepasse">
            <label for="motdepasse">Mot de passe</label>
        </div>

        <button type="submit" class="btn btn-success">Enregistrez</button>

        </form>
    
@endsection