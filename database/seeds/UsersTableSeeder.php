<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    //This DB command inserts the default admin with the default variables
    //Email: admin@vtracka.com
    //Password: admin@pass


    public function run()
    {
        DB::table('users')->insert([
            'name'      => 'Admin',
            'email'     => 'admin@vtracka.com',
            'phone'     => '+234-*** *** ****',
            'address'   => 'Co-Creation Hub',
            'role'      => 2,
            'password'  => bcrypt('admin@pass'),
           
        ]);
    }
}
