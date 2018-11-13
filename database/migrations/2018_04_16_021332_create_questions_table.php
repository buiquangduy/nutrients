<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->tinyInteger('lowest_level');
            $table->tinyInteger('highest_level');
            $table->boolean('is_required');

            $table->timestamps();
        });

        Schema::create('question_translations', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('question_id')->unsigned();
            $table->string('question_1', 191);
            $table->string('question_2', 191);
            $table->string('lowest_level_label', 10);
            $table->string('highest_level_label', 10);
            $table->string('locale', 2)->index();

            $table->unique(['question_id','locale']);
            $table->foreign('question_id')
                ->references('id')
                ->on('questions')
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
        Schema::dropIfExists('question_translations');
        Schema::dropIfExists('questions');
    }
}
