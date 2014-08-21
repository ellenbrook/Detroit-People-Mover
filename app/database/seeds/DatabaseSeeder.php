<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserTableSeeder');
		$this->call('RoleTableSeeder');
		$this->call('RolerUserTableSeeder');
		$this->call('TransitTableSeeder');
		$this->call('TransitLineTableSeeder');
		$this->call('TransitStopTableSeeder');
		$this->call('TransitLineTransitStopTableSeeder');
		$this->call('AttractionTableSeeder');
	}

}
