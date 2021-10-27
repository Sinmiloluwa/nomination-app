<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('location')->insert([
            [
                'id' => 1,
                'name' => 'Abuja'
            ],

            [
                'id' => 2,
                'name' => 'Lagos'
            ],

            [
                'id' => 3,
                'name' => 'Oyo'
            ],

            [
                'id' => 4,
                'name'=> 'Ogun'
            ]
        ]);
    }
}
