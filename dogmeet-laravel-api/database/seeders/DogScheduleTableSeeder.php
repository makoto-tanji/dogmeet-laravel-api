<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//以下追加
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;

class DogScheduleTableSeeder extends Seeder
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
            'dog_id' => '1',
            'schedule_id' => '1',
            'meridian' => '1'
        ];
        DB::table('dog_schedule')->insert($param);
        $param = [
            'dog_id' => '1',
            'schedule_id' => '2',
            'meridian' => '2'
        ];
        DB::table('dog_schedule')->insert($param);

        $param = [
            'dog_id' => '2',
            'schedule_id' => '3',
            'meridian' => '1'
        ];
        DB::table('dog_schedule')->insert($param);
        $param = [
            'dog_id' => '2',
            'schedule_id' => '4',
            'meridian' => '2'
        ];
        DB::table('dog_schedule')->insert($param);

        $param = [
            'dog_id' => '3',
            'schedule_id' => '5',
            'meridian' => '1'
        ];
        DB::table('dog_schedule')->insert($param);
        $param = [
            'dog_id' => '3',
            'schedule_id' => '6',
            'meridian' => '2'
        ];
        DB::table('dog_schedule')->insert($param);
        $param = [
            'dog_id' => '4',
            'schedule_id' => '1',
            'meridian' => '1'
        ];
        DB::table('dog_schedule')->insert($param);
        $param = [
            'dog_id' => '4',
            'schedule_id' => '2',
            'meridian' => '2'
        ];
        DB::table('dog_schedule')->insert($param);
        $param = [
            'dog_id' => '5',
            'schedule_id' => '1',
            'meridian' => '1'
        ];
        DB::table('dog_schedule')->insert($param);
        $param = [
            'dog_id' => '5',
            'schedule_id' => '2',
            'meridian' => '2'
        ];
        DB::table('dog_schedule')->insert($param);

        if(App::environment('production')) {
            $param = [
                'dog_id' => '6',
                'schedule_id' => '7',
                'meridian' => '1'
            ];
            DB::table('dog_schedule')->insert($param);
            $param = [
                'dog_id' => '6',
                'schedule_id' => '8',
                'meridian' => '2'
            ];
            DB::table('dog_schedule')->insert($param);
            $param = [
                'dog_id' => '7',
                'schedule_id' => '7',
                'meridian' => '1'
            ];
            DB::table('dog_schedule')->insert($param);
            $param = [
                'dog_id' => '7',
                'schedule_id' => '8',
                'meridian' => '2'
            ];
            DB::table('dog_schedule')->insert($param);
        }
    }
}
