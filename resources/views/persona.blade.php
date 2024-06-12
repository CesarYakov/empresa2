@extends('layout')

@section('title','Persona')
@section('content')
    <!-- <h2>Persona</h2> -->
    <!-- <nav> -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col"><a>Nombre </a></th>
                    <th scope="col"><a>Apellido </a></th>
                    <th scope="col"><a>Dirección </a></th>
                </tr>
            </thead>
            <tbody>
                @if($persona)
                    @foreach ($persona as $personas)
                        <tr>
                            <td>{{ $personas->cPerNombre}}</td>
                            <td>{{ $personas->cPerApellido}}</td>
                            <td>{{ $personas->cPerDireccion}}</td>
                            <br>
                        </tr>
                    @endforeach
                @else
                    <li>No existe ningun servicio que mostrar</li>
                @endif
            </tbody>
        </table>
    <!-- </nav> -->


@endsection
