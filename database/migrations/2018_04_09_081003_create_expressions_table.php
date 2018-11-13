<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExpressionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expressions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('count_choose')->default(0);
            $table->timestamps();
        });

        Schema::create('expression_translations', function(Blueprint $table)
        {
            $table->increments('id');
            $table->unsignedInteger('expression_id');
            $table->string('name', 45)->unique();
            $table->string('locale', 2)->index();

            $table->unique(['expression_id','locale']);
            $table->foreign('expression_id')
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
        Schema::dropIfExists('expression_translations');
        Schema::dropIfExists('expressions');
    }
}
