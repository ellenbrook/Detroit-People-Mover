<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTransitLinesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('transit_lines', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('transit_id')->unsigned()->index();
			$table->foreign('transit_id')->references('id')->on('transit')->onDelete('cascade');

			$table->string('name');
			$table->unique('name');
			
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
		Schema::drop('transit_lines');
	}

}
