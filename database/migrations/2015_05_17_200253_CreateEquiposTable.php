<?php

//php artisan make:model Equipos
//php artisan make:migration CreateEquiposTable
//php artisan migrate:rollback
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEquiposTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('equipos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('equipo', 100);
			$table->text('ciudad');
			$table->timestamps();
			$table->boolean('confirmed');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('equipos');
	}

}