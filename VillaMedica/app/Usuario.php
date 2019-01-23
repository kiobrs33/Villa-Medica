<?php namespace VillaMedica;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class Usuario extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'usuarios';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['id_usuario','email', 'password','pregunta','respuesta'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	

	public function propietario(){
		return $this->hasOne('VillaMedica\Propietario','id_pro');
	}

	public function empleado(){
		return $this->hasOne('VillaMedica\Empleado','id_emple');
	}

}
