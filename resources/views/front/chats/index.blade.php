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
      <h4 class="mx-auto mt-3 mb-3">Mensajes anteriores</h4>
      <div class="col-12 mx-auto">
        <div class="">
          @foreach ($chats as $chat)
          <div class="card-body d-flex flex-column card border-1 shadow-sm bg-light mb-3">
            <div class="d-flex align-items-center ">
              <img class="rounded-circle mr-3" width="60px" src="https://upload.wikimedia.org/wikipedia/commons/1/1e/Default-avatar.jpg">
              <div class="">
                <h5 class="mb-1 shadow-sm">De: {{ Auth::user()->name }}</h5>
                <h5 class="mb-1 shadow-sm">Para: {{ $chat->user_dst }}</h5>
                <div class="small text-muted">Hace una hora</div>
              </div>
            </div>
            <p class="card-text text-secondary">{{ $chat->text_chat }}</p>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
