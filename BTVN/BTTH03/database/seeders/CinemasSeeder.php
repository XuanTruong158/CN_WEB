<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CinemasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cinemas')->insert([
            ['id' => 601, 'name' => 'CGV Vincom', 'location' => 'Vincom Center, Hà Nội', 'total_seats' => 300],
            ['id' => 602, 'name' => 'Lotte Cinema', 'location' => 'Lotte Center, Hà Nội', 'total_seats' => 250],
        ]);
    }
}
