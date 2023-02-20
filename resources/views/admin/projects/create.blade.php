@extends('layouts.admin')

@section('content')
<div class="container">
  <form class="pt-3" action="{{ route ("admin.projects.store") }}" method="POST"> @csrf
  <div class="form-group row p-3">
    <label for="title" class="col-sm-2 col-form-label fw-bold">Titolo</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="title" placeholder="Inserisci il titolo del progetto" name="title" value="{{ old('title') }}">
    </div>
  </div>
  <div class="form-group row p-3">
    <label for="description" class="col-sm-2 col-form-label fw-bold">Descrizione</label>
    <div class="col-sm-10">
      <textarea name="description" cols="30" rows="5" type="text" class="form-control" id="description" placeholder="Inserisci la descrizione">{{ old('description') }}</textarea>
    </div>
  </div>
  <div class="form-group row p-3">
    <label for="category" class="col-sm-2 col-form-label fw-bold">Categoria</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="category" placeholder="Inserisci la categoria" name="category" value="{{ old('category') }}">
    </div>
  </div>
  <div class="form-group row p-3">
    <label for="year" class="col-sm-2 col-form-label fw-bold">Anno</label>
    <div class="col-sm-10">
      <input type="number" min="2010" max="2023" step="1" class="form-control" id="year" placeholder="Inserisci l'anno di creazione" name="year" value="{{ old('year') }}">
    </div>
  </div>
  <div class="form-group row p-3">
    <label for="technology_used" class="col-sm-2 col-form-label fw-bold">Tecnologia Usata</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="technology_used" placeholder="Inserisci che strumenti hai utilizzato" name="technology_used" value="{{ old('technology_used') }}">
    </div>
  </div>
  <div class="form-group row p-3">
    <label for="thumb" class="col-sm-2 col-form-label fw-bold">Immagine</label>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="thumb" placeholder="Inserisci un link per la tua immagine" name="thumb" value="{{ old('thumb') }}">
    </div>
   {{--  <label for="date" class="col-sm-1 col-form-label fw-bold">Data</label>
    <div class="col-sm-4">
      <input type="date" class="form-control" id="date" placeholder="Inserisci la data d'inserimento progetto" name="date" value="{{ old('date') }}">
    </div> --}}
  </div>
  <div class="form-group row p-3">
    <div class="col-sm-12">
      <button type="submit" class="btn btn-primary">Salva</button>
    </div>
  </div>
</form>

</div>

@endsection