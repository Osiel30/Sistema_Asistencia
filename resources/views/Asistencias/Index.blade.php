 @extends('layouts.app')

@section('content')
    <div class="container">
        <div class="flex justify-between items-center mb-4">
            <h1 class="text-2xl font-bold">Listas de Asistencias</h1>
            {{-- <a href="{{ route('Asistencias.Create') }}" class="btn bg-[#004643] text-[#fdfcfd] font-semibold hover:"> --}}
             <a href="#" class="btn bg-[#004643] text-[#fdfcfd] font-semibold hover:">
                Nueva Asistencia
            </a>
        </div>

        <table class="table mt-3">
            <thead>{}
                <tr>
                    <th>ID</th>
                    <th>Empleado</th>
                    <th>Fecha</th>
                    <th>Entrada</th>
                    <th>Salida</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($asistencias as $asistencia)
                    <tr>
                        <td>{{ $asistencia->id }}</td>
                        <td>{{ $asistencia->empleadoSucursal->nombre ?? 'N/A' }}</td>
                        <td>{{ $asistencia->fecha }}</td>
                        <td>{{ $asistencia->hora_entrada }}</td>
                        <td>{{ $asistencia->hora_salida }}</td>
                        <td>
                            <a href="{{ route('Asistencias.show', $asistencia->id) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('Asistencias.edit', $asistencia->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('Asistencias.destroy', $asistencia->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">No hay datos disponibles</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
