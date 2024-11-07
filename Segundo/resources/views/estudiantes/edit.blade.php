@extends('adminlte::page')

@section('content')
    <h1>{{ isset($estudiante) ? 'Editar Estudiante' : 'Crear Estudiante' }}</h1>

    <form action="{{ isset($estudiante) ? route('estudiantes.update', $estudiante->id) : route('estudiantes.store') }}" method="POST">
        @csrf
        @if(isset($estudiante))
            @method('PUT')
        @endif

        <div class="form-group">
            <label for="nombre_completo">Nombre Completo</label>
            <input type="text" name="nombre_completo" class="form-control" value="{{ isset($estudiante) ? $estudiante->nombre_completo : '' }}" required>
        </div>

        <div class="form-group">
            <label for="asignatura">Asignatura</label>
            <input type="text" name="asignatura" class="form-control" value="{{ isset($estudiante) ? $estudiante->asignatura : '' }}" required>
        </div>

        <div class="form-group">
            <label for="nota1">Nota 1</label>
            <input type="number" name="nota1" class="form-control" value="{{ isset($estudiante) ? $estudiante->nota1 : '' }}" required>
        </div>

        <div class="form-group">
            <label for="nota2">Nota 2</label>
            <input type="number" name="nota2" class="form-control" value="{{ isset($estudiante) ? $estudiante->nota2 : '' }}" required>
        </div>

        <div class="form-group">
            <label for="nota3">Nota 3</label>
            <input type="number" name="nota3" class="form-control" value="{{ isset($estudiante) ? $estudiante->nota3 : '' }}" required>
        </div>

        <button type="submit" class="btn btn-primary">{{ isset($estudiante) ? 'Actualizar' : 'Guardar' }}</button>
    </form>
@endsection
