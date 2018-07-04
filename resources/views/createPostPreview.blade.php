@extends('layouts.master')

@section('title')
   Create Post and Preview
@endsection

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
      <form class="col-md-8" action="store" method="post">
        @csrf
        <input class="btn btn-primary" type="submit" name="post" value="Postear">
      <br>
      <br>
    <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                  @foreach ($networks as $network)
                    @php
                      $dnet = 'net' . $network->id;
                    @endphp
                    @if (isset($data[$dnet]))
                      <div class="{{$network->description}}">
                        <h1>{{$network->description}}</h1>
                        <input type="text" name="net{{$network->id}}" value="{{$network->id}}" hidden>
                        <input type="text" name="text_post" value="{{$data['text_post']}}">
                      </div>
                      <br>
                    @endif
                  @endforeach
                </div>
            </div>
        </div>
      </form>
    </div>
</div>
@endsection
