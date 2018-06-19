@extends('layouts.master')

@section('title')
   Create Post and Preview
@endsection

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                  <div class="facebook">
                    <h1>prev facebook</h1>
                    {{ $data['text_post'] }}
                    <img src="C:\Users\graciela\Pictures\2432783.jpg" height="100" width="100">
                  </div>
                  <h1>prev isntagram</h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
