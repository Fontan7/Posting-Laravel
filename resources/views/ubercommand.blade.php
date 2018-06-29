@extends('layouts/status')


@section('content');
  <div class="container">
    <div class="row">
        <div class="col-8 mx-auto">
          <div class="card">

              <form class="" action="" method="post">
                @csrf
                <div class="card-body bg-light">
                  <textarea class="form-control border-0" name="body" placeholder="¿Que estás pensando?"></textarea>
                </div>

                <div class="card-footer bg-light">
                  <button class="btn btn-primary" id="create-status">Publicar</button>
                </div>
              </form>

          </div>
        </div>
    </div>
  </div>

@endsection
