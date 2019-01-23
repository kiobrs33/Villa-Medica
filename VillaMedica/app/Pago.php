<?php namespace VillaMedica;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model {

	protected $table = 'pagos';

	protected $primaryKey = 'id_pago';

	protected $fillabe = ['num_recibo',
							'monto',
							'fecha',
							'reportes',
							'id_emple'];

	public function pago(){
		return $this->belongsTo('VillaMedica\Empleado','id_emple');
	}

}
