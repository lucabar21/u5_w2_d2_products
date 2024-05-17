@extends('templates.template')
@section('title','Contatti')

@section('main-content')
<h2>Contattaci</h2>
<form action="" method="post">
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Nome</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
      </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Indirizzo Email</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Dicci qualcosa</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <button class="btn btn-primary">Invia</button>
</form>
  @endsection

