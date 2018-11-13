<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipeMethodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipe_methods', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });

        Schema::create('recipe_method_translations', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('recipe_method_id')->unsigned();
            $table->string('name', 45)->unique();
            $table->string('locale', 2)->index();

            $table->unique(['recipe_method_id','locale']);
            $table->foreign('recipe_method_id')
                ->references('id')
                ->on('recipe_methods')
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
        Schema::dropIfExists('recipe_method_translations');
        Schema::dropIfExists('recipe_methods');
    }
}
