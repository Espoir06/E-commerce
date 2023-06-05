@extends('layouts.masterClients')

@section('contenu')
    <div class="mesinfos mb-3">
        <div class="card">
            <div class="card-header">
                <div class="card-tools">
                    <h5>  Nom :  {{ $clientinfo->nom }}</h5>
                    <h5>   Email :   {{ $clientinfo->email }}</h5>

                </div>
            </div>
            <div class="card-body collapse in"> </div>
        </div>
    </div>
    Changer votre mot de passe
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    @if (session()->has('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
            {{ $error }}
        </div>
    @endforeach

    <form action="{{ route('changer.pass.client', ['client' => auth()->user()->id]) }}" method="post">
        @csrf
        <div class="form-floating mb-3">
            <input type="password" class="form-control" id="motdepasse" name="motdepasse">
            <label for="motdepasse">Nouveau mot de passe</label>
        </div>
        <div class="form-floating mb-3">
            <input type="password" class="form-control" id="confirmmotdepasse" name="confirmmotdepasse">
            <label for="confirmmotdepasse">Confirmer mot de passe</label>
        </div>
        <button type="submit" class="btn btn-warning">Enregistrez</button>
    </form>

@endsection
