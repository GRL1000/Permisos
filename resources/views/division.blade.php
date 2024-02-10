@extends('adminlte::page')
@section('content')
<div class="box">
    <div class="box-body">
        <form action="{{route('guardar.division')}}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{$division->id}}"/>
            <div class="form-group">
                <label for="codigo">Código</label>
                <input type="number" name="codigo" class="form-control col-md-6" value="{{$division->codigo}}" required/>
            </div>
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" name="nombre" class="form-control col-md-6" value="{{$division->nombre}}" required/>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</div>
@stop