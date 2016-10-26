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
        DB::table('histories')->insert([
            'visitor_id' => 1,
            'p_of_visit' => "To enjoy code Camp",
            'whom_to_see' => "CCHub",
            'floor' => "6th Floor",
            'date' => $faker->date(),
            'time_in' => $faker->time(),
            'time_out' => null,
            'admin' => $faker->name,
        ]);
        for ($i = 0; $i <= 20; $i++) {
            DB::table('histories')->insert([
                'visitor_id' => $i,
                'p_of_visit' => $faker->text(),
                'whom_to_see' => $faker->text(),
                'floor' => $faker->text(),
                'date' => $faker->date(),
                'time_in' => $faker->time(),
                'time_out' => null,
                'admin' => $faker->name,
            ]);
        }
    }
}
