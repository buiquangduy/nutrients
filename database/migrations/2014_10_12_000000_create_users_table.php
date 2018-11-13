<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 191)->unique();
            $table->string('email', 191)->unique();
            $table->string('password');
            $table->integer('record_point');
            $table->integer('recorded_count');
            $table->string('firstname_kanji', 45);
            $table->string('lastname_kanji', 45);
            $table->string('firstname_katakana', 45);
            $table->string('lastname_katakana', 45);
            $table->date('dob');
            $table->tinyInteger('sex');
            $table->integer('country_id');
            $table->integer('province_id');
            $table->string('verify_code', 45);
            $table->integer('active');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
