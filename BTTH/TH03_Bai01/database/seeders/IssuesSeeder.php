<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IssuesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('issues')->insert([
            ['id' => 1, 'comment_id' => 1, 'reported_by' => 'John Doe', 'reported_date' => now(), 'description' => 'The computer is not turning on.', 'urgency' => 'High', 'status' => 'Open'],
            ['id' => 2, 'comment_id' => 2, 'reported_by' => 'Jane Smith', 'reported_date' => now(), 'description' => 'The screen flickers intermittently.', 'urgency' => 'Medium', 'status' => 'In Progress'],
            ['id' => 3, 'comment_id' => 3, 'reported_by' => 'Michael Brown', 'reported_date' => now(), 'description' => 'The keyboard is not responding.', 'urgency' => 'Low', 'status' => 'Resolved'],
            ['id' => 4, 'comment_id' => 4, 'reported_by' => 'Sarah Johnson', 'reported_date' => now(), 'description' => 'The mouse is not working properly.', 'urgency' => 'Medium', 'status' => 'Open'],
            ['id' => 5, 'comment_id' => 5, 'reported_by' => 'David Lee', 'reported_date' => now(), 'description' => 'The software crashes during use.', 'urgency' => 'High', 'status' => 'In Progress'],
        ]);
    }
}
