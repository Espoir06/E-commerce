@extends('layouts.masterAdmin')

@section('contenu')

@if (session()->has('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Libelle</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $categorie)
                <tr>
                    <th scope="row">{{ $loop->index + 1 }}</th>
                    <td>{{ $categorie->libelle }}</td>
                    <td>{{ $categorie->description }}</td>
                    <td>
                        <a href="{{route('mofifier.categorie.page', ['categorie'=>$categorie->id])}}" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                        <a href="#" class="btn btn-danger"
                            onclick="if(confirm('voulez vous vraiment supprimer cet element?')){
              document.getElementById('form-{{ $categorie->id }}').submit()}"
                            class="btn btn-danger"><i class="fas fa-trash"></i></a>
                        <form id="form-{{ $categorie->id }}"
                            action="{{ route('supprimer.categorie', ['categorie' => $categorie->id]) }}" method="post">
                            @csrf
                            <input type="hidden" name="_method" value="delete">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


@endsection
