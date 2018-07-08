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
                  <input onchange="readURL(this)" src="#" class="hidden"  name="img_post" id='img_post' type="file" accept="image/*">
                </div>
                <div>
                  <label>Seleccione redes a previsualizar:  </label>
                  @foreach ($networks as $network)
                    <input  onclick="netClick(this)" type="checkbox" name="{{$network->description}}" value="{{$network->id}}" usenv="{{ Auth::user()->name }}">{{$network->description}}</input>
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
  <div class="col-8 mx-auto card border-0">
    <h4 class="mx-auto">Previsualizacion de posteos</h4>

    <div class="col-8 mx-auto">
      <div id="red">
        <img id="img_post" src="" alt="" >
      </div>
    </div>
  </div>

</div>
</div>
@endsection
@section('addJs')
  <script  type="text/javascript"  src="js/preview.js"></script>
@endsection
