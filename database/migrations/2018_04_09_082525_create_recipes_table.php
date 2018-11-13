<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });

        Schema::create('recipe_translations', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('recipe_id')->unsigned();
            $table->string('name', 45)->unique();
            $table->string('locale', 2)->index();

            $table->unique(['recipe_id','locale']);
            $table->foreign('recipe_id')
                ->references('id')
                ->on('recipes')
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
        Schema::dropIfExists('recipe_translations');
        Schema::dropIfExists('recipes');
    }
}
