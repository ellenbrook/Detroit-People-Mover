<?php 

class RolerUserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('role_user')->delete();

        DB::table('role_user')->insert([ 
        'role_id' => '1',
        'user_id' => '1'
        ]);
    }
}