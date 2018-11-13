<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTastesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tastes', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });

        Schema::create('taste_translations', function(Blueprint $table)
        {
            $table->increments('id');
            $table->unsignedInteger('taste_id');
            $table->string('name', 45)->unique();
            $table->string('locale', 2)->index();

            $table->unique(['taste_id','locale']);
            $table->foreign('taste_id')
                ->references('id')
                ->on('tastes')
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
        Schema::dropIfExists('taste_translations');
        Schema::dropIfExists('tastes');
    }
}
