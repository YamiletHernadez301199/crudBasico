@extends('layouts/main')
@section('contenido')
<div class="container my-4">
    <h2>
        Actualizar
    </h2>
    <div class="row my-4">
        <div class="col">
            <a href="/" class="btn btn-info">Regresar</a>
            <hr>
            <form action="{{ route('update', $items->id)}}" method="post">
                @csrf
                @method('PUT')
                <label for="">Apellido</label>
                <input type="text" name="paterno" id="paterno"
                class="form-control" value="{{ $items->paterno}}">
                <label for="">Nombre</label>
                <input type="text" name="nombre" id="nombre"
                class="form-control" value="{{ $items->nombre}}">
                <button class="btn btn-warning mt-3">
                    Actualizar
                </button>
            </form>
        </div>
    </div>
</div>
@endsection