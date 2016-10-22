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
        DB::table('visitors')->insert([
            'first_name' => 'Jerry',
            'last_name' => 'Okafor',
            'gender' => 1,
            'phone' => '08030520715',
            'email' => 'jerryhanksokafor@gmail.com',
            'address' => 'Ajah',
            'title' => 'Software Engineer',
            'company' => 'Pacent Ltd',
            'avatar_url'=> 'img/img_placeholder_avatar.jpg'
            ]);
        for ($i = 0; $i <= 20; $i++) {
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
