<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materials', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
        });

        Schema::create('material_translations', function(Blueprint $table)
        {
            $table->increments('id');
            $table->unsignedInteger('material_id');
            $table->string('name', 45)->unique();
            $table->string('locale', 2)->index();

            $table->unique(['material_id','locale']);
            $table->foreign('material_id')
                ->references('id')
                ->on('materials')
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
        Schema::dropIfExists('material_translations');
        Schema::dropIfExists('materials');
    }
}
