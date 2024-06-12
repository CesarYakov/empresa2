@extends('layout')

@section('title','Servicios')
@section('content')
    <h2>Sevicios</h2>
    <ul>
        <tr>
        @if($servicios)
            @foreach($servicios as $item)
                <td>{{$item->titulo}}<br>{{$item->descripcion}}</td>
            @endforeach
        @else
            <td colspan="4">No hay servicios que mostrar</td >
        @endif
        </tr>
        <tr>
            <!-- <td colspan="4">{{$servicios->links()}}</td> -->
        </tr>
    </ul>
@endsection
