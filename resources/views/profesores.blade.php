@extends('adminlte::page')

@section('content')
<div class="box">
    <div class="box-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Número de Empleado</th>
                    <th>Nombre</th>
                    <th>Número de Horas</th>
                    <th>División</th>
                    <th>Puesto</th>
                    <th>Inicio de Contrato</th>
                    <th>Fin de Contrato</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($profesores as $profesor)
                    <tr>
                        <td>{{ $profesor->num_empleado }}</td>
                        <td>{{ $profesor->nombre }}</td>
                        <td>{{ $profesor->num_horas }}</td>
                        <td>{{ $profesor->division ? $profesor->division->nombre : 'Sin división' }}</td>
                        <td>{{ $profesor->puesto ? $profesor->puesto->nombre : 'Sin puesto' }}</td>
                        <td>{{ $profesor->inicio_contrato }}</td>
                        <td>{{ $profesor->fin_contrato }}</td>
                        <td>
                            <a href="{{ route('nuevo.profesor', ['id' => $profesor->id]) }}" class="btn btn-warning">Editar</a>
                            <a href="{{ route('eliminar.profesor', ['id' => $profesor->id]) }}" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endsection
    @section('js')
    <script>
        $('#table-data').DataTable({
            "scrollX":true
        });
    </script>   
</div>
@stop
