<?php 

class TransitLineTransitStopTableSeeder extends Seeder {

    public function run()
    {
        DB::table('transit_line_transit_stop')->delete();

        DB::table('transit_line_transit_stop')->insert([ 
        'transit_line_id' => '1',
        'transit_stop_id' => '1',

        ]);
    }
}