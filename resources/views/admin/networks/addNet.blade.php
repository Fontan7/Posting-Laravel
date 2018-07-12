{{-- @extends('layouts.app') --}}
@extends('layouts/master')

@section('title')
  Dar de alta una nueva Red
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Alta de Red Social</div>
                <div class="card-body">
                    <form method="POST" action="/admin/networks" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="description" class="col-sm-4 col-form-label text-md-right">Descripcion Red</label>
                            <div class="col-md-6">
                                <input id="description" type="text" name="description" required autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="characters" class="col-md-4 col-form-label text-md-right"> Cantidad Caracteres que acepta</label>
                            <div class="col-md-6">
                                <input id="characters" type="text" name="characters">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="view" class="col-md-4 col-form-label text-md-right"> Vista </label>
                            <div class="col-md-6">
                                <input id="view" type="text" name="characters">
                            </div>
                        </div>
                        <div class="form-group row">
                          <label for="characters" class="col-md-4 col-form-label text-md-right"> </label>
                            <label class="btn btn-primary col-md-4" for="image">
                              Ingresar Logo
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
