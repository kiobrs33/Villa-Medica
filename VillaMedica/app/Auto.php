<?php namespace VillaMedica;

use Illuminate\Database\Eloquent\Model;

class Auto extends Model {

	protected $table = 'autos';

	protected $primaryKey = 'id_auto';

	protected $fillable = ['marca',
							'ano',
							'modelo',
							'placa',
							'color',
							'id_pro'];

	public function auto(){
		return $this->belongsTo('VillaMedica\Curso','id_pro');
	}

}
