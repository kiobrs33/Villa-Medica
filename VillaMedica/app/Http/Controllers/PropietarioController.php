<?php namespace VillaMedica\Http\Controllers;

use Illuminate\Http\Request;
use VillaMedica\Propietario;
use VillaMedica\User;
use Illuminate\Support\Facades\View;

class PropietarioController extends Controller {

	public function index(){

		$propietarios = Propietario::orderBy('id_pro')->paginate();  
		return view('propietario.listar', compact('propietarios'));
	}

	public function crear(){
		return view('propietario.crear');
	}

	public function creando(Request $request){

		$this->validate($request, [
	        'nombres' => 'required|min:3',
	        'apellidos' => 'required|min:3',
	        'dni' => 'required|min:5',
	        'telefono' => 'required|min:5',
	        'num_mascotas' => 'required|min:1',
	        'num_familiares' => 'required|min:1',
	        'nombre_carpeta' => 'required|min:2',
	        'id_usuario' => 'required|min:1'
	    ]);

		$propietario = new Propietario;
		$propietario->nombres = $request->nombres;
		$propietario->apellidos = $request->apellidos;
		$propietario->dni = $request->dni;
		$propietario->telefono = $request->telefono;
		$propietario->num_mascotas = $request->num_mascotas;
		$propietario->num_familiares = $request->num_familiares;
		$propietario->nombre_carpeta = $request->nombre_carpeta;
		$propietario->id_usuario = $request->id_usuario;
		$propietario->save();

		// $propietarios = Propietario::orderBy('id_pro')->paginate();
		
		return redirect('/listar');
	}

	public function mostrar($id){
		$propietario = Propietario::find($id);
		return view('propietario.mostrar', compact('propietario'));
	}

	public function borrar($id){
		$propietario = Propietario::find($id);
		$propietario->delete();
		return back()->with('alerta','El producto fue Eliminado');
	}

	public function actualizar($id){
		$propietario = Propietario::find($id);

		return view('propietario.actualizar', ['propietario'=>$propietario]);
	}

	public function actualizando(Request $request){
		$propietario = Propietario::find($request->get('id_pro'));
		$propietario->nombres = $request->get('nombres');
		$propietario->apellidos = $request->get('apellidos');
		$propietario->dni = $request->get('dni');
		$propietario->telefono = $request->get('telefono');
		$propietario->num_mascotas = $request->get('num_mascotas');
		$propietario->num_familiares = $request->get('num_familiares');
		$propietario->nombre_carpeta = $request->get('nombre_carpeta');
		$propietario->id_usuario = $request->get('id_usuario');
		$propietario->save();
		return redirect('/listar');
	}

	public function missingMethod($parameters=array()){
		abort(404);
	}

}