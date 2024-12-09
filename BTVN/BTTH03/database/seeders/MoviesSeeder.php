<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MoviesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('movies')->insert([
            ['id' => 5001, 'title' => 'Avengers: Endgame', 'director' => 'Anthony và Joe Russo', 'release_date' => '2019-04-26', 'duration' => 181, 'cinema_id' => 601],
            ['id' => 5002, 'title' => 'Spider-Man: No Way Home', 'director' => 'Jon Watts', 'release_date' => '2021-12-17', 'duration' => 148, 'cinema_id' => 601],
            ['id' => 5003, 'title' => 'The Batman', 'director' => 'Matt Reeves', 'release_date' => '2022-03-04', 'duration' => 155, 'cinema_id' => 602],
            ['id' => 5004, 'title' => 'Black Panther: Wakanda Forever', 'director' => 'Ryan Coogler', 'release_date' => '2022-11-11', 'duration' => 161, 'cinema_id' => 602],
            ['id' => 5005, 'title' => 'Doctor Strange in the Multiverse of Madness', 'director' => 'Sam Raimi', 'release_date' => '2022-05-06', 'duration' => 126, 'cinema_id' => 601],
            ['id' => 5006, 'title' => 'Thor: Love and Thunder', 'director' => 'Taika Waititi', 'release_date' => '2022-07-08', 'duration' => 119, 'cinema_id' => 601],
        ]);
    }
}
