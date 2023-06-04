@extends('layouts.masterAdmin')

@section('contenu')

@if(session()->has('success'))
  <div class="alert alert-success">
    {{session()->get('success')}}
  </div>
@endif
@if(session()->has('suprimer'))
  <div class="alert alert-success">
    {{session()->get('suprimer')}}
  </div>
@endif

@if($proprietaires->count() == 0)
<div class="alert alert-info" role="alert">
  Aucun proprietaire n'a été inscrit pour le moment.
</div>
@else
<table class="table" id="table" style="font-size: 14px">
    <thead>
      <tr>
        <th scope="col">N°</th>
        <th scope="col">Nom</th>
        <th scope="col">Prenom</th>
        <th scope="col">Email</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach($proprietaires as $proprietaire)
      <tr>
        <th scope="row">{{$loop->index+1}}</th>
        <td>{{$proprietaire->nomprop}}</td>
        <td>{{$proprietaire->prenomprop}}</td>
        <td>{{$proprietaire->email}}</td>
        <td>
          <a href="{{ route('modif.proprietaire.page', ['proprietaire'=>$proprietaire->id]) }}" class="btn btn-info" style="font-size: 10px"><i class="fa fa-edit"></i></a>
          <a href="#" style="font-size: 10px" class="btn btn-danger" onclick="if(confirm('voulez vous vraiment supprimer cet étudiant?')){
            document.getElementById('form-').submit()}"><i class="fa fa-trash"></i></a>

          <form action="" id="form-" method="post">
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

@push('scripts')
    <script src="{{asset('datatable/datatables.min.js')}}"></script>
    <script>
      $(document).ready( function () {
        $('#table').DataTable();
      } );
    </script>
@endpush