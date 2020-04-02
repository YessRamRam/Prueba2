@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Post</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Titulo</th>
                                <th>Contenido</th>
                                <th>Fecha de Creación</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post)
                                <tr>
                                    <td>{{ $post->titulo }}</td>
                                    <td>{{ $post->contenido }}</td>
                                    <td>{{ $post->created_at }}</td>
                                    <td>
                                        <a href="{{ route('post.muestra', ['post_id' => $post->id]) }}"><button class="btn btn-primary">Actualizar</button></a>
                                        <form action="{{ route('post.eliminar') }}" method="POST">
                                            @csrf
                                            <input type="hidden" name="post_id" value="{{ $post->id }}">
                                            <button class="btn btn-danger">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

//A qui se esta creando la tabla con los posts que creo el usuario, la cual nos permite actualizar y eliminar