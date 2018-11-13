<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecipeSurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('recipe_surveys', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('recipe_id')->unsigned();
            $table->tinyInteger('weight')->nullable();
            $table->text('colors')->nullable();
            $table->text('tastes');
            $table->text('expressions')->nullable();
            $table->text('countries')->nullable();
            $table->text('methods')->nullable();
            $table->text('categories')->nullable();
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onUpdate('cascade')
                ->onDelete('restrict');

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
        Schema::dropIfExists('recipe_surveys');
    }
}
