<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ComputersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('computers')->insert([
            ['id' => 1, 'computer_name' => 'Lab1-PC01', 'model' => 'Dell Optiplex 7070', 'operating_system' => 'Windows 10 Pro', 'processor' => 'Intel Core i5-11400', 'memory' => 8, 'available' => true],
            ['id' => 2, 'computer_name' => 'Lab1-PC02', 'model' => 'HP EliteDesk 800 G5', 'operating_system' => 'Windows 10 Pro', 'processor' => 'Intel Core i7-9700', 'memory' => 16, 'available' => true],
            ['id' => 3, 'computer_name' => 'Lab1-PC03', 'model' => 'Lenovo ThinkCentre M920q', 'operating_system' => 'Windows 10 Pro', 'processor' => 'Intel Core i5-9400', 'memory' => 8, 'available' => false],
            ['id' => 4, 'computer_name' => 'Lab1-PC04', 'model' => 'Dell Optiplex 7090', 'operating_system' => 'Windows 10 Pro', 'processor' => 'Intel Core i5-11400', 'memory' => 8, 'available' => true],
            ['id' => 5, 'computer_name' => 'Lab1-PC05', 'model' => 'HP EliteDesk 800 G5', 'operating_system' => 'Windows 10 Pro', 'processor' => 'Intel Core i7-9700', 'memory' => 16, 'available' => true],
        ]);
    }
}
