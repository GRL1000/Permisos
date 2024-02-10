@extends('adminlte::page')
@section('content')
<div class="box">
    <div class="box-body">
        <form action="{{ route('guardar.profesor') }}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $profesor->id ?? 0 }}"/>
            <div class="form-group">
                <label for="num_empleado">Número de Empleado</label>
                <input type="text" name="num_empleado" class="form-control col-md-6" value="{{ $profesor->num_empleado ?? '' }}" required/>
            </div>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control col-md-6" value="{{ $profesor->nombre ?? '' }}" required/>
            </div>
            <div class="form-group">
                <label for="num_horas">Número de Horas</label>
                <input type="number" name="num_horas" class="form-control col-md-6" value="{{ $profesor->num_horas ?? 0 }}" required/>
            </div>
            <div class="form-group">
                <label for="division_id">División</label>
                <select name="division_id" class="form-control col-md-6" required>
                    @foreach ($divisiones as $division)
                        <option value="{{ $division->id }}" {{ isset($profesor) && $profesor->division_id == $division->id ? 'selected' : '' }}>
                            {{ $division->nombre }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="puesto_id">Puesto</label>
                <select name="puesto_id" class="form-control col-md-6" required>
                    @foreach ($puestos as $puesto)
                        <option value="{{ $puesto->id }}" {{ isset($profesor) && $profesor->puesto_id == $puesto->id ? 'selected' : '' }}>
                            {{ $puesto->nombre }}
                        </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="inicio_contrato">Inicio de Contrato</label>
                <input type="date" name="inicio_contrato" class="form-control col-md-6" value="{{ $profesor->inicio_contrato ?? '' }}" required/>
            </div>
            <div class="form-group">
                <label for="fin_contrato">Fin de Contrato</label>
                <input type="date" name="fin_contrato" class="form-control col-md-6" value="{{ $profesor->fin_contrato ?? '' }}" required/>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</div>
@stop
