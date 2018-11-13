<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaterialsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('materials')->truncate();
        DB::table('material_translations')->truncate();

        DB::table('materials')->insert([
            [], [], [], [], [], [], [], [], []
        ]);

        DB::table('material_translations')->insert([
            [
                'material_id' => 1,
                'name' => 'Chicken',
                'locale' => 'en',
            ],
            [
                'material_id' => 1,
                'name' => '鶏肉',
                'locale' => 'ja',
            ],
            [
                'material_id' => 2,
                'name' => 'Fish',
                'locale' => 'en',
            ],
            [
                'material_id' => 2,
                'name' => 'しゃけ',
                'locale' => 'ja',
            ],
            [
                'material_id' => 3,
                'name' => 'Beef',
                'locale' => 'en',
            ],
            [
                'material_id' => 3,
                'name' => '牛肉',
                'locale' => 'ja',
            ],
            [
                'material_id' => 4,
                'name' => 'Herb',
                'locale' => 'en',
            ],
            [
                'material_id' => 4,
                'name' => 'ハーブ',
                'locale' => 'ja',
            ],
            [
                'material_id' => 5,
                'name' => 'Vegetable oil',
                'locale' => 'en',
            ],
            [
                'material_id' => 5,
                'name' => '植物油',
                'locale' => 'ja',
            ],
            [
                'material_id' => 6,
                'name' => 'seaweed',
                'locale' => 'en',
            ],
            [
                'material_id' => 6,
                'name' => '海藻',
                'locale' => 'ja',
            ],
            [
                'material_id' => 7,
                'name' => 'Condiment',
                'locale' => 'en',
            ],
            [
                'material_id' => 7,
                'name' => '薬味',
                'locale' => 'ja',
            ],
            [
                'material_id' => 8,
                'name' => 'seafood',
                'locale' => 'en',
            ],
            [
                'material_id' => 8,
                'name' => '魚介類',
                'locale' => 'ja',
            ],
            [
                'material_id' => 9,
                'name' => 'Drupe',
                'locale' => 'en',
            ],
            [
                'material_id' => 9,
                'name' => '核果類',
                'locale' => 'ja',
            ],
        ]);
    }
}
