@extends('layouts.master')

@section('title')
   Posteos
@endsection

@section('content')

<div class="col-10 mx-auto card border-0">
  <h4 class="mx-auto">Posteos realizados</h4>

  <div class="col-8 mx-auto">
    <div class="">
        @foreach ($posts as $post)
        <div class="card-body d-flex flex-column card border-1 shadow-sm bg-light ">
          <div class="d-flex align-items-center">
            <img class="rounded-circle mr-3" width="40px" src="https://upload.wikimedia.org/wikipedia/commons/1/1e/Default-avatar.jpg">
            <div class="">
              <h5 class="mb-1 shadow-sm">{{ Auth::user()->name }}</h5>
              <div class="small text-muted">Hace una hora</div>
            </div>
          </div>
          <p class="card-text text-secondary" >{{ $post->text_post }}</p>

        </div>
        <div class="card card-footer border-1 p-1 d-flex mb-3">
          <i class="far fa-thumbs-up text-secondary p-2 d-flex justify-content-between align-items-center"></i>
        </div>

      @endforeach
      {{ $posts->links() }}

    </div>
  </div>
</div>
@endsection
