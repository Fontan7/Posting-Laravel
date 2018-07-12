{{-- @extends('layouts.app') --}}
@extends('layouts/master')

@section('title')
  Modificar Red
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Modificar Red Social</div>
                <div class="card-body">
                <form  action="/admin/networks/{{$Network->id}}" enctype="multipart/form-data"    method="POST">
                      {{ method_field('PUT') }}
                      @csrf

                        <div class="form-group row">
                            <label for="description" class="col-sm-4 col-form-label text-md-right">Descripcion Red</label>
                            <div class="col-md-6">
                                <input id="description" type="text" name="description" required value="{{$Network->description}}" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="characters" class="col-md-4 col-form-label text-md-right"> Cantidad Caracteres que acepta</label>
                            <div class="col-md-6">
                                <input id="characters" type="text" name="characters" value="{{$Network->characters}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="view" class="col-md-4 col-form-label text-md-right"> Vista </label>
                            <div class="col-md-6">
                                <input id="view" type="text" name="view" value="{{$Network->view}}">
                            </div>
                        </div>
                        <div class="form-group row">
                          <img width="80" class="col-md-4 col-form-label text-md-right" src="/admin/logos/{{ $Network->image }}" alt="">
                            <label class="btn btn-primary col-md-4" for="image">
                              Cambiar Imagen?
                            </label>
                            <input class="hidden" src="#" name="image" id='image' type="file" accept="image/*"></input>
                          </div>
                        <div>
                         <button class="btn btn-primary" id="create-status">Grabar Net</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
