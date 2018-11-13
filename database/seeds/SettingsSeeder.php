<?php

use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->truncate();

        DB::table('settings')->insert([
            'id' => 1,
            'key' => 'alpha', // DO NOT REMOVE OR CHANGE THIS KEY NAME
            'value' => 50,
        ]);
    }
}
