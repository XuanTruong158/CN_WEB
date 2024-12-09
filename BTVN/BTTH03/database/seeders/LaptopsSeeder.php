<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LaptopsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('laptops')->insert([
            ['id' => 1, 'brand' => 'Dell', 'model' => 'XPS 13', 'specifications' => 'Intel i7, 16GB RAM, 512GB SSD', 'rental_status' => true, 'renter_id' => 201],
            ['id' => 2, 'brand' => 'HP', 'model' => 'Pavilion 15', 'specifications' => 'Intel i5, 8GB RAM, 256GB SSD', 'rental_status' => false, 'renter_id' => 202],
            ['id' => 3, 'brand' => 'Lenovo', 'model' => 'ThinkPad X1', 'specifications' => 'Intel i7, 16GB RAM, 1TB SSD', 'rental_status' => true, 'renter_id' => 203],
            ['id' => 4, 'brand' => 'Apple', 'model' => 'MacBook Pro', 'specifications' => 'Apple M1, 8GB RAM, 256GB SSD', 'rental_status' => false, 'renter_id' => 204],
            ['id' => 5, 'brand' => 'Asus', 'model' => 'ZenBook 14', 'specifications' => 'Intel i5, 8GB RAM, 512GB SSD', 'rental_status' => true, 'renter_id' => 205],
        ]);
    }
}
