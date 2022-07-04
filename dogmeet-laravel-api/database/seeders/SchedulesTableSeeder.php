<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//以下追加
use Illuminate\Support\Facades\DB;

class SchedulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $param = [
            'start_time' => '8:00',
            'end_time' => '9:30',
            'sunday' => '0',
            'monday' => '1',
            'tuesday' => '1',
            'wednesday' => '1',
            'thursday' => '1',
            'friday' => '1',
            'saturday' => '0',
        ];
        DB::table('schedules')->insert($param);
        $param = [
            'start_time' => '16:00',
            'end_time' => '17:30',
            'sunday' => '1',
            'monday' => '1',
            'tuesday' => '1',
            'wednesday' => '1',
            'thursday' => '1',
            'friday' => '1',
            'saturday' => '1',
        ];
        DB::table('schedules')->insert($param);

        $param = [
            'start_time' => '5:00',
            'end_time' => '7:00',
            'sunday' => '0',
            'monday' => '1',
            'tuesday' => '0',
            'wednesday' => '1',
            'thursday' => '1',
            'friday' => '1',
            'saturday' => '0',
        ];
        DB::table('schedules')->insert($param);
        $param = [
            'start_time' => '18:00',
            'end_time' => '18:30',
            'sunday' => '0',
            'monday' => '1',
            'tuesday' => '0',
            'wednesday' => '1',
            'thursday' => '1',
            'friday' => '1',
            'saturday' => '1',
        ];
        DB::table('schedules')->insert($param);

        $param = [
            'start_time' => '4:00',
            'end_time' => '5:00',
            'sunday' => '1',
            'monday' => '1',
            'tuesday' => '1',
            'wednesday' => '1',
            'thursday' => '1',
            'friday' => '1',
            'saturday' => '1',
        ];
        DB::table('schedules')->insert($param);
        $param = [
            'start_time' => '17:00',
            'end_time' => '18:30',
            'sunday' => '1',
            'monday' => '0',
            'tuesday' => '0',
            'wednesday' => '0',
            'thursday' => '0',
            'friday' => '0',
            'saturday' => '1',
        ];
        DB::table('schedules')->insert($param);
    }
}
