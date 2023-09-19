<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RatingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($j = 0; $j < 10; $j++){
            for ($i = 0; $i < 20; $i++) {
                DB::table('rating')->insert([
                    'user_id' => random_int(1, 30),
                    'product_id' => $i+1,
                    'stars'=> random_int(1, 10)
                ]);
            }
        }
    }
}
