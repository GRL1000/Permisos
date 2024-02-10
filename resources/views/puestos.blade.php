@extends('adminlte::page')
@section('content')
<div class="box">
    <div class="box-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nombre</th>
                        <th>Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($puestos as $puesto)
                    <tr>
                        <td>{{ $puesto['codigo'] }}</td>
                        <td>{{ $puesto['nombre'] }}</td>
                        <td>
                        <a href="{{ route('nuevo.puesto', ['id' => $puesto->id]) }}" class="btn btn-warning">Editar</a>
                        <a href="{{ route('eliminar.puesto', ['id' => $puesto->id]) }}" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
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