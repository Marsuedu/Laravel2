@extends('adminlte::page')

@section('content')
    <h1>Detalles del Estudiante</h1>

    <table class="table table-bordered">
        <tr>
            <th>Nombre Completo</th>
            <td>{{ $estudiante->nombre_completo }}</td>
        </tr>
        <tr>
            <th>Asignatura</th>
            <td>{{ $estudiante->asignatura }}</td>
        </tr>
        <tr>
            <th>Nota 1</th>
            <td>{{ $estudiante->nota1 }}</td>
        </tr>
        <tr>
            <th>Nota 2</th>
            <td>{{ $estudiante->nota2 }}</td>
        </tr>
        <tr>
            <th>Nota 3</th>
            <td>{{ $estudiante->nota3 }}</td>
        </tr>
        <tr>
            <th>Promedio</th>
            <td>{{ number_format($estudiante->promedio, 2) }}</td>
        </tr>
    </table>

    <a href="{{ route('estudiantes.index') }}" class="btn btn-primary">Volver</a>
@endsection
