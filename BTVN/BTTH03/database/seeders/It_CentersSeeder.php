<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class It_CentersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('it_centers')->insert([
            ['id' => 401, 'name' => 'Trung tâm Tin học ABC', 'location' => '456 Đường Y, TP.HCM', 'contact_email' => 'contact@abc.com'],
            ['id' => 402, 'name' => 'Trung tâm Tin học XYZ', 'location' => '789 Đường Z, TP.HCM', 'contact_email' => 'contact@xyz.com'],
        ]);
    }
}
