<?php namespace VillaMedica;

use Illuminate\Database\Eloquent\Model;

class Egreso extends Model {

	protected $table = 'egresos';

	protected $primaryKey = 'id_egre';

	protected $fillabe = ['num_recibo',
							'nombre',
							'detalles',
							'monto',
							'fecha'];

}
