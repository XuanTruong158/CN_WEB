<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SalesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('sales')->insert([
            ['sale_id' => 1001, 'medicine_id' => 101, 'quantity' => 10, 'sale_date' => '2024-12-01 10:00:00', 'customer_phone' => '0123456789'],
            ['sale_id' => 1002, 'medicine_id' => 102, 'quantity' => 5, 'sale_date' => '2024-12-02 11:30:00', 'customer_phone' => '0987654321'],
            ['sale_id' => 1003, 'medicine_id' => 103, 'quantity' => 15, 'sale_date' => '2024-12-03 14:00:00', 'customer_phone' => '0112233445'],
            ['sale_id' => 1004, 'medicine_id' => 104, 'quantity' => 2, 'sale_date' => '2024-12-04 16:45:00', 'customer_phone' => '0223344556'],
            ['sale_id' => 1005, 'medicine_id' => 105, 'quantity' => 8, 'sale_date' => '2024-12-05 09:20:00', 'customer_phone' => '0334455667'],
        ]);
    }
}
