@extends('layouts.master')
@section('title', 'Listado de redes')
@section('content')
  <a href="/admin/networks/create" class="btn btn-success">Agregar nueva red</a>
<br>
<br>
  <table class="table table-striped table-bordered">
              <thead class="thead-dark">
                  <tr>
                      <th scope="col">Descripcion</th>
                      <th scope="col">Acciones</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($networks as $network)
                      <tr>
                          <td scope="col">{{ $network->description }}</td>
                            <td scope="col">
                              <a href="/admin/networks/{{$network->id}}/edit" class="btn btn-primary">Editar</a>
                              <form method="post" action="/admin/networks/{{$network->id}}">
                                  @csrf
                                  {{ method_field('DELETE') }}
                                      <input name="borrar" type="submit" value="Borrar" href="" class="btn btn-danger">
                              </form>
                          </td>
                      </tr>
                  @endforeach
              </tbody>
          </table>
@endsection