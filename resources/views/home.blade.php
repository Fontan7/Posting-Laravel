@extends('layouts.master')

@section('title')
   Home
@endsection

@section('content')
<div class="container">
  <div class="row">
      <div class="col-md-10 mx-auto">
        <div class="card">
            <form class="" action="post/store" method="post" enctype="multipart/form-data">
              @csrf
              <div class="card-body bg-light">
                <textarea id="text-post" class="form-control border-0" name="text_post" placeholder="¿Que estás pensando?"></textarea>
              </div>
              <div class="card-footer bg-light">
                <div>
                  <label class="btn btn-primary" for="img_post">Ingresar una Imagen</label>
                  <input class="hidden" onchange="readURL(this); cambiarFoto(this)" src="#" name="img_post" id='img_post' type="file" accept="image/*"></input>
                </div>
                <div>
                  <p>Seleccione redes a previsualizar:  </p>
                  <div class="nets">
                  @foreach ($networks as $network)
                  <div >
                    <input onclick="netClick(this)" type="checkbox" name="{{$network->description}}" value="{{$network->id}}" usenv="{{ Auth::user()->name }}"></input>
                    <label for="">{{$network->description}}</label>
                  </div>
                  @endforeach
                  </div>
                </div>
                <button class="btn btn-primary" id="create-status">Postear</button>
              </div>

            </form>
        </div>
      </div>
  </div>

  <div class="col-md-10 mx-auto card border-0 mt-4">
    <h4 class="mx-auto">Previsualizacion de posteos</h4>
    <div class="col-md-10 mx-auto">
      <div id="red">
        <img id="foto3" src="#" alt="your image" style="display:none">
      </div>
    </div>
  </div>
</div>
@endsection
@section('addJs')
  <script  type="text/javascript"  src="js/preview.js"></script>
@endsection
