<?php

use Illuminate\Database\Seeder;

class SeederForProduction extends Seeder
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
            CountriesSeeder::class,
            ProvincesSeeder::class,
            SettingsSeeder::class,
            AdminsTableSeeder::class,
        ]);
    }
}
