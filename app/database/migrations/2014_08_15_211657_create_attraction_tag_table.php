<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAttractionTagTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('attraction_tag', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('attraction_id')->unsigned()->index();
			$table->foreign('attraction_id')->references('id')->on('attractions')->onDelete('cascade');

			$table->integer('tag_id')->unsigned()->index();
			$table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
			
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
		Schema::drop('attraction_tag');
	}

}
