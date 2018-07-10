@extends('layouts.master')
@section('title', 'Mensajes')
@section('content')

<div class="container">
  <div class="row">
      <div class="col-8 mx-auto">
        <div class="card">
            <form class="" action="chats/store" method="post">
              @csrf
              <div class="card-body bg-light">
                <textarea id="text-post" class="form-control border-0" name="text_post" placeholder="Escribi tu mensaje"></textarea>
              </div>
              <div class="card-footer bg-light">
                <button class="btn btn-primary" id="create-status">Enviar</button>
              </div>
            </form>
        </div>
      </div>
  </div>
  <div class="row mt-3">
    <div class="col-8 mx-auto card border-0">
      <h4 class="mx-auto">Mensajes anteriores</h4>
      <div class="col-8 mx-auto">
        <div id="msj"></div>
      </div>
    </div>
  </div>
</div>

@endsection
