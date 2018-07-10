@extends('layouts.master')
@section('title', 'Mensajes')
@section('content')

<div class="container">
  <div class="row">
      <div class="col-8 mx-auto">
        <div class="card">
            <form class="" action="store" method="post">
              @csrf
              <div class="card-body bg-light">
                <textarea id="text_chat" class="form-control border-0" name="text_chat" placeholder="Escribi tu mensaje"></textarea>
              </div>
              <div class="card-footer bg-light">
                <button class="btn btn-primary" id="create-mesagge">Enviar</button>
              </div>
            </form>
        </div>
      </div>
  </div>
  <div class="row mt-3">
    <div class="col-8 mx-auto card border-0">
      <h4 class="mx-auto">Mensajes anteriores</h4>
      <div class="col-8 mx-auto">
        <div class="">
          @foreach ($chats as $chat)
          <div class="card-body d-flex flex-column card border-1 shadow-sm bg-light ">
            <div class="d-flex align-items-center">
              <img class="rounded-circle mr-3" width="40px" src="https://upload.wikimedia.org/wikipedia/commons/1/1e/Default-avatar.jpg">
              <div class="">
                <h5 class="mb-1 shadow-sm">{{ Auth::user()->name }}</h5>
                <div class="small text-muted">Hace una hora</div>
              </div>
            </div>
            <p class="card-text text-secondary" >{{ $chat->text_chat }}</p>

          </div>
          <div class="card card-footer border-1 p-1 d-flex mb-3">
            <i class="far fa-thumbs-up text-secondary p-2 d-flex justify-content-between align-items-center"></i>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
