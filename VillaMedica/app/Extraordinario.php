<?php namespace VillaMedica;

use Illuminate\Database\Eloquent\Model;

class Extraordinario extends Model {

	protected $table = 'extraordinarios';

	protected $primaryKey = 'id_extra';

	protected $fillable = ['num_recibo',
							'monto',
							'fecha',
							'tipo',
							'fecha_pago',
							'monto_pago',
							'id_depa',
							'id_repara'];

	public function extraordinario(){
		return $this->belongsTo('VillaMedica\Departamento','id_depa');
	}

	public function reparaciones(){
		return $this->belongsTo('VillaMedica\Reparacion','id_repara');
	}

}
