<?php namespace VillaMedica;

use Illuminate\Database\Eloquent\Model;

class Reparacion extends Model {

	protected $table = 'reparaciones';

	protected $primaryKey = 'id_repara';

	protected $fillabe = ['lugar',
							'fecha_inicio',
							'fecha_final',
							'monto',
							'motivo',
							'ids_inventario'];

	public function reparacion(){
		return $this->hasMany('VillaMedica\Extraordinario','id_extra');
	}

}
