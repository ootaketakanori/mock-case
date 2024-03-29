<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttendancesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // AttendancesTableSeeder.php
        // AttendancesTableSeeder.php
        $param = [
            'user_id' => 1,
            'date' => '2021-03-22',
            'start_time' => '2021-03-22 09:23:00',  // 正しい datetime フォーマット
        ];
        DB::table('attendances')->insert($param);
    }
}
