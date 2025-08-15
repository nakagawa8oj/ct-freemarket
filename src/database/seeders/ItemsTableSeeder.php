<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
           $param = [
        'itemimage' => 'storage/app/public/itemimages/coachtech_watch.jpg',
        'itemtitle' => '腕時計',
    ];
    DB::table('items')->insert($param);
   $param = [
        'itemimage' => 'storage/app/public/itemimages/coachtech_hdd.jpg',
        'itemtitle' => 'HDD',
    ];
    DB::table('items')->insert($param);
   $param = [
        'itemimage' => 'storage/app/public/itemimages/coachtech_onion.jpg',
        'itemtitle' => '玉ねぎ3束',
    ];
    DB::table('items')->insert($param);
   $param = [
        'itemimage' => 'storage/app/public/itemimages/coachtech_mensshoes.jpg',
        'itemtitle' => '革靴',
    ];
    DB::table('items')->insert($param);
   $param = [
        'itemimage' => 'storage/app/public/itemimages/coachtech_laptop.jpg',
        'itemtitle' => 'ノートPC',
    ];
    DB::table('items')->insert($param);
   $param = [
        'itemimage' => 'storage/app/public/itemimages/coachtech_mic.jpg',
        'itemtitle' => 'マイク',
    ];
    DB::table('items')->insert($param);
   $param = [
        'itemimage' => 'storage/app/public/itemimages/coachtech_purse.jpg',
        'itemtitle' => 'ショルダーバッグ',
    ];
    DB::table('items')->insert($param);
   $param = [
        'itemimage' => 'storage/app/public/itemimages/coachtech_tumbler.jpg',
        'itemtitle' => 'タンブラー',
    ];
    DB::table('items')->insert($param);
   $param = [
        'itemimage' => 'storage/app/public/itemimages/coachtech_coffeegrinder.jpg',
        'itemtitle' => 'コーヒーミル',
    ];
    DB::table('items')->insert($param);
   $param = [
        'itemimage' => 'storage/app/public/itemimages/coachtech_cosmeset.jpg',
        'itemtitle' => 'メイクセット',
    ];
    DB::table('items')->insert($param);
    }
}
