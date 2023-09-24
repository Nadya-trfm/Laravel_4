<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PlusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 20; $i++) {
            DB::table('rating')->insert([
                'user_id' => 31,
                'product_id' => $i+1,
                'stars'=> random_int(3, 10)
            ]);
            DB::table('review')->insert([
                'user_id' =>31,
                'product_id' => $i+1,
                'text' => Str::random(10),
                'useful'=> random_int(5, 100)
            ]);
        }
    }
}
