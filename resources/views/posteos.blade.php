@extends('layouts.master')

@section('title')
   Posteos
@endsection

@section('content')

<div class="col-md-10 mx-auto card border-0">
  <h4 class="mx-auto my-3">Posteos realizados</h4>
  <div class="col-md-10 mx-auto mt-1">

    @foreach ($posts as $post)
      <div class="card-body d-flex flex-column card border-1 shadow-sm">
        <div class="d-flex align-items-center">
          <img class="rounded-circle mr-3" width="40px" src="https://upload.wikimedia.org/wikipedia/commons/1/1e/Default-avatar.jpg">
          <div class="">
            <h5 class="mb-1 shadow-sm">{{ Auth::user()->name }}</h5>
            <div class="small text-muted">Hace una hora</div>
          </div>
        </div>
        <p class="card-text text-secondary" >{{ $post->text_post }}</p>
          <div class="imgPost">
            @foreach ($post->images as $img)
              <img class="img_post" src="uploads/{{$img->src}}" alt="">
            @endforeach
          </div>
        </div>
      <div class="card card-footer border-1 p-1 d-flex mb-3">
        <div class="nets">
        <p class="titPre">Previsualizaciones: </p>
        @foreach ($post->networks as $network)
        <div >
            <p>{{$network->description}}</p>
        </div>
        @endforeach

        <form method="post"  action="post/{{$post->id}}/destroy">
        @csrf
          <button type="submit" name="borrar" class="btn btn-secondary mt-0 float-right">
            <i>Borrar Post</i>
          </button>
          </form>
      </div>
    </div>
    @endforeach

  <nav aria-label="Page navigation example" class="pagination justify-content-center col-md-10 mx-auto">
  {{ $posts->links() }}
  </nav>
</div>
</div>

@endsection
