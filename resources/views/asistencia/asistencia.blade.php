{{-- Vista para reporte de asistencias en PDF --}}
@extends('layouts.user_view')

@section('title', 'Reporte de Asistencia')

@section('content')
    <div class="pdf-container">
        <header>
            <div class="header">
                <h1>Reporte de Asistencias</h1>
                <p>Generado el {{ date('d-m-Y') }}</p>
            </div>
        </header>

        <main>
            <table class="report-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Rol</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($asistencias as $asistencia)
                        <tr>
                            <td>{{ $asistencia->id }}</td>
                            <td>{{ $asistencia->nombre }}</td>
                            <td>{{ $asistencia->rol }}</td>
                            <td>{{ $asistencia->fecha }}</td>
                            <td>{{ $asistencia->hora }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </main>

        <footer>
            <p>&copy; {{ date('Y') }} Sistema de Gestión de Asistencias. Todos los derechos reservados.</p>
        </footer>
    </div>
@endsection

@section('styles')
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f8f8;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .pdf-container {
            max-width: 100%;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
        }

        .header {
            text-align: center;
            background-color: #004643;
            color: #fff;
            padding: 20px;
            margin-bottom: 20px;
        }

        .header h1 {
            font-size: 2.5rem;
        }

        .header p {
            font-size: 1.2rem;
        }

        .report-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .report-table th, .report-table td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ccc;
        }

        .report-table th {
            background-color: #004643;
            color: white;
        }

        .report-table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        footer {
            text-align: center;
            margin-top: 40px;
            font-size: 0.9rem;
            color: #777;
        }
    </style>
@endsection
