<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
//以下追加
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\App;

class BreedsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //小型犬
        $param = [
            'breed_name' => 'イタリアングレーハウンド',
            'size' => '1',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'ウエストハイランドホワイトテリア',
            'size' => '1',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'カニンヘンダックスフンド',
            'size' => '1',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'キャバリアキングチャールズスパニエル',
            'size' => '1',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'ケアーンテリア',
            'size' => '1',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'シーズー',
            'size' => '1',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'シーリハムテリア',
            'size' => '1',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'ジャックラッセルテリア',
            'size' => '1',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'スキッパーキー',
            'size' => '1',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'スコティッシュテリア',
            'size' => '1',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'スタンダードダックス',
            'size' => '1',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'チベタンスパニエル',
            'size' => '1',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'チベタンテリア',
            'size' => '1',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'チャイニーズクレステッドドッグ',
            'size' => '1',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'チワワ（スムースコート）',
            'size' => '1',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'チワワ（ロングコート）',
            'size' => '1',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'トイマンチェスターテリア',
            'size' => '1',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'トイプードル',
            'size' => '1',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'ノーフォークテリア',
            'size' => '1',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'パピヨン',
            'size' => '1',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'パーソンラッセルテリア',
            'size' => '1',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'ビジョンフリーゼ',
            'size' => '1',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'ブリュッセルグリフォン',
            'size' => '1',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'プチブラバンソン',
            'size' => '1',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'ベドリントンテリア',
            'size' => '1',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'ベルジアングリフォン',
            'size' => '1',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'ペキニーズ',
            'size' => '1',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'ボストンテリア',
            'size' => '1',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'ボロニーズ',
            'size' => '1',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'ボーダーテリア',
            'size' => '1',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'ポメラニアン',
            'size' => '1',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'マルチーズ',
            'size' => '1',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'ミニチュアシュナウザー',
            'size' => '1',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'ミニチュアダックスフンド',
            'size' => '1',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'ミニチュアピンシャー',
            'size' => '1',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'ミニチュアプードル',
            'size' => '1',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'ヨークシャーテリア',
            'size' => '1',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'ラサアプソ',
            'size' => '1',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'レークランドテリア',
            'size' => '1',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => '日本テリア',
            'size' => '1',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => '狆',
            'size' => '1',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => '豆柴',
            'size' => '1',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'ミックス(小型)',
            'size' => '1',
        ];
        DB::table('breeds')->insert($param);

        // 中型犬
        $param = [
            'breed_name' => 'アイリッシュテリア',
            'size' => '2',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'アメリカンスタッフォードシャーテリア',
            'size' => '2',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'アメリカンピットブルテリア',
            'size' => '2',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'アメリカン・コッカースパニエル',
            'size' => '2',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'イングリッシュコッカースパニエル',
            'size' => '2',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'イングリッシュスプリンガースパニエル',
            'size' => '2',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'ウィペット',
            'size' => '2',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'ウェルシュスプリンガースパニエル',
            'size' => '2',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'ウェルシュテリア',
            'size' => '2',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'ウェルシュコーギーカーディガン',
            'size' => '2',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'ウェルシュコーギーペンブローク',
            'size' => '2',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'オーストラリアンキャトルドッグ',
            'size' => '2',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'クランバースパニエル',
            'size' => '2',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'ケリーブルーテリア',
            'size' => '2',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'コーイケルホンディエ',
            'size' => '2',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'シェットランドシープドック',
            'size' => '2',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'スタッフォードシャーブルテリア',
            'size' => '2',
        ];
        $param = [
            'breed_name' => 'スタンダードダックス',
            'size' => '2',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'バセットハウンド',
            'size' => '2',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'バセンジー',
            'size' => '2',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'ビーグル',
            'size' => '2',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'フレンチブルドッグ',
            'size' => '2',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'ブリタニースパニエル',
            'size' => '2',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'ブルドッグ',
            'size' => '2',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'プチバセットグリフォンバンデーン',
            'size' => '2',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'プーリー',
            'size' => '2',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'ボーダーコリー',
            'size' => '2',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'ミディアムプードル',
            'size' => '2',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'ミニチュアブルテリア',
            'size' => '2',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'ワイアーフォックステリア',
            'size' => '2',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => '北海道犬',
            'size' => '2',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => '四国犬',
            'size' => '2',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => '日本スピッツ',
            'size' => '2',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => '柴犬',
            'size' => '2',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => '甲斐犬',
            'size' => '2',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'ミックス(中型)',
            'size' => '2',
        ];
        DB::table('breeds')->insert($param);

        // 大型犬
        $param = [
            'breed_name' => 'アイリッシュウルフハウンド',
            'size' => '3',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'アイリッシュセッター',
            'size' => '3',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'アフガンハウンド',
            'size' => '3',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'アラスカンマラミュート',
            'size' => '3',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'イングリッシュセター',
            'size' => '3',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'イングリッシュポインター',
            'size' => '3',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'エアデールテリア',
            'size' => '3',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'オーストラリアンシェパード',
            'size' => '3',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'オールドイングリッシュシープドック',
            'size' => '3',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'キースホンド',
            'size' => '3',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'グレートデン',
            'size' => '3',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'グレートピレニーズ',
            'size' => '3',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'コリー',
            'size' => '3',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'ゴールデンレトリーバー',
            'size' => '3',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'サモエド',
            'size' => '3',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'サルーキ',
            'size' => '3',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'シベリアンハスキー',
            'size' => '3',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'シャーペイ',
            'size' => '3',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'ジャイアントシュナウザー',
            'size' => '3',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'スタンダードプードル',
            'size' => '3',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'ダルメシアン',
            'size' => '3',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'チェサピークベイレトリバー',
            'size' => '3',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'チャウチャウ',
            'size' => '3',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'ドーベルマン',
            'size' => '3',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'ニューファンドランド',
            'size' => '3',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'バーニーズマウンテンドッグ',
            'size' => '3',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'ビアデットコリー',
            'size' => '3',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'フラットコーテッドレトリバー',
            'size' => '3',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'ブルテリア',
            'size' => '3',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'ベルジアンタービュレン',
            'size' => '3',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'ベルジアンマリノア',
            'size' => '3',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'ホワイトスイスシェパード',
            'size' => '3',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'ボクサー',
            'size' => '3',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'ボルゾイ',
            'size' => '3',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'ボルドーマスティフ',
            'size' => '3',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'ポーリッシュローランドシープドッグ',
            'size' => '3',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'ラフコリー',
            'size' => '3',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'ラブラドールレトリバー',
            'size' => '3',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'ロットワイラー',
            'size' => '3',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'ワイマラナー',
            'size' => '3',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => '秋田犬',
            'size' => '3',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => '紀州犬',
            'size' => '3',
        ];
        DB::table('breeds')->insert($param);
        $param = [
            'breed_name' => 'ミックス(大型)',
            'size' => '3',
        ];
        DB::table('breeds')->insert($param);
    }
}
