<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RentersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('renters')->insert([
            ['id' => 201, 'name' => 'Nguyễn Văn A', 'phone_number' => '0987654321', 'email' => 'nva@gmail.com'],
            ['id' => 202, 'name' => 'Trần Thị B', 'phone_number' => '0912345678', 'email' => 'ttb@gmail.com'],
            ['id' => 203, 'name' => 'Lê Minh C', 'phone_number' => '0923456789', 'email' => 'lmc@gmail.com'],
            ['id' => 204, 'name' => 'Phạm Ngọc D', 'phone_number' => '0934567890', 'email' => 'pngd@gmail.com'],
            ['id' => 205, 'name' => 'Bùi Thị E', 'phone_number' => '0945678901', 'email' => 'bte@gmail.com'],
        ]);
    }
}
