<?php 

class AttractionTableSeeder extends Seeder {

    public function run()
    {
        DB::table('attractions')->delete();

        Attraction::create([
        	'transit_stop_id' => '1', 
        	'name' => 'Anchor Bar'
        ]);
    }
}