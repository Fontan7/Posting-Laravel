@extends('layouts.master')
@section('title', 'Listado de roles de usuario')
@section('content')
  <a href="/admin/rolls/create" class="btn btn-primary">Agregar nuevo Rol</a>
<br>
<br>
<table class="table table-striped table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Rol</th>
                    <th scope="col">Fecha Alta</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rolls as $roll)
                  <tr>
                    <td scope="col">{{ $roll->name }}</td>
                    <td scope="col">{{ $roll->created_at }}</td>
                    <td scope ="col">
                      <form method="post"  action="/admin/rolls/{{$roll->id}}">
                      @csrf
                        {{ method_field('DELETE') }}
                          <button type="submit" name="borrar" class="btn-danger">
                            <i class="glyphicon glyphicon-trash" aria-hidden="true"></i>
                           </button>
                        </form>
                    </td>
                  </tr>
                @endforeach
            </tbody>
          </table>
</div>
@endsection
