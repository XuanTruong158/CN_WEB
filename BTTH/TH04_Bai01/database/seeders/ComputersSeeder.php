<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class ComputersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    

    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 100) as $index) {
            DB::table('computers')->insert([
                'computer_name' =>  $faker->word(),
                'model' => $faker->word(),
                'operating_system' => $faker->word(),
                'processor' => $faker->word(),
                'memory' => $faker->randomElement([4, 8, 16, 32, 64, 128, 256]),
                'available' => $faker->boolean(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    
    }
}
