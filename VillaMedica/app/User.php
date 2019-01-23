<?php

namespace VillaMedica;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','palabra_clave','tipo','estado'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function empleado(){
        return $this->hasOne('VillaMedica\Empleado','id_emple');
    }

    public function propietario(){
        return $this->hasOne('VillaMedica\Propietario','id_pro');
    }
}
