<?php

use Illuminate\Database\Seeder;

class HistoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i <= 100; $i++) {
            DB::table('histories')->insert([
                'visitor_id' => $i,
                'p_of_visit' => $faker->text(),
                'whom_to_see' => $faker->text(),
                'date' => $faker->date(),
                'time_in' => $faker->time(),
                'time_out' => $faker->time(),
                'admin' => $faker->name,
        ]);
        }
    }
}
