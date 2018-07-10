@extends('layouts.master')
@section('title', 'Seleccionar Contactos')
@section('content')
<br>
<br>

<div class="container">
  <table class="table table-striped table-bordered">
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
                          <td scope="col">{{ $user->name }}</td>
                          <td scope="col">{{ $user->email }}</td>
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
                          <td scope="col">
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
                              @endif
                              </div>
                          </td>
                      </tr>
                  @endif
                @endforeach
              </tbody>
            </table>
            {{ $users->links() }}
</div>
@endsection
