@extends('adminlte::page')
@section('content')
<div class="box">
    <div class="box-body">
        <form action="{{ route('guardar.permiso') }}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $permiso->id ?? 0 }}"/>
            <div class="form-group">
                <label for="profesor_id">Profesor</label>
                <select name="profesor_id" class="form-control col-md-6" required>
                    @foreach ($profesores as $profesor)
                        <option value="{{ $profesor->id }}" {{ isset($permiso) && $permiso->profesor_id == $profesor->id ? 'selected' : '' }}>
                            {{ $profesor->nombre }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="fecha">Fecha de permiso</label>
                <input type="date" name="fecha" class="form-control col-md-6" value="{{ $permiso->fecha ?? '' }}" required/>
            </div>


            <div class="form-group">
                <label for="nombre">Estado</label>
                <input type="text" name="estado" class="form-control col-md-6" value="{{ $permiso->estado ?? '' }}" required/>
            </div>

            <div class="form-group">
                <label for="nombre">Motivo</label>
                <input type="text" name="motivo" class="form-control col-md-6" value="{{ $permiso->motivo ?? '' }}" required/>
            </div>

            <div class="form-group">
                <label for="nombre">Observaciones</label>
                <input type="text" name="observaciones" class="form-control col-md-6" value="{{ $permiso->observaciones ?? '' }}" required/>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</div>
@stop
