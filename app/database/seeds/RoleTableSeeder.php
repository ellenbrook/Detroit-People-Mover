<?php 

class RoleTableSeeder extends Seeder {

    public function run()
    {
        DB::table('roles')->delete();

        Role::create(array('name' => 'Owner'));
        Role::create(array('name' => 'Administrator'));
        Role::create(array('name' => 'User'));
    }
}