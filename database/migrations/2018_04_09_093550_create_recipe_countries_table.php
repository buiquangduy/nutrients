<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipeCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipe_countries', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });

        Schema::create('recipe_country_translations', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('recipe_country_id')->unsigned();
            $table->string('name', 45)->unique();
            $table->string('locale', 2)->index();

            $table->unique(['recipe_country_id','locale']);
            $table->foreign('recipe_country_id')
                ->references('id')
                ->on('recipe_countries')
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
        Schema::dropIfExists('recipe_country_translations');
        Schema::dropIfExists('recipe_countries');
    }
}
