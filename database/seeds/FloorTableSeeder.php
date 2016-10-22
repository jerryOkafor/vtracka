<?php

use Illuminate\Database\Seeder;

class FloorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('floors')->insert([
            'name'      => 'Ground Floor',
            'tag'     => 'GF',
        ]);
        DB::table('floors')->insert([
            'name'      => 'First Floor',
            'tag'     => 'FF',
        ]);
        DB::table('floors')->insert([
            'name'      => 'Second Floor',
            'tag'     => 'SF',
        ]);
        DB::table('floors')->insert([
            'name'      => 'Third Floor',
            'tag'     => 'TF',
        ]);
        DB::table('floors')->insert([
            'name'      => 'Fourth Floor',
            'tag'     => '4F',
        ]);
        DB::table('floors')->insert([
            'name'      => 'Fifth Floor',
            'tag'     => '5F',
        ]);
        DB::table('floors')->insert([
            'name'      => 'Sixth Floor',
            'tag'     => '6F',
        ]);
        DB::table('floors')->insert([
            'name'      => 'Roof Top',
            'tag'     => '7F',
        ]);
    }
}
