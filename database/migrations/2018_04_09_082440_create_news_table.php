<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('status');
            $table->dateTime('created_at');
        });

        Schema::create('news_translations', function(Blueprint $table)
        {
            $table->increments('id');
            $table->integer('news_id')->unsigned();
            $table->string('title', 191)->unique();
            $table->longText('content');
            $table->string('locale', 2)->index();

            $table->unique(['news_id','locale']);
            $table->foreign('news_id')
                ->references('id')
                ->on('news')
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
        Schema::dropIfExists('news_translations');
        Schema::dropIfExists('news');
    }
}
