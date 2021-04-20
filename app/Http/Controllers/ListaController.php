<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\estudiante; //Modelo


class ListaController extends Controller
{
    public function index(Request $request)
    {
        $estudiante= estudiante::all();

        return view ('VistaEstudiantes', compact('estudiante'));

    }
        public function destroy($id)
    {
        $estudiante= estudiante::find($id);
        $estudiante->delete($id);
        return redirect()->route('Lista.index');
    }
     public function getAll(){
         $estudiante = estudiante::all();
         return view ('grafica', compact('estudiante'));
        }
        public function getCalificaciones(){
        $estudiante = estudiante::all();
        return view ('graficas', compact('estudiante'));
    }

}
