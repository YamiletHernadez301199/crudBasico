{{-- con el extends compartimos lo que tiene layour --}}
@extends('layouts/main')
{{-- con section podemos ver el contenido --}}
@section('contenido')
    <div class="container">
        <h2>
            Crud Basico con laravel 8
        </h2>
        <div class="row my-4">
            <div class="col">
                <a href="/create" class="btn btn-primary">
                    Nombre nuevo
                </a>
                <hr>
                <table class="table table-sm" >
                    <thead>
                        <tr>
                            <th>Apellido paterno</th>
                            <th>Nombre</th>
                            <th>Editar</th>
                            <th>Eliminar</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                        <tr>
                            <th>{{ $item->paterno}}</th>
                            <td>{{ $item->nombre}}</td>
                            <td>
                                <a href="{{ route('edit', $item->id) }}" class="btn btn-warning">
                                    Editar
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('show', $item->id) }}" class=" btn btn-danger">
                                    Eliminar
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
@endsection