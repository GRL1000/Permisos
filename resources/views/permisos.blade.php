@extends('adminlte::page')

@section('content')
<div class="box">
    <div class="box-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Nombre del Profesor</th>
                    <th>Fecha de Permiso</th>
                    <th>Estado</th>
                    <th>Motivo</th>
                    <th>Observaciones</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($permisos as $permiso)
                    <tr>
                        <td>{{ $permiso->profesor ? $permiso->profesor->nombre : 'No hay profesor' }}</td>
                        <td>{{ $permiso->fecha }}</td>
                        <td>{{ $permiso->estado }}</td>
                        <td>{{ $permiso->motivo }}</td>
                        <td>{{ $permiso->observaciones }}</td>
                        <td>
                            <a href="{{ route('nuevo.permiso', ['id' => $permiso->id]) }}" class="btn btn-warning">Editar</a>
                            <a href="{{ route('eliminar.permiso', ['id' => $permiso->id]) }}" class="btn btn-danger">Eliminar</a>
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
