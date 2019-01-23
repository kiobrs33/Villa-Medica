<?php namespace VillaMedica;

use Illuminate\Database\Eloquent\Model;

class Inquilino extends Model {

	protected $table = 'inquilinos';

	protected $primaryKey = 'id_inqui';

	protected $fillable = ['nombres',
							'apellidos',
							'dni',
							'telefono',
							'correo',
							'id_pro'];

	public function inquilino(){
		return $this->belongsTo('VillaMedica\Propietario','id_pro');
	}

}
