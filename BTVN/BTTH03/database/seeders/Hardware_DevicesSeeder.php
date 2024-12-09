<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Hardware_DevicesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hardware_devices')->insert([
            ['id' => 3001, 'device_name' => 'Logitech G502', 'type' => 'Mouse', 'status' => true, 'center_id' => 401],
            ['id' => 3002, 'device_name' => 'Razer BlackWidow', 'type' => 'Keyboard', 'status' => true, 'center_id' => 401],
            ['id' => 3003, 'device_name' => 'SteelSeries Arctis 7', 'type' => 'Headset', 'status' => false, 'center_id' => 402],
            ['id' => 3004, 'device_name' => 'Logitech G Pro', 'type' => 'Mouse', 'status' => true, 'center_id' => 402],
            ['id' => 3005, 'device_name' => 'Corsair K95 RGB', 'type' => 'Keyboard', 'status' => true, 'center_id' => 401],
        ]);
    }
}
