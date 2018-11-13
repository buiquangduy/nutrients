<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecipeCountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recipe_countries')->truncate();
        DB::table('recipe_country_translations')->truncate();

        DB::table('recipe_countries')->insert([
            [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], [], []
        ]);

        DB::table('recipe_country_translations')->insert([
            [
                'recipe_country_id' => 1,
                'name' => 'American food',
                'locale' => 'en',
            ],
            [
                'recipe_country_id' => 1,
                'name' => 'アメリカ料理',
                'locale' => 'ja',
            ],
            [
                'recipe_country_id' => 2,
                'name' => 'Arabic cuisine',
                'locale' => 'en',
            ],
            [
                'recipe_country_id' => 2,
                'name' => 'アラビア料理',
                'locale' => 'ja',
            ],
            [
                'recipe_country_id' => 3,
                'name' => 'Italian food',
                'locale' => 'en',
            ],
            [
                'recipe_country_id' => 3,
                'name' => 'イタリア料理',
                'locale' => 'ja',
            ],
            [
                'recipe_country_id' => 4,
                'name' => 'Indian cuisine',
                'locale' => 'en',
            ],
            [
                'recipe_country_id' => 4,
                'name' => 'インド料理',
                'locale' => 'ja',
            ],
            [
                'recipe_country_id' => 5,
                'name' => 'Egyptian food',
                'locale' => 'en',
            ],
            [
                'recipe_country_id' => 5,
                'name' => 'エジプト料理',
                'locale' => 'ja',
            ],
            [
                'recipe_country_id' => 6,
                'name' => 'Australian cuisine',
                'locale' => 'en',
            ],
            [
                'recipe_country_id' => 6,
                'name' => 'オーストラリア料理',
                'locale' => 'ja',
            ],
            [
                'recipe_country_id' => 7,
                'name' => 'Caribbean food',
                'locale' => 'en',
            ],
            [
                'recipe_country_id' => 7,
                'name' => 'カリブ料理',
                'locale' => 'ja',
            ],
            [
                'recipe_country_id' => 8,
                'name' => 'Korean cuisine',
                'locale' => 'en',
            ],
            [
                'recipe_country_id' => 8,
                'name' => '韓国料理',
                'locale' => 'ja',
            ],
            [
                'recipe_country_id' => 9,
                'name' => 'Singaporean food',
                'locale' => 'en',
            ],
            [
                'recipe_country_id' => 9,
                'name' => 'シンガポール料理',
                'locale' => 'ja',
            ],
            [
                'recipe_country_id' => 10,
                'name' => 'Spanish',
                'locale' => 'en',
            ],
            [
                'recipe_country_id' => 10,
                'name' => 'スペイン料理',
                'locale' => 'ja',
            ],
            [
                'recipe_country_id' => 11,
                'name' => 'Thai food',
                'locale' => 'en',
            ],
            [
                'recipe_country_id' => 11,
                'name' => 'タイ料理',
                'locale' => 'ja',
            ],
            [
                'recipe_country_id' => 12,
                'name' => 'Chinese cuisine',
                'locale' => 'en',
            ],
            [
                'recipe_country_id' => 12,
                'name' => '中華料理',
                'locale' => 'ja',
            ],
            [
                'recipe_country_id' => 13,
                'name' => 'Turkish food',
                'locale' => 'en',
            ],
            [
                'recipe_country_id' => 13,
                'name' => 'トルコ料理',
                'locale' => 'ja',
            ],
            [
                'recipe_country_id' => 14,
                'name' => 'South American cuisine',
                'locale' => 'en',
            ],
            [
                'recipe_country_id' => 14,
                'name' => '南米料理',
                'locale' => 'ja',
            ],
            [
                'recipe_country_id' => 15,
                'name' => 'Japanese food',
                'locale' => 'en',
            ],
            [
                'recipe_country_id' => 15,
                'name' => '日本料理',
                'locale' => 'ja',
            ],
            [
                'recipe_country_id' => 16,
                'name' => 'Nepalese food',
                'locale' => 'en',
            ],
            [
                'recipe_country_id' => 16,
                'name' => 'ネパール料理',
                'locale' => 'ja',
            ],
            [
                'recipe_country_id' => 17,
                'name' => 'Pakistani food',
                'locale' => 'en',
            ],
            [
                'recipe_country_id' => 17,
                'name' => 'パキスタン料理',
                'locale' => 'ja',
            ],
            [
                'recipe_country_id' => 18,
                'name' => 'French cuisine',
                'locale' => 'en',
            ],
            [
                'recipe_country_id' => 18,
                'name' => 'フランス料理',
                'locale' => 'ja',
            ],
            [
                'recipe_country_id' => 19,
                'name' => 'Vietnamese food',
                'locale' => 'en',
            ],
            [
                'recipe_country_id' => 19,
                'name' => 'ベトナム料理',
                'locale' => 'ja',
            ],
            [
                'recipe_country_id' => 20,
                'name' => 'Mexican food',
                'locale' => 'en',
            ],
            [
                'recipe_country_id' => 20,
                'name' => 'メキシコ料理',
                'locale' => 'ja',
            ],
            [
                'recipe_country_id' => 21,
                'name' => 'Malaysian cuisine',
                'locale' => 'en',
            ],
            [
                'recipe_country_id' => 21,
                'name' => 'マレーシア料理',
                'locale' => 'ja',
            ],
            [
                'recipe_country_id' => 22,
                'name' => 'Russian food',
                'locale' => 'en',
            ],
            [
                'recipe_country_id' => 22,
                'name' => 'ロシア料理',
                'locale' => 'ja',
            ],
        ]);
    }
}
