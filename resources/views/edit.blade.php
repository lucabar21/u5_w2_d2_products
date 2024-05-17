@extends('templates.template')

@section('title','Modifica prodotto')

@section('main-content')
<form action="" method="">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nome prodotto</label>
        <input type="text" class="form-control" id="exampleFormControlInput1">
      </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Prezzo</label>
        <input type="number" class="form-control" id="exampleFormControlInput1">
      </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Foto del prodotto</label>
        <input type="src" class="form-control" id="exampleFormControlInput1" placeholder="Inserisci il link qui">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Descrizione prodotto</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
      </div>
      <button class="btn btn-success">Conferma</button>
</form>
@endsection
@section('secondary-content')
<div class="card">
    <img src="https://placedog.net/{{$id}}" class="card-img-top" alt="bg-img">
    <div class="card-body">
      <h5 class="card-title">Prodotto {{$id}}</h5>
      <p class="card-text">Molto bello sto prodotto</p>
    </div>
  </div>
  @endsection

