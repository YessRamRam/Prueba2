@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Post</div>
                <div class="card-body">
                    <form action="{{route('post.guardar')}}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="titulo">Titulo de Post:</label>
                            <input type="text" class="form-control" name="titulo" id="titulo" aria-describedby="emailHelp" placeholder="Ingrese el titulo del post">
                        </div>
                        <div class="form-group">
                            <label for="contenido">Contenido de Post:</label>
                            <textarea class="form-control" name="contenido" id="contenido" cols="30" rows="10"></textarea>
                        </div>
                        <button class="btn btn-warning">Crear Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


//A qui se esta creando el formulario, para que se agregue un post hecho por el usuario