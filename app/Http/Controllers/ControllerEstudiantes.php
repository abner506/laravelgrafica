<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\estudiante; //Modelo

class ControllerEstudiantes extends Controller
{

    public function mostrar()
    {
        return view ('AgregarEstudiantes');
    }

    public function store(Request $request)
    {
        $estudiante=new estudiante();
        $estudiante->Matricula=$request->Matricula;
        $estudiante->Nombre=$request->Nombre;
        $estudiante->Direccion=$request->Direccion;
        $estudiante-> save();
        return redirect('estudiantes');
        //return $request->all();
    }

}
