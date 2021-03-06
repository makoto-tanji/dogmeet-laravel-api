<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//以下追加
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;

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
            'thumbnail_path' => 'storage/images/shibaken-001.jpg',
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
            'thumbnail_path' => 'storage/images/toy-poodle-001.jpg',
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
            'thumbnail_path' => 'storage/images/jack-russell-terrier-001.jpg',
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
            'thumbnail_path' => 'storage/images/akitainu-001.jpg',
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
            'thumbnail_path' => 'storage/images/golden-retriever-001.jpg',
            'area_id' => '4',
            'breed_id' => '92',
            'user_id' => '1',
        ];
        DB::table('dogs')->insert($param);

        if(App::environment('production')) {
            $param = [
                'dog_name' => 'つむぎ',
                'overview' => '黒のダックスフント。性格はおとなしい。現在食事制限中',
                'birthday' => '2019-10-01',
                'sex' => '2',
                'thumbnail_path' => 'storage/images/dachshund-001.jpg',
                'area_id' => '4',
                'breed_id' => '11',
                'user_id' => '4',
            ];
            DB::table('dogs')->insert($param);
            $param = [
                'dog_name' => 'こぎ子',
                'overview' => "コーギー\nワンプロが好き",
                'birthday' => '2018-03-15',
                'sex' => '2',
                'thumbnail_path' => 'storage/images/welsh-corgi-001.jpg',
                'area_id' => '4',
                'breed_id' => '53',
                'user_id' => '4',
            ];
            DB::table('dogs')->insert($param);
        }
    }
}
