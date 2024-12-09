<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClassesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('classes')->insert([
            ['id' => 1, 'grade_level' => 'Pre-K', 'room_number' => 'VH7'],
            ['id' => 2, 'grade_level' => 'Kindergarten', 'room_number' => 'VH8'],
            ['id' => 3, 'grade_level' => 'Pre-K', 'room_number' => 'VH9'],
            ['id' => 4, 'grade_level' => 'Kindergarten', 'room_number' => 'VH10'],
            ['id' => 5, 'grade_level' => 'Pre-K', 'room_number' => 'VH11'],
        ]);
    }
}
