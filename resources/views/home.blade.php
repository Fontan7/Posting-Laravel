@extends('layouts.master')

@section('title')
   Home
@endsection

@section('content')


<div class="container">
  <div class="row">
      <div class="col-8 mx-auto">
        <div class="card">
            <form class="" action="post/store" method="post" enctype="multipart/form-data">
              @csrf
              <div class="card-body bg-light">
                <textarea id="text-post" class="form-control border-0" name="text_post" placeholder="¿Que estás pensando?"></textarea>
              </div>
              <div class="card-footer bg-light">
                <div>
                  <label for="img_post">Ingresar una Imagen</label>
                  <input class="hidden" name="img_post" id='img_post' type="file">
                </div>
                <div>
                  <label>Seleccione redes a previsualizar:  </label>
                  @foreach ($networks as $network)
                    <input onclick="netClick(this)" type="checkbox" name="net{{$network->id}}" value="{{$network->id}}">{{$network->description}}</input>
                  @endforeach
                </div>
                <button class="btn btn-primary" id="create-status">Postear</button>
              </div>
            </form>
        </div>
      </div>
  </div>
</div>
<br>
  <div class="col-10 mx-auto card border-0">
    <h4 class="mx-auto">Previsualizacion de posteos</h4>

    <div class="col-8 mx-auto">
      <div>
          @foreach ($networks as $network)
          <div class="card-body d-flex flex-column card border-1 shadow-sm" id="back-post">
            <div class="d-flex align-items-center" >
              <img class="rounded-circle mr-3" width="40px" src="https://upload.wikimedia.org/wikipedia/commons/1/1e/Default-avatar.jpg">
              <div class="">
                <h5 class="mb-1 shadow-sm"></h5>
                <div class="small text-muted">Hace una hora</div>
              </div>
            </div>
            <p class="card-text text-secondary">hola</p>

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

<script  type="text/javascript"  src="js/preview.js"></script>

@endsection
