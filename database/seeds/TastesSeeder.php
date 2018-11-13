<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TastesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tastes')->truncate();
        DB::table('taste_translations')->truncate();

        DB::table('tastes')->insert([
            [], [], [], [], []
        ]);

        DB::table('taste_translations')->insert([
            [
                'taste_id' => 1,
                'name' => 'Sweet',
                'locale' => 'en',
            ],
            [
                'taste_id' => 1,
                'name' => '甘い',
                'locale' => 'ja',
            ],
            [
                'taste_id' => 2,
                'name' => 'Spice',
                'locale' => 'en',
            ],
            [
                'taste_id' => 2,
                'name' => '辛い',
                'locale' => 'ja',
            ],
            [
                'taste_id' => 3,
                'name' => 'Sour',
                'locale' => 'en',
            ],
            [
                'taste_id' => 3,
                'name' => '酸い',
                'locale' => 'ja',
            ],
            [
                'taste_id' => 4,
                'name' => 'Bitter',
                'locale' => 'en',
            ],
            [
                'taste_id' => 4,
                'name' => '苦い',
                'locale' => 'ja',
            ],
            [
                'taste_id' => 5,
                'name' => 'Salty',
                'locale' => 'en',
            ],
            [
                'taste_id' => 5,
                'name' => '塩辛い',
                'locale' => 'ja',
            ],
        ]);
    }
}
