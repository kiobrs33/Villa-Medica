<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('empleados', function(Blueprint $table)
		{
			$table->increments('id_emple');
			$table->string('nombres');
			$table->string('apellidos');
			$table->string('dni');
			$table->string('situacion');
			$table->string('domicilio');
			$table->string('telefono');
			$table->string('seccion');
			$table->string('cargo');
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
		Schema::drop('empleados');
	}

}
