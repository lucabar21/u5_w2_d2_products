@extends('templates.template')
@section('title','Dettagli prodotto')

@section('main-content')

@section('main-content')
<div class="card">
    <img src="https://placedog.net/{{$id}}" class="card-img-top" alt="bg-img">
    <div class="card-body">
      <h5 class="card-title">Prodotto {{$id}}</h5>
      <p class="card-text">Bello sto prodotto</p>
    </div>
  </div>
  @endsection