<?php 

class TransitLineTableSeeder extends Seeder {

    public function run()
    {
        DB::table('transit_lines')->delete();

        TransitLine::create(array('transit_id' => '1', 'name' => 'People Mover'));
        TransitLine::create(array('transit_id' => '2', 'name' => 'High Speed Bus System'));
    }
}