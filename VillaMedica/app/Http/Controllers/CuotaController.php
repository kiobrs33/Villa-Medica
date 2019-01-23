<?php namespace VillaMedica\Http\Controllers;

class CuotaController extends Controller {

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
		return 'Mostrando registros y vistas de CUOTA';
	}

	public function getCrearPropietario(){
		return 'Creando Propietario';
	}
	public function postCrearPropietario(){
		return 'propietario Creado';
	}

	public function missingMethod($parameters=array()){
		abort(404);
	}

}