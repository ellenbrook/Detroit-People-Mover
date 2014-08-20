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
		Schema::create('transit_line_transit_stop', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('transit_line_id')->unsigned()->index();
			$table->foreign('transit_line_id')->references('id')->on('transit_lines')->onDelete('cascade');

			$table->integer('transit_stop_id')->unsigned()->index();
			$table->foreign('transit_stop_id')->references('id')->on('transit_stops')->onDelete('cascade');
			
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
		Schema::drop('transit_line_transit_stop');
	}

}
