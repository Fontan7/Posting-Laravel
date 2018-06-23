@extends('layouts.master')
@section('title', 'Listado de Usuarios')
@section('content')
<br>
<br>

<div class="">
  <table class="table table-striped table-bordered">
              <thead class="thead-dark">
                  <tr>
                      <th scope="col">Nombre</th>
                      <th scope="col">Email</th>
                      <th scope="col">Creado</th>
                      <th scope="col">Modificado</th>
                      <th scope="col">Acciones</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($users as $user)
                      <tr>
                          <td scope="col">{{ $user->name }}</td>
                          <td scope="col">{{ $user->email }}</td>
                          <td scope="col">{{ $user->created_at }}</td>
                          <td scope="col">{{ $user->updated_at }}</td>
                            <td scope="col">
                            <div class="line" >
                              <a href="/admin/users/{{$user->id}}/edit" class="btn btn-primary">
                                <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                              </a>
                              <form method="post"     action="/admin/users/{{$user->id}}">
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
@endsection
