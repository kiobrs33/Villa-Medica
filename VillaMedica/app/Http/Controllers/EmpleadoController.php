<?php namespace VillaMedica\Http\Controllers;

class EmpleadoController extends Controller {

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	
	public function getIndex()
	{
		return 'Mostrando registros y vistas del EMPLEADO';
	}

	public function getCrearPropietario(){
		return 'Creando EMPLEADO';
	}
	public function postCrearPropietario(){
		return 'EMPLEADO Creado';
	}

	public function missingMethod($parameters=array()){
		abort(404);
	}

}