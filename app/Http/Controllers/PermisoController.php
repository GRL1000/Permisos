<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permiso;
use App\Models\Profesor;

class PermisoController extends Controller
{
    public function view(Request $req) 
    {
        $profesores = Profesor::all();

        if($req->id)
        {
            $permiso = Permiso::find($req->id);
        }else
        {
            $permiso = new Permiso();
        }

        return view('permiso', compact('permiso', 'profesores'));
    }

    public function index()
    {
        $permisos = Permiso::with('profesor')->get();
        return view('permisos', compact('permisos'));
    }

    public function store(Request $req)
    {
        if($req->id != 0)
        {
            $permiso = Permiso::find($req->id);

        }
        else
        {
            $permiso = new Permiso();
        }
        $permiso->profesor_id = $req->profesor_id;
        $permiso->fecha = $req->fecha;
        $permiso->estado = $req->estado;
        $permiso->motivo = $req->motivo;
        $permiso->observaciones = $req->observaciones;

        $permiso->save();

        return redirect()->to('permisos');
    }

    public function delete(Request $req)
    {
        $permiso = Permiso::find($req->id);
        $permiso->delete();
        return redirect()->route('permisos');
    }
}
