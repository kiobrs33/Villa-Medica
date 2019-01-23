<?php namespace VillaMedica;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model {

	protected $table = 'departamentos';

	protected $primaryKey = 'id_depa';

	protected $fillable = ['num_depa',
							'tipo',
							'num_cochera',
							'num_estaciona',
							'num_torre',
							'id_pro'];

	public function departamento(){
		return $this->belongsTo('VillaMedica\Propietario','id_pro');
	}

	public function extraordinario(){
		return $this->hasMany('VillaMedica\Extraordinario','id_extra');
	}

	public function ordinario(){
		return $this->hasMany('VillaMedica\Ordinario','id_ordi');
	}

}
