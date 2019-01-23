<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropietariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('propietarios', function(Blueprint $table)
		{
			$table->increments('id_pro');
			$table->string('nombres_pro');
			$table->string('apellidos_pro');
			$table->string('dni');
			$table->string('telefono');
			$table->string('nombres_espo');
			$table->string('apellidos_espo');
			$table->string('domicilio');
			$table->integer('numero_masco');
			$table->string('labor_pro');
			$table->string('labor_espo');
			$table->string('nombres_hijos');
			$table->integer('id_usuario')->unsigned();
			$table->foreign('id_usuario')->references('id_usuario')->on('usuarios');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('propietarios');
	}

}
