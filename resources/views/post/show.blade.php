@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Post</div>

                <div class="card-body">
                    <form action="{{route('post.actualizar')}}" method="POST">
                        @csrf
                        <input type="hidden" name="post_id" value="{{ $post->id }}">
                        <div class="form-group">
                            <label for="titulo">Titulo de Post:</label>
                            <input type="text" class="form-control" name="titulo" id="titulo" aria-describedby="emailHelp" placeholder="Ingrese el titulo del post" 
                            value="{{ $post->titulo }}">
                        </div>
                        <div class="form-group">
                            <label for="contenido">Contenido de Post:</label>
                            <textarea class="form-control" name="contenido" id="contenido" cols="30" rows="10">{{ $post->contenido }}</textarea>
                        </div>
                        <button class="btn btn-warning">Actualizar Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


//A qui se esta haciendo la parte de la actualizacion de un dato dela tabla.