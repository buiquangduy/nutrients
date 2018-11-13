<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        $this->call([
            UsersSeeder::class,
            MaterialsSeeder::class,
            TastesSeeder::class,
            ExpressionsSeeder::class,
            RecipesSeeder::class,
            RecipeMethodsSeeder::class,
            RecipeCategoriesSeeder::class,
            RecipeCountriesSeeder::class,
            QuestionsSeeder::class,
            CountriesSeeder::class,
            ProvincesSeeder::class,
            SettingsSeeder::class,
            AdminsTableSeeder::class,
        ]);
    }
}
