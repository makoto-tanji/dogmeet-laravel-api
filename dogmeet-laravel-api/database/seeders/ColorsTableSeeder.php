<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// 以下追加
use Illuminate\Support\Facades\DB;

class ColorsTableSeeder extends Seeder
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
            'color' => '黒'
        ];
        DB::table('colors')->insert($param);
        $param = [
            'color' => 'グレー'
        ];
        DB::table('colors')->insert($param);
        $param = [
            'color' => '白'
        ];
        DB::table('colors')->insert($param);
        $param = [
            'color' => '茶'
        ];
        DB::table('colors')->insert($param);
        $param = [
            'color' => '薄茶'
        ];
        DB::table('colors')->insert($param);
    }
}
