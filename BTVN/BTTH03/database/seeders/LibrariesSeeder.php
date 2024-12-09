<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LibrariesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('libraries')->insert([
            ['id' => 1, 'name' => 'Thư viện IT Đại học ABC', 'address' => '123 Đường X, Hà Nội', 'contact_number' => '0123456789'],
            ['id' => 2, 'name' => 'Thư viện Khoa học Máy tính Hà Nội', 'address' => '456 Đường Y, Hà Nội', 'contact_number' => '0987654321'],
            ['id' => 3, 'name' => 'Thư viện Khoa học Xã hội Đại học HCM', 'address' => '789 Đường Z, TP.HCM', 'contact_number' => '0912345678'],
            ['id' => 4, 'name' => 'Thư viện Đại học Bách Khoa Hà Nội', 'address' => '321 Đường W, Hà Nội', 'contact_number' => '0345678912'],
            ['id' => 5, 'name' => 'Thư viện Đại học FPT', 'address' => '654 Đường V, TP.HCM', 'contact_number' => '0123456789'],
        ]);
    }
}
