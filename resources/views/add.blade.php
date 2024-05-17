@extends('templates.template')

@section('title','Modifica prodotto')

@section('main-content')
<form action="" method="post">
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