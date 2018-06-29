@extends('layouts.master')

@section('title')
   Home
@endsection

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              <div class="container">
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="row">
                  <div class="col-8 mx-auto">
                    <div class="card">
                      <form class="" action="post/preview" method="post" enctype="multipart/form-data">
                            @csrf
                          <div class="card-body bg-light">
                            <textarea class="form-control border-0" name="text_post" placeholder="¿Que estás pensando?"></textarea>
                          </div>
                          <br>
                          <div class="card-body bg-light">
                          <label for="img_post" > Ingresar una Imagen</label>
                          <input class="hidden" name="img_post" id='img_post' type="file">
                        </div>
                          <div class="card-body bg-light">
                            <label>Seleccione redes a previsualizar:  </label>
                            @foreach ($networks as $network)
                              <input type="checkbox" name="net{{$network->id}}" value="{{$network->id}}">{{$network->description}}</input>
                            @endforeach
                          </div>
                          <div class="card-footer bg-light">
                            <button class="btn btn-primary" id="create-status">Previsualizar</button>
                          </div>
                        </form>
                      </div>
                    </div>
                </div>

              </div>
        </div>
    </div>

    <div class="">
      <br><h4>Previsualizar posteos realizados</h4><br>

      <p>Aca van las previsualizaciones</p>

      <div class="row">
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <div class="caption">
              <h3>Posting</h3>
              @foreach ($posts as $post)
                <p>{{ $post->text_post }}</p>
              @endforeach
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <div class="caption">
              <h3>Posting</h3>
              <p> Aca puse $posts->text_post y tira error</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="thumbnail">
            <div class="caption">
              <h3>Posting</h3>
              <p> Aca puse $posts->text_post y tira error</p>
            </div>
          </div>
        </div>
      </div>

      </div>
</div>
@endsection
