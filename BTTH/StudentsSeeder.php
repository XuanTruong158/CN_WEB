<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert([
            ['id' => 1, 'first_name' => 'John', 'last_name' => 'Doe', 'date_of_birth' => '2010-05-15', 'parent_phone' => '0123456789', 'class_id' => 1],
            ['id' => 2, 'first_name' => 'Jane', 'last_name' => 'Smith', 'date_of_birth' => '2011-03-22', 'parent_phone' => '0987654321', 'class_id' => 2],
            ['id' => 3, 'first_name' => 'Emily', 'last_name' => 'Johnson', 'date_of_birth' => '2010-07-10', 'parent_phone' => '0123123123', 'class_id' => 3],
            ['id' => 4, 'first_name' => 'Michael', 'last_name' => 'Brown', 'date_of_birth' => '2012-01-05', 'parent_phone' => '0987878787', 'class_id' => 4],
            ['id' => 5, 'first_name' => 'Sarah', 'last_name' => 'Davis', 'date_of_birth' => '2011-11-25', 'parent_phone' => '0123456780', 'class_id' => 5],
        ]);
    }
}
