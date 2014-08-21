<?php 

class TransitTableSeeder extends Seeder {

    public function run()
    {
        DB::table('transit')->delete();

        Transit::create(array('name' => 'Monorail'));
        Transit::create(array('name' => 'Bus'));
    }
}