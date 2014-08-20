<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAttractionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('attractions', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('transit_stop_id')->unsigned()->index();
			$table->foreign('transit_stop_id')->references('id')->on('transit_stops')->onDelete('cascade');
			
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
		Schema::drop('attractions');
	}

}
