<?php

use Illuminate\Database\Seeder;

class VisitorsTableSeeder extends Seeder
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
            DB::table('visitors')->insert([
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'gender' => $i%2 == 1 ? 1: 0,
                'phone' => $faker->phoneNumber,
                'email' => $faker->email,
                'address' => $faker->address,
                'title' => $faker->title,
                'company' => $faker->company,
                'avatar_url'=> 'img/img_placeholder_avatar.jpg'
        ]);
        }
    }
}
