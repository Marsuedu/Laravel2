@extends('adminlte::page')

@section('content')
    <h1>Lista de Estudiantes</h1>

    <a href="{{ route('estudiantes.create') }}" class="btn btn-primary mb-3">Nuevo Estudiante</a>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            {{ $message }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre Completo</th>
                <th>Asignatura</th>
                <th>Nota 1</th>
                <th>Nota 2</th>
                <th>Nota 3</th>
                <th>Promedio</th>
                <th>Promedio (Texto)</th> <!-- Nueva columna para el texto del promedio -->
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($estudiantes as $estudiante)
                <tr>
                    <td>{{ $estudiante->id }}</td>
                    <td>{{ $estudiante->nombre_completo }}</td>
                    <td>{{ $estudiante->asignatura }}</td>
                    <td>{{ $estudiante->nota1 }}</td>
                    <td>{{ $estudiante->nota2 }}</td>
                    <td>{{ $estudiante->nota3 }}</td>
                    <td>{{ number_format($estudiante->promedio, 2) }}</td>
                    <td>{{ $estudiante->promedio_texto }}</td> <!-- Mostrar el promedio en texto -->
                    <td>
                        <a href="{{ route('estudiantes.show', $estudiante->id) }}" class="btn btn-info">Mostrar</a>
                        <a href="{{ route('estudiantes.edit', $estudiante->id) }}" class="btn btn-warning">Editar</a>
                        <form action="{{ route('estudiantes.destroy', $estudiante->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $estudiantes->links() }} <!-- Paginación -->
@endsection
