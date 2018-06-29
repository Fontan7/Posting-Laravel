@extends('layouts.master')
@section('title', 'Listado de redes')
@section('content')
  <a href="/admin/networks/create" class="btn btn-primary">Agregar nueva red</a>
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
                            <div class="line" >
                              <a href="/admin/networks/{{$network->id}}/edit" class="btn btn-primary">
                                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                              </a>
                              <form method="post"     action="/admin/networks/{{$network->id}}">
                                @csrf
                                {{ method_field('DELETE') }}
                                <button type="submit" name="borrar" class="btn-danger">
                                  <i class="glyphicon glyphicon-trash" aria-hidden="true"></i>
                                 </button>
                                </form>
                              </div>
                          </td>
                      </tr>
                  @endforeach
              </tbody>
            </table>
</div>




</div>
@endsection
