<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//以下追加
use Illuminate\Support\Facades\DB;

class AreasTableSeeder extends Seeder
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
            'area_name' => '第一公園',
        ];
        DB::table('areas')->insert($param);
        $param = [
            'area_name' => '第二公園',
        ];
        DB::table('areas')->insert($param);
        $param = [
            'area_name' => '臨海公園',
        ];
        DB::table('areas')->insert($param);
        $param = [
            'area_name' => '森林公園',
        ];
        DB::table('areas')->insert($param);
        $param = [
            'area_name' => '第二森林公園',
        ];
        DB::table('areas')->insert($param);
    }
}
