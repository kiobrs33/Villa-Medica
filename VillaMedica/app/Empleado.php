<?php namespace VillaMedica;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model {

	protected $table = 'empleados';

	protected $primaryKey = 'id_emple';
	
	protected $fillable = ['nombres',
							'apellidos',
							'dni',
							'telefono',
							'correo',
							'tipo_trabajador',
							'subsidio',
							'domicilio',
							'seccion_trabajo',
							'id_usuario'];


	public function empleado(){
		return $this->belongsTo('VillaMedica\User');
	}

	public function pagos(){
		return $this->hasMany('VillaMedica\Pago','id_pago');
	}

}
