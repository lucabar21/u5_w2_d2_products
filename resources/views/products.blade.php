@extends('templates.template')
@section('title','Prodotti')

@section('main-content')
<div class="card">
    <img src="https://placedog.net/499" class="card-img-top" alt="bg-img">
    <div class="card-body">
      <h5 class="card-title">Prodotto 1</h5>
      <p class="card-text">Bello sto prodotto</p>
    </div>
  </div>
  @endsection

  @section('secondary-content')
<div class="card">
    <img src="https://placedog.net/498" class="card-img-top" alt="bg-img">
    <div class="card-body">
      <h5 class="card-title">Prodotto 2</h5>
      <p class="card-text">Questo è meglio però!</p>
    </div>
  </div>
  @endsection