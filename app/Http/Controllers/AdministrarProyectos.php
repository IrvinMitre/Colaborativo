<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdministrarProyectos extends Controller
{
	//Funcion para mostrar proyectos
 //   public function verProyecto(Request $request, $id){
   //     $proyecto=DB::table('grupo')
     //   ->join('proyecto', 'proyecto.idProyecto' , '=' ,'grupo.id')
        //->select( 'proyecto.idProyecto','proyecto.nombre','profesores.colaboradores', 'proyecto.admin', 'grupo.id')
        //->where('$idProyecto',$id)->first();
        //$user = DB::table('name')->select('*')->where('idProyecto',$id)->get();
//Funcion para mostrar proyectos
	 //public function misProyectos(Request $request,$id){   
       // $iD=Crypt::decrypt($id);          
        //$nombre = DB::table('proyecto')->where('id',$ID)->first();              
        //$admin = DB::table('proyecto')->select('*')->where('idProfesor',$informacionProfesor->idProfesor)->where('status',true)->get();        
        //return view('/Profesor/MisComentarios')->with('comentarios',$comentarios);
    //}
    public function verproyectos()
    {
        $proyecto = DB::select('select * from proyecto where active = ?', [1]);

        return view('proyecto.verproyectos', ['proyectos' => $proyecto]);
    }
    }


