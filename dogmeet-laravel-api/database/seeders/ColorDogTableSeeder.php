<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//以下追加
use Illuminate\Support\Facades\DB;

class ColorDogTableSeeder extends Seeder
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
            'color_id' => '4',
            'dog_id' => '1',
        ];
        DB::table('color_dog')->insert($param);
        $param = [
            'color_id' => '1',
            'dog_id' => '2',
        ];
        DB::table('color_dog')->insert($param);
        $param = [
            'color_id' => '3',
            'dog_id' => '3',
        ];
        DB::table('color_dog')->insert($param);
        $param = [
            'color_id' => '4',
            'dog_id' => '3',
        ];
        DB::table('color_dog')->insert($param);
        $param = [
            'color_id' => '4',
            'dog_id' => '4',
        ];
        DB::table('color_dog')->insert($param);
        $param = [
            'color_id' => '3',
            'dog_id' => '4',
        ];
        DB::table('color_dog')->insert($param);
        $param = [
            'color_id' => '5',
            'dog_id' => '5',
        ];
        DB::table('color_dog')->insert($param);
    }
}
