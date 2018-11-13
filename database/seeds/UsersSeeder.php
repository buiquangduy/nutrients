<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        DB::table('users')->insert([
            'name' => 'Dev',
            'email' => 'dev@mail.com',
            'password' => bcrypt('123456'),
            'record_point' => 0,
            'recorded_count' => 0,
            'firstname_kanji' => '島津',
            'lastname_kanji' => '豊久',
            'firstname_katakana' => 'トヨヒサ',
            'lastname_katakana' => 'シマヅ',
            'dob' => '2018-07-07',
            'sex' => '1',
            'country_id' => 109,
            'province_id' => 1959,
            'verify_code' => 'abc123xyz456',
            'active' => 1,
        ]);
    }
}
