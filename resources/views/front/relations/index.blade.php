@extends('layouts.master')
@section('title', 'Seleccionar Contactos')
@section('content')
<br>
<br>

<div class="container col-md-10">
  <table class="table table-light table-bordered">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Nombre</th>
        <th scope="col">Email</th>
        <th scope="col">Acciones </th>
      </tr>
    </thead>
    <tbody class='tablest'>
      @foreach ($users as $user)
        @if ($user->id != Auth::user()->id )
          <tr>
            <td class="align-middle" scope="col">{{ $user->name }}</td>
            <td class="align-middle" scope="col">{{ $user->email }}</td>
              @php
                $key = $user->id;
                $status = 'NS';
                  if (isset($rels)) {
                    if (isset(
                      $rels[$key])) {
                      $status = 'S';
                    };
                  };
              @endphp
            <td class="align-middle" scope="col">
              <div class="line" >
                @if ($status == 'NS')
                  <a href="/front/relations/{{$user->id}}/edit" class="btn btn-primary"> Seguir
                  </a>
                    @else
                    <form method="post"     action="/front/relations/{{$user->id}}">
                      @csrf
                      {{ method_field('DELETE') }}
                      <button type="submit" name="borrar" class="btn btn-secondary">
                        <i>Dejar de Seguir</i>
                      </button>
                    </form>
                  <a href="/front/chats/{{$user->id}}/index" class="btn btn-primary"> Enviar Mensajes
                  </a>
                @endif
              </div>
            </td>
          </tr>
        @endif
      @endforeach
    </tbody>
  </table>
    <nav aria-label="Page navigation example" class="pagination justify-content-center col-md-10 mx-auto">
      {{ $users->links() }}
    </nav>
</div>
@endsection
