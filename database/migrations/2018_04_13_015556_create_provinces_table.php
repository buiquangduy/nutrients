<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvincesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provinces', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->unsignedInteger('country_id');

            $table->foreign('country_id')
                ->references('id')
                ->on('countries')
                ->onUpdate('cascade')
                ->onDelete('restrict');
        });

        Schema::create('provinces_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->unsignedInteger('country_id');

            $table->foreign('country_id')
                ->references('id')
                ->on('provinces_translations')
                ->onUpdate('cascade')
                ->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('provinces');
        Schema::dropIfExists('provinces_translations');
    }
}
