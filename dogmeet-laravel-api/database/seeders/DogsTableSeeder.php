<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//以下追加
use Illuminate\Support\Facades\DB;

class DogsTableSeeder extends Seeder
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
            'dog_name' => 'ポチ',
            'overview' => '茶色の柴犬。第一公園。',
            'birthday' => '2020-01-01',
            'sex' => '1',
            'thumbnail_path' => 'storage/images/test1.jpg',
            'area_id' => '1',
            'breed_id' => '76',
            'user_id' => '1',
        ];
        DB::table('dogs')->insert($param);
        $param = [
            'dog_name' => 'クロ',
            'overview' => '黒のトイプードル。第二公園',
            'birthday' => '2020-01-01',
            'sex' => '2',
            'thumbnail_path' => 'storage/images/test2.jpg',
            'area_id' => '2',
            'breed_id' => '18',
            'user_id' => '2',
        ];
        DB::table('dogs')->insert($param);
        $param = [
            'dog_name' => 'ジャック',
            'overview' => 'ジャックラッセルテリア。臨海公園',
            'birthday' => '2019-01-01',
            'sex' => '1',
            'thumbnail_path' => 'storage/images/test3.jpg',
            'area_id' => '3',
            'breed_id' => '8',
            'user_id' => '3',
        ];
        DB::table('dogs')->insert($param);
        $param = [
            'dog_name' => 'わさお',
            'overview' => '秋田犬。森林公園',
            'birthday' => '2020-01-01',
            'sex' => '1',
            'thumbnail_path' => 'storage/images/test4.jpg',
            'area_id' => '4',
            'breed_id' => '119',
            'user_id' => '1',
        ];
        DB::table('dogs')->insert($param);
        $param = [
            'dog_name' => 'ニコ',
            'overview' => 'ゴールデンレトリーバー。森林第二公園',
            'birthday' => '2020-01-01',
            'sex' => '2',
            'thumbnail_path' => 'storage/images/test5.jpg',
            'area_id' => '4',
            'breed_id' => '92',
            'user_id' => '1',
        ];
        DB::table('dogs')->insert($param);
    }
}
