<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecipeCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recipe_categories')->truncate();
        DB::table('recipe_category_translations')->truncate();

        DB::table('recipe_categories')->insert([
            [], [], [], [], [], [], []
        ]);

        DB::table('recipe_category_translations')->insert([
            [
                'recipe_category_id' => 1,
                'name' => 'Main',
                'locale' => 'en',
            ],
            [
                'recipe_category_id' => 1,
                'name' => 'メイン',
                'locale' => 'ja',
            ],
            [
                'recipe_category_id' => 2,
                'name' => 'Sub',
                'locale' => 'en',
            ],
            [
                'recipe_category_id' => 2,
                'name' => '副菜',
                'locale' => 'ja',
            ],
            [
                'recipe_category_id' => 3,
                'name' => 'Staple food',
                'locale' => 'en',
            ],
            [
                'recipe_category_id' => 3,
                'name' => '主食',
                'locale' => 'ja',
            ],
            [
                'recipe_category_id' => 4,
                'name' => 'Soup stock',
                'locale' => 'en',
            ],
            [
                'recipe_category_id' => 4,
                'name' => '汁物',
                'locale' => 'ja',
            ],
            [
                'recipe_category_id' => 5,
                'name' => 'Dessert',
                'locale' => 'en',
            ],
            [
                'recipe_category_id' => 5,
                'name' => 'デザート',
                'locale' => 'ja',
            ],
            [
                'recipe_category_id' => 6,
                'name' => 'Salad',
                'locale' => 'en',
            ],
            [
                'recipe_category_id' => 6,
                'name' => 'サラダ',
                'locale' => 'ja',
            ],
            [
                'recipe_category_id' => 7,
                'name' => 'Drink',
                'locale' => 'en',
            ],
            [
                'recipe_category_id' => 7,
                'name' => '飲み物',
                'locale' => 'ja',
            ],
        ]);
    }
}
