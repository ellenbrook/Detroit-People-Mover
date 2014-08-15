<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLineStopTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('line_stop', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('line_id')->unsigned()->index();
			$table->foreign('line_id')->references('id')->on('transit_lines')->onDelete('cascade');

			$table->integer('stop_id')->unsigned()->index();
			$table->foreign('stop_id')->references('id')->on('transit_stops')->onDelete('cascade');
			
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
		Schema::drop('line_stop');
	}

}
