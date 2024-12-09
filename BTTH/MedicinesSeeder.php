<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicinesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('medicines')->insert([
            ['medicine_id' => 101, 'name' => 'Paracetamol', 'brand' => 'Panadol', 'dosage' => '500mg', 'form' => 'Viên nén', 'price' => 2.50, 'stock' => 100],
            ['medicine_id' => 102, 'name' => 'Ibuprofen', 'brand' => 'Advil', 'dosage' => '200mg', 'form' => 'Viên nang', 'price' => 5.00, 'stock' => 50],
            ['medicine_id' => 103, 'name' => 'Amoxicillin', 'brand' => 'Mekophar', 'dosage' => '250mg', 'form' => 'Viên nang', 'price' => 3.20, 'stock' => 75],
            ['medicine_id' => 104, 'name' => 'Cough Syrup', 'brand' => 'Prospan', 'dosage' => '100ml', 'form' => 'Xi-rô', 'price' => 6.00, 'stock' => 40],
            ['medicine_id' => 105, 'name' => 'Vitamin C', 'brand' => 'Redoxon', 'dosage' => '500mg', 'form' => 'Viên sủi', 'price' => 4.50, 'stock' => 60],
        ]);
    }
}
