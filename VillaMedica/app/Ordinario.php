<?php namespace VillaMedica;

use Illuminate\Database\Eloquent\Model;

class Ordinario extends Model {

	protected $table = 'ordinarios';

	protected $primaryKey = 'id_ordi'
	protected $fillabe = ['num_recibo',
							'monto',
							'fecha',
							'estado',
							'fecha_pago',
							'monto_pago',
							'id_depa'];

	public function ordinario(){
		return $this->belongsTo('VillaMedica\Departamento','id_depa');
	}

}
