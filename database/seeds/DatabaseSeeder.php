<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Here we have lists of other Seeders that this Database Seeder can call.
         $this->call(UsersTableSeeder::class);
         $this->call(VisitorsTableSeeder::class);
         $this->call(HistoryTableSeeder::class);
         $this->call(FloorTableSeeder::class);
    }
}
