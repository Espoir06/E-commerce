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
    
        <form action="{{route('modif.categorie.action', ['categorie'=>$categorie->id])}}" method="post">
            @csrf

        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="nomcategorie" name="libelle" value="{{ $categorie->libelle }}">
            <label for="nomcategorie">Nom Categorie</label>
        </div>
        <div class="form-floating mb-3">
            <input type="text" class="form-control" id="description" name="description" value="{{ $categorie->description }}">
            <label for="description">Description</label>
        </div>

        <button type="submit" class="btn btn-success">Modifier</button>

        </form>
    
@endsection