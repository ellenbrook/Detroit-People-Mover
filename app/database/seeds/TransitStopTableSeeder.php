<?php 

class TransitStopTableSeeder extends Seeder {

    public function run()
    {
        DB::table('transit_stops')->delete();

        TransitStop::create(array('name' => 'Michigan Ave.'));
    }
}