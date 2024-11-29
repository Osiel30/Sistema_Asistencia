@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Historial de Jornadas</h1>
    <a href="{{ route('jornada.create') }}" class="btn btn-primary">Nueva Jornada</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Fecha Inicio</th>
                <th>Fecha Fin</th>
                <th>Tipo</th>
                <th>Hora de Entrada</th>
                <th>Hora de Salida</th>
                <th>Inicio de Descanso</th>
                <th>Fin de Descanso</th>
                <th>Sucursal</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jornadas as $jornada)
            <tr>
                <td>{{ $jornada->fecha_inicio }}</td>
                <td>{{ $jornada->fecha_fin }}</td>
                <td>{{ $jornada->tipo }}</td>
                <td>{{ $jornada->hora_entrada }}</td>
                <td>{{ $jornada->hora_salida }}</td>
                <td>{{ $jornada->inicio_descanso }}</td>
                <td>{{ $jornada->fin_descanso }}</td>
                <td>{{ $jornada->sucursal }}</td>
                <td>
                    <a href="{{ route('jornada.show', $jornada->id) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('jornada.edit', $jornada->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('jornada.destroy', $jornada->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection