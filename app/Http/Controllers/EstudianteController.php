<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estudiante;
use App\Semestre;
use DB;
class EstudianteController extends Controller
{
    public function index(){
        $estudiantes=Estudiante::all();
        $semestres=Semestre::all();
        return view('estudiante',compact('estudiantes','semestres'));
    }
    public function guardar(Request $request){
        $estudiante = new Estudiante;
        $estudiante->nombre=$request->nombre;
        $estudiante->apellido=$request->apellido;
        $estudiante->cedula=$request->cedula;
        $estudiante->sexo=$request->sexo;
        $estudiante->idSemestre=$request->idSemestre;
        $estudiante->save();
        return redirect ()->route('estudiante.index');
    }
    public function mostrarestudiantes(){
        $estudiantes=DB::table('estudiantes')
        ->join('semestres','semestres.idSemestre','=','estudiantes.idSemestre')
        ->select('estudiantes.idEstudiante as idEstudiante','estudiantes.nombre as nombre','estudiantes.apellido as apellido','estudiantes.cedula as cedula','semestres.semestre as semestre','semestres.paralelo as paralelo')
        ->get();
        return view('mostrarestudiantes',compact('estudiantes'));

    }
    public function eliminarestudiante($idEstudiante){
        $objetivo=Estudiante::where('idEstudiante','=',$idEstudiante)->first();
        $objetivo->delete();
        return redirect ()->route('estudiante.mostrar');
    }
    public function editarestudiante($idEstudiante){
        $estudiante=Estudiante::where('idEstudiante','=',$idEstudiante)->first();
        $semestres=Semestre::all();
        return view('editarestudiante',compact('estudiante','semestres'));
    }
    public function actualizarestudiante(Request $request, $idEstudiante){
        $estudiante = new Estudiante;
        $estudiante =Estudiante::where('idEstudiante','=',$idEstudiante)->first();
        $estudiante->nombre=$request->nombre;
        $estudiante->apellido=$request->apellido;
        $estudiante->cedula=$request->cedula;
        $estudiante->sexo=$request->sexo;
        $estudiante->idSemestre=$request->idSemestre;
        $estudiante->save();
        return redirect ()->route('estudiante.index');

    }

}
