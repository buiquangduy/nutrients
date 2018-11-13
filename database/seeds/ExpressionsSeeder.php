<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExpressionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('expressions')->truncate();
        DB::table('expression_translations')->truncate();

        DB::table('expressions')->insert([
            [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [] , [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], []
        ]);

        DB::table('expression_translations')->insert([
            [
                'expression_id' => 1,
                'name' => 'Soft',
                'locale' => 'en',
            ],
            [
                'expression_id' => 1,
                'name' => 'アッサリ',
                'locale' => 'ja',
            ],
            [
                'expression_id' => 2,
                'name' => 'Hard',
                'locale' => 'en',
            ],
            [
                'expression_id' => 2,
                'name' => 'カチカチ',
                'locale' => 'ja',
            ],
            [
                'expression_id' => 3,
                'name' => 'Crunchy',
                'locale' => 'en',
            ],
            [
                'expression_id' => 3,
                'name' => 'サックリ',
                'locale' => 'ja',
            ],
            [
                'expression_id' => 4,
                'name' => 'Flabby',
                'locale' => 'en',
            ],
            [
                'expression_id' => 4,
                'name' => 'トロトロ',
                'locale' => 'ja',
            ],
            [
                'expression_id' => 5,
                'name' => 'Karatsu',
                'locale' => 'en',
            ],
            [
                'expression_id' => 5,
                'name' => 'カラッ',
                'locale' => 'ja',
            ],
            [
                'expression_id' => 6,
                'name' => 'Crisp',
                'locale' => 'en',
            ],
            [
                'expression_id' => 6,
                'name' => 'カリカリ',
                'locale' => 'ja',
            ],
            [
                'expression_id' => 7,
                'name' => 'Keen',
                'locale' => 'en',
            ],
            [
                'expression_id' => 7,
                'name' => 'キーン',
                'locale' => 'ja',
            ],
            [
                'expression_id' => 8,
                'name' => 'Gitogito',
                'locale' => 'en',
            ],
            [
                'expression_id' => 8,
                'name' => 'ギトギト',
                'locale' => 'ja',
            ],
            [
                'expression_id' => 9,
                'name' => 'Soft1',
                'locale' => 'en',
            ],
            [
                'expression_id' => 9,
                'name' => 'アッサリ1',
                'locale' => 'ja',
            ],
            [
                'expression_id' => 10,
                'name' => 'Hard1',
                'locale' => 'en',
            ],
            [
                'expression_id' => 10,
                'name' => 'カチカチ1',
                'locale' => 'ja',
            ],
            [
                'expression_id' => 11,
                'name' => 'Crunchy1',
                'locale' => 'en',
            ],
            [
                'expression_id' => 11,
                'name' => 'サックリ1',
                'locale' => 'ja',
            ],
            [
                'expression_id' => 12,
                'name' => 'Flabby1',
                'locale' => 'en',
            ],
            [
                'expression_id' => 12,
                'name' => 'トロトロ1',
                'locale' => 'ja',
            ],
            [
                'expression_id' => 13,
                'name' => 'Karatsu1',
                'locale' => 'en',
            ],
            [
                'expression_id' => 13,
                'name' => 'カラッ1',
                'locale' => 'ja',
            ],
            [
                'expression_id' => 14,
                'name' => 'Crisp1',
                'locale' => 'en',
            ],
            [
                'expression_id' => 14,
                'name' => 'カリカリ1',
                'locale' => 'ja',
            ],
            [
                'expression_id' => 15,
                'name' => 'Keen1',
                'locale' => 'en',
            ],
            [
                'expression_id' => 15,
                'name' => 'キーン1',
                'locale' => 'ja',
            ],
            [
                'expression_id' => 16,
                'name' => 'Gitogito1',
                'locale' => 'en',
            ],
            [
                'expression_id' => 16,
                'name' => 'ギトギト1',
                'locale' => 'ja',
            ],
            [
                'expression_id' => 17,
                'name' => 'Soft2',
                'locale' => 'en',
            ],
            [
                'expression_id' => 17,
                'name' => 'アッサリ2',
                'locale' => 'ja',
            ],
            [
                'expression_id' => 18,
                'name' => 'Hard2',
                'locale' => 'en',
            ],
            [
                'expression_id' => 18,
                'name' => 'カチカチ2',
                'locale' => 'ja',
            ],
            [
                'expression_id' => 19,
                'name' => 'Crunchy2',
                'locale' => 'en',
            ],
            [
                'expression_id' => 19,
                'name' => 'サックリ2',
                'locale' => 'ja',
            ],
            [
                'expression_id' => 20,
                'name' => 'Flabby2',
                'locale' => 'en',
            ],
            [
                'expression_id' => 20,
                'name' => 'トロトロ2',
                'locale' => 'ja',
            ],
            [
                'expression_id' => 21,
                'name' => 'Karatsu2',
                'locale' => 'en',
            ],
            [
                'expression_id' => 21,
                'name' => 'カラッ2',
                'locale' => 'ja',
            ],
            [
                'expression_id' => 22,
                'name' => 'Crisp2',
                'locale' => 'en',
            ],
            [
                'expression_id' => 22,
                'name' => 'カリカリ2',
                'locale' => 'ja',
            ],
            [
                'expression_id' => 23,
                'name' => 'Keen2',
                'locale' => 'en',
            ],
            [
                'expression_id' => 23,
                'name' => 'キーン2',
                'locale' => 'ja',
            ],
            [
                'expression_id' => 24,
                'name' => 'Gitogito2',
                'locale' => 'en',
            ],
            [
                'expression_id' => 24,
                'name' => 'ギトギト2',
                'locale' => 'ja',
            ],
            [
                'expression_id' => 25,
                'name' => 'Soft3',
                'locale' => 'en',
            ],
            [
                'expression_id' => 25,
                'name' => 'アッサリ3',
                'locale' => 'ja',
            ],
            [
                'expression_id' => 26,
                'name' => 'Hard3',
                'locale' => 'en',
            ],
            [
                'expression_id' => 26,
                'name' => 'カチカチ3',
                'locale' => 'ja',
            ],
            [
                'expression_id' => 27,
                'name' => 'Crunchy3',
                'locale' => 'en',
            ],
            [
                'expression_id' => 27,
                'name' => 'サックリ3',
                'locale' => 'ja',
            ],
            [
                'expression_id' => 28,
                'name' => 'Flabby3',
                'locale' => 'en',
            ],
            [
                'expression_id' => 28,
                'name' => 'トロトロ3',
                'locale' => 'ja',
            ],
            [
                'expression_id' => 29,
                'name' => 'Karatsu3',
                'locale' => 'en',
            ],
            [
                'expression_id' => 29,
                'name' => 'カラッ3',
                'locale' => 'ja',
            ],
            [
                'expression_id' => 30,
                'name' => 'Crisp3',
                'locale' => 'en',
            ],
            [
                'expression_id' => 30,
                'name' => 'カリカリ3',
                'locale' => 'ja',
            ],
            [
                'expression_id' => 31,
                'name' => 'Keen3',
                'locale' => 'en',
            ],
            [
                'expression_id' => 31,
                'name' => 'キーン3',
                'locale' => 'ja',
            ],
            [
                'expression_id' => 32,
                'name' => 'Gitogito3',
                'locale' => 'en',
            ],
            [
                'expression_id' => 32,
                'name' => 'ギトギト3',
                'locale' => 'ja',
            ],
            [
                'expression_id' => 33,
                'name' => 'Soft4',
                'locale' => 'en',
            ],
            [
                'expression_id' => 33,
                'name' => 'アッサリ4',
                'locale' => 'ja',
            ],
            [
                'expression_id' => 34,
                'name' => 'Hard4',
                'locale' => 'en',
            ],
            [
                'expression_id' => 34,
                'name' => 'カチカチ4',
                'locale' => 'ja',
            ],
            [
                'expression_id' => 35,
                'name' => 'Crunchy4',
                'locale' => 'en',
            ],
            [
                'expression_id' => 35,
                'name' => 'サックリ4',
                'locale' => 'ja',
            ],
            [
                'expression_id' => 36,
                'name' => 'Flabby4',
                'locale' => 'en',
            ],
            [
                'expression_id' => 36,
                'name' => 'トロトロ4',
                'locale' => 'ja',
            ],
            [
                'expression_id' => 37,
                'name' => 'Karatsu4',
                'locale' => 'en',
            ],
            [
                'expression_id' => 37,
                'name' => 'カラッ4',
                'locale' => 'ja',
            ],
            [
                'expression_id' => 38,
                'name' => 'Crisp4',
                'locale' => 'en',
            ],
            [
                'expression_id' => 38,
                'name' => 'カリカリ4',
                'locale' => 'ja',
            ],
            [
                'expression_id' => 39,
                'name' => 'Keen4',
                'locale' => 'en',
            ],
            [
                'expression_id' => 39,
                'name' => 'キーン4',
                'locale' => 'ja',
            ],
            [
                'expression_id' => 40,
                'name' => 'Gitogito4',
                'locale' => 'en',
            ],
            [
                'expression_id' => 40,
                'name' => 'ギトギト4',
                'locale' => 'ja',
            ],
        ]);
    }
}
