@extends('layouts/main')
@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col my-4">
                <h2>El dato a eliminar es</h2>
                <ul>
                    <li>El apellido es: {{ $items->paterno}} </li>
                    <li>El nombre es: {{$items->nombre}} </li>
                </ul>
                <form action="{{ route('destroy', $items->id )}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger mt-3">
                        Eliminar definitivamente!
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection