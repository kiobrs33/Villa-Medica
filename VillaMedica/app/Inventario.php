<?php namespace VillaMedica;

use Illuminate\Database\Eloquent\Model;

class Inventario extends Model {

	protected $table = 'inventarios';

	protected $primaryKey = 'id_inve';

	protected $fillable = ['tipo','nombre','cantidad'];

}
