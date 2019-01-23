<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExtraordinariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('extraordinarios', function(Blueprint $table)
		{
			$table->increments('id_extra');
			$table->integer('monto');
			$table->date('fecha');
			$table->string('tipo');
			$table->string('estado');
			$table->date('fecha_pago');
			$table->integer('monto_pago');
			$table->integer('id_depa')->unsigned();
			$table->foreign('id_depa')->references('id_depa')->on('departamentos');
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
		Schema::drop('extraordinarios');
	}

}
