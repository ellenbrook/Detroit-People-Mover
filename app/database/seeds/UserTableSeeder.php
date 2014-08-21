<?php 

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create(array(
        	'username' => 'Eric', 
        	'email' => 'ericellenbrook@gmail.com',
        	'password' => '$2a$10$P3kXjBcfgq5I9DGvWaj01.Dw.1XkInazROCgxpb9w6S2VdTX0HCgi',
        	'area_code' => '313',
        	'phone_number' => '7198120',
        	'business_name' => 'Detroit People Mover' 
        ));

        User::create(array(
            'username' => 'Chris', 
            'email' => 'elkjar@20thcen.com',
            'password' => '$2y$10$urowhPgJIL0VASlij3WLVuhsvzE1OPet20/LulGBaKnfdFQQ43KGO',
            'area_code' => '313',
            'phone_number' => '5555555',
            'business_name' => '20th Century Design Co.' 
        ));
    }
}