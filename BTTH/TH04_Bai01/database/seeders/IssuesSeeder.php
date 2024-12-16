<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class IssuesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $cp_id = DB::table('computers')->pluck('id')->toArray();

        foreach(range(1,120) as $index){
            DB::table('issues')->insert([
                'computer_id' => $faker->randomElement($cp_id),
                'reported_by' => $faker->name(),
                'reported_date' => $faker->dateTimeThisYear(),
                'description' => $faker->text(),
                'urgency' => $faker->randomElement(['Low', 'Medium', 'High']),
                'status' => $faker->randomElement(['Open', 'In Progress', 'Resolved']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
