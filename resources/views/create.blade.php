@extends('layouts/main')

@section('contenido')

    <div class="container my-4">
        <h2>
            Agregar nuevo nombre
        </h2>
        <div class="row my-4">
            <div class="col">
                <a href="/" class="btn btn-info">Regresar</a>
                <hr>
                <form action="/store" method="post">
                    @csrf
                    @method('POST')
                    <label for="">Escribe el apellido</label>
                    <input type="text" name="paterno" id="paterno"
                    class="form-control">
                    <label for="">Escribe el Nombre</label>
                    <input type="text" name="nombre" id="nombre"
                    class="form-control">
                    <button class="btn btn-primary mt-3">
                        Guardar
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection