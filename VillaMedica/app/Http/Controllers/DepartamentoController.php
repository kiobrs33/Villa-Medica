<?php namespace VillaMedica\Http\Controllers;

class DepartamentoController extends Controller {

	/*public function __construct()
	{
		$this->middleware('auth');
	}*/

	
	public function getIndex()
	{
		return 'Estas en el Index Departamento';
	}

	public function getCrearDepartamento(){
		return view('departamento.reg_depa');
	}
	public function postCrearDepartamento(Request $request){

		/*$request->validate([
		    'title' => 'bail|required|unique:posts|max:255',
		    'body' => 'required',
		]);*/
		
		return 'Registrando Departamento';
	}

	public function getActualizarDepartamento(){
		return 'Actualizando Datos del departamento';
	}

	public function postActualizarDepartamento(){
		return 'Actualizando Depa';
	}

	public function postEliminar(){
		return 'eliminar ';
	}

	public function missingMethod($parameters=array()){
		abort(404);
	}

}