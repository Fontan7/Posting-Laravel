@extends('layouts.master')
@section('title', 'Listado de redes')
@section('content')
  <a href="/admin/networks/create" class="btn btn-success">Agregar nueva red</a>
<br>
<br>

<div class="">
  <table class="table table-striped table-bordered">
              <thead class="thead-dark">
                  <tr>
                      <th scope="col">Red social</th>
                      <th scope="col">Imagenes</th>
                      <th scope="col">Caracteres máximos por posteo</th>
                      <th scope="col">Forma de previsualizar</th>
                      <th scope="col">Acciones</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($networks as $network)
                      <tr>
                          <td scope="col">{{ $network->description }}</td>
                          <td scope="col">{{ $network->image }}</td>
                          <td scope="col">{{ $network->characters }}</td>
                          <td scope="col">{{ $network->view }}</td>
                            <td scope="col">
                              <a href="/admin/networks/{{$network->id}}/edit" class="btn btn-primary">
                                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                              </a>
                              <form method="post" action="/admin/networks/{{$network->id}}">
                                  @csrf
                                  {{ method_field('DELETE') }}
                                    <input name="borrar" type="submit" value="" href="" class="fa fa-trash" class="btn-danger">

                                    </form>
                          </td>
                      </tr>
                  @endforeach
              </tbody>
            </table>
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
