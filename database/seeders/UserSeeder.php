<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i = 0; $i < 15; $i++) {
            DB::table('user')->insert([
                'first_name' => Str::random(10),
                'second_name' => Str::random(10),
                'city' => 'Волгоград',
            ]);
        }

        for ($i = 0; $i < 15; $i++) {
            DB::table('user')->insert([
                'first_name' => Str::random(10),
                'second_name' => Str::random(10),
                'city' => 'Самара',
            ]);
        }

        for ($i = 0; $i < 10; $i++) {
            DB::table('user')->insert([
                'first_name' => Str::random(10),
                'second_name' => Str::random(10),
                'city' => 'Москва',
            ]);
        }

    }
}
