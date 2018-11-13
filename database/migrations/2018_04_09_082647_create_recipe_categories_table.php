<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipeCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipe_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });

        Schema::create('recipe_category_translations', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('recipe_category_id')->unsigned();
            $table->string('name', 45)->unique();
            $table->string('locale', 2)->index();

            $table->unique(['recipe_category_id','locale']);
            $table->foreign('recipe_category_id')
                ->references('id')
                ->on('recipe_categories')
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
        Schema::dropIfExists('recipe_category_translations');
        Schema::dropIfExists('recipe_categories');
    }
}
